<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }
        $this->load->library('template');
        $this->load->model('admin/contact_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $data['detail'] = $this->contact_m->select_detail()->row();
            $this->template->display('admin/master/contact_view', $data);
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function updatedata()
    {
        if (!empty($_FILES['foto']['name'])) {
            $jam                     = time();
            $name                    = seo_title(strtolower(stripHTMLtags($this->input->post('name', 'true'))));
            $config['file_name']     = 'Contact_' . $name . '_' . $jam . '.jpg';
            $config['upload_path']   = './img/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['overwrite']     = true;
            $config['max_size']      = 0;
            $this->load->library('upload');
            $this->upload->initialize($config);
            // Resize
            $configThumb                   = array();
            $configThumb['image_library']  = 'gd2';
            $configThumb['source_image']   = '';
            $configThumb['maintain_ratio'] = true;
            $configThumb['overwrite']      = true;
            $configThumb['width']          = 150;
            $configThumb['height']         = 100;
            $this->load->library('image_lib');

            if (!$this->upload->do_upload('foto')) {
                $response['status'] = 'error';
            } else {
                $upload                      = $this->upload->do_upload('foto');
                $upload_data                 = $this->upload->data();
                $name_array[]                = $upload_data['file_name'];
                $configThumb['source_image'] = $upload_data['full_path'];
                $this->image_lib->initialize($configThumb);
                $this->image_lib->resize();

                $this->contact_m->update_data();
                $response['status'] = 'success';
            }
        } else {
            $this->contact_m->update_data();
            $response['status'] = 'success';
        }

        echo json_encode($response);
    }
}
/* Location: ./application/controller/Contact.php */
