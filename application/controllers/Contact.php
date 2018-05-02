<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->library('recaptcha');
        $this->load->model('contact_m');
    }

    public function index()
    {
        $data['detail'] = $this->contact_m->select_detail()->row();
        $this->template_front->display('front/contact_view', $data);
    }

    public function send_data()
    {
        $captcha_answer = $this->input->post('g-recaptcha-response');
        $rsp            = $this->recaptcha->verifyResponse($captcha_answer);

        if ($rsp['success']) {
            $this->contact_m->insert_data();
            $response = ['status' => 'success', 'message' => 'Your Message was Send Successfull.'];
        } else {
            $response = ['status' => 'failed', 'message' => 'Your Message Failed.'];
        }

        echo json_encode($response);
    }
}
/* Location: ./application/controller/Contact.php */
