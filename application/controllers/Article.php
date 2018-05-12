<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->library('recaptcha');
        $this->load->model('article_m');
    }

    public function index($offset = 0)
    {
        $data['listRecomend']     = $this->article_m->select_recomended()->result();
        $data['listMost']         = $this->article_m->select_most_popular()->result();
        $config['uri_segment']    = 3;
        $config['base_url']       = site_url() . 'article/index';
        $config['total_rows']     = $this->article_m->count_all();
        $config['per_page']       = 10;
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
        $data['listArticle'] = $this->article_m->select_article($config['per_page'], $offset)->result();
        $this->template_front->display('front/article_view', $data);
    }

    public function detail($article_seo)
    {
        $checkdata = $this->db->get_where('cripto_article', array('article_seo' => $article_seo))->row();
        if (count($checkdata) == 0) {
            redirect(site_url('my_error'));
        } else {
            // Update Read
            $dataRead = array(
                'article_read' => ($checkdata->article_read + 1),
            );
            $this->db->where('article_seo', $article_seo);
            $this->db->update('cripto_article', $dataRead);

            $data['listRecomend'] = $this->article_m->select_recomended()->result();
            $data['listMost']     = $this->article_m->select_most_popular()->result();
            $data['detail']       = $this->article_m->select_by_id($article_seo)->row();
            $data['editor']       = $this->article_m->select_editor_by_id($article_seo)->row();
            $data['listOther']    = $this->article_m->select_other($article_seo)->result();
            $data['listComment']  = $this->article_m->select_list_comment($article_seo)->result();
            $this->template_front->display('front/article_detail_view', $data);
        }
    }

    public function savecomment($article_id)
    {
        $captcha_answer = $this->input->post('g-recaptcha-response');
        $rsp            = $this->recaptcha->verifyResponse($captcha_answer);

        if ($rsp['success']) {
            $this->article_m->insert_comment($article_id);
            $response = ['status' => 'success', 'message' => 'Thanks for Your Comment.'];
        } else {
            $response = ['status' => 'failed', 'message' => 'Your Comment Failed.'];
        }

        echo json_encode($response);
    }
}
/* Location: ./application/controller/Article.php */
