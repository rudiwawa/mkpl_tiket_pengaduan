<?php 

class coba extends CI_Controller {
	public function index()
	{
        $this->load->model('tiket_model');
		$data['tiket'] = $this->tiket_model->listIndexAdmin();        
        $this->load->view('app_admin_inbox',$data);
	}
}