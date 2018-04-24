<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Article_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function select_recomended($article_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_recomend', 2);
        $this->db->where('article_seo !=', $article_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_most_popular($article_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_seo !=', $article_seo);
        $this->db->order_by('article_read', 'asc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_by_id($article_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_seo', $article_seo);

        return $this->db->get();
    }

    function select_editor_by_id($article_seo) {
        $this->db->select('u.user_name, u.user_desc, u.user_avatar');
        $this->db->from('cripto_users u');
        $this->db->join('cripto_article a', 'a.user_username=u.user_username');
        $this->db->where('a.article_seo', $article_seo);

        return $this->db->get();
    }
}
/* Location: ./application/model/Article_m.php */
