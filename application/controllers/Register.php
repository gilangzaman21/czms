<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/login/register');		
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */