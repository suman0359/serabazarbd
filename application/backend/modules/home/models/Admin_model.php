<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function check_login($username, $password){
		if(!empty ($username) && !empty($password)){
           
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->where('status', '1');
            $this->db->from('tbl_users');
            $query = $this->db->get();
            
            if($query->num_rows() > 0){

				 
               return  $query->row();

            }else{
                return NULL;
            }


        }
        else{
            return NULL;
        }
	}
}