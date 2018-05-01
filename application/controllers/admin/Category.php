<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/category_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $data['listMain']     = $this->db->get('cripto_maincategory')->result();
            $this->template->display('admin/master/category_view', $data);
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function view_subcategory()
    {
        $data['listSubcategory'] = $this->category_m->select_subcategory($this->uri->segment(4));
        $this->load->view('admin/master/drop_down_subcategory_view', $data);
    }

    public function data_list()
    {
        $List = $this->category_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row         = array();
            $category_id = $r->category_id;

            $row[] = '  <a title="Edit Data" href="javascript:void(0)" onclick="edit_data(' . "'" . $category_id . "'" . ')">
                        <i class="icon-pencil"></i>
                        </a>
                        <a onclick="hapusData(' . $category_id . ')" title="Delete Data">
                            <i class="icon-close"></i>
                        </a>';

            $row[] = $no;
            $row[] = $r->maincategory_name;
            $row[] = $r->subcategory;
            $row[] = $r->category_name;
            $row[] = $r->category_level;

            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->category_m->count_all(),
            "recordsFiltered" => $this->category_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function savedata()
    {
        $this->category_m->insert_data();
    }

    public function get_data($id)
    {
        $data = $this->category_m->select_by_id($id)->row();
        echo json_encode($data);
    }

    public function get_data_subcategory($category_id)
    {
        $datax = $this->category_m->select_subcategory_by_id($category_id)->row();
        echo json_encode($datax);
    }

    public function updatedata()
    {
        $this->category_m->update_data();
    }

    public function deletedata($id)
    {
        $this->category_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Category.php */
