<?php 

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



?>