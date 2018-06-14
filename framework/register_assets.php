<?php

function enqueue_scripts_styles(){

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/add/bootstrap.min.css', false, 'all' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.min.css', false, 'all' );

	wp_register_script( 'main_js', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'main_js' );

}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts_styles' );
