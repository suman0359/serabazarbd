<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('home_model');
	}
	public function index()
	{
		$data = array();
		$data['sidebar_menu'] = $this->home_model->sidebar_menu();
		$data['catagory_list'] = $this->home_model->catagory_list();
		$data['main_content'] = $this->load->view('category/category', $data, TRUE);
		$this->load->view('home', $data);
	}

	public function category($id){
		$data = array();
		$data['sidebar_menu'] = $this->home_model->sidebar_menu();

		$data['product_list'] = $this->home_model->product_list($id);

		$data['main_content'] = $this->load->view('product/product', $data, TRUE);
		$this->load->view('home', $data);
	}
}
