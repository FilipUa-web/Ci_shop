<?php

class Products extends CI_Controller {

    function index(){

        $this->load->library('admin/admin');
        $this->load->model('admin/products_model');

        $data['products'] = $this->products_model->get_all_products();
        $name = "main";
        $this->admin->admin_view($data,$name);

    }
    function delete($id){
        $this->load->model('admin/products_model');
        $this->products_model->delete($id);
        redirect(base_url()."index.php/admin/products");
    }
}