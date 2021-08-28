<?php

class Admdosen_model extends CI_Model{

    public function tampil_data(){
      return  $this->db->get('tb_dosen');
    }

    public function input_data(){
      $data = [
        'uname_dosen' => $this->input->post('uname_dosen'),
        'nama_dosen' => $this->input->post('nama_dosen'),
       
        
    ];
    $this->db->insert('tb_dosen', $data);
    }

    public function getUname(){
      $this->db->order_by('uname_user','ASC');
      $query = $this->db->get_where('tb_user',['hak_akses' => 2]);
       
      
      return $query;
  }
 
  public function edit_data()
  {
      $id_dosen = $this->input->post('id_dosen');
      $uname_dosen = $this->input->post('uname_dosen');
      $nama_dosen = $this->input->post('nama_dosen');
      

      $data = [
          'id_dosen' => $id_dosen,
          'uname_dosen' => $uname_dosen,
          'nama_dosen' => $nama_dosen,
          
      ];

      $this->db->where('id_dosen', $id_dosen);
      $this->db->update('tb_dosen', $data);
  } 

  public function getIdDosen($id_dosen) //mengambil 1 
    {
        $query = $this->db->get_where('tb_dosen', [
            'id_dosen' => $id_dosen
        ]);
        return $query;
    }
 
    public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function hapusDosen($id_dosen)
    {
        $this->db->where('tb_dosen.id_dosen', $id_dosen);
        $this->db->delete("tb_dosen");
    }
}

?>