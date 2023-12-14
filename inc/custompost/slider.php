<?php 

if(!function_exists('mycustompost')){
    function mycustompost(){

        register_post_type('mywonlider',
        array(
            'labels' => array(
                'name' => __("my Sliders ",'learnwp'),
                'singular_name' => __('slder','learnwp'),
                'menu_name' => __('My Service Help','learnwp'),
                'all_items' => __('MY All Service Help List','learnwp'),
                'view_item' => __('My Service Best Help','learnwp'),
                'add_new' => __('Add New Help Service','learnwp'),
                'Edit_item' => __('Add New Help Service','learnwp'),
                'update_item' => __('Add New Help Service','learnwp'),
                'search_item' => __('Add New Help Service','learnwp'),
                'not_found' => __('Help Serivce Nai','learnwp'),
                'not_foud_in_trash' => __('Help Serivce Nai','learnwp'),
            ),
            'public' => true,
            'supports' =>array(
                'title','excerpt'
            ),
            'capability_type' => 'post',
            'menu_position' => 25,
            
        ));
    }
}

add_action('init','mycustompost');