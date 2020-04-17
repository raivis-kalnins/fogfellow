<?php
/**
 * Admin specific functions
 *
 * @package dp
 */

/**
 * Remove the admin bar for users who can't see the admin panel.
 */
function dp_remove_admin_bar() {
	if ( is_user_logged_in() ) {
		if ( ! current_user_can( 'read' ) ) {
			show_admin_bar( true );
		}
	}
}
add_action( 'after_setup_theme', 'dp_remove_admin_bar' );

/**
 * Remove the wp logo from the admin bar.
 */
function dp_remove_adminbar_wp_logo() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'dp_remove_adminbar_wp_logo', 0 );

/**
 * Add site ID to footer for admins
 */
function dp_display_blog_id() {
	if ( current_user_can( 'administrator' ) ) {
		echo 'Site Id :' . get_current_blog_id();
	} else {
		return false;
	}
}
add_filter( 'update_footer', 'dp_display_blog_id', 11 );

/**
 * Modify the thank you message (wp-admin).
 */
function dp_modify_thankyou_message() {
	echo '<span id="footer-thankyou">Designed & Developed with &#x1F49B; by <a href="https://digitalpulse.click" target="_blank">DigitalPulse</a></span>';
}
add_filter( 'admin_footer_text', 'dp_modify_thankyou_message' );

if (function_exists('add_theme_support')) {
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    // Add Support for Custom Header - Uncomment below if you're going to use
    add_theme_support('custom-header', array(
        //'default-image'          => get_template_directory_uri() . '/assets/img/bg/bg.jpg',
        'header-text'            => false,
        'default-text-color'     => 'fff',
        'width'                  => 1920,
        'height'                 => 1080,
        'random-default'         => true,
        'wp-head-callback'       => $wphead_cb,
        'admin-head-callback'    => $adminhead_cb,
        'admin-preview-callback' => $adminpreview_cb
    ));
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
    // Enable devcouk support
    add_theme_support('devcouk', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    // Localisation Support
    load_theme_textdomain('dp', get_template_directory() . '/languages');
}
/*------------------------------------*\
    Functions
\*------------------------------------*/
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
));

/**
 * Post type Shop
 */
function create_post_type_shop() {
    register_taxonomy_for_object_type('category', 'shop'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'shop');
    register_post_type('shop', // Register Custom Post Type
        array(
            'labels' => array(
            'name' => __('Shop', 'dp'), // Rename these to suit
            'singular_name' => __('Product', 'dp'),
            'add_new' => __('Add New product', 'dp'),
            'add_new_item' => __('Add New shop Product', 'dp'),
            'edit' => __('Edit', 'dp'),
            'edit_item' => __('Edit shop Product', 'dp'),
            'new_item' => __('New shop Product', 'dp'),
            'view' => __('View shop Product', 'dp'),
            'view_item' => __('View shop Product', 'dp'),
            'search_items' => __('Search shop Product', 'dp'),
            'not_found' => __('No shop Posts found', 'dp'),
            'not_found_in_trash' => __('No shop Posts found in Trash', 'dp')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom devcouk Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
add_action('init', 'create_post_type_shop'); // Add our finance Blank Custom Post Type
