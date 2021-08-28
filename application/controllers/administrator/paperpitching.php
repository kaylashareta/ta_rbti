<?php

class  Paperpitching extends CI_Controller{

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
        $this->db->from('tb_paper_pitching p');
        $this->db->join('tb_master_proposal m', 'p.id_proposal = m.id_proposal', 'inner');
        $data['admpaper'] = $this->db->get()->result();
        // $data['admpaper'] = $this->db->query("SELECT * FROM tb_paper_pitching ")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/paperpitching',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_proposal){
        $data['title'] = "Paper Pitching";
        //$id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $this->db->select('*');
        $this->db->from('tb_paper_pitching p');
        $this->db->join('tb_master_proposal m', 'p.id_proposal = m.id_proposal', 'inner');
        $this->db->where("p.id_proposal = '$id_proposal'");
        $data['admpaperdetail'] = $this->db->get()->result();
        // $data['admpaperdetail'] = $this->db->query("SELECT * FROM tb_paper_pitching INNER JOIN tb_master_proposal.judul_proposal WHERE id_proposal='$id_proposal'")->result();
 

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/paperpitching_detail',$data);
        $this->load->view('templates_administrator/footer');
    }

   

}

?>