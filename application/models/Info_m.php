<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Info_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_all()
    {
        $this->db->select('*');
        $this->db->from('v_information');
        $this->db->order_by('information_id', 'asc');

        return $this->db->get();
    }

    public function select_detail()
    {
        $this->db->select('*');
        $this->db->from('cripto_information');
        $this->db->where('information_id', 1);

        return $this->db->get();
    }

    public function select_detail_info($info_seo)
    {
        $this->db->select('*');
        $this->db->from('cripto_information');
        $this->db->where('information_seo', $info_seo);

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
}
/* Location: ./application/model/Info_m.php */
