<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('d.*, b.*, k.kecamatan_nama, p.provinsi_id');
		$this->db->from('rtlh_desa d');
		$this->db->join('rtlh_kecamatan k', 'd.kecamatan_id = k.kecamatan_id');
		$this->db->join('rtlh_kabupaten b', 'k.kabupaten_id = b.kabupaten_id');
		$this->db->join('rtlh_provinsi p', 'b.provinsi_id = p.provinsi_id');
		$this->db->where('k.kabupaten_id', '3320');
		$this->db->order_by('d.kecamatan_id', 'asc');
		$this->db->order_by('d.desa_id', 'asc');
		
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

	function select_kecamatan() {
		$this->db->select('*');
		$this->db->from('rtlh_kecamatan');
		$this->db->where('kabupaten_id', '3320');
		
		return $this->db->get();
	}

	function select_desa_id($kecamatan_id) {
		$this->db->select('*');
		$this->db->from('rtlh_desa');
		$this->db->where('kecamatan_id', $kecamatan_id);
		$this->db->order_by('desa_id', 'desc');
		$this->db->limit(1);
		
		return $this->db->get();
	}

	function insert_data() {
		$kecamatan_id  	= $this->input->post('lstKecamatan');

		// Check ID by Kode Desa terakhir by Kecamatan
		$desa_id 		= $this->desa_model->select_desa_id($kecamatan_id )->row();
		if (count($desa_id) > 0) {
			$xno = $desa_id->desa_id;
			$zno = ($xno+1);
		}
		
		$data = array(
			'desa_id'			=> $zno,
			'kecamatan_id'		=> $this->input->post('lstKecamatan'),
			'desa_nama'			=> strtoupper(trim($this->input->post('nama')))
		);

		$this->db->insert('rtlh_desa', $data);
	}

	function update_data() {
		$desa_id     	= $this->input->post('id');

		$data = array(
			'desa_nama'		=> strtoupper(trim($this->input->post('nama')))
		);

		$this->db->where('desa_id', $desa_id);
		$this->db->update('rtlh_desa', $data);
	}
}
/* Location: ./application/models/admin/Desa_model.php */