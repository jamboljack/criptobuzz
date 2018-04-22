<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner_m extends CI_Model
{
    public $table         = 'cripto_banner';
    public $column_order  = array(null, null, 'banner_name', 'banner_url', null);
    public $column_search = array('banner_name', 'banner_url');
    public $order         = array('banner_name' => 'asc');

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
            'banner_name'     => trim(stripHTMLtags($this->input->post('name', 'true'))),
            'banner_position' => $this->input->post('lstPost', 'true'),
            'banner_url'      => trim(stripHTMLtags($this->input->post('url', 'true'))),
            'banner_image'    => $this->upload->file_name,
            'banner_update'   => date('Y-m-d H:i:s'),
        );

        $this->db->insert('cripto_banner', $data);
    }

    public function select_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('cripto_banner');
        $this->db->where('banner_id', $id);

        return $this->db->get();
    }

    public function update_data()
    {
        $banner_id = $this->input->post('id', 'true');
        if (!empty($_FILES['foto']['name'])) {
            $data = array(
                'banner_name'     => trim(stripHTMLtags($this->input->post('name', 'true'))),
                'banner_position' => $this->input->post('lstPost', 'true'),
                'banner_url'      => trim(stripHTMLtags($this->input->post('url', 'true'))),
                'banner_image'    => $this->upload->file_name,
                'banner_update'   => date('Y-m-d H:i:s'),
            );
        } else {
            $data = array(
                'banner_name'     => trim(stripHTMLtags($this->input->post('name', 'true'))),
                'banner_position' => $this->input->post('lstPost', 'true'),
                'banner_url'      => trim(stripHTMLtags($this->input->post('url', 'true'))),
                'banner_update'   => date('Y-m-d H:i:s'),
            );
        }

        $this->db->where('banner_id', $banner_id);
        $this->db->update('cripto_banner', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('banner_id', $id);
        $this->db->delete('cripto_banner');
    }
}
/* Location: ./application/models/admin/Banner_m.php */
