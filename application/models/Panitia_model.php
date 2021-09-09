<?php

class Panitia_model extends CI_Model{

    public function tampil_data(){
      return  $this->db->get('tb_user');
    } 

    function Jum_pembayaran()
    {
        $this->db->group_by('status_bayar');
        $this->db->select('status_bayar');
        $this->db->select("count(*) as total");
        return $this->db->from('tb_pembayaran')
          ->get()
          ->result();
    }
    function Jum_finalisasi()
    {
        $this->db->group_by('finalisasi');
        $this->db->select('finalisasi');
        $this->db->select("count(*) as total");
        return $this->db->from('tb_master_proposal')
          ->get()
          ->result();
    }

    function Jum_tema()
    {
        $this->db->group_by('tema_proposal');
        $this->db->select('tema_proposal');
        $this->db->select("count(*) as total");
        return $this->db->from('tb_master_proposal')
          ->get()
          ->result();
    }

    function Jum_provinsi()
    {
        $this->db->group_by('prov_peserta');
        $this->db->join('tb_provinsi h', 'b.prov_peserta=h.id_prov');
        $this->db->select("h.*,prov_peserta");
        $this->db->select("count(*) as total");
        return $this->db->from('tb_peserta b')
          ->get()
          ->result();
    }

    public function getNilaiall()
	{
		$this->db->select("h.*,sum(b.nilai) nilai,
        max(case when b.id_juri = 31 then b.nilai end) 'Kre',
        max(case when b.id_juri = 17 then b.nilai end) Ori");
		$this->db->from('tb_penilaian b');
		$this->db->join('tb_master_proposal h', 'b.id_proposal=h.id_proposal', 'RIGHT');
        $this->db->order_by('nilai','desc');
		//$this->db->where('b.id_juri', $this->session->userdata('id_user'));
		$this->db->group_by('b.id_proposal');

		$query = $this->db->get('');
		return $query->result();
	}

    public function getKriteria()
	{
		$this->db->select('*');
		$this->db->from('tb_kriteria');

		$query = $this->db->get('');
		return $query->result();
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

    public function getPanitia()
    {
        $query = $this->db->get_where(
            'tb_panitia'
        );
        return $query;
       
    }
    public function getJuri()
    {
        $query = $this->db->get_where(
            'tb_juri'
        );
        return $query;
       
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
        $this->db->where('m.status_bayar', 'Belum Verifikasi');
        
        $query = $this->db->get('');
        return $query->result();
       
    }
    public function get_data8()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.status_bayar', 'Bermasalah');
        
        $query = $this->db->get('');
        return $query->result();
       
    }
    public function get_data9()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.status_bayar', 'Berhasil');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_panitia()
    {
        $this->db->select('*');
        $this->db->from('tb_panitia');
    
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_finalisasi()
    {
        $this->db->select('*');
        $this->db->from('tb_master_proposal m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.finalisasi', 'Finalisasi');
        $this->db->order_by('date_finalisasi','asc');
        
        $query = $this->db->get('');
        return $query->result();
       
    }
  
    public function get_belumfinalisasi()
    {
        $this->db->select('*');
        $this->db->from('tb_master_proposal m');
        $this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
        $this->db->where('m.finalisasi', 'Belum Finalisasi');
        
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

    public function getJudul($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_master_proposal', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

	public function getPenilaian($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_penilaian', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

	public function getStartup($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_start_up', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

	public function getBiodatatim($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_biodatatim', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

	public function getReviewproduk($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_solusi', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

	public function getPaperpitching($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_paper_pitching', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}
  
	public function getPitchdesk($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_pitchd', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

	public function getBisnisplan($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_plan', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

    public function get_template()
    {
        $this->db->select('*');
        $this->db->from('template_sertifikat');
        
        $query = $this->db->get('');
        return $query->result();
       
    }

    public function get_hakakses()
    {
          /*$this->db->select('');
            $this->db->from('tb_tema');*/
            $query = $this->db->get('hak_akses');
            
            return $query;
       
    }


    public function verifikasiberhasil($id)
    {
        $this->db->set('status_bayar', 'Berhasil');
        $this->db->set('date_verif', date('Y-m-d'));
        $this->db->set('verif_by',  $this->session->uname_user);
        $this->db->where('id_user', $id);
        $this->db->update('tb_pembayaran');
    }


    public function verifikasibermasalah($id)
    {
        $this->db->set('status_bayar', 'Bermasalah');
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

    public function tambah_template($data){
        $this->db->insert('template_sertifikat',$data);
    }

    public function getTemplate($id_template) //mengambil 1 
    {
        $query = $this->db->get_where('template_sertifikat', [
            'id_template' => $id_template
        ]);
        return $query;
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