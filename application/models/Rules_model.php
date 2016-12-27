<?php

class Rules_model extends CI_Model {
    
    public $comments_rules = array(
        
        array(
            'field' => 'author',
            'label' => 'Ваше ім я' ,
            'rules' => 'required|min_length[4]|max_length[12]'
        ),
        array(
            'field' => 'comment',
            'label' => 'Текст' ,
            'rules' => 'required|min_length[1]|max_length[4000]'
        )
    );

    public $product_rules = array(

        array(
            'field' => 'title',
            'label' => 'Назва',
            'rules' => 'required|min_length[1]'
        ),

        array(
            'field' => 'text',
            'label' => 'Зміст',
            'rules' => 'required|min_length[1]|max_length[3000]'
        ),
    );
}
 