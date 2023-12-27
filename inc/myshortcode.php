<?php 

add_action('init','myextrafunction');

if(!function_exists('myextrafunction')){
    function myextrafunction(){

        add_shortcode('code','callbackfunction');


        if(!function_exists('callbackfunction')){
            function callbackfunction($atts=[], $content=null){

                $content ="hadi is a bad boy";
                return $content;

            }
        }
    }
}


add_action('init','ektafucntiondaklam');
function ektafucntiondaklam(){

    add_shortcode('passcode','mypasscode');

    function mypasscode(){
        return "mamurjor it";
    }
}


?>