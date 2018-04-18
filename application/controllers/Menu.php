<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
    }

    public function post($menu_seo)
    {
        $data['detail'] = $this->menu_m->select_detail($menu_seo)->row();
        $this->template_front->display('front/menu_view', $data);
    }
}
/* Location: ./application/controller/Menu.php */
