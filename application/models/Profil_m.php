<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Profil_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function update_data($username)
    {
        $pass = $this->input->post('pass', 'true');
        if (!empty($_FILES['foto']['name'])) {
            if (!empty($pass)) {
                $data = array(
                    'user_password'    => sha1($this->input->post('pass', 'true')),
                    'user_name'        => ucwords(strtolower(stripHTMLtags($this->input->post('name', 'true')))),
                    'user_mobile'      => trim(stripHTMLtags($this->input->post('phone', 'true'))),
                    'user_email'       => trim(stripHTMLtags($this->input->post('email', 'true'))),
                    'user_avatar'      => $this->upload->file_name,
                    'user_date_update' => date('Y-m-d H:i:s'),
                );
            } else {
                $data = array(
                    'user_name'        => ucwords(strtolower(stripHTMLtags($this->input->post('name', 'true')))),
                    'user_mobile'      => trim(stripHTMLtags($this->input->post('phone', 'true'))),
                    'user_email'       => trim(stripHTMLtags($this->input->post('email', 'true'))),
                    'user_avatar'      => $this->upload->file_name,
                    'user_date_update' => date('Y-m-d H:i:s'),
                );
            }
        } else {
            if (!empty($pass)) {
                $data = array(
                    'user_password'    => sha1($this->input->post('pass', 'true')),
                    'user_name'        => ucwords(strtolower(stripHTMLtags($this->input->post('name', 'true')))),
                    'user_mobile'      => trim(stripHTMLtags($this->input->post('phone', 'true'))),
                    'user_email'       => trim(stripHTMLtags($this->input->post('email', 'true'))),
                    'user_date_update' => date('Y-m-d H:i:s'),
                );
            } else {
                $data = array(
                    'user_name'        => ucwords(strtolower(stripHTMLtags($this->input->post('name', 'true')))),
                    'user_mobile'      => trim(stripHTMLtags($this->input->post('phone', 'true'))),
                    'user_email'       => trim(stripHTMLtags($this->input->post('email', 'true'))),
                    'user_date_update' => date('Y-m-d H:i:s'),
                );
            }
        }

        $this->db->where('user_username', $username);
        $this->db->update('cripto_users', $data);
    }
}
/* Location: ./application/model/Profil_m.php */
