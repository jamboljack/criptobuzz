<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->library('recaptcha');
        $this->load->model('home_m');
    }

    public function index($offset = 0)
    {
        $data['listSlider']       = $this->home_m->select_slider()->result();
        $data['listLatest']       = $this->home_m->select_latest_post()->result();
        $data['listTrend']        = $this->home_m->select_trend_post()->result();
        $data['listFeature']      = $this->home_m->select_feature_small()->result();
        $data['listMain']         = $this->home_m->select_maincategory()->result();
        $data['listRecomend']     = $this->home_m->select_recomended()->result();
        $data['listMost']         = $this->home_m->select_most_popular()->result();
        $config['uri_segment']    = 3;
        $config['base_url']       = site_url() . 'article/index';
        $config['total_rows']     = $this->home_m->count_all();
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
        $data['listArticle'] = $this->home_m->select_article($config['per_page'], $offset)->result();

        $this->template_front->display('front/home_view', $data);
    }

    public function send_data()
    {
        $captcha_answer = $this->input->post('g-recaptcha-response');
        $rsp            = $this->recaptcha->verifyResponse($captcha_answer);

        if ($rsp['success']) {
            $this->home_m->insert_data();
            $response['status'] = 'success';
        } else {
            $response['status'] = 'failed';
        }

        echo json_encode($response);
    }
}
/* Location: ./application/controller/Home.php */
