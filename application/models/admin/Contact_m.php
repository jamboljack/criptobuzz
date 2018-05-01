<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contact_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_detail($contact_id = 1)
    {
        $this->db->select('*');
        $this->db->from('cripto_contact');
        $this->db->where('contact_id', $contact_id);

        return $this->db->get();
    }

    public function update_data()
    {
        $contact_id = 1;
        if (!empty($_FILES['foto']['name'])) {
            $data = array(
                'contact_name'    => strtoupper(stripHTMLtags($this->input->post('name', 'true'))),
                'contact_address' => strtoupper(stripHTMLtags($this->input->post('address', 'true'))),
                'contact_phone'   => trim(stripHTMLtags($this->input->post('phone', 'true'))),
                'contact_email'   => trim(stripHTMLtags($this->input->post('email', 'true'))),
                'contact_web'     => trim(stripHTMLtags($this->input->post('web', 'true'))),
                'contact_image'   => $this->upload->file_name,
                'contact_update'  => date('Y-m-d H:i:s'),
            );
        } else {
            $data = array(
                'contact_name'    => strtoupper(stripHTMLtags($this->input->post('name', 'true'))),
                'contact_address' => strtoupper(stripHTMLtags($this->input->post('address', 'true'))),
                'contact_phone'   => trim(stripHTMLtags($this->input->post('phone', 'true'))),
                'contact_email'   => trim(stripHTMLtags($this->input->post('email', 'true'))),
                'contact_web'     => trim(stripHTMLtags($this->input->post('web', 'true'))),
                'contact_update'  => date('Y-m-d H:i:s'),
            );
        }

        $this->db->where('contact_id', $contact_id);
        $this->db->update('cripto_contact', $data);
    }
}
/* Location: ./application/model/admin/Contact_m.php */
