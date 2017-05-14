<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('b.*, p.provinsi_nama');
		$this->db->from('rtlh_kabupaten b');
		$this->db->join('rtlh_provinsi p', 'b.provinsi_id = p.provinsi_id');
		$this->db->where('b.kabupaten_id', '3320');
		
		return $this->db->get();
	}
}
/* Location: ./application/models/admin/Kabupaten_model.php */