<?php
/**
 * Add robots to site
 *
 * @package dp
 */

/**
 * Adds a rewrite rule to robots.txt.
 */
function robots_rewrite() {
	add_rewrite_rule( 'robots\.txt$', 'index.php?robots=1', 'top' );
}
add_action( 'init', 'robots_rewrite' );

/**
 * Custom robots.txt make
 */
function custom_robots_txt( $output, $public ) {
  return 'robots_rewrite';
}
add_filter( 'robots_txt', 'custom_robots_txt', 10, 2 );
