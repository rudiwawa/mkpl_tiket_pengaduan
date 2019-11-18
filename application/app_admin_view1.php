 <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
 <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
 <?php
        foreach ($pertama->result_array() as $key)
        {
            
            $panjang = strlen($key['tiketID']);
                    $id=$key['tiketID'];
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
            $judul = $key['title'];
            $pesan = $key['message'];
            $nama = $key['fullname'];
            $tanggal = $key['date_post'];
                }
        
?>
                    <div class="row"  id="coba">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <table>
                                            <tbody class="caption-subject bold uppercase font-grey-cascade">
                                                <tr height="50px">
                                                    <td><h4><b>ID Ticket</b></h4></td>
                                                    <td><h4><b>:</b></h4></td>
                                                    <?php if(isset($id)) { echo '<td><h4><b>'.$id.'</b></h4></td>'; } ?>
                                                </tr>
                                                <tr>
                                                    <td><h4><b>Subject</b></h4></td>
                                                    <td><h4><b>:</b></h4></td>
                                                    <?php if(isset($judul)) { echo '<td><h4><b>'.$judul.'</b></h4></td>'; } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="timeline">
                                        <!-- TIMELINE ITEM -->
<?php 
    if(isset($judul)){
    echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/pages/media/users/avatar80_1.jpg"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$tanggal.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$nama.' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$pesan.' </span></div><a data-target="#static" data-toggle="modal"> View Image </a></div></div>';
    echo '<div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">';
            echo '           <div class="modal-body">';
            echo                 '<span>sadadasdasd</span></div>';
            echo '<div class="modal-footer">';                                    
            echo '                <button type="button" data-dismiss="modal" class="btn red">Close</button></div></div>';
}foreach ($balas->result_array() as $key2)
        {
            $waktu = $key2['time'];
            $waktu = $waktu.substr(0,16);
            if ($key2['pengirim'] == 1) {
                echo '<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="'.base_url().'/assets/pages/media/users/avatar80_1.jpg"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '.$waktu.' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '.$key2['fullname'].' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '.$key2['message'].' </span></div><a data-target="#static'.$key2['balasanID'].'" data-toggle="modal"> View Image </a></div></div>';
            } else {
                echo'<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="'.base_url().'/assets/pages/media/users/avatar80_2.jpg"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"><a href="javascript:;" class="timeline-body-title font-blue-madison">'.$key2['user_name'].'</a> <span class="timeline-body-time font-grey-cascade"> Replied at '.$waktu.' </span></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '.$key2['message'].' </span></div><a data-target="#static'.$key2['balasanID'].'" data-toggle="modal" style="float : right;"> View Image </a></div></div>';
            }
            echo '<div id="static11'.$key2['balasanID'].'" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">';
            echo '           <div class="modal-body">';
            echo                 $key2['message'].'</div>';
            echo '<div class="modal-footer">';                                    
            echo '                <button type="button" data-dismiss="modal" class="btn red">Close</button></div></div>';
                        
                    
        }
        
?>      

                                        <!-- TIMELINE ITEM -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-body">
                            <img src="<?php echo base_url(); ?>/assets/pages/media/users/avatar80_2.jpg">
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn red">Close</button>
                        </div>
                    </div>
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>