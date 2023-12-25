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
      
      
 ///$icon= get_post_meta($post->ID,'unique_key',true);


    }
}

require get_template_directory()."/inc/custompost/slider.php";
require get_template_directory()."/inc/custompost/count-down.php";
require get_template_directory()."/inc/custompost/servicesec.php";

require get_template_directory()."/inc/custompost/myallpostmeta.php";
require get_template_directory()."/inc/custompost/schedule.php";

require get_template_directory()."/inc/custompost/portfolio.php";
require get_template_directory()."/inc/custompost/client.php";

require get_template_directory()."/inc/custompost/hero.php";
require get_template_directory()."/inc/themeoption/codestar-framework.php";
require get_template_directory()."/inc/themeoption/samples/mythemeoption.php";

add_action('init','myallmenus');

if(!function_exists('myallmenus')){

// Class add in li 

function mymamaliclass($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'mymamaliclass', 1, 3);

// add Class in a 
function mymamaaiclass($atts) {
    $atts['class'] = "hadijaman";
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'mymamaaiclass');



    add_filter('wp_nav_menu_objects','myactiveclass');

    function myactiveclass($menu_items){
        $menu_items[1]->classes[] ="active";
        return $menu_items;

    }


    function myallmenus(){ 
        register_nav_menus(array(
            'top-menu' => __('Top Menu','learnwp'),
            'primary' => __('Primary','learnwp'),
            'footer-one' => __('Footer One','learnwp'),
            'Footer-two' => __('Footer Two','learnwp'),
        ));
    }
}




// post 
// page  
// Attachment 
// revision 
// Nav Menu 





