<?php

class Biodatatim extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('hak_akses')!='3'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index($id_proposal){
        $data['title'] = "Biodata Tim";
        //$id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['biodatatim'] = $this->db->query("SELECT * FROM tb_biodatatim WHERE  id_proposal='$id_proposal'")->result();

 

        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/biodatatim', $data);
        $this->load->view('templates_mahasiswa/footer');
    }

   


    public function input()
    {
        $this->load->library('session');
        
        $data=array(
            'id_biodatatim'     =>set_value('id_biodatatim'),
            'id_proposal'     =>set_value('id_proposal'),
            'nim_biodata'      =>set_value('nim_biodata'),
            'tanggal_submit_biodata'      =>set_value('tanggal_submit_biodata'),
            'nama_hustler'     =>set_value('nama_hustler' ),
            'alamat_hustler'   =>set_value('alamat_hustler'),
            'telp_hustler'     =>set_value('telp_hustler'),
            'email_hustler'    =>set_value('email_hustler'),
            'tugas_hustler'    =>set_value('tugas_hustler'),
            'nama_hipster'     =>set_value('nama_hipster'),
            'alamat_hipster'   =>set_value('alamat_hipster'),
            'telp_hipster'     =>set_value('telp_hipster'),
            'email_hipster'    =>set_value('email_hipster' ),
            'tugas_hipster'    =>set_value('tugas_hipster'),
            'nama_hacker'     =>set_value('nama_hacker'),
            'alamat_hacker'   =>set_value('alamat_hacker'),
            'telp_hacker'     =>set_value('telp_hacker'),
            'email_hacker'    =>set_value('email_hacker'),
            'tugas_hacker'    =>set_value('tugas_hacker'),
            

        );
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/biodatatim_form', $data );
        $this->load->view('templates_mahasiswa/footer');
        
    }

    public function input_aksi(){
        $this->_rules();
                                
       
        if($this->form_validation->run()==FALSE){
            $this->input();
            
        }else{
                $id_proposal      = $this->session->id_proposal;
                $nim_biodata     = $this->session->uname_user;
                $tanggal_submit_biodata  =$this->input->post('tanggal_submit_biodata');
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
                

                
            
            
                $data=array(


                'id_proposal'      =>$id_proposal,
                'nim_biodata'       =>$nim_biodata,
                'tanggal_submit_biodata'       =>$tanggal_submit_biodata,
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
                

            );

            
            $this->load->model('Biodatatim_model');
            $this->Biodatatim_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Biodata Tim Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect("mahasiswa/biodatatim/index/$id_proposal");

        }
    }
  
            
    public function _rules(){
        $this->form_validation->set_rules('nama_hustler','nama_hustler','required',['required'=>'Nama hustler wajib diisi!']);
        $this->form_validation->set_rules('alamat_hustler','alamat_hustler','required',['required'=>'Alamat hustler wajib diisi!']);
        $this->form_validation->set_rules('telp_hustler','telp_hustler','required',['required'=>'Telp hustler wajib diisi!']);
        $this->form_validation->set_rules('email_hustler','email_hustler','required',['required'=>'Email hustler wajib diisi!']);
        $this->form_validation->set_rules('tugas_hustler','tugas_hustler','required',['required'=>'Tugas hustler wajib diisi!']);
        $this->form_validation->set_rules('nama_hipster','nama_hipster','required',['required'=>'Nama hipster wajib diisi!']);
        $this->form_validation->set_rules('alamat_hipster','alamat_hipster','required',['required'=>'Alamat hipster wajib diisi!']);
        $this->form_validation->set_rules('telp_hipster','telp_hipster','required',['required'=>'Telp hipster wajib diisi!']);
        $this->form_validation->set_rules('email_hipster','email_hipster','required',['required'=>'Email hipster wajib diisi!']);
        $this->form_validation->set_rules('tugas_hipster','tugas_hipster','required',['required'=>'Tugas hipster wajib diisi!']);
        $this->form_validation->set_rules('nama_hacker','nama_hacker','required',['required'=>'Nama hacker wajib diisi!']);
        $this->form_validation->set_rules('alamat_hacker','alamat_hacker','required',['required'=>'Alamat hacker wajib diisi!']);
        $this->form_validation->set_rules('telp_hacker','telp_hacker','required',['required'=>'Telp hacker wajib diisi!']);
        $this->form_validation->set_rules('email_hacker','email_hacker','required',['required'=>'Email hacker wajib diisi!']);
        $this->form_validation->set_rules('tugas_hacker','tugas_hacker','required',['required'=>'Tugas hacker wajib diisi!']);
    
    }

    public function update($id_biodatatim){
        $where=array('id_biodatatim'=>$id_biodatatim);
        $this->load->model('Biodatatim_model');
        $data['biodatatim']=$this->Biodatatim_model->edit_data($where,'tb_biodatatim')->result();
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/biodatatim_update', $data );
        $this->load->view('templates_mahasiswa/footer');

    }

    public function update_aksi(){
        $this->_rules();
        $id_proposal      = $this->session->id_proposal;
        $id_biodatatim   =$this->input->post('id_biodatatim');
        $nim_biodata     = $this->session->uname_user;
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


       

        $data=array(
            'nim_biodata'       =>$nim_biodata,
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
        );

        $where=array(
            'id_proposal'=>$id_proposal,
            'id_biodatatim'=>$id_biodatatim
        );
        
        $this->load->model('Biodatatim_model');
        $this->Biodatatim_model->update_data($where,$data,'tb_biodatatim');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Biodata Tim Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect("mahasiswa/biodatatim/index/$id_proposal");

    }

    public function delete($id_biodatatim){
        $where = array('id_biodatatim'=>$id_biodatatim);
        $id_proposal      = $this->session->id_proposal;
        $this->load->model('Biodatatim_model');
        $this->Biodatatim_model->hapus_data($where,'tb_biodatatim');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Biodata Tim Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect("mahasiswa/biodatatim/index/$id_proposal");

    }





}

?>