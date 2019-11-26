<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('user/header_user',$data);
$data['aktif'] = "forward";  
$this->load->view('user/navbar_user',$data);
?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Ticket
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
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th > ID Forward </th>
                                                <th > ID Ticket Problem </th>
                                                <th> Staff Name </th>
                                                <th> Department </th>
                                                <th> Status </th>
                                                <th> Date/Time </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
   foreach ($forw->result_array() as $key) {
                    $panjang = strlen($key['tiketID']);
                    $id=$key['tiketID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
                    $panjangF = strlen($key['forwardID']);
                    $idF=$key['forwardID'];
                    for($i = 5;$i > $panjangF;$i--){
                        $idF = "0".$idF;
                    }
                    $idF = "#".$idF;
                    if ($key['forward_status'] == '1') {
                        $stat = 'Open';
                    } else {
                        $stat = 'Closed';
                    }
                echo '<tr class="odd gradeX" data-messageid="'.$key['tiketID'].'" id="'.$key['tiketID'].'">';
                echo '<td class="view-message">'.$idF.'</td>';
                echo '<td class="view-message">'.$id.'</td>';
                echo '<td class="view-message">'.$key['user_name'].'</td>';
                echo '<td class="view-message">'.$key['Nama_Department'].'</td>';
                if ($key['forward_status'] == '1') {
                    echo '<td class="view-message inbox-small-cells "><span class="label label-sm label-success"> '.$stat.' </span></td>';
                } else {
                    echo '<td class="view-message inbox-small-cells"><span class="label label-sm label-danger">'.$stat.'</span></td>';
                }
                echo '<td class="view-message text-right">'.$key['date'].'</td>';
                echo '<td><a href='.site_url('C_user_forward/forward_view/'.$key['forwardID']).' class="btn yellow"> View </a></td></tr>'; 
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
    $this->load->view('user/footer_user',$data);
 ?>