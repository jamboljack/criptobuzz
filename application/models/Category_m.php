<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Category_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function select_article($limit = 15, $offset = 0, $maincategory_seo) {
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
        $this->db->select('maincategory_name');
        $this->db->from('cripto_maincategory');
        $this->db->where('maincategory_seo', $maincategory_seo);

        return $this->db->get();
    }

    // Level 1
    function select_recomended_one($subcategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_recomend', 2);
        $this->db->where('subcategory_seo', $subcategory_seo);
        $this->db->or_where('category_seo', $subcategory_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_most_popular_one($subcategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('subcategory_seo', $subcategory_seo);
        $this->db->or_where('category_seo', $subcategory_seo);
        $this->db->order_by('article_read', 'asc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function count_all_subcategory($subcategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('subcategory_seo', $subcategory_seo);

        return $this->db->count_all_results();
    }

    function select_article_subcategory($limit = 10, $offset = 0, $subcategory_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('subcategory_seo', $subcategory_seo);
        $this->db->or_where('category_seo', $subcategory_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit($limit);
        $this->db->offset($offset);

        return $this->db->get();
    }

    function select_by_id_subcategory($subcategory_seo) {
        $this->db->select('category_name');
        $this->db->from('cripto_category');
        $this->db->where('category_seo', $subcategory_seo);

        return $this->db->get();
    }

    // Level 2
    function select_recomended_two($category_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('article_recomend', 2);
        $this->db->where('category_seo', $category_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function select_most_popular_two($category_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('category_seo', $category_seo);
        $this->db->order_by('article_read', 'asc');
        $this->db->limit(5);

        return $this->db->get();
    }

    function count_all_category($category_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('category_seo', $category_seo);

        return $this->db->count_all_results();
    }

    function select_article_category($limit = 10, $offset = 0, $category_seo) {
        $this->db->select('*');
        $this->db->from('v_article');
        $this->db->where('category_seo', $category_seo);
        $this->db->order_by('article_id', 'desc');
        $this->db->limit($limit);
        $this->db->offset($offset);

        return $this->db->get();
    }

    function select_by_id_category($category_seo) {
        $this->db->select('category_name');
        $this->db->from('cripto_category');
        $this->db->where('category_seo', $category_seo);

        return $this->db->get();
    }
}
/* Location: ./application/model/Category_m.php */
