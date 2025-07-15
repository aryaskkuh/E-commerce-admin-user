<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		$this->load->model('produk_model');
		$this->load->model('riwayat_model');
	}

	public function index(){
		$data['barang'] = $this->produk_model->Ambil_Data(); //ambil smua data di database tb_barang

		$this->load->view('templates/header');
		$this->load->view('produk/index', $data);
		$this->load->view('templates/footer');
	}

	public function Addpesanan($id_barang){
		if (!$this->session->userdata('iduser')) {
       		redirect('login');  //klo blom login redirect ke hal login
    	}

		$data['barang'] = $this->produk_model->getbyid($id_barang); //ambil data barang berdasarkan idbarang
		$this->load->view('templates/header');
		$this->load->view('produk/pesan', $data);
		$this->load->view('templates/footer');
	}

	public function prosesadd(){  //add pesanan
		$nama_pemesan = $this->session->userdata('nama'); // dari nama user waktu login
		$id_barang    = $this->input->post('id_barang');
		$alamat       = $this->input->post('alamat'); 
		$jumlah       = $this->input->post('jumlah');

		$barang = $this->produk_model->getbyid($id_barang); //ambil data dri db
		$harga = $barang['harga']; //kolom harga
		$total_harga = $harga * $jumlah; //harga x jumlah

		$data = [ //data buat masuk ke tb_riwayat
			'id_user' => $this->session->userdata('iduser'),
			'nama_pemesan' => $nama_pemesan,
			'id_barang' => $id_barang,
			'alamat' => $alamat,
			'harga' => $harga,
			'jumlah' => $jumlah,
			'total_harga' => $total_harga,
			'tgl_pemesanan' => date('Y-m-d'),
			'status' => 'Belum Diproses'
		];

		if ($barang['stok'] < $jumlah) {
			$this->session->set_flashdata('error', 'Stok tidak mencukupi!');
			redirect('produk/addpesanan/' . $id_barang);
			return;
		}

		$this->riwayat_model->insertdata($data); //insert ke tb_riwayat
		// Kurangi stok barang
		$stok_baru = $barang['stok'] - $jumlah; //stok - jumlah barang yg dipesan
		$this->produk_model->updatestok($id_barang, $stok_baru);

		redirect("produk");
	}
}