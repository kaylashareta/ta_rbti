<?php

class Admmahasiswa_model extends CI_Model{

    public function tampil_data(){
      return  $this->db->get('tb_mahasiswa');
      $this->db->order_by('nim_mhs','ASC');
      $query=$this->db->get('tb_mahasiswa');
      return $query->result();
    }

    public function input_data(){
      $data = [
        'nim_mhs' => $this->input->post('nim_mhs'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'kelas_mhs' => $this->input->post('kelas_mhs'),
        'dosen_mhs' => $this->input->post('dosen_mhs'),
        
    ];
    $this->db->insert('tb_mahasiswa', $data);
    }

    
    public function getDosen(){

    
      $query = $this->db->get('tb_dosen');
      
      return $query;
  }

    public function getKelas(){

      $query = $this->db->get('tb_kelas');
      
      return $query;
  }

  public function getNim(){
    $this->db->order_by('uname_user','ASC');
    $query = $this->db->get_where('tb_user',['hak_akses' => 3]);
     
    
    return $query;
}
 

public function edit_data()
{
    $id_mhs = $this->input->post('id_mhs');
    $nim_mhs = $this->input->post('nim_mhs');
    $nama_mhs = $this->input->post('nama_mhs');
    $kelas_mhs = $this->input->post('kelas_mhs');
    $dosen_mhs = $this->input->post('dosen_mhs');
    

    $data = [
        'id_mhs' => $id_mhs,
        'nim_mhs' => $nim_mhs,
        'nama_mhs' => $nama_mhs,
        'kelas_mhs' => $kelas_mhs,
        'dosen_mhs' => $dosen_mhs,
        
    ];

    $this->db->where('id_mhs', $id_mhs);
    $this->db->update('tb_mahasiswa', $data);
} 

public function getIdMhs($id_mhs) //mengambil 1 
  {
      $query = $this->db->get_where('tb_mahasiswa', [
          'id_mhs' => $id_mhs
      ]);
      return $query;
  }

    public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function hapusMahasiswa($id_mhs)
    {
        $this->db->where('tb_mahasiswa.id_mhs', $id_mhs);
        $this->db->delete("tb_mahasiswa");
    }
}

?>