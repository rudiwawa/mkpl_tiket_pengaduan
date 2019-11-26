<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_News extends CI_Controller {
	public function index()
	{
		$this->load->model('News_model');
		$cID= $this->session->userdata('ses_id');
    	$data['notif'] = $this->tiket_model->getNotifClient($cID);
    	$data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($cID);
		$this->load->view('news',$data);
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
                    <a class="btn btn-info mt-ladda-btn ladda-button btn-circle" style="float:right;" href= '.site_url('C_News/view_news/'.$row->newsID)  .'> Read More </a>
                </li>
				';
			}
		}
		echo $output;
	}

	public function view_news()
	{
        $bid = $this->uri->segment(3);
		$this->load->model('tiket_model');
        $cID= $this->session->userdata('ses_id');
    	$data['notif'] = $this->tiket_model->getNotifClient($cID);
    	$data['jumlahNotif'] = $this->tiket_model->getTotalNotifClient($cID);
        $data['news'] = $this->News_model->getNews($bid);
		$this->load->view('news_view',$data); 
	}
}