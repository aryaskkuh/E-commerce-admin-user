<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_model extends CI_Model {
    private $_table = "tb_barang";    
    public function Ambil_Data($limit = null){
    if($limit){
        $this->db->limit($limit); 
    }
        return $this->db->get($this->_table)->result_array(); //mengambil data dri database
    }

    public function getbyid($id_barang){
        return $this->db->get_where($this->_table,['id_barang'=>$id_barang])->row_array();
    }
    public function updatestok($id_barang, $stok_baru){ //updatestok kurang
        $this->db->where('id_barang', $id_barang);
        $this->db->update('tb_barang', ['stok' => $stok_baru]);
    }

    public function insertdata($databarang){ //tambah produk
        return $this->db->insert('tb_barang', $databarang);
    }
    
    public function updatedata($where, $data){ //update produk
        $this->db->where($where);
        $this->db->update($this->_table, $data);
    }
}
