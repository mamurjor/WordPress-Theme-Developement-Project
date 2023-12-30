<?php 

if(!function_exists('myprice')){
    function myprice(){

        register_post_type('mprice',
        array(
            'labels' => array(
                'name' => __("my mprice ",'learnwp'),
                'singular_name' => __('mprice','learnwp'),
                'menu_name' => __(' price','learnwp'),
                'all_items' => __(' All ','learnwp'),
                'view_item' => __('My count down Best Help','learnwp'),
                'add_new' => __('Add New ','learnwp'),
                'Edit_item' => __('Add New Help count down','learnwp'),
                'update_item' => __('Add New Help count down','learnwp'),
                'search_item' => __('Add New Help count down','learnwp'),
                'not_found' => __('Help Serivce Nai','learnwp'),
                'not_foud_in_trash' => __('Help Serivce Nai','learnwp'),
            ),
            'public' => true,
            'supports' =>array(
                'title','excerpt'
            ),
            'capability_type' => 'post',
            'menu_position' => 5,
            
        ));
    }
}

add_action('init','myprice');



