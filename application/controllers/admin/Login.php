<?php

class Login extends CI_Controller {

    function index(){
        $this->load->model('admin/login_model');
        $this->load->library('admin/admin');


        if($this->input->post('enter')){
            $username = $this->input->post('login');
            $password = $this->input->post('password');


            $auth = $this->login_model->check_auth($username,$password);
            if ($auth == TRUE){

                $data['user_info'] = $this->login_model->user_info($username);
                $ses_data = [
                    'user' => $username,
                ];

                $this->session->set_userdata($ses_data);
                $name = "first";
                $this->admin->admin_view($data,$name);

            }
            else{
                $data['error'] = 'Логін чи пароль не вірні';
                $this->load->view('admin/login_view',$data);
            }

        }


    }
    function logout(){

        $this->session->unset_userdata('user');
        redirect(base_url());
    }
}