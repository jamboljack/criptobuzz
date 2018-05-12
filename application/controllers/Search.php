<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('search_m');
    }

    public function index()
    {
        redirect(site_url('my_error'));
    }

    public function lookdata()
    {
        $keyword = stripHTMLtags($this->input->post('search', 'true'));
        if (empty($keyword)) {
            redirect(site_url('my_error'));
        } else {
            $data['listRecomend'] = $this->search_m->select_recomended()->result();
            $data['listMost']     = $this->search_m->select_most_popular()->result();
            $data['listArticle']  = $this->search_m->select_article($keyword)->result();
            $this->template_front->display('front/search_view', $data);
        }
    }
}
/* Location: ./application/controller/Search.php */
