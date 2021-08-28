<?php

class  Plan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('admplan_model');
        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index(){
        $this->db->select('*');
        $this->db->from('tb_plan b');
        $this->db->join('tb_master_proposal m', 'b.id_proposal = m.id_proposal', 'inner');
        $data['admplan'] = $this->db->get()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/plan',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_proposal){
        $data['title'] = "Business Plan";
        //$id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $this->db->select('*');
        $this->db->from('tb_plan b');
        $this->db->join('tb_master_proposal m', 'b.id_proposal = m.id_proposal', 'inner');
        $this->db->where("b.id_proposal = '$id_proposal'");
        $data['admplandetail'] = $this->db->get()->result();
      
      

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/plan_detail',$data);
        $this->load->view('templates_administrator/footer');
    }


   

}

?> 