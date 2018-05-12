<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tags extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('tags_m');
    }

    public function index()
    {
        redirect(site_url('my_error'));
    }

    public function category($tags_seo, $offset = 0)
    {
        if (empty($tags_seo)) {
            redirect(site_url('my_error'));
        } else {
            $data['listRecomend']     = $this->tags_m->select_recomended()->result();
            $data['listMost']         = $this->tags_m->select_most_popular()->result();
            $config['uri_segment']    = 3;
            $config['base_url']       = site_url() . 'tags/category';
            $config['total_rows']     = $this->tags_m->count_all($tags_seo);
            $config['per_page']       = 10;
            $config['full_tag_open']  = '<div class="pagi text-center"><ul class="pagination">';
            $config['full_tag_close'] = '</ul></div>';
            $config['prev_link']      = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open']  = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link']      = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open']  = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open']   = '<li class="active">';
            $config['cur_tag_close']  = '</li>';
            $config['num_tag_open']   = '<li>';
            $config['num_tag_close']  = '</li>';
            $config["num_links"]      = round($config["total_rows"] / $config["per_page"]);
            $this->pagination->initialize($config);
            $data['pages']       = $this->pagination->create_links();
            $data['listArticle'] = $this->tags_m->select_article($config['per_page'], $offset, $tags_seo)->result();
            $this->template_front->display('front/tags_view', $data);
        }
    }
}
/* Location: ./application/controller/Tags.php */
