<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Science_m extends CI_Model
{
    public $table         = 'cripto_science';
    public $column_order  = array(null, null, 'science_post', 'science_title', 'science_url');
    public $column_search = array('science_post', 'science_title', 'science_url');
    public $order         = array('science_post' => 'desc');

    public function __construct()
    {
        parent::__construct();
    }

    private function _get_datatables_query()
    {
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

    public function insert_data()
    {
        $data = array(
            'science_title'  => trim(stripHTMLtags($this->input->post('title', 'true'))),
            'science_seo'    => seo_title(trim(stripHTMLtags($this->input->post('title', 'true')))),
            'science_url'    => trim(stripHTMLtags($this->input->post('url', 'true'))),
            'science_post'   => date('Y-m-d'),
            'science_update' => date('Y-m-d H:i:s'),
        );

        $this->db->insert('cripto_science', $data);
    }

    public function select_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('cripto_science');
        $this->db->where('science_id', $id);

        return $this->db->get();
    }

    public function update_data()
    {
        $science_id = $this->input->post('id', 'true');

        $data = array(
            'science_title'  => trim(stripHTMLtags($this->input->post('title', 'true'))),
            'science_seo'    => seo_title(trim(stripHTMLtags($this->input->post('title', 'true')))),
            'science_url'    => trim(stripHTMLtags($this->input->post('url', 'true'))),
            'science_update' => date('Y-m-d H:i:s'),
        );

        $this->db->where('science_id', $science_id);
        $this->db->update('cripto_science', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('science_id', $id);
        $this->db->delete('cripto_science');
    }
}
/* Location: ./application/models/admin/Science_m.php */
