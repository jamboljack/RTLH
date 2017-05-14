<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_provinsi');
		$this->db->where('provinsi_id', '33');
		
		return $this->db->get();
	}
}
/* Location: ./application/models/admin/Provinsi_model.php */