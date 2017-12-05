<?php
/**
 * Houston Direct Auto functions and definitions
 *
 */

include_once ('includes/location_post_type.php');

function hda_add_scripts(){
    wp_enqueue_style( 'hda-style', get_template_directory_uri() . '/assets/css/custom-style.css' );
	wp_enqueue_script("jquery");
    wp_enqueue_script( 'hda-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery') );
 
}
add_action( 'wp_enqueue_scripts', 'hda_add_scripts' );