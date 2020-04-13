<?php
/**
 * Custom image sizes.
 *
 * @package dp
 */

// Register new image sizes.
add_image_size( 'small_square', 250, 250, true );
add_image_size( 'medium', 300, 200, true );
add_image_size( 'hd', 1280, 720, true );
add_image_size( 'medium_square', 500, 500, true );
add_image_size( 'full_hd', 1920, 1080, true );

/**
 * Register a new image size options to the list of selectable sizes in the Media Library
 */
function dp_custom_image_sizes( $sizes ) {
	return array_merge(
		$sizes,
		array(
			'small_square'  => __( 'Small Square', 'dp' ),
			'medium'        => __( 'Medium', 'dp' ),
			'medium_square' => __( 'Medium Square', 'dp' ),
			'hd'            => __( 'HD', 'dp' ),
			'full_hd'       => __( 'Full HD', 'dp' ),
		)
	);
}
add_filter( 'image_size_names_choose', 'dp_custom_image_sizes' );
