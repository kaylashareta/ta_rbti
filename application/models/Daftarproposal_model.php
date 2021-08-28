<?php

class DaftarProposal_model extends CI_Model{

  
 
    public function getJoin()
    {
        $this->db->select('*');
        $this->db->from('tb_master_proposal m');
        /*$this->db->join('tb_start_up s', 'm.id_proposal=s.id_proposal', 'inner');
        $this->db->join('tb_biodatatim b', 'm.id_proposal=b.id_proposal', 'inner');
        $this->db->join('tb_solusi o', 'm.id_proposal=b.id_proposal', 'inner');
        $this->db->join('tb_paper_pitching p', 'm.id_proposal=p.id_proposal', 'inner');
        $this->db->join('tb_plan l', 'm.id_proposal=l.id_proposal', 'inner');*/
        $this->db->join('tb_mahasiswa h', 'm.nim_mhs=h.nim_mhs', 'inner');

        $uname_user = $this->session->userdata('uname_user');
 
        $this->db->where('dosen_mhs', $uname_user);
       
  
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro1($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_start_up');
        $this->db->query("SELECT * FROM tb_start_up WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro2($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_biodatatim');
        $this->db->query("SELECT * FROM tb_biodatatim WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro3($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_solusi');
        $this->db->query("SELECT * FROM tb_solusi WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro4($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_paper_pitching');
        $this->db->query("SELECT * FROM tb_paper_pitching WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    } 

    public function detailpro5($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_plan');
        $this->db->query("SELECT * FROM tb_plan WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get(''); 
        return $query->result();
    }


    public function getStatus(){

    
      $query = $this->db->get('status'); 
      
      return $query;
      }

    public function verifikasib1($id_proposal)
    {
        $this->input->post('id_proposal');
     //   $this->input->post('nama_start_up');
		 $status_nama_su = $this->input->post('status_nama_su');
		 $catnama_su = $this->input->post('catnama_su');
     //   $this->input->post('visi_start_up');
		 $status_visi_su = $this->input->post('status_visi_su');
		 $catvisi_su = $this->input->post('catvisi_su');
     //   $this->input->post('misi_start_up');
		 $status_misi_su = $this->input->post('status_misi_su');
		 $catmisi_su = $this->input->post('catmisi_su');
     //   $this->input->post('struktur_start_up');
		 $status_struktur_su = $this->input->post('status_struktur_su');
		 $catstruktur_su = $this->input->post('catstruktur_su');
     //   $this->input->post('logo_start_up');
		 $status_logo_su = $this->input->post('status_logo_su');
		 $catlogo_su = $this->input->post('catlogo_su');
     //   $this->input->post('tagline_start_up');
		 $status_tagline_su = $this->input->post('status_tagline_su');
		 $cattagline_su = $this->input->post('cattagline_su');

        $data = [ 
            // 'id_proposal' => $id_proposal,
            //'nama_start_up' => $nama_start_up,
            'status_nama_su' => $status_nama_su,
            'catnama_su' => $catnama_su,
           // 'visi_start_up' => $visi_start_up,
            'status_visi_su' => $status_visi_su,
            'catvisi_su' => $catvisi_su,
          //  'misi_start_up' => $misi_start_up,
            'status_misi_su' => $status_misi_su,
            'catmisi_su' => $catmisi_su,
          //  'struktur_start_up' => $struktur_start_up,
            'status_struktur_su' => $status_struktur_su,
            'catstruktur_su' => $catstruktur_su,
          //  'logo_start_up' => $logo_start_up,
            'status_logo_su' => $status_logo_su,
            'catlogo_su' => $catlogo_su,
          //  'tagline_start_up' => $tagline_start_up,
            'status_tagline_su' => $status_tagline_su,
            'cattagline_su' => $cattagline_su,
            
        ];

        $this->db->where('id_proposal', $id_proposal);
        $this->db->update('tb_start_up', $data);

      } 

     

      public function getIdVerif1($id_proposal) //mengambil 1 
    {
        $query = $this->db->get_where('tb_start_up', [
            'id_proposal' => $id_proposal
        ]);
        return $query;
    }



    public function verifikasib2($id_proposal)
    {
        $this->input->post('id_proposal');
    
        $status_nama_hustler = $this->input->post('status_nama_hustler');
        $catnama_hustler = $this->input->post('catnama_hustler');
       
        $data = [ 
            'status_nama_hustler' => $status_nama_hustler,
            'catnama_hustler'     => $catnama_hustler,
            
        ];

        $this->db->where('id_proposal', $id_proposal);
        $this->db->update('tb_biodatatim', $data);

      } 

     

      public function getIdVerif2($id_proposal) //mengambil 1 
    {
        $query = $this->db->get_where('tb_biodatatim', [
            'id_proposal' => $id_proposal
        ]);
        return $query;
    }


    public function verifikasib3($id_proposal)
    {
        $this->input->post('id_proposal');
    
        $status_nama_solusi = $this->input->post('status_nama_solusi');
        $catnama_solusi = $this->input->post('catnama_solusi');
        $status_desk_solusi = $this->input->post('status_desk_solusi');
        $catdesk_solusi = $this->input->post('catdesk_solusi');
        $status_logo_solusi = $this->input->post('status_logo_solusi');
        $catlogo_solusi = $this->input->post('catlogo_solusi');
        $status_ui1_solusi = $this->input->post('status_ui1_solusi');
        $catui1_solusi = $this->input->post('catui1_solusi');
        $status_ui2_solusi = $this->input->post('status_ui2_solusi');
        $catui2_solusi = $this->input->post('catui2_solusi');
        $status_ui3_solusi = $this->input->post('status_ui3_solusi');
        $catui3_solusi = $this->input->post('catui3_solusi');
        $status_ui4_solusi = $this->input->post('status_ui4_solusi');
        $catui4_solusi = $this->input->post('catui4_solusi');
        $status_tahun_solusi = $this->input->post('status_tahun_solusi');
        $cattahun_solusi = $this->input->post('cattahun_solusi');
        $status_linkvid_solusi = $this->input->post('status_linkvid_solusi');
        $catlinkvid_solusi = $this->input->post('catlinkvid_solusi');
        $status_linkprod_solusi = $this->input->post('status_linkprod_solusi');
        $catlinkprod_solusi = $this->input->post('catlinkprod_solusi');
        $status_tekn_solusi = $this->input->post('status_tekn_solusi');
        $cattekn_solusi = $this->input->post('cattekn_solusi');

        $data = [ 
            'status_nama_solusi' => $status_nama_solusi,
            'catnama_solusi'     => $catnama_solusi,
            'status_desk_solusi' => $status_desk_solusi,
            'catdesk_solusi'     => $catdesk_solusi,
            'status_logo_solusi' => $status_logo_solusi,
            'catlogo_solusi'     => $catlogo_solusi,
            'status_ui1_solusi' => $status_ui1_solusi,
            'catui1_solusi'     => $catui1_solusi,
            'status_ui2_solusi' => $status_ui2_solusi,
            'catui2_solusi'     => $catui2_solusi,
            'status_ui3_solusi' => $status_ui3_solusi,
            'catui3_solusi'     => $catui3_solusi,
            'status_ui4_solusi' => $status_ui4_solusi,
            'catui4_solusi'     => $catui4_solusi,
            'status_tahun_solusi' => $status_tahun_solusi,
            'cattahun_solusi'     => $cattahun_solusi,
            'status_linkvid_solusi' => $status_linkvid_solusi,
            'catlinkvid_solusi'     => $catlinkvid_solusi,
            'status_linkprod_solusi' => $status_linkprod_solusi,
            'catlinkprod_solusi'     => $catlinkprod_solusi,
            'status_tekn_solusi' => $status_tekn_solusi,
            'cattekn_solusi'     => $cattekn_solusi,
            

            
        ];

        $this->db->where('id_proposal', $id_proposal);
        $this->db->update('tb_solusi', $data);

      } 

     

      public function getIdVerif3($id_proposal) //mengambil 1 
    {
        $query = $this->db->get_where('tb_solusi', [
            'id_proposal' => $id_proposal
        ]);
        return $query;
    }
    
    public function verifikasib4($id_proposal)
    {
        $this->input->post('id_proposal');
    
        $status_latarb_pp = $this->input->post('status_latarb_pp');
        $catlatarb_pp = $this->input->post('catlatarb_pp');
        $status_permas_pp = $this->input->post('status_permas_pp');
        $catpermas_pp = $this->input->post('catpermas_pp');
        $status_solusi_pp = $this->input->post('status_solusi_pp');
        $catsolusi_pp = $this->input->post('catsolusi_pp');
        $status_progres_pp = $this->input->post('status_progres_pp');
        $catprogres_pp = $this->input->post('catprogres_pp');
        $status_komp_pp = $this->input->post('status_komp_pp');
        $catkomp_pp = $this->input->post('catkomp_pp');
        $status_komp2_pp = $this->input->post('status_komp2_pp');
        $catkomp2_pp = $this->input->post('catkomp2_pp');
        $status_target_pp = $this->input->post('status_target_pp');
        $cattarget_pp = $this->input->post('cattarget_pp');
        $status_data_pp = $this->input->post('status_data_pp');
        $catdata_pp = $this->input->post('catdata_pp');
        $status_pb_pp = $this->input->post('status_pb_pp');
        $catpb_pp = $this->input->post('catpb_pp');
        $status_pb2_pp = $this->input->post('status_pb2_pp');
        $catpb2_pp = $this->input->post('catpb2_pp');
        $status_tahap_pp = $this->input->post('status_tahap_pp');
        $cattahap_pp = $this->input->post('cattahap_pp');
        $status_keleb_pp = $this->input->post('status_keleb_pp');
        $catkeleb_pp = $this->input->post('catkeleb_pp');
        
        $data = [ 
            'status_latarb_pp' => $status_latarb_pp,
            'catlatarb_pp'     => $catlatarb_pp,
            'status_permas_pp' => $status_permas_pp,
            'catpermas_pp'     => $catpermas_pp,
            'status_solusi_pp' => $status_solusi_pp,
            'catsolusi_pp'     => $catsolusi_pp,
            'status_progres_pp' => $status_progres_pp,
            'catprogres_pp'     => $catprogres_pp,
            'status_komp_pp' => $status_komp_pp,
            'catkomp_pp'     => $catkomp_pp,
            'status_komp2_pp' => $status_komp2_pp,
            'catkomp2_pp'     => $catkomp2_pp,
            'status_target_pp' => $status_target_pp,
            'cattarget_pp'     => $cattarget_pp,
            'status_data_pp' => $status_data_pp,
            'catdata_pp'     => $catdata_pp,
            'status_pb_pp' => $status_pb_pp,
            'catpb_pp'     => $catpb_pp,
            'status_pb2_pp' => $status_pb2_pp,
            'catpb2_pp'     => $catpb2_pp,
            'status_tahap_pp' => $status_tahap_pp,
            'cattahap_pp'     => $cattahap_pp,
            'status_keleb_pp' => $status_keleb_pp,
            'catkeleb_pp'     => $catkeleb_pp,
            

            
        ];

        $this->db->where('id_proposal', $id_proposal);
        $this->db->update('tb_paper_pitching', $data);

      } 

     

      public function getIdVerif4($id_proposal) //mengambil 1 
    {
        $query = $this->db->get_where('tb_paper_pitching', [
            'id_proposal' => $id_proposal
        ]);
        return $query;
    }
  
    public function verifikasib5($id_proposal)
    {
        $this->input->post('id_proposal');
    
        $status_cust_plan = $this->input->post('status_cust_plan');
        $catcust_plan = $this->input->post('catcust_plan');
        $status_value_plan = $this->input->post('status_value_plan');
        $catvalue_plan = $this->input->post('catvalue_plan');
        $status_channels_plan = $this->input->post('status_channels_plan');
        $catchannels_plan = $this->input->post('catchannels_plan');
        $status_relation_plan = $this->input->post('status_relation_plan');
        $catrelation_plan = $this->input->post('catrelation_plan');
        $status_keyact_plan = $this->input->post('status_keyact_plan');
        $catkeyact_plan = $this->input->post('catkeyact_plan');
        $status_keyres_plan = $this->input->post('status_keyres_plan');
        $catkeyres_plan = $this->input->post('catkeyres_plan');
        $status_keypart_plan = $this->input->post('status_keypart_plan');
        $catkeypart_plan = $this->input->post('catkeypart_plan');
        $status_cost_plan = $this->input->post('status_cost_plan');
        $catcost_plan = $this->input->post('catcost_plan');
        $status_revenue_plan = $this->input->post('status_revenue_plan');
        $catrevenue_plan = $this->input->post('catrevenue_plan');
      
        
        $data = [ 
            'status_cust_plan' => $status_cust_plan,
            'catcust_plan'     => $catcust_plan,
            'status_value_plan' => $status_value_plan,
            'catvalue_plan'     => $catvalue_plan,
            'status_channels_plan' => $status_channels_plan,
            'catchannels_plan'     => $catchannels_plan,
            'status_relation_plan' => $status_relation_plan,
            'catrelation_plan'     => $catrelation_plan,
            'status_keyact_plan' => $status_keyact_plan,
            'catkeyact_plan'     => $catkeyact_plan,
            'status_keyres_plan' => $status_keyres_plan,
            'catkeyres_plan'     => $catkeyres_plan,
            'status_keypart_plan' => $status_keypart_plan,
            'catkeypart_plan'     => $catkeypart_plan,
            'status_cost_plan' => $status_cost_plan,
            'catcost_plan'     => $catcost_plan,
            'status_revenue_plan' => $status_revenue_plan,
            'catrevenue_plan'     => $catrevenue_plan,
           
            

            
        ];

        $this->db->where('id_proposal', $id_proposal);
        $this->db->update('tb_plan', $data);

      } 

     

      public function getIdVerif5($id_proposal) //mengambil 1 
    {
        $query = $this->db->get_where('tb_plan', [
            'id_proposal' => $id_proposal
        ]);
        return $query;
    }
  

  

    
   
    public function detail_data($where,$table){
      return $this->db->get_where($table,$where);
 
    }


} 

?>
