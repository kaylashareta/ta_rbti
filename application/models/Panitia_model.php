<?php

class Panitia_model extends CI_Model{

    public function tampil_data(){
      return  $this->db->get('tb_user');
    } 

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->order_by('hak_akses','asc');
        $query = $this->db->get('');
        return $query->result();
       
    }

    
    public function get_data2()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_panitia h', 'm.id_user=h.id_user', 'inner');
        $this->db->order_by('date_panitia','asc');
        $this->db->where('m.aktif', 1);

        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_panitianonaktif()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_panitia h', 'm.id_user=h.id_user', 'inner');
        $this->db->order_by('date_panitia','asc');
        $this->db->where('m.aktif', 0);

        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data3()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_juri h', 'm.id_user=h.id_user', 'inner');
        $this->db->order_by('date_juri','asc');
        $this->db->where('m.aktif', 1);
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_jurinonaktif()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_juri h', 'm.id_user=h.id_user', 'inner');
        $this->db->order_by('date_juri','asc');
        $this->db->where('m.aktif', 0);

        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data4()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_peserta h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.aktif', 1);
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_nonpeserta()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_peserta h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.aktif', 0);
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data5()
    {
        $this->db->select('*');
        $this->db->from('tb_rekening');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data6()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.status_bayar', 0);
        
        $query = $this->db->get('');
        return $query->result();
       
    }
    public function get_data8()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.status_bayar', 2);
        
        $query = $this->db->get('');
        return $query->result();
       
    }
    public function get_data9()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.status_bayar', 1);
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_finalisasi()
    {
        $this->db->select('*');
        $this->db->from('tb_master_proposal m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.finalisasi', 1);
        
        $query = $this->db->get('');
        return $query->result();
       
    }
 
    public function get_belumfinalisasi()
    {
        $this->db->select('*');
        $this->db->from('tb_master_proposal m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.finalisasi', 0);
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data7($id_user) //mengambil 1 
    {
        $query = $this->db->get_where('tb_pembayaran', [
            'id_user' => $id_user
        ]);
        return $query;
    }


    public function verifikasiberhasil($id)
    {
        $this->db->set('status_bayar', '1');
        $this->db->set('date_verif', date('Y-m-d'));
        $this->db->set('verif_by',  $this->session->uname_user);
        $this->db->where('id_user', $id);
        $this->db->update('tb_pembayaran');
    }


    public function verifikasibermasalah($id)
    {
        $this->db->set('status_bayar', '2');
        $this->db->set('date_verif', date('Y-m-d'));
        $this->db->set('verif_by',  $this->session->uname_user);
        $this->db->where('id_user', $id);
        $this->db->update('tb_pembayaran');
    }

    public function aktivasipanitia($id)
    {
        $this->db->set('aktif', '1');
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }

    public function aktivasijuri($id)
    {
        $this->db->set('aktif', '1');
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }

    public function nonaktivasijuri($id)
    {
        $this->db->set('aktif', '0');
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }

    public function aktivasipeserta($id)
    {
        $this->db->set('aktif', '1');
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }

    public function nonaktivasipeserta($id)
    {
        $this->db->set('aktif', '0');
        $this->db->where('id_user', $id);
        $this->db->update('tb_user');
    }

    

    public function tambah_panitia()
    {
        $data1 = [
            'uname_user'=>htmlspecialchars($this->input->post('uname_user',true)),
            'pass_user'=>password_hash($this->input->post('pass_user'),PASSWORD_DEFAULT),
            'hak_akses'=>2,
            'aktif'=>1,
            'date_user' => $this->input->post('date_user'),
        ];
        $this->db->insert('tb_user',$data1);

        $data =[
            'id_user'=>$this->db->insert_id(),
            'nama_panitia'=>ucwords($this->input->post('nama_panitia',true)),
            'nim_panitia'=>ucwords($this->input->post('nim_panitia',true)),
            'nohp_panitia'=>$this->input->post('nohp_panitia',true),
            'date_panitia' => $this->input->post('date_panitia'),
            'added_by' => $this->session->uname_user,
        ];
        $this->db->insert('tb_panitia',$data);
       
    }

    public function tambah_juri()
    {
        $data1 = [
            'uname_user'=>htmlspecialchars($this->input->post('uname_user',true)),
            'pass_user'=>password_hash($this->input->post('pass_user'),PASSWORD_DEFAULT),
            'hak_akses'=>3,
            'aktif'=>1,
            'date_user' => $this->input->post('date_user'),
        ];
        $this->db->insert('tb_user',$data1);

        $data =[
            'id_user'=>$this->db->insert_id(),
            'nama_juri'=>ucwords($this->input->post('nama_juri',true)),
            'nik_juri'=>$this->input->post('nik_juri',true),
            'nohp_juri'=>$this->input->post('nohp_juri',true),
            'date_juri' => $this->input->post('date_juri'),
            'added_by' => $this->session->uname_user,
        ];
        $this->db->insert('tb_juri',$data);
       
    }

    public function tambah_rekening()
    {
        $data1 = [
            'nama_bank'=>strtoupper($this->input->post('nama_bank',true)),
            'nama_rek'=>ucwords($this->input->post('nama_rek',true)),
            'no_rek'=>$this->input->post('no_rek',true),
            'added_by'=>$this->session->uname_user,
            
        ];
        $this->db->insert('tb_rekening',$data1);

       
    }

    public function get_pembayaran_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_pembayaran m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->like('uname_user',$keyword);
        $this->db->or_like('nama_transfer',$keyword);
        return $this->db->get()->result();
    }

   
    public function input_data($data){
        $this->db->insert('tb_user',$data);
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