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
            $data['article']   = $this->home_m->select_article()->row();
            $data['science']   = $this->home_m->select_science()->row();
            $data['subscribe'] = $this->home_m->select_subcscribe()->row();
            $data['member']    = $this->home_m->select_member()->row();
            $this->template->display('admin/home_view', $data);
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
}
/* Location: ./application/controller/admin/Home.php */
