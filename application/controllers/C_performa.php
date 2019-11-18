<?php 
class C_performa extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('tiket_model');
        $this->load->library('upload');
        }
    }
    function index(){ 
        $this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $data['performa']=$this->tiket_model->performa();
        $data['user']=$this->tiket_model->performaUser(1);   
        $this->load->view('performa',$data);
    }
     
}
?>