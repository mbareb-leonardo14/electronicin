<?php

class Kurir extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('McrudOngkir');
   }

   public function index()
   {
      $data['title'] = 'Data Kurir';
      $data['kurir'] = $this->McrudOngkir->get_all_data('tbl_kurir')->result();
      $this->template->load('layout_admin', 'dashboard/kurir', $data);
   }

   public function add()
   {
      $this->template->load('layout_admin', 'dashboard/kurir');
   }

   public function save()
   {
      $jenisKurir = $this->input->post('jenisKurir');
      $dataInsert = array('jenis_kurir' => $jenisKurir);
      $this->McrudOngkir->insert('tbl_kurir', $dataInsert);

      redirect('kurir');
   }

   public function getid($id)
   {
      $dataWhere = array('id_kurir' => $id);
      $data['kurir'] = $this->McrudOngkir->get_by_id('tbl_kurir', $dataWhere)->row_object();
      $this->template->load('layout_admin', 'dashboard/kurir');
   }

   public function edit()
   {
      $id = $this->input->post('id');
      $jenisKurir = $this->input->post('jenisKurir');
      $dataUpdate = array('kurir' => $jenisKurir);
      $this->McrudOngkir->update('tbl_kurir', $dataUpdate, 'id_kurir', $id);

      redirect('kurir');
   }

   public function delete()
   {
      $id = $this->input->post('id_kurir');
      $this->McrudOngkir->delete($id);

      if ($this->db->affected_rows() > 0) {
         echo "<script>alert('Kurir deleted');</script>";
      }

      redirect('kurir');
   }
}