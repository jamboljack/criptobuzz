<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Tags_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function select_article($limit = 10, $offset = 0, $tags_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->like('article_tags', $tags_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit($limit);
        $this->db->offset($offset);

        return $this->db->get();
    }

    function count_all($tags_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->like('article_tags', $tags_seo);
        
        return $this->db->count_all_results();
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
/* Location: ./application/model/Tags_m.php */
