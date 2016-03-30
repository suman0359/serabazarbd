<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* this is product Section
*/
class Product extends CI_Controller{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('common_model');
		
	}

	public function index(){
		$data = array();
		$datas = array();
		
		$datas['product_list'] 	= $this->common_model->getAllWithStatus('tbl_product');
		$data['main_content'] 	= $this->load->view('product/index', $datas, TRUE);
		$this->load->view('master', $data);
	}

	public function add(){
		$data = array();
		$data['product_name']="";
		$data['product_quantity']="";
		$data['price']="";
		$data['sell_price']="";
		$data['product_image']="";
		$data['submit'] = "Add New product";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('product_name','product Name','trim|required');
		// $this->form_validation->set_rules('product_image','product Image','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->model('category_model');

			$data['category_list'] = $this->common_model->getAllWithStatus('tbl_category');
			$data['parent_category_list'] = $this->category_model->getParent_category();
			
            $data['main_content'] = $this->load->view('product/add_form', $data, TRUE);
			$this->load->view('master', $data);
        } else {

        	/* *************************************** */

            if (@$_FILES['product_image']['size'] > 0) {
            $this->load->library('upload');


            $config = array(
            'upload_path'   => "../uploads/product/",
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '10000',
            'max_width'     => '10240',
            'max_height'    => '7680',
            'encrypt_name'  => true,
	        );

	        
            $this->upload->initialize($config);

            	if (!$this->upload->do_upload('product_image')) {
            	
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);

                    redirect($_SERVER["HTTP_REFERER"]);
                	}

                $product_image=$this->upload->data('file_name');

                $this->load->helper('file');
	            $this->load->library('image_lib');
	            $config['image_library'] = 'gd2';
	            $config['source_image']     = '../uploads/product/'.$product_image;
	            $config['new_image']        = '../uploads/product/thumb/'.$product_image;
	            $config['maintain_ratio'] = TRUE;
	            $config['width'] = 150;
	            $config['height'] = 150;
	            $config['file_name'] = $product_image;
	            
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
            $datas['product_name'] 			= $this->input->post('product_name');
            $datas['product_quantity'] 		= $this->input->post('product_quantity');
            $datas['price'] 				= $this->input->post('price');
            $datas['sell_price'] 			= $this->input->post('sell_price');
			$datas['category_id'] 			= $this->input->post('category_id');
			$datas['parent_category_id'] 	= $this->input->post('parent_category_id');
			$datas['creator_user_id']		= $this->session->userdata('user_id');
            $datas['product_image'] 		= $product_image;
            $datas['product_thumb_image'] 	= $product_image;
        	$this->common_model->insert('tbl_product', $datas);

        	$msg = "Successfully Create New product!!";
        	$this->session->set_flashdata('success', $msg);

        	redirect("home/product");
        }

		
	}

	public function edit($id){
		$data = array();
		$content= $this->common_model->getInfo('tbl_product', $id);
		$data['product_name']		= $content->product_name;
		$data['product_quantity']	= $content->product_quantity;
		$data['price']				= $content->price;
		$data['sell_price']			= $content->sell_price;
		$data['category_id']		= $content->category_id;
		$data['parent_category_id']	= $content->parent_category_id;
		$data['product_image']		= $content->product_image;
		$data['submit'] 			= "Update product";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('product_name','product Name','trim|required');

		if (empty($_FILES['product_image']['name'])){
			$this->form_validation->set_rules('product_image','product Image','trim|required');
		}
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->model('category_model');

			$data['category_list'] = $this->common_model->getAllWithStatus('tbl_category');
			$data['parent_category_list'] = $this->category_model->getParent_category();
			
            $data['main_content'] = $this->load->view('product/add_form', $data, TRUE);
			$this->load->view('master', $data);
        } else {

        	/* *************************************** */

            if (@$_FILES['product_image']['size'] > 0) {
            $this->load->library('upload');


            $config = array(
            'upload_path'   => "../uploads/product/",
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '10000',
            'max_width'     => '10240',
            'max_height'    => '7680',
            'encrypt_name'  => true,
	        );

	        
            $this->upload->initialize($config);

            	if (!$this->upload->do_upload('product_image')) {
            	
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);

                    redirect($_SERVER["HTTP_REFERER"]);
                	}

                $product_image=$this->upload->data('file_name');

                $this->load->helper('file');
	            $this->load->library('image_lib');
	            $config['image_library'] = 'gd2';
	            $config['source_image']     = '../uploads/product/'.$product_image;
	            $config['new_image']        = '../uploads/product/thumb/'.$product_image;
	            $config['maintain_ratio'] = TRUE;
	            $config['width'] = 150;
	            $config['height'] = 150;
	            $config['file_name'] = $product_image;
	            
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
            $datas['product_name'] = $this->input->post('product_name');
            $datas['creator_user_id']		= $this->session->userdata('user_id');
            $datas['product_image'] = $product_image;
            $datas['product_thumb_image'] = $product_image;

                                    
        	$this->common_model->update('tbl_product', $datas, $id);

        	$msg = "The product Successfully Updated!!";
            $this->session->set_flashdata('success', $msg);

        	redirect("home/product");
        }
	}

	public function delete($id){

        if ($this->common_model->delete('tbl_product', $id)) {
            $msg = "product Delete Successfully!!";
            $this->session->set_flashdata('success', $msg);
        } else {
            $msg = "There is an error, Please try again!!";
            $this->session->set_flashdata('error', $msg);
        }

        redirect("home/product");
	}

	// public function add_process(){
	// 	$this->load->library('form_validation');

	// 	$this->form_validation->set_rules('product_name', 'product Name', 'required');
		 
	// 	if( $this->form_validation->run() == FALSE )
 //        {
 //            echo '<div class="alert error" style="color:red">' . validation_errors() . '</div>';
 //            redirect(base_url()."home/product/add");
 //        } 
 //        else
 //        {
 //            $data = array();
 //            $data['product_name'] = $this->input->post('product_name');
 //            if( $this->common_model->insert('tbl_product', $data))
 //            { 
 //                echo '<div class="alert alert-success">'."Create New product Successfully".'</div>';
 //                redirect(base_url()."home/product");
 //            }
 //            else
 //            {
 //                echo $this->lang->line('technical_problem');
 //            }
 //        }
	// }
}