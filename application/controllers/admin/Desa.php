<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_rtlh')) redirect(base_url());		
		$this->load->library('template');
		$this->load->model('admin/desa_model');
	}
	
	public function index() {
		if($this->session->userdata('logged_in_rtlh')) {	
			$data['listData'] 		= $this->desa_model->select_all()->result();
			$data['listProvinsi'] 	= $this->desa_model->select_provinsi()->result();
			$data['listKabupaten'] 	= $this->desa_model->select_kabupaten()->result();
			$data['listKecamatan'] 	= $this->desa_model->select_kecamatan()->result();
			$this->template->display('admin/desa_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}

	public function savedata() {
		$this->desa_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Desa Success.');
 		redirect(site_url('admin/desa'));
	}

	public function updatedata() {
		$this->desa_model->update_data();
		$this->session->set_flashdata('notification','Update Data Desa Success.');
 		redirect(site_url('admin/desa'));
	}
}
/* Location: ./application/controller/admin/Desa.php */