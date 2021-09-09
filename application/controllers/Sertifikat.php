<?php
use Dompdf\Dompdf;
use Dompdf\Options;


class Sertifikat extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('sertifikat_model');
    }
    

    public function index($id_panitia){
        $data['title'] = "Cetak";
        $id= $this->session->set_userdata('id_panitia', $id_panitia);
        $data['cetakpro'] = $this->epanitia_model->cetakPro($id_panitia);
        //AND id_user='$id' AND id_user='$id' AND id_user='$id' AND id_user='$id' AND nim_plan='$id' AND id_panitia=$id_panitia

        $this->load->view('cetaksertifpanitia', $data);
  
    }
    


    public function lihatpanitia($id_panitia){
        $this->load->library('dompdf_gen');
        //$dompdf = new Dompdf(); //controller kalo pake baseurl, kalo pakei nini $this atas dimaitiin
        $this->session->set_userdata('id_panitia', $id_panitia);
        $data['title'] = "Cetak";
        $data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['cetakpanitia'] = $this->sertifikat_model->cetakSertifpanitia($id_panitia);

        $this->load->view('sertifpanitia_pdf', $data);
 
        
        $paper_size ='A4';
        $orientation='landscape';

        $html=$this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("sertif_$id_panitia.pdf", array('Attachment'=>0));

        
    }

    


   





}

?>