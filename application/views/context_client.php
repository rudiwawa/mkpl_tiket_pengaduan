<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('admin/header_admin',$data);
$data['aktif'] = "context";  
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
                            <h1>Client Page
                            </h1>
                            <br>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    
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
                                                    <a class="btn sbold green" href="<?php echo site_url('C_admin/new_context') ?>"> Add
                                                        <i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> ID Context </th>
                                                <th> Judul </th>
                                                <th> Kategori </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
   foreach ($konteks->result_array() as $key) {
                    $panjang = strlen($key['id_context']);
                    $id=$key['id_context'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
                echo '<tr class="odd gradeX" data-messageid="'.$key['id_context'].'" id="'.$key['id_context'].'">';
                echo '<td class="view-message">'.$id.'</td>';
                echo '<td class="view-message">'.$key['judul'].'</td>';
                foreach ($kategori->result_array() as $key4) {
                if($key['sub_kategori']==$key4['id_sub']){
                    echo '<td class="view-message">'.$key4['nama'].'</td>';
                }
                }
                echo '<td><a href='.site_url('C_admin/edit_context/'.$key['id_context']).' class="btn blue"> Edit </a></td>';
                echo '<td><a href="'.site_url('C_context/hapusKat2/'.$key['id_context']).'" class="btn red"> Delete </a></td></tr>';

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