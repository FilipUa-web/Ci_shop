<?php

class Admin  {

    function admin_view($data,$name){
        $CI =& get_instance();

        if(!empty($CI->session->userdata('user'))){
            $CI->load->view('admin/divs/script_view',$data);
            $CI->load->view('admin/divs/header_view',$data);
            $CI->load->view('admin/divs/sidebar_view',$data);
            $CI->load->view('admin/divs/'.$name.'_view',$data);
            $CI->load->view('admin/divs/footer_view');
        }
        else{
            $data['error'] = '';
            $CI->load->view('admin/login_view',$data);
        }
        
        
    }

}