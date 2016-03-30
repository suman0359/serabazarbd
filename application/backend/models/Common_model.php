<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {
	
	public function insert($table_name, $data){
		return $this->db->insert($table_name, $data);
	}

	public function update($table_name, $data, $id){
        $this->db->where('id', $id);
        $this->db->update($table_name, $data);
    }

    public function delete($table_name, $id){
        $this->db->where('id', $id);
        return $this->db->delete($table_name);
    }

    public function getInfo($table_name, $id){
    	$this->db->select("*");
		$this->db->where('id', $id);
		$this->db->from($table_name);

		$query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

	public function getAllWithStatus($table_name){
		$this->db->select("*");
		$this->db->where('status', 1);
		$this->db->from($table_name);

		$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
	}
}