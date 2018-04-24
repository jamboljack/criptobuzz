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
        $data['listRecomend'] = $this->article_m->select_recomended($article_seo)->result();
        $data['listMost']     = $this->article_m->select_most_popular($article_seo)->result();
        $data['detail']       = $this->article_m->select_by_id($article_seo)->row();
        $data['editor']       = $this->article_m->select_editor_by_id($article_seo)->row();
        $this->template_front->display('front/article_view', $data);
    }
}
/* Location: ./application/controller/Article.php */
