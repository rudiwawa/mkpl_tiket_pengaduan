<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('admin/header_admin',$data);
$data['aktif'] = "home";  
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
                            <h1>User Profile | Account
                                <small>user account page</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
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
        <?php
    $this->load->view('admin/footer_admin',$data);
 ?>
