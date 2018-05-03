<?php
defined('BASEPATH') or exit('No direct script access allowed');

class COmment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/comment_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/comment/view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->comment_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row        = array();
            $comment_id = $r->comment_id;
            $row[]      = '  <a title="Reply" href="javascript:void(0)" onclick="edit_data(' . "'" . $comment_id . "'" . ')">
                        <i class="icon-action-redo"></i>
                        </a>
                        <a onclick="hapusData(' . $comment_id . ')" title="Delete">
                            <i class="icon-close"></i>
                        </a>';

            $row[]  = $no;
            $row[]  = date('d-m-Y', strtotime($r->comment_post));
            $row[]  = $r->user_username;
            $row[]  = $r->article_title;
            $row[]  = $r->comment_desc;
            $row[]  = ($r->comment_status==1?'No Reply':'Reply');
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->comment_m->count_all(),
            "recordsFiltered" => $this->comment_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function get_data($id)
    {
        $data = $this->comment_m->select_by_id($id)->row();
        echo json_encode($data);
    }

    public function replydata()
    {

        $this->comment_m->reply_data();
    }

    public function deletedata($id)
    {
        $this->comment_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Comment.php */
