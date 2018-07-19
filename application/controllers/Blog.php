<?php

Class Blog extends CI_Controller {

    var $API = "";

    function __construct() {
        parent::__construct();
        $this->API = "http://localhost/rest_server";
        chek_seesion();
    }

    function index() {
        $data['blog'] = json_decode($this->curl->simple_get($this->API . '/Artikel'));
        $this->template->load('template', 'blog/list', $data);
    }

    function add() {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        if (isset($_POST['submit'])) {
            if ($this->form_validation->run() != FALSE) {
                $foto = $this->upload();
                $data = array(
                    'id_kategori' => $this->input->post('id_kategori'),
                    'isi_post' => $this->input->post('isi_post'),
                    'judul' => $this->input->post('judul'),
                    'foto' => $foto
                );
                $insert = $this->curl->simple_post($this->API . '/Artikel', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($insert) {
                    $this->session->set_flashdata('sukses', 'Sukses Menambah Artikel');
                } else {
                    $this->session->set_flashdata('gagal', 'Gagal Menambahkan Artikel');
                }
            } else {
                echo $this->session->set_flashdata('salah', 'Tidak Boleh Ada Data Yang Tidak Di isi...!!!');
            }



            redirect('Blog');
        } else {
            $data['kategori'] = json_decode($this->curl->simple_get($this->API . '/Kategori'));
            $this->template->load('template', 'blog', $data);
        }
    }

    function edit() {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        if (isset($_POST['submit'])) {
            if ($this->form_validation->run() == TRUE) {
                $foto = $this->upload();
                $data = array(
                    'id_post' => $this->input->post('id_post'),
                    'isi_post' => $this->input->post('post'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'judul' => $this->input->post('judul'),
                    'foto' => $foto,
                );
                $update = $this->curl->simple_put($this->API . '/Artikel', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($update) {
                    $this->session->set_flashdata('sukses', 'Sukses Update Artikel');
                } else {
                    $this->session->set_flashdata('gagal', 'Gagal Update Artikel');
                }
            } else {
                $this->session->set_flashdata('gagal', 'Gagal Update Artikel');
            }


            redirect('Blog');
        } else {
            $data['kategori'] = json_decode($this->curl->simple_get($this->API . '/Kategori'));
            $parms = array('id_post' => $this->uri->segment(3));
            $data['blog'] = json_decode($this->curl->simple_post($this->API . '/Edit', $parms));
            $this->template->load('template', 'blog/edit', $data);
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

    function Delete($id_post) {
        if (empty($id_post)) {
            redirect('Blog');
        } else {
            $delete = $this->curl->simple_delete($this->API . '/Artikel', array('id_post' => $id_post), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('Hapus', 'Sukses Hapus Artikel');
            } else {
                $this->session->set_flashdata('cancel', 'Gagal Hapus Artikel');
            }
            redirect('Blog');
        }
    }

}

?>