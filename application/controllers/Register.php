<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_m');
        $this->load->library('template_login');
    }

    public function index()
    {
        redirect(site_url('my_error'));
    }

    private function user_exists($username) {
        $this->db->where('user_username', $username);
        $query = $this->db->get('cripto_users');
        if($query->num_rows() > 0 ) { 
            return TRUE; 
        } else { 
            return FALSE; 
        }
    }

    function register_user_exists() {
        if (array_key_exists('username', $_POST)) {
            if ($this->user_exists(stripHTMLtags($this->input->post('username', 'true'))) == TRUE ) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }

    private function email_exists($email) {
        $this->db->where('user_email', $email);
        $query = $this->db->get('cripto_users');
        if($query->num_rows() > 0 ) { 
            return TRUE; 
        } else { 
            return FALSE; 
        }
    }

    function register_email_exists() {
        if (array_key_exists('email', $_POST)) {
            if ($this->email_exists(stripHTMLtags($this->input->post('email', 'true'))) == TRUE ) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }

    public function savedata() {
        $this->register_m->insert_data();
    }

    public function sukses() {
        $this->template_front->display('front/register/register_sukses_view');
    }
}
/* Location: ./application/controller/Register.php */
