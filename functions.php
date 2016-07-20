<?php

add_theme_support( 'post-thumbnails' );
add_image_size('slides', 400, 400, true) ;


function hps_theme_styles() {

	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'hps_theme_styles' );

function hps_theme_js() {

  wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/owlcarousel/owl.carousel.js', array('jquery'), true );

}
add_action( 'wp_enqueue_scripts', 'hps_theme_js' );

?>
