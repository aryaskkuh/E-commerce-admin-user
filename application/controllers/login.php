<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}

	public function index(){
		if($this->form_validation->run()==false){
			$this->load->view('login/index');
		}else{
			$this->proseslogin();
		}
	}
	
	public function proseslogin(){
		$user	=	$this->input->post('username');
		$pass	=	$this->input->post('password');
		$ceklogin=$this->db->get_where('user',['username'=>$user, 'password'=>$pass])->num_rows();

		if($ceklogin !=0){
			$user = $this->db->get_where('user', ['username' => $user, 'password'=>$pass])->row_array();
			$datalogin = [
				'iduser' => $user['id'],
				'nama' => $user['nama'],
				'role_id' => $user['role_id']
			];
			$this->session->set_userdata($datalogin);

			if ($user['role_id'] == 1) {
				redirect('admin'); //jika role id nya 1 = Admin
			} else {
				redirect('dashboard'); // Pembeli
			}
		} else {
			redirect('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('dashboard');
	}
}
