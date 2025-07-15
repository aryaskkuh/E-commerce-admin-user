<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_pembeli extends CI_Controller {
	 public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		$this->load->model('riwayat_model');
	}

	public function index()
	{
		if (!$this->session->userdata('iduser')) {
       		redirect('login'); 
    	}
		
		$data['riwayat'] = $this->riwayat_model->Ambil_Data();
		$this->load->view('templates/header');
		$this->load->view('riwayat_pembeli/index', $data);
	}
}
