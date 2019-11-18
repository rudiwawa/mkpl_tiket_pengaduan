<?php 
class C_client extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('tiket_model');
        $this->load->model('context_model');
        $this->load->library('upload');
        }
    }
    function index(){    
    $cID= $this->session->userdata('ses_id');
    $data['notif'] = $this->tiket_model->getNotifClient($cID);
    $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($cID);
    $data['konteks'] = $this->context_model->getContext(2);
    $data['faq'] = $this->context_model->getContext(3);
    $data['kategori'] = $this->context_model->getKat();
    $this->load->view('index_klien',$data);    
    
    }
    function new(){ 
        $cID= $this->session->userdata('ses_id');
        $data['notif'] = $this->tiket_model->getNotifClient($cID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($cID);
        $this->load->view('form_ticket',$data);
    }
    
    function profile(){
        $uID= $this->session->userdata('ses_id');
        $data['notif'] = $this->tiket_model->getNotifClient($uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($uID);
        $data['tiket'] = $this->tiket_model->profilclient($uID);
        $this->load->view('klien_profil',$data);
    }
    function profileAcc(){
        $uID= $this->session->userdata('ses_id');
        $kota= $this->session->userdata('ses_prov');
        $data['notif'] = $this->tiket_model->getNotifClient($uID);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($uID);
        $data['tiket'] = $this->tiket_model->profilclient($uID);
        $this->load->model('login_model');
        $data['prov'] = $this->login_model->listProvinsi();
        $data['kota'] = $this->login_model->listkota($kota);        
        $this->load->view('klien_profil_account',$data);
    }

    function updateprofile(){
        $uID= $this->session->userdata('ses_id');
        $this->load->model('update_model');
        $this->update_model->updateclientInfo($uID);       
        redirect('C_client/profile');
    }

    function updatePassword(){
        $bid =  $this->session->userdata('ses_id');
        $data['notif'] = $this->tiket_model->getNotifClient($bid);
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($bid);
        $this->load->model('update_model');
        $result= $this->update_model->updateclientPass($bid);
        if ($result) {
            $msg = '<h3>Sukses</h3><br />';
            $this->session->set_flashdata('msg', $msg);
            redirect('C_client/profileAcc', $msg, $data);
          } else {
            $msg = '<h3><font color=red>password gagal diubah</font></h3><br />';
            $this->session->set_flashdata('msg', $msg);
            redirect('C_client/profileAcc', $msg, $data);
          }      
       
    }

    public function updateAvatar()
	{
		$config['upload_path']          = "assets/apps/img/client/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
		$this->load->library('upload', $config) ;
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('v_upload',$error);
			//	$aID=$this->session->userdata('ses_id'); 
			//$this->news_model->newNews($aID);
            //redirect('C_news_admin');
        }else{
            $aID=$this->session->userdata('ses_id');
            $this->load->model('update_model');
            $config['file_name'] = $aID;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->update_model->insertGambar($aID,$gambar);
            redirect('C_client/profile');
        }
    }
}
?>