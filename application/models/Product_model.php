<?php

class Product_model extends CI_Model {

    function get_all_products($num, $offset){

        $this->db->order_by('id','asc desc');
        $query = $this->db->get('products',$num, $offset);
        return $query->result_array();

    }
    function get_product($id){

        $this->db->where('id',$id);
        $query = $this->db->get('products');
        return $query->row_array();

    }

    function add_comment($add){

        $this->db->insert('comments',$add);

    }

    function get_comments($id){

        $this->db->order_by('id','desc');
        $this->db->where('id_product',$id);
        $query = $this->db->get('comments');
        return $query->result_array();

    }

}