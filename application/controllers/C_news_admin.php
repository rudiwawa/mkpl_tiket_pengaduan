<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_news_admin extends CI_Controller {
	function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('News_model');}
    }
	public function index()
	{
		$this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
		$data['news'] = $this->News_model->getAllData(1,2);
		$this->load->view('news_admin',$data);
    }
    
    public function fetch()
	{
		$output = '';
		$data = $this->News_model->getAllData($this->input->post('limit'), $this->input->post('start'));
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
                <li class="search-item clearfix">
                <a href="">
                    <img src="'.base_url().'assets/apps/img/news/'.$row->foto.'" />
                    </a>
                    <div class="search-content">
                        <h2 class="search-title">'
                        .$row->title.
                        '</h2>
                        <div class="search-desc">'.substr($row->message,0,100).'</div> ...
                    </div>
                    <a class="btn btn-info mt-ladda-btn ladda-button btn-circle" style="float:right;" href= '.site_url('C_news_admin/view_news/'.$row->newsID)  .'> Read More </a>
                </li>
				';
			}
		}
		echo $output;
	}

	public function new()
	{
		$this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
		$this->load->view('form_news',$data);
    }

    public function view_news()
	{
        $bid = $this->uri->segment(3);
		$this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $data['news'] = $this->News_model->getNews($bid);
		$this->load->view('news_admin_view',$data); 
	}
    
    public function edit()
	{
        $bid = $this->uri->segment(3);
		$this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $data['news'] = $this->News_model->getNews($bid);
		$this->load->view('form_news_edit',$data);
    }
    
    public function delete()
	{
        $bid = $this->uri->segment(3);
		$this->load->model('tiket_model');
        $data['notif'] = $this->tiket_model->getNotifAdmin();
        $data['jumlahNotif'] = $this->tiket_model->getTotalNotifAdmin();
        $this->News_model->deleteNews($bid);
		redirect('C_news_admin',$data);
	}
    
    public function editNews()
	{
		$config['upload_path']          = "assets/apps/img/news/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $bid = $this->uri->segment(3);
        $this->upload->initialize($config);
		$this->load->library('upload', $config) ;
		if ( ! $this->upload->do_upload('berkas')){
			$this->News_model->editNews($bid);
            redirect('C_news_admin');
        }else{
            $this->News_model->editNews($bid);
            $config['file_name'] = $bid.'b'.$bid;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->News_model->insertGambar($bid,$gambar);
            redirect('C_news_admin');
        }
	}

	public function newNews()
	{
		$config['upload_path']          = "assets/apps/img/news/";
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 2120;
        $config['max_height']           = 1224;
        $this->upload->initialize($config);
        $aID=$this->session->userdata('ses_id');
		$this->load->library('upload', $config) ;
		if ( ! $this->upload->do_upload('berkas')){
			$this->News_model->newNews($aID);
            redirect('C_news_admin');
        }else{
            $this->News_model->newNews($aID);
            $last=$this->News_model->getLastNews();
            $config['file_name'] = $last;
            $this->upload->initialize($config);
            $this->upload->do_upload('berkas');
            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
            $this->News_model->insertGambar($last,$gambar);
            redirect('C_news_admin');
        }
	}

}