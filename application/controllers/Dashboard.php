<?php 
Class Dashboard extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        chek_seesion();
    }
            
    function index(){
        $this->template->load('template','dashboard');
    }
    
    
    function Logout(){
        $this->session->sess_destroy();
         redirect('Login');
    }
    
}


?>