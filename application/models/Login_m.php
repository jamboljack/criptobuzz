<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_user_account($username, $password)
    {
        $this->db->select('*');
        $this->db->from('cripto_users');
        $this->db->where('user_username', $username);
        $this->db->where('user_password', $password);

        return $this->db->get();
    }

    public function reset_data()
    {
        $kode_reset = md5(uniqid(rand()));
        $data       = array(
            'user_key_forgot'  => $kode_reset,
            'user_date_update' => date('Y-m-d H:i:s'),
        );

        $this->db->where('user_email', $this->input->post('email_forgot', 'true'));
        $this->db->update('cripto_users', $data);

        $email        = trim(stripHTMLtags($this->input->post('email_forgot', 'true')));
        $contact      = $this->db->get_where('cripto_contact', array('contact_id' => 1))->row();
        $website      = trim($contact->contact_web);
        $sender_email = 'no-reply@sewamobilsentani.com';
        $sender_name  = 'No-reply';
        $subject      = "Reset Password";
        $message      = "<p>Please Click Link for Reset Password : <a href=" . $website . '/login/resetpassword/' . $kode_reset . ">Link</a>
                        <br>
                        or Copy Paste this Link " . $website . "/login/resetpassword/" . $kode_reset . "</p>";
        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->from($sender_email, $sender_name);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            $response = ['status' => 'success', 'message' => 'Please Check Your Email to Reset your Password'];
        } else {
            $response = ['status' => 'failed', 'message' => 'Send Email Failed.'];
        }

        echo json_encode($response);
    }

    public function update_password()
    {
        $user_key_forgot = $this->uri->segment(3);
        $password        = trim($this->input->post('newpass', 'true'));

        $data = array(
            'user_password'    => sha1($password),
            'user_date_update' => date('Y-m-d H:i:s'),
        );

        $this->db->where('user_key_forgot', $user_key_forgot);
        $this->db->update('cripto_users', $data);
    }
}
/* Location: ./application/model/Login_m.php */
