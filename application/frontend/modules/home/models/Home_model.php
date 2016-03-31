<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function sidebar_menu(){
		$this->db->select('*');
		$this->db->where('status', 1);
		$this->db->from('tbl_category');

		$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
	}

	public function catagory_list(){
		$this->db->select('*');
		$this->db->where('status', 1);
		$this->db->from('tbl_category');

		$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
	}

	public function product_list($id){
		$this->db->select('*');
		$this->db->where('status', 1);
		$this->db->where('category_id', $id);
		$this->db->from('tbl_product');

		$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
	}
}