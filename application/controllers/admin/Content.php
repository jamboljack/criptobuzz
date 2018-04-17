<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/content_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/master/content_view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->content_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row     = array();
            $menu_id = $r->menu_id;
            $row[]   = '  <a title="Edit Data" href="javascript:void(0)" onclick="edit_data(' . "'" . $menu_id . "'" . ')">
                        <i class="icon-pencil"></i>
                        </a>';
            $row[]  = $no;
            $row[]  = $r->menu_title;
            $row[]  = $r->menu_desc;
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->content_m->count_all(),
            "recordsFiltered" => $this->content_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function savedata()
    {
        $this->content_m->insert_data();
    }

    public function get_data($id)
    {
        $data = $this->content_m->select_by_id($id)->row();
        echo json_encode($data);
    }

    public function updatedata()
    {
        $this->content_m->update_data();
    }
}
/* Location: ./application/controller/admin/Content.php */
