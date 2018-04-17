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
        $data['setting']        = $this->home_m->select_setting()->row(); // Title
        $data['listSocial']     = $this->home_m->select_social()->result(); // Social
        $data['about']          = $this->home_m->select_about()->row(); // About
        $data['profil']         = $this->home_m->select_profil()->row(); // Profil
        $data['listSkill']      = $this->home_m->select_skill()->result(); // Skills
        $data['listMore']       = $this->home_m->select_more()->result(); // More
        $data['listEducation']  = $this->home_m->select_education()->result(); // Education
        $data['listExperience'] = $this->home_m->select_experience()->result(); // Experience
        $data['listWork']       = $this->home_m->select_work()->result(); // Work
        $this->template_front->display('home_view', $data);
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
