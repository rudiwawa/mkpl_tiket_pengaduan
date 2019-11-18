<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	function auth_user($email,$password){
        $query=$this->db->query("SELECT * FROM user WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_client($email,$password){
        $pass=base64_encode($password);
        $query=$this->db->query("SELECT * FROM client WHERE email='$email' AND password='$pass' LIMIT 1");
        return $query;
    }
    
    function listProvinsi(){
        $query = "SELECT * FROM provinsi";
        $stmt = $this->db->query($query);        
        return $stmt;
    }

    function listKota($prov){
        $query = "SELECT * FROM kota WHERE IDprov = '$prov'";
        $stmt = $this->db->query($query);        
        return $stmt->result();
    }
 
	function auth_admin($email,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        return $query;
    }  

    function forget($email){
        $query=$this->db->query("SELECT password FROM client WHERE email='$email' LIMIT 1");
        $stmt=$query->row();
        return $stmt->password;
    }
    
    public function sendpassword($data) {
        $email = $data['email'];
        print_r($data);
        $query1 = $this->db->query("SELECT *  from client where email = '" . $email . "'");
        $row = $query1->result_array();
    
        if ($query1->num_rows() > 0) {
    
            $passwordplain = "";
            $passwordplain = rand(999999999, 9999999999);
            $newpass['password'] = md5($passwordplain);
            $this->db->where('user_email', $email);
            $this->db->update('user_registration', $newpass);
            $mail_message = 'Dear ' . $row[0]['fullname'] . ',' . "\r\n";
            $mail_message .= 'Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>' . $passwordplain . '</b>' . "\r\n";
            $mail_message .= '<br>Please Update your password.';
            $mail_message .= '<br>Thanks & Regards';
            $mail_message .= '<br>Your company name';
            require FCPATH . 'assets/PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPSecure = "tls";
            $mail->Debugoutput = 'html';
            $mail->Host = "ssl://smtp.googlemail.com";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = "xxxxxxxxx@gmail.com";
            $mail->Password = "xxxxxxxx";
            $mail->setFrom('xxxxxxx@gmail.com', 'admin');
            $mail->IsHTML(true);
            $mail->addAddress('user_email', $email);
            $mail->Subject = 'OTP from company';
            $mail->Body = $mail_message;
            $mail->AltBody = $mail_message;
    
            if (!$mail->send()) {
    
    
                $this->session->set_flashdata('msg', 'Failed to send password, please try again!');
            } else {
    
                echo $this->email->print_debugger();
                $this->session->set_flashdata('msg', 'Password sent to your email!');
            }
    
        }
    }
}