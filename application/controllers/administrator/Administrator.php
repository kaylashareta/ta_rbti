<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_model');
        /*if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }*/
    }
  
    public function index(){
        //$data['user1'] = $this->Admin_model->get_data();
       /* $data['dosen'] = $this->Admin_model->get_data2();
        $data['mhs'] = $this->Admin_model->get_data3();
        $data['proposal'] = $this->Admin_model->get_data4();
        $data['dproposal'] = $this->Admin_model->daftarpro();*/
        $data['title']='SI-RBTI Dashboard Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index', $data);
        $this->load->view('templates_administrator/footer');
       /* $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dashboard', $data);
        $this->load->view('templates_administrator/footer');*/
    }
}

?>