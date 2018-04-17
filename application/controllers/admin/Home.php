<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/home_m');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            // $data['education']  = $this->home_m->select_education()->row();
            // $data['experience'] = $this->home_m->select_experience()->row();
            // $data['skill']      = $this->home_m->select_skill()->row();
            // $data['work']       = $this->home_m->select_work()->row();
            $this->template->display('admin/home_view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
}
/* Location: ./application/controller/admin/Home.php */
