<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_login extends CI_Controller {

	public function check_login(){
		parent::__construct();
        $this->load->model('admin_model');
     //    if ($this->session->userdata('user_logged')) {
     //    	$this->session->set_userdata($userinfo);

     //        $msg = "You Are Already Loged In";
     //        $this->session->set_flashdata('success', $msg);

     //    	redirect(base_url().'home/login');
    	// }
	}
       

     function index(){
    	$username = $this->input->post('username');
		$password = $this->input->post('password');

		$password = md5($password);

		$results= $this->admin_model->check_login($username, $password);
     
        
		if (!empty($results)) {
			$userinfo = array(
				'username' 		    => 	$results->username,
				'email'				=> 	$results->email,
                'first_name' 		=> 	$results->first_name,
                'last_name' 		=> 	$results->last_name,
                'mobile_no' 		=> 	$results->mobile_no,
                'user_id' 			=> 	$results->id,
                'user_role' 		=> 	$results->user_role,
                'profile_picture' 	=> 	$results->profile_image,
                                    
                'user_logged' 		=> 	TRUE
            );

            
            $this->session->set_userdata($userinfo);
            
            $msg = "Successfully Loged In";
            $this->session->set_flashdata('success', $msg);
            redirect('home');

		}else{
			$msg = "There is an error in login, Please try again!!";
            $this->session->set_flashdata('error', $msg);
            
            redirect('home/login');
		}

    }
}
