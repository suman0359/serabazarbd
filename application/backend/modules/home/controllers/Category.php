<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* this is Category Section
*/
class Category extends CI_Controller{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('common_model');
		
	}

	public function index(){
		$data = array();
		$datas = array();
		
		$datas['category_list'] = $this->common_model->getAllWithStatus('tbl_category');
		$data['main_content'] = $this->load->view('category/index', $datas, TRUE);
		$this->load->view('master', $data);
	}

	public function add(){
		$data = array();
		$data['category_name']="";
		$data['category_image']="";
		$data['parent_category_id']="";
		$data['category_type']="";
		$data['submit'] = "Add New Category";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('category_name','Category Name','trim|required');
		// $this->form_validation->set_rules('category_image','Category Image','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->model('category_model');
			$data['parent_category_list'] = $this->category_model->parent_category_list();
            $data['main_content'] = $this->load->view('category/add_form', $data, TRUE);
			$this->load->view('master', $data);
        } else {

        	/* *************************************** */

            if (@$_FILES['category_image']['size'] > 0) {
            $this->load->library('upload');


            $config = array(
            'upload_path'   => "../uploads/category/",
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size'      => '10000',
            'max_width'     => '10240',
            'max_height'    => '7680',
            'encrypt_name'  => true,
	        );

	        
            $this->upload->initialize($config);

            	if (!$this->upload->do_upload('category_image')) {
            	
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);

                    redirect($_SERVER["HTTP_REFERER"]);
                	}

                $category_image=$this->upload->data('file_name');

                $this->load->helper('file');
	            $this->load->library('image_lib');
	            $config['image_library'] = 'gd2';
	            $config['source_image']     = '../uploads/category/'.$category_image;
	            $config['new_image']        = '../uploads/category/thumb/'.$category_image;
	            $config['maintain_ratio'] = TRUE;
	            $config['width'] = 150;
	            $config['height'] = 150;
	            $config['file_name'] = $category_image;
	            
	            $this->image_lib->clear();
	            $this->image_lib->initialize($config);

	            if (!$this->image_lib->resize()) {
	               
	                $error = $this->image_lib->display_errors();
                    $this->session->set_flashdata('error', $error);

                    redirect($_SERVER["HTTP_REFERER"]);
	            }
	           
	        }

            /* *************************************** */
        	
        	$datas = array();
            $datas['category_name'] = $this->input->post('category_name');
            $datas['creator_user_id']		= $this->session->userdata('user_id');
            $datas['category_image'] = $category_image;
            $datas['category_thumb_image'] = $category_image;
        	$this->common_model->insert('tbl_category', $datas);

        	$msg = "Successfully Create New Category!!";
        	$this->session->set_flashdata('success', $msg);

        	redirect("home/category");
        }

		
	}

	public function edit($id){
		$data = array();
		$datas = array();
		$content= $this->common_model->getInfo('tbl_category', $id);
		$data['category_name']=$content->category_name;
		$data['category_image']=$content->category_image;
		$data['parent_category_id']=$content->parent_category_id;
		$data['category_type'] = $content->category_type;
		$data['submit'] = "Update Category";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('category_name','Category Name','trim|required');

		// if (empty($_FILES['category_image']['name'])){
		// 	$this->form_validation->set_rules('category_image','Category Image','trim|required');
		// }
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->model('category_model');
			$data['parent_category_list'] = $this->category_model->parent_category_list();
            $data['main_content'] = $this->load->view('category/add_form', $data, TRUE);
			$this->load->view('master', $data);
        } else {

        	/* *************************************** */

            if (@$_FILES['category_image']['size'] > 0) {
            $this->load->library('upload');

            unlink("../uploads/category/".$content->category_image);
            unlink("../uploads/category/thumb/".$content->category_thumb_image);

            $config = array(
            'upload_path'   => "../uploads/category/",
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size'      => '10000',
            'max_width'     => '10240',
            'max_height'    => '7680',
            'encrypt_name'  => true,
	        );

	        
            $this->upload->initialize($config);

            	if (!$this->upload->do_upload('category_image')) {
            	
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);

                    redirect($_SERVER["HTTP_REFERER"]);
                	}

                $category_image=$this->upload->data('file_name');

                $this->load->helper('file');
	            $this->load->library('image_lib');
	            $config['image_library'] = 'gd2';
	            $config['source_image']     = '../uploads/category/'.$category_image;
	            $config['new_image']        = '../uploads/category/thumb/'.$category_image;
	            $config['maintain_ratio'] = TRUE;
	            $config['width'] = 150;
	            $config['height'] = 150;
	            $config['file_name'] = $category_image;
	            
	            $this->image_lib->clear();
	            $this->image_lib->initialize($config);

	            if (!$this->image_lib->resize()) {
	               
	                $error = $this->image_lib->display_errors();
                    $this->session->set_flashdata('error', $error);

                    redirect($_SERVER["HTTP_REFERER"]);
	            }

	            $datas['category_image'] = $category_image;
            	$datas['category_thumb_image'] = $category_image;
	           
	        }

            /* *************************************** */
        	
        	$datas['category_type']=$this->input->post('category_type');
        	$datas['parent_category_id']=$this->input->post('parent_category_id');
            $datas['category_name'] = $this->input->post('category_name');
            $datas['creator_user_id']		= $this->session->userdata('user_id');
            

                                    
        	$this->common_model->update('tbl_category', $datas, $id);

        	$msg = "The Category Successfully Updated!!";
            $this->session->set_flashdata('success', $msg);

        	redirect("home/category");
        }
	}

	public function delete($id){

        if ($this->common_model->delete('tbl_category', $id)) {
            $msg = "Category Delete Successfully!!";
            $this->session->set_flashdata('success', $msg);
        } else {
            $msg = "There is an error, Please try again!!";
            $this->session->set_flashdata('error', $msg);
        }

        redirect("home/category");
	}

	// public function add_process(){
	// 	$this->load->library('form_validation');

	// 	$this->form_validation->set_rules('category_name', 'Category Name', 'required');
		 
	// 	if( $this->form_validation->run() == FALSE )
 //        {
 //            echo '<div class="alert error" style="color:red">' . validation_errors() . '</div>';
 //            redirect(base_url()."home/category/add");
 //        } 
 //        else
 //        {
 //            $data = array();
 //            $data['category_name'] = $this->input->post('category_name');
 //            if( $this->common_model->insert('tbl_category', $data))
 //            { 
 //                echo '<div class="alert alert-success">'."Create New Category Successfully".'</div>';
 //                redirect(base_url()."home/category");
 //            }
 //            else
 //            {
 //                echo $this->lang->line('technical_problem');
 //            }
 //        }
	// }
}