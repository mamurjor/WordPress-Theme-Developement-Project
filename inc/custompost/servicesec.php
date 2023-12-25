<?php 

if(!function_exists('mycustompostser')){
    function mycustompostser(){

        register_post_type('service',
        array(
            'labels' => array(
                'name' => __("my service Section ",'learnwp'),
                'singular_name' => __('count_down','learnwp'),
                'menu_name' => __('My service Help','learnwp'),
                'all_items' => __('MY All service Help List','learnwp'),
                'view_item' => __('My service Best Help','learnwp'),
                'add_new' => __('Add New Help service','learnwp'),
                'Edit_item' => __('Add New Help service','learnwp'),
                'update_item' => __('Add New Help service','learnwp'),
                'search_item' => __('Add New Help service','learnwp'),
                'not_found' => __('Help Serivce Nai','learnwp'),
                'not_foud_in_trash' => __('Help Serivce Nai','learnwp'),
            ),
            'public' => true,
            'supports' =>array(
                'title','excerpt'
            ),
            'capability_type' => 'post',
           
            
        ));
    }
}

add_action('init','mycustompostser');




// My service Meta
if(!function_exists('mymetaser')){
    function mymetaser(){
        add_meta_box(
            'hadi_pagla_ser',
            'Add Icon',
            'myinputhtmlser',
            'service'
        );
    }
   }
   if(!function_exists('myinputhtmlser')){
    function myinputhtmlser($post){

           $icon= get_post_meta($post->ID,'unique_key_ser',true);
        ?>
        <label for="addicon">Add service Icon </label>
        <input type="text" name="add_icon_ser" id="add_icon_ser" value="<?php echo $icon;?>" >
        <?php
    }
   }

   add_action('add_meta_boxes','mymetaser');
   

   if(!function_exists('mymetasaveser')){
    function mymetasaveser($post_id){
        if(isset($_POST['add_icon_ser'])){
            update_post_meta(
                $post_id,
                'unique_count',
                $_POST['add_icon_ser']
            );
        }
     
    }
}       

add_action('save_post','mymetasaveser');


