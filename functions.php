<?php 

add_action('after_setup_theme','wplearntheme');

if(!function_exists('wplearntheme')){
    function wplearntheme(){

        //add_theme_support('post-thumbnails');
        add_theme_support('post-thumbnails',array('post','service','page'));
       add_action('wp_enqueue_scripts','mywpscritp');
       if(!function_exists('mywpscritp')){
        function mywpscritp(){
            wp_enqueue_style("unique_id",get_stylesheet_uri());
            wp_enqueue_style("main_css",
            get_parent_theme_file_uri('assets/css/main.css'),
            array(),
            wp_get_theme()->get('Version'),
            'all'

        );
      
         }
       }
    }
}

