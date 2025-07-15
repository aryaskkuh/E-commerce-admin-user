<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		if (!$this->session->userdata('iduser')) { //cek udh login apa blm. 
			redirect('login'); 
    	}
	}

	public function index()
	{
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('templates_admin/footer');
	}
}
