<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik_rumah_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_pemilik_rumah');
		$this->db->order_by('pemilik_id', 'asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(
			'pemilik_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'pemilik_date_update'	=> date('Y-m-d'),
			'pemilik_time_update' 	=> date('Y-m-d H:i:s')
		);

		$this->db->insert('rtlh_pemilik_rumah', $data);
	}

	function update_data() {
		$pemilik_id     	= $this->input->post('id');

		$data = array(
			'pemilik_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'pemilik_date_update'	=> date('Y-m-d'),
			'pemilik_time_update' 	=> date('Y-m-d H:i:s')
		);

		$this->db->where('pemilik_id', $pemilik_id);
		$this->db->update('rtlh_pemilik_rumah', $data);
	}

	function delete_data($kode) {
		$this->db->where('pemilik_id', $kode);
		$this->db->delete('rtlh_pemilik_rumah');
	}
}
/* Location: ./application/models/admin/Pemilik_rumah_model.php */