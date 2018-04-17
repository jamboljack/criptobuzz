<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_education()
    {
        $this->db->select('COUNT(education_id) as total');
        $this->db->from('my_education');

        return $this->db->get();
    }

    public function select_experience()
    {
        $this->db->select('COUNT(experience_id) as total');
        $this->db->from('my_experience');

        return $this->db->get();
    }

    public function select_skill()
    {
        $this->db->select('COUNT(skill_id) as total');
        $this->db->from('my_skill');

        return $this->db->get();
    }

    public function select_work()
    {
        $this->db->select('COUNT(work_id) as total');
        $this->db->from('my_work');

        return $this->db->get();
    }
}
/* Location: ./application/model/admin/Home_m.php */
