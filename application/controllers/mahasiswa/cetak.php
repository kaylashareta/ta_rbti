<?php
use Dompdf\Dompdf;
use Dompdf\Options;

class Cetak extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('eproposal_model');
        if($this->session->userdata('hak_akses')!='3'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }
    

    public function index(){
        $data['title'] = "Cetak";
        $id= $this->session->set_userdata('id_proposal', $id_proposal);
        $printp['proposal'] = $this->db->query("SELECT tb_master_proposal.id_proposal, tb_master_proposal.judul_proposal,tb_master_proposal.nim_mhs, tb_start_up.nama_start_up,tb_start_up.visi_start_up,tb_start_up.misi_start_up,tb_start_up.struktur_start_up,tb_start_up.logo_start_up,
        tb_start_up.tagline_start_up,tb_biodatatim.nama_hustler,tb_biodatatim.alamat_hustler,tb_biodatatim.telp_hustler,tb_biodatatim.email_hustler,tb_biodatatim.tugas_hustler,
        tb_biodatatim.nama_hipster,tb_biodatatim.alamat_hipster,tb_biodatatim.telp_hipster,tb_biodatatim.email_hipster,tb_biodatatim.tugas_hipster, 
        tb_biodatatim.nama_hacker,tb_biodatatim.alamat_hacker,tb_biodatatim.telp_hacker,tb_biodatatim.email_hacker,tb_biodatatim.tugas_hacker,
        tb_solusi.nama_solusi,tb_solusi.deskripsi_solusi,tb_solusi.logo_solusi,tb_solusi.prev_ui1_solusi,tb_solusi.prev_ui2_solusi,tb_solusi.prev_ui3_solusi,tb_solusi.prev_ui4_solusi,tb_solusi.tahun_buat_solusi,tb_solusi.link_vid_solusi,tb_solusi.link_prod_solusi,tb_solusi.teknologi_solusi,
        tb_paper_pitching.latar_belakang_pp,tb_paper_pitching.permasalahan_pp,tb_paper_pitching.solusi_pp,tb_paper_pitching.progres_pp,tb_paper_pitching.kompetitor_pp,tb_paper_pitching.kompetitor2_pp,tb_paper_pitching.target_pp,tb_paper_pitching.data_pp,tb_paper_pitching.proses_bisnis_pp,tb_paper_pitching.proses_bisnis2_pp,tb_paper_pitching.tahapan_pp,tb_paper_pitching.kelebihan_pp,
        tb_plan.cust_plan,tb_plan.value_plan,tb_plan.channels_plan,tb_plan.relation_plan,tb_plan.key_act_plan,tb_plan.key_res_plan,tb_plan.key_partner_plan,tb_plan.cost_plan,tb_plan.revenue_plan,
        tb_start_up.nim_start_up,tb_biodatatim.nim_biodata,tb_solusi.nim_solusi,tb_paper_pitching.nim_pp,tb_plan.nim_plan,tb_master_proposal.id_proposal,tb_master_proposal.judul_proposal,tb_master_proposal.nim_mhs,tb_master_proposal.id_proposal,
        FROM tb_master_proposal
        INNER JOIN tb_start_up ON tb_start_up.id_proposal=tb_master_proposal.id_proposal
        INNER JOIN tb_biodatatim ON tb_biodatatim.id_proposal=tb_master_proposal.id_proposal
        INNER JOIN tb_solusi ON tb_solusi.id_proposal=tb_master_proposal.id_proposal
        INNER JOIN tb_paper_pitching ON tb_paper_pitching.id_proposal=tb_master_proposal.id_proposal
        INNER JOIN tb_plan ON tb_plan.id_proposal=tb_master_proposal.id_proposal
        WHERE nim_mhs='$id' AND nim_start_up='$id' AND nim_biodata='$id' AND nim_solusi='$id' AND nim_pp='$id' AND nim_plan='$id' AND id_proposal=$id_proposal")->result();
        
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/cetakproposal/', $data);
        $this->load->view('templates_mahasiswa/footer');
    }
    


    public function cetakProposal($id_proposal){
        $this->load->library('dompdf_gen');
        //$dompdf = new Dompdf(); //controller kalo pake baseurl, kalo pakei nini $this atas dimaitiin
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title'] = "Cetak";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['cetakpro'] = $this->eproposal_model->cetakPro($id_proposal);

        
       
        
        /*$data['title'] = "Cetak";
        $id= $this->session->set_userdata('id_proposal', $id_proposal);*/
        /*$cetakp['cetakpro'] = $this->db->query("SELECT tb_start_up.nama_start_up,tb_start_up.visi_start_up,tb_start_up.misi_start_up,tb_start_up.struktur_start_up,tb_start_up.logo_start_up,
        tb_start_up.tagline_start_up,tb_biodatatim.nama_hustler,tb_biodatatim.alamat_hustler,tb_biodatatim.telp_hustler,tb_biodatatim.email_hustler,tb_biodatatim.tugas_hustler,
        tb_biodatatim.nama_hipster,tb_biodatatim.alamat_hipster,tb_biodatatim.telp_hipster,tb_biodatatim.email_hipster,tb_biodatatim.tugas_hipster, 
        tb_biodatatim.nama_hacker,tb_biodatatim.alamat_hacker,tb_biodatatim.telp_hacker,tb_biodatatim.email_hacker,tb_biodatatim.tugas_hacker,
        tb_solusi.nama_solusi,tb_solusi.deskripsi_solusi,tb_solusi.logo_solusi,tb_solusi.prev_ui1_solusi,tb_solusi.prev_ui2_solusi,tb_solusi.prev_ui3_solusi,tb_solusi.prev_ui4_solusi,tb_solusi.tahun_buat_solusi,tb_solusi.link_vid_solusi,tb_solusi.link_prod_solusi,tb_solusi.teknologi_solusi,
        tb_paper_pitching.latar_belakang_pp,tb_paper_pitching.permasalahan_pp,tb_paper_pitching.solusi_pp,tb_paper_pitching.progres_pp,tb_paper_pitching.kompetitor_pp,tb_paper_pitching.kompetitor2_pp,tb_paper_pitching.target_pp,tb_paper_pitching.data_pp,tb_paper_pitching.proses_bisnis_pp,tb_paper_pitching.proses_bisnis2_pp,tb_paper_pitching.tahapan_pp,tb_paper_pitching.kelebihan_pp,
        tb_plan.cust_plan,tb_plan.value_plan,tb_plan.channels_plan,tb_plan.relation_plan,tb_plan.key_act_plan,tb_plan.key_res_plan,tb_plan.key_partner_plan,tb_plan.cost_plan,tb_plan.revenue_plan,
        tb_start_up.nim_start_up,tb_biodatatim.nim_biodata,tb_solusi.nim_solusi,tb_paper_pitching.nim_pp,tb_plan.nim_plan
        FROM tb_start_up
        INNER JOIN tb_biodatatim ON tb_biodatatim.nim_biodata=tb_start_up.nim_start_up
        INNER JOIN tb_solusi ON tb_solusi.nim_solusi=tb_start_up.nim_start_up
        INNER JOIN tb_paper_pitching ON tb_paper_pitching.nim_pp=tb_start_up.nim_start_up
        INNER JOIN tb_plan ON tb_plan.nim_plan=tb_start_up.nim_start_up
        WHERE nim_start_up='$id' AND nim_biodata='$id' AND nim_solusi='$id' AND nim_pp='$id' AND nim_plan='$id'")->result();*/

        $this->load->view('mahasiswa/proposal_pdf', $data);

        
        $paper_size ='A4';
        $orientation='potrait';

        //ini controller kalo pake baseurl
         /* $options = $dompdf->getOptions();
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);

        $html=$this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);

        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("eproposal_rbti.pdf", array('Attachment'=>0));*/


        $html=$this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("eproposal_rbti.pdf", array('Attachment'=>0));

       
    }


   





}

?>