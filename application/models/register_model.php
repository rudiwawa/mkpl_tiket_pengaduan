<?php

  class register_model extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function validate(){
      $email = $this->input->post('email');
      $this->db->where('email', $email);
      $query = $this->db->get('client');
      if ($query->num_rows() == 1) {
        return false;
      } else {
        $password = base64_encode($this->input->post('password'));
        $fullname = $this->input->post('fullname');
        $instansi = $this->input->post('instansi');
        $alamat = $this->input->post('alamat_instansi');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $telp = $this->input->post('no_telp');
        $data = array(
          $email,
          $password,
          $fullname,
          $instansi,
          $alamat,
          $kota,
          $provinsi,
          $telp
        );
        $sql = "INSERT INTO client (email, password, fullname, instansi, alamat_instansi, kota_instansi, provinsi_instansi, nomor_telepon) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
        return true;
      }
    }

  }


?>
