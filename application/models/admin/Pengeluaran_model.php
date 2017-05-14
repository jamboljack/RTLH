<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_pengeluaran');
		$this->db->order_by('pengeluaran_id', 'asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(
			'pengeluaran_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'pengeluaran_date_update'	=> date('Y-m-d'),
			'pengeluaran_time_update' => date('Y-m-d H:i:s')
		);

		$this->db->insert('rtlh_pengeluaran', $data);
	}

	function update_data() {
		$pengeluaran_id     	= $this->input->post('id');

		$data = array(
			'pengeluaran_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'pengeluaran_date_update'	=> date('Y-m-d'),
			'pengeluaran_time_update' => date('Y-m-d H:i:s')
		);

		$this->db->where('pengeluaran_id', $pengeluaran_id);
		$this->db->update('rtlh_pengeluaran', $data);
	}

	function delete_data($kode) {
		$this->db->where('pengeluaran_id', $kode);
		$this->db->delete('rtlh_pengeluaran');
	}
}
/* Location: ./application/models/admin/Pengeluaran_model.php */