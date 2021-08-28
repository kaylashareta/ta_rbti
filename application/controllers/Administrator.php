<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_model');

        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
     
    }
  
    public function index(){
        $data['title']='SI-RBTI Dashboard Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    public function index_user(){
        $data['title']='SI-RBTI Daftar User';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftaruser'] = $this->admin_model->get_data();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_user', $data);
        $this->load->view('templates_administrator/footer');
    
    }

    public function index_admin(){
        $data['title']='SI-RBTI Daftar Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftaradmin'] = $this->admin_model->get_data1();
        

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_admin', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    public function tambah_admin(){
        $data['title']='SI-RBTI Tambah Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_admin','Nama','required|trim');
        $this->form_validation->set_rules('nip_admin','NIP','required|trim');
        $this->form_validation->set_rules('nohp_admin','No-HP','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_admin', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_admin();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_admin');
        }
      
    }

    public function edit_admin($id_user){
        $data['title']='SI-RBTI Edit Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['dataadmin'] = $this->admin_model->getedit_data1();
        
        
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_admin','Nama','required|trim');
        $this->form_validation->set_rules('nip_admin','NIP','required|trim');
        $this->form_validation->set_rules('nohp_admin','No-HP','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/edit_admin', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->edit_admin();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_admin');
        }
      
    }

    public function index_panitia(){
        $data['title']='SI-RBTI Daftar Panitia';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarpanitia'] = $this->admin_model->get_data2();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_panitia', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    public function tambah_panitia(){
        $data['title']='SI-RBTI Tambah Panitia';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_panitia','Nama','required|trim');
        $this->form_validation->set_rules('nim_panitia','NIM','required|trim');
        $this->form_validation->set_rules('nohp_panitia','No-HP','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_panitia', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_panitia();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Panitia Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_panitia');
        }
      
    }

    public function index_juri(){
        $data['title']='SI-RBTI Daftar Juri';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarjuri'] = $this->admin_model->get_data3();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_juri', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_juri(){
        $data['title']='SI-RBTI Tambah Juri';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_juri','Nama','required|trim');
        $this->form_validation->set_rules('nik_juri','NIK','required|trim');
        $this->form_validation->set_rules('nohp_juri','No-HP','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_juri', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_juri();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data juri Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_juri');
        }
      
    }

    public function index_peserta(){
        $data['title']='SI-RBTI Daftar Peserta';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarpeserta'] = $this->admin_model->get_data4();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_peserta', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function index_tema(){
        $data['title']='SI-RBTI Daftar Tema Proposal';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftartema'] = $this->admin_model->get_data5();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_tema', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_tema(){
        $data['title']='SI-RBTI Tambah Tema';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->form_validation->set_rules('kode_tema','KODE','required|trim');
        $this->form_validation->set_rules('tema_proposal','Tema','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_tema', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_tema();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data tema Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_tema');
        }
      
    }

    public function index_hakakses(){
        $data['title']='SI-RBTI Daftar Hak Akses';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarhak'] = $this->admin_model->get_data6();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_hakakses', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_hakakses(){
        $data['title']='SI-RBTI Tambah Hak Akses';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->form_validation->set_rules('hak_akses','HAK AKSES','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_hakakses', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_hakakses();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data hak akses Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_hakakses');
        }
      
    }

    public function index_provinsi(){
        $data['title']='SI-RBTI Daftar Provinsi';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarprov'] = $this->admin_model->get_data7();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_provinsi', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_provinsi(){
        $data['title']='SI-RBTI Tambah Provinsi';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->form_validation->set_rules('prov','PROVINSI','required|trim|is_unique[tb_provinsi.prov]',['is_unique'=>'provinsi sudah ada']);       
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_provinsi', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_provinsi();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data provinsi Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_provinsi');
        }
      
    }

    public function index_kota(){
        $data['title']='SI-RBTI Daftar Kota';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarkota'] = $this->admin_model->get_data8();
        $data['prov'] = $this->admin_model->getProv()->result_array();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_kota', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_kota(){
        $data['title']='SI-RBTI Tambah kota';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['prov'] = $this->admin_model->getProv()->result_array();
        
        $this->form_validation->set_rules('id_prov','id_prov','required|trim');       
        $this->form_validation->set_rules('kota','kota','required|trim|is_unique[tb_kota.kota]',['is_unique'=>'kota sudah ada']);       
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_kota', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_kota();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data kota Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_kota');
        }
      
    }

   



}

?>