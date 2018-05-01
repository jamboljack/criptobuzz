<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_login');
        $this->load->model('login_m');
    }

    public function index()
    {
        redirect(site_url('my_error'));
    }

    private function user_exists($username)
    {
        $this->db->where('user_username', $username);
        $this->db->where('user_level', 'Member');
        $this->db->where('user_status', 'Aktif');
        $query = $this->db->get('cripto_users');
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function check_user_exists()
    {
        if (array_key_exists('username', $_POST)) {
            if ($this->user_exists(stripHTMLtags($this->input->post('username', 'true'))) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function validasi()
    {
        $username = trim(stripHTMLtags($this->input->post('username', 'true')));
        $password = trim(stripHTMLtags($this->input->post('password', 'true')));
        $temp_account = $this->login_m->check_user_account($username, sha1($password))->row();
        $num_account  = count($temp_account);
        if ($num_account > 0) {
            $array_item = array(
                'username_member'          => $temp_account->user_username,
                'nama_member'              => $temp_account->user_name,
                'avatar_member'            => $temp_account->user_avatar,
                'email_member'             => $temp_account->user_email,
                'logged_in_member_cripto' => true,
            );

            $this->session->set_userdata($array_item);
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error', 'message' => 'Incorrect Password');
        }

        echo json_encode($response);
    }

    public function logout()
    {
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-chace');
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
/* Location: ./application/controller/Login.php */
