<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    var $API = "";

    function __construct() {
        parent::__construct();
        $this->API = "http://localhost/rest_server";
        $this->load->helper('text');
    }

    public function index() {
        $data['kategori'] = json_decode($this->curl->simple_get($this->API . '/Kategori'));
        $data['blog'] = json_decode($this->curl->simple_get($this->API . '/Artikel'));
        $this->load->view('welcome_message', $data);
    }

    function read() {
        $data['kategori'] = json_decode($this->curl->simple_get($this->API . '/Kategori'));
        $parms = array('id_post' => $this->uri->segment(3));
        $data['blog'] = json_decode($this->curl->simple_post($this->API . '/Edit', $parms));
        $this->load->view('front',$data);
    }
   
    function detail() {
        $data['kategori'] = json_decode($this->curl->simple_get($this->API . '/Kategori'));
        $parms = array('id_kategori' => $this->uri->segment(3));
        $data['blog'] = json_decode($this->curl->simple_put($this->API . '/Edit', $parms));
        $this->load->view('welcome_message', $data);
    } 
    

}
