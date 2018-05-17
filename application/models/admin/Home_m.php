<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_article()
    {
        $this->db->select('COUNT(article_id) as total');
        $this->db->from('cripto_article');

        return $this->db->get();
    }

    public function select_science()
    {
        $this->db->select('COUNT(science_id) as total');
        $this->db->from('cripto_science');

        return $this->db->get();
    }

    public function select_subcscribe()
    {
        $this->db->select('COUNT(subscribe_id) as total');
        $this->db->from('cripto_subscribe');

        return $this->db->get();
    }

    public function select_member()
    {
        $this->db->select('COUNT(user_username) as total');
        $this->db->from('cripto_users');
        $this->db->where('user_level', 'Member');

        return $this->db->get();
    }
}
/* Location: ./application/model/admin/Home_m.php */
