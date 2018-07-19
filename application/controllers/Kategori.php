<?php

Class Kategori extends CI_Controller {

    var $API = "";

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->API = "http://localhost/rest_server";
    }

    function index() {
        $data['kategori'] = json_decode($this->curl->simple_get($this->API . '/Kategori'));
        $this->template->load('template', 'kategori/list', $data);
    }

    function add() {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required');
        if (isset($_POST['submit'])) {
            if ($this->form_validation->run() != FALSE) {
                $data = array(
                    'nama_kategori' => $this->input->post('nama_kategori'),
                );
                $insert = $this->curl->simple_post($this->API . '/Kategori', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($insert) {
                    $this->session->set_flashdata('sukses', 'Sukses Menambah Kategori');
                } else {
                    $this->session->set_flashdata('gagal', 'Gagal Menambahkan Kategori');
                }
            } else {
                echo $this->session->set_flashdata('salah', 'Tidak Boleh Ada Data Yang Tidak Di isi...!!!');
            }
          redirect('Kategori');
        } else {
            $data['kategori'] = json_decode($this->curl->simple_get($this->API . '/Kategori'));
            $this->template->load('template', 'kategori', $data);
        }
    }

    function edit() {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required');
        if (isset($_POST['submit'])) {
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'id'=>$this->input->post('id'),
                    'nama_kategori' => $this->input->post('nama_kategori')
                );
                $update = $this->curl->simple_put($this->API . '/Kategori', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($update) {
                    $this->session->set_flashdata('sukses', 'Sukses Update Kategori');
                } else {
                    $this->session->set_flashdata('gagal', 'Gagal Update Kategori');
                }
            }else {
                $this->session->set_flashdata('gagal', 'Gagal Update Kategori');
           }
             redirect('Kategori');
        } else {
            $parms = array('id' => $this->uri->segment(3));
            $data['kategori'] = json_decode($this->curl->simple_post($this->API . '/Edit_kategori',$parms));
            $this->template->load('template', 'kategori/edit', $data);
        }
    }

    function upload() {
        $config['upload_path'] = './uploads/foto';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 5000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

    function Delete($id) {
        if (empty($id)) {
            redirect('Kategori');
        } else {
            $delete = $this->curl->simple_delete($this->API . '/Kategori', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('Hapus', 'Sukses Hapus Kategori');
            } else {
                $this->session->set_flashdata('cancel', 'Gagal Hapus Kategori');
            }
            redirect('Kategori');
        }
    }

}

?>