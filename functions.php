<?php 

add_action('after_setup_theme','wplearntheme');

if(!function_exists('wplearntheme')){
    function wplearntheme(){


       load_theme_textdomain('learnwp',get_template_directory().'/languages');

        add_theme_support('post-thumbnails');
        //add_theme_support('post-thumbnails',array('post','service','page'));
       
        add_theme_support('post-formats',array('aside','gallery','quate','image','video','audio'));
        add_action('wp_enqueue_scripts','mywpscritp');
       if(!function_exists('mywpscritp')){
        function mywpscritp(){           
            wp_enqueue_style("bootstrap_css",
            get_parent_theme_file_uri('assets/css/bootstrap.min.css'),
            array(),
            wp_get_theme()->get('Version'),'all');
            wp_enqueue_style("nice_css",
            get_parent_theme_file_uri('assets/css/nice-select.css'),
            array(),
            wp_get_theme()->get('Version'),'all');
          
        
            wp_enqueue_style("awesome_css",
            get_parent_theme_file_uri('assets/css/font-awesome.min.css'),
            array(),
            wp_get_theme()->get('Version'),'all');


            wp_enqueue_style("icofont_css",
            get_parent_theme_file_uri('assets/css/icofont.css'),
            array(),
            wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("slicknav_css",
            get_parent_theme_file_uri('assets/css/slicknav.min.css'),
            array(),
            wp_get_theme()->get('Version'),'all');


            wp_enqueue_style("carousel_css",
            get_parent_theme_file_uri('assets/css/owl-carousel.css'),
            array(),
            wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("carousel_css",
            get_parent_theme_file_uri('assets/css/datepicker.css'),
            array(),
            wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("carousel_css",
            get_parent_theme_file_uri('assets/css/datepicker.css'),
            array(),
            wp_get_theme()->get('Version'),'all');


            wp_enqueue_style("animate_css",
            get_parent_theme_file_uri('assets/css/animate.css'),
            array(),
            wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("magnific",
            get_parent_theme_file_uri('assets/css/magnific-popup.css'),
            array(),
            wp_get_theme()->get('Version'),'all');


            wp_enqueue_style("normalize",
            get_parent_theme_file_uri('assets/css/normalize.css'),
            array(),
            wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("style_mama",
            get_parent_theme_file_uri('assets/css/style.css'),
            array(),
            wp_get_theme()->get('Version'),'all');

            wp_enqueue_style("responsive",
            get_parent_theme_file_uri('assets/css/responsive.css'),
            array(),
            wp_get_theme()->get('Version'),'all');

      
       
           
            
          
          
            wp_enqueue_style("unique_id",get_stylesheet_uri());
        
           
        // wp_add_inline_style(
        //     'unique_id',
        //     'body{ background: red; }'
        //    );

           wp_enqueue_script(
            "main",
            get_template_directory_uri()."/assets/js/main.js",
            array(),
            wp_get_theme()->get('Version'),
            true
           );

           

        //    wp_add_inline_script('main',
        //    'console.log("Allah all time help us");',
        // );

      
         }
       }       
      
       if(!function_exists('mymeta')){
        function mymeta(){
            add_meta_box(
                'hadi_pagla',
                'Add Icon',
                'myinputhtml',
                'mywonlider'
            );
        }
       }
       if(!function_exists('myinputhtml')){
        function myinputhtml($post){

               $icon= get_post_meta($post->ID,'unique_key',true);
            ?>
            <label for="addicon">Add Service Icon </label>
            <input type="text" name="add_icon" id="add_icon" value="<?php echo $icon;?>" >
            <?php
        }
       }

       add_action('add_meta_boxes','mymeta');


        if(!function_exists('mymetasave')){
            function mymetasave($post_id){
                update_post_meta(
                    $post_id,
                    'unique_key',
                    $_POST['add_icon']
                );
            }
        }       
       
       add_action('save_post','mymetasave');
 ///$icon= get_post_meta($post->ID,'unique_key',true);


    }
}

require get_template_directory()."/inc/custompost/slider.php";

// post 
// page  
// Attachment 
// revision 
// Nav Menu 





