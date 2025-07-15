<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_pesanan extends CI_Controller {
    public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		$this->load->model('data_pesanan_model');
		if (!$this->session->userdata('iduser')) {
			redirect('login'); 
    	}
	}

	public function index()	{
		$data['data_pesanan'] = $this->data_pesanan_model->BelumDiproses(); //ambil data pesan yng blm diproses

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pesanan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function proses($id){
		$this->data_pesanan_model->ubahStatus($id, 'Diproses');
        redirect('data_pesanan');
	}


	public function Deletepesanan($id){ //delete 
		$this->data_pesanan_model->delete($id);
        redirect('data_pesanan');	
	}
}
