<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_user_account($username, $password)
    {
        $this->db->select('*');
        $this->db->from('cripto_users');
        $this->db->where('user_username', $username);
        $this->db->where('user_password', $password);

        return $this->db->get();
    }
}
/* Location: ./application/model/Login_m.php */
