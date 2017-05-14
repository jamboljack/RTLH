<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_rtlh')) redirect(base_url());		
		$this->load->library('template');
		$this->load->model('admin/pekerjaan_model');
	}
	
	public function index() {
		if($this->session->userdata('logged_in_rtlh')) {	
			$data['listData'] 		= $this->pekerjaan_model->select_all()->result();
			$this->template->display('admin/pekerjaan_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}

	public function savedata() {
		$this->pekerjaan_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Pekerjaan Success.');
 		redirect(site_url('admin/pekerjaan'));
	}

	public function updatedata() {
		$this->pekerjaan_model->update_data();
		$this->session->set_flashdata('notification','Update Data Pekerjaan Success.');
 		redirect(site_url('admin/pekerjaan'));
	}

	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));

		if ($kode == null) {
			redirect(site_url('admin/pekerjaan'));
		} else {
			$this->pekerjaan_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Pekerjaan Success.');
			redirect(site_url('admin/pekerjaan'));
		}
	}
}
/* Location: ./application/controller/admin/Pekerjaan.php */