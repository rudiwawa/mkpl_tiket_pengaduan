<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('user/header_user',$data);
$data['aktif'] = "forward";  
$this->load->view('user/navbar_user',$data);
?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Tiket View
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
            $panjangF = strlen($key['forwardID']);
                    $idF=$key['forwardID'];
                    for($i = 5;$i > $panjangF;$i--){
                        $idF = "0".$idF;
                    }
                    $idF = "#".$idF;
                    $panjang = strlen($key['tiketID']);
                    $id=$key['tiketID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
            $pesan = $key['message'];
            $nama = $key['user_name'];
            $tanggal = $key['date'];
            $gambar = $key['foto'];
            $status = $key['forward_status'];
                }
                    
?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <table>
                                            <tbody class="caption-subject bold uppercase font-grey-cascade">
                                                <tr height="50px">
                                                    <td><h4><b>ID Forward</b></h4></td>
                                                    <td><h4><b>:</b></h4></td>
                                                    <?php if(isset($idF)) { echo '<td><h4><b>'.$idF.'</b></h4></td>'; } ?>
                                                </tr>
                                                <tr>
                                                    <td><h4><b>ID Ticket Problem</b></h4></td>
                                                    <td><h4><b>:</b></h4></td>
                                                    <?php if(isset($id)) { echo '<td><h4><b><a href="'.site_url('C_user_forward/problem_view/'.$key['tiketID']).'">'.$id.'</a></b></h4></td>'; } ?>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="timeline">
                                        <!-- TIMELINE ITEM -->
                                        <?php 
    if(isset($pesan)){
        if ($this->session->userdata('ses_foto') == null) {
            echo '<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$nama.'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$tanggal.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$pesan.' </span></div>';
        } else{
            echo '<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/user/'.$this->session->userdata('ses_foto').'"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$nama.'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$tanggal.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$pesan.' </span></div>';
        }
        if($gambar!==""){
            echo '<a data-target="#responsive" data-toggle="modal" style="float : right;"> View Image </a></div></div>';
            echo '<div id="responsive" class="modal fade" tabindex="-1" data-width="60%" data-height="100%" data-keyboard="false">';
            echo '           <div class="modal-body">';
            echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><br>';
            echo                 '<img src="'.base_url().'/assets/apps/img/forward/'.$gambar.'" width="100%" height="40%" style="display: block;margin-left: auto;margin-right: auto;"></div></div>';
        } else {
            echo '</div>';
        }
        $last = 0;  
    }
    
    foreach ($balas->result_array() as $key2)
        {
            $uID=$key2['userID'];
            $waktu = $key2['time'];
            $waktu = $waktu.substr(0,16);
            $image = $key2['image'];
            foreach ($user->result_array() as $us){
                if($uID == $us['userID']){
                    $foto = $us['foto'];
                } 
            }
            if ($foto == null) {
                echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['user_name'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div>';
            } else {
                echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/user/'.$foto.'"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['user_name'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div>';
            } 
                
            if($image!==""){
                
                    echo '<a data-target="#static'.$key2['balasanforwardID'].'" data-toggle="modal"> View Image </a></div></div>';
            
                echo '<div id="static'.$key2['balasanforwardID'].'" class="modal fade" tabindex="-1" data-width="60%" data-height="100%" data-keyboard="false" >';
                echo '           <div class="modal-body">';
                echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><br>';
                echo                 '<img src="'.base_url().'/assets/apps/img/balas_forward/'.$key2['image'].'"width="100%" height="40%" style="display: block;margin-left: auto;margin-right: auto;"></div></div>';
            } else {
                echo '</div></div>';
            }
            $last = $last+1;  
                       
        }       
        
        
?>    

                                        <!-- TIMELINE ITEM -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                       
                <?php
        
        if($last < 1 ){
            echo '<div class="row">';
            echo '<div class="col-md-12 ">';
            echo '<!-- BEGIN SAMPLE FORM PORTLET-->';
            echo '<div class="portlet light bordered">';
            echo '<div class="portlet-body form">';
            echo '<form role="form" action="'.base_url().'C_user_forward/newBalas/'.$key['forwardID'].'/'.$key['tiketID'].'" method="post" enctype="multipart/form-data">';
            echo '<div class="form-body">';
            echo '<div class="form-group">';
            echo '<label>Description</label>';
            echo '<textarea class="form-control" rows="8" name="description"></textarea>';
            echo '</div>';
            echo '<div class="form-group last">';
            echo '<label class="control-label col-md-15">Image Upload</label>';
            echo '<div class="col-md-15">';
            echo '<div class="fileinput fileinput-new" data-provides="fileinput">';
            echo '<div class="fileinput-new thumbnail" style="width: 150px; height: 90px;">';
            echo '<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>';
            echo '<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>';
            echo '<div>';
            echo '<span class="btn default btn-file">';
            echo '<span class="fileinput-new"> Select image </span>';
            echo '<span class="fileinput-exists"> Change </span>';
            echo '<input type="file" accept="image/*" name="berkas"> </span>';
            echo '<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>';
            echo '</div>';
            echo '</div>';
            echo '</div> ';                              
            echo '</div>';
            echo '<div class="form-actions">';
            echo '<button type="submit" style="float:right" class="btn blue">Submit</button>';
            echo '</div>';
            echo '</form>';
            if($key['forward_status']==0){
            echo '<a href= "'.base_url().'C_user/newforward/'.$key['tiketID'].'" type="submit" margin-right: 15px" class="btn red">Forward</a>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            }
        
        ?>
        <!-- END FOOTER -->
        <?php
    $this->load->view('user/footer_user',$data);
 ?>