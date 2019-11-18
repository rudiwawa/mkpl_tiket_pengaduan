<?php

  class C_login extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('login_model');
      $this->load->library('form_validation');
  }

  function index(){
    if (null == ($this->session->userdata('akses'))) {
      $stmt['prov'] = $this->login_model->listProvinsi();
      $this->load->view('login',$stmt);
    } else{
        if($this->session->userdata('akses') == '1'){
			    redirect('C_admin');
		    } else if ($this->session->userdata('akses') == '2') {
          redirect('C_user');
        } else if ($this->session->userdata('akses') == '3') {
        redirect('C_client');
        }
      }  
  }

  function kota(){
    $id = $this->input->post('id');
    $data = $this->login_model->listKota($id);
    echo json_encode($data);
  }

  function auth(){
      $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
      $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
      $cek_admin=$this->login_model->auth_admin($email,$password);

      if($cek_admin->num_rows() > 0){ //jika login sebagai admin
              $data=$cek_admin->row_array();
              $this->session->set_userdata('masuk',TRUE);
              $this->session->set_userdata('akses','1');
              $this->session->set_userdata('ses_id',$data['adminID']);
              $this->session->set_userdata('ses_email',$data['email']);
              $this->session->set_userdata('ses_nama',$data['name']);
              if($this->input->post("remember")) {
                setcookie ("loginId", $email, time()+ (10 * 365 * 24 * 60 * 60));  
                setcookie ("loginPass", $password,  time()+ (10 * 365 * 24 * 60 * 60));
              } else {
                setcookie ("loginId",""); 
                setcookie ("loginPass","");
              }
              session_start();
              redirect('C_admin');

      }else{ //jika login sebagai user
                  $cek_user=$this->login_model->auth_user($email,$password);
                  if($cek_user->num_rows() > 0){
                          $data=$cek_user->row_array();
                  $this->session->set_userdata('masuk',TRUE);
                          $this->session->set_userdata('akses','2');
                          $this->session->set_userdata('ses_id',$data['userID']);
                          $this->session->set_userdata('ses_email',$data['email']);
                          $this->session->set_userdata('ses_dep',$data['departmenID']);
                          $this->session->set_userdata('ses_nama',$data['user_name']);
                          $this->session->set_userdata('ses_foto',$data['foto']);
                          session_start();
                          redirect('C_user');
                  }else{ 
                          $cek_client=$this->login_model->auth_client($email,$password);
                          if($cek_client->num_rows() > 0){
                            $data=$cek_client->row_array();
                            $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['clientID']);
                            $this->session->set_userdata('ses_email',$data['email']);
                            $this->session->set_userdata('ses_nama',$data['fullname']);
                            $this->session->set_userdata('ses_foto',$data['foto']);
                            if(!empty($this->input->post("remember"))) {
                              setcookie ("loginId", $email, time()+ (10 * 365 * 24 * 60 * 60));  
                              setcookie ("loginPass", $password,  time()+ (10 * 365 * 24 * 60 * 60));
                            } else {
                              setcookie ("loginId",""); 
                              setcookie ("loginPass","");
                            }
                            session_start();
                            redirect('C_client');
                          }else{
                            echo $this->session->set_flashdata('msg','Email Atau Password Salah');
                            redirect('C_login');}
                  }
      }

  }

  function logout(){
      $this->session->sess_destroy();
      redirect('C_login');
  }
  public function forgotpassword(){
    $this->load->library('email');
      $config = array(
        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
        'smtp_host' => 'smtp.gmail.com', 
        'smtp_port' => 465,
        'smtp_user' => 'leonardonnn19@gmail.com',
        'smtp_pass' => 'ultramilk',
        'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
        'mailtype' => 'text', //plaintext 'text' mails or 'html'
        'smtp_timeout' => '4', //in seconds
        'charset' => 'iso-8859-1',
        'newline'=> "\r\n",
        'wordwrap' => TRUE
      );
      $this->email->initialize($config);   
      $from = $config['smtp_user'];
      $to = $this->input->post('email');
      $subject = " Password Anda";
      $pass=$this->login_model->forget($to);
      $password= base64_decode($pass);
      $this->email->from($from);
      $this->email->to($to);
      $this->email->subject($subject);
      $this->email->message($password);

      if ($this->email->send()) {
          echo 'Your Email has successfully been sent.';
          redirect('C_login');
      } else {
            show_error($this->email->print_debugger());
        }
  }

  }


?>
