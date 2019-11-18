<?php 
class C_client_tiket extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('tiket_model');}
    }
    
    function index(){    
        $cID= $this->session->userdata('ses_id');
        $data['notif'] = $this->tiket_model->getNotifClient($cID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($cID);
	    $data['tiket'] = $this->tiket_model->listTiket($cID);
        $data['user'] = $this->tiket_model->getUser();
        $this->load->view('app_client',$data);
    }

    function inbox(){
    $cID=$this->session->userdata('ses_id');
	$jumlah_data = $this->tiket_model->jumlah_data($cID);
	$data['tiket'] = $this->tiket_model->listTiket($cID,$config['per_page'],$from);
    $data['user'] = $this->tiket_model->getUser();        
    $this->load->view('app_inbox_inbox',$data);
    }

    function client_view(){
        $bid = $this->uri->segment(3);
        $this->load->model('tiket_model');
        $cID= $this->session->userdata('ses_id');
        $data['notif'] = $this->tiket_model->getNotifClient($cID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($cID);
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
        $data['balas'] = $this->tiket_model->balas($bid);
        $data['user'] = $this->tiket_model->getUser();        
        $this->load->view('app_client_view',$data);
    }

    function new(){
        $cID= $this->session->userdata('ses_id');
    $data['notif'] = $this->tiket_model->getNotifClient($cID);
    $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($cID);
    $data['dep'] = $this->tiket_model->listDepartment();
        $this->load->view('form_ticket',$data);
    } 

    function rating(){    
        $cID=$this->session->userdata('ses_id');
        $tikID=$this->uri->segment(3);
        $userID=$this->tiket_model->getUserIDBalas($tikID);
        $this->tiket_model->addRating($tikID,$cID,$userID);
        $avg=$this->tiket_model->avgRating($userID);
        $this->tiket_model->updateRata2($userID,$avg);
        $last=$this->tiket_model->getLastBalasan($tikID);
        $tf=$this->tiket_model->getTimefinish($last);
        $ts=$this->tiket_model->getTimestart($tikID);
        $time=$this->tiket_model->timedif($tikID,$last);
        $this->tiket_model->addPerforma($userID,$tikID,$ts,$tf,$time);
        $this->tiket_model->close($tikID);
        $this->tiket_model->insertNotifAdmin($last,"2","0");
        redirect('C_client_tiket');
    }

    function newTiket(){
        $cID=$this->session->userdata('ses_id'); 
        $DID= $_POST['department'];
        $depID=$this->tiket_model->getDepID($DID);
        $config['upload_path']          = "assets/apps/img/tiket/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
        $this->load->library('upload', $config) ;
        if ( ! $this->upload->do_upload('berkas')){
            $this->tiket_model->newTiket($cID,$depID);          
            $last=$this->tiket_model->getLastTicket($cID);
        }else{
            $this->tiket_model->newTiket($cID,$depID);
            $last=$this->tiket_model->getLastTicket($cID);
            $config['file_name'] = $cID.$last;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->tiket_model->insertGambar($last,$gambar);
            
        }
        $this->tiket_model->insertnotifAdmin($last,'1','0');
        $this->tiket_model->insertNotifUser($last, $depID, "0" ,"1");
        redirect('C_client_tiket');
    }

    function notif_view(){
        $bid = $this->uri->segment(3);
        $stat = $this->uri->segment(4);
        $this->tiket_model->updateNotifClient($stat);    
        redirect('C_client_tiket/client_view/'.$bid);
    }

    function newBalas(){
        $config['upload_path']          = "assets/apps/img/balas_tiket/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('berkas')){
            $cID=$this->session->userdata('ses_id'); 
            $tikID=$this->uri->segment(3);
            $depID=$this->tiket_model->getDepIDBalas($tikID);
            $userID=$this->tiket_model->getUserIDBalas($tikID);
            $this->tiket_model->addBalasan($cID,$depID,$userID,$tikID,'1');
            
        }else{
            $cID=$this->session->userdata('ses_id'); 
            $tikID=$this->uri->segment(3);
            $depID=$this->tiket_model->getDepIDBalas($tikID);
            $userID=$this->tiket_model->getUserIDBalas($tikID);
            $this->tiket_model->addBalasan($cID,$depID,$userID,$tikID,'1');
            $last=$this->tiket_model->getLastBalasan($tikID);
            $config['file_name'] = $cID.$last;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->tiket_model->insertGambarBalas($last,$gambar);
            
        }
        
        $this->tiket_model->insertNotifUser($tikID, $depID, $userID,"2");
        redirect('C_client_tiket/client_view/'.$tikID);
    }
}
?>