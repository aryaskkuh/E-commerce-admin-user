<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_produk_model extends CI_Model {
    private $_table = "tb_barang";

    public function Ambil_Data(){
        return $this->db->get($this->_table)->result_array();
    }

     public function insertdata($databarang){ //tambah produk
        return $this->db->insert('tb_barang', $databarang);
    }

    public function getbyid($id_barang){
        return $this->db->get_where($this->_table,['id_barang'=>$id_barang])->row_array();
    }
    
     public function updatedata($where, $data){ //update produk
        $this->db->where($where);
        $this->db->update($this->_table, $data);
    }
}
