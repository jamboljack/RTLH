<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_tanah extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_rtlh')) redirect(base_url());		
		$this->load->library('template');
		$this->load->model('admin/status_tanah_model');
	}
	
	public function index() {
		if($this->session->userdata('logged_in_rtlh')) {	
			$data['listData'] 		= $this->status_tanah_model->select_all()->result();
			$this->template->display('admin/status_tanah_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}

	public function savedata() {
		$this->status_tanah_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Penghasilan Success.');
 		redirect(site_url('admin/status_tanah'));
	}

	public function updatedata() {
		$this->status_tanah_model->update_data();
		$this->session->set_flashdata('notification','Update Data Penghasilan Success.');
 		redirect(site_url('admin/status_tanah'));
	}

	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));

		if ($kode == null) {
			redirect(site_url('admin/status_tanah'));
		} else {
			$this->status_tanah_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Penghasilan Success.');
			redirect(site_url('admin/status_tanah'));
		}
	}
}
/* Location: ./application/controller/admin/Status_tanah.php */