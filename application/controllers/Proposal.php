<?php
use Dompdf\Dompdf;
use Dompdf\Options;


class Proposal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('eproposal_model');
    }
    

    public function index($id_proposal){
        $data['title'] = "Cetak";
        $id= $this->session->set_userdata('id_proposal', $id_proposal);
        $data['cetakpro'] = $this->eproposal_model->cetakPro($id_proposal);
        //AND id_user='$id' AND id_user='$id' AND id_user='$id' AND id_user='$id' AND nim_plan='$id' AND id_proposal=$id_proposal

        $this->load->view('cetakproposal', $data);
  
    }
    


    public function cetakProposal($id_proposal){
        $this->load->library('dompdf_gen');
        //$dompdf = new Dompdf(); //controller kalo pake baseurl, kalo pakei nini $this atas dimaitiin
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title'] = "Cetak";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['cetakpro'] = $this->eproposal_model->cetakPro($id_proposal);

        
       
    
        $this->load->view('proposal_pdf', $data);
 
        
        $paper_size ='A4';
        $orientation='potrait';

        $html=$this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("eproposal_$id_proposal.pdf", array('Attachment'=>0));

        
    }

    public function downloadProposal($id_proposal){
        $this->load->library('dompdf_gen');
        //$dompdf = new Dompdf(); //controller kalo pake baseurl, kalo pakei nini $this atas dimaitiin
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['title'] = "Cetak";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['cetakpro'] = $this->eproposal_model->cetakPro($id_proposal);

        
       
    
        $this->load->view('proposal_pdf', $data);
 
        
        $paper_size ='A4';
        $orientation='potrait';

        $html=$this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("eproposal_$id_proposal.pdf", array('Attachment'=>1));

        
    }


   





}

?>