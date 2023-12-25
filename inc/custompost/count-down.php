<?php 

if(!function_exists('mycustompostcount')){
    function mycustompostcount(){

        register_post_type('count_down',
        array(
            'labels' => array(
                'name' => __("my count down ",'learnwp'),
                'singular_name' => __('count_down','learnwp'),
                'menu_name' => __('My count down Help','learnwp'),
                'all_items' => __('MY All count down Help List','learnwp'),
                'view_item' => __('My count down Best Help','learnwp'),
                'add_new' => __('Add New Help count down','learnwp'),
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

add_action('init','mycustompostcount');




// My Count down Meta
if(!function_exists('mymetacount')){
    function mymetacount(){
        add_meta_box(
            'hadi_pagla_count',
            'Add Icon',
            'myinputhtmlccount',
            'count_down'
        );
    }
   }
   if(!function_exists('myinputhtmlccount')){
    function myinputhtmlccount($post){

           $icon= get_post_meta($post->ID,'unique_key_count',true);
        ?>
        <label for="addicon">Add Count Down Icon </label>
        <input type="text" name="add_icon_count" id="add_icon_count" value="<?php echo $icon;?>" >
        <?php
    }
   }

   add_action('add_meta_boxes','mymetacount');
   

   if(!function_exists('mymetasavecount')){
    function mymetasavecount($post_id){
        if(isset($_POST['add_icon_count'])){
            update_post_meta(
                $post_id,
                'unique_key_count',
                $_POST['add_icon_count']
            );
        }
     
    }
}       

add_action('save_post','mymetasavecount');


