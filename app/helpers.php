<?php
/**
 * Theme specific functions
 * Function names must be prefixed.
 *
 * @package dp
 */

/**
 * Include scripts, styles and other assets from the correct directory
 */
function dp_assets( $file ) {
	return get_template_directory_uri() . '/resources/dist/' . $file;
}

/**
 * Output scripts, styles and other assets from the correct directory
 */
function dp_get_assets( $file ) {
	echo dp_assets( $file );
}

$dp_config;

/**
 * Get configuration value
 */
function dp_config( $key = null ) {

	global $dp_config;

	$filename = get_stylesheet_directory() . '/config.json';

	// Store config in global variable
	if ( null === $dp_config ) :

		if ( file_exists( $filename ) ) :
			$dp_config_file = file_get_contents( $filename );
			$dp_config      = json_decode( $dp_config_file, true );
		else :
			$dp_config = array();
		endif;
	endif;

	// If file doenst exists return null
	if ( null === $dp_config ) {
		return null;
	}

	// If key provided return that
	if ( $key ) :
		return $dp_config[ $key ];
	else :
		return $dp_config;
	endif;
}
