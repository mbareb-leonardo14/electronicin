<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AirConditioner extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/airconditioner');
	}
}
