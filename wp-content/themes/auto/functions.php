<?php 

add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap');
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');


  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), 'null', true);

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>