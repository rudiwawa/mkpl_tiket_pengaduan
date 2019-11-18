<?php 
class C_tiket_admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('tiket_model');}
    } 
    function index(){ 
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();    
        $data['tiket'] = $this->tiket_model->listAllAdmin(); 
        $data['user'] = $this->tiket_model->getUser();
        $this->load->view('tiket',$data);
}
    function admin_view(){
        $bid = $this->uri->segment(3);
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();    
        $this->load->model('tiket_model');
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
        $data['balas'] = $this->tiket_model->balas($bid);
        $data['user'] = $this->tiket_model->getUser();
        $data['client'] = $this->tiket_model->profilClientAll();      
        $this->load->view('app_admin_view',$data);
    }
}
?>