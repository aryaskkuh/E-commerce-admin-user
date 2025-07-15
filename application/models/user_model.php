<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
    private $_table = "user";
    public function Ambil_Data(){
        return $this->db->get($this->_table)->result_array();
    }
    public function Cek_User($user, $pass){
        return $this->db->get_where($this->_table, ['username'=>$user, 'password'=>$pass])->num_rows();
    }
    public function getuserbyid($iduser){
        return $this->db->get_where('user',['id'=>$iduser])->result();
    }
     public function insertuser($data){ //tambah user
        return $this->db->insert('user', $data);
    }
}