<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscribe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/subscribe_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/master/subscribe_view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->subscribe_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row          = array();
            $subscribe_id = $r->subscribe_id;
            $row[]        = '  <a onclick="hapusData(' . $subscribe_id . ')" title="Delete Data">
                        <i class="icon-close"></i>
                        </a>';
            $row[]  = $no;
            $row[]  = date('d-m-Y', strtotime($r->subscribe_date));
            $row[]  = $r->subscribe_email;
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->subscribe_m->count_all(),
            "recordsFiltered" => $this->subscribe_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function deletedata($id)
    {
        $this->subscribe_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Subscribe.php */
