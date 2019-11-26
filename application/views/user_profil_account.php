<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('admin/header_admin',$data);
$data['aktif'] = "user";  
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
                            <h1>New User Profile | Account
                                <small>user account page</small>
                            </h1>
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
                            <span class="active">User</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <?php  foreach ($profil->result_array() as $key) { ?>
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
                                        <div class="profile-usertitle-name"> <?php echo $key['user_name']; ?> </div>
                                        <div class="profile-usertitle-job"> <?php echo $key['Nama_Department']; ?> Department </div>
                                    </div>
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li>
                                                <a href="<?php echo site_url('C_user_admin/admin_view/'.$key['userID']); ?>">
                                                    <i class="icon-home"></i> Overview </a>
                                            </li>
                                            <li class="active">
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
                                    <div class="uppercase profile-stat-title"> <?php foreach ($rata2->result_array() as $rt) {echo number_format($rt['ratarata_star'],1); }?> <span class="star rated" style:"size:150%;"> </span>
                                    </div>
                                    <!-- END STAT -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                    <small><?php echo $this->session->flashdata('msg');?></small>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="<?php echo site_url('C_user_admin/updateProfil') ?>" method="post">
                                                        <div class="form-body">
                                                            <div class="form-group"> 
                                                            <div class="alert alert-danger display-hide">
                                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                                <label class="control-label">Full Name <span class="required">  </span></label>
                                                                <input type="text" class="form-control" data-required="1" name="user_name" value="<?php echo $key['user_name'];?>" /></div>
                                                            <div class="form-group">
                                                                <label>Department</label>
                                                                <select name="department" class="form-control">
                                                                <?php foreach ($dep->result_array() as $dp) {
                                                                if ($dp['Nama_Department']==$key['Nama_Department']) {
                                                                    echo '<option selected="selected" value="'.$dp['Nama_Department'].'">'.$dp['Nama_Department'].'</option>';
                                                                } else {
                                                                    echo '<option value="'.$dp['Nama_Department'].'">'.$dp['Nama_Department'].'</option>';
                                                                }
                                                                }?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Email <span class="required">  </span></label>
                                                                <input type="text" class="form-control" name="email" value="<?php echo $key['email'];?>" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Phone Number <span class="required">  </span></label>
                                                                <input type="text" class="form-control" name="no_telepon" value="<?php echo $key['no_telepon'];}?>" /> </div>
                                                            <div class="form-actions">
                                                            <button type="submit" id="register-submit-btn" class="btn btn-success">Save Changes</button>
                                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        
                                                    <form action="<?php echo site_url('C_user_admin/updateAvatar') ?>" role="form" enctype="multipart/form-data" method="post" >
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="berkas"> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger">NOTE! </span>
                                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <button type="submit" id="register-submit-btn" class="btn btn-success">Save Changes</button>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="<?php echo site_url('C_user_admin/updatePassword') ?>" method="post">
                                                            <div class="form-group">
                                                                <label class="control-label">Current Password</label>
                                                                <input type="password" class="form-control" name="pass" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" class="form-control" name="new_pass"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Re-type New Password</label>
                                                                <input type="password" class="form-control" name="re_pass" /> </div>
                                                            <div class="margin-top-10">
                                                                <button type="submit" id="register-submit-btn" class="btn btn-success">Changes Password</button>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        <?php
    $this->load->view('admin/footer_admin',$data);
 ?>