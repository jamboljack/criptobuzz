<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ico extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
    }

    public function index()
    {
        $this->template_front->display('front/ico_view');
    }
}
/* Location: ./application/controller/Ico.php */
