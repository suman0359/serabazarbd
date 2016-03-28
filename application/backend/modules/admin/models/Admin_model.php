<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function check_login($user_name, $password){
		if(!empty ($user_name) && !empty($password)){
           
            $this->db->where('user_name', $user_name);
            $this->db->where('password', md5($password));
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