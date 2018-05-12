<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Search_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function select_article($keyword) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->like('article_title', $keyword);
        $this->db->order_by('article_id', 'desc');

        return $this->db->get();
    }

    public function select_recomended()
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_recomend', 2);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    public function select_most_popular()
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->order_by('article_read', 'asc');
        $this->db->limit(5);

        return $this->db->get();
    }
}
/* Location: ./application/model/Search_m.php */
