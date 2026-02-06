<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );
function tt_child_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
 	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
 	wp_enqueue_style( 'child-media', get_stylesheet_directory_uri() . '/assets/css/media.css');
 	wp_enqueue_style( 'child-animate', get_stylesheet_directory_uri() . '/assets/css/animate.css');
 	wp_enqueue_style( 'child-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
 	wp_enqueue_style( 'child-slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
 	wp_enqueue_style( 'child-slick', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');

 	wp_enqueue_script( 'min-js', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js');
 	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
 	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/wow.min.js');
   wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js');
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


//custom
	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		) );
		register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		) );
		register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		) );
	//custom

?>