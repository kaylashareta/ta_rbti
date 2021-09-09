<?php

class Auth_model extends CI_Model{

    public function tampil_data(){
      return  $this->db->get('tb_user');
    } 

    public function regist_peserta()
    {
        $data1 = [
            'uname_user'=>htmlspecialchars($this->input->post('uname_user',true)),
            'pass_user'=>password_hash($this->input->post('pass_user'),PASSWORD_DEFAULT),
            'hak_akses'=>4,
            'aktif'=>1,
            'date_user' => $this->input->post('date_user'),
        ];
        $this->db->insert('tb_user',$data1);

        $data =[
            'id_user'=>$this->db->insert_id(),
            'nama_peserta'=>ucwords($this->input->post('nama_peserta',true)),
            'nik_peserta'=>$this->input->post('nik_peserta',true),
            'nohp_peserta'=>$this->input->post('nohp_peserta',true),
            'prov_peserta'=>$this->input->post('prov_peserta',true),
            'kota_peserta'=>$this->input->post('kota_peserta',true),
            'alamat_peserta'=>$this->input->post('alamat_peserta',true),
            'institusi_peserta'=>$this->input->post('institusi_peserta'),
        ];
        $this->db->insert('tb_peserta',$data);

    } 

    public function getProv(){

        /*$this->db->select('');
        $this->db->from('tb_tema');*/
        $query = $this->db->get('tb_provinsi');
        
        return $query;
    }

    // public function getKota($id){
    //     $hasil=$this->db->query("SELECT * FROM tb_provinsi WHERE id_prov='$id'");
    //     return $hasil->result();
        /*$this->db->select('');
        $this->db->from('tb_tema');*/
        //$query = $this->db->get('tb_kota');
        
       // return $query;
    //}

    public function get_kabupaten($id_prov)
    {
        $query = $this->db->get_where('tb_kota', array('id_prov' => $id_prov));
        return $query;
    }

    public function getProposal($id_user){

        /*$this->db->select('');
        $this->db->from('tb_tema');*/
        $query = $this->db->get_where('tb_master_proposal',['id_user' => $id_user])->row_array();
        
        return $query;
    }

    public function getLogin($uname_user){

        /*$this->db->select('');
        $this->db->from('tb_tema');*/
        $query = $this->db->get_where('tb_user',['uname_user' => $uname_user])->row_array();
        
        return $query;
    }

   

}

?>