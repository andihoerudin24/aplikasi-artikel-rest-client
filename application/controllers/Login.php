<?php  
Class Login extends CI_Controller{
    
    var $API="";
    
    function __construct() {
        parent::__construct();
        $this->API="https://tutorandi.000webhostapp.com/";
    }
            
    function index(){
        if (isset($_POST['submit'])) {
            $username= $this->input->post('username');
            $password= md5($this->input->post('password'));
            $login= json_decode($this->curl->simple_get($this->API.'/Login'));
            if ($login[0]->username!=$username or $login[0]->password!=$password) { 
                $this->session->set_flashdata('gagal','username dan password anda salah');
                redirect('Login');
            }else {
               $this->session->set_userdata(array('username'=>$login[0]->username));
               $this->session->set_userdata(array('status_login'=>'ok'));
                redirect('Dashboard');
            }
        }else{
          chek_seesion_login();
          $this->load->view('login');      
        }
      
    }
}


?>