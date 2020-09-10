<?php
/**
 * Config for gutenberg functionality.
 *
 * @package dp
 */

add_theme_support( 'align-wide' );

/**
 * Add custom colours.
 */
function dp_house_colours() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Green', 'dp' ),
				'slug'  => 'dp-green',
				'color' => 'rgba(68, 201, 191, 1)',
			),
			array(
				'name'  => __( 'Orange', 'dp' ),
				'slug'  => 'dp-orange',
				'color' => 'rgba(243, 154, 81, 1)',
			),
			array(
				'name'  => __( 'Dark', 'dp' ),
				'slug'  => 'dp-dark',
				'color' => 'rgba(38, 42, 43, 1)',
			),
			array(
				'name'  => __( 'Pink', 'dp' ),
				'slug'  => 'dp-pink',
				'color' => 'rgba( 238, 98, 173, 1 )',
			),
			array(
				'name'  => __( 'Piggy Pink', 'dp' ),
				'slug'  => 'dp-piggy-pink',
				'color' => 'rgba(252, 224, 239, 1)',
			),
			array(
				'name'  => __( 'Persian Pink', 'dp' ),
				'slug'  => 'dp-persian-pink',
				'color' => 'rgba(240, 119, 184, 1)',
			),
			array(
				'name'  => __( 'Faspberry Pink', 'dp' ),
				'slug'  => 'dp-raspberry-pink',
				'color' => 'rgba(231, 0, 114, 1)',
			),
			array(
				'name'  => __( 'White', 'dp' ),
				'slug'  => 'white',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'Black', 'dp' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
		)
	);
}
add_action( 'after_setup_theme', 'dp_house_colours' );

/**
 * Enqueue Editor assets.
 */
function enqueue_editor_assets() {

		wp_enqueue_script(
			'custom-gutenberg-blocks-js',
			get_stylesheet_directory_uri() . '/resources/dist/js/gutenberg.min.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor', 'wp-data', 'wp-compose' )
		);

		wp_enqueue_style( 'child-theme-gutenberg', get_stylesheet_directory_uri() . '/resources/dist/css/gutenberg-editor.min.css', false );

		wp_localize_script( 'custom-gutenberg-blocks-js', 'directory_uri', get_stylesheet_directory_uri() );

}
add_action( 'enqueue_block_editor_assets', 'enqueue_editor_assets' );

/**
 * On the Front-page restrict the selectable blocks.
 */
function restrict_blocks( $allowed_blocks, $post ) {

	if ( (int) get_option( 'page_on_front' ) === $post->ID ) :
		$allowed_blocks = array(
			'acf/call-to-action',
			'dp-blocks/grid',
			'acf/grid',
		);
	endif;

	return $allowed_blocks;
}
add_filter( 'allowed_block_types', 'restrict_blocks', 10, 2 );

/**
 * Require the custom Gutenberg Blocks.
 */
if ( ! is_admin() ) {
	require_once dirname( __FILE__ ) . '/blocks/core-file.php';
}
