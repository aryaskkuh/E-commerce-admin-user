<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_model extends CI_Model {
    private $_table = "riwayat";
    public function Ambil_Data(){
        $iduser = $this->session->userdata('iduser'); 
        $this->db->select("*"); //innerjoin
        $this->db->from("riwayat"); //tabel awal
        $this->db->join("tb_barang", "tb_barang.id_barang = riwayat.id_barang"); //tabel yg di joinin
        $this->db->where('id_user', $iduser);
        return $this->db->get()->result_array();
    }
    
     public function insertdata($datapesan){ //tambah pesanan
        return $this->db->insert('riwayat', $datapesan);
    }

    public function get_all_data(){
        $this->db->select("*");
        $this->db->from("riwayat");
        $this->db->join("tb_barang", "tb_barang.id_barang = riwayat.id_barang");
        return $this->db->get()->result_array();
    }

}