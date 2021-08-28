<?php

class  Mahasiswa extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('admmahasiswa_model');
        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }
 
    public function index(){
        $data['mahasiswa'] = $this->db->query("SELECT * FROM tb_mahasiswa ORDER BY nim_mhs ASC")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mahasiswa',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_data()
    {
        $data['halaman'] = "Halaman Tambah Data Mahasiswa";
        $data['form'] = "Form Tambah";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['dosen'] = $this->admmahasiswa_model->getDosen()->result_array();
        $data['kelas'] = $this->admmahasiswa_model->getKelas()->result_array();
        $data['nim'] = $this->admmahasiswa_model->getNim()->result_array();

        $this->form_validation->set_rules('nama_mhs', 'nama_mhs', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/mahasiswa_form',$data);
            $this->load->view('templates_administrator/footer');
            
        } else {
            $this->admmahasiswa_model->input_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Judul Proposal berhasil ditambahkan </div>');
            redirect('administrator/mahasiswa');
        }
    }

    /*public function input() 
    {
        $data=array(
            'id_mhs'     =>set_value('id_mhs'),
            'nim_mhs'  =>set_value('nim_mhs'),
            'pass_mhs'   =>set_value('pass_mhs'),
            'nama_mhs'   =>set_value('nama_mhs'),
            'kelas_mhs'   =>set_value('kelas_mhs'),
            'dosen_mhs'   =>set_value('dosen_mhs'),

        ); 

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mahasiswa_form',$data);
        $this->load->view('templates_administrator/footer');
    } 
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
            $data=array(
                'nim_mhs' =>$this->input->post('nim_mhs',TRUE),
                'pass_mhs'  =>$this->input->post('pass_mhs',TRUE),
                'nama_mhs'  =>$this->input->post('nama_mhs',TRUE),
                'kelas_mhs'  =>$this->input->post('kelas_mhs',TRUE),
                'dosen_mhs'  =>$this->input->post('dosen_mhs',TRUE)
            );

            $this->load->model('admmahasiswa_model');
            $this->Mahasiswa_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/mahasiswa');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('nim_mhs','nim_mhs','required',['required'=>'NIM mahasiswa wajib diisi!']);
        $this->form_validation->set_rules('pass_mhs','pass_mhs','required',['required'=>'Password mahasiswa wajib diisi!']);
        $this->form_validation->set_rules('nama_mhs','nama_mhs','required',['required'=>'Nama mahasiswa wajib diisi!']);
        $this->form_validation->set_rules('kelas_mhs','kelas_mhs','required',['required'=>'Kelas mahasiswa wajib diisi!']);
        $this->form_validation->set_rules('dosen_mhs','dosen_mhs','required',['required'=>'Dosen mahasiswa wajib diisi!']);
    }*/

    public function update($id_mhs)
    {
        $data['halaman'] = "Halaman Edit Data Mahasiswan";
        $data['form'] = "Form Edit";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['mahasiswa'] = $this->admmahasiswa_model->getIdMhs($id_mhs)->row_array();
        $data['dosen'] = $this->admmahasiswa_model->getDosen()->result_array();
        $data['kelas'] = $this->admmahasiswa_model->getKelas()->result_array();

        $this->form_validation->set_rules('nim_mhs', 'nim_mhs', 'required');
        $this->form_validation->set_rules('nama_mhs', 'nama_mhs', 'required');
        $this->form_validation->set_rules('kelas_mhs', 'kelas_mhs', 'required');
        $this->form_validation->set_rules('dosen_mhs', 'dosen_mhs', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/mahasiswa_update',$data);
            $this->load->view('templates_administrator/footer');
        } else {
            $this->admmahasiswa_model->edit_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil diedit </div>');
            redirect('administrator/mahasiswa');
        }
    }

    /*public function update($id_mhs){
        $where=array('id_mhs'=>$id_mhs);
        $this->load->model('admmahasiswa_model');
        $data['mahasiswa']=$this->admmahasiswa_model->edit_data($where,'tb_mahasiswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mahasiswa_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_mhs=$this->input->post('id_mhs');
        $nim_mhs=$this->input->post('nim_mhs');
        $pass_mhs=$this->input->post('pass_mhs');
        $nama_mhs=$this->input->post('nama_mhs');
        $kelas_mhs=$this->input->post('kelas_mhs');
        $dosen_mhs=$this->input->post('dosen_mhs');

        $data=array(
            'nim_mhs'=>$nim_mhs,
            'pass_mhs'=>$pass_mhs,
            'nama_mhs'=>$nama_mhs,
            'kelas_mhs'=>$kelas_mhs,
            'kelas_mhs'=>$dosen_mhs,
        );

        $where=array(
            'id_mhs'=>$id_mhs
        );
        
        $this->load->model('Mahasiswa_model');
        $this->admmahasiswa_model->update_data($where,$data,'tb_mahasiswa');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Mahasiswa Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/mahasiswa');

    }*/

    public function delete($id_mhs)
    {
        $this->admmahasiswa_model->hapusMahasiswa($id_mhs);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus! </div>');

        redirect('administrator/mahasiswa');
    }

}

?>