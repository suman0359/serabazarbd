<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent:: __construct();

	}

	public function index()
	{
		$this->load->view('login');
	}
	public function logout(){
		$this->session->sess_destroy();

		$msg = "Successfully Loged Out";
        $this->session->set_flashdata('success', $msg);
        
        redirect(base_url()."home/login");
	}
}
