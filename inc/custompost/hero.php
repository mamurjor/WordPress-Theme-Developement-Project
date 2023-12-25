<?php 

if(!function_exists('mycustomposthero')){
    function mycustomposthero(){

        register_post_type('hero',
        array(
            'labels' => array(
                'name' => __("my hero Section ",'learnwp'),
                'singular_name' => __('count_down','learnwp'),
                'menu_name' => __('My hero Help','learnwp'),
                'all_items' => __('MY All hero Help List','learnwp'),
                'view_item' => __('My hero Best Help','learnwp'),
                'add_new' => __('Add New Help hero','learnwp'),
                'Edit_item' => __('Add New Help hero','learnwp'),
                'update_item' => __('Add New Help hero','learnwp'),
                'search_item' => __('Add New Help hero','learnwp'),
                'not_found' => __('Help hero Nai','learnwp'),
                'not_foud_in_trash' => __('Help hero Nai','learnwp'),
            ),
            'public' => true,
            'supports' =>array(
                'title','excerpt','thumbnail'
            ),
            'capability_type' => 'post',
           
            
        ));
    }
}

add_action('init','mycustomposthero');




// My service Meta
if(!function_exists('myherometa')){
    function myherometa(){
        add_meta_box(
            'hadi_pagla_hero',
            'add_link',
            'myinputhtmlhero',
            'hero'
        );
    }
   }
   if(!function_exists('myinputhtmlhero')){
    function myinputhtmlhero($post){

           $icon= get_post_meta($post->ID,'unique_key_add_link',true);
        ?>
        <label for="addicon">add_link </label>
        <input type="text" name="add_link" id="add_link" value="<?php echo $icon;?>" >
        <?php
    }
   }

   add_action('add_meta_boxes','myherometa');
   

   if(!function_exists('mymetasavehero')){
    function mymetasavehero($post_id){
        if(isset($_POST['add_link'])){
            update_post_meta(
                $post_id,
                'unique_key_add_link',
                $_POST['add_link']
            );
        }
     
    }
}       

add_action('save_post','mymetasavehero');


