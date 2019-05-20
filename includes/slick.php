<?php 
    //* Enqueue Slick's CSS and Javascript
add_action( 'wp_enqueue_scripts', 'sbslick_enqueue_slick' );

function sbslick_enqueue_slick() {
    wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/assets/frontend/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
	wp_enqueue_script( 'slickjs-init-js', get_stylesheet_directory_uri(). '/assets/frontend/js/slick-init.js', array( 'slickjs' ), '1.6.0', true );
	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/assets/frontend/css/slick.css', '1.6.0', 'all');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/assets/frontend/css/slick-theme.css', '1.6.0', 'all');
}
?>