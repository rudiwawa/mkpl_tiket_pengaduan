<?php
class C_user_forward extends CI_Controller{
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
        $this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['forw'] = $this->tiket_model->listforward($depID,$uID);
        $this->load->view('forward',$data);
    }
    function forward_view(){
        $bid = $this->uri->segment(3);
        $depID= $this->session->userdata('ses_dep');
        $uID= $this->session->userdata('ses_id'); 
        $this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['pertama'] = $this->tiket_model->getFirstMessageForward($bid);
        $data['balas'] = $this->tiket_model->getbalasForward($bid);
        $data['user'] = $this->tiket_model->getUser();        
        $this->load->view('app_forward_view',$data);
    }
    function profile(){
        $uID= $this->session->userdata('ses_id');
        $data['profil'] = $this->tiket_model->profilUser($uID);
        $data['rata2'] = $this->tiket_model->rata2Rating($uID);
        $data['tiket'] = $this->tiket_model->listTiketUser($uID);
        $this->load->view('user_profil',$data);
    }

    function newBalas(){
        $uID=$this->session->userdata('ses_id'); 
        $depID= $this->session->userdata('ses_dep');
        $fID=$this->uri->segment(3);
        $tikID=$this->uri->segment(4);
        $ID=$this->tiket_model->getUserForward($fID);
        $config['upload_path']          = "assets/apps/img/balas_forward/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('berkas')){
            $this->tiket_model->balasForward($fID,$uID);
        }else{
            $this->tiket_model->balasForward($fID,$uID);
            $last=$this->tiket_model->getLastBalasanForward($fID);
            $config['file_name'] = $uID.$last;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->tiket_model->insertGambarBalasForward($last,$gambar);
            
        }
        $this->tiket_model->insertNotifUser($fID, $depID, $ID, "4");
        $this->tiket_model->updateForwardChange($tikID);
        redirect('C_user_forward/forward_view/'.$fID);
    }

    function problem_view(){
        $bid = $this->uri->segment(3);
        $depID= $this->session->userdata('ses_dep');
        $uID= $this->session->userdata('ses_id'); 
        $this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
        $data['balas'] = $this->tiket_model->balas($bid);
        $data['user'] = $this->tiket_model->getUser();
        $data['client'] = $this->tiket_model->profilClientAll();        
        $this->load->view('problem_view',$data);
    }

    function newforward(){
        $bid = $this->uri->segment(3);
        $depID= $this->session->userdata('ses_dep');
        $uID= $this->session->userdata('ses_id'); 
        $this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifUser($depID,$uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifUser($depID,$uID);
        $data['dep'] = $this->tiket_model->getAllDepartment($depID);
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
        $this->load->view('form_forward',$data);
    }

    function addForward(){
        $tID = $this->uri->segment(3);
        $uID=$this->session->userdata('ses_id');
        $DID= $_POST['department']; 
        $depID=$this->tiket_model->getDepID($DID);
        $config['upload_path']          = "assets/apps/img/forward/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
        $this->load->library('upload', $config) ;
        if ( ! $this->upload->do_upload('berkas')){
            $this->tiket_model->newForward($uID,$tID,$depID);                     
            $last=$this->tiket_model->getLastForward($tID);
        }else{
            $this->tiket_model->newForward($uID,$tID,$depID);
            $last=$this->tiket_model->getLastForward($tID);
            $config['file_name'] = $cID.$last;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->tiket_model->insertGambarForward($last,$gambar);
            
        }
        $this->tiket_model->updateForwardStatus($tID);
        $this->tiket_model->insertNotifUser($last, $depID, "0" ,"3");
        redirect('C_user_forward');
    }
}
?>