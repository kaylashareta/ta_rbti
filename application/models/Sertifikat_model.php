<?php

    class Sertifikat_model extends CI_Model{


        public function getTemplatepeserta()
        {
            $this->db->select('*');
            $this->db->from('template_sertifikat');
            $this->db->where('template_sertifikat.keterangan', 'Peserta');
            
            $query = $this->db->get('');
            return $query->result();
           
        }

        public function getTemplatepanitia()
        {
            $this->db->select('*');
            $this->db->from('template_sertifikat');
            $this->db->where('template_sertifikat.keterangan', 'Panitia');
            
            $query = $this->db->get('');
            return $query->result(); 
           
        }

        public function cetakSertifpanitia($id_panitia){
 
            $this->db->select('*');
            $this->db->from('tb_panitia m');
            $this->db->where('m.id_panitia', $id_panitia);
    
            $query = $this->db->get('');
            return $query->result();
            
          }

 




    }   


?>