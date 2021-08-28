<?php

class  Admin extends CI_Controller{

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
        $data['admin'] = $this->db->query("SELECT * FROM tb_user WHERE hak_akses ORDER BY hak_akses ASC, uname_user ASC")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data=array(
            'id_user'     =>set_value('id_user'),
            'uname_user'  =>set_value('uname_user'),
            'pass_user'   =>set_value('pass_user'),
            'nama_user'   =>set_value('nama_user'),
            'hak_akses'   =>set_value('hak_akses'),

        );

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
            $data=array(
                'uname_user' =>$this->input->post('uname_user',TRUE),
                'pass_user'  =>$this->input->post('pass_user',TRUE),
                'nama_user'  =>$this->input->post('nama_user',TRUE),
                'hak_akses'   =>$this->input->post('hak_akses',TRUE),
            );

            $this->admin_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data User Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/admin');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('uname_user','uname_user','required',['required'=>'Username user wajib diisi!']);
        $this->form_validation->set_rules('pass_user','pass_user','required',['required'=>'Password user wajib diisi!']);
        $this->form_validation->set_rules('nama_user','nama_user','required',['required'=>'Nama user wajib diisi!']);
        $this->form_validation->set_rules('hak_akses','hak_akses','required',['required'=>'Hak akses user wajib diisi!']);
    }

    public function update($id_user){
        $where=array('id_user'=>$id_user);
        $data['admin']=$this->admin_model->edit_data($where,'tb_user')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_user=$this->input->post('id_user');
        $uname_user=$this->input->post('uname_user');
        $pass_user=$this->input->post('pass_user');
        $nama_user=$this->input->post('nama_user');
        $hak_akses=$this->input->post('hak_akses');


        $data=array(
            'uname_user'=>$uname_user,
            'pass_user'=>$pass_user,
            'nama_user'=>$nama_user,
            'hak_akses'=>$hak_akses
        );

        $where=array(
            'id_user'=>$id_user
        );

        $this->admin_model->update_data($where,$data,'tb_user');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data User Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/admin');

    }

    public function delete($id_user){
        $where = array('id_user'=>$id_user);
        $this->admin_model->hapus_data($where,'tb_user');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data User Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/admin');

    }

}

?>