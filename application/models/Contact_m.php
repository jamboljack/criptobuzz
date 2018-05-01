<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contact_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_detail()
    {
        $this->db->select('*');
        $this->db->from('cripto_contact');
        $this->db->where('contact_id', 1);

        return $this->db->get();
    }

    public function insert_data()
    {
        $data = array(
            'message_name'    => ucwords(strtolower(stripHTMLtags($this->input->post('name', 'true')))),
            'message_email'   => trim(stripHTMLtags($this->input->post('email', 'true'))),
            'message_subject' => ucwords(strtolower(stripHTMLtags($this->input->post('subject', 'true')))),
            'message_phone'   => stripHTMLtags($this->input->post('phone', 'true')),
            'message_message' => trim(stripHTMLtags($this->input->post('message', 'true'))),
            'message_post'    => date('Y-m-d H:i:s'),
        );

        $this->db->insert('cripto_message', $data);
    }
}
/* Location: ./application/model/Contact_m.php */
