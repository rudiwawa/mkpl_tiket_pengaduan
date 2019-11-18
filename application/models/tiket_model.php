<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class tiket_model extends CI_Model {
    public function __construct()
		{
			$this->load->database();
        }
        
    function selectAll(){

        $query = "SELECT
        nib,nama,harga_jual,jumlah,tanggal_tambah
        FROM
        " . $this->table_name . "
        ";


        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt;
    }
	function listAllAdmin(){

    $query = " SELECT DISTINCT tiket.tiketID, tiket.title, department.Nama_Department, tiket.status, tiket.date_post, client.fullname, tiket.userID FROM tiket JOIN client ON tiket.clientID = client.clientID JOIN user ON tiket.departmentID = user.departmenID JOIN department ON tiket.departmentID = department.departmentID ORDER BY date_post DESC";

    $stmt = $this->db->query( $query );
    

    return $stmt;
    }
	function listUserTiket($uID,$st){
        if ($st==null) {
            $query = " SELECT tiket.tiketID, tiket.title, client.fullname, tiket.userID, user.user_name, department.Nama_Department, tiket.status, tiket.date_post FROM tiket JOIN client  ON tiket.clientId = client.clientId JOIN user ON tiket.userID = user.userID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.userID = {$uID}"; 
        } else {
            $query = " SELECT tiket.tiketID, tiket.title, client.fullname, tiket.userID, user.user_name, department.Nama_Department, tiket.status, tiket.date_post FROM tiket JOIN client  ON tiket.clientId = client.clientId JOIN user ON tiket.userID = user.userID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.userID = {$uID} AND tiket.status= {$st}";
        }
        $stmt = $this->db->query( $query );
        return $stmt;
    }

    function listUserDepartment($depID){
        $query = "SELECT user.userID, user.user_name, department.Nama_Department, ratarata.ratarata_star FROM user JOIN department ON user.departmenID = department.departmentID JOIN ratarata ON user.userID = ratarata.userID WHERE user.departmenID={$depID}";
        $stmt = $this->db->query( $query );        
        return $stmt;
    }

    function listDepartment(){
        $query = "SELECT departmentID, Nama_Department, (SELECT COUNT(*) FROM `user` WHERE user.departmenID = department.departmentID) AS jumlah FROM department";
        $stmt = $this->db->query( $query );        
        return $stmt;
    }

    function deleteDep($depID){
        $query = "DELETE FROM department WHERE departmentID={$depID}";
        $this->db->query($query);  
        return true;
    }

    function editDep($depID){
        $nama = $this->input->post('name');
        $data = array(
            $nama
          );
        $query = "UPDATE department SET Nama_Department= ? WHERE departmentID={$depID}";
        $this->db->query($query,$data);  
        return true;
    }

    function newDepartment(){
        $nama = $this->input->post('name');
        $this->db->where('Nama_Department', $nama);
        $query = $this->db->get('department');
        if ($query->num_rows() == 1) {
            return false;
          } else {
          $data = array(
            $nama
          );
          $sql = "INSERT INTO department (Nama_Department) VALUES (?)";
          $this->db->query($sql, $data);  
          return true;  
        }    
      }
     
      function performaUser($status){
        $query = $this->db->query("SELECT userID, user_name, (SELECT COUNT(*) FROM `tiket` WHERE tiket.userID = user.userID AND status={$status}) AS jumlah FROM user");
        foreach($query->result() as $data){
            $hasil[] = $data;
        }
        return $hasil;
    }
    function listIndexAdmin(){

    $query = " SELECT DISTINCT tiket.tiketID, tiket.title, department.Nama_Department, tiket.status, tiket.date_post, client.fullname, tiket.userID FROM tiket JOIN client ON tiket.clientID = client.clientID JOIN user ON tiket.departmentID = user.departmenID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.date_post >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY date_post DESC";
    $stmt = $this->db->query( $query );
    return $stmt;
    }

    function getFirstMessage($id){

        $query = " SELECT tiket.message, client.fullname, tiket.status, tiket.clientID, tiket.userID, tiket.forward_status , tiket.date_post, tiket.title, tiket.tiketID, tiket.gambar FROM tiket JOIN client  ON tiket.clientID = client.clientID  WHERE tiket.tiketID = {$id}";
    
        $stmt = $this->db->query( $query );
        
    
        return $stmt;
    }

    function getFirstMessageForward($id){

        $query = " SELECT forward.forwardID, user.user_name, forward.tiketID  ,forward.departmentID,  forward.date, forward.message, forward.foto, tiket.forward_status FROM forward JOIN user  ON forward.userID = user.userID JOIN tiket ON forward.tiketID = tiket.tiketID WHERE forward.forwardID = {$id}";
    
        $stmt = $this->db->query( $query );
        
    
        return $stmt;
    }
    
    function balas($id){

    $query = " SELECT balasan.balasanID, balasan.message, client.fullname, user.user_name, tiket.userID, tiket.clientID, balasan.time, balasan.pengirim, tiket.tiketID, balasan.image FROM tiket JOIN client  ON tiket.clientId = client.clientId JOIN user ON tiket.userID = user.userID JOIN balasan ON tiket.tiketID = balasan.tiketID WHERE balasan.tiketID = {$id}";

    $stmt = $this->db->query( $query );
    
    
    return $stmt;
    }

    function getBalasForward($id){

        $query = " SELECT balasan_forward.balasanforwardID, balasan_forward.message, user.user_name, balasan_forward.userID, balasan_forward.time,  forward.forwardID, balasan_forward.image FROM balasan_forward JOIN forward  ON balasan_forward.forwardID = forward.forwardID JOIN user ON balasan_forward.userID = user.userID WHERE balasan_forward.forwardID = {$id}";
    
        $stmt = $this->db->query( $query );
        
        
        return $stmt;
        }
    
    function listUserAdmin(){

        $query = "SELECT USER.userID, USER.user_name, department.Nama_Department, ratarata.ratarata_star FROM USER JOIN department ON USER.departmenID = department.departmentID JOIN ratarata ON USER.userID = ratarata.userID";
    
        $stmt = $this->db->query( $query );
        
    
        return $stmt;
    }

    function listAllUser($departmentID){

    $query = " SELECT tiket.tiketID, tiket.title, client.fullname, user.user_name, department.Nama_Department, tiket.status, tiket.date_post FROM tiket JOIN client  ON tiket.clientId = client.clientId JOIN user ON tiket.userID = user.userID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.departmentID = {$departmentID}";

    $stmt = $this->db->query( $query );
     
    return $stmt;
    }

    function getTodayTicket(){
        $query = " SELECT tiket.tiketID, tiket.title, client.fullname, user.user_name, department.Nama_Department, tiket.status, tiket.date_post FROM tiket JOIN client  ON tiket.clientID = client.clientID JOIN user ON tiket.userID = user.userID JOIN department ON tiket.departmentID = department.departmentID WHERE DATE('date_post') = CURDATE()";
        $stmt = $this->db->query( $query );
        return $stmt->num_rows();
    }

    function getToday(){
        $query = " SELECT DISTINCT tiket.tiketID, tiket.title, department.Nama_Department, tiket.status, tiket.date_post, client.fullname, tiket.userID FROM tiket JOIN client ON tiket.clientID = client.clientID JOIN user ON tiket.departmentID = user.departmenID JOIN department ON tiket.departmentID = department.departmentID WHERE date_post >= CURDATE()
        AND date_post < CURDATE() + INTERVAL 1 DAY";
        $stmt = $this->db->query( $query );
        return $stmt->num_rows();
    }

    function getDepID($DID){
        $query = " SELECT departmentID FROM department WHERE Nama_Department= '{$DID}'";
        $stmt = $this->db->query( $query );
        $coba = $stmt->row();    
        return $coba->departmentID;
    }

    function getUserForward($fID){
        $query = " SELECT userID FROM forward WHERE forwardID= {$fID}";
        $stmt = $this->db->query( $query );
        $coba = $stmt->row();    
        return $coba->userID;
    }

    function listTiket($cID){
    $query = " SELECT DISTINCT tiket.tiketID, tiket.title, department.Nama_Department, tiket.status, tiket.date_post, client.fullname, tiket.userID FROM tiket JOIN client ON tiket.clientID = client.clientID JOIN user ON tiket.departmentID = user.departmenID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.clientID = {$cID} ORDER BY date_post DESC";
        $stmt = $this->db->query($query);
        return $stmt;
        }

        function listTiketUser($depID){
            $query = " SELECT DISTINCT tiket.tiketID, tiket.title, department.Nama_Department, tiket.status, tiket.date_post, client.fullname, tiket.userID FROM tiket JOIN client ON tiket.clientID = client.clientID JOIN user ON tiket.departmentID = user.departmenID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.departmentID = {$depID} ORDER BY date_post DESC";
                $stmt = $this->db->query($query);
                return $stmt;
        }
        function listIndexUser($depID){
            $query = "SELECT DISTINCT tiket.tiketID, tiket.title, department.Nama_Department, tiket.status, tiket.date_post, client.fullname, tiket.userID FROM tiket JOIN client ON tiket.clientID = client.clientID JOIN user ON tiket.departmentID = user.departmenID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.departmentID = {$depID} AND tiket.date_post >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY date_post DESC";
            $stmt = $this->db->query($query);
            return $stmt;
        }
        function jumlah_data($cID){
            $query = " SELECT DISTINCT tiket.tiketID  FROM tiket  WHERE tiket.clientID = {$cID} ORDER BY date_post DESC";
                $stmt = $this->db->query($query);
                return $stmt->num_rows();
                } 
    function getUser(){
        $query = "SELECT  user.user_name, userID, foto FROM USER";
        $stmt = $this->db->query($query);
        return $stmt;
    }
    function hapus($last){
        $query = "DELETE FROM tiket WHERE tiketID={$last}";
        $this->db->query($query);  
        return true;
    }
    function getTodayTicketUsr($depID){
        $query = " SELECT DISTINCT tiket.tiketID, tiket.title, department.Nama_Department, tiket.status, tiket.date_post, client.fullname, tiket.userID FROM tiket JOIN client ON tiket.clientID = client.clientID JOIN user ON tiket.departmentID = user.departmenID JOIN department ON tiket.departmentID = department.departmentID WHERE tiket.departmentID = {$depID} AND date_post >= CURDATE()
        AND date_post < CURDATE() + INTERVAL 1 DAY";
        $stmt = $this->db->query( $query );
        return $stmt->num_rows();
    }
    
    function newTiket($cID, $depID){
        $title = $this->input->post('subject');
        $message = $this->input->post('description');
        //$gambar = $this->input->post('foto');
        
        $data = array(
            $cID,
            $depID,
            $title,
            $message,
          //  $gambar,
          );
          $sql = "INSERT INTO tiket (clientID, departmentID, title, message) VALUES (?, ?, ?, ?)";
          $this->db->query($sql, $data);  
          return true;      
      }

      function newForward($uID,$tID, $depID){
        $message = $this->input->post('description');
        //$gambar = $this->input->post('foto');
        
        $data = array(
            $uID,
            $tID,
            $depID,
            $message
          //  $gambar,
          );
          $sql = "INSERT INTO forward (userID, tiketID,  departmentID, message) VALUES (?, ?, ?, ?)";
          $this->db->query($sql, $data);  
          return true;      
      }

      function balasForward($fID,$uID){
        $message = $this->input->post('description');
        //$gambar = $this->input->post('foto');
        
        $data = array(
            $fID,
            $uID,
            $message
          //  $gambar,
          );
          $sql = "INSERT INTO balasan_forward ( forwardID, userID, message) VALUES (?, ?, ?)";
          $this->db->query($sql, $data);  
          return true;      
      }

      function getLastTicket($cID){
        $query = "SELECT tiketID FROM tiket WHERE clientId = {$cID} ORDER BY date_post DESC LIMIT 1";
        $stmt = $this->db->query( $query );
        $coba = $stmt->row();    
        return $coba->tiketID;
      }

      function getLastForward($tID){
        $query = "SELECT forwardID FROM forward WHERE tiketID = {$tID} ORDER BY date DESC LIMIT 1";
        $stmt = $this->db->query( $query );
        $coba = $stmt->row();    
        return $coba->forwardID;
      }
      function insertGambar($last, $gambar){
        $data = array(
            $gambar,
            $last
          );
          $sql = "UPDATE tiket SET gambar=? WHERE tiketID=?";
          $this->db->query($sql, $data);  
          return true;      
      }
      function insertGambarForward($last, $gambar){
        $data = array(
            $gambar,
            $last
          );
          $sql = "UPDATE forward SET foto=? WHERE forwardID=?";
          $this->db->query($sql, $data);  
          return true;      
      }
      function insertGambarBalasForward($last, $gambar){
        $data = array(
            $gambar,
            $last
          );
          $sql = "UPDATE balasan_forward SET image=? WHERE forwardID=?";
          $this->db->query($sql, $data);  
          return true;      
      }
      function getDepIDBalas($tID){
      $query = "SELECT tiket.departmentID FROM tiket WHERE tiketID = {$tID}";
        $stmt = $this->db->query( $query );
        $coba = $stmt->row();    
        return $coba->departmentID;
      }

      function getClientIDBalas($tID){
        $query = "SELECT tiket.clientId FROM tiket WHERE tiketID = {$tID}";
          $stmt = $this->db->query( $query );
          $coba = $stmt->row();    
          return $coba->clientId;
        }

      function getUserIDBalas($tID){
        $query = "SELECT tiket.userID FROM tiket WHERE tiketID = {$tID}";
          $stmt = $this->db->query( $query );
          $coba = $stmt->row();    
          return $coba->userID;
        }

        function updateUserID($uID,$tikID){
            $data = array(
                $uID,
                $tikID
              );
              $sql = "UPDATE tiket SET userID=? WHERE tiketID=?";
              $this->db->query($sql, $data);  
              return true;
          }

          function updateForwardStatus($tID){
            $data = array(
                $tID
              );
              $sql = "UPDATE tiket SET forward_status=1 WHERE tiketID=?";
              $this->db->query($sql, $data);  
              return true;
          }

        function addBalasan($cID,$depID,$userID,$tikID,$pengirim){
            $message = $this->input->post('description');
            $data = array(
                $tikID,
                $depID,
                $userID,
                $cID,
                $message,
                $pengirim,
              );
              $sql = "INSERT INTO balasan (tiketID, departmenID, userID, clientID, message, pengirim) VALUES ( ?, ?, ?, ?, ?, ?)";
              $this->db->query($sql,$data);  
              return true;      
          }
          function getLastBalasan($tikID){
            $query = "SELECT balasanID FROM balasan WHERE tiketID = {$tikID} ORDER BY time DESC LIMIT 1";
            $stmt = $this->db->query( $query );
            $coba = $stmt->row();    
            return $coba->balasanID;
          }
          function getLastBalasanForward($fID){
            $query = "SELECT balasanforwardID FROM balasan_forward WHERE forwardID = {$fID} ORDER BY time DESC LIMIT 1";
            $stmt = $this->db->query( $query );
            $coba = $stmt->row();    
            return $coba->balasanforwardID;
          }

          function insertGambarBalas($last,$gambar){
            $data = array(
                $gambar,
                $last
              );
              $sql = "UPDATE balasan SET image=? WHERE balasanID=?";
              $this->db->query($sql, $data);  
              return true;
          }
    
    function getDepartment($dID){
        $query = "SELECT * FROM department WHERE departmentID = {$dID}";
        $stmt = $this->db->query( $query );    
        return $stmt;
    }
    
    // create product
    function close($tikID){
        $status="1";
        $data = array(
            $status,
            $tikID
          );
        $sql = "UPDATE tiket SET status= ?  WHERE tiketID = ?";
        $this->db->query($sql, $data);  
        return true;      
      }

      function insertNotifClient($id, $cID, $tipe){
        $data = array(
            $id,
            $cID,
            $tipe
        );
        $sql = "INSERT INTO notificationclient ( id, clientID, type ) VALUES (?, ?, ?)";
        $this->db->query($sql, $data);  
        return true; 
      }

        function getNotifClient($cID){
            $query = "SELECT * FROM notificationclient WHERE clientID = {$cID} AND status = 0 ORDER BY notifID DESC";
            $stmt = $this->db->query( $query );    
            return $stmt;
        }

        function getTotalNotifClient($cID){
            $query = "SELECT * FROM notificationclient WHERE clientID = {$cID} AND status = 0 ORDER BY notifID DESC";
            $stmt = $this->db->query( $query );    
            return $stmt->num_rows();
        }

        function updateNotifClient($notifID){
            $status="1";
            $data = array(
                $status,
                $notifID
            );
            $sql = "UPDATE notificationclient SET status= ?  WHERE notifID = ?";
            $this->db->query($sql, $data);  
            return true; 
        }

    function insertNotifUser($id, $depID, $userID ,$tipe){
        $data = array(
            $id,
            $depID,
            $userID,
            $tipe
        );
        $sql = "INSERT INTO notifuser ( id, departmentID, userID, tipe ) VALUES (?, ?, ?, ?)";
        $this->db->query($sql, $data);  
        return true; 
    }

    function getNotifUser($depID, $uID){
            $query = "SELECT * FROM notifuser WHERE departmentID = {$depID} AND (userID = {$uID} OR userID = 0) AND status = 0 ORDER BY notifID DESC";
            $stmt = $this->db->query( $query );    
            return $stmt;
    }
    
    function getTotalNotifUser($depID, $uID){
        $query = "SELECT * FROM notifuser WHERE departmentID = {$depID} AND (userID = {$uID} OR userID = 0) AND status = 0 ORDER BY notifID DESC";
        $stmt = $this->db->query( $query );    
        return $stmt->num_rows();
    }

    function listForward($dID,$uID){
        $query = " SELECT forward.forwardID, forward.tiketID, user.user_name, department.Nama_Department, forward.date, tiket.forward_status FROM forward JOIN department ON forward.departmentID = department.departmentID JOIN user ON forward.userID= user.userID JOIN tiket ON forward.tiketID = tiket.tiketID  WHERE forward.departmentID = {$dID} OR forward.userID={$uID} ORDER BY date DESC";
        $stmt = $this->db->query($query);
        return $stmt;
        }

    function updateNotifUser($notifID){
        $status="1";
        $data = array(
            $status,
            $notifID
          );
        $sql = "UPDATE notifuser SET status= ?  WHERE notifID = ?";
        $this->db->query($sql, $data);  
        return true; 
    }

    function updateForwardChange($tikID){
        $status="2";
        $data = array(
            $status,
            $tikID
          );
        $sql = "UPDATE tiket SET forward_status= ?  WHERE tiketID = ?";
        $this->db->query($sql, $data);  
        return true; 
    }

    function insertNotifAdmin($id, $tipe, $status){
        $data = array(
            $id,
            $tipe,
            $status
        );
        $sql = "INSERT INTO notifadmin ( tiketID,  type, status ) VALUES (?, ?, ?)";
        $this->db->query($sql, $data);  
        return true; 
    }

    function getNotifAdmin(){
            $query = "SELECT * FROM notifadmin WHERE status= 0 ORDER BY notifID DESC";
            $stmt = $this->db->query( $query );    
            return $stmt;
    }
    
    function getTotalNotifAdmin(){
        $query = "SELECT * FROM notifadmin WHERE status= 0 ORDER BY notifID DESC";
        $stmt = $this->db->query( $query );    
        return $stmt->num_rows();
    }

    function updateNotifAdmin($notifID){
        $status="1";
        $data = array(
            $status,
            $notifID
          );
        $sql = "UPDATE notifadmin SET status= ?  WHERE notifID = ?";
        $this->db->query($sql, $data);  
        return true; 
    }

    function profilclient($cID){
        $query = "SELECT * , (SELECT nama_provinsi FROM provinsi WHERE provinsi.IDprov = client.provinsi_instansi) AS provinsi , (SELECT nama_kota FROM kota WHERE kota.IDkota= client.kota_instansi) AS kota FROM `client` WHERE clientID ={$cID}";
        $stmt = $this->db->query( $query );
        return $stmt;
        }
    function profilClientAll(){
        $query = " SELECT clientID, foto FROM client";
        $stmt = $this->db->query( $query );
        return $stmt;
        }
    function rata2Rating($uID){
        $query = " SELECT ratarata_star FROM ratarata WHERE userID={$uID}";
        $stmt = $this->db->query( $query );
        return $stmt;
        }
    function ratingUser($uID){
        $query = " SELECT * FROM rating JOIN client ON rating.clientID=client.clientID WHERE rating.userID={$uID} ORDER BY rating.date DESC LIMIT 5";
        $stmt = $this->db->query( $query );
        return $stmt;
        }
    function profilUser($uID){
        $query = " SELECT * FROM user JOIN department ON user.departmenID=department.departmentID WHERE user.userID={$uID}";
        $stmt = $this->db->query( $query );
        return $stmt;
        }

    function listUser(){
        $query = " SELECT user.userID, user.user_name, department.Nama_Department, ratarata.ratarata_star FROM user JOIN department  ON user.departmenID = department.departmentID JOIN ratarata ON user.userID=ratarata.userID";
        $stmt = $this->db->query( $query );
        return $stmt;
    }

    function addRating($tikID, $cID, $uID){
        $rating = $this->input->post('akhir');
        $review = $this->input->post('review');
        $data = array(
            $tikID,
            $cID,
            $uID,
            $rating,
            $review,
          );
          $sql = "INSERT INTO rating (tiketID, clientID, userID, star, message) VALUES (?, ?, ?, ?, ?)";
          $this->db->query($sql, $data);  
          return true;      
      }

    function avgRating($uID){
            $query = "SELECT AVG(star) AS rata2 FROM rating WHERE userID = {$uID}";
            $stmt = $this->db->query( $query );
            $coba = $stmt->row();    
            return $coba->rata2;
            }
    
    function getTimestart($tikID){
            $query = "SELECT date_post FROM tiket WHERE tiketID = {$tikID}";
            $stmt = $this->db->query( $query );
            $coba = $stmt->row();    
            return $coba->date_post;
          }

    function getTimefinish($last){
            $query = "SELECT time FROM balasan WHERE balasanID = {$last}";
            $stmt = $this->db->query( $query );
            $coba = $stmt->row();    
            return $coba->time;
          }

    function addPerforma($uID,$tikID,$ts,$tf,$time){
        $data = array(
            $uID,
            $tikID,
            $ts,
            $tf,
            $time
          );
          $sql = "INSERT INTO performa (userID, tiketID, time_start, time_finish, time) VALUES (?, ?, ?, ?,?)";
          $this->db->query($sql, $data);  
          return true;      
      }

    function updateRata2($uID,$rata2){
        $data = array(
            $rata2,
            $uID
          );
          $sql = "UPDATE ratarata SET ratarata_star=? WHERE userID=?";
          $this->db->query($sql, $data);  
          return true;
      }

    function timedif($tikID,$last){
        $query="SELECT TIMESTAMPDIFF( HOUR, (SELECT date_post FROM tiket WHERE tiketID = {$tikID}), (SELECT time FROM balasan WHERE balasanID ={$last}) ) AS dif";
        $stmt = $this->db->query( $query );
        $coba = $stmt->row();    
        return $coba->dif;
    }

    function tiketUser($cID){
        $query = " SELECT DISTINCT tiket.tiketID  FROM tiket  WHERE tiket.clientID = {$cID} ORDER BY date_post DESC";
            $stmt = $this->db->query($query);
            return $stmt->num_rows();
            } 

    function performa(){
        $query = $this->db->query("SELECT * FROM performa ORDER BY userID");
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }

    function create(){

        // to get time-stamp for 'created' field
       // $this->getTimestamp();

        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    nama = ?, harga_jual = ?, jumlah = ?, tanggal_tambah = ? ";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->nama=htmlspecialchars(strip_tags($this->nama));
        $this->harga_jual=htmlspecialchars(strip_tags($this->harga_jual));
        $this->jumlah=htmlspecialchars(strip_tags($this->jumlah));
        $this->tanggal_tambah=htmlspecialchars(strip_tags($this->tanggal_tambah));

        // bind values
        $stmt->bindParam(1, $this->nama);
        $stmt->bindParam(2, $this->harga_jual);
        $stmt->bindParam(3, $this->jumlah);
        $stmt->bindParam(4, $this->tanggal_tambah);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    // used for the 'created' field when creating a product
    function getTimestamp(){
        date_default_timezone_set('Asia/Jakarta');
        $this->tanggal_tambah = date('Y-m-d H:i:s');
    }
	  public function readOne(){

        $query = "SELECT
                    nama, harga_jual, jumlah,tanggal_tambah 
                FROM
                    " . $this->table_name . "
                WHERE
                    nib = ?
                LIMIT
                    0,1";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->nib);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nama = $row['nama'];
        $this->harga_jual = $row['harga_jual'];
        $this->jumlah = $row['jumlah'];
        $this->tanggal_tambah = $row['tanggal_tambah'];
    }


}
?>