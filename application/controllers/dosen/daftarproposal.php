<?php

class DaftarProposal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('daftarproposal_model');
        if($this->session->userdata('hak_akses')!='2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index(){
        $data['halaman'] = "Daftar Proposal";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarpro'] = $this->daftarproposal_model->getJoin();

        /*$data['title'] = "Daftar Proposal";
        $id= $this->session->userdata('uname_user');
        $data['daftarpro'] = $this->db->query("SELECT tb_start_up.nama_start_up,tb_start_up.visi_start_up,tb_start_up.misi_start_up,tb_start_up.struktur_start_up,tb_start_up.logo_start_up,
        tb_start_up.tagline_start_up,tb_biodatatim.nama_hustler,tb_biodatatim.alamat_hustler,tb_biodatatim.telp_hustler,tb_biodatatim.email_hustler,tb_biodatatim.tugas_hustler,
        tb_biodatatim.nama_hipster,tb_biodatatim.alamat_hipster,tb_biodatatim.telp_hipster,tb_biodatatim.email_hipster,tb_biodatatim.tugas_hipster, 
        tb_biodatatim.nama_hacker,tb_biodatatim.alamat_hacker,tb_biodatatim.telp_hacker,tb_biodatatim.email_hacker,tb_biodatatim.tugas_hacker,
        tb_solusi.nama_solusi,tb_solusi.deskripsi_solusi,tb_solusi.logo_solusi,tb_solusi.prev_ui1_solusi,tb_solusi.prev_ui2_solusi,tb_solusi.prev_ui3_solusi,tb_solusi.prev_ui4_solusi,tb_solusi.tahun_buat_solusi,tb_solusi.link_vid_solusi,tb_solusi.link_prod_solusi,tb_solusi.teknologi_solusi,
        tb_paper_pitching.latar_belakang_pp,tb_paper_pitching.permasalahan_pp,tb_paper_pitching.solusi_pp,tb_paper_pitching.progres_pp,tb_paper_pitching.kompetitor_pp,tb_paper_pitching.kompetitor2_pp,tb_paper_pitching.target_pp,tb_paper_pitching.data_pp,tb_paper_pitching.proses_bisnis_pp,tb_paper_pitching.proses_bisnis2_pp,tb_paper_pitching.tahapan_pp,tb_paper_pitching.kelebihan_pp,
        tb_plan.cust_plan,tb_plan.value_plan,tb_plan.channels_plan,tb_plan.relation_plan,tb_plan.key_act_plan,tb_plan.key_res_plan,tb_plan.key_partner_plan,tb_plan.cost_plan,tb_plan.revenue_plan,
        tb_start_up.nim_start_up,tb_biodatatim.nim_biodata,tb_solusi.nim_solusi,tb_paper_pitching.nim_pp,tb_plan.nim_plan,tb_mahasiswa.dosen_mhs,tb_mahasiswa.nim_mhs
        FROM tb_start_up
        INNER JOIN tb_biodatatim ON tb_biodatatim.nim_biodata=tb_start_up.nim_start_up
        INNER JOIN tb_solusi ON tb_solusi.nim_solusi=tb_start_up.nim_start_up
        INNER JOIN tb_paper_pitching ON tb_paper_pitching.nim_pp=tb_start_up.nim_start_up
        INNER JOIN tb_plan ON tb_plan.nim_plan=tb_start_up.nim_start_up
        INNER JOIN tb_mahasiswa ON tb_mahasiswa.nim_mhs=tb_start_up.nim_start_up
        WHERE dosen_mhs='$id'
        ORDER BY tb_mahasiswa.nim_mhs ASC")->result();*/ 
        
        $this->load->view('templates_dosen/header_daftarpro');
        $this->load->view('dosen/daftarproposal',$data);
        $this->load->view('templates_dosen/footer');
    }

    public function detail1($id_proposal){
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Detail BAB 1";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['detailpro1'] = $this->daftarproposal_model->detailpro1($id_proposal);
        //$data['detailpro1'] = $this->db->query("SELECT * FROM tb_start_up WHERE id_proposal='$id_proposal'")->result();

		// var_dump($data['detailpro1']); die;



        /*$where=array('nim_mhs'=>$nim_mhs);
        $data['title'] = "Detail Proposal";
        $id= $this->session->userdata('uname_user');*/
        /*$data['detailpro'] = $this->db->query("SELECT tb_start_up.nama_start_up,tb_start_up.visi_start_up,tb_start_up.misi_start_up,tb_start_up.struktur_start_up,tb_start_up.logo_start_up,
        tb_start_up.tagline_start_up,tb_biodatatim.nama_hustler,tb_biodatatim.alamat_hustler,tb_biodatatim.telp_hustler,tb_biodatatim.email_hustler,tb_biodatatim.tugas_hustler,
        tb_biodatatim.nama_hipster,tb_biodatatim.alamat_hipster,tb_biodatatim.telp_hipster,tb_biodatatim.email_hipster,tb_biodatatim.tugas_hipster, 
        tb_biodatatim.nama_hacker,tb_biodatatim.alamat_hacker,tb_biodatatim.telp_hacker,tb_biodatatim.email_hacker,tb_biodatatim.tugas_hacker,
        tb_solusi.nama_solusi,tb_solusi.deskripsi_solusi,tb_solusi.logo_solusi,tb_solusi.prev_ui1_solusi,tb_solusi.prev_ui2_solusi,tb_solusi.prev_ui3_solusi,tb_solusi.prev_ui4_solusi,tb_solusi.tahun_buat_solusi,tb_solusi.link_vid_solusi,tb_solusi.link_prod_solusi,tb_solusi.teknologi_solusi,
        tb_paper_pitching.latar_belakang_pp,tb_paper_pitching.permasalahan_pp,tb_paper_pitching.solusi_pp,tb_paper_pitching.progres_pp,tb_paper_pitching.kompetitor_pp,tb_paper_pitching.kompetitor2_pp,tb_paper_pitching.target_pp,tb_paper_pitching.data_pp,tb_paper_pitching.proses_bisnis_pp,tb_paper_pitching.proses_bisnis2_pp,tb_paper_pitching.tahapan_pp,tb_paper_pitching.kelebihan_pp,
        tb_plan.cust_plan,tb_plan.value_plan,tb_plan.channels_plan,tb_plan.relation_plan,tb_plan.key_act_plan,tb_plan.key_res_plan,tb_plan.key_partner_plan,tb_plan.cost_plan,tb_plan.revenue_plan,
        tb_start_up.nim_start_up,tb_biodatatim.nim_biodata,tb_solusi.nim_solusi,tb_paper_pitching.nim_pp,tb_plan.nim_plan,tb_mahasiswa.dosen_mhs,tb_mahasiswa.nim_mhs
        FROM tb_start_up
        INNER JOIN tb_biodatatim ON tb_biodatatim.nim_biodata=tb_start_up.nim_start_up
        INNER JOIN tb_solusi ON tb_solusi.nim_solusi=tb_start_up.nim_start_up
        INNER JOIN tb_paper_pitching ON tb_paper_pitching.nim_pp=tb_start_up.nim_start_up
        INNER JOIN tb_plan ON tb_plan.nim_plan=tb_start_up.nim_start_up
        INNER JOIN tb_mahasiswa ON tb_mahasiswa.nim_mhs=tb_start_up.nim_start_up
        WHERE dosen_mhs='$id'
        ORDER BY tb_mahasiswa.nim_mhs ASC")->result();*/
        

        $this->load->view('templates_dosen/header_daftarpro');
        $this->load->view('dosen/detail1',$data);
        $this->load->view('templates_dosen/footer');


    }

    public function detail2($id_proposal){
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Detail BAB 2";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['detailpro2'] = $this->daftarproposal_model->detailpro2($id_proposal);

        $this->load->view('templates_dosen/header_daftarpro');
        $this->load->view('dosen/detail2',$data);
        $this->load->view('templates_dosen/footer');


    }
    

    public function detail3($id_proposal){
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Detail BAB 3";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['detailpro3'] = $this->daftarproposal_model->detailpro3($id_proposal);

        $this->load->view('templates_dosen/header_daftarpro');
        $this->load->view('dosen/detail3',$data);
        $this->load->view('templates_dosen/footer');


    }

    public function detail4($id_proposal){
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Detail BAB 4";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['detailpro4'] = $this->daftarproposal_model->detailpro4($id_proposal);

        $this->load->view('templates_dosen/header_daftarpro');
        $this->load->view('dosen/detail4',$data);
        $this->load->view('templates_dosen/footer');


    }

    public function detail5($id_proposal){
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Detail BAB 5";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['detailpro5'] = $this->daftarproposal_model->detailpro5($id_proposal);

        $this->load->view('templates_dosen/header_daftarpro');
        $this->load->view('dosen/detail5',$data);
        $this->load->view('templates_dosen/footer');


    }  

    public function verifikasi1($id_proposal)
    {
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Halaman Verifikasi BAB 1";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['verif1'] = $this->daftarproposal_model->getIdVerif1($id_proposal)->row_array();
        $data['status'] = $this->daftarproposal_model->getStatus()->result_array(); 
       
        //$this->form_validation->set_rules('nama_start_up', 'nama_start_up',);
        $this->form_validation->set_rules('status_nama_su', 'status_nama_su', 'required');
        $this->form_validation->set_rules('catnama_su', 'catnama_su', 'required');
        //$this->form_validation->set_rules('visi_start_up', 'visi_start_up',);
        $this->form_validation->set_rules('status_visi_su', 'status_visi_su', 'required');
        $this->form_validation->set_rules('catvisi_su', 'catvisi_su', 'required');
        //$this->form_validation->set_rules('misi_start_up', 'misi_start_up',);
        $this->form_validation->set_rules('status_misi_su', 'status_misi_su', 'required');
        $this->form_validation->set_rules('catmisi_su', 'catmisi_su', 'required');
        //$this->form_validation->set_rules('struktur_start_up', 'struktur_start_up',);
        $this->form_validation->set_rules('status_struktur_su', 'status_struktur_su', 'required');
        $this->form_validation->set_rules('catstruktur_su', 'catstruktur_su', 'required');
        //$this->form_validation->set_rules('logo_start_up', 'logo_start_up',);
        $this->form_validation->set_rules('status_logo_su', 'status_logo_su', 'required');
        $this->form_validation->set_rules('catlogo_su', 'catlogo_su', 'required');
        //$this->form_validation->set_rules('tagline_start_up', 'tagline_start_up',);
        $this->form_validation->set_rules('status_tagline_su', 'status_tagline_su', 'required');
        $this->form_validation->set_rules('cattagline_su', 'cattagline_su', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_dosen/header_daftarpro');
            $this->load->view('dosen/detail1_verifikasi', $data );
            $this->load->view('templates_dosen/footer');
        } else {
            $this->daftarproposal_model->verifikasib1($id_proposal);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Judul Proposal berhasil ditambahkan </div>');
            redirect('dosen/daftarproposal/detail1/'.$id_proposal);
        }
    }

    public function verifikasi2($id_proposal)
    {
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Halaman Verifikasi BAB 2";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['verif2'] = $this->daftarproposal_model->getIdVerif2($id_proposal)->row_array();
        $data['status'] = $this->daftarproposal_model->getStatus()->result_array(); 
       
        
        $this->form_validation->set_rules('status_nama_hustler', 'status_nama_hustler', 'required');
        $this->form_validation->set_rules('catnama_hustler', 'catnama_hustler', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_dosen/header_daftarpro');
            $this->load->view('dosen/detail2_verifikasi', $data );
            $this->load->view('templates_dosen/footer');
        } else {
            $this->daftarproposal_model->verifikasib2($id_proposal);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Judul Proposal berhasil ditambahkan </div>');
            redirect('dosen/daftarproposal/detail2/'.$id_proposal);
        }
    }

    public function verifikasi3($id_proposal)
    {
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Halaman Verifikasi BAB 3";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['verif3'] = $this->daftarproposal_model->getIdVerif3($id_proposal)->row_array();
        $data['status'] = $this->daftarproposal_model->getStatus()->result_array(); 
       
        
        $this->form_validation->set_rules('status_nama_solusi', 'status_nama_solusi', 'required');
        $this->form_validation->set_rules('catnama_solusi', 'catnama_solusi', 'required');
        $this->form_validation->set_rules('status_desk_solusi', 'status_desk_solusi', 'required');
        $this->form_validation->set_rules('catdesk_solusi', 'catdesk_solusi', 'required');
        $this->form_validation->set_rules('status_logo_solusi', 'status_logo_solusi', 'required');
        $this->form_validation->set_rules('catlogo_solusi', 'catlogo_solusi', 'required');
        $this->form_validation->set_rules('status_ui1_solusi', 'status_ui1_solusi', 'required');
        $this->form_validation->set_rules('catui1_solusi', 'catui1_solusi', 'required');
        $this->form_validation->set_rules('status_ui2_solusi', 'status_ui2_solusi', 'required');
        $this->form_validation->set_rules('catui2_solusi', 'catui2_solusi', 'required');
        $this->form_validation->set_rules('status_ui3_solusi', 'status_ui3_solusi', 'required');
        $this->form_validation->set_rules('catui3_solusi', 'catui3_solusi', 'required');
        $this->form_validation->set_rules('status_ui4_solusi', 'status_ui4_solusi', 'required');
        $this->form_validation->set_rules('catui4_solusi', 'catui4_solusi', 'required');
        $this->form_validation->set_rules('status_tahun_solusi', 'status_tahun_solusi', 'required');
        $this->form_validation->set_rules('cattahun_solusi', 'cattahun_solusi', 'required');
        $this->form_validation->set_rules('status_linkvid_solusi', 'status_linkvid_solusi', 'required');
        $this->form_validation->set_rules('catlinkvid_solusi', 'catlinkvid_solusi', 'required');
        $this->form_validation->set_rules('status_linkprod_solusi', 'status_linkprod_solusi', 'required');
        $this->form_validation->set_rules('catlinkprod_solusi', 'catlinkprod_solusi', 'required');
        $this->form_validation->set_rules('status_tekn_solusi', 'status_tekn_solusi', 'required');
        $this->form_validation->set_rules('cattekn_solusi', 'cattekn_solusi', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_dosen/header_daftarpro');
            $this->load->view('dosen/detail3_verifikasi', $data );
            $this->load->view('templates_dosen/footer');
        } else {
            $this->daftarproposal_model->verifikasib3($id_proposal);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Judul Proposal berhasil ditambahkan </div>');
            redirect('dosen/daftarproposal/detail3/'.$id_proposal);
        }
    }

    public function verifikasi4($id_proposal)
    {
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Halaman Verifikasi BAB 4";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['verif4'] = $this->daftarproposal_model->getIdVerif4($id_proposal)->row_array();
        $data['status'] = $this->daftarproposal_model->getStatus()->result_array(); 
       
        
        $this->form_validation->set_rules('status_latarb_pp', 'status_latarb_pp', 'required');
        $this->form_validation->set_rules('catlatarb_pp', 'catlatarb_pp', 'required');
        $this->form_validation->set_rules('status_permas_pp', 'status_permas_pp', 'required');
        $this->form_validation->set_rules('catpermas_pp', 'catpermas_pp', 'required');
        $this->form_validation->set_rules('status_solusi_pp', 'status_solusi_pp', 'required');
        $this->form_validation->set_rules('catsolusi_pp', 'catsolusi_pp', 'required');
        $this->form_validation->set_rules('status_progres_pp', 'status_progres_pp', 'required');
        $this->form_validation->set_rules('catprogres_pp', 'catprogres_pp', 'required');
        $this->form_validation->set_rules('status_komp_pp', 'status_komp_pp', 'required');
        $this->form_validation->set_rules('catkomp_pp', 'catkomp_pp', 'required');
        $this->form_validation->set_rules('status_komp2_pp', 'status_komp2_pp', 'required');
        $this->form_validation->set_rules('catkomp2_pp', 'catkomp2_pp', 'required');
        $this->form_validation->set_rules('status_target_pp', 'status_target_pp', 'required');
        $this->form_validation->set_rules('cattarget_pp', 'cattarget_pp', 'required');
        $this->form_validation->set_rules('status_data_pp', 'status_data_pp', 'required');
        $this->form_validation->set_rules('catdata_pp', 'catdata_pp', 'required');
        $this->form_validation->set_rules('status_pb_pp', 'status_pb_pp', 'required');
        $this->form_validation->set_rules('catpb_pp', 'catpb_pp', 'required');
        $this->form_validation->set_rules('status_pb2_pp', 'status_pb2_pp', 'required');
        $this->form_validation->set_rules('catpb2_pp', 'catpb2_pp', 'required');
        $this->form_validation->set_rules('status_tahap_pp', 'status_tahap_pp', 'required');
        $this->form_validation->set_rules('cattahap_pp', 'cattahap_pp', 'required');
        $this->form_validation->set_rules('status_keleb_pp', 'status_keleb_pp', 'required');
        $this->form_validation->set_rules('catkeleb_pp', 'catkeleb_pp', 'required');
        
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_dosen/header_daftarpro');
            $this->load->view('dosen/detail4_verifikasi', $data );
            $this->load->view('templates_dosen/footer');
        } else {
            $this->daftarproposal_model->verifikasib4($id_proposal);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Judul Proposal berhasil ditambahkan </div>');
            redirect('dosen/daftarproposal/detail4/'.$id_proposal);
        }
    }

    public function verifikasi5($id_proposal)
    {
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['halaman'] = "Halaman Verifikasi BAB 5";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['verif5'] = $this->daftarproposal_model->getIdVerif5($id_proposal)->row_array();
        $data['status'] = $this->daftarproposal_model->getStatus()->result_array(); 
       
        
        
        $this->form_validation->set_rules('status_cust_plan', 'status_cust_plan','required');
        $this->form_validation->set_rules('catcust_plan', 'catcust_plan','required');
        $this->form_validation->set_rules('status_value_plan', 'status_value_plan','required');
        $this->form_validation->set_rules('catvalue_plan', 'catvalue_plan','required');
        $this->form_validation->set_rules('status_channels_plan', 'status_channels_plan','required');
        $this->form_validation->set_rules('catchannels_plan', 'catchannels_plan','required');
        $this->form_validation->set_rules('status_relation_plan', 'status_relation_plan','required');
        $this->form_validation->set_rules('catrelation_plan', 'catrelation_plan','required');
        $this->form_validation->set_rules('status_keyact_plan', 'status_keyact_plan','required');
        $this->form_validation->set_rules('catkeyact_plan', 'catkeyact_plan','required');
        $this->form_validation->set_rules('status_keyres_plan', 'status_keyres_plan','required');
        $this->form_validation->set_rules('catkeyres_plan', 'catkeyres_plan','required');
        $this->form_validation->set_rules('status_keypart_plan', 'status_keypart_plan','required');
        $this->form_validation->set_rules('catkeypart_plan', 'catkeypart_plan','required');
        $this->form_validation->set_rules('status_cost_plan', 'status_cost_plan','required');
        $this->form_validation->set_rules('catcost_plan', 'catcost_plan','required');
        $this->form_validation->set_rules('status_revenue_plan', 'status_revenue_plan','required');
        $this->form_validation->set_rules('catrevenue_plan', 'catrevenue_plan','required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates_dosen/header_daftarpro');
            $this->load->view('dosen/detail5_verifikasi', $data );
            $this->load->view('templates_dosen/footer');
        } else {
            $this->daftarproposal_model->verifikasib5($id_proposal);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Judul Proposal berhasil ditambahkan </div>');
            redirect('dosen/daftarproposal/detail5/'.$id_proposal);
        }
    }



  


    

}


?>
        