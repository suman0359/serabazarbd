<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public function index()
	{
		// echo "<pre>";
		// print_r($this->router->routes);
		// exit();
		
		$this->load->view('login');
	}

	public function check_login(){
		$this->load->view('login');
	}
}
