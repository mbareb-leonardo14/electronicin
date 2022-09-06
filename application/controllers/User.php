<?php

class User extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('McrudUser');
   }

   public function index()
   {
      $data['title'] = 'User';
      $data['user'] = $this->McrudUser->get_all_data('tbl_user')->result();
      $this->template->load('layout_admin', 'dashboard/user/index', $data);
   }

   public function add()
   {
      $data['user'] = $this->McrudUser->get_all_data('tbl_user')->result();
      $this->template->load('layout_admin', 'dashboard/user/form_edit', $data);
   }

   public function save()
   {
      $namaUser = $this->input->post('namaUser');
      $emailUser = $this->input->post('email');
      $userName = $this->input->post('userName');
      $password = $this->input->post('password');
      $dataInsert = array(['nama_lengkap' => $namaUser, 'email' => $emailUser, 'username' => $userName, 'password' => $password]);
      $this->McrudUser->insert('tbl_user', $dataInsert);

      redirect('user');
   }

   public function getid($id)
   {
      $dataWhere = array('id_user' => $id);
      $data['user'] = $this->McrudUser->get_by_id('tbl_user', $dataWhere)->row_object();
      $this->template->load('layout_admin', 'dashboard/user/form_edit', $data);
   }

   public function edit()
   {
      $id = $this->input->post('id');
      $namaUser = $this->input->post('nama');
      $email = $this->input->post('email');
      $userName = $this->input->post('username');
      $password = $this->input->post('password');
      $dataUpdate = array('nama_lengkap' => $namaUser, 'email' => $email, 'username' => $userName, 'password' => $password);
      $this->McrudUser->update('tbl_user', $dataUpdate, 'id_user', $id);

      redirect('user');
   }

   public function delete()
   {
      $id = $this->input->post('id_user');
      $this->McrudUser->delete($id);

      if ($this->db->affected_rows() > 0) {
         echo "<script>alert('Kategori deleted');</script>";
      }

      redirect('user');
   }
}