<?php

class Kategori extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Mcrud');
   }

   public function index()
   {

      $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
      $this->template->load('layout_admin', 'dashboard/kategori/index', $data);
   }



   // kateogri
   public function airconditioner()
   {
      $this->load->view('frontend/airconditioner');
   }
   public function smartphone()
   {
      $this->load->view('frontend/smartphone');
   }
   public function television()
   {
      $this->load->view('frontend/television');
   }
   public function refrigerator()
   {
      $this->load->view('frontend/refrigerator');
   }
   public function computer()
   {
      $this->load->view('frontend/computer');
   }



   public function add()
   {
      $this->template->load('layout_admin', 'dashboard/kategori/form_add');
   }

   public function save()
   {
      $namaKategori = $this->input->post('namaKategori');
      $dataInsert = array('kategori' => $namaKategori);
      $this->Mcrud->insert('tbl_kategori', $dataInsert);

      redirect('kategori');
   }

   public function getid($id)
   {
      $dataWhere = array('id_kategori' => $id);
      $data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $dataWhere)->row_object();
      $this->template->load('layout_admin', 'dashboard/kategori/form_edit');
   }

   public function edit()
   {
      $id = $this->input->post('id');
      $namaKategori = $this->input->post('namaKategori');
      $dataUpdate = array('kategori' => $namaKategori);
      $this->Mcrud->update('tbl_kategori', $dataUpdate, 'id_kategori', $id);

      redirect('kategori');
   }

   public function delete()
   {
      $id = $this->input->post('id_kategori');
      $this->Mcrud->delete($id);

      if ($this->db->affected_rows() > 0) {
         echo "<script>alert('Kategori deleted');</script>";
      }

      redirect('kategori');
   }
}