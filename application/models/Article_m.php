<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Article_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function select_article($limit = 15, $offset = 0) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->order_by('article_id', 'desc');
        $this->db->limit($limit);
        $this->db->offset($offset);

        return $this->db->get();
    }

    function count_all() {
        $this->db->select('*');
        $this->db->from('v_article');

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

    public function select_by_id($article_seo)
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_seo', $article_seo);

        return $this->db->get();
    }

    public function select_editor_by_id($article_seo)
    {
        $this->db->select('u.user_name, u.user_desc, u.user_avatar');
        $this->db->from('cripto_users u');
        $this->db->join('cripto_article a', 'a.user_username=u.user_username');
        $this->db->where('a.article_seo', $article_seo);

        return $this->db->get();
    }

    public function select_other($article_seo)
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_seo !=', $article_seo);
        $this->db->order_by('article_title', 'asc');
        $this->db->limit(6);

        return $this->db->get();
    }

    public function select_list_comment($article_seo)
    {
        $this->db->select('*');
        $this->db->from('v_comment');
        $this->db->where('article_seo', $article_seo);
        $this->db->order_by('comment_post', 'desc');

        return $this->db->get();
    }

    public function insert_comment($article_id)
    {
        // $article    = $this->db->get_where('cripto_article', array('article_seo' => $article_seo))->row();
        // $article_id = $article->article_id;
        $data = array(
            'user_username' => $this->session->userdata('username_member'),
            'comment_desc'  => trim(stripHTMLtags($this->input->post('comment', 'true'))),
            'article_id'    => $article_id,
            'comment_post'  => date('Y-m-d H:i:s'),
        );

        $this->db->insert('cripto_comment', $data);
    }
}
/* Location: ./application/model/Article_m.php */
