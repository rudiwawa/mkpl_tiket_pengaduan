<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('admin/header_admin',$data);
$data['aktif'] = "tiket";  
$this->load->view('admin/navbar_admin',$data);
?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Ticket View
                            </h1>
                            <br>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    
 <?php
        foreach ($pertama->result_array() as $key)
        {
            
            $panjang = strlen($key['tiketID']);
                    $id=$key['tiketID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
            $cID=$key['clientID'];
            $judul = $key['title'];
            $pesan = $key['message'];
            $nama = $key['fullname'];
            $tanggal = $key['date_post'];
            $gambar = $key['gambar'];
                }
        
?>
                    <div class="row"  id="coba">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <table>
                                            <tbody class="caption-subject bold uppercase font-grey-cascade">
                                                <tr height="50px">
                                                    <td><h4><b>ID Ticket</b></h4></td>
                                                    <td><h4><b>:</b></h4></td>
                                                    <?php if(isset($id)) { echo '<td><h4><b>'.$id.'</b></h4></td>'; } ?>
                                                </tr>
                                                <tr>
                                                    <td><h4><b>Subject</b></h4></td>
                                                    <td><h4><b>:</b></h4></td>
                                                    <?php if(isset($judul)) { echo '<td><h4><b>'.$judul.'</b></h4></td>'; } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="timeline">
                                        <!-- TIMELINE ITEM -->
<?php 
    if(isset($judul)){
        foreach ($client->result_array() as $klien){
            if($cID == $klien['clientID']){
                $foto = $klien['foto'];
            } 
        }
        if ($foto == null) {
            echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$tanggal.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$nama.' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$pesan.' </span></div>';
        }else {
            echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/client/'.$foto.'"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$tanggal.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$nama.' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$pesan.' </span></div>';
        }
            if($gambar!==""){
                echo '<a data-target="#responsive" data-toggle="modal"> View Image </a></div></div>';
                echo '<div id="responsive" class="modal fade" tabindex="-1" data-width="60%" data-height="100%" data-keyboard="false"';
                echo '           <div class="modal-body">';
                echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><br>';
                echo                 '<img src="'.base_url().'/assets/apps/img/tiket/'.$gambar.'" width="100%" height="40%" style="display: block;margin-left: auto;margin-right: auto;"></div>';
            } else {
                echo '</div>';
            } 
        }
        
        foreach ($balas->result_array() as $key2)
            {
                $cID=$key2['clientID'];
                $uID=$key2['userID'];
                $waktu = $key2['time'];
                $waktu = $waktu.substr(0,16);
                $image = $key2['image'];
                if ($key2['pengirim'] == 1) {
                    foreach ($client->result_array() as $klien2){
                        if($cID == $klien2['clientID']){
                            $foto = $klien2['foto'];
                        } 
                    }
                    if ($foto == null) {
                        echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['fullname'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div>';
                    } else {
                        echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/client/'.$foto.'"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['fullname'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div>';
                    }
                } else {
                    foreach ($user->result_array() as $us){
                        if($uID == $us['userID']){
                            $foto = $us['foto'];
                        } 
                    }
                    if ($foto == null) {
                        echo'<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$key2['user_name'].'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$waktu.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$key2['message'].' </span></div>';
                    } else {
                        echo'<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/user/'.$foto.'"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$key2['user_name'].'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$waktu.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$key2['message'].' </span></div>';
                    } 
                }
                if($image!==""){
                    if ($key2['pengirim'] == 1) {
                        echo '<a data-target="#static'.$key2['balasanID'].'" data-toggle="modal"> View Image </a></div>';
                    } else {
                        echo '<a data-target="#static'.$key2['balasanID'].'" data-toggle="modal" style="float : right;"> View Image </a></div></div>';
                    }
                    echo '<div id="static'.$key2['balasanID'].'" class="modal fade" tabindex="-1" data-width="60%" data-height="100%" data-keyboard="false" >';
                    echo '           <div class="modal-body">';
                    echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><br>';
                    echo                 '<img src="'.base_url().'/assets/apps/img/balas_tiket/'.$key2['image'].'"width="100%" height="40%" style="display: block;margin-left: auto;margin-right: auto;"></div></div>';
                } else {
                    echo '</div></div>';
                }
                           
            }       
    
?>      

                                        <!-- TIMELINE ITEM -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
    $this->load->view('admin/footer_admin',$data);
 ?>