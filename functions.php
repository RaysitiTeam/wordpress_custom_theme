<?php
/*Plugins like feature*/

if(!function_exists('innovoskies_setup')):
    function innovoskies_setup(){
        //Let Wordpress handle the title tags
        add_theme_support('title-tag');

    }//end:innovoskies_setup
endif;

//Add-action
add_action('after_setup_theme','innovoskies_setup'); //Wordpress defined event

// Register Menus

function register_innovoskies_menus(){
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}//end:register_innovoskies_menus

//Add-action
add_action('init','register_innovoskies_menus'); //Get executed whenever the Wordpress theme gets loaded

// Add Style Sheets

function innovoskies_scripts(){
    wp_enqueue_style('innovoskies_bootstrap_styles','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); //Load Bootstrap style sheet
    wp_enqueue_style('innovoskies_styles',get_stylesheet_uri()); // This is to add the main stylesheet
    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/jquery.min.js','','',false); //Load jQuery
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js','','',false); //Load Bootstrap
    wp_enqueue_script('myApp',get_template_directory_uri().'/assets/app.js','','',true); //Load Custom JS

}//end:innovoskies_scripts

//Add-action
add_action('wp_enqueue_scripts','innovoskies_scripts');