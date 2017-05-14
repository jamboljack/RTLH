<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('k.*, b.kabupaten_nama, p.provinsi_id');
		$this->db->from('rtlh_kecamatan k');
		$this->db->join('rtlh_kabupaten b', 'k.kabupaten_id = b.kabupaten_id');
		$this->db->join('rtlh_provinsi p', 'b.provinsi_id = p.provinsi_id');
		$this->db->where('k.kabupaten_id', '3320');
		$this->db->order_by('k.kecamatan_id', 'asc');
		
		return $this->db->get();
	}

	function select_provinsi() {
		$this->db->select('*');
		$this->db->from('rtlh_provinsi');
		$this->db->where('provinsi_id', '33');
		
		return $this->db->get();
	}

	function select_kabupaten() {
		$this->db->select('*');
		$this->db->from('rtlh_kabupaten');
		$this->db->where('kabupaten_id', '3320');
		
		return $this->db->get();
	}

	function select_kecamatan_id() {
		$this->db->select('*');
		$this->db->from('rtlh_kecamatan');
		$this->db->where('kabupaten_id', '3320');
		$this->db->order_by('kecamatan_id', 'desc');
		$this->db->limit(1);
		
		return $this->db->get();
	}

	function insert_data() {
		// Check ID by Kode Kabupaten terakhir
		$kecamatan_id = $this->kecamatan_model->select_kecamatan_id()->row();
		if (count($kecamatan_id) > 0) {
			$xno = $kecamatan_id->kecamatan_id;
			$zno = ($xno+1);
		}

		$data = array(
			'kecamatan_id'		=> $zno,
			'kabupaten_id'		=> $this->input->post('lstKabupaten'),
			'kecamatan_nama'	=> strtoupper(trim($this->input->post('nama')))
		);

		$this->db->insert('rtlh_kecamatan', $data);
	}

	function update_data() {
		$kecamatan_id     	= $this->input->post('id');

		$data = array(
			'kecamatan_nama'	=> strtoupper(trim($this->input->post('nama')))
		);

		$this->db->where('kecamatan_id', $kecamatan_id);
		$this->db->update('rtlh_kecamatan', $data);
	}
}
/* Location: ./application/models/admin/Kecamatan_model.php */