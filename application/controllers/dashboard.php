<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
    public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('produk_model');
	}
	
	public function index(){
		if($this->session->userdata('iduser') != null){
			$iduser = $this->session->userdata('iduser');
			$data['getuser'] = $this->user_model->getuserbyid($iduser);
		}

		$data['barang'] = $this->produk_model->Ambil_Data(3); //melimit tampilan supaya cuma 3 data yang tampil

		$this->load->view('templates/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer', $data);
	}

}
