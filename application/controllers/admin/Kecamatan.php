<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_rtlh')) redirect(base_url());		
		$this->load->library('template');
		$this->load->model('admin/kecamatan_model');
	}
	
	public function index() {
		if($this->session->userdata('logged_in_rtlh')) {	
			$data['listData'] 		= $this->kecamatan_model->select_all()->result();
			$data['listProvinsi'] 	= $this->kecamatan_model->select_provinsi()->result();
			$data['listKabupaten'] 	= $this->kecamatan_model->select_kabupaten()->result();
			$this->template->display('admin/kecamatan_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}

	public function savedata() {
		$this->kecamatan_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Kecamatan Success.');
 		redirect(site_url('admin/kecamatan'));
	}

	public function updatedata() {
		$this->kecamatan_model->update_data();
		$this->session->set_flashdata('notification','Update Data Kecamatan Success.');
 		redirect(site_url('admin/kecamatan'));
	}
}
/* Location: ./application/controller/admin/Kecamatan.php */