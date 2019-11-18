<?php
 REQUIRE_ONCE('koneksi.php');
 $QUERY = MYSQLI_QUERY($conn,"SELECT balasan.message, client.client_name, user.user_name, tiket.status, balasan.time, balasan.pengirim FROM tiket JOIN client  ON tiket.clientId = client.clientId JOIN user ON tiket.userID = user.userID JOIN balasan ON tiket.tiketID = balasan.tiketID WHERE balasan.tiketID = 1 ");
 $total = MYSQLI_NUM_ROWS($QUERY);
 for ($i=0; $i < $total; $i++) {
   $balas = new stdClass;
   $ROW = MYSQLI_FETCH_ASSOC($QUERY);
   $balas-> isi = $ROW['message'];
   $balas-> client = $ROW['client_name'];
   $balas-> user = $ROW['user_name']; 
   $balas-> status = $ROW['status'];
   $balas-> time = $ROW['time'];
   $balas-> pengirim = $ROW['pengirim'];
   $arr[$i] = $balas;
 }
 header("Content-Type:application/json");
 echo json_encode($arr, JSON_PRETTY_PRINT);
 MYSQLI_CLOSE($conn);
?>
