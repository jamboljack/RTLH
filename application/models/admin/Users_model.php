<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model 
{
	function __construct() {
		parent::__construct();	
	}
		
	function select_all() {
		$this->db->select('*');
		$this->db->from('rtlh_users');
		$this->db->order_by('user_nama', 'asc');
		
		return $this->db->get();
	}
		
	function insert_data() {
		if (!empty($_FILES['userfile']['name'])) {
			$data = array(
					'user_username'		=> trim($this->input->post('username')),
					'user_password'		=> sha1(trim($this->input->post('password'))),
					'user_nip'			=> trim(strtoupper($this->input->post('nip'))),
					'user_nama'			=> trim(strtoupper($this->input->post('nama'))),
					'user_jabatan'		=> trim(strtoupper($this->input->post('jabatan'))),
					'user_level'		=> $this->input->post('lstLevel'),
					'user_status'		=> 'Aktif',
					'user_image' 		=> $this->upload->file_name,
				   	'user_date_update' 	=> date('Y-m-d'),
				   	'user_time_update' 	=> date('Y-m-d H:i:s')
				);
		} else {
			$data = array(
					'user_username'		=> trim($this->input->post('username')),
					'user_password'		=> sha1(trim($this->input->post('password'))),
					'user_nip'			=> trim(strtoupper($this->input->post('nip'))),
					'user_nama'			=> trim(strtoupper($this->input->post('nama'))),
					'user_jabatan'		=> trim(strtoupper($this->input->post('jabatan'))),
					'user_level'		=> $this->input->post('lstLevel'),
					'user_status'		=> 'Aktif',
				   	'user_date_update' 	=> date('Y-m-d'),
				   	'user_time_update' 	=> date('Y-m-d H:i:s')
				);
		}

		$this->db->insert('rtlh_users', $data);
	}

	function select_detail($user_username) {
		$this->db->select('*');
		$this->db->from('rtlh_users');
		$this->db->where('user_username', $user_username);
		
		return $this->db->get();
	}

	function update_data() {
		$user_username     	= $this->input->post('id');
		$password 			= trim($this->input->post('password'));

		if (empty($password)) {
			if (!empty($_FILES['userfile']['name'])) {
				$data = array(
					'user_nip'			=> trim(strtoupper($this->input->post('nip'))),
					'user_nama'			=> trim(strtoupper($this->input->post('nama'))),
					'user_jabatan'		=> trim(strtoupper($this->input->post('jabatan'))),
					'user_level'		=> $this->input->post('lstLevel'),
					'user_status'		=> $this->input->post('lstStatus'),
					'user_image' 		=> $this->upload->file_name,
				   	'user_date_update' 	=> date('Y-m-d'),
				   	'user_time_update' 	=> date('Y-m-d H:i:s')
				);
			} else {
				$data = array(
					'user_nip'			=> trim(strtoupper($this->input->post('nip'))),
					'user_nama'			=> trim(strtoupper($this->input->post('nama'))),
					'user_jabatan'		=> trim(strtoupper($this->input->post('jabatan'))),
					'user_level'		=> $this->input->post('lstLevel'),
					'user_status'		=> $this->input->post('lstStatus'),
				   	'user_date_update' 	=> date('Y-m-d'),
				   	'user_time_update' 	=> date('Y-m-d H:i:s')
				);
			}			
		} else {
			if (!empty($_FILES['userfile']['name'])) {
				$data = array(
					'user_password' 	=> sha1(trim($this->input->post('password'))),
					'user_nip'			=> trim(strtoupper($this->input->post('nip'))),
					'user_nama'			=> trim(strtoupper($this->input->post('nama'))),
					'user_jabatan'		=> trim(strtoupper($this->input->post('jabatan'))),
					'user_level'		=> $this->input->post('lstLevel'),
					'user_status'		=> $this->input->post('lstStatus'),
					'user_image' 		=> $this->upload->file_name,
				   	'user_date_update' 	=> date('Y-m-d'),
				   	'user_time_update' 	=> date('Y-m-d H:i:s')
				);
			} else {
				$data = array(
					'user_password' 	=> sha1(trim($this->input->post('password'))),
					'user_nip'			=> trim(strtoupper($this->input->post('nip'))),
					'user_nama'			=> trim(strtoupper($this->input->post('nama'))),
					'user_jabatan'		=> trim(strtoupper($this->input->post('jabatan'))),
					'user_level'		=> $this->input->post('lstLevel'),
					'user_status'		=> $this->input->post('lstStatus'),
				   	'user_date_update' 	=> date('Y-m-d'),
				   	'user_time_update' 	=> date('Y-m-d H:i:s')
				);
			}
		}

		$this->db->where('user_username', $user_username);
		$this->db->update('rtlh_users', $data);
	}
}
/* Location: ./application/models/admin/Users_model.php */