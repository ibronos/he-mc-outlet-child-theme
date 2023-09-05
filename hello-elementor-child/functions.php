<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_enqueue_style( 'style-outlet', get_stylesheet_directory_uri()  . '/outlet/outlet.css' );

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

function show_outlet_function() { 
	require get_theme_file_path() . '/outlet/outlet.php';
}
add_shortcode('show_outlet', 'show_outlet_function');