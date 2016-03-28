<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

	public function index()
	{
		$data = array();
		$data['main_content'] = $this->load->view('form', '', TRUE);
		$this->load->view('home', $data);
	}

	public function check_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$password = md5($password);

		$results= $this->admin_model->check_login($username, $password);

		if (!empty($results)) {
			$userinfo = array(
				'username' 		=> 	$results->username,
				'email'				=> 	$results->email,
                'first_name' 		=> 	$results->first_name,
                'last_name' 		=> 	$results->last_name,
                'mobile_no' 		=> 	$results->mobile_no,
                'user_id' 			=> 	$results->id,
                'user_role' 		=> 	$results->user_role,
                'profile_picture' 	=> 	$results->profile_picture,
                                    
                'user_logged' 		=> 	TRUE
            );
            $this->session->set_userdata($userinfo);

            $msg = "Successfully Loged In";
            $this->session->set_flashdata('success', $msg);

		}else{
			$msg = "There is an error in login, Please try again!!";
            $this->session->set_flashdata('error', $msg);
            
            redirect('./');
		}

	}
}
