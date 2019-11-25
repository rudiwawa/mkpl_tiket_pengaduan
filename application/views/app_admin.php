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
                            <h1>This Week Stats
                            </h1>
                            <br>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
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
        <?php
    $this->load->view('admin/footer_admin',$data);
 ?>