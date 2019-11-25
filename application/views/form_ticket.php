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
                            <h1>New Ticket
                                <small>fill the following formn</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12 ">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <h3><i class="fa fa-ticket font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">Ticketing Form</span></h3>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" action="<?php echo base_url(); ?>C_client_tiket/newTiket" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <div class="input-icon right">
                                                    <i class=" font-blue"></i>
                                                    <input type="text" name="subject" class="form-control" placeholder="Subject"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select name="department" class="form-control">
                                                                <?php foreach ($dep->result_array() as $dp) {
                                                                echo '<option value="'.$dp['Nama_Department'].'">'.$dp['Nama_Department'].'</option>';
                                                                }?>
                                                </select>  
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group last">
                                                <label class="control-label col-md-15">Image Upload</label>
                                                <div class="col-md-15">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" accept="image/*" name="berkas"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" id="register-submit-btn" class="btn btn-success">Submit</button>
                                            <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>    
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php
    $this->load->view('client/footer_client',$data);
 ?>