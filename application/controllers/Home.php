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

    public function index()
    {
        $data['listSlider']  = $this->home_m->select_slider()->result();
        $data['listLatest']  = $this->home_m->select_latest_post()->result();
        $data['listTrend']   = $this->home_m->select_trend_post()->result();
        $data['listFeature'] = $this->home_m->select_feature_small()->result();
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
