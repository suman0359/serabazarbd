<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function getParent_category(){
        $this->db->select("*");
        $this->db->where('parent_category_id !=', NULL);
        $this->db->where('status', 1);
        $this->db->from('tbl_category');

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
		
}