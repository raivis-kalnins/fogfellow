<?php
/**
 * Sidebar widget area specific functions
 *
 * @package dp
 */

/**
 * Register sidebar areas
 */
function dp_register_sidebars() {
	register_sidebar(
		array(
			'name'          => __( 'Main Sidebar', 'dp' ),
			'id'            => 'main-sidebar',
			'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'dp' ),
			'before_widget' => '<div style="margin-bottom: 3rem;">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widgettitle title is-4">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dp_register_sidebars' );
