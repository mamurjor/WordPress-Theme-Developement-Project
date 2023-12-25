<?php 

// Service Meta 
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
            if(isset($_POST['add_icon'])){
                update_post_meta(
                    $post_id,
                    'unique_key',
                    $_POST['add_icon']
                );
            }
          
        }
    }       
   
   add_action('save_post','mymetasave');


   
?>