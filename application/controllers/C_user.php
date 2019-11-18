<?php
class C_user extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('tiket_model');}
    }
    function index(){
        $depID= $this->session->userdata('ses_dep');
        $uID= $this->session->userdata('ses_id'); 
        $data['tiket'] = $this->tiket_model->listIndexUser($depID);
        $data['today'] = $this->tiket_model->getTodayTicketUsr($depID);
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['user'] = $this->tiket_model->getUser();
        $this->load->view('index_user',$data);
    }

    function user_tiket(){
        $uID= $this->session->userdata('ses_id');
        $depID= $this->session->userdata('ses_dep');
        $data['tiket'] = $this->tiket_model->listTiketUser($depID);
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['user'] = $this->tiket_model->getUser();
        $this->load->view('app_usr',$data);
    }

    function user_view(){
        $bid = $this->uri->segment(3);
        $depID= $this->session->userdata('ses_dep');
        $uID= $this->session->userdata('ses_id'); 
        $this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
        $data['balas'] = $this->tiket_model->balas($bid); 
        $data['client'] = $this->tiket_model->profilClientAll();       
        $this->load->view('app_usr_view',$data);
    }

    function notif_view(){
        $bid = $this->uri->segment(3);
        $stat = $this->uri->segment(4);
        $tipe = $this->uri->segment(5);
        $this->tiket_model->updateNotifUser($stat); 
        if($tipe==3){
            redirect('C_user_forward/forward_view/'.$bid);
        } else {
            redirect('C_user/user_view/'.$bid);
        }  
    }
    
    function tiket()
    {         
        $st = $this->uri->segment(3);
        $depID= $this->session->userdata('ses_dep');
        $uID= $this->session->userdata('ses_id');
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['tiket'] = $this->tiket_model->listUserTiket($uID,$st);
        $data['user'] = $this->tiket_model->getUser();
        $this->load->view('app_usr',$data);
    }

    function profile(){
        $uID= $this->session->userdata('ses_id');
        $depID= $this->session->userdata('ses_dep');
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['profil'] = $this->tiket_model->profilUser($uID);
        $data['rata2'] = $this->tiket_model->rata2Rating($uID);
        $data['tiket'] = $this->tiket_model->listTiketUser($uID);
        $this->load->view('user_profil',$data);
    }

    function newBalas(){
        $uID=$this->session->userdata('ses_id'); 
        $depID= $this->session->userdata('ses_dep');
        $tikID=$this->uri->segment(3);
        $cID=$this->tiket_model->getClientIDBalas($tikID);
        $this->tiket_model->updateUserID($uID,$tikID);
        $config['upload_path']          = "assets/apps/img/balas_tiket/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('berkas')){
            $this->tiket_model->addBalasan($cID,$depID,$uID,$tikID,'2');
            
        }else{
            $this->tiket_model->addBalasan($cID,$depID,$uID,$tikID,'2');
            $last=$this->tiket_model->getLastBalasan($tikID);
            $config['file_name'] = $uID.$last;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->tiket_model->insertGambarBalas($last,$gambar);
            
        }
        $this->tiket_model->insertNotifClient($tikID, $cID,"1");
        redirect('C_user/user_view/'.$tikID);
    }

}
?>