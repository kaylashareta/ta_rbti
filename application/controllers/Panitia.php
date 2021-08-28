<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('panitia_model');
        if($this->session->userdata('hak_akses')!='2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }
  
    public function index(){
     $data['title']='SI-RBTI Dashboard Panitia';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index', $data);
        $this->load->view('templates_panitia/footer');
       /* $this->load->view('templates_panitia/header');
        $this->load->view('templates_panitia/sidebar');
        $this->load->view('panitia/dashboard', $data);
        $this->load->view('templates_panitia/footer');*/
    } 

    public function index_panitia(){
        $data['title']='SI-RBTI Daftar Panitia';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarpanitia'] = $this->panitia_model->get_data2();
        $data['daftarpanitianonaktif'] = $this->panitia_model->get_panitianonaktif();

        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index_panitia', $data);
        $this->load->view('templates_panitia/footer');
      
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
            $this->load->view('templates_panitia/header', $data);
            $this->load->view('templates_panitia/sidebar', $data);
            $this->load->view('templates_panitia/topbar', $data);
            $this->load->view('panitia/tambah_panitia', $data);
            $this->load->view('templates_panitia/footer');
            
        }else{
            $this->panitia_model->tambah_panitia();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Panitia Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('panitia/index_panitia');
        }
      
    }

    public function index_juri(){
        $data['title']='SI-RBTI Daftar Juri';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarjuri'] = $this->panitia_model->get_data3();
        $data['daftarnonjuri'] = $this->panitia_model->get_jurinonaktif();

        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index_juri', $data);
        $this->load->view('templates_panitia/footer');
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
            $this->load->view('templates_panitia/header', $data);
            $this->load->view('templates_panitia/sidebar', $data);
            $this->load->view('templates_panitia/topbar', $data);
            $this->load->view('panitia/tambah_juri', $data);
            $this->load->view('templates_panitia/footer');
            
        }else{
            $this->panitia_model->tambah_juri();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data juri Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('panitia/index_juri');
        }
      
    }

    public function index_peserta(){
        $data['title']='SI-RBTI Daftar Peserta';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarpeserta'] = $this->panitia_model->get_data4();
        $data['daftarnonpeserta'] = $this->panitia_model->get_nonpeserta();

        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index_peserta', $data);
        $this->load->view('templates_panitia/footer');
    } 

    public function index_rekening(){
        $data['title']='SI-RBTI Daftar rekening';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarrekening'] = $this->panitia_model->get_data5();

        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index_rekening', $data);
        $this->load->view('templates_panitia/footer');
    }

    public function tambah_rekening(){
        $data['title']='SI-RBTI Tambah rekening';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        
  
        $this->form_validation->set_rules('nama_bank','Bank','required|trim');
        $this->form_validation->set_rules('nama_rek','Rekening','required|trim');
        $this->form_validation->set_rules('no_rek','Nomor Rekening','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_panitia/header', $data);
            $this->load->view('templates_panitia/sidebar', $data);
            $this->load->view('templates_panitia/topbar', $data);
            $this->load->view('panitia/tambah_rekening', $data);
            $this->load->view('templates_panitia/footer');
            
        }else{
            $this->panitia_model->tambah_rekening();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data rekening Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('panitia/index_rekening');
        }
      
    }

    public function index_verifbayar(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Daftar pembayaran';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarbayar'] = $this->panitia_model->get_data6($id_user);
        $data['daftarbermasalah'] = $this->panitia_model->get_data8($id_user);
        $data['daftarberhasil'] = $this->panitia_model->get_data9($id_user);

        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index_pembayaran', $data);
        $this->load->view('templates_panitia/footer');
    }

    public function index_bayarbermasalah(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Pembayaran Bermasalah';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarbayar'] = $this->panitia_model->get_data6($id_user);
        $data['daftarbermasalah'] = $this->panitia_model->get_data8($id_user);
        $data['daftarberhasil'] = $this->panitia_model->get_data9($id_user);

        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index_bermasalah', $data);
        $this->load->view('templates_panitia/footer');
    }

    public function index_proposal(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Sudah Finalisasi';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarfinalisasi'] = $this->panitia_model->get_finalisasi($id_user);
        $data['daftarbelumfinalisasi'] = $this->panitia_model->get_belumfinalisasi($id_user);
       
        $this->load->view('templates_panitia/header', $data);
        $this->load->view('templates_panitia/sidebar', $data);
        $this->load->view('templates_panitia/topbar', $data);
        $this->load->view('panitia/index_finalisasi', $data);
        $this->load->view('templates_panitia/footer');
    } 
    
    
    public function verifberhasil($id)
    {
        $this->panitia_model->verifikasiberhasil($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_verifbayar');
    }

    public function verifberhasil1($id)
    {
        $this->panitia_model->verifikasiberhasil($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_bayarbermasalah');
    }

    public function verifbermasalah($id)
    {
        $this->panitia_model->verifikasibermasalah($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_verifbayar');
    }

    public function aktifpanitia($id)
    {
        $this->panitia_model->aktivasipanitia($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_panitia');
    }

    public function aktifjuri($id)
    {
        $this->panitia_model->aktivasijuri($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_juri');
    }

    public function nonaktifjuri($id)
    {
        $this->panitia_model->nonaktivasijuri($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_juri');
    }

    public function aktifpeserta($id)
    {
        $this->panitia_model->aktivasipeserta($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_peserta');
    }

    public function nonaktifpeserta($id)
    {
        $this->panitia_model->nonaktivasipeserta($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesanan LPLPO Telah Diketahui</div>');
        redirect('panitia/index_peserta');
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['pembayaran']=$this->panitia_model->get_pembayaran_keyword($keyword);
        $this->load->view('panitia/index_pembayaran', $data);
    }





}

?>