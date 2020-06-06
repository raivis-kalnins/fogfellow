<?php
/**
 * Enqueue files for the frontend
 *
 * @package dp
 */

/**
 * Register scripts and styles and enqueue them
 *
 * @package dp
 */
function dp_enqueue_scripts_and_styles() {

	$style_time = file_exists( get_stylesheet_directory() . '/resources/dist/css/style.min.css' ) ? filemtime( get_stylesheet_directory() . '/resources/dist/css/style.min.css' ) : false;

	// Register style
	wp_register_style( 'css_swiper', dp_assets( 'vendor/swiper/css/swiper.min.css' ), array(), $style_time );
	wp_register_style( 'css_rellax', dp_assets( 'vendor/rellax/css/main.min.css' ), array(), $style_time );
	wp_register_style( 'css_fancybox', dp_assets( 'vendor/fancybox/jquery.fancybox.min.css' ), array(), $style_time );
	wp_register_style( 'styles', dp_assets( 'css/style.min.css?'.$style_time ), array(), $style_time );

	// Register scripts
	wp_register_script( 'polyfill', '//cdn.polyfill.io/v2/polyfill.min.js?callback=polyfillsLoaded', array(), '', true );
	wp_register_script( 'js_swiper', dp_assets( 'vendor/swiper/js/swiper.min.js' ), array(), '', true );
	wp_register_script( 'js_rellax', dp_assets( 'vendor/rellax/rellax.min.js' ), array(), '', true );
	wp_register_script( 'js_jquery', dp_assets( 'js/vendor/jquery.min.js' ), array(), '', true );
	wp_register_script( 'js_lazy', dp_assets( 'js/vendor/jquery.lazy.min.js' ), array(), '', true );
	wp_register_script( 'js_fancybox', dp_assets( 'vendor/fancybox/jquery.fancybox.min.js' ), array(), $style_time );
	wp_register_script( 'scripts', dp_assets( 'js/scripts.min.js' ), array( 'polyfill' ), '', true );

	// Enqueue scripts
	wp_enqueue_script( 'polyfill' );
	wp_enqueue_script( 'js_swiper' );
	wp_enqueue_script( 'js_rellax' );
	wp_enqueue_script( 'js_jquery' );
	wp_enqueue_script( 'js_lazy' );
	wp_enqueue_script( 'js_fancybox' );
	wp_enqueue_script( 'scripts' );

	// Enqueue styles
	wp_enqueue_style( 'css_swiper' );
	wp_enqueue_style( 'css_fancybox' );
	wp_enqueue_style( 'styles' );

	// Conditionally enqueue gutenberg styles.
	if ( ! is_singular() || is_front_page() ) :
		wp_deregister_style( 'wp-block-library' );
	else :
		wp_register_style( 'gutenberg-styles', get_stylesheet_directory_uri() . '/resources/dist/css/gutenberg.min.css', '', '', 'all' );
		wp_enqueue_style( 'gutenberg-styles' );
	endif;

}
add_action( 'wp_enqueue_scripts', 'dp_enqueue_scripts_and_styles' );

// Remove emoji scripts & styles
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Remove default emoji support
 */
function dp_remove_emoji() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'dp_remove_emoji' );

/**
 * Defer scripts
 */
function dp_defer_scripts( $tag, $handle, $src ) {

	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array(
		'polyfill',
		'admin-bar',
	);

	if ( in_array( $handle, $defer_scripts ) ) {
		return '<script src="' . $src . '" defer="defer" async="async" type="text/javascript"></script>' . "\n";
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'dp_defer_scripts', 10, 3 );
