<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Science extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/science_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/science/view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->science_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row        = array();
            $science_id = $r->science_id;
            $link       = site_url('admin/science/editdata/' . $r->science_id);
            $row[]      = ' <a href="' . $link . '" title="Edit Data"><i class="icon-pencil"></i></a>
                            <a onclick="hapusData(' . $science_id . ')" title="Delete Data">
                                <i class="icon-close"></i>
                            </a>';
            $row[]  = $no;
            $row[]  = date('d-m-Y', strtotime($r->science_post));
            $row[]  = $r->science_title;
            $row[]  = '<embed src="https://www.youtube.com/embed/' . $r->science_url . '" width="200">';
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->science_m->count_all(),
            "recordsFiltered" => $this->science_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function adddata()
    {
        $this->template->display('admin/science/add');
    }

    public function savedata()
    {
        $this->science_m->insert_data();
    }

    public function editdata($science_id)
    {
        $data['detail']       = $this->science_m->select_by_id($science_id)->row();
        $this->template->display('admin/science/edit', $data);
    }

    public function updatedata()
    {
        $this->science_m->update_data();
    }

    public function deletedata($id)
    {
        $this->science_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Science.php */
