<?php

class Reviewproduk extends CI_Controller {

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
        $data['title'] = "Reviewproduk";
        //$id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['reviewproduk'] = $this->db->query("SELECT * FROM tb_solusi WHERE id_proposal='$id_proposal'")->result();


        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view("mahasiswa/reviewproduk",$data);
        $this->load->view('templates_mahasiswa/footer');
    }
    
    public function input()
    {
        $this->load->library('session');
        
        $data=array(
            'id_solusi'               =>set_value('id_solusi'),
            'id_proposal'             =>set_value('id_proposal'),
            'nim_solusi'              =>set_value('nim_solusi'),
            'tanggal_submit_solusi'              =>set_value('tanggal_submit_solusi'),
            'nama_solusi'             =>set_value('nama_solusi'),
            'deskripsi_solusi'        =>set_value('deskripsi_solusi'),
            'logo_solusi'             =>set_value('logo_solusi'),
            'prev_ui1_solusi'         =>set_value('prev_ui1_solusi'),
            'prev_ui2_solusi'         =>set_value('prev_ui2_solusi'),
            'prev_ui3_solusi'         =>set_value('prev_ui3_solusi'),
            'prev_ui4_solusi'         =>set_value('prev_ui4_solusi'),
            'tahun_buat_solusi'       =>set_value('tahun_buat_solusi'),
            'link_vid_solusi'         =>set_value('link_vid_solusi'),
            'link_prod_solusi'        =>set_value('link_prod_solusi'),
            'teknologi_solusi'        =>set_value('teknologi_solusi'),

            

        );
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/reviewproduk_form', $data );
        $this->load->view('templates_mahasiswa/footer');
        
    }

    public function input_aksi(){
        $this->_rules();
                                
       
        if($this->form_validation->run()==FALSE){
            $this->input();
            
        }else{
                $id_proposal            = $this->session->id_proposal;
                $nim_solusi             = $this->session->uname_user;
                $tanggal_submit_solusi       =$this->input->post('tanggal_submit_solusi');
                $nama_solusi            = strtoupper($this->input->post('nama_solusi'));
                $deskripsi_solusi       =$this->input->post('deskripsi_solusi');
                $logo_solusi            =$_FILES['logo_solusi']['name'];
                if($logo_solusi!=''){
                    $config['overwrite']        = TRUE;
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('logo_solusi')){
                        echo "photo gagal diupload!";
                    }else{
                        $logo_solusi=$this->upload->data('file_name');
                    }
                }

                
                $prev_ui1_solusi            =$_FILES['prev_ui1_solusi']['name'];
                if($prev_ui1_solusi!=''){
                    $config['overwrite']        = TRUE;
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('prev_ui1_solusi')){
                        echo "photo gagal diupload!";
                    }else{
                        $prev_ui1_solusi=$this->upload->data('file_name');
                    }
                }
                
                $prev_ui2_solusi            =$_FILES['prev_ui2_solusi']['name'];
                if($prev_ui2_solusi!=''){
                    $config['overwrite']        = TRUE;
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('prev_ui2_solusi')){
                        echo "photo gagal diupload!";
                    }else{
                        $prev_ui2_solusi=$this->upload->data('file_name');
                    }
                }

                $prev_ui3_solusi            =$_FILES['prev_ui3_solusi']['name'];
                     if($prev_ui3_solusi!=''){
                            $config['overwrite']        = TRUE;
                            $config['upload_path']      ='./assets/files';
                            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                            $config['max_size']         = 2073; 
                            $this->load->library('upload',$config);
                            if(!$this->upload->do_upload('prev_ui3_solusi')){
                                echo "photo gagal diupload!";
                            }else{
                                $prev_ui3_solusi=$this->upload->data('file_name');
                            }
                        }
                
                $prev_ui4_solusi            =$_FILES['prev_ui4_solusi']['name'];
                if($prev_ui4_solusi!=''){
                    $config['overwrite']        = TRUE;
                    $config['upload_path']      ='./assets/files';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
                    $config['max_size']         = 2073; 
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('prev_ui4_solusi')){
                        echo "photo gagal diupload!";
                    }else{
                        $prev_ui4_solusi=$this->upload->data('file_name');
                    }
                }

                $tahun_buat_solusi       =$this->input->post('tahun_buat_solusi');
                $link_vid_solusi         =$this->input->post('link_vid_solusi');
                $link_prod_solusi        =$this->input->post('link_prod_solusi');
                $teknologi_solusi        =$this->input->post('teknologi_solusi');


                $data=array(


                'id_proposal'           =>$id_proposal,
                'nim_solusi'           =>$nim_solusi,
                'tanggal_submit_solusi'     =>$tanggal_submit_solusi,
                'nama_solusi'          =>$nama_solusi,
                'deskripsi_solusi'     =>$deskripsi_solusi,
                'logo_solusi'          =>$logo_solusi,
                'prev_ui1_solusi'      =>$prev_ui1_solusi,
                'prev_ui2_solusi'      =>$prev_ui2_solusi,
                'prev_ui3_solusi'      =>$prev_ui3_solusi,
                'prev_ui4_solusi'      =>$prev_ui4_solusi,
                'tahun_buat_solusi'    =>$tahun_buat_solusi,
                'link_vid_solusi'      =>$link_vid_solusi,
                'link_prod_solusi'     =>$link_prod_solusi,
                'teknologi_solusi'     =>$teknologi_solusi,
                

            );

            
            $this->load->model('Reviewproduk_model');
            $this->Reviewproduk_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Review Produk Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect("mahasiswa/reviewproduk/index/$id_proposal");

        }
    }
  
            
    public function _rules(){
        $this->form_validation->set_rules('nama_solusi','nama_solusi','required',['required'=>'Nama aplikasi wajib diisi!']);
        $this->form_validation->set_rules('deskripsi_solusi','deskripsi_solusi','required',['required'=>'Deskripsi aplikasi wajib diisi!']);
        $this->form_validation->set_rules('tahun_buat_solusi','tahun_buat_solusi','required',['required'=>'Tahun pembuatan aplikasi wajib diisi!']);
        $this->form_validation->set_rules('link_vid_solusi','link_vid_solusi','required',['required'=>'Link video aplikasi wajib diisi!']);
        $this->form_validation->set_rules('link_prod_solusi','link_prod_solusi','required',['required'=>'Link produk aplikasi wajib diisi!']);
        $this->form_validation->set_rules('teknologi_solusi','teknologi_solusi','required',['required'=>'Teknologi yang digunakan aplikasi wajib diisi!']);


    }

    public function update($id_solusi){
        $where=array('id_solusi'=>$id_solusi);
        $this->load->model('Startup_model');
        $data['startup']=$this->Startup_model->edit_data($where,'tb_start_up')->result();
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/reviewproduk_update', $data );
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
            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
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
            $config['allowed_types']    ='jpg|jpeg|png|tiff|jfif';
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

    public function delete($id_solusi){
        $where = array('id_solusi'=>$id_solusi);
        $this->load->model('Reviewproduk_model');
        $this->Reviewproduk_model->hapus_data($where,'tb_solusi');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Review Produk Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('mahasiswa/reviewproduk');

    }





}

?>