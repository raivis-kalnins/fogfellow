<?php
/**
 * Events calendar pro specific functions
 *
 * @package dp
 */

/**
 * Remove Ajax from The Events Calendar Pagination on Month, List, and Day Views.
 */
function events_calendar_remove_ajax() {
	wp_dequeue_script( 'tribe-events-calendar' );
	wp_dequeue_script( 'tribe-events-list' );
	wp_dequeue_script( 'tribe-events-ajax-day' );
}
add_action( 'wp_print_scripts', 'events_calendar_remove_ajax', 10 );
