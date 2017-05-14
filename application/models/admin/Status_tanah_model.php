<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_tanah_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_status_tanah');
		$this->db->order_by('status_id', 'asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(
			'status_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'status_date_update'	=> date('Y-m-d'),
			'status_time_update' 	=> date('Y-m-d H:i:s')
		);

		$this->db->insert('rtlh_status_tanah', $data);
	}

	function update_data() {
		$status_id     	= $this->input->post('id');

		$data = array(
			'status_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'status_date_update'	=> date('Y-m-d'),
			'status_time_update' 	=> date('Y-m-d H:i:s')
		);

		$this->db->where('status_id', $status_id);
		$this->db->update('rtlh_status_tanah', $data);
	}

	function delete_data($kode) {
		$this->db->where('status_id', $kode);
		$this->db->delete('rtlh_status_tanah');
	}
}
/* Location: ./application/models/admin/Status_tanah_model.php */