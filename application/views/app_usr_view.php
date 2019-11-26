<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #4 | Inbox</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for user inbox" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>/assets/apps/css/inbox.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-fixed">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                <img src="<?php echo base_url(); ?>/assets/pages/img/logoNakula.png" style="height: 36px; margin-top:18px;" alt="logo" class="logo-default" />
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="separator hide"> </li>
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <?php
                                $userID = $this->session->userdata('ses_id');  
                            ?>
                            <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i><?php if($jumlahNotif > 0){?>
                                    <span class="badge badge-info"><?php echo $jumlahNotif; ?>  </span><?php }?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold"><?php echo $jumlahNotif?> New</span> Notifications</h3>
                                        
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <?php
                                                foreach ($notif->result_array() as $key3) {
                                                    if($key3['userID'] == '0' || $key3['userID'] == $userID) {
                                                        
                                                            if($key3['tipe'] == '1'){
                                                                $tipe = "Tiket";
                                                            } else if($key3['tipe'] == '2'){
                                                                $tipe = "Reply";
                                                            } else {
                                                                $tipe = "Forward";
                                                            }
                                                            $panjangN = strlen($key3['id']);
                                                            $notID=$key3['id'];
                                                            for($i = 5;$i > $panjangN;$i--){
                                                                $notID = "0".$notID;
                                                            }
                                                            $notID = "#".$notID;
                                                            $time = $key3['time'];
                                                    
                                            ?>
                                            <li>
                                                <a href="<?php echo base_url().'C_user/notif_view/'.$key3['id'].'/'.$key3['notifID'].'/'.$key3['tipe'] ?>">
                                                    <span class="subject">
                                                        <span class="from"> New <?php echo $tipe;?> with ID <?php echo $notID ?>  </span>
                                                        <span class="time"><?php echo $time ?> </span>
                                                    </span>
                                                    <span class="message"> </span>
                                                </a>
                                            </li>
                                            <?php
                                                }
                                                }
                                                if($jumlahNotif==0) {
                                                    echo '<li>';
                                                    echo '<span class="subject"><br>';
                                                    echo '<span class="message"><font color="white" size="3">No Notification</font></span>';
                                                    echo '</span>';
                                                    echo '</li>';
                                                    }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> <?php echo $this->session->userdata('ses_nama');?> </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <?php if ($this->session->userdata('ses_foto') == null) {
                                    echo '<img alt="" class="img-circle" src="'.base_url().'/assets/layouts/layout4/img/avatar.png" /> </a>';
                                    } else {
                                    echo '<img alt="" class="img-circle" src="'.base_url().'/assets/apps/img/user/'.$this->session->userdata('ses_foto').'" /> </a>';
                                    } ?>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?php echo site_url('C_user/profile') ?>">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="<?php echo site_url('C_login/logout') ?>">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item ">
                        <a href="<?php echo site_url('C_user') ?>">
                                <i class="fa fa-home"></i>
                                <span class="title">Home</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item start active open ">
                            <a href="<?php echo site_url('C_user/user_tiket') ?>">
                                <i class="fa fa-ticket"></i>
                                <span class="title">Ticket</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo site_url('C_user_forward') ?>" class="nav-link nav-toggle">
                                <i class="fa fa-mail-forward"></i>
                                <span class="title">Forward</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
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
            $cID=$key['clientID'];
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
        foreach ($client->result_array() as $key3){
            if($cID == $key3['clientID']){
                $foto = $key3['foto'];
            } 
        }
        if ($foto == null) {
            echo '<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$nama.'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$tanggal.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$pesan.' </span></div>';
        }else {
            echo '<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/client/'.$foto.'"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$nama.'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$tanggal.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$pesan.' </span></div>';
        }
        if($gambar!==""){
            echo '<a data-target="#responsive" data-toggle="modal" style="float : right;"> View Image </a></div></div>';
            echo '<div id="responsive" class="modal fade" tabindex="-1" data-width="60%" data-height="100%" data-keyboard="false">';
            echo '           <div class="modal-body">';
            echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button><br>';
            echo                 '<img src="'.base_url().'/assets/apps/img/tiket/'.$gambar.'" width="100%" height="40%" style="display: block;margin-left: auto;margin-right: auto;"></div></div>';
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
            if ($key2['pengirim'] == 2) {
                if ($this->session->userdata('ses_foto') == null) {
                    echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['user_name'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div>';
                } else{
                    echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/user/'.$this->session->userdata('ses_foto').'"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['user_name'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div>';
                }
            } else {
                if ($foto == null) {
                    echo '<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/layouts/layout4/img/avatar.png"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$nama.'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$tanggal.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$pesan.' </span></div>';
                }else {
                    echo '<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/apps/img/client/'.$foto.'"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$nama.'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$tanggal.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$pesan.' </span></div>';
                }
            }
            if($image!==""){
                if ($key2['pengirim'] == 2) {
                    echo '<a data-target="#static'.$key2['balasanID'].'" data-toggle="modal" > View Image </a></div>';
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
        
        if(isset($status) && $status == 0 && ($key['userID'] == 0 || $userID == $key['userID'])){
            echo '<div class="row">';
            echo '<div class="col-md-12 ">';
            echo '<!-- BEGIN SAMPLE FORM PORTLET-->';
            echo '<div class="portlet light bordered">';
            echo '<div class="portlet-body form">';
            echo '<form role="form" action="'.base_url().'C_user/newBalas/'.$key['tiketID'].'" method="post" enctype="multipart/form-data">';
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
            if($key['forward_status']==0 && $last>0){
                echo '<a href= "'.base_url().'C_user_forward/newforward/'.$key['tiketID'].'" type="submit" margin-right: 15px" class="btn red">Forward</a>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            }
        
        ?>
        <!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/global/plugins/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/apps/scripts/admin.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS --> <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/apps/scripts/star.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>