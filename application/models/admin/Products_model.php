<?php

class Products_model extends CI_Model {

    function get_all_products(){

        $this->db->order_by('id','desc');
        $query = $this->db->get('products');
        return $query->result_array();
    }

    function select($id){
        $this->db->where('id',$id);
        $query = $this->db->get('products');
        return $query->row_array();
    }

    function custom_product($id,$new){
        $this->db->where('id',$id);
        $this->db->update('products',$new);
    }
    function add($new){
        $this->db->insert('products',$new);
    }

    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('products');
    }



}