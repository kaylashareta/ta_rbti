<?php

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Dashboard_model');
        if($this->session->userdata('hak_akses')!='3'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }


    public function index(){
        $data['title'] = "Dashboard";
        $id= $this->session->userdata('uname_user');
        $data['uname'] = $this->db->query("SELECT * FROM tb_user WHERE uname_user='$id'")->result();
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['artikel'] = $this->Dashboard_model->artikel();

        $this->load->view('templates_mahasiswa/header');
        $this->load->view('mahasiswa/dashboard',$data);
        $this->load->view('templates_mahasiswa/footer');
    }
} 

?>