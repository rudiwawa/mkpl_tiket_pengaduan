<?php
 
	class News_model extends CI_Model
	{
		 
		public function __construct()
		{
			$this->load->database();
		}
 
		function getAllData($limit,$start){
			$this->db->select("*");
			$this->db->from("news");
			$this->db->order_by("date_post", "DESC");
			$this->db->limit($limit, $start);
			$query = $this->db->get();
			return $query;
		}

		function getAllData2($offset,$limit){
			$query = " SELECT * FROM news ORDER BY date_post DESC LIMIT {$offset},{$limit}";
			$stmt = $this->db->query( $query );
			return $stmt->result();
		}

		function getNews($nID){
			$query = " SELECT * FROM news WHERE newsID={$nID} ";
			$stmt = $this->db->query( $query );
			return $stmt;
		}

		function deleteNews($nID){
			$query = " DELETE FROM news WHERE newsID={$nID} ";
			$this->db->query( $query );
			return true;
		}

		function newNews($aID){
			$title = $this->input->post('subject');
			$message = $this->input->post('message');
				$data = array(
				$aID,
				$title,
				$message
			);
				$sql = "INSERT INTO news (adminID, title, message) VALUES (?, ?, ?)";
				$this->db->query($sql, $data);
		  }
		  
		  function editNews($nID){
			$title = $this->input->post('subject');
			$message = $this->input->post('message');
				$data = array(
				$title,
				$message
			);
				$sql = 'UPDATE news SET title= ? , message= ? WHERE newsID='.$nID;
				$this->db->query($sql, $data);
		  }

		  function insertGambar($last, $gambar){
			$data = array(
				$gambar,
				$last
			  );
			  $sql = "UPDATE news SET foto=? WHERE newsID=?";
			  $this->db->query($sql, $data);  
			  return true;      
		  }

		  function getLastnews(){
			$query = "SELECT newsID FROM news ORDER BY date_post DESC LIMIT 1";
			$stmt = $this->db->query( $query );
			$coba = $stmt->row();    
			return $coba->newsID;
		  }
		  
	}