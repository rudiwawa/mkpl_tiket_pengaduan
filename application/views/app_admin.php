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
        <title>Metronic Admin Theme #4 | Managed Datatables</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for managed datatable samples" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <script src="<?php echo base_url();?>/assets/apps/scripts/highcharts/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/apps/scripts/highcharts/highcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/apps/scripts/highcharts/modules/exporting.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/apps/scripts/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
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
                    <li class="nav-item start active open">
                        <a href="<?php echo site_url('C_admin') ?>">
                                <i class="fa fa-home"></i>
                                <span class="title">Home</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Context Management</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('C_admin/front') ?>" class="nav-link ">
                                        <span class="title">Front Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('C_admin/client') ?>" class="nav-link ">
                                        <span class="title"> Client Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo site_url('C_tiket_admin') ?>">
                                <i class="fa fa-ticket"></i>
                                <span class="title">Ticket</span>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="<?php echo site_url('C_user_admin') ?>">
                                <i class="fa fa-users"></i>
                                <span class="title">Users</span>
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
                            <h1>This Week Stats
                            </h1>
                            <br>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<?php echo site_url('C_admin') ?>">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Tables</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Datatables</span>
                        </li>
                    </ul>
                    <?php  
                    $open = 0;
                    $close = 0;
                    $total = 0;
                    foreach ($tiket->result_array() as $key) {
                        if ($key['status'] == '0') {
                                        $open = $open + 1;
                        }else {
                                        $close = $close + 1;
                        }
                        $total = $total + 1;
                    }
                    ?>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat dashboard-stat-v2 blue" >
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="<?php echo $today?>"></span>
                                    </div>
                                    <div class="desc"> Today Ticket </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat dashboard-stat-v2 red">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="<?php echo $total?>">0</span> </div>
                                    <div class="desc"> Total Ticket </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat dashboard-stat-v2 green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="<?php echo $open?>">0</span>
                                    </div>
                                    <div class="desc"> Status Open </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat dashboard-stat-v2 purple">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
                                        <span data-counter="counterup" data-value="<?php echo $close?>"></span> </div>
                                    <div class="desc"> Status Closed </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END PAGE BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject font-dark sbold uppercase"> Perfomance Per Tiket</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                    <?php
    /* Mengambil query report*/
    foreach($performa as $result){
        $nama[] = $result->user_name; //ambil bulan
        $jml[] = (float)$result->jumlah; //ambil nilai
    }
    /* end mengambil query*/
     
?>
 <div id="chart1">
</div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart1',
   type: 'column',
  },
  title: {
   text: 'Grafik Performance User',
   x: -20
  },
  subtitle: {
   text: 'User',
   x: -20
  },
  xAxis: {
   categories: <?php echo json_encode($nama); ?>
  },
  yAxis: {
   title: {
    text: 'Jumlah Tiket'
   }
  },
  series: [{
   name: 'Jumlah Tiket yang sedang Ditangani',
   data: <?php echo json_encode($jml); ?>
  }]
 });
}); 
</script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th > ID Ticket </th>
                                                <th> Subject</th>
                                                <th> Client Name </th> 
                                                <th> Staff Name </th>
                                                <th> Department </th>
                                                <th> Status </th>
                                                <th> Date/Time </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
   foreach ($tiket->result_array() as $key) {
       if ($key['status'] == '0') {
                    $stat = 'Open';
                    } else {
                        $stat = 'Closed';
                    }
                    $panjang = strlen($key['tiketID']);
                    $id=$key['tiketID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
                    foreach ($user->result_array() as $key5){
                        if($key['userID'] === "0"){
                            $nama = "-";
                        } else if ($key['userID']===$key5['userID']) {
                            $nama = $key5['user_name'];
                        }
                    } 
                echo '<tr class="odd gradeX" data-messageid="'.$key['tiketID'].'" id="'.$key['tiketID'].'">';
                echo '<td class="view-message">'.$id.'</td>';
                echo '<td class="view-message">'.$key['title'].'</td>';
                echo '<td class="view-message hidden-xs" > '.$key['fullname'].' </td>';
                echo '<td class="view-message">'.$nama.'</td>';
                echo '<td class="view-message">'.$key['Nama_Department'].'</td>';
                if ($key['status'] == '0') {
                    echo '<td class="view-message inbox-small-cells "><span class="label label-sm label-success"> '.$stat.' </span></td>';
                } else {
                    echo '<td class="view-message inbox-small-cells"><span class="label label-sm label-danger">'.$stat.'</span></td>';
                }
                echo '<td class="view-message text-right">'.date("d F Y h:i:s", strtotime($key['date_post'])).'</td>';
                echo '<td><a href='.site_url('C_admin/admin_view/'.$key['tiketID']).' class="btn yellow"> View </a></td></tr>'; 
   }
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
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