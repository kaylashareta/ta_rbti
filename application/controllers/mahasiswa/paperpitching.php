<?php

class Paperpitching extends CI_Controller {

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
        $data['title'] = "Paper Pitching";
        //$id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['paperpitching'] = $this->db->query("SELECT * FROM tb_paper_pitching WHERE id_proposal='$id_proposal'")->result();

        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/paperpitching',$data);
        $this->load->view('templates_mahasiswa/footer');

       
    }

    public function input()
    {
        $this->load->library('session');
        
        $data=array(
            'id_pp'                 =>set_value('id_pp'),
            'id_proposal'           =>set_value('id_proposal'),
            'nim_pp'                =>set_value('nim_pp'),
            'tanggal_submit_pp'     =>set_value('tanggal_submit_pp'),
            'latar_belakang_pp'     =>set_value('latar_belakang_pp'),
            'solusi_pp'             =>set_value('solusi_pp'),
            'progres_pp'            =>set_value('progres_pp'),
            'kompetitor_pp'         =>set_value('kompetitor_pp'),
            'kompetitor2_pp'        =>set_value('kompetitor2_pp'),
            'target_pp'             =>set_value('target_pp'),
            'data_pp'               =>set_value('data_pp'),
            'proses_bisnis_pp'      =>set_value('proses_bisnis_pp'),
            'proses_bisnis2_pp'     =>set_value('proses_bisnis2_pp'),
            'tahapan_pp'            =>set_value('tahapan_pp'),
            'kelebihan_pp'          =>set_value('kelebihan_pp'),


        );
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/paperpitching_form', $data );
        $this->load->view('templates_mahasiswa/footer');

       
    }

    public function input_aksi(){
        $this->_rules();
                                
       
        if($this->form_validation->run()==FALSE){
            $this->input();
            
        }else{
                $id_proposal          = $this->session->id_proposal;
                $nim_pp               = $this->session->uname_user;
                $tanggal_submit_pp    =$this->input->post('tanggal_submit_pp');
                $latar_belakang_pp    =$this->input->post('latar_belakang_pp');
                $permasalahan_pp        =$this->input->post('permasalahan_pp');
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
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('proses_bisnis2_pp')){
                        echo "photo gagal diupload!";
                    }else{
                        $proses_bisnis2_pp=$this->upload->data('file_name');
                    }
                }
                $tahapan_pp           =$this->input->post('tahapan_pp');
                $kelebihan_pp         =$this->input->post('kelebihan_pp');


            
                $data=array(


                'id_proposal'      =>$id_proposal,
                'nim_pp'                =>$nim_pp,
                'tanggal_submit_pp'     =>$tanggal_submit_pp,
                'latar_belakang_pp'     =>$latar_belakang_pp,
                'permasalahan_pp'     =>$permasalahan_pp,
                'solusi_pp'         =>$solusi_pp,
                'progres_pp'         =>$progres_pp,
                'kompetitor_pp'     =>$kompetitor_pp,
                'kompetitor2_pp'         =>$kompetitor2_pp,
                'target_pp'      =>$target_pp,
                'data_pp'      =>$data_pp,
                'proses_bisnis_pp'      =>$proses_bisnis_pp,
                'proses_bisnis2_pp'      =>$proses_bisnis2_pp,
                'tahapan_pp'      =>$tahapan_pp,
                'kelebihan_pp'      =>$kelebihan_pp,




            );

        
            
            $this->load->model('Paperpitching_model');
            $this->Paperpitching_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Paper Pitching Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect("mahasiswa/paperpitching/index/$id_proposal");

        }
    }
  
            
    public function _rules(){
        $this->form_validation->set_rules('latar_belakang_pp','latar_belakang_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('solusi_pp','solusi_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('progres_pp','progres_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kompetitor_pp','kompetitor_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kompetitor2_pp','kompetitor2_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('target_pp','target_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('data_pp','data_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('proses_bisnis_pp','proses_bisnis_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('tahapan_pp','tahapan_pp','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('kelebihan_pp','kelebihan_pp','required',['required'=>'wajib diisi!']);
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
        $this->_rules();
        $id_start_up=$this->input->post('id_start_up');
        $nama_start_up=$this->input->post('nama_start_up');
        $visi_start_up=$this->input->post('visi_start_up');
        $misi_start_up=$this->input->post('misi_start_up');
        $struktur_start_up=$_FILES['struktur_start_up']['name'];
        if($struktur_start_up=''){}else{
            $config['upload_path']      ='./assets/files';
            $config['allowed_types']    ='jpg|jpeg|png|tiff';
            $config['max_size']         = 2073; 
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('struktur_start_up')){
                echo "photo gagal diupload!";
            }else{
                $struktur_start_up=$this->upload->data('file_name');
            }}

        
        $logo_start_up    =$_FILES['logo_start_up']['name'];
        if($logo_start_up=''){}else{
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
            'id_start_up'=>$id_start_up
        );
        
        $this->load->model('Startup_model');
        $this->Startup_model->update_data($where,$data,'tb_start_up');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Start-Up Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('mahasiswa/startup');

    }

    public function delete($id_pp){
        $where = array('id_pp'=>$id_pp);
        $this->load->model('Paperpitching_model');
        $this->Paperpitching_model->hapus_data($where,'tb_paper_pitching');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Paper Pitching Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('mahasiswa/paperpitching');

    }





}

?>