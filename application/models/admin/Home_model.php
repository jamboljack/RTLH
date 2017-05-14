<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}

	function select_news() {
		$this->db->select('*');
		$this->db->from('langgar_news');		
		
		return $this->db->get();
	}

	function select_ukm() {
		$this->db->select('*');
		$this->db->from('langgar_ukm');
		
		return $this->db->get();
	}

	function select_galery() {
		$this->db->select('*');
		$this->db->from('langgar_galery_group');
		
		return $this->db->get();
	}

	function select_admin() {
		$this->db->select('*');
		$this->db->from('langgar_users');
		
		return $this->db->get();
	}
}
/* Location: ./application/model/admin/Home_model.php */