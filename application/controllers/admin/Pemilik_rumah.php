<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik_rumah extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_rtlh')) redirect(base_url());		
		$this->load->library('template');
		$this->load->model('admin/pemilik_rumah_model');
	}
	
	public function index() {
		if($this->session->userdata('logged_in_rtlh')) {	
			$data['listData'] 		= $this->pemilik_rumah_model->select_all()->result();
			$this->template->display('admin/pemilik_rumah_view', $data);
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}

	public function savedata() {
		$this->pemilik_rumah_model->insert_data();
		$this->session->set_flashdata('notification','Save Data Penghasilan Success.');
 		redirect(site_url('admin/pemilik_rumah'));
	}

	public function updatedata() {
		$this->pemilik_rumah_model->update_data();
		$this->session->set_flashdata('notification','Update Data Penghasilan Success.');
 		redirect(site_url('admin/pemilik_rumah'));
	}

	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(4));

		if ($kode == null) {
			redirect(site_url('admin/pemilik_rumah'));
		} else {
			$this->pemilik_rumah_model->delete_data($kode);
			$this->session->set_flashdata('notification','Delete Data Penghasilan Success.');
			redirect(site_url('admin/pemilik_rumah'));
		}
	}
}
/* Location: ./application/controller/admin/Pemilik_rumah.php */