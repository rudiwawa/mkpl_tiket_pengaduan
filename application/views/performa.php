<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['notif'] = $notif;
$data['jumlahNotif'] = $jumlahNotif  ;    
$this->load->view('admin/header_admin',$data);
$data['aktif'] = "performa";  
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
                            <h1>Performance
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
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
        $panjang = strlen($result->tiketID);
        $id= $result->tiketID;
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
        $tiket[] = $id; //ambil bulan
        $timee[] = (float) $result->time; //ambil nilai
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
   type: 'line',
  },
  title: {
   text: 'Grafik Performance Tiket',
   x: -20
  },
  subtitle: {
   text: 'Tiket',
   x: -20
  },
  xAxis: {
   categories: <?php echo json_encode($tiket); ?>
  },
  yAxis: {
   title: {
    text: 'Waktu Respon'
   }
  },
  series: [{
   name: 'Waktu Respon per Tiket',
   data: <?php echo json_encode($timee); ?>
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
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject font-dark sbold uppercase">User Perfomance</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                <?php
    /* Mengambil query report*/
    foreach($user as $result){
        $nama[] = $result->user_name; //ambil bulan
        $jml[] = (float)$result->jumlah; //ambil nilai
    }
    /* end mengambil query*/
     
?>
 <div id="chart2">
</div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart2',
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
   name: 'Jumlah Tiket yang Telah Ditangani',
   data: <?php echo json_encode($jml); ?>
  }]
 });
}); 
</script>
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
        <!-- END CONTAINER -->
        <?php
    $this->load->view('admin/footer_admin',$data);
 ?>