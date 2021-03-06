<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_detail($menu_id = 1)
    {
        $this->db->select('*');
        $this->db->from('cripto_menu');
        $this->db->where('menu_id', $menu_id);

        return $this->db->get();
    }

    public function update_data()
    {
        $menu_id = $this->input->post('id', 'true');
        $data    = array(
            'menu_desc'   => $this->input->post('desc', 'true'),
            'menu_update' => date('Y-m-d H:i:s'),
        );

        $this->db->where('menu_id', $menu_id);
        $this->db->update('cripto_menu', $data);
    }
}
/* Location: ./application/models/admin/About_m.php */
