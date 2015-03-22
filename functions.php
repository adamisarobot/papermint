<?php

 wp_register_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'screen');

/* Enqueue scripts and styles */
function theme_name_scripts() {
	wp_enqueue_style( 'bootstrap.min', get_stylesheet_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'screen' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap.min'), '1.0.0', 'screen' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//Add Featured Image Support
add_theme_support('post-thumbnails');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// remove admin bar for development
add_filter('show_admin_bar', '__return_false');
?>