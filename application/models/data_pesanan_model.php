<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_pesanan_model extends CI_Model {
    private $_table = "riwayat";

    public function BelumDiproses() {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('tb_barang', 'tb_barang.id_barang = riwayat.id_barang');
        $this->db->where('status', 'Belum Diproses');
        return $this->db->get()->result_array();
    }

    public function ubahStatus($id, $status) { //ubah status jdi diproses
        $this->db->where('id_riwayat', $id);
        return $this->db->update($this->_table, ['status' => $status]);
    }

    public function delete($id) {
        return $this->db->delete($this->_table, ['id_riwayat' => $id]);
    }
}
