<?php

class  Artikel extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index(){
        $data['artikel'] = $this->db->query("SELECT * FROM tb_artikel ")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/artikel',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
   
    {
        $data=array(
            'id_artikel'        =>set_value('id_artikel'),
            'subjudul_artikel'     =>set_value('subjudul_artikel'),
            'judul_artikel'     =>set_value('judul_artikel'),
            'isi_artikel'       =>set_value('isi_artikel'),
            'foto_artikel'      =>set_value('foto_artikel'),
            

        );
        $this->load->model('artikel_model');
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/artikel_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
                $subjudul_artikel     =strtoupper($this->input->post('subjudul_artikel'));
                $judul_artikel     =strtoupper($this->input->post('judul_artikel'));
                $isi_artikel       =$this->input->post('isi_artikel');
                $foto_artikel      =$_FILES['foto_artikel']['name'];
                if($foto_artikel=''){}else{
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('foto_artikel')){
                        echo "photo gagal diupload!";
                    }else{
                        $foto_artikel=$this->upload->data('file_name');
                    }}
            
            
                $data=array(
                    'subjudul_artikel'     =>$subjudul_artikel,
                    'judul_artikel'     =>$judul_artikel,
                    'isi_artikel'       =>$isi_artikel,
                    'foto_artikel'      =>$foto_artikel,

              
            );
            $this->load->model('artikel_model');
            $this->artikel_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Artikel Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/artikel');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('subjudul_artikel','subjudul_artikel','required',['required'=>'Judul wajib diisi!']);
        $this->form_validation->set_rules('judul_artikel','judul_artikel','required',['required'=>'Judul wajib diisi!']);
        $this->form_validation->set_rules('isi_artikel','isi_artikel','required',['required'=>'Isi wajib diisi!']);
     }

    public function update($id_artikel){
        $this->load->model('artikel_model');
        $where=array('id_artikel'=>$id_artikel);
        $data['artikel']=$this->artikel_model->edit_data($where,'tb_artikel')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/artikel_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_artikel=$this->input->post('id_artikel');
        $subjudul_artikel=strtoupper($this->input->post('subjudul_artikel'));
        $judul_artikel=strtoupper($this->input->post('judul_artikel'));
        $isi_artikel=$this->input->post('isi_artikel');
        $foto_artikel      =$_FILES['foto_artikel']['name'];
                if($foto_artikel=''){}else{
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('foto_artikel')){
                        echo "photo gagal diupload!";
                    }else{
                        $foto_artikel=$this->upload->data('file_name');
                    }}
            

        $data=array(
            'subjudul_artikel'=>$subjudul_artikel,
            'judul_artikel'=>$judul_artikel,
            'isi_artikel'=>$isi_artikel,
            'foto_artikel'=>$foto_artikel,
           
        );

        $where=array(
            'id_artikel'=>$id_artikel,
        );
        $this->load->model('artikel_model');
        $this->artikel_model->update_data($where,$data,'tb_artikel');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/artikel');

    }

    public function delete($id_artikel){
        $where = array('id_artikel'=>$id_artikel);
        $this->load->model('artikel_model');
        $this->artikel_model->hapus_data($where,'tb_artikel');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Artikel Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/artikel');

    }

}

?>