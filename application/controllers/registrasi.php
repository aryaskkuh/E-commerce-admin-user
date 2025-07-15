<?php
class registrasi extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function index(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');  //buat set aturan formnya nama, user, pw hrus diisi
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password','required');

        if ($this->form_validation->run() == FALSE){ //jika tidak valid balik ke hal register
            $this->load->view('login/registrasi');
        } else { //jika valid
            $data = array(
                'id'       => '',
                'nama'     => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role_id'  => 2
            );

            $this->user_model->insertuser($data);
            redirect('login');
        }
    }
}

