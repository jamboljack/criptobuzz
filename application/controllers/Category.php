<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('category_m');
    }

    public function index($maincategory_seo, $offset = 0)
    {
        $offset                   = $this->uri->segment(4);
        $data['listRecomend']     = $this->category_m->select_recomended($maincategory_seo)->result();
        $data['listMost']         = $this->category_m->select_most_popular($maincategory_seo)->result();
        $config['uri_segment']    = 4;
        $config['base_url']       = site_url() . 'category/'.$maincategory_seo.'/page';
        $config['total_rows']     = $this->category_m->count_all($maincategory_seo);
        $config['per_page']       = 15;
        $config['full_tag_open']  = '<div class="pagi text-center"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';
        $config['prev_link']      = '<i class="fa fa-chevron-left"></i>';
        $config['prev_tag_open']  = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link']      = '<i class="fa fa-chevron-right"></i>';
        $config['next_tag_open']  = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open']   = '<li class="active"><a href="#">';
        $config['cur_tag_close']  = '</a></li>';
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
        $config["num_links"]      = round($config["total_rows"] / $config["per_page"]);
        $this->pagination->initialize($config);
        $data['pages']       = $this->pagination->create_links();
        $data['listArticle'] = $this->category_m->select_article($config['per_page'], $offset, $maincategory_seo)->result();
        $data['detail']      = $this->category_m->select_by_id($maincategory_seo)->row();
        $this->template_front->display('front/category_view', $data);
    }

    public function subcategory($subcategory_seo, $offset = 0)
    {
        $data['listRecomend']     = $this->category_m->select_recomended_one($subcategory_seo)->result();
        $data['listMost']         = $this->category_m->select_most_popular_one($subcategory_seo)->result();
        $config['uri_segment']    = 5;
        $config['base_url']       = site_url() . 'category/'.$this->uri->segment(2).'/'.$subcategory_seo.'/page';
        $config['total_rows']     = $this->category_m->count_all_subcategory($subcategory_seo);
        $config['per_page']       = 15;
        $config['full_tag_open']  = '<div class="pagi text-center"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';
        $config['prev_link']      = '<i class="fa fa-chevron-left"></i>';
        $config['prev_tag_open']  = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link']      = '<i class="fa fa-chevron-right"></i>';
        $config['next_tag_open']  = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open']   = '<li class="active"><a href="#">';
        $config['cur_tag_close']  = '</a></li>';
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
        $config["num_links"]      = round($config["total_rows"] / $config["per_page"]);
        $this->pagination->initialize($config);
        $data['pages']       = $this->pagination->create_links();
        $data['listArticle'] = $this->category_m->select_article_subcategory($config['per_page'], $offset, $subcategory_seo)->result();
        $data['detail']      = $this->category_m->select_by_id_subcategory($subcategory_seo)->row();
        $this->template_front->display('front/category_view', $data);
    }

    public function tricategory($category_seo, $offset = 0)
    {
        $data['listRecomend']     = $this->category_m->select_recomended_two($category_seo)->result();
        $data['listMost']         = $this->category_m->select_most_popular_two($category_seo)->result();
        $config['uri_segment']    = 6;
        $config['base_url']       = site_url() . 'category/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$category_seo.'/page';
        $config['total_rows']     = $this->category_m->count_all_category($category_seo);
        $config['per_page']       = 15;
        $config['full_tag_open']  = '<div class="pagi text-center"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';
        $config['prev_link']      = '<i class="fa fa-chevron-left"></i>';
        $config['prev_tag_open']  = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link']      = '<i class="fa fa-chevron-right"></i>';
        $config['next_tag_open']  = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open']   = '<li class="active"><a href="#">';
        $config['cur_tag_close']  = '</a></li>';
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
        $config["num_links"]      = round($config["total_rows"] / $config["per_page"]);
        $this->pagination->initialize($config);
        $data['pages']       = $this->pagination->create_links();
        $data['listArticle'] = $this->category_m->select_article_category($config['per_page'], $offset, $category_seo)->result();
        $data['detail']      = $this->category_m->select_by_id_category($category_seo)->row();
        $this->template_front->display('front/category_view', $data);
    }
}
/* Location: ./application/controller/Category.php */
