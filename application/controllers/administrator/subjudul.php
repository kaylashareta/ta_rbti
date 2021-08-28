<?php

class Subjudul extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('subjudul_model');
        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
      }
 
    public function index(){
        $data['subjudul'] = $this->db->query("SELECT * FROM subjudul ")->result();
     
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/subjudul',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
   
    {
        $data=array(
            'id_subjudul'             =>set_value('id_subjudul'),
            'subjudul'           =>set_value('subjudul'),
            

        ); 
        $this->load->model('subjudul_model');
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/subjudul_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
                $subjudul         =strtoupper($this->input->post('subjudul'));
              
            
                $data=array(
                    'subjudul'         =>$subjudul,
                   
              
            );
            $this->load->model('subjudul_model');
            $this->subjudul_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            subjudul Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/subjudul');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('subjudul','subjudul','required',['required'=>'Kode tema wajib diisi!']);
         }

    public function update($id_subjudul){
        $this->load->model('subjudul_model');
        $where=array('id_subjudul'=>$id_subjudul);
        $data['subjudul']=$this->subjudul_model->edit_data($where,'tb_tema')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/subjudul_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_subjudul=$this->input->post('id_subjudul');
        $subjudul=$this->input->post('subjudul');
     
            

        $data=array(
            'subjudul'=>$subjudul,
        
        );

        $where=array(
            'id_subjudul'=>$id_subjudul,
        );
        $this->load->model('subjudul_model');
        $this->subjudul_model->update_data($where,$data,'subjudul');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        subjudul Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/subjudul');

    }

    public function delete($id_subjudul){
        $where = array('id_subjudul'=>$id_subjudul);
        $this->load->model('subjudul_model');
        $this->subjudul_model->hapus_data($where,'subjudul');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        subjudul Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/subjudul');

    }

}

?>