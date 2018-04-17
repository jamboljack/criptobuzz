<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Privacy extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('privacy_m');
    }

    public function index()
    {
        $data['setting']    = $this->privacy_m->select_setting()->row(); // Title
        $data['listSocial'] = $this->privacy_m->select_social()->result(); // Social
        $data['detail']     = $this->privacy_m->select_detail()->row();
        $this->template_front->display('privacy_view', $data);
    }
}
/* Location: ./application/controller/Privacy.php */
