<?php

class Peserta_model extends CI_Model{

    
    public function get_rekening()
    {
        $this->db->select('*');
        $this->db->from('tb_rekening');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_pembayaran()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        
        $query = $this->db->get('');
        return $query->result();
       
    }
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->where('tb_pembayaran','tb_pembayaran.id_user');
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function getIdVerif2($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_pembayaran', [
            'id_user' => $id_user
        ]);
        return $query; 
    }

    public function getJudul($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_master_proposal', [
            'id_user' => $id_user
        ]);
        return $query;
    } 

    public function getProposal($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_proposal', [
            'id_user' => $id_user
        ]);
        return $query;
    } 


    public function getStartup($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_start_up', [
            'id_user' => $id_user
        ]);
        return $query;
    }

    public function getBiodatatim($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_biodatatim', [
            'id_user' => $id_user
        ]);
        return $query;
    }

    public function getReviewproduk($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_solusi', [
            'id_user' => $id_user
        ]);
        return $query;
    }

    public function getPaperpitching($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_paper_pitching', [
            'id_user' => $id_user
        ]);
        return $query;
    } 

    public function getPitchdesk($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_pitchd', [
            'id_user' => $id_user
        ]);
        return $query;
    }

    public function getbisnisplan($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_plan', [
            'id_user' => $id_user
        ]);
        return $query;
    }

    public function getIdVerif1($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_pembayaran', [
            'id_user' => $id_user,
            'status'=>'status'
        ]);
        return $query;
    }

   
    public function tambah_pembayaran()
    {
        $data1 = [
            'id_user'        => $this->session->id_user,
            'tanggal_bayar ' => $this->input->post('tanggal_bayar'),
            'jumlah_bayar'   => $this->input->post('jumlah_bayar'),
            'rek_transfer'   => $this->input->post('rek_transfer'),
            'nama_transfer'  => ucwords($this->input->post('nama_transfer')),
            'bukti_transfer' => $this->_uploadImage(),
            'status_bayar'   => 0,
            'date_added'     => $this->input->post('date_added'),
        ]; 
        $this->db->insert('tb_pembayaran',$data1);
    }

    public function tambah_judulproposal()
    { 
        $data1 = [
            'id_user'        => $this->session->id_user,
            'judul_proposal' =>strtoupper($this->input->post('judul_proposal')),
            'tema_proposal'  => $this->input->post('tema_proposal'),
            'date_added'     => $this->input->post('date_added'),
            'finalisasi'     => 0,
        ]; 
        $this->db->insert('tb_master_proposal',$data1);

     
    }


    public function edit_judulproposal()
    {
        $id_user        = $this->input->post('id_user');
        $judul_proposal = $this->input->post('judul_proposal');
        $tema_proposal  = $this->input->post('tema_proposal');
        $date_updated   = $this->input->post('date_updated');
     
        $data = [
            'id_user'        => $id_user,
            'judul_proposal' => $judul_proposal,
            'tema_proposal'  => $tema_proposal,
            'date_updated'   => $date_updated,

        ];

        $this->db->where('id_user', $id_user);
        $this->db->update('tb_master_proposal', $data);
    }

    public function tambah_biodatatim()
    {
        $data1 = [
            'id_user'       => $this->session->id_user,
            'id_proposal'       => $this->session->id_proposal,
            'nama_hustler'  => strtoupper($this->input->post('nama_hustler')),
            'alamat_hustler'=> $this->input->post('alamat_hustler'),
            'telp_hustler'  => $this->input->post('telp_hustler'),
            'email_hustler' => $this->input->post('email_hustler'),
            'tugas_hustler' => $this->input->post('tugas_hustler'),
            'nama_hipster'  => strtoupper($this->input->post('nama_hipster')),
            'alamat_hipster'=> $this->input->post('alamat_hipster'),
            'telp_hipster'  => $this->input->post('telp_hipster'),
            'email_hipster' => $this->input->post('email_hipster'),
            'tugas_hipster' => $this->input->post('tugas_hipster'),
            'nama_hacker'   => strtoupper($this->input->post('nama_hacker')),
            'alamat_hacker' => $this->input->post('alamat_hacker'),
            'telp_hacker'   => $this->input->post('telp_hacker'),
            'email_hacker'  => $this->input->post('email_hacker'),
            'tugas_hacker'  => $this->input->post('tugas_hacker'),
            'date_added'    => $this->input->post('date_added'),
            'finalisasi'    => 0,
        ]; 
        $this->db->insert('tb_biodatatim',$data1);

    }

    public function tambah_bisnisplan()
    {
        $data1 = [
            'id_user'           => $this->session->id_user,
            'id_proposal'       => $this->session->id_proposal,
            'cust_plan'         =>$this->input->post('cust_plan'),
            'value_plan'        =>$this->input->post('value_plan'),
            'channels_plan'     =>$this->input->post('channels_plan'),
            'relation_plan'     =>$this->input->post('relation_plan'),
            'key_act_plan'      =>$this->input->post('key_act_plan'),
            'key_res_plan'      =>$this->input->post('key_res_plan'),
            'key_partner_plan'  =>$this->input->post('key_partner_plan'),
            'cost_plan'         =>$this->input->post('cost_plan'),
            'revenue_plan'      =>$this->input->post('revenue_plan'),
            'date_added'        => $this->input->post('date_added'),
            'finalisasi'        => 0,
        ]; 
        $this->db->insert('tb_plan',$data1);

    }

    public function finalisasiproposal($id)
    {
        $this->db->set('aktif', '1');
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }

    public function finalisasi($id_proposal)
    {
        $this->db->set('a.finalisasi', 1);
        $this->db->set('a.date_finalisasi', date("Y-m-d"));
        $this->db->where('a.id_user',  $this->session->id_user);
        $this->db->update('tb_start_up as a');
        // second
        $this->db->set('b.finalisasi', 1);
        $this->db->set('b.date_finalisasi', date("Y-m-d"));
        $this->db->where('b.id_user',  $this->session->id_user);
        $this->db->update('tb_biodatatim as b');

        $this->db->set('c.finalisasi', 1);
        $this->db->set('c.date_finalisasi', date("Y-m-d"));
        $this->db->where('c.id_user',  $this->session->id_user);
        $this->db->update('tb_solusi as c');

        $this->db->set('d.finalisasi', 1);
        $this->db->set('d.date_finalisasi', date("Y-m-d"));
        $this->db->where('d.id_user',  $this->session->id_user);
        $this->db->update('tb_paper_pitching as d');

        $this->db->set('e.finalisasi', 1);
        $this->db->set('e.date_finalisasi', date("Y-m-d"));
        $this->db->where('e.id_user',  $this->session->id_user);
        $this->db->update('tb_plan as e');
        
        $this->db->set('f.finalisasi', 1);
        $this->db->set('f.date_finalisasi', date("Y-m-d"));
        $this->db->where('f.id_user',  $this->session->id_user);
        $this->db->update('tb_pitchd as f');

        $this->db->set('g.finalisasi', 1);
        $this->db->set('g.date_finalisasi', date("Y-m-d"));
        $this->db->where('g.id_user',  $this->session->id_user);
        $this->db->update('tb_master_proposal as g');
     
    }

    
  
    public function input_data($data){
        $this->db->insert('tb_pembayaran',$data);
    }
    
    public function tambah_startup($data){
        $this->db->insert('tb_start_up',$data);
    }

    public function tambah_reviewproduk($data){
        $this->db->insert('tb_solusi',$data);
    }

    public function tambah_paperpitching($data){
        $this->db->insert('tb_paper_pitching',$data);
    }

    public function tambah_pitchdesk($data){
        $this->db->insert('tb_pitchd',$data);
    }

    public function edit_data($where,$table){
      return $this->db->get_where($table,$where);

    }

    public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}

?>