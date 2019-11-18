<?php 
class C_admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
			redirect('C_login');
		} else{
        $this->load->model('tiket_model');}
    }
    function index(){
    $stmt['tiket'] = $this->tiket_model->listIndexAdmin();
    $stmt['today'] = $this->tiket_model->getTodayTicket();
    $this->load->view('index_admin',$stmt);
}
public function inbox()
{
    $this->load->model('tiket_model');
    $data['tiket'] = $this->tiket_model->listAllAdmin();        
    $this->load->view('app_admin_inbox',$data);
}
    function admin_view(){
        $bid = (isset($_REQUEST['postbalas'])) ? $_REQUEST['postbalas'] : 0;
        $this->load->model('tiket_model');
        $data['pertama'] = $this->tiket_model->getFirstMessage($bid);
		$data['balas'] = $this->tiket_model->balas($bid);        
        $this->load->view('app_admin_view',$data);
    }
    public function tiket(){    
        $this->load->view('tiket');
    }
    public function inbox_tiket()
{
    $this->load->model('tiket_model');
    $data['tiket'] = $this->tiket_model->listAllAdmin();        
    $this->load->view('app_admin_inbox',$data);
}
    function tiket_inbox(){
        $stmt = $this->tiket_model->listAllAdmin();
        $num = $stmt->rowCount();
        if ($num >0)
        {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                extract($row);
                if ($status == '1') {
                        $stat = 'Open';
                    } else {
                        $stat = 'Closed';
                    }
                    $panjang = strlen($tiketID);
                    $id=$tiketID;
                    for($i = 5;$i > $panjang;$i--){
                        $id = "0".$id;
                    }
                    $id = "#".$id;
                echo '<tr class="unread" data-messageid="'.$tiketID.'" id="'.$tiketID.'">';
                echo '<td class="view-message">'.$id.'</td>';
                echo '<td class="view-message">'.$title.'</td>';
                echo '<td class="view-message hidden-xs" > '.$fullname.' </td>';
                echo '<td class="view-message">'.$user_name.'</td>';
                echo '<td class="view-message">'.$Nama_Department.'</td>';
                echo '<td class="view-message inbox-small-cells">'.$stat.'</td>';
                echo '<td class="view-message text-right">'.$date_post.'</td></tr>';        
            }
        }   
    }
}
?>