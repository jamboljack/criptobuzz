<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_m extends CI_Model
{
    public $table         = 'v_article';
    public $column_order  = array(null, null, 'article_post', 'maincategory_name', 'category_name', 'article_title', null);
    public $column_search = array('article_post', 'maincategory_name', 'category_name', 'article_title');
    public $order         = array('article_id' => 'desc');

    public function __construct()
    {
        parent::__construct();
    }

    public function select_maincategory()
    {
        $this->db->select('*');
        $this->db->from('cripto_maincategory');
        $this->db->order_by('maincategory_name', 'asc');

        return $this->db->get();
    }

    public function select_category($article_id)
    {
        $this->db->select('c.*');
        $this->db->from('cripto_category c');
        $this->db->join('cripto_article a', 'a.category_id=c.category_id');
        $this->db->where('a.article_id', $article_id);

        return $this->db->get();
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

    public function select_subcategory($maincategory_id)
    {
        $this->db->where('maincategory_id', $maincategory_id);
        $this->db->order_by('category_id', 'asc');
        $sql_progdi = $this->db->get('cripto_category');
        if ($sql_progdi->num_rows() > 0) {
            foreach ($sql_progdi->result_array() as $row) {
                $result['']                  = '- Choose Sub Category -';
                $result[$row['category_id']] = trim($row['category_name'] . ' - ' . $row['category_level']);
            }
        } else {
            $result['0'] = '- No Sub Category -';
        }
        return $result;
    }

    public function insert_data()
    {
        $data = array(
            'user_username'   => $this->session->userdata('username'),
            'maincategory_id' => $this->input->post('lstMain', 'true'),
            'category_id'     => $this->input->post('lstSubCategory', 'true'),
            'article_title'   => trim(stripHTMLtags($this->input->post('title', 'true'))),
            'article_seo'     => seo_title(stripHTMLtags($this->input->post('title', 'true'))),
            'article_desc'    => trim($this->input->post('desc', 'true')),
            'article_image'   => $this->upload->file_name,
            'article_post'    => date('Y-m-d H:i:s'),
            'article_update'  => date('Y-m-d H:i:s'),
        );

        $this->db->insert('cripto_article', $data);
    }

    public function select_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('cripto_article');
        $this->db->where('article_id', $id);

        return $this->db->get();
    }

    public function update_data()
    {
        $article_id = $this->input->post('id', 'true');
        if (!empty($_FILES['foto']['name'])) {
            $data = array(
                'user_username'   => $this->session->userdata('username'),
                'maincategory_id' => $this->input->post('lstMain', 'true'),
                'category_id'     => $this->input->post('lstSubCategory', 'true'),
                'article_title'   => trim(stripHTMLtags($this->input->post('title', 'true'))),
                'article_seo'     => seo_title(stripHTMLtags($this->input->post('title', 'true'))),
                'article_desc'    => trim($this->input->post('desc', 'true')),
                'article_image'   => $this->upload->file_name,
                'article_update'  => date('Y-m-d H:i:s'),
            );
        } else {
            $data = array(
                'user_username'   => $this->session->userdata('username'),
                'maincategory_id' => $this->input->post('lstMain', 'true'),
                'category_id'     => $this->input->post('lstSubCategory', 'true'),
                'article_title'   => trim(stripHTMLtags($this->input->post('title', 'true'))),
                'article_seo'     => seo_title(stripHTMLtags($this->input->post('title', 'true'))),
                'article_desc'    => trim($this->input->post('desc', 'true')),
                'article_update'  => date('Y-m-d H:i:s'),
            );
        }

        $this->db->where('article_id', $article_id);
        $this->db->update('cripto_article', $data);
    }

    public function delete_data($id)
    {
        $this->db->where('article_id', $id);
        $this->db->delete('cripto_article');
    }
}
/* Location: ./application/models/admin/Article_m.php */
