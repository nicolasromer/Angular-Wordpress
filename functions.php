<?php 

function wangular_core() {

	wp_enqueue_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/node_modules/angular/angular.min.js'
	);
	wp_enqueue_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/node_modules/angular-route/angular-route.min.js'
	);

}
add_action( 'wp_enqueue_scripts', 'wangular_core');

//remove wp's emoji support
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );