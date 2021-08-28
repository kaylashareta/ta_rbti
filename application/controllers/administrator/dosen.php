<?php

class  Dosen extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('admdosen_model');
        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index(){
        $data['dosen'] = $this->db->query("SELECT * FROM tb_dosen ORDER BY uname_dosen ASC")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen',$data);
        $this->load->view('templates_administrator/footer');
    } 

    public function input_data()
    {
        $data['halaman'] = "Halaman Tambah Data Dosen";
        $data['form'] = "Form Tambah";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['ud'] = $this->admdosen_model->getUname()->result_array();
        

        $this->form_validation->set_rules('nama_dosen', 'nama_dosen', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/dosen_form',$data);
            $this->load->view('templates_administrator/footer');
            
        } else {
            $this->admdosen_model->input_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data dosen berhasil ditambahkan </div>');
            redirect('administrator/dosen');
        }
    }

    /*public function input()
    {
        $data=array(
            'id_dosen'     =>set_value('id_dosen'),
            'uname_dosen'  =>set_value('uname_dosen'),
            'pass_dosen'   =>set_value('pass_dosen'),
            'nama_dosen'   =>set_value('nama_dosen'),

        );

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
            $data=array(
                'uname_dosen' =>$this->input->post('uname_dosen',TRUE),
                'pass_dosen'  =>$this->input->post('pass_dosen',TRUE),
                'nama_dosen'  =>$this->input->post('nama_dosen',TRUE),
            );

            
            $this->Admdosen_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Dosen Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/dosen');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('uname_dosen','uname_dosen','required',['required'=>'Username dosen wajib diisi!']);
        $this->form_validation->set_rules('pass_dosen','pass_dosen','required',['required'=>'Password dosen wajib diisi!']);
        $this->form_validation->set_rules('nama_dosen','nama_dosen','required',['required'=>'Nama dosen wajib diisi!']);
    }*/
 
    public function update($id_dosen)
    {
        $data['halaman'] = "Halaman Edit Data Dosen";
        $data['form'] = "Form Edit";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['dosen'] = $this->admdosen_model->getIdDosen($id_dosen)->row_array();

        $this->form_validation->set_rules('uname_dosen', 'uname_dosen', 'required|trim|is_unique[tb_dosen.uname_dosen]', [
            'is_unique' => 'Uname dosen sudah Ada',]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/dosen_update',$data);
            $this->load->view('templates_administrator/footer');
        } else {
            $this->admdosen_model->edit_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil diedit </div>');
            redirect('administrator/dosen');
        }
    }

    /*public function update($id_dosen){
        $where=array('id_dosen'=>$id_dosen);
        
        $data['dosen']=$this->admdosen_model->edit_data($where,'tb_dosen')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_update',$data);
        $this->load->view('templates_administrator/footer');
    } 

    public function update_aksi(){
        $id_dosen=$this->input->post('id_dosen');
        $uname_dosen=$this->input->post('uname_dosen');
        $pass_dosen=$this->input->post('pass_dosen');
        $nama_dosen=$this->input->post('nama_dosen');

        $data=array(
            'uname_dosen'=>$uname_dosen,
            'pass_dosen'=>$pass_dosen,
            'nama_dosen'=>$nama_dosen
        );

        $where=array(
            'id_dosen'=>$id_dosen
        );
        
       
        $this->Admdosen_model->update_data($where,$data,'tb_dosen');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Dosen Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/dosen');

    } */

    public function delete($id_dosen)
    {
        $this->admdosen_model->hapusDosen($id_dosen);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus! </div>');

        redirect('administrator/dosen');
    }

}

?>