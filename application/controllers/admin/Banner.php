<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/banner_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/master/banner_view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->banner_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row       = array();
            $banner_id = $r->banner_id;
            $row[]     = '  <a title="Edit Data" href="javascript:void(0)" onclick="edit_data(' . "'" . $banner_id . "'" . ')">
                        <i class="icon-pencil"></i>
                        </a>
                        <a onclick="hapusData(' . $banner_id . ')" title="Delete Data">
                            <i class="icon-close"></i>
                        </a>';

            $row[] = $no;
            $row[] = $r->banner_name;
            $row[] = $r->banner_url;
            $row[] = '<img src=' . base_url('img/banner_folder/' . $r->banner_image) . ' width="50%">';

            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->banner_m->count_all(),
            "recordsFiltered" => $this->banner_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function savedata()
    {
        $jam                     = time();
        $config['file_name']     = 'Banner_' . $jam . '.jpg';
        $config['upload_path']   = './img/banner_folder/';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['overwrite']     = true;
        $config['max_size']      = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->load->library('image_lib');
        if (!$this->upload->do_upload('foto')) {
            $response['status'] = 'error';
        } else {
            $upload      = $this->upload->do_upload('foto');
            $upload_data = $this->upload->data();
            $this->banner_m->insert_data();
            $response['status'] = 'success';
        }

        echo json_encode($response);
    }

    public function get_data($id)
    {
        $data = $this->banner_m->select_by_id($id)->row();
        echo json_encode($data);
    }

    public function updatedata()
    {
        if (!empty($_FILES['foto']['name'])) {
            $jam                     = time();
            $config['file_name']     = 'Banner_' . $jam . '.jpg';
            $config['upload_path']   = './img/banner_folder/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['overwrite']     = true;
            $config['max_size']      = 0;
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->load->library('image_lib');
            if (!$this->upload->do_upload('foto')) {
                $response['status'] = 'error';
            } else {
                $upload      = $this->upload->do_upload('foto');
                $upload_data = $this->upload->data();
                $this->banner_m->update_data();
                $response['status'] = 'success';
            }
        } else {
            $this->banner_m->update_data();
            $response['status'] = 'success';
        }
        echo json_encode($response);
    }

    public function deletedata($id)
    {
        $this->banner_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Banner.php */
