<?php
/**
 * WordPress security specific functions
 *
 * @package dp
 *
 * Hide WordPress version number from source code
 * Custom Login Error Message
 */

// Remove WordPress version number from both head file(generator meta tag) and RSS feeds
add_filter( 'the_generator', '__return_empty_string' );

/**
 * Remove the 'ver' query argument from the source path
 */
function dp_remove_query_string_version( $src ) {
	return remove_query_arg( 'ver', $src );
}

if ( ! is_admin() ) {
	// Remove WP version from css
	add_filter( 'style_loader_src', 'dp_remove_query_string_version', 9999 );
	// Remove Wp version from scripts
	add_filter( 'script_loader_src', 'dp_remove_query_string_version', 9999 );
}

/**
 * --------------------------------------------------------------------------
 * Custom Login Error Message
 * --------------------------------------------------------------------------
 *
 * Login errors in WordPress can be used by hackers
 * to guess whether they entered wrong username or password.
 * By creating custom login errors in WordPress you can improve your login page secure.
 */
function dp_custom_login_error_message() {
   return __( 'Oops! Incorrect input', 'dp' );
}
add_filter( 'login_errors', 'dp_custom_login_error_message' );
