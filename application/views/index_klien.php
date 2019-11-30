<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $data['notif'] = $notif;
    $data['jumlahNotif'] = $jumlahNotif  ;    
    $this->load->view('client/header_client',$data);
    $data['aktif'] = "home";  
    $this->load->view('client/navbar_client',$data);
 ?>
            <?php
                foreach ($konteks->result_array() as $key5) {
                    $judul = $key5['judul'];
                    $desk = $key5['deskripsi'];
                }
            ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase"><?php if(isset($judul)){echo $judul;}?></span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                                <div class="mt-comment">
                                                        <div class="mt-comment-text"><?php if(isset($desk)){echo $desk;} ?></div>
                                                        <div class="mt-comment-details">
                                                        </div>
                                                </div>
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-page faq-content-1">
                        <div class="faq-content-container">
                            
                                <?php
                                    $z = 0;
                                    foreach ($kategori->result_array() as $key6) {
                                            if($z % 2 == 1){
                                            echo '<div class="row">';
                                            }
                                            echo '<div class="col-md-6">';
                                        
                                        $kat = $key6['nama'];
                                        $no = $key6['id_sub'];
                                        ?>
                                        <div class="faq-section bordered">
                                        <h2 class="faq-title uppercase font-blue"><?php if(isset($kat)){echo $kat;} ?></h2>
                                        <div class="panel-group accordion faq-content" id="accordion<?php if(isset($no)){echo $no;} ?>">
                                        <?php    
                                        foreach ($faq->result_array() as $key7){
                                            if($no == $key7['sub_kategori']){
                                                ?>
                                                <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <i class="fa fa-circle"></i>
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php if(isset($no)){echo $no;} ?>" href="#collapse_<?php if(isset($key7['id_context'])){echo $key7['id_context'];} ?>"> <?php if(isset($key7['judul'])){echo $key7['judul'];} ?></a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_<?php if(isset($key7['id_context'])){echo $key7['id_context'];} ?>" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                    <?php if(isset($key7['deskripsi'])){echo $key7['deskripsi'];} ?>
                                                    </div>
                                                </div>
                                            </div><?php
                                            }

                                        }
                                        ?>
                                        </div>
                                        </div>
                                    </div>
                                        <?php
                                        if($z % 2 == 1){
                                            echo '</div>';
                                            }
                                        $z++;
                                    }
                                ?>
                                
                                    
                                            
                                 
                        </div>
                    </div>
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END QUICK NAV -->
        <?php
    $this->load->view('client/footer_client',$data);
 ?>