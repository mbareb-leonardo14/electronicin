<?php

class Mfrontend extends CI_Model{
    public function get_all_kategori() {
        return $this->db->get('tbl_kategori');
    }

    public function get_all_poduk_terbaru(){
        $this->db->order_by('id_produk', 'DESC');
        $this->db->limit(6);
        return $this->db->get('tbl_produk');
    }
}

?>