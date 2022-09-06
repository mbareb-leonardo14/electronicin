<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewproduk extends CI_Controller {


	public function index()
	{
		$this->load->view('frontend/viewproduk');
	}
}
