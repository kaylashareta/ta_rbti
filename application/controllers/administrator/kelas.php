<?php

class  Kelas extends CI_Controller{

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
        $data['kelas'] = $this->db->query("SELECT * FROM tb_kelas ")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
   
    {
        $data=array(
            'id_kelas'        =>set_value('id_kelas'),
            'kelas'           =>set_value('kelas'),
            

        );
        $this->load->model('kelas_model');
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
                $kelas     =strtoupper($this->input->post('kelas'));
                
            
                $data=array(
                    'kelas'     =>$kelas,
                    
              
            );
            $this->load->model('kelas_model');
            $this->kelas_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            kelas Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/kelas');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('kelas','kelas','required',['required'=>'Kelas wajib diisi!']);
       }

    public function update($id_kelas){
        $this->load->model('kelas_model');
        $where=array('id_kelas'=>$id_kelas);
        $data['kelas']=$this->kelas_model->edit_data($where,'tb_kelas')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_kelas=$this->input->post('id_kelas');
        $kelas=$this->input->post('kelas');
       
            

        $data=array(
            'kelas'=>$kelas,
         
        );

        $where=array(
            'id_kelas'=>$id_kelas,
        );
        $this->load->model('kelas_model');
        $this->kelas_model->update_data($where,$data,'tb_kelas');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Kelas Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/kelas');

    }

    public function delete($id_kelas){
        $where = array('id_kelas'=>$id_kelas);
        $this->load->model('kelas_model');
        $this->kelas_model->hapus_data($where,'tb_kelas');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Kelas Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/kelas');

    }

}

?>