<?php

class Eproposal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('eproposal_model');
        if($this->session->userdata('hak_akses')!='3'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }


    public function index(){
        $data['title'] = "Masterproposal";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['masterproposal'] = $this->eproposal_model->tampil_data();
        //$id= $this->session->userdata('uname_user');
        //$data['masterproposal'] = $this->db->query("SELECT * FROM tb_master_proposal WHERE nim_mhs='$id'")->result();


        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/eproposal', $data);
        $this->load->view('templates_mahasiswa/footer');
    }
 
    public function input()
    {
        $data['halaman'] = "Halaman Tambah Judul Proposal";
        $data['form'] = "Form Tambah";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['tema'] = $this->eproposal_model->getTema()->result_array();

        
        $this->form_validation->set_rules('judul_proposal', 'judul_proposal', 'required');
         
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_mahasiswa/header_proposal');
            $this->load->view('mahasiswa/eproposal_form', $data );
            $this->load->view('templates_mahasiswa/footer');
        } else {
            $this->eproposal_model->input_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Judul Proposal berhasil ditambahkan </div>');
            redirect('mahasiswa/eproposal');
        }
    }

    
 
    /*public function input()
    {
        $this->load->library('session');
        
        $data=array(
            'id_proposal'     =>set_value('id_proposal'),
            'nim_mhs'     =>set_value('nim_mhs'),
            'judul_proposal'    =>set_value('judul_proposal'),
            'tema_proposal'    =>set_value('tema_proposal'),
           

        );
        $data['tema'] = $this->eproposal_model->getTema()->result_array();
        
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/eproposal_form', $data );
        $this->load->view('templates_mahasiswa/footer');
        
    }

    public function input_aksi(){
        $this->_rules();
                                
       
        if($this->form_validation->run()==FALSE){
            $this->input();
            
        }else{
            
            $nim_mhs     = $this->session->uname_user;
            $judul_proposal    = strtoupper($this->input->post('judul_proposal'));
            $tema_proposal        =$this->input->post('tema_proposal');
                
            $data=array(
                'nim_mhs'     =>$nim_mhs,
                'judul_proposal'    =>$judul_proposal,
                'tema_proposal'    =>$tema_proposal,
            );

            
            $this->load->model('eproposal_model');
            $this->eproposal_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Judul Proposal Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('mahasiswa/eproposal');

        }
    }
  
            
    public function _rules(){
        $this->form_validation->set_rules('judul_proposal','judul_proposal','required',['required'=>'Judul proposal wajib diisi!']);
         }
*/



    
    public function delete($id_proposal){
            $where = array('id_proposal'=>$id_proposal);
            $this->load->model('Eproposal_model');
            $this->Eproposal_model->hapus_data($where,'tb_master_proposal');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('mahasiswa/eproposal');
    
        }
    
}

?>