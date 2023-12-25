<?php 

if(!function_exists('myschedule')){
    function myschedule(){
        $mypostlebel = "schedule";
        register_post_type('schedule',
        array(
            'labels' => array(
                'name' => __("$mypostlebel",'learnwp'),
                'singular_name' => __($mypostlebel,'learnwp'),
                'menu_name' => __($mypostlebel,'learnwp'),
                'all_items' => __($mypostlebel.'List','learnwp'),
                'view_item' => __($mypostlebel,'learnwp'),
                'add_new' => __($mypostlebel,'learnwp'),
                'Edit_item' => __('Add New'.$mypostlebel,'learnwp'),
                'update_item' => __('Add New '.$mypostlebel,'learnwp'),
                'search_item' => __('Add New Help service','learnwp'),
                'not_found' => __('Help Serivce Nai','learnwp'),
                'not_foud_in_trash' => __('Help Serivce Nai','learnwp'),
            ),
            'public' => true,
            'supports' =>array(
                'title','excerpt','editor'
            ),
            'capability_type' => 'post',
           
            
        ));
    }
}

add_action('init','myschedule');







