<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class context_model extends CI_Model {
    public function __construct()
		{
			$this->load->database();
        }

        function getContext($kat){
            $query = " SELECT * FROM contextmanagement WHERE kategori = {$kat} ";
            $stmt = $this->db->query( $query );
            return $stmt;
        }

        function getKat(){
            $query = " SELECT * FROM subcontext";
            $stmt = $this->db->query( $query );
            return $stmt;
        }

        function deleteContext($id){
            $query = "DELETE FROM contextmanagement WHERE id_context={$id}";
            $this->db->query($query);  
            return true;
        }

        function getContextID($id){
            $query = " SELECT * FROM contextmanagement WHERE id_context = {$id} ";
            $stmt = $this->db->query( $query );
            return $stmt;
        }

        function updateFront(){
            $judul = $this->input->post('subject');
            $desk = $this->input->post('message');
            $data = array(
                $judul,
                $desk
              );
            $query = "UPDATE contextmanagement SET judul= ? , deskripsi=? WHERE kategori=1";
            $this->db->query($query,$data);  
            return true;
        }

        function updateKat1(){
            $judul = $this->input->post('subject');
            $desk = $this->input->post('message');
            $data = array(
                $judul,
                $desk
              );
            $query = "UPDATE contextmanagement SET judul= ? , deskripsi=? WHERE kategori=2";
            $this->db->query($query,$data);  
            return true;
        }

        function updateKat2($id){
            $judul = $this->input->post('subject');
            $desk = $this->input->post('desk');
            $sub = $this->input->post('kategori');
            $data = array(
                $judul,
                $desk,
                $sub,
                $id
              );
            $query = "UPDATE contextmanagement SET judul= ? , deskripsi=?, sub_kategori=? WHERE id_context=?";
            $this->db->query($query,$data);  
            return true;
        }

        function tambahKat2(){
        $title = $this->input->post('subject');
        $message = $this->input->post('desk');
        $sub = $this->input->post('kategori');
        $kat = 3;
        $data = array(
            $title,
            $message,
            $kat,
            $sub,
          );
          $sql = "INSERT INTO contextmanagement (judul, deskripsi, kategori, sub_kategori) VALUES (?, ?, ?, ?)";
          $this->db->query($sql, $data);  
          return true;   
        }
    }?>