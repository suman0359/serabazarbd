<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->module('home');
		$data = array();
		$data['header'] = $this->load->view('common/header', '', TRUE);
		$data['header'] = $this->load->view('common/sidebar', '', TRUE);
		$data['main_content'] = $this->load->view('main_body', '', TRUE);
		$data['footer'] = $this->load->view('common/footer', '', TRUE);
		$this->load->view('home', $data);
	}
}
