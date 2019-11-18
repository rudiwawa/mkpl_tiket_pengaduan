<?php 

class C_admin_view extends CI_Controller {
	public function index()
	{   
        $bid = (isset($_REQUEST['postbalas'])) ? $_REQUEST['postbalas'] : 0;
        $this->load->model('tiket_model');
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
		$data['balas'] = $this->tiket_model->balas($bid);        
        $this->load->view('app_admin_view',$data);
	}
}