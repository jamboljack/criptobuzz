<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('profil_m');
    }

    public function index()
    {
        $user_username  = $this->session->userdata('username_member');
        $data['detail'] = $this->db->get_where('cripto_users', array('user_username' => $user_username))->row();
        $this->template_front->display('front/profil_view', $data);
    }

    public function updatedata()
    {
        $username = $this->session->userdata('username_member');
        if (!empty($_FILES['foto']['name'])) {
            $jam                     = time();
            $config['file_name']     = 'Avatar_' . $username . '_' . $jam . '.jpg';
            $config['upload_path']   = './img/icon/';
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
            $configThumb['height']         = 200;
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

                $this->profil_m->update_data($username);
                $response['status'] = 'success';
            }
        } else {
            $this->profil_m->update_data($username);
            $response['status'] = 'success';
        }

        echo json_encode($response);
    }
}
/* Location: ./application/controller/Profil.php */
