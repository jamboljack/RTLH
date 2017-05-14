<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukti_tanah_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_bukti_tanah');
		$this->db->order_by('bukti_id', 'asc');
		
		return $this->db->get();
	}

	function insert_data() {
		$data = array(
			'bukti_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'bukti_date_update'	=> date('Y-m-d'),
			'bukti_time_update' 	=> date('Y-m-d H:i:s')
		);

		$this->db->insert('rtlh_bukti_tanah', $data);
	}

	function update_data() {
		$bukti_id     	= $this->input->post('id');

		$data = array(
			'bukti_ket'			=> strtoupper(trim($this->input->post('nama'))),
			'bukti_date_update'	=> date('Y-m-d'),
			'bukti_time_update' 	=> date('Y-m-d H:i:s')
		);

		$this->db->where('bukti_id', $bukti_id);
		$this->db->update('rtlh_bukti_tanah', $data);
	}

	function delete_data($kode) {
		$this->db->where('bukti_id', $kode);
		$this->db->delete('rtlh_bukti_tanah');
	}
}
/* Location: ./application/models/admin/Bukti_tanah_model.php */