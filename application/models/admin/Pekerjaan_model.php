<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_pekerjaan');
		$this->db->order_by('pekerjaan_id', 'asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(
			'pekerjaan_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'pekerjaan_date_update'	=> date('Y-m-d'),
			'pekerjaan_time_update' => date('Y-m-d H:i:s')
		);

		$this->db->insert('rtlh_pekerjaan', $data);
	}

	function update_data() {
		$pekerjaan_id     	= $this->input->post('id');

		$data = array(
			'pekerjaan_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'pekerjaan_date_update'	=> date('Y-m-d'),
			'pekerjaan_time_update' => date('Y-m-d H:i:s')
		);

		$this->db->where('pekerjaan_id', $pekerjaan_id);
		$this->db->update('rtlh_pekerjaan', $data);
	}

	function delete_data($kode) {
		$this->db->where('pekerjaan_id', $kode);
		$this->db->delete('rtlh_pekerjaan');
	}
}
/* Location: ./application/models/admin/Pekerjaan_model.php */