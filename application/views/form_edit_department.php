<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('admin/header_admin',$data);
$data['aktif'] = "department";  
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
                            <h1>Edit Department
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
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="portlet light bordered">
                                            <div class="portlet-body">
                                                    <?php foreach ($dep->result_array() as $key) { ?>
                                                        <form role="form" action="<?php echo site_url('C_Department_admin/editDepartment/'.$key['departmentID']) ?>" method="post">
                                                        <div class="form-body">
                                                        <small><?php echo $this->session->flashdata('msg');?></small>
                                                            <div class="form-group">
                                                                <label class="control-label"> Nama Department <span class="required"> * </span></label>
                                                                <input type="text" class="form-control" name="name" value="<?php echo $key['Nama_Department'];}?>" /></div>
                                                            <div class="margin-top-10">
                                                                <button type="submit" id="register-submit-btn" class="btn btn-success"> Save </button>
                                                                <a href="<?php echo site_url('C_department_admin') ?>" class="btn default"> Cancel </a>
                                                            </div>
                                                        </div>
                                                        <?php $this->session->set_flashdata('msg', '');?>
                                                        </form>
                                                    <!-- END PERSONAL INFO TAB -->  
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