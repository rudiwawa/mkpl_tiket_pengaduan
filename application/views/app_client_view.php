<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $data['notif'] = $notif;
    $data['jumlahNotif'] = $jumlahNotif  ;    
    $this->load->view('client/header_client',$data);
    $data['aktif'] = "tiket";  
    $this->load->view('client/navbar_client',$data);
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
            
            $panjang = strlen($key['tiketID']);
                    $id=$key['tiketID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
            $judul = $key['title'];
            $status = $key['status'];
            $pesan = $key['message'];
            $nama = $key['fullname'];
            $tanggal = $key['date_post'];
            $gambar = $key['gambar'];
            
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
        if ($this->session->userdata('ses_foto') == null) {
            echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$tanggal.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$nama.' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$pesan.' </span></div>';
        } else{
            echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/client/'.$this->session->userdata('ses_foto').'"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$tanggal.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$nama.' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$pesan.' </span></div>';
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
        $last = 0;  
    }
    
    foreach ($balas->result_array() as $key2)
        {
            $waktu = $key2['time'];
            $waktu = $waktu.substr(0,16);
            $image = $key2['image'];
            if ($key2['pengirim'] == 1) {
                if ($this->session->userdata('ses_foto') == null) {
                    echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$tanggal.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$nama.' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$pesan.' </span></div>';
                } else{
                echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/client/'.$this->session->userdata('ses_foto').'"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['fullname'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div>';
                }
            } else {
                foreach ($user->result_array() as $key3){
                    if($key2['userID'] == $key3['userID']){
                        $foto = $key3['foto'];
                    } 
                }
                if ($foto == null) {
                    echo'<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/pages/media/users/avatar.png"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$key2['user_name'].'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$waktu.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$key2['message'].' </span></div>';
                }   else  
                    echo'<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/user/'.$foto.'"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$key2['user_name'].'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$waktu.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$key2['message'].' </span></div>';
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
        
        if(isset($status) && $status == 0 && isset($key2) && $last > 0){
            echo '<div class="row">';
            echo '<div class="col-md-12 ">';
            echo '<!-- BEGIN SAMPLE FORM PORTLET-->';
            echo '<div class="portlet light bordered">';
            echo '<div class="portlet-body form">';
            echo '<form role="form" action="'.base_url().'C_client_tiket/newBalas/'.$key['tiketID'].'" method="post" enctype="multipart/form-data">';
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
            echo '</div>';
            echo '<a class="btn red btn-outline sbold" data-toggle="modal" href="#draggable"> Close Thread </a>';
            echo '</div>';
            echo '<div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">';
            echo '<div class="modal-header">';
            echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>';
            echo '<h4 class="modal-title">Rate your experience</h4>';
            echo '</div>';
            echo '<div class="modal-body">';
            echo '<form method= "post" action="'.base_url().'C_client_tiket/rating/'.$key['tiketID'].'">';
            echo '<div class="stars" data-rating="3" align="center">';
            echo '<span class="star" id="rating" value="1">&nbsp;</span>';
            echo '<input type="hidden" value="1" id="rating1" onclick="sayacoba();"/>';
            echo '<span class="star" id="rating" value="2">&nbsp;</span>' ;  
            echo '<input type="hidden" value="2" id="rating" onclick="sayacoba();"/>';
            echo '<span class="star" >&nbsp;</span>';
            echo '<input type="hidden" value="3" id="rating" onclick="sayacoba();"/>';
            echo '<span class="star" >&nbsp;</span>';
            echo '<input type="hidden" value="4" id="rating" onclick="sayacoba();"/>';
            echo '<span class="star" >&nbsp;</span>';
            echo '<input type="hidden" value="5" id="rating" onclick="sayacoba();"/>';
            echo '<input type="hidden" value="0" id="akhir" name="akhir" />';
            echo '</div>';
            echo '<textarea class="form-control" rows="3" name="review" placeholder="Review"></textarea>';
            echo '</div>';
            echo '<div class="modal-footer">';
            echo '<button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>';
            echo '<button type="submit" class="btn green">Save changes</button>';
            echo '</div>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            }
        
        ?>
        <script type="text/javascript">
            document.addEventListener('click', function sayacoba(){
                                                            let stars = document.querySelectorAll('.star');
                                                            stars.forEach(function(star){
                                                                star.addEventListener('click', setRating); 
                                                            });
                                                            
                                                            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
                                                            let target = stars[rating - 1];
                                                            document.getElementById("akhir").value = rating;
                                                            target.dispatchEvent(new MouseEvent('click'));
                                                        });
                                                        function setRating(ev){
                                                            let span = ev.currentTarget;
                                                            let stars = document.querySelectorAll('.star');
                                                            let match = false;
                                                            let num = 0;
                                                            stars.forEach(function(star, index){
                                                                if(match){
                                                                    star.classList.remove('rated');
                                                                }else{
                                                                    star.classList.add('rated');
                                                                }
                                                                //are we currently looking at the span that was clicked
                                                                if(star === span){
                                                                    match = true;
                                                                    num = index + 1;
                                                                }
                                                            });
                                                            document.querySelector('.stars').setAttribute('data-rating', num);
                                                        }
        </script>
        <!-- END QUICK NAV -->
        <?php
    $this->load->view('client/footer_client',$data);
 ?>