<?php

class  Reviewproduk extends CI_Controller{

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
        $this->db->select('*');
        $this->db->from('tb_solusi b');
        $this->db->join('tb_master_proposal m', 'b.id_proposal = m.id_proposal', 'inner');
        $data['admreview'] = $this->db->get()->result();$this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/reviewproduk',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_proposal){
        $data['title'] = "Reviewproduk";
        //$id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['admreviewdetail'] = $this->db->query("SELECT * FROM tb_solusi WHERE id_proposal='$id_proposal'")->result();


        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/reviewproduk_detail',$data);
        $this->load->view('templates_administrator/footer');
    }

   

}

?>