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
        <title>Metronic Admin Theme #4 | Admin Dashboard 2</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>/assets/pages/css/faq.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-fixed">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url(); ?>index.html">
                        <img src="<?php echo base_url(); ?>/assets/layouts/layout4/img/logo-light.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="<?php echo base_url(); ?>javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                <h1 style="display: inline-block;">GA ADA OBAT</h1>
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="<?php echo base_url(); ?>/c_login" class="dropdown-toggle">
                                    <span class="username username-hide-on-mobile"> Login
                                    <i class="fa fa-user"></i></span></a>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->                                    
                                <ul class="dropdown-menu dropdown-menu-default">
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
                            <a href="<?php echo base_url(); ?>C_login" class="nav-link nav-toggle">
                                <i class="fa fa-home"></i>
                                <span class="title">Home</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                         <li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>index.php/Welcome/login" class="nav-link nav-toggle">
                                <i class="fa fa-ticket"></i>
                                <span class="title">My Ticket</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url(); ?>index.php/Welcome/login" class="nav-link nav-toggle">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">News</span>
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
                            <h1> What is Ticketing?
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">What is Ticketing?</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                                <div class="mt-comment">
                                                        <div class="mt-comment-text"> A ticket, in a helpdesk ticketing system, acts as a documentation of a particular problem, its current status, and other associated information. Raised by the end users of an organization whenever they encounter an event that interrupts their workflow, these tickets are routed to a ticketing software where they are categorized, prioritized, and assigned to different agents according to the organizational norms. The agents then analyze these tickets and suggest appropriate fixes or workarounds and resolve the issue. As a central repository of all these tickets, an IT Ticketing Software helps in providing the context of the issue history and its resolution.
                                                        In smaller companies, whenever employees seek IT support, they can simply walk up to their internal IT team and get their issues fixed. But as organizations grow in size, managing employee issues and internal IT service requests tends to become cumbersome. Emails work when companies are small, but their speed and simplicity don’t cope well with the large number of requests that are being raised in a big organization.</div>
                                                        <div class="mt-comment-details">
                                                        </div>
                                                </div>
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-page faq-content-1">
                        <div class="faq-content-container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="faq-section bordered">
                                        <span class="caption-subject font-dark bold uppercase">Frequently Asked Question</span>
                                        <br><br><br>
                                        <h2 class="faq-title uppercase font-blue">General</h2>
                                        <div class="panel-group accordion faq-content" id="accordion1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="<?php echo base_url(); ?>#collapse_1"> How do I vote or respond to a poll?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="<?php echo base_url(); ?>#collapse_2"> Do you accept purchase orders?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="<?php echo base_url(); ?>#collapse_3"> How many responses per poll (which plan) do I need?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="<?php echo base_url(); ?>#collapse_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="<?php echo base_url(); ?>#collapse_6"> How fast do responses show up?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_6" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-section bordered">
                                        <h2 class="faq-title uppercase font-blue">Technical</h2>
                                        <div class="panel-group accordion faq-content" id="accordion3">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="<?php echo base_url(); ?>#collapse_3_1"> How do I vote or respond to a poll?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3_1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="<?php echo base_url(); ?>#collapse_3_2"> Do you accept purchase orders?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3_2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="<?php echo base_url(); ?>#collapse_3_3"> How many responses per poll (which plan) do I need?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3_3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="<?php echo base_url(); ?>#collapse_3_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3_4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="<?php echo base_url(); ?>#collapse_3_5"> How can I share my poll with remote participants?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3_5" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="<?php echo base_url(); ?>#collapse_3_6"> How fast do responses show up?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3_6" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="faq-section bordered">
                                        <h2 class="faq-title uppercase font-blue">Pricing</h2>
                                        <div class="panel-group accordion faq-content" id="accordion2">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>#collapse_2_1"> How much does it cost?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2_1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>#collapse_2_2"> Do you accept purchase orders?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2_2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>#collapse_2_3"> What is the K-12 classroom size promise?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2_3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>#collapse_2_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2_4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>#collapse_2_5"> How can I share my poll with remote participants?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2_5" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo base_url(); ?>#collapse_2_6"> How fast do responses show up?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2_6" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-section bordered">
                                        <h2 class="faq-title uppercase font-blue">Admin Management</h2>
                                        <div class="panel-group accordion faq-content" id="accordion4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="<?php echo base_url(); ?>#collapse_4_1"> How do I vote or respond to a poll?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_4_1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="<?php echo base_url(); ?>#collapse_4_2"> Do you accept purchase orders?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_4_2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="<?php echo base_url(); ?>#collapse_4_3"> How many responses per poll (which plan) do I need?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_4_3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="<?php echo base_url(); ?>#collapse_4_4"> What if my audience does not have a phone or a web-enabled device with internet access?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_4_4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="<?php echo base_url(); ?>#collapse_4_5"> How can I share my poll with remote participants?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_4_5" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut. </p>
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Ticketing Application</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                                <div class="mt-comment">
                                                        <div class="mt-comment-text"> A ticket, in a helpdesk ticketing system, acts as a documentation of a particular problem, its current status, and other associated information. Raised by the end users of an organization whenever they encounter an event that interrupts their workflow, these tickets are routed to a ticketing software where they are categorized, prioritized, and assigned to different agents according to the organizational norms. The agents then analyze these tickets and suggest appropriate fixes or workarounds and resolve the issue. As a central repository of all these tickets, an IT Ticketing Software helps in providing the context of the issue history and its resolution.
                                                        In smaller companies, whenever employees seek IT support, they can simply walk up to their internal IT team and get their issues fixed. But as organizations grow in size, managing employee issues and internal IT service requests tends to become cumbersome. Emails work when companies are small, but their speed and simplicity don’t cope well with the large number of requests that are being raised in a big organization.</div>
                                                        <div class="mt-comment-details">
                                                        </div>
                                                </div>
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="<?php echo base_url(); ?>http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="<?php echo base_url(); ?>http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
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