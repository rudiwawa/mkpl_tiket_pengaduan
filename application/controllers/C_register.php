<?php
class C_register extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
    }
    
    public function auth(){
        $this->load->model('register_model');
        $result = $this->register_model->validate();
        if ($result) {
          $msg = '<h3>Register Success</h3><br />';
          $this->send();
          redirect('C_login');
        } else {
          $msg = '<h3><font color=red>Username Sudah Terpakai</font></h3><br />';
          $this->session->set_flashdata('register', $msg);
          $this->load->view('login');
        }
    }

    function send() {
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
      $fullname = $this->input->post('fullname');
      $instansi = $this->input->post('instansi');
      $alamat = $this->input->post('alamat_instansi');
      $kota = $this->input->post('kota_instansi');
      $provinsi = $this->input->post('provinsi_instansi');
      $telp = $this->input->post('no_telp');
      $to = $this->input->post('email');
      $subject = $fullname." Anda Telah Terdaftar";

      $this->email->from($from);
      $this->email->to($to);
      $this->email->subject($subject);
      $this->email->message("ghdghgdj");

      if ($this->email->send()) {
          echo 'Your Email has successfully been sent.';
      } else {
            show_error($this->email->print_debugger());
        }
  }
}
?>