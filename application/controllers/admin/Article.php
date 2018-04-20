<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in_cripto')) {
            redirect(base_url());
        }

        $this->load->library('template');
        $this->load->model('admin/article_m');

        // $this->original_path = realpath(APPPATH . '../uploads/original');
        $this->resized_path = realpath(APPPATH . '../img/article_folder');
        $this->thumbs_path  = realpath(APPPATH . '../img/article_folder/thumbs');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in_cripto')) {
            $this->template->display('admin/article/view');
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

    public function data_list()
    {
        $List = $this->article_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row        = array();
            $article_id = $r->article_id;

            $link  = site_url('admin/article/editdata/' . $r->article_id);
            $row[] = '  <a href="' . $link . '" title="Edit Data"><i class="icon-pencil"></i></a>
                        <a onclick="hapusData(' . $article_id . ')" title="Delete Data">
                            <i class="icon-close"></i>
                        </a>';

            $row[] = $no;
            $row[] = date('d-m-Y', strtotime($r->article_post));
            $row[] = $r->maincategory_name;
            $row[] = $r->category_name;
            $row[] = $r->article_title;
            $row[] = '<img src=' . base_url('img/article_folder/thumbs/' . $r->article_image) . ' width="50%">';

            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->article_m->count_all(),
            "recordsFiltered" => $this->article_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function adddata()
    {
        $data['listMain'] = $this->article_m->select_maincategory()->result();
        $this->template->display('admin/article/add', $data);
    }

    public function view_subcategory()
    {
        $data['listSubcategory'] = $this->article_m->select_subcategory($this->uri->segment(4));
        $this->load->view('admin/master/drop_down_subcategory_view', $data);
    }

    public function savedata()
    {
        $this->load->library('image_lib');
        $jam  = time();
        $name = seo_title(stripHTMLtags($this->input->post('title', 'true')));

        $config['file_name']     = 'Article_' . $name . '_' . $jam . '.jpg';
        $config['upload_path']   = './img/article_folder/';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['overwrite']     = true;
        $config['max_size']      = 0;
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $response['status'] = 'error';
        } else {
            $upload      = $this->upload->do_upload('foto');
            $upload_data = $this->upload->data();
            $config      = array(
                'file_name'      => $upload_data['file_name'],
                'source_image'   => $upload_data['full_path'], //path to the uploaded image
                'new_image'      => $this->resized_path, //path to
                'maintain_ratio' => true,
                'overwrite'      => true,
                'width'          => 850,
                'height'         => 500,
            );

            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            $config = array(
                'source_image'   => $upload_data['full_path'],
                'new_image'      => $this->thumbs_path,
                'maintain_ratio' => true,
                'overwrite'      => true,
                'width'          => 425,
                'height'         => 250,
            );

            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            $this->article_m->insert_data();
            $response['status'] = 'success';
        }

        echo json_encode($response);
    }

    public function editdata($article_id)
    {
        $data['listMain']     = $this->article_m->select_maincategory()->result();
        $data['listCategory'] = $this->article_m->select_category($article_id)->result();
        $data['detail']       = $this->article_m->select_by_id($article_id)->row();
        $this->template->display('admin/article/edit', $data);
    }

    public function updatedata()
    {
        if (!empty($_FILES['foto']['name'])) {
            $this->load->library('image_lib');
            $jam  = time();
            $name = seo_title(stripHTMLtags($this->input->post('title', 'true')));

            $config['file_name']     = 'Article_' . $name . '_' . $jam . '.jpg';
            $config['upload_path']   = './img/article_folder/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['overwrite']     = true;
            $config['max_size']      = 0;
            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $response['status'] = 'error';
            } else {
                $upload      = $this->upload->do_upload('foto');
                $upload_data = $this->upload->data();
                $config      = array(
                    'file_name'      => $upload_data['file_name'],
                    'source_image'   => $upload_data['full_path'], //path to the uploaded image
                    'new_image'      => $this->resized_path, //path to
                    'maintain_ratio' => true,
                    'overwrite'      => true,
                    'width'          => 850,
                    'height'         => 500,
                );

                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $config = array(
                    'source_image'   => $upload_data['full_path'],
                    'new_image'      => $this->thumbs_path,
                    'maintain_ratio' => true,
                    'overwrite'      => true,
                    'width'          => 425,
                    'height'         => 250,
                );

                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $this->article_m->insert_data();
                $response['status'] = 'success';
            }
        } else {
            $this->article_m->update_data();
            $response['status'] = 'success';
        }

        echo json_encode($response);
    }

    public function deletedata($id)
    {
        $this->article_m->delete_data($id);
        echo json_encode(array("status" => true));
    }
}
/* Location: ./application/controller/admin/Article.php */
