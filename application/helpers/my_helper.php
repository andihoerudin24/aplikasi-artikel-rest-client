<?php

function chek_seesion() {
    $ci = &get_instance();
    $session = $ci->session->userdata('status_login');
    if ($session != 'ok') {
        redirect('Login');
    }
}




function chek_seesion_login(){
    $ci=&get_instance();
 //   $controller = $ci->uri->segment(1);
    $session=$ci->session->userdata('status_login');
    if($session=='ok') {
        redirect('Dashboard');
    }
}

?>