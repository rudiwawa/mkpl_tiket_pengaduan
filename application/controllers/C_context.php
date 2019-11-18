<?php  
class C_context extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('context_model');
        $this->load->model('tiket_model');
        }
    }

    function editFront(){
        $this->context_model->updateFront();
        redirect('C_admin/front');
    }

    function editKat1(){
        $this->context_model->updateKat1();
        redirect('C_admin/new_context');
    }

    function newKat2(){
        $this->context_model->tambahKat2();
        redirect('C_admin/new_context');
    }

    function hapusKat2(){
        $id = $this->uri->segment(3);
        $this->context_model->deleteContext($id);
        redirect('C_admin/client');
    }

    function editKat2(){
        $id = $this->uri->segment(3);
        $this->context_model->updateKat2($id);
        redirect('C_admin/client');
    }
}?>