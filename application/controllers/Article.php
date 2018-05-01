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
        $data['listOther']    = $this->article_m->select_other($article_seo)->result();
        $data['listComment']  = $this->article_m->select_list_comment($article_seo)->result();
        $this->template_front->display('front/article_view', $data);
    }

    public function savecomment($article_seo)
    {
        $captcha_answer = $this->input->post('g-recaptcha-response');
        $rsp            = $this->recaptcha->verifyResponse($captcha_answer);

        if ($rsp['success']) {
            $this->article_m->insert_comment($article_seo);
            $response = ['status' => 'success', 'message' => 'Thanks for Your Comment.'];
        } else {
            $response = ['status' => 'failed', 'message' => 'Your Comment Failed.'];
        }

        echo json_encode($response);
    }
}
/* Location: ./application/controller/Article.php */
