<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Menu_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_user($username)
    {
        $this->db->select('*');
        $this->db->from('cripto_users');
        $this->db->where('user_username', $username);

        return $this->db->get();
    }

    public function select_meta()
    {
        $this->db->select('*');
        $this->db->from('cripto_meta');
        $this->db->where('meta_id', 1);

        return $this->db->get();
    }

    public function select_contact()
    {
        $this->db->select('*');
        $this->db->from('cripto_contact');
        $this->db->where('contact_id', 1);

        return $this->db->get();
    }

    public function select_social()
    {
        $this->db->select('*');
        $this->db->from('cripto_social');
        $this->db->order_by('social_id', 'asc');

        return $this->db->get();
    }

    public function select_menu()
    {
        $this->db->select('*');
        $this->db->from('cripto_menu');
        $this->db->where('menu_level', 'S');
        $this->db->order_by('menu_id', 'asc');

        return $this->db->get();
    }

    public function select_detail($menu_seo)
    {
        $this->db->select('*');
        $this->db->from('cripto_menu');
        $this->db->where('menu_seo', $menu_seo);

        return $this->db->get();
    }

    public function select_info()
    {
        $this->db->select('*');
        $this->db->from('cripto_information');
        $this->db->order_by('information_id', 'asc');

        return $this->db->get();
    }

    public function select_maincategory()
    {
        $this->db->select('*');
        $this->db->from('cripto_maincategory');
        $this->db->order_by('maincategory_id', 'asc');

        return $this->db->get();
    }

    public function count_sub_category($maincategory_id)
    {
        $this->db->select('count(category_id) as jml');
        $this->db->from('v_category');
        $this->db->where('maincategory_id', $maincategory_id);

        return $this->db->get();
    }

    public function select_category_zero($maincategory_id)
    {
        $this->db->select('*');
        $this->db->from('v_category');
        $this->db->where('maincategory_id', $maincategory_id);
        $this->db->where('category_level', 0);
        $this->db->order_by('category_id', 'asc');

        return $this->db->get();
    }

    public function count_category_one($maincategory_id)
    {
        $this->db->select('count(category_id) as jml');
        $this->db->from('v_category');
        $this->db->where('maincategory_id', $maincategory_id);
        $this->db->where('category_level', 1);

        return $this->db->get();
    }

    public function select_category_one($category_head)
    {
        $this->db->select('*');
        $this->db->from('v_category');
        $this->db->where('category_head', $category_head);
        $this->db->where('category_level', 1);
        $this->db->order_by('category_id', 'asc');

        return $this->db->get();
    }

    public function select_banner_top()
    {
        $this->db->select('*');
        $this->db->from('cripto_banner');
        $this->db->where('banner_position', 'Top');

        return $this->db->get();
    }

    public function select_banner_side()
    {
        $this->db->select('*');
        $this->db->from('cripto_banner');
        $this->db->where('banner_position', 'Side');

        return $this->db->get();
    }
}
/* Location: ./application/model/Menu_m.php */
