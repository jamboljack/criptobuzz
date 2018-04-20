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

    public function select_feature_small()
    {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_feature', 2);
        $this->db->order_by('article_id', 'asc');
        $this->db->limit(3);

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
}
/* Location: ./application/model/Home_m.php */
