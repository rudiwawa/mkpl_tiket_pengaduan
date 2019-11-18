<?php

  class update_model extends CI_Model
  {

    function __construct()
    {
        $this->load->database();
    }

    function updateUserInfo($uID){
        $user_name = $this->input->post('user_name');
        $department = $this->input->post('department');
        $email = $this->input->post('email');
        $no_telepon = $this->input->post('no_telepon');
        $data = array(
          $user_name,
          $department,
          $email,
          $no_telepon
        );
        $sql = 'UPDATE user, department SET user.user_name = "'.$user_name.'", department.Nama_Department= "'.$department.'" , user.email = "'.$email.'" , user.no_telepon = "'.$no_telepon.'" WHERE user.departmenID = department.departmentID AND user.userID ='.$uID;
        $this->db->query($sql);
      } 
    
      function updateclientInfo($uID){
        $fullname = $this->input->post('fullname');
        $instansi = $this->input->post('instansi');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_telepon = $this->input->post('noHP');
        $data = array(
          $fullname,
          $instansi,
          $kota,
          $provinsi,
          $alamat,
          $email,
          $no_telepon
        );
        $sql = 'UPDATE client SET fullname = ? , instansi = ? , kota_instansi = ? , provinsi_instansi = ? , alamat_instansi = ? , email = ? , nomor_telepon = ? WHERE clientID ='.$uID;
        $this->db->query($sql,$data);
      }

      function updateclientPass($cID){
        $password = base64_encode($this->input->post('pass'));
        $this->db->where('password', $password);
        $query = $this->db->get('client');
        if ($query->num_rows() == 1) {
          $new =  base64_encode($this->input->post('new_pass'));
          $re =  base64_encode($this->input->post('re_pass'));
          if ($new == $re) {
            $sql = 'UPDATE client SET password = "'.$new.'" WHERE clientID ='.$cID;      
            $this->db->query($sql);
            return true; 
          } else {
            return false;
          }
        } else {
        return false;
        }
      }

      function getDepID($DID){
        $query = " SELECT departmentID FROM department WHERE Nama_Department= '{$DID}'";
        $stmt = $this->db->query( $query );
        $coba = $stmt->row();    
        return $coba->departmentID;
    }

    function newUser($DID){
      $email = $this->input->post('email');
      $this->db->where('email', $email);
      $query = $this->db->get('user');
      if ($query->num_rows() == 1) {
        return false;
      } else {
        $user_name = $this->input->post('user_name');
        $password = md5($this->input->post('pass'));
        $re = md5($this->input->post('re_pass'));
        $department = $DID;
        $no_telepon = $this->input->post('no_telepon');
        if ($password == $re) {
          $data = array(
            $email,
            $password,
            $user_name,
            $department,
            $no_telepon
          );
          $sql = "INSERT INTO user (email, password, user_name, departmenID, no_telepon) VALUES (?, ?, ?, ?, ?)";
          $this->db->query($sql, $data);
          return true;
        }
      }
    }
    
    function getUserID($uID){
      $query = " SELECT userID FROM user WHERE user_name= '{$uID}'";
      $stmt = $this->db->query( $query );
      $coba = $stmt->row();    
      return $coba->userID;
  }
    function ratingUser($uID){
        $query="INSERT INTO ratarata (userID, ratarata_star) values($uID,0)";
        $this->db->query($query); 
    }
    
    function updateUserPass($uID){
        $password = md5($this->input->post('pass'));
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
          $new = md5($this->input->post('new_pass'));
          $re = md5($this->input->post('re_pass'));
          if ($new == $re) {
            $sql = 'UPDATE user SET password = "'.$new.'" WHERE userID ='.$uID;      
            $this->db->query($sql);
            return true; 
          } else {
            return false;
          }
        } else {
        return false;
        }
      }
      function insertGambar($cID, $gambar){
        $data = array(
          $gambar,
          $cID
          );
          $sql = "UPDATE client SET foto=? WHERE clientID=?";
          $this->db->query($sql, $data);  
          return true;      
        }

        function insertGambarUser($cID, $gambar){
          $data = array(
            $gambar,
            $cID
            );
            $sql = "UPDATE user SET foto=? WHERE userID=?";
            $this->db->query($sql, $data);  
            return true;      
          }

    }
?>
