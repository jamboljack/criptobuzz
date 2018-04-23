<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Category_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function select_article($limit = 10, $offset = 0, $maincategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('maincategory_seo', $maincategory_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit($limit);
        $this->db->offset($offset);

        return $this->db->get();
    }

    function count_all($maincategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('maincategory_seo', $maincategory_seo);

        return $this->db->count_all_results();
    }

    function select_recomended($maincategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_recomend', 2);
        $this->db->where('maincategory_seo', $maincategory_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_most_popular($maincategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('maincategory_seo', $maincategory_seo);
        $this->db->order_by('article_read', 'asc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_by_id($maincategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('maincategory_seo', $maincategory_seo);

        return $this->db->get();
    }
}
/* Location: ./application/model/Category_m.php */
