<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('McrudProduk');
   }

   public function index()
   {
      $data['title'] = 'Produk';
      $data['produk'] = $this->db->query("
SELECT * FROM tbl_produk p INNER JOIN tbl_kategori c ON p.id_kategori=c.id_kategori
")->result();
      $data['kategori'] = $this->db->get('tbl_kategori')->result();
      $this->template->load('layout_admin', 'dashboard/produk', $data);
   }

   // public function add()
   // {
   //    $this->template->load('layout_admin', 'dashboard/kategori/form_add');
   // }

   public function save()
   {
      $produk = $this->input->post('produk');
      $foto = $this->input->post('foto');
      $harga = $this->input->post('harga');
      $dataInsert = array('nama_produk' => $produk, 'harga' => $harga);
      $this->McrudProduk->insert('tbl_produk', $dataInsert);

      redirect('produk');
   }

   public function getid($id)
   {
      $dataWhere = array('id_produk' => $id);
      $data['produk'] = $this->McrudProduk->get_by_id('tbl_produk', $dataWhere)->row_object();
      $this->template->load('layout_admin', 'dashboard/kategori/form_edit');
   }

   public function edit()
   {
      $id = $this->input->post('id');
      $namaProduk = $this->input->post('namaProduk');
      $dataUpdate = array('produk' => $namaProduk);
      $this->McrudProduk->update('tbl_produk', $dataUpdate, 'id_produk', $id);

      redirect('produk');
   }

   public function delete()
   {
      $id = $this->input->post('id_produk');
      $this->McrudProduk->delete($id);

      if ($this->db->affected_rows() > 0) {
         echo "<script>alert('Produk deleted');</script>";
      }

      redirect('produk');
   }

   public function search()
   {
      $keyword = $this->input->post('keyword');
      //       $data['kategori'] = $this->db->get('tbl_kategori')->result();
      //       $data['produk'] = $this->db->query("
      // SELECT * FROM tbl_produk p INNER JOIN tbl_kategori c ON p.id_kategori=c.id_kategori
      // ")->result();
      $data['produk'] = $this->McrudProduk->get_keyword($keyword);
      $this->template->load('layout_admin', 'dashboard/produk', $data);
   }
}