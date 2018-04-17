<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_setting()
    {
        $this->db->select('*');
        $this->db->from('my_setting');
        $this->db->where('setting_id', 1);

        return $this->db->get();
    }

    public function select_social()
    {
        $this->db->select('*');
        $this->db->from('my_social');
        $this->db->order_by('social_id', 'asc');

        return $this->db->get();
    }

    public function select_about()
    {
        $this->db->select('*');
        $this->db->from('my_setting');
        $this->db->where('setting_id', 2);

        return $this->db->get();
    }

    public function select_profil()
    {
        $this->db->select('*');
        $this->db->from('my_profil');
        $this->db->where('profil_id', 1);

        return $this->db->get();
    }

    public function select_skill()
    {
        $this->db->select('*');
        $this->db->from('my_skill');
        $this->db->order_by('skill_name', 'asc');

        return $this->db->get();
    }

    public function select_more()
    {
        $this->db->select('*');
        $this->db->from('my_more');
        $this->db->order_by('more_name', 'asc');

        return $this->db->get();
    }

    public function select_education()
    {
        $this->db->select('*');
        $this->db->from('my_education');
        $this->db->order_by('education_id', 'desc');

        return $this->db->get();
    }

    public function select_experience()
    {
        $this->db->select('*');
        $this->db->from('my_experience');
        $this->db->order_by('experience_id', 'desc');

        return $this->db->get();
    }

    public function select_work()
    {
        $this->db->select('*');
        $this->db->from('my_work');
        $this->db->order_by('work_id', 'desc');

        return $this->db->get();
    }

    public function insert_data()
    {
        $data = array(
            'message_name'    => ucwords(strtolower(stripHTMLtags($this->input->post('name', 'true')))),
            'message_email'   => trim(stripHTMLtags($this->input->post('email', 'true'))),
            'message_subject' => ucwords(strtolower(stripHTMLtags($this->input->post('subject', 'true')))),
            'message_message' => trim(stripHTMLtags($this->input->post('message', 'true'))),
            'message_post'    => date('Y-m-d H:i:s'),
        );

        $this->db->insert('my_message', $data);
    }
}
/* Location: ./application/model/Home_m.php */
