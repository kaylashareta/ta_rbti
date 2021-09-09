<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('peserta_model');
        $this->load->helper(array('form', 'url'));
      
        if($this->session->userdata('hak_akses')!='4'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }

    } 
  
    public function index(){
        $id_user=$this->session->userdata('id_user');
        $id_proposal=$this->session->userdata('id_proposal');
        $data['title']='SI-RBTI Dashboard Peserta';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['getbayar'] = $this->peserta_model->get_pembayaran();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getjudul'] = $this->peserta_model->getJudul($id_user)->row_array();
        $data['startup'] = $this->peserta_model->getStartup($id_user)->row_array();
		$data['tim'] = $this->peserta_model->getBiodatatim($id_user)->row_array();
		$data['reviewproduk'] = $this->peserta_model->getReviewproduk($id_user)->row_array();
		$data['paperpitching'] = $this->peserta_model->getPaperpitching($id_user)->row_array();
		$data['bisnisplan'] = $this->peserta_model->getBisnisplan($id_user)->row_array();
		$data['pitchdesk'] = $this->peserta_model->getPitchdesk($id_user)->row_array();

        $data['step1']=0;
        $data['step2']=0;
        $data['step3']=0;
        $data['step4']=0;
        $data['step5']=0;
        $data['step6']=0;
        if($data['startup']){
            $data['step1']=1;
        }
        if($data['tim']){
            $data['step2']=1;
        }
        if($data['reviewproduk']){
            $data['step3']=1;
        }
        if ($data['paperpitching']){
            $data['step4']=1;
        }
        if($data['bisnisplan']){
            $data['step5']=1;
        }
        if ($data['pitchdesk']){
            $data['step6']=1;
        }
      
        
        $this->load->view('templates_peserta/header', $data);
        $this->load->view('templates_peserta/sidebar', $data);
        $this->load->view('templates_peserta/topbar', $data);
        $this->load->view('peserta/index', $data);
        $this->load->view('templates_peserta/footer');
     
    }
    

    public function index_pembayaran(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Halaman Pembayaran';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getbayar'] = $this->peserta_model->get_pembayaran();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        
        if(!$data['getjoin']){
            redirect('peserta/tambah_pembayaran');
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_pembayaran', $data);
            $this->load->view('templates_peserta/footer');
        }
        
    }

    
    public function tambah_pembayaran(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Tambah Pembayaran';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['daftarrekening'] = $this->peserta_model->get_rekening();
        $data['getbayar'] = $this->peserta_model->get_pembayaran();

        $this->form_validation->set_rules('tanggal_bayar','Tanggal','required|trim');
        $this->form_validation->set_rules('jumlah_bayar','Jumlah','required|trim');
        $this->form_validation->set_rules('rek_transfer','Rekening','required|trim');
        $this->form_validation->set_rules('nama_transfer','Nama','required|trim');
          
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_pembayaran', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
                $id_user     = $this->session->id_user;
                $tanggal_bayar = $this->input->post('tanggal_bayar');
                $jumlah_bayar = $this->input->post('jumlah_bayar');
                $rek_transfer = $this->input->post('rek_transfer');
                $nama_transfer = ucwords($this->input->post('nama_transfer'));
                $bukti_transfer    =$_FILES['bukti_transfer']['name'];
                if($bukti_transfer!=''){
                    $config['overwrite']        = TRUE;
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('bukti_transfer')){
                        echo "photo gagal diupload!";
                    }else{
                        $bukti_transfer=$this->upload->data('file_name');
                    }
                }
                $status_bayar = $this->input->post('status_bayar');
                $date_added = $this->input->post('date_added');
                
                $data=array(

                    'id_user'      =>$id_user,
                    'tanggal_bayar'     =>$tanggal_bayar,
                    'jumlah_bayar'     =>$jumlah_bayar,
                    'rek_transfer'    =>$rek_transfer,
                    'nama_transfer'    =>$nama_transfer,
                    'bukti_transfer'    =>$bukti_transfer,
                    'status_bayar'=>'Belum Verifikasi',
                    'date_added'    =>date("Y-m-d"),
              
                    );


            $this->peserta_model->input_data($data);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data pembayaran Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_pembayaran');
        }
      
    }

    public function index_proposal(){
        $id_user=$this->session->userdata('id_user');
        //$this->session->set_userdata('id_proposal', $id_proposal);
        //$id_proposal=$this->session->userdata('id_proposal');
        $data['title']='SI-RBTI Judul Proposal';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getjudul'] = $this->peserta_model->getJudul($id_user)->row_array();
        $data['getstartup'] = $this->peserta_model->getStartup($id_user)->row_array();
        $data['getbiodatatim'] = $this->peserta_model->getBiodatatim($id_user)->row_array();
        $data['getreviewproduk'] = $this->peserta_model->getReviewproduk($id_user)->row_array();
        $data['getpaperpitching'] = $this->peserta_model->getPaperpitching($id_user)->row_array();
        $data['getbisnisplan'] = $this->peserta_model->getbisnisplan($id_user)->row_array();
        $data['getpitchdesk'] = $this->peserta_model->getPitchdesk($id_user)->row_array();
        
        if(!$data['getjudul']){
            redirect('peserta/tambah_judulproposal');
            /*if($data['getjoin']){
                redirect('peserta/tambah_judulproposal');

            }else{
                redirect('peserta/tambah_judulproposal');

            }*/
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_proposal', $data);
            $this->load->view('templates_peserta/footer');
        }
        //kalo udh ada data pake redirect ke private function buat ngecek udh finalisasi ato belom?????????????????
        
    }

    public function tambah_judulproposal(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Tambah Judul Proposal';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getjudul'] = $this->peserta_model->getJudul($id_user)->row_array();
        $data['tema'] = $this->peserta_model->getTema()->result_array();

        $this->form_validation->set_rules('judul_proposal','Judul','required|trim');
        $this->form_validation->set_rules('tema_proposal','Tema','required|trim');
      
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_judulproposal', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $this->peserta_model->tambah_judulproposal();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/'.$id_proposal,$data);
        }
      
    }

    public function edit_judulproposal(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Edit Judul Proposal';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getjudul'] = $this->peserta_model->getJudul($id_user)->row_array();

            $judul_proposal    =strtoupper($this->input->post('judul_proposal'));
            $date_updated      =$this->input->post('date_updated');
            

            $data=array(
                'judul_proposal'    =>$judul_proposal,
                'date_updated'      =>date("Y-m-d"),
                
            );

            $where=array(
                'id_user'=>$id_user,
                
            );
        
        
            $this->peserta_model->update_data($where,$data,'tb_master_proposal');
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/', $data);
        
      
    }

    public function index_startup($id_proposal){
        $id_user=$this->session->userdata('id_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title']='SI-RBTI Startup';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getstartup'] = $this->peserta_model->getstartup($id_user)->row_array();
        
        if(!$data['getstartup']){
            redirect('peserta/tambah_startup');
            /*if($data['getjoin']){
                redirect('peserta/tambah_startup');

            }else{
                redirect('peserta/tambah_startup');

            }*/
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_startup', $data);
            $this->load->view('templates_peserta/footer');
        }
        //kalo udh ada data pake redirect ke private function buat ngecek udh finalisasi ato belom?????????????????
        
    }

    public function tambah_startup(){
        $id_user=$this->session->userdata('id_user');
       // $id_proposal=$this->session->userdata('id_proposal');
        $data['title']='SI-RBTI Tambah Startup';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();

        $this->form_validation->set_rules('nama_su','nama_su','required',['required'=>'Nama startup wajib diisi!']);
        $this->form_validation->set_rules('visi_su','visi_su','required',['required'=>'Visi startup wajib diisi!']);
        $this->form_validation->set_rules('misi_su','misi_su','required',['required'=>'Misi startup wajib diisi!']);
        $this->form_validation->set_rules('tagline_su','tagline_su','required',['required'=>'Tagline startup wajib diisi!']);
      
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_startup', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{

                $id_user        = $this->session->id_user;
                $id_proposal    = $this->session->id_proposal;
                $nama_su        = strtoupper($this->input->post('nama_su'));
                $visi_su        =$this->input->post('visi_su');
                $misi_su        =$this->input->post('misi_su');
                $struktur_su    =$_FILES['struktur_su']['name'];
                    if($struktur_su!=''){
                        $config['overwrite']        = TRUE;
                        $config['upload_path']      ='./assets/files';
                        $config['allowed_types']    ='jpg|jpeg|png|tiff';
                        $config['max_size']         = 2073; 
                        $config['file_name'] = 'Struktur-'.time();
                        $this->load->library('upload',$config);
                        if(!$this->upload->do_upload('struktur_su')){
                            echo "photo gagal diupload!";
                        }else{
                            $struktur_su=$this->upload->data('file_name');
                        }
                    }
                
                $logo_su    =$_FILES['logo_su']['name'];
                    if($logo_su!=''){
                        $config['upload_path']      ='./assets/files';
                        $config['allowed_types']    ='jpg|jpeg|png|tiff';
                        $config['max_size']         = 2073; 
                        $config['file_name']        = 'logo-'.time();
                        $this->load->library('upload',$config);
                        if(!$this->upload->do_upload('logo_su')){
                            echo "photo gagal diupload!";
                        }else{
                            $logo_su=$this->upload->data('file_name');
                        }}
 
                $tagline_su =strtoupper($this->input->post('tagline_su'));
                $date_added = $this->input->post('date_added');
                $finalisasi = $this->input->post('finalisasi');
     

                $data=array(
                'id_user'    =>$id_user,
                'id_proposal' =>$id_proposal,
                'nama_su'    =>$nama_su,
                'visi_su'    =>$visi_su,
                'misi_su'    =>$misi_su,
                'struktur_su'=>$struktur_su,
                'logo_su'    =>$logo_su,
                'tagline_su' =>$tagline_su,
                'date_added' => date("Y-m-d"),
                'finalisasi' => 'Belum Finalisasi',

                );

            $this->peserta_model->tambah_startup($data);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/'.$id_proposal,$data);
        }
      
    }

    public function edit_startup(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Startup';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getstartup'] = $this->peserta_model->getstartup($id_user)->row_array();

        $this->form_validation->set_rules('nama_su','nama_su','required',['required'=>'Nama startup wajib diisi!']);
        $this->form_validation->set_rules('visi_su','visi_su','required',['required'=>'Visi startup wajib diisi!']);
        $this->form_validation->set_rules('misi_su','misi_su','required',['required'=>'Misi startup wajib diisi!']);
        $this->form_validation->set_rules('tagline_su','tagline_su','required',['required'=>'Tagline startup wajib diisi!']);
      

        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_startup', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
                $id_proposal    = $this->session->id_proposal;
                $nama_su        = strtoupper($this->input->post('nama_su'));
                $visi_su        =$this->input->post('visi_su');
                $misi_su        =$this->input->post('misi_su');
                $struktur_su    =$_FILES['struktur_su']['name'];
                    if($struktur_su!=''){
                        $config['overwrite']        = TRUE;
                        $config['upload_path']      ='./assets/files';
                        $config['allowed_types']    ='jpg|jpeg|png|tiff';
                        $config['max_size']         = 2073; 
                        $config['file_name'] = 'Struktur-'.time();
                        $this->load->library('upload',$config);
                        if(!$this->upload->do_upload('struktur_su')){
                            echo "photo gagal diupload!";
                        }else{
                           
                            $struktur_su=$this->upload->data('file_name');
                        }
                    }
                
                $logo_su    =$_FILES['logo_su']['name'];
                    if($logo_su!=''){
                        $config['upload_path']      ='./assets/files';
                        $config['allowed_types']    ='jpg|jpeg|png|tiff';
                        $config['max_size']         = 2073; 
                        $this->load->library('upload',$config);
                        if(!$this->upload->do_upload('logo_su')){
                            echo "photo gagal diupload!";
                        }else{
                            $logo_su=$this->upload->data('file_name');
                        }}

                $tagline_su   =strtoupper($this->input->post('tagline_su'));
                $date_updated = $this->input->post('date_updated');
     

                $data=array(
                'nama_su'    =>$nama_su,
                'visi_su'    =>$visi_su,
                'misi_su'    =>$misi_su,
                'struktur_su'=>$struktur_su,
                'logo_su'    =>$logo_su,
                'tagline_su' =>$tagline_su,
                'date_updated'=>date("Y-m-d"),

        );

        $where=array(
            'id_user'=>$id_user,
         
            
        );

        $this->peserta_model->update_data($where,$data,'tb_start_up');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('peserta/index_proposal/',$data);
        }
    }

    public function index_biodatatim($id_proposal){
        $id_user=$this->session->userdata('id_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title']='SI-RBTI Biodata Tim';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getbiodatatim'] = $this->peserta_model->getbiodatatim($id_user)->row_array();
        
        if(!$data['getbiodatatim']){
            redirect('peserta/tambah_biodatatim');
    
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_biodatatim', $data);
            $this->load->view('templates_peserta/footer');
        }
    }

    public function tambah_biodatatim(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Tambah Biodata Tim';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();

        $this->form_validation->set_rules('nama_hustler','nama_hustler','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('alamat_hustler','alamat_hustler','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('telp_hustler','telp_hustler','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('email_hustler','email_hustler','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tugas_hustler','tugas_hustler','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('nama_hipster','nama_hipster','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('alamat_hipster','alamat_hipster','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('telp_hipster','telp_hipster','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('email_hipster','email_hipster','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tugas_hipster','tugas_hipster','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('nama_hacker','nama_hacker','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('alamat_hacker','alamat_hacker','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('telp_hacker','telp_hacker','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('email_hacker','email_hacker','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tugas_hacker','tugas_hacker','required',['required'=>'wajib diisi!']);
      
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_biodatatim', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $this->peserta_model->tambah_biodatatim();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/'.$id_proposal,$data);
        }
      
    }

    public function edit_biodatatim(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Biodata Tim';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getbiodatatim'] = $this->peserta_model->getbiodatatim($id_user)->row_array();

        $this->form_validation->set_rules('nama_hustler','nama_hustler','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('alamat_hustler','alamat_hustler','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('telp_hustler','telp_hustler','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('email_hustler','email_hustler','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tugas_hustler','tugas_hustler','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('nama_hipster','nama_hipster','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('alamat_hipster','alamat_hipster','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('telp_hipster','telp_hipster','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('email_hipster','email_hipster','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tugas_hipster','tugas_hipster','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('nama_hacker','nama_hacker','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('alamat_hacker','alamat_hacker','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('telp_hacker','telp_hacker','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('email_hacker','email_hacker','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tugas_hacker','tugas_hacker','required',['required'=>'wajib diisi!']);


        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_biodatatim', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $id_proposal        = $this->session->id_proposal;
            $nama_hustler    = strtoupper($this->input->post('nama_hustler'));
            $alamat_hustler  =$this->input->post('alamat_hustler');
            $telp_hustler    =$this->input->post('telp_hustler');
            $email_hustler   =$this->input->post('email_hustler');
            $tugas_hustler  =$this->input->post('tugas_hustler');
            $nama_hipster    = strtoupper($this->input->post('nama_hipster'));
            $alamat_hipster  =$this->input->post('alamat_hipster');
            $telp_hipster    =$this->input->post('telp_hipster');
            $email_hipster   =$this->input->post('email_hipster');
            $tugas_hipster  =$this->input->post('tugas_hipster');
            $nama_hacker    = strtoupper($this->input->post('nama_hacker'));
            $alamat_hacker  =$this->input->post('alamat_hacker');
            $telp_hacker    =$this->input->post('telp_hacker');
            $email_hacker   =$this->input->post('email_hacker');
            $tugas_hacker  =$this->input->post('tugas_hacker');
            $date_updated  =$this->input->post('date_updated');


       

        $data=array(
                'nama_hustler'      =>$nama_hustler,
                'alamat_hustler'    =>$alamat_hustler,
                'telp_hustler'      =>$telp_hustler,
                'email_hustler'     =>$email_hustler,
                'tugas_hustler'     =>$tugas_hustler,
                'nama_hipster'      =>$nama_hipster,
                'alamat_hipster'    =>$alamat_hipster,
                'telp_hipster'      =>$telp_hipster,
                'email_hipster'     =>$email_hipster,
                'tugas_hipster'     =>$tugas_hipster,
                'nama_hacker'      =>$nama_hacker,
                'alamat_hacker'    =>$alamat_hacker,
                'telp_hacker'      =>$telp_hacker,
                'email_hacker'     =>$email_hacker,
                'tugas_hacker'     =>$tugas_hacker,
                'date_updated'     =>$date_updated,

        );

        $where=array(
            'id_user'=>$id_user,
            
        );

        $this->peserta_model->update_data($where,$data,'tb_biodatatim');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('peserta/index_proposal/',$data);
        }
    }

    public function index_reviewproduk($id_proposal){
        $id_user=$this->session->userdata('id_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title']='SI-RBTI Review Produk';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getreviewproduk'] = $this->peserta_model->getReviewproduk($id_user)->row_array();
        
        if(!$data['getreviewproduk']){
            redirect('peserta/tambah_reviewproduk');
    
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_reviewproduk', $data);
            $this->load->view('templates_peserta/footer');
        }
    }

    public function tambah_reviewproduk(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Tambah Review Produk';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
       
        $this->form_validation->set_rules('nama_solusi','nama_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('deskripsi_solusi','deskripsi_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tahun_buat_solusi','tahun_buat_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('link_vid_solusi','link_vid_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('link_prod_solusi','link_prod_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('teknologi_solusi','teknologi_solusi','required',['required'=>'wajib diisi!']);
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_reviewproduk', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
                $id_user                     = $this->session->id_user;
                $id_proposal                 = $this->session->id_proposal;
                $nama_solusi                 = strtoupper($this->input->post('nama_solusi'));
                $deskripsi_solusi            =$this->input->post('deskripsi_solusi');
                $logo_solusi                 =$_FILES['logo_solusi']['name'];
                        if($logo_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('logo_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $logo_solusi=$this->upload->data('file_name');
                            }
                        }

                
                $prev_ui1_solusi            =$_FILES['prev_ui1_solusi']['name'];
                        if($prev_ui1_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui1_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui1_solusi=$this->upload->data('file_name');
                            }
                        }
                
                $prev_ui2_solusi            =$_FILES['prev_ui2_solusi']['name'];
                        if($prev_ui2_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui2_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui2_solusi=$this->upload->data('file_name');
                            }
                        }

                $prev_ui3_solusi            =$_FILES['prev_ui3_solusi']['name'];
                     if($prev_ui3_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui3_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui3_solusi=$this->upload->data('file_name');
                            }
                        }
                
                $prev_ui4_solusi            =$_FILES['prev_ui4_solusi']['name'];
                        if($prev_ui4_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui4_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui4_solusi=$this->upload->data('file_name');
                            }
                        }

                $tahun_buat_solusi       =$this->input->post('tahun_buat_solusi');
                $link_vid_solusi         =$this->input->post('link_vid_solusi');
                $link_prod_solusi        =$this->input->post('link_prod_solusi');
                $teknologi_solusi        =$this->input->post('teknologi_solusi');
                $date_added              =$this->input->post('date_added');
                $finalisasi              =$this->input->post('finalisasi');


                $data=array(
                'id_user'               =>$id_user,
                'id_proposal'           =>$id_proposal,
                'nama_solusi'           =>$nama_solusi,
                'deskripsi_solusi'      =>$deskripsi_solusi,
                'logo_solusi'           =>$logo_solusi,
                'prev_ui1_solusi'       =>$prev_ui1_solusi,
                'prev_ui2_solusi'       =>$prev_ui2_solusi,
                'prev_ui3_solusi'       =>$prev_ui3_solusi,
                'prev_ui4_solusi'       =>$prev_ui4_solusi,
                'tahun_buat_solusi'     =>$tahun_buat_solusi,
                'link_vid_solusi'       =>$link_vid_solusi,
                'link_prod_solusi'      =>$link_prod_solusi,
                'teknologi_solusi'      =>$teknologi_solusi,
                'date_added'            =>date("Y-m-d"),
                'finalisasi'            =>'Belum Finalisasi',
                

            );
            
            $this->peserta_model->tambah_reviewproduk($data);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/',$data);
        }
    }

    public function edit_reviewproduk(){
        $id_user=$this->session->userdata('id_user');
        $id_proposal=$this->session->userdata('id_proposal');
        $data['title']='SI-RBTI Review Produk';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getreviewproduk'] = $this->peserta_model->getReviewproduk($id_user)->row_array();

        $this->form_validation->set_rules('nama_solusi','nama_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('deskripsi_solusi','deskripsi_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tahun_buat_solusi','tahun_buat_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('link_vid_solusi','link_vid_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('link_prod_solusi','link_prod_solusi','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('teknologi_solusi','teknologi_solusi','required',['required'=>'wajib diisi!']);
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_reviewproduk', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
                $nama_solusi                 = strtoupper($this->input->post('nama_solusi'));
                $deskripsi_solusi            =$this->input->post('deskripsi_solusi');
                $logo_solusi                 =$_FILES['logo_solusi']['name'];
                        if($logo_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('logo_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $logo_solusi=$this->upload->data('file_name');
                            }
                        }

                
                $prev_ui1_solusi            =$_FILES['prev_ui1_solusi']['name'];
                        if($prev_ui1_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui1_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui1_solusi=$this->upload->data('file_name');
                            }
                        }
                
                $prev_ui2_solusi            =$_FILES['prev_ui2_solusi']['name'];
                        if($prev_ui2_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui2_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui2_solusi=$this->upload->data('file_name');
                            }
                        }

                $prev_ui3_solusi            =$_FILES['prev_ui3_solusi']['name'];
                     if($prev_ui3_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui3_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui3_solusi=$this->upload->data('file_name');
                            }
                        }
                
                $prev_ui4_solusi            =$_FILES['prev_ui4_solusi']['name'];
                        if($prev_ui4_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui4_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui4_solusi=$this->upload->data('file_name');
                            }
                        }

                $tahun_buat_solusi       =$this->input->post('tahun_buat_solusi');
                $link_vid_solusi         =$this->input->post('link_vid_solusi');
                $link_prod_solusi        =$this->input->post('link_prod_solusi');
                $teknologi_solusi        =$this->input->post('teknologi_solusi');
                $date_updated              =$this->input->post('date_updated');


                $data=array(
                'nama_solusi'           =>$nama_solusi,
                'deskripsi_solusi'      =>$deskripsi_solusi,
                'logo_solusi'           =>$logo_solusi,
                'prev_ui1_solusi'       =>$prev_ui1_solusi,
                'prev_ui2_solusi'       =>$prev_ui2_solusi,
                'prev_ui3_solusi'       =>$prev_ui3_solusi,
                'prev_ui4_solusi'       =>$prev_ui4_solusi,
                'tahun_buat_solusi'     =>$tahun_buat_solusi,
                'link_vid_solusi'       =>$link_vid_solusi,
                'link_prod_solusi'      =>$link_prod_solusi,
                'teknologi_solusi'      =>$teknologi_solusi,
                'date_updated'          =>$date_updated,
                
                );

                $where=array(
                    'id_user'=>$id_user,
                  
                );

        $this->peserta_model->update_data($where,$data,'tb_solusi');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('peserta/index_proposal/'.$id_proposal, $data);
        }
    }

    public function index_paperpitching($id_proposal){
        $id_user=$this->session->userdata('id_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title']='SI-RBTI Paper Pitching';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getpaperpitching'] = $this->peserta_model->getPaperpitching($id_user)->row_array();
        
        if(!$data['getpaperpitching']){
            redirect('peserta/tambah_paperpitching');
    
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_paperpitching', $data);
            $this->load->view('templates_peserta/footer');
        }
    }

    public function tambah_paperpitching(){
        $id_user=$this->session->userdata('id_user');
        $uname_user=$this->session->userdata('uname_user');
        $data['title']='SI-RBTI Tambah Paper Pitching';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
       
        $this->form_validation->set_rules('latar_belakang_pp','latar_belakang_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('permasalahan_pp','permasalahan_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('solusi_pp','solusi_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('progres_pp','progres_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kompetitor_pp','kompetitor_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kompetitor2_pp','kompetitor2_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('target_pp','target_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('data_pp','data_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('proses_bisnis_pp','proses_bisnis_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tahapan_pp','tahapan_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kelebihan_pp','kelebihan_pp','required',['required'=>'wajib diisi!']);

        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_paperpitching', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
                $id_user              = $this->session->id_user;
                $id_proposal          = $this->session->id_proposal;
                $latar_belakang_pp    =$this->input->post('latar_belakang_pp');
                $permasalahan_pp      =$this->input->post('permasalahan_pp');
                $solusi_pp            =$this->input->post('solusi_pp');
                $progres_pp           =$this->input->post('progres_pp');
                $kompetitor_pp        =$this->input->post('kompetitor_pp');
                $kompetitor2_pp       =$this->input->post('kompetitor2_pp');
                $target_pp            =$this->input->post('target_pp');
                $data_pp              =$this->input->post('data_pp');
                $proses_bisnis_pp     =$this->input->post('proses_bisnis_pp');
                $proses_bisnis2_pp    =$_FILES['proses_bisnis2_pp']['name'];
                if($proses_bisnis2_pp!=''){
                    $config['overwrite']        = TRUE;
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                    $config['max_size']         = 2073; 
                    $config['file_name'] = 'paperpitching-'.time();
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('proses_bisnis2_pp')){
                        echo "photo gagal diupload!";
                    }else{
                        $proses_bisnis2_pp=$this->upload->data('file_name');
                    }
                }
                $tahapan_pp           =$this->input->post('tahapan_pp');
                $kelebihan_pp         =$this->input->post('kelebihan_pp');
                $date_added           =$this->input->post('date_added');
                $finalisasi           =$this->input->post('finalisasi');


                $data=array(
                'id_user'               =>$id_user,
                'id_proposal'           =>$id_proposal,
                'latar_belakang_pp'     =>$latar_belakang_pp,
                'permasalahan_pp'       =>$permasalahan_pp,
                'solusi_pp'             =>$solusi_pp,
                'progres_pp'            =>$progres_pp,
                'kompetitor_pp'         =>$kompetitor_pp,
                'kompetitor2_pp'        =>$kompetitor2_pp,
                'target_pp'             =>$target_pp,
                'data_pp'               =>$data_pp,
                'proses_bisnis_pp'      =>$proses_bisnis_pp,
                'proses_bisnis2_pp'     =>$proses_bisnis2_pp,
                'tahapan_pp'            =>$tahapan_pp,
                'kelebihan_pp'          =>$kelebihan_pp,
                'date_added'            =>date("Y-m-d"),
                'finalisasi'            =>'Belum Finalisasi',
                

            );
            
            $this->peserta_model->tambah_paperpitching($data);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/',$data);
        }
    } 

    public function edit_paperpitching(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Paper Pitching';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getpaperpitching'] = $this->peserta_model->getPaperpitching($id_user)->row_array();

        $this->form_validation->set_rules('latar_belakang_pp','latar_belakang_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('permasalahan_pp','permasalahan_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('solusi_pp','solusi_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('progres_pp','progres_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kompetitor_pp','kompetitor_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kompetitor2_pp','kompetitor2_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('target_pp','target_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('data_pp','data_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('proses_bisnis_pp','proses_bisnis_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tahapan_pp','tahapan_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kelebihan_pp','kelebihan_pp','required',['required'=>'wajib diisi!']);

        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_paperpitching', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $latar_belakang_pp    =$this->input->post('latar_belakang_pp');
            $permasalahan_pp      =$this->input->post('permasalahan_pp');
            $solusi_pp            =$this->input->post('solusi_pp');
            $progres_pp           =$this->input->post('progres_pp');
            $kompetitor_pp        =$this->input->post('kompetitor_pp');
            $kompetitor2_pp       =$this->input->post('kompetitor2_pp');
            $target_pp            =$this->input->post('target_pp');
            $data_pp              =$this->input->post('data_pp');
            $proses_bisnis_pp     =$this->input->post('proses_bisnis_pp');
            $proses_bisnis2_pp    =$_FILES['proses_bisnis2_pp']['name'];
            if($proses_bisnis2_pp!=''){
                $config['overwrite']        = TRUE;
                $config['upload_path']      ='./assets/files';
                $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                $config['max_size']         = 2073; 
                $config['file_name'] = 'paperpitching-'.time();
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('proses_bisnis2_pp')){
                    echo "photo gagal diupload!";
                }else{
                    $proses_bisnis2_pp=$this->upload->data('file_name');
                }
            }
            $tahapan_pp           =$this->input->post('tahapan_pp');
            $kelebihan_pp         =$this->input->post('kelebihan_pp');
            $date_updated           =$this->input->post('date_updated');


            $data=array(
            'id_user'               =>$id_user,
            'latar_belakang_pp'     =>$latar_belakang_pp,
            'permasalahan_pp'       =>$permasalahan_pp,
            'solusi_pp'             =>$solusi_pp,
            'progres_pp'            =>$progres_pp,
            'kompetitor_pp'         =>$kompetitor_pp,
            'kompetitor2_pp'        =>$kompetitor2_pp,
            'target_pp'             =>$target_pp,
            'data_pp'               =>$data_pp,
            'proses_bisnis_pp'      =>$proses_bisnis_pp,
            'proses_bisnis2_pp'     =>$proses_bisnis2_pp,
            'tahapan_pp'            =>$tahapan_pp,
            'kelebihan_pp'          =>$kelebihan_pp,
            'date_updated'          =>date("Y-m-d"),
        );

        $where=array(
            'id_user'=>$id_user,
        );

        $this->peserta_model->update_data($where,$data,'tb_paper_pitching');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('peserta/index_proposal/', $data);
        }
    }

    public function index_bisnisplan($id_proposal){
        $id_user=$this->session->userdata('id_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title']='SI-RBTI Bisnis Plan';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getbisnisplan'] = $this->peserta_model->getbisnisplan($id_user)->row_array();
        
        if(!$data['getbisnisplan']){
            redirect('peserta/tambah_bisnisplan');
    
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_bisnisplan', $data);
            $this->load->view('templates_peserta/footer');
        }
    }

    public function tambah_bisnisplan(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Tambah Bisnis Plan';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();

        $this->form_validation->set_rules('cust_plan','cust_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('value_plan','value_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('channels_plan','channels_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('relation_plan','relation_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_act_plan','key_act_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_res_plan','key_res_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_partner_plan','key_partner_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('cost_plan','cost_plan','required',['required|trim'=>'wajib diisi!']);
        $this->form_validation->set_rules('revenue_plan','revenue_plan','required|trim',['required'=>'wajib diisi!']);
      
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_bisnisplan', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $this->peserta_model->tambah_bisnisplan();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/'.$id_proposal,$data);
        }
      
    }

    public function edit_bisnisplan(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Bisnis Plan';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getbisnisplan'] = $this->peserta_model->getbisnisplan($id_user)->row_array();

        $this->form_validation->set_rules('cust_plan','cust_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('value_plan','value_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('channels_plan','channels_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('relation_plan','relation_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_act_plan','key_act_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_res_plan','key_res_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_partner_plan','key_partner_plan','required|trim',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('cost_plan','cost_plan','required',['required|trim'=>'wajib diisi!']);
        $this->form_validation->set_rules('revenue_plan','revenue_plan','required|trim',['required'=>'wajib diisi!']);


        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_bisnisplan', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $id_user          = $this->session->id_user;
            $id_proposal          = $this->session->id_proposal;
            $cust_plan        =$this->input->post('cust_plan');
            $value_plan       =$this->input->post('value_plan');
            $channels_plan    =$this->input->post('channels_plan');
            $relation_plan    =$this->input->post('relation_plan');
            $key_act_plan     =$this->input->post('key_act_plan');
            $key_res_plan     =$this->input->post('key_res_plan');
            $key_partner_plan =$this->input->post('key_partner_plan');
            $cost_plan        =$this->input->post('cost_plan');
            $revenue_plan     =$this->input->post('revenue_plan');
            $date_updated     =$this->input->post('date_updated');

        $data=array(
           
            'cust_plan'        =>$cust_plan,
            'value_plan'       =>$value_plan,
            'channels_plan'    =>$channels_plan,
            'relation_plan'    =>$relation_plan,
            'key_act_plan '    =>$key_act_plan ,
            'key_res_plan'     =>$key_res_plan,
            'key_partner_plan' =>$key_partner_plan,
            'cost_plan'        =>$cost_plan,
            'revenue_plan'     =>$revenue_plan,
            'date_updated'     =>date("Y-m-d"),

        );

        $where=array(
            'id_user'=>$id_user,
           
        );

        $this->peserta_model->update_data($where,$data,'tb_plan');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('peserta/index_proposal/', $data);
        }
    }

    public function index_pitchdesk($id_proposal){
        $id_user=$this->session->userdata('id_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title']='SI-RBTI Pitch Desk';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getpitchdesk'] = $this->peserta_model->getPitchdesk($id_user)->row_array();
        
        if(!$data['getpitchdesk']){
            redirect('peserta/tambah_pitchdesk');
    
        }else{
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_pitchdesk', $data);
            $this->load->view('templates_peserta/footer');
        }
    }

    public function tambah_pitchdesk(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Tambah Pitch Desk';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();

        $this->form_validation->set_rules('uraian_singkat','uraian_singkat','required|trim',['required'=>'wajib diisi!']);
      
        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/tambah_pitchdesk', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $id_user              = $this->session->id_user;
            $id_proposal          = $this->session->id_proposal;
            $uraian_singkat       =$this->input->post('uraian_singkat');
            $file_pitchd          =$_FILES['file_pitchd']['name'];
            $config['file_name'] = 'presentasi-'.time();
            if($file_pitchd!=''){
                $config['overwrite']        = TRUE;
                $config['upload_path']      ='./assets/files';
                $config['allowed_types']    ='pdf';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('file_pitchd')){
                    echo "gagal diupload!";
                }else{
                    $file_pitchd=$this->upload->data('file_name');
                }
            }
            $date_added           =$this->input->post('date_added');
            $finalisasi           =$this->input->post('finalisasi');


            $data=array(
            'id_user'            =>$id_user,
            'id_proposal'        =>$id_proposal,
            'uraian_singkat'     =>$uraian_singkat,
            'file_pitchd'        =>$file_pitchd,
            'date_added'         =>date("Y-m-d"),
            'finalisasi'         =>'Belum Finalisasi',

             );
        
            $this->peserta_model->tambah_pitchdesk($data);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_proposal/'.$id_proposal, $data);
        }
      
    }

    public function edit_pitchdesk(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Pitch Desk';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getpitchdesk'] = $this->peserta_model->getPitchdesk($id_user)->row_array();

        $this->form_validation->set_rules('uraian_singkat','uraian_singkat','required|trim',['required'=>'wajib diisi!']);
      

        if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_pitchdesk', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $id_user              = $this->session->id_user;
            $uraian_singkat       =$this->input->post('uraian_singkat');
            $file_pitchd          =$_FILES['file_pitchd']['name'];
            if($file_pitchd!=''){
                $config['overwrite']        = TRUE;
                $config['upload_path']      ='./assets/files';
                $config['allowed_types']    ='pdf';
                $config['file_name'] = 'presentasi-'.time();
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('file_pitchd')){
                    echo "gagal diupload!";
                }else{
                    $file_pitchd=$this->upload->data('file_name');
                }
            }
            $date_updated           =$this->input->post('date_updated');


            $data=array(
            'id_user'            =>$id_user,
            'uraian_singkat'     =>$uraian_singkat,
            'file_pitchd'        =>$file_pitchd,
            'date_updated'       =>date("Y-m-d"),

             );

        $where=array(
            'id_user'=>$id_user,
        );

        $this->peserta_model->update_data($where,$data,'tb_pitchd');
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('peserta/index_proposal/', $data);
        }
    }

    public function index_finalisasi(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Finalisasi';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
        $data['getjudul'] = $this->peserta_model->getJudul($id_user)->row_array();
     
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index_finalisasi', $data);
            $this->load->view('templates_peserta/footer');
    }

    public function finalisasi(){
        $id_user=$this->session->userdata('id_user');
        $data['title']='SI-RBTI Finalisasi';
        $data['user'] = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['getjoin'] = $this->peserta_model->getIdVerif2($id_user)->row_array();
    
        $this->peserta_model->finalisasi($id_proposal);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil di Finalisasi! </div>');
        redirect('peserta/index_proposal');

      /*  if($this->form_validation->run()==false){
            $this->load->view('templates_peserta/header', $data);
            $this->load->view('templates_peserta/sidebar', $data);
            $this->load->view('templates_peserta/topbar', $data);
            $this->load->view('peserta/index', $data);
            $this->load->view('templates_peserta/footer');
            
        }else{
            $this->peserta_model->finalisasi();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Difinalisasi <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('peserta/index_finalisasi');
        }*/
      
    }





}

?>