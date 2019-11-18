<?php
class C_department_admin extends CI_Controller
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
        $data['dep'] = $this->tiket_model->listDepartment();
        $this->load->view('app_department',$data);
    }
    function admin_view(){
        $bid = $this->uri->segment(3);
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $data['user'] = $this->tiket_model->listUserDepartment($bid);    
        $this->load->view('app_department_view',$data);
    }
    
    function new()
    {        
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $this->load->view('form_new_department',$data);
    }

    function delete()
    {        
        $bid = $this->uri->segment(3);
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $this->tiket_model->deleteDep($bid);
        redirect('C_Department_admin',$data);
    }

    function edit()
    {        
        $bid = $this->uri->segment(3);
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $data['dep'] = $this->tiket_model->getDepartment($bid);
        $this->load->view('form_edit_department',$data);
    }

    function editDepartment()
    {        
        $bid = $this->uri->segment(3);
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $this->tiket_model->editDep($bid);
        redirect('C_Department_admin',$data);
    }

    function newDepartment(){
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $result=$this->tiket_model->newDepartment();
        if ($result) {
            redirect('C_Department_admin',$data);
        } else {
            $msg = 'EmailSudah Terpakai';
            $this->session->set_flashdata('msg', $msg);
            redirect('C_Department_admin/new',$data);
        }
    }

    public function updateAvatar()
	{
		$config['upload_path']          = "assets/apps/img/user/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
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
            $this->update_model->insertGambarUser($aID,$gambar);
            redirect('C_user_admin/profile');
        }
    }

    function updateProfil(){
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $bid =  $this->session->userdata('ses_userID');
        $this->load->model('update_model');
        $this->update_model->updateUserInfo($bid);       
        redirect('C_user_admin/profileAcc',$data);
    }
    function updatePassword(){
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $bid =  $this->session->userdata('ses_userID');
        $this->load->model('update_model');
        $result= $this->update_model->updateUserPass($bid);
        if ($result) {
            $msg = '<h3>Sukses</h3><br />';
            $this->session->set_flashdata('msg', $msg);
            redirect('C_user_admin/profileAcc', $msg, $data);
          } else {
            $msg = '<h3><font color=red>password gagal diubah</font></h3><br />';
            $this->session->set_flashdata('msg', $msg);
            redirect('C_user_admin/profileAcc', $msg, $data);
          }      
       
    }
}
?>