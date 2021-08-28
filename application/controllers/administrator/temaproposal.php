<?php

class  Temaproposal extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
        $this->load->model('temaproposal_model');
    }
 
    public function index(){
        $data['temaproposal'] = $this->db->query("SELECT * FROM tb_tema ")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/temaproposal',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
   
    {
        $data=array(
            'id_tema'             =>set_value('id_tema'),
            'kode_tema'           =>set_value('kode_tema'),
            

        ); 
        $this->load->model('temaproposal_model');
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/temaproposal_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
                $kode_tema         =strtoupper($this->input->post('kode_tema'));
                $tema_proposal     =($this->input->post('tema_proposal'));
                
            
                $data=array(
                    'kode_tema'         =>$kode_tema,
                    'tema_proposal'     =>$tema_proposal,
                    
              
            );
            $this->load->model('temaproposal_model');
            $this->temaproposal_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Tema Proposal Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/temaproposal');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('kode_tema','kode_tema','required',['required'=>'Kode tema wajib diisi!']);
        $this->form_validation->set_rules('tema_proposal','tema_proposal','required',['required'=>'Tema Proposal wajib diisi!']);
       }

    public function update($id_tema){
        $this->load->model('temaproposal_model');
        $where=array('id_tema'=>$id_tema);
        $data['temaproposal']=$this->temaproposal_model->edit_data($where,'tb_tema')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/temaproposal_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_tema=$this->input->post('id_tema');
        $kode_tema=$this->input->post('kode_tema');
        $tema_proposal=$this->input->post('tema_proposal');
       
            

        $data=array(
            'kode_tema'=>$kode_tema,
            'tema_proposal'=>$tema_proposal,
         
        );

        $where=array(
            'id_tema'=>$id_tema,
        );
        $this->load->model('temaproposal_model');
        $this->temaproposal_model->update_data($where,$data,'tb_tema');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Tema Proposal Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/temaproposal');

    }

    public function delete($id_tema){
        $where = array('id_tema'=>$id_tema);
        $this->load->model('temaproposal_model');
        $this->temaproposal_model->hapus_data($where,'tb_tema');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Tema Proposal Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/temaproposal');

    }

}

?>