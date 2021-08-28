<?php

class Startup extends CI_Controller {

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
        $data['title'] = "Startup";
        // $id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['startup'] = $this->db->query("SELECT * FROM tb_start_up WHERE id_proposal='$id_proposal'")->result();
        // echo($this->session->id_proposal);
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view("mahasiswa/startup",$data);
        $this->load->view('templates_mahasiswa/footer');
        
    }

    public function input()
    {
        $this->load->library('session');
        // echo($this->session->id_proposal);
        
        $data=array(
            'id_start_up'     =>set_value('id_start_up'),
            'id_proposal'     =>set_value('id_proposal'),
            'nim_start_up'     =>set_value('nim_start_up'),
            'tanggal_submit_su'     =>set_value('tanggal_submit_su'),
            'nama_start_up'    =>set_value('nama_start_up'),
            'visi_start_up'    =>set_value('visi_start_up'),
            'misi_start_up'    =>set_value('misi_start_up'),
            'struktur_start_up'=>set_value('struktur_start_up'),
            'logo_start_up'    =>set_value('logo_start_up'),
            'tagline_start_up' =>set_value('tagline_start_up'),

        );
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/startup_form', $data );
        $this->load->view('templates_mahasiswa/footer');
        
    }

    public function input_aksi(){
        $this->_rules();
        
        
        if($this->form_validation->run()==FALSE){
            $this->input();
             
        }else{
                $id_proposal      = $this->session->id_proposal;
                $nim_start_up     = $this->session->uname_user;
                $tanggal_submit_su    =$this->input->post('tanggal_submit_su');
                $nama_start_up    = strtoupper($this->input->post('nama_start_up'));
                $visi_start_up    =$this->input->post('visi_start_up');
                $misi_start_up    =$this->input->post('misi_start_up');
                $struktur_start_up=$_FILES['struktur_start_up']['name'];
                if($struktur_start_up!=''){
                    $config['overwrite']        = TRUE;
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('struktur_start_up')){
                        echo "photo gagal diupload!";
                    }else{
                        $struktur_start_up=$this->upload->data('file_name');
                    }
                }
        
                
                $logo_start_up    =$_FILES['logo_start_up']['name'];
                if($logo_start_up!=''){
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('logo_start_up')){
                        echo "photo gagal diupload!";
                    }else{
                        $logo_start_up=$this->upload->data('file_name');
                    }}
                $tagline_start_up =strtoupper($this->input->post('tagline_start_up'));

                
            
            
                $data=array(

                'id_proposal'      =>$id_proposal,
                'nim_start_up'     =>$nim_start_up,
                'tanggal_submit_su'     =>$tanggal_submit_su,
                'nama_start_up'    =>$nama_start_up,
                'visi_start_up'    =>$visi_start_up,
                'misi_start_up'    =>$misi_start_up,
                'struktur_start_up'=>$struktur_start_up,
                'logo_start_up'    =>$logo_start_up,
                'tagline_start_up' =>$tagline_start_up,

                );

            
            $this->load->model('Startup_model');
            $this->Startup_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Startup Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect("mahasiswa/startup/index/$id_proposal");

        }
    }
  
            
    public function _rules(){
        $this->form_validation->set_rules('nama_start_up','nama_start_up','required',['required'=>'Nama startup wajib diisi!']);
        $this->form_validation->set_rules('visi_start_up','visi_start_up','required',['required'=>'Visi startup wajib diisi!']);
        $this->form_validation->set_rules('misi_start_up','misi_start_up','required',['required'=>'Misi startup wajib diisi!']);
        $this->form_validation->set_rules('tagline_start_up','tagline_start_up','required',['required'=>'Tagline startup wajib diisi!']);
    }

    public function update($id_start_up){
        $where=array('id_start_up'=>$id_start_up);
        $this->load->model('Startup_model');
        $data['startup']=$this->Startup_model->edit_data($where,'tb_start_up')->result();
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/startup_update', $data );
        $this->load->view('templates_mahasiswa/footer');

    }

    public function update_aksi(){
        $id_proposal      = $this->session->id_proposal;
        $id_start_up=$this->input->post('id_start_up');
        $nama_start_up=$this->input->post('nama_start_up');
        $visi_start_up=$this->input->post('visi_start_up');
        $misi_start_up=$this->input->post('misi_start_up');
        $struktur_start_up=$_FILES['struktur_start_up']['name'];
        if($struktur_start_up!=''){
            $config['overwrite']        = TRUE;
            $config['upload_path']      ='./assets/files';
            $config['allowed_types']    ='jpg|jpeg|png|tiff';
            $config['max_size']         = 2073; 
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('struktur_start_up')){
                echo "photo gagal diupload!";
            }else{
                $struktur_start_up=$this->upload->data('file_name');
            }
        }

        
        $logo_start_up    =$_FILES['logo_start_up']['name'];
        if($logo_start_up!=''){
            $config['upload_path']      ='./assets/files';
            $config['allowed_types']    ='jpg|jpeg|png|tiff';
            $config['max_size']         = 2073; 
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('logo_start_up')){
                echo "photo gagal diupload!";
            }else{
                $logo_start_up=$this->upload->data('file_name');
            }}
        $tagline_start_up =strtoupper($this->input->post('tagline_start_up'));

        

        $data=array(
            'nama_start_up'=>$nama_start_up,
            'visi_start_up'=>$visi_start_up,
            'misi_start_up'=>$misi_start_up,
            'struktur_start_up'=>$struktur_start_up,
            'logo_start_up'=>$logo_start_up,
            'tagline_start_up'=>$tagline_start_up,
        );

        $where=array(
            'id_proposal'=>$id_proposal,
            'id_start_up'=>$id_start_up
        );
        
        $this->load->model('Startup_model');
        $this->Startup_model->update_data($where,$data,'tb_start_up');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Start-Up Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect("mahasiswa/startup/index/$id_proposal");

    }

    public function delete($id_start_up){
        $where = array('id_start_up'=>$id_start_up);
        $id_proposal      = $this->session->id_proposal;
        $this->load->model('Startup_model');
        $this->Startup_model->hapus_data($where,'tb_start_up');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Mahasiswa Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect("mahasiswa/startup/index/$id_proposal");

    }





}

?>