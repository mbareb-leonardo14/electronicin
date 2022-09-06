<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{

   public function index()
   {
      $data['title'] = 'Login';
      $this->load->view('dashboard/form_login', $data);
   }

   public function register()
   {
      $data['title'] = 'Register';
      $this->load->view('dashboard/form_register', $data);
   }

   public function statistik()
   {
      $data['title'] = 'Dashboard';
      $this->template->load('layout_admin', 'dashboard/index', $data);
   }

   public function dashboard()
   {
      if (empty($this->session->userdata('userName'))) {
         redirect('adminpanel');
      }

      $this->template->load('layout_admin', 'admin/dashboard');
   }

   public function kategori()
   {
      $data['title'] = 'Data Kategori';
      $data['kategori'] = $this->db->get('tbl_kategori')->result();
      $this->template->load('layout_admin', 'dashboard/kategori/index', $data);
   }

   public function metode_pembayaran()
   {
      $this->template->load('layout_admin', 'dashboard/metode_pembayaran');
   }

   // public function kurir()
   // {
   //    $data['kurir'] = $this->db->get('tbl_kurir')->result();
   //    $this->template->load('layout_admin', 'dashboard/kurir', $data);
   // }
}