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
                            <h1>Users
                            </h1>
                            <br>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a class="btn sbold green" href="<?php echo site_url('C_user_admin/new') ?>"> New User
                                                        <i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> ID User </th>
                                                <th> User name </th>
                                                <th> Department </th> 
                                                <th> Rating </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
   foreach ($user->result_array() as $key) {
                    $panjang = strlen($key['userID']);
                    $id=$key['userID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
                echo '<tr class="odd gradeX" data-messageid="'.$key['userID'].'" id="'.$key['userID'].'">';
                echo '<td class="view-message">'.$id.'</td>';
                echo '<td class="view-message">'.$key['user_name'].'</td>';
                echo '<td class="view-message">'.$key['Nama_Department'].'</td>';
                echo '<td class="view-message">'.number_format($key['ratarata_star'],1).'</td>';
                echo '<td><a href='.site_url('C_user_admin/admin_view/'.$key['userID']).' class="btn yellow"> View </a></td></tr>'; 
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
        <?php
    $this->load->view('admin/footer_admin',$data);
 ?>