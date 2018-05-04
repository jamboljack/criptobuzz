<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_front');
        $this->load->model('info_m');
    }

    public function index()
    {
        $data['listRecomend'] = $this->info_m->select_recomended()->result();
        $data['listMost']     = $this->info_m->select_most_popular()->result();
        $data['detail']       = $this->info_m->select_detail()->row();
        $data['listInfo']     = $this->info_m->select_all()->result();
        $this->template_front->display('front/info_view', $data);
    }

    public function post($info_seo)
    {
        $checkdata = $this->db->get_where('cripto_information', array('information_seo' => $info_seo))->row();
        if (count($checkdata) == 0) {
            redirect(site_url('my_error'));
        } else {
            $data['listRecomend'] = $this->info_m->select_recomended()->result();
            $data['listMost']     = $this->info_m->select_most_popular()->result();
            // Update Read
            $dataRead = array(
                'information_read' => ($checkdata->information_read + 1),
            );
            $this->db->where('information_seo', $info_seo);
            $this->db->update('cripto_information', $dataRead);

            $data['detail'] = $this->info_m->select_detail_info($info_seo)->row();
            $this->template_front->display('front/info_detail_view', $data);
        }
    }
}
/* Location: ./application/controller/Info.php */
