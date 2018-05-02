<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_m');
        $this->load->library('template_front');
    }

    public function index()
    {
        redirect(site_url('my_error'));
    }

    private function user_exists($username)
    {
        $this->db->where('user_username', $username);
        $query = $this->db->get('cripto_users');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register_user_exists()
    {
        if (array_key_exists('username', $_POST)) {
            if ($this->user_exists(stripHTMLtags($this->input->post('username_sign', 'true'))) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    private function email_exists($email)
    {
        $this->db->where('user_email', $email);
        $query = $this->db->get('cripto_users');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register_email_exists()
    {
        if (array_key_exists('email', $_POST)) {
            if ($this->email_exists(stripHTMLtags($this->input->post('email_sign', 'true'))) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function savedata()
    {
        $this->register_m->insert_data();
    }

    public function activate()
    {
        $key_reg = $this->uri->segment(3);
        $check   = $this->db->get_where('cripto_users', array('user_key_reg' => $key_reg))->row();
        if (count($check) > 0) {
            $this->register_m->activate_data($key_reg);
            $this->template_front->display('front/activate_success_view');
        } else {
            $this->template_front->display('front/activate_failed_view');
        }
    }
}
/* Location: ./application/controller/Register.php */
