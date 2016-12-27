<?php

class Login_model extends CI_Model {

    function check_auth($user,$pas){

        $this->db->where('name',$user);
        $this->db->where('password',$pas);
        $this->db->select('name');
        $query = $this->db->get('administration');
        if($query->num_rows() > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }

    }

    function user_info($user){

        $this->db->where('name',$user);
        $query = $this->db->get('administration');
        return $query->row_array();

    }

    
}


