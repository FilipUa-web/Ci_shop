<?php

class Product extends CI_Controller {

    function index(){

        $this->load->library('admin/admin');
        $this->load->model('admin/products_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('rules_model');
        $this->form_validation->set_rules($this->rules_model->product_rules);


        if($this->input->post('add') && $this->form_validation->run() == TRUE){
            $new['title'] = $this->input->post('title');
            $new['text'] = $this->input->post('text');
            $new['description'] = $this->input->post('description');
            $new['date'] = $this->input->post('date');
            $new['keywords'] = $this->input->post('keywords');
            $new['price'] = $this->input->post('price');

            $config['upload_path'] = './img/articles/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload('userfile'))
            {
               // print_r($this->upload->display_errors());


            }else{

                $upload = $this->upload->data();
                $new['mini_img'] = $upload['file_name'];
            }




            $this->products_model->add($new);
            redirect(base_url()."index.php/admin/products");
        }
        else{

            $data['error']= '';
            $name = "add_product";
            $this->admin->admin_view($data,$name);
        }

    }

    function select($id){
        $this->load->library('admin/admin');
        $this->load->model('admin/products_model');
        $this->load->library('form_validation');

        if(!empty($this->session->userdata('user'))){
            $data['user'] = $this->session->userdata('user');
        }else{
            $data['user'] = $this->input->cookie('user');
        }

        $this->load->helper('form');
        $this->load->model('rules_model');
        $this->form_validation->set_rules($this->rules_model->product_rules);

        if($this->input->post('custom') && $this->form_validation->run() == TRUE){

            $new['title'] = $this->input->post('title');
            $new['text'] = $this->input->post('text');
            $new['description'] = $this->input->post('description');
            $new['date'] = $this->input->post('date');
            $new['keywords'] = $this->input->post('keywords');
            $new['price'] = $this->input->post('price');

            $config['upload_path'] = './img/articles/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload('userfile'))
            {
                // print_r($this->upload->display_errors());


            }else{

                $upload = $this->upload->data();
                $new['mini_img'] = $upload['file_name'];
            }


            $this->products_model->custom_product($id,$new);
            $data['error'] = 'Дані оновлено';
            $data['product'] = $this->products_model->select($id);
            $name = "product";
            $this->admin->admin_view($data,$name);
        }
        else{
            if($this->input->post('del')){
                $new['mini_img'] = '';
                $this->products_model->custom_product($id,$new);
            }
            $data['error'] = '';

            $data['product'] = $this->products_model->select($id);
            $name = "product";
            $this->admin->admin_view($data,$name);
        }


    }

}