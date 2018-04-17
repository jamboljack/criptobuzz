<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_error extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_login');
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $this->template_login->display('404_view');
    }
}
/* Location: ./application/controller/My_error.php */
