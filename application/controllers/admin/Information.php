<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Information extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/information_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/master/information_view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->information_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row     = array();
            $information_id = $r->information_id;
            $row[]   = '  <a title="Edit Data" href="javascript:void(0)" onclick="edit_data(' . "'" . $information_id . "'" . ')">
                        <i class="icon-pencil"></i>
                        </a>
                        <a onclick="hapusData(' . $information_id . ')" title="Delete Data">
                            <i class="icon-close"></i>
                        </a>';
            $row[]  = $no;
            $row[]  = $r->information_title;
            $row[]  = $r->information_subtitle;
            $row[]  = '<i class="'.$r->information_icon.'"></i>';
            $row[]  = $r->information_desc;
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->information_m->count_all(),
            "recordsFiltered" => $this->information_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function savedata()
    {
        $this->information_m->insert_data();
    }

    public function get_data($id)
    {
        $data = $this->information_m->select_by_id($id)->row();
        echo json_encode($data);
    }

    public function updatedata()
    {
        $this->information_m->update_data();
    }

    public function deletedata($id)
    {
        $this->information_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Information.php */
