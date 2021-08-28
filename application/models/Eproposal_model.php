<?php

    class Eproposal_model extends CI_Model{


          public function cetakPro($id_proposal){

            $this->db->select('*');
            $this->db->from('tb_master_proposal m');
            $this->db->join('tb_start_up s', 'm.id_proposal=s.id_proposal', 'inner');
            $this->db->join('tb_biodatatim b', 'm.id_proposal=b.id_proposal', 'inner');
            $this->db->join('tb_solusi o', 'm.id_proposal=o.id_proposal', 'inner');
            $this->db->join('tb_paper_pitching p', 'm.id_proposal=p.id_proposal', 'inner');
            $this->db->join('tb_plan l', 'm.id_proposal=l.id_proposal', 'inner');
            $this->db->where('m.id_proposal', $id_proposal);
            


            /*$id_proposal = $this->session->userdata('id_proposal'); 

            $this->db->where('id_proposal', $id_proposal);*/

         
          
    
            $query = $this->db->get('');
            return $query->result();
            
          }





    }   


?>