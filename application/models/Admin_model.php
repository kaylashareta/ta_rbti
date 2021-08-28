<?php

class Admin_model extends CI_Model{

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

    public function get_data1()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_admin h', 'm.id_user=h.id_user', 'inner');
        $this->db->order_by('date_admin','asc');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    

    public function getedit_data1($id_user)
    {
        $this->db->select('*');
        $this->db->from('tb_admin m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->query("SELECT * FROM tb_admin WHERE id_user='$id_user'");
        
        $id = $this->session->userdata('id_user');
       
        $this->db->where('id_user', $id);
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data2()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_panitia h', 'm.id_user=h.id_user', 'inner');
        $this->db->order_by('date_panitia','asc');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data3()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_juri h', 'm.id_user=h.id_user', 'inner');
        $this->db->order_by('date_juri','asc');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data4()
    {
        $this->db->select('*');
        $this->db->from('tb_user m');
        $this->db->join('tb_peserta h', 'm.id_user=h.id_user', 'inner');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data5()
    {
        $this->db->select('*');
        $this->db->from('tb_tema');
       
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data6()
    {
        $this->db->select('*');
        $this->db->from('hak_akses');
       
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data7()
    {
        $this->db->select('*');
        $this->db->from('tb_provinsi');
       
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data8()
    {
        $this->db->select('*');
        $this->db->from('tb_kota m');
        $this->db->join('tb_provinsi h', 'm.id_prov=h.id_prov', 'inner');
        $this->db->order_by('m.id_prov','asc');
       
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_data9()
    {
        $this->db->select('*');
        $this->db->from('tb_kecamatan');
       
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function getProv(){

        /*$this->db->select('');
        $this->db->from('tb_tema');*/
        $query = $this->db->get('tb_provinsi');
        
        return $query;
    }

    public function getKota(){

        /*$this->db->select('');
        $this->db->from('tb_tema');*/
        $query = $this->db->get('tb_kota');
        
        return $query;
    }

    public function tambah_admin()
    {
        $data1 = [
            'uname_user'=>htmlspecialchars($this->input->post('uname_user',true)),
            'pass_user'=>password_hash($this->input->post('pass_user'),PASSWORD_DEFAULT),
            'hak_akses'=>1,
            'aktif'=>1,
            'date_user' => $this->input->post('date_user'),
        ];
        $this->db->insert('tb_user',$data1);

        $data =[
            'id_user'=>$this->db->insert_id(),
            'nama_admin'=>ucwords($this->input->post('nama_admin',true)),
            'nip_admin'=>$this->input->post('nip_admin',true),
            'nohp_admin'=>$this->input->post('nohp_admin',true),
            'date_admin' => $this->input->post('date_admin'),
            'added_by' => $this->session->uname_user,
        ];
        $this->db->insert('tb_admin',$data);
       
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

    public function tambah_tema()
    {
        $data =[
            'kode_tema'=>strtoupper($this->input->post('kode_tema',true)),
            'tema_proposal'=>$this->input->post('tema_proposal',true),
        ];
        $this->db->insert('tb_tema',$data);
       
    }

    public function tambah_hakakses()
    {
        $data =[
            'hak_akses'=>$this->input->post('hak_akses',true),
            'keterangan'=>$this->input->post('keterangan',true),
        ];
        $this->db->insert('hak_akses',$data);
       
    }

    public function tambah_provinsi()
    {
        $data =[
            'prov'=>ucwords($this->input->post('prov',true)),
       ];
        $this->db->insert('tb_provinsi',$data);
       
    }

    public function tambah_kota()
    {
        $data =[
            'id_prov'=>$this->input->post('id_prov',true),
            'kota'=>ucwords($this->input->post('kota',true)),
       ];
        $this->db->insert('tb_kota',$data);
       
    }

 /*   public function get_data2()
    {
        $query = $this->db->get_where(
            'tb_dosen'
        );
        return $query;
    }

    public function get_data3()
    {
        $query = $this->db->get_where(
            'tb_mahasiswa'
        );
        return $query;
    }

    public function get_data4()
    {
        $query = $this->db->get_where(
            'tb_master_proposal'
        );
        return $query; 
    }

    public function daftarpro()
    {
        $this->db->select('');
        $this->db->from('tb_master_proposal m');
        $this->db->join('tb_mahasiswa h', 'm.nim_mhs=h.nim_mhs', 'inner');
        $this->db->order_by('datepro','desc');
        $this->db->limit('10','desc');
        
        $query = $this->db->get('');
        return $query->result();
    } */

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