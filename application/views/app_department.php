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
                            <h1>Departments
                            </h1>
                            <br>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<?php echo site_url('C_department_admin') ?>">Departments</a>
                            <i class="fa fa-circle"></i>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a class="btn sbold green" href="<?php echo site_url('C_department_admin/new') ?>"> New Department
                                                        <i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> ID Department </th>
                                                <th> Nama Department </th>
                                                <th> Jumlah </th> 
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
   foreach ($dep->result_array() as $key) {
                    $panjang = strlen($key['departmentID']);
                    $id=$key['departmentID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
                echo '<tr class="odd gradeX" data-messageid="'.$key['departmentID'].'" id="'.$key['departmentID'].'">';
                echo '<td class="view-message">'.$id.'</td>';
                echo '<td class="view-message">'.$key['Nama_Department'].'</td>';
                echo '<td class="view-message"><a href='.site_url('C_department_admin/admin_view/'.$key['departmentID']).'>'.$key['jumlah'].'</a></td>';
                echo '<td><a href='.site_url('C_department_admin/edit/'.$key['departmentID']).' class="btn blue"> Edit </a></td>';
                echo '<td><a href='.site_url('C_department_admin/delete/'.$key['departmentID']).' class="btn red"> Delete </a></td></tr>';

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