<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('frontend/index');
	}
	public function keranjang()
	{
		$this->load->view('frontend/keranjang');
	}
	public function login()
	{
		$this->load->view('frontend/login');
	}
	public function register()
	{
		$this->load->view('frontend/register');
	}
	public function profil()
	{
		$this->load->view('frontend/profil');
	}
	public function smartphone()
	{
		$this->load->view('frontend/smartphone');
	}
}
