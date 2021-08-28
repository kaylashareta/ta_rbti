<?php

class DaftarMahasiswa extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('hak_akses')!='2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index(){
        $data['title'] = "Daftar Mahasiswa";
        $id= $this->session->userdata('uname_user');
        $data['daftarmhs'] = $this->db->query("SELECT * FROM tb_mahasiswa WHERE dosen_mhs='$id' ORDER BY tb_mahasiswa.nim_mhs ASC")->result();
        $this->load->view('templates_dosen/header_daftarmhs');
        $this->load->view('dosen/daftarmahasiswa', $data);
        $this->load->view('templates_dosen/footer');
    }
}

?>