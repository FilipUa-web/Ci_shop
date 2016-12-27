<?php

class Template  {
    
    function page_view($data,$name){
        $CI =& get_instance();
        
        $CI->load->view('script_view',$data);
        $CI->load->view('header_view',$data);
        $CI->load->view('menu_view',$data);
        $CI->load->view($name.'_view',$data);
        $CI->load->view('sidebar_view',$data);
        $CI->load->view('footer_view');
    }
    
}