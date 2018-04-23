<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('article_m');
    }

    public function index($maincategory_seo, $offset = 0)
    {
        redirect(site_url('my_error'));
    }

    public function detail($article_seo)
    {
        
    }
}
/* Location: ./application/controller/Article.php */
