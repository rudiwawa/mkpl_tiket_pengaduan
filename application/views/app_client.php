<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $data['notif'] = $notif;
    $data['jumlahNotif'] = $jumlahNotif  ;    
    $this->load->view('client/header_client',$data);
    $data['aktif'] = "tiket";  
    $this->load->view('client/navbar_client',$data);
 ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>My Ticket
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
                                                    <a class="btn sbold green" href="<?php echo site_url('C_client_tiket/new') ?>"> New Ticket
                                                        <i class="fa fa-plus"></i></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th > ID Ticket </th>
                                                <th> Subject</th>
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
                foreach ($user->result_array() as $key2){
                    if($key['userID'] === "0"){
                        $nama = "-";
                    } else if ($key['userID']===$key2['userID']) {
                        $nama = $key2['user_name'];
                    }
                }                
                
                echo '<tr class="odd gradeX" data-messageid="'.$key['tiketID'].'" id="'.$key['tiketID'].'">';
                echo '<td class="view-message">'.$id.'</td>';
                echo '<td class="view-message">'.$key['title'].'</td>';
                echo '<td class="view-message">'.$nama.'</td>';
                echo '<td class="view-message">'.$key['Nama_Department'].'</td>';
                if ($key['status'] == '1') {
                    echo '<td class="view-message inbox-small-cells "><span class="label label-sm label-success"> '.$stat.' </span></td>';
                } else {
                    echo '<td class="view-message inbox-small-cells"><span class="label label-sm label-danger">'.$stat.'</span></td>';
                }
                echo '<td class="view-message text-right">'.date("d F Y h:i", strtotime($key['date_post'])).'</td>';
                echo '<td><a href='.site_url('C_client_tiket/client_view/'.$key['tiketID']).' class="btn yellow"> View </a></td></tr>'; 
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
    $this->load->view('client/footer_client',$data);
 ?>