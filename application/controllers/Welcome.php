<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			$this->load->model('context_model');
		}
    }
	function index(){
		if (null == ($this->session->userdata('akses'))) {
			$stmt['konteks'] = $this->context_model->getContext(1);  
			$this->load->view('welcome_message',$stmt);
		} else{
			if($this->session->userdata('akses') == '1'){
					redirect('C_admin');
				} else if ($this->session->userdata('akses') == '2') {
			  redirect('C_user');
			} else if ($this->session->userdata('akses') == '3') {
			redirect('C_client');
			}
		  }  
	  }
	public function index_klien()
	{
		$this->load->view('index_klien');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function news()
	{
		$this->load->view('news');
	}
}