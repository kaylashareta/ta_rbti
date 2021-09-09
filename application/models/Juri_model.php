<?php

class Juri_model extends CI_Model
{

	public function tampil_data()
	{
		return  $this->db->get('tb_user');
	}


	public function get_finalisasi()
	{
		$this->db->select('*');
		$this->db->from('tb_master_proposal m');
		$this->db->join('tb_user h', 'm.id_user=h.id_user', 'inner');
		$this->db->where('m.finalisasi', 'Finalisasi');

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
	public function getJuri()
	{
		$this->db->select('*');
		$this->db->from('tb_juri');

		$query = $this->db->get('');
		return $query->result();
	}

	public function getNilai1juri()
	{
		$this->db->select("h.*,sum(b.nilai) nilai,
        max(case when b.id_kriteria = 1 then b.nilai end) 'Kre',
        max(case when b.id_kriteria = 2 then b.nilai end) Ori");
		$this->db->from('tb_penilaian b');
		$this->db->join('tb_master_proposal h', 'b.id_proposal=h.id_proposal', 'RIGHT' );
		$this->db->where('h.finalisasi', 'Finalisasi');
		$this->db->where('b.id_juri', $this->session->userdata('id_user'));
		$this->db->group_by('b.id_proposal');

		$query = $this->db->get('');
		return $query->result();
	}

	public function getNilaiall()
	{
		$this->db->select("h.*,sum(b.nilai) nilai,
        max(case when b.id_juri = 31 then b.nilai end) 'Kre',
        max(case when b.id_juri = 17 then b.nilai end) Ori");
		$this->db->from('tb_penilaian b');
		$this->db->join('tb_master_proposal h', 'b.id_proposal=h.id_proposal', 'right');
		$this->db->order_by('nilai','desc');
		//$this->db->where('b.id_juri', $this->session->userdata('id_user'));
		$this->db->group_by('b.id_proposal');

		$query = $this->db->get('');
		return $query->result();
	}

	public function tambah_penilaian()
	{
		$id_proposal = $this->input->post('id_proposal');
		$id_juri = $this->session->id_user;
		$nilai =  $this->input->post('nilai');
		foreach ($nilai as $key => $value) {
			$data[] = [ 
				'id_proposal' => $id_proposal,
				'id_juri' => $id_juri,
				'id_kriteria' => $key,
				'nilai' => $value,
				'date_penilaian' => date('Y-m-d'),
			]; 
		} 
		// echo "<pre>";
		// print_r($data);
		// exit;
		// for ($i = 0; $i < count($nilai); $i++) {
		//     $data[] = [
		//         'id_proposal' => $id_proposal[$i],
		//         'id_juri' => $id_juri[$i],
		//         'id_kriteria' => $id_kriteria[$i],
		//         'nilai' => $nilai[$i],
		//         'date_penilaian' => date('Y-m-d'),
		//     ];
		// }
		$this->db->insert_batch('tb_penilaian', $data);
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

	public function getProposal($id_proposal)
	{

		$this->db->select('*');
		$this->db->from('tb_master_proposal m');
		$this->db->join('tb_start_up s', 'm.id_proposal=s.id_proposal', 'inner');
		$this->db->join('tb_biodatatim b', 'm.id_proposal=b.id_proposal', 'inner');
		$this->db->join('tb_solusi o', 'm.id_proposal=o.id_proposal', 'inner');
		$this->db->join('tb_paper_pitching p', 'm.id_proposal=p.id_proposal', 'inner');
		$this->db->join('tb_plan l', 'm.id_proposal=l.id_proposal', 'inner');
		$this->db->where('tb_master_proposal.id_proposal', $id_proposal);

		$query = $this->db->get('');
		return $query->result();
	}

 
	public function getJudul($id_proposal) //mengambil 1 
	{
		$query = $this->db->get_where('tb_master_proposal', [
			'id_proposal' => $id_proposal
		]);
		return $query;
	}

	public function getPenilaian() //mengambil 1 
	{
		$this->db->select('*');
		$this->db->from('tb_penilaian m');
		$this->db->join('tb_master_proposal s', 'm.id_proposal=s.id_proposal', 'inner');
		$this->db->where('m.id_juri', $this->session->userdata('id_user'));

		$query = $this->db->get('');
		return $query->result();
	}

	public function getOnePenilaian($id_proposal) //mengambil 1 
	{
		$this->db->select('*');
		$this->db->from('tb_penilaian m');
		$this->db->join('tb_master_proposal s', 'm.id_proposal=s.id_proposal', 'inner');
		$this->db->where('m.id_juri', $this->session->userdata('id_user'));
		$this->db->where('m.id_proposal', $id_proposal);

		$query = $this->db->get('');
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



	public function input_data($data)
	{
		$this->db->insert('tb_user', $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}