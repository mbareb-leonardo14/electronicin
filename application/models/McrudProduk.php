<?php

class McrudProduk extends CI_Model
{

   public function get_all_data($tabel)
   {
      $q = $this->db->get($tabel);
      return $q;
   }

   public function insert($tabel, $data)
   {
      $this->db->insert($tabel, $data);
   }

   public function get_by_id($tabel, $id)
   {
      return $this->db->get_where($tabel, $id);
   }

   public function update($tabel, $data, $pk, $id)
   {
      $this->db->where($pk, $id);
      $this->db->update($tabel, $data);
   }

   public function get_keyword($keyword)
   {
      $this->db->select('*');
      $this->db->from('tbl_produk');
      $this->db->like('nama_produk', $keyword);
      $this->db->or_like('id_kategori', $keyword);
      return $this->db->get()->result();
   }

   public function delete($id)
   {
      $this->db->where('id_produk', $id);
      $this->db->delete('tbl_produk');
   }
}