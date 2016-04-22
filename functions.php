<?php 

function wangular_scripts() {

	wp_register_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/node_modules/angular/angular.min.js'
	);
	wp_register_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/node_modules/angular-route/angular-route.min.js'
	);
	wp_register_script(
		'angularjs-sanitize',
		get_stylesheet_directory_uri() . '/node_modules/angular-sanitize/angular-sanitize.min.js'
	);
	wp_enqueue_script(
		'wangular-scripts',
		get_stylesheet_directory_uri() . '/js/scripts.js',
		array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
	);
	wp_localize_script(
		'wangular-scripts',
		'wangular_localized',
		array(
				'partials' => trailingslashit( get_template_directory_uri() ) . 'partials/'
			)
	);
}
add_action( 'wp_enqueue_scripts', 'wangular_scripts' );

//remove wp's emoji support
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );