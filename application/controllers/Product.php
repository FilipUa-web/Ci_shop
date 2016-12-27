<?php
class Product extends CI_Controller
{
    function view($id)
    {

        $this->load->library('form_validation');
        $this->load->model('product_model');
        $data['product_info'] = $this->product_model->get_product($id);
        $data['comments'] = $this->product_model->get_comments($id);
        $name = 'product';

        if($this->input->post('send')) {

            $this->load->helper('form');
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->comments_rules);

            $secret = "6Lfk2A4UAAAAAGFC24E0GpgiZ9rjtH6IYeXAFcPw";
            $user = $_POST['g-recaptcha-response'];
            $json = file_get_contents("https://www.google.com/recaptcha/api/siteverify?=secret=".$secret."&response=".$user);
            $result = json_decode($json,true);
           // print_r($json);


            if($this->form_validation->run() == True){

                $comment_data['author'] = $this->input->post('author');
                $comment_data['comment'] = $this->input->post('comment');
                $comment_data['id_product'] = $this->input->post('id_product');
                $comment_data['date'] = date('Y-m-d');
                $comment_data['time'] = date('H:i');
                
                $this->product_model->add_comment($comment_data);
                redirect(base_url().'index.php/product/view/'.$id);
            }
        }
        
        $this->template->page_view($data,$name);
    }
}
?>