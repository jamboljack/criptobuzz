<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Register_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_data()
    {
        // $this->load->library('recaptcha');
        // $captcha_answer = $this->input->post('g-recaptcha-response');
        // $rsp            = $this->recaptcha->verifyResponse($captcha_answer);

        // if ($rsp['success']) {
        $kode_aktivasi = md5(uniqid(rand()));
        $data          = array(
            'user_username'    => trim(stripHTMLtags($this->input->post('username', 'true'))),
            'user_password'    => sha1(trim(stripHTMLtags($this->input->post('password', 'true')))),
            'user_email'       => trim(stripHTMLtags($this->input->post('email', 'true'))),
            'user_level'       => 'Member',
            'user_status'      => 'Tidak Aktif',
            'user_key_reg'     => $kode_aktivasi,
            'user_date_create' => date('Y-m-d H:i:s'),
            'user_date_update' => date('Y-m-d H:i:s'),
        );

        $this->db->insert('cripto_users', $data);

        $username     = trim(stripHTMLtags($this->input->post('username', 'true')));
        $password     = trim(stripHTMLtags($this->input->post('password', 'true')));
        $email        = trim(stripHTMLtags($this->input->post('email', 'true')));
        $contact      = $this->db->get_where('cripto_contact', array('contact_id' => 1))->row();
        $website      = trim($contact->contact_web);
        $sender_email = 'no-reply@sewamobilsentani.com';
        $sender_name  = 'No-reply';
        $subject      = "Account Activation";
        $message      = "<p>Welcome, " . $username . "
                        <br>
                        Please Click Link for Activate your Account : <a href=" . $website . '/activate/code/' . $kode_aktivasi . ">Link</a>
                        <br>
                        or Copy Paste this Link ".$website."/activate/code/" . $kode_aktivasi .
            "</p>";

        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->from($sender_email, $sender_name);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            $response = ['status' => 'success', 'message' => 'Sign Up Successfull, please check your Email'];
        } else {
            $response = ['status' => 'failed', 'message' => 'Sign Up Failed.'];
        }
        // } else {
        //     $response['status'] = 'wrong';
        // }

        echo json_encode($response);
    }
}
/* Location: ./application/model/Register_m.php */
