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
        <title>Metronic Admin Theme #4 | Bootstrap Form Controls</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for bootstrap inputs, input groups, custom checkboxes and radio controls and more" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
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
                <!-- BEGIN PAGE ACTIONS -->
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
                                                            if($key3['type'] == '1'){
                                                                $tipe = "open";
                                                            } else if($key3['type'] == '2'){
                                                                $tipe = "close";
                                                            } 
                                                            $panjangN = strlen($key3['notifID']);
                                                            $notID=$key3['notifID'];
                                                            for($i = 5;$i > $panjangN;$i--){
                                                                $notID = "0".$notID;
                                                            }
                                                            $notID = "#".$notID;
                                                            $time = $key3['time'];
                                                    
                                            ?>
                                            <li>
                                                <a href="<?php echo base_url().'C_admin/notif_view/'.$key3['tiketID'].'/'.$key3['notifID'] ?>">
                                                    <span class="subject">
                                                    <?php if ($tipe == "open") {
                                                    ?>
                                                        <span class="from"> New Ticket <?php echo $tipe;?> with ID <?php echo $notID ?> </span>
                                                    <?php }
                                                    else if($tipe == "close"){?>
                                                    <span class="from"> Ticket with ID <?php echo $notID ?> Closed </span>
                                                    <?php
                                                    }?>
                                                        <span class="time"><?php echo $time ?> </span>
                                                    </span>
                                                    <span class="message"> </span>
                                                </a>
                                            </li>
                                            <?php
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
                                    <span class="username username-hide-on-mobile"> Admin </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="<?php echo base_url(); ?>/assets/layouts/layout4/img/avatar.png" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
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
                        <a href="<?php echo site_url('C_admin') ?>">
                                <i class="fa fa-home"></i>
                                <span class="title">Home</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?php echo site_url('C_tiket_admin') ?>">
                                <i class="fa fa-ticket"></i>
                                <span class="title">Ticket</span>
                            </a>
                        </li>
                        <li class="nav-item start active open ">
                        <a href="<?php echo site_url('C_user_admin') ?>">
                                <i class="fa fa-users"></i>
                                <span class="title">Users</span>
                                <span class="selected"></span>
                            </a>
                        </li> 
                        <li class="nav-item">
                        <a href="<?php echo site_url('C_department_admin') ?>">
                                <i class="fa fa-building"></i>
                                <span class="title">Departments</span>
                            </a>
                        </li>
    
                        <li class="nav-item  ">
                            <a href="<?php echo site_url('C_performa') ?>" class="nav-link nav-toggle">
                                <i class="fa fa-line-chart"></i>
                                <span class="title">Peformance</span>
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
                            <h1>User Profile | Account
                                <small>user account page</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">User</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row" id="coba">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <?php  foreach ($profil->result_array() as $key) {
                                     $this->session->set_userdata('ses_userID',$key['userID']); ?>
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                    <?php if ($key['foto']==null) {
                                            echo '<img src="'.base_url().'/assets/layouts/layout4/img/avatar.png" class="img-responsive" alt="">';
                                        } else {
                                            echo '<img src="'.base_url().'assets/apps/img/user/'.$key['foto'].'" class="img-responsive" alt="">'; 
                                        }?>    
                                     </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> <?php echo $key['user_name'];?> </div>
                                        <div class="profile-usertitle-job"><?php echo $key['Nama_Department'] ?> Department </div>
                                    </div>
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="<?php echo site_url('C_user_admin/admin_view/'.$key['userID']); ?>">
                                                    <i class="icon-home"></i> Overview </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('C_user_admin/profileAcc') ?>">
                                                    <i class="icon-settings"></i> Account Settings </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <?php  
                                    $open = 0;
                                    $close = 0;
                                    $total = 0;
                                    foreach ($tiket->result_array() as $op) {
                                        if ($op['status'] == '0') {
                                            $open = $open + 1;
                                        }else {
                                            $close = $close + 1;
                                        }
                                        $total = $total + 1;
                                        }
                                 ?>
                                <div class="portlet light bordered">
                                    <!-- STAT -->
                                    <div class="row list-separated profile-stat"> 
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> <a href="<?php echo site_url('C_user_admin/tiket/')?>" > <?php echo $total?> </a> </div>
                                            <div class="uppercase profile-stat-text"> Tickets </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> <a href="<?php echo site_url('C_user_admin/tiket/0')?>" > <?php echo $open?> </a> </div>
                                            <div class="uppercase profile-stat-text">  Open </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> <a href="<?php echo site_url('C_user_admin/tiket/1')?>" > <?php echo $close?> </a> </div>
                                            <div class="uppercase profile-stat-text"> Close </div>
                                        </div>
                                    </div>
                                    <div class="uppercase profile-stat-text"> Rating </div>
                                    <div class="uppercase profile-stat-title"><?php foreach ($rata2->result_array() as $rt) {echo number_format($rt['ratarata_star'],1); }?> <span class="star rated" style:"size:150%;"> </span>
                                    </div>
                                    <!-- END STAT -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase font-blue"">User Profile</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label">Full Name : </label>
                                                                <label type="text" class="form-control"> <?php echo $key['user_name'];?></label></div>
                                                            <div class="form-group">
                                                                <label class="control-label">Department : </label>
                                                                <label type="text" class="form-control"> <?php echo $key['Nama_Department'];?> </label></div>
                                                            <div class="form-group">
                                                                <label class="control-label">Email : </label>
                                                                <label type="text" class="form-control" > <?php echo $key['email'];?> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Phone Number : </label>
                                                                <label type="text" class="form-control" > <?php echo $key['no_telepon'];}?> </label></div>
                                    </form>
                                </div>
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <h4 class="caption-subject font-dark bold uppercase font-blue"">LATEST REVIEW</h4>
                                    </div>
                                </div>
                                <?php foreach ($rating->result_array() as $op) {?> 
                                <div class="portlet-body">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                                <div class="mt-comment">
                                                    <div class="mt-comment-img">
                                                    <?php foreach ($client->result_array() as $sss) { 
                                                        if ($op['clientID']==$sss['clientID']){
                                                             $image = $sss['foto'];}}
                                                            if ($image == null) {?>
                                                                <img src="<?php echo base_url(); ?>/assets/layouts/layout4/img/avatar.png" width="140%"     />
                                                            <?php } else {?>
                                                                <img src="<?php echo base_url(); ?>/assets/apps/img/client/<?php echo $image;?>" width="140%"     />
                                                            <?php } ?>
                                                        </div>
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author"><?php echo $op['fullname'];?></span>
                                                            <span class="mt-comment-date"><?php echo date("d F Y h:i:s", strtotime($op['date']));?></span>
                                                        </div>
                                                        <div class="mt-comment-text"> <?php echo $op['message'];?> </div>
                                                    </div>
                                                    <div class="mt-comment-details">
                                                    <?php
                                                        for($i=1;$i<=5;$i++) {
                                                        $rate = "star";
                                                        if($i<=$op["star"]) {
	                                                    $rate = "star rated";
                                                        }
                                                        echo '<span class="'.$rate.'">&nbsp;</span>';
                                                        }?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END: Comments -->  
                                </div><?php }?>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
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
