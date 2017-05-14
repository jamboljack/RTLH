<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghasilan_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_penghasilan');
		$this->db->order_by('penghasilan_id', 'asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(
			'penghasilan_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'penghasilan_date_update'	=> date('Y-m-d'),
			'penghasilan_time_update' => date('Y-m-d H:i:s')
		);

		$this->db->insert('rtlh_penghasilan', $data);
	}

	function update_data() {
		$penghasilan_id     	= $this->input->post('id');

		$data = array(
			'penghasilan_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'penghasilan_date_update'	=> date('Y-m-d'),
			'penghasilan_time_update' => date('Y-m-d H:i:s')
		);

		$this->db->where('penghasilan_id', $penghasilan_id);
		$this->db->update('rtlh_penghasilan', $data);
	}

	function delete_data($kode) {
		$this->db->where('penghasilan_id', $kode);
		$this->db->delete('rtlh_penghasilan');
	}
}
/* Location: ./application/models/admin/Penghasilan_model.php */