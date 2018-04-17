<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maincategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/maincategory_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/master/maincategory_view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->maincategory_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row       = array();
            $maincategory_id = $r->maincategory_id;

            $row[] = '  <a title="Edit Data" href="javascript:void(0)" onclick="edit_data(' . "'" . $maincategory_id . "'" . ')">
                        <i class="icon-pencil"></i>
                        </a>
                        <a onclick="hapusData(' . $maincategory_id . ')" title="Delete Data">
                            <i class="icon-close"></i>
                        </a>';

            $row[] = $no;
            $row[] = $r->maincategory_name;

            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->maincategory_m->count_all(),
            "recordsFiltered" => $this->maincategory_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function savedata()
    {
        $this->maincategory_m->insert_data();
    }

    public function get_data($id)
    {
        $data = $this->maincategory_m->select_by_id($id)->row();
        echo json_encode($data);
    }

    public function updatedata()
    {
        $this->maincategory_m->update_data();
    }

    public function deletedata($id)
    {
        $this->maincategory_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Maincategory.php */
