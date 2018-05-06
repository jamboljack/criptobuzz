<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_slider()
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(6);

        return $this->db->get();
    }

    public function select_latest_post()
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    public function select_trend_post()
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->order_by('article_read', 'asc');
        $this->db->limit(5);

        return $this->db->get();
    }

    public function select_comment()
    {
        $this->db->select('*');
        $this->db->from('v_comment');
        $this->db->order_by('comment_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    public function select_feature_small()
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_feature', 2);
        $this->db->order_by('article_id', 'asc');
        $this->db->limit(4);

        return $this->db->get();
    }

    function select_article($limit = 10, $offset = 0) {
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

    public function select_maincategory()
    {
        $this->db->select('*');
        $this->db->from('cripto_maincategory');
        $this->db->order_by('maincategory_id', 'asc');

        return $this->db->get();
    }

    function select_article_main($maincategory_id) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('maincategory_id', $maincategory_id);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_recomended() {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_recomend', 2);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_most_popular() {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->order_by('article_read', 'asc');
        $this->db->limit(5);

        return $this->db->get();
    }

    public function insert_data()
    {
        $data = array(
            'message_name'    => ucwords(strtolower(stripHTMLtags($this->input->post('name', 'true')))),
            'message_email'   => trim(stripHTMLtags($this->input->post('email', 'true'))),
            'message_subject' => ucwords(strtolower(stripHTMLtags($this->input->post('subject', 'true')))),
            'message_message' => trim(stripHTMLtags($this->input->post('message', 'true'))),
            'message_post'    => date('Y-m-d H:i:s'),
        );

        $this->db->insert('my_message', $data);
    }

    function select_science() {
        $this->db->select('*');
        $this->db->from('cripto_science');
        $this->db->order_by('science_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }
}
/* Location: ./application/model/Home_m.php */
