<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_produk extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		$this->load->model('data_produk_model');
		if (!$this->session->userdata('iduser')) {
			redirect('login'); 
    	}
	}

	public function index()	{
		$data['barang'] = $this->data_produk_model->Ambil_Data(); //buat nampilin produk

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_produk', $data);
		$this->load->view('templates_admin/footer');
	}

	public function prosesadd(){  //add barang
		$nama_barang	= $this->input->post('nama_barang');
		$harga			= $this->input->post('harga');
		$stok			= $this->input->post('stok');
		$gambar			= $this->input->post('gambar');
		
		$databarang = array ("nama_barang" => $nama_barang,
							"harga" => $harga,
							"stok"=> $stok,
							"gambar" => $gambar);

		$prosestambah = $this->data_produk_model->insertdata($databarang);
		if($prosestambah){
			redirect("data_produk");
		}
	}

	public function Updatebarang($id){ //update barang
		$data['barang'] = $this->data_produk_model->getbyid($id);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update', $data);
		$this->load->view('templates_admin/footer');
	}

	public function prosesupdate(){
		$id_barang 		= $this->input->post('id_barang');
		$nama_barang 	= $this->input->post('nama_barang');
		$harga 			= $this->input->post('harga');
		$stok 			= $this->input->post('stok');
		$gambar 		= $this->input->post('gambar');

		$where = array('id_barang'=>$id_barang);
		$dataupdate = array ('nama_barang'=> $nama_barang,
							'harga'=> $harga,
							'stok'=> $stok,
							'gambar'=> $gambar);

		$this->data_produk_model->updatedata($where, $dataupdate);
		redirect('data_produk');
	}


	public function Deletebarang($id){ //delete 
		$this->db->delete('tb_barang', ['id_barang'=>$id]);
		redirect('data_produk');
	}
}
