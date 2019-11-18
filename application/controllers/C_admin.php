<?php  
class C_admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('tiket_model');
        $this->load->model('context_model');}
    }
    function index(){
    $stmt['notif'] = $this->tiket_model->getNotifAdmin();
    $stmt['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
    $stmt['tiket'] = $this->tiket_model->listIndexAdmin();
    $stmt['today'] = $this->tiket_model->getToday();
    $stmt['user'] = $this->tiket_model->getUser();
    $stmt['performa']=$this->tiket_model->performaUser(0); 
    $this->load->view('app_admin',$stmt);
}

public function front(){
    $stmt['notif'] = $this->tiket_model->getNotifAdmin();
    $stmt['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
    $stmt['konteks'] = $this->context_model->getContext(1); 
    $this->load->view('context_front',$stmt);
}

public function new_context(){
    $stmt['notif'] = $this->tiket_model->getNotifAdmin();
    $stmt['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
    $stmt['konteks'] = $this->context_model->getContext(2);
    $stmt['kategori'] = $this->context_model->getKat(); 
    $this->load->view('context_client_new',$stmt);
}

public function edit_context(){
    $stmt['notif'] = $this->tiket_model->getNotifAdmin();
    $stmt['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
    $stmt['dep'] = $this->tiket_model->listDepartment();
    $id = $this->uri->segment(3);
    $stmt['konteks'] = $this->context_model->getContextID($id);
    $stmt['kategori'] = $this->context_model->getKat(); 
    $this->load->view('context_client_edit',$stmt);
}

public function client(){
    $stmt['notif'] = $this->tiket_model->getNotifAdmin();
    $stmt['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
    $stmt['user'] = $this->tiket_model->listUser();
    $stmt['konteks'] = $this->context_model->getContext(3);
    $stmt['kategori'] = $this->context_model->getKat(); 
    $this->load->view('context_client',$stmt);
}

public function inbox()
{
    $this->load->model('tiket_model');
    $data['tiket'] = $this->tiket_model->listIndexAdmin();        
    $this->load->view('app_admin_inbox',$data);
}
    function admin_view(){
        $bid = $this->uri->segment(3);
        $this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
        $data['balas'] = $this->tiket_model->balas($bid);
        $data['user'] = $this->tiket_model->getUser();
        $data['client'] = $this->tiket_model->profilClientAll();        
        $this->load->view('app_admin_view',$data);
    }

    function notif_view(){
        $bid = $this->uri->segment(3);
        $stat = $this->uri->segment(4);
        $this->tiket_model->updateNotifAdmin($stat);    
        redirect('C_tiket_admin/admin_view/'.$bid);
    }
}
?>