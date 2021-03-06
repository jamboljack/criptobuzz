<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_m extends CI_Model
{
    public $table         = 'v_category';
    public $column_order  = array(null, null, 'maincategory_name', 'subcategory', 'category_name', 'category_level');
    public $column_search = array('maincategory_name', 'subcategory', 'category_name', 'category_level');
    public $order         = array('maincategory_name' => 'asc', 'category_name' => 'asc');

    public function __construct()
    {
        parent::__construct();
    }

    private function _get_datatables_query()
    {
        if ($this->input->post('lstMainCategory', 'true')) {
            $this->db->where('maincategory_id', $this->input->post('lstMainCategory', 'true'));
        }

        $this->db->from($this->table);

        $i = 0;
        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) {
                    $this->db->group_end();
                }

            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function select_subcategory($maincategory_id)
    {
        $this->db->where('maincategory_id', $maincategory_id);
        $this->db->order_by('category_id', 'asc');
        $sql_progdi = $this->db->get('cripto_category');
        if ($sql_progdi->num_rows() > 0) {
            foreach ($sql_progdi->result_array() as $row) {
                $result['']                 = '- Choose Sub Category -';
                $result[$row['category_id']] = trim($row['category_name'].' - '.$row['category_level']);
            }
        } else {
            $result['0'] = '- No Sub Category -';
        }
        return $result;
    }

    public function insert_data()
    {

        $data = array(
            'maincategory_id' => trim($this->input->post('lstMain', 'true')),
            'category_head'   => trim($this->input->post('lstSubCategory', 'true')),
            'category_name'   => strtoupper(stripHTMLtags($this->input->post('name', 'true'))),
            'category_seo'    => seo_title(trim($this->input->post('name', 'true'))),
            'category_level'  => ($this->input->post('lstSubCategory') == '0' ? 0 : 1),
            'category_update' => date('Y-m-d H:i:s'),
        );

        $this->db->insert('cripto_category', $data);
    }

    public function select_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('cripto_category');
        $this->db->where('category_id', $id);

        return $this->db->get();
    }

    public function select_subcategory_by_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('cripto_category');
        $this->db->where('category_id', $category_id);

        return $this->db->get();
    }

    public function update_data()
    {
        $category_id = $this->input->post('id', 'true');

        $data = array(
            'maincategory_id' => trim($this->input->post('lstMain', 'true')),
            'category_head'   => trim($this->input->post('lstSubCategory', 'true')),
            'category_name'   => strtoupper(stripHTMLtags($this->input->post('name', 'true'))),
            'category_seo'    => seo_title(trim($this->input->post('name', 'true'))),
            'category_level'  => ($this->input->post('lstSubCategory') == '0' ? 0 : 1),
            'category_update' => date('Y-m-d H:i:s'),
        );

        $this->db->where('category_id', $category_id);
        $this->db->update('cripto_category', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('cripto_category');
    }
}
/* Location: ./application/models/admin/Category_m.php */
