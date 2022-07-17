<?php

function newbie2(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'newbie2');




function add_custom_script() {
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
}

add_action( 'wp_enqueue_scripts', 'add_custom_script' );





register_nav_menus(array(
    'primary'=> __('Primary Menu'),
    'footer' =>__('Footer Menu')
));