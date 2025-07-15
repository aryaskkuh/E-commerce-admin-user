<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_pesanan extends CI_Controller {
    public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		$this->load->model('riwayat_model');
		if (!$this->session->userdata('iduser')) {
       		redirect('login'); 
    	}
	}

	public function index()	{
		$data['riwayat'] = $this->riwayat_model->get_all_data();

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/riwayat_pesanan', $data);
		$this->load->view('templates_admin/footer');
	}

}
