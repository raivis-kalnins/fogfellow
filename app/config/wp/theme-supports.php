<?php
/**
 * --------------------------------------------------------------------------
 * Theme Supports
 * --------------------------------------------------------------------------
 *
 * Theme Supports are specific features that may be enabled by theme authors.
 * Some features have already been enabled for you, but feel free
 * to enable/disable these features as you like.
 *
 * More information at https://codex.wordpress.org/Theme_Features
 *
 * @package dp
 */

// Enables Post Formats support for a theme.
add_theme_support(
	'post-formats',
	array(
		'aside',   // Typically styled without a title.
		'audio',   // An audio file or playlist.
		'chat',    // A chat transcript
		'gallery', // A gallery of images.
		'image',   // A single image.
		'link',    // A link to another site.
		'quote',   // A quotation.
		'status',  // A short status update, similar to a Twitter status update.
		'video',   // A single video or video playlist.
	)
	);

// Enables Post Thumbnails support for a theme
add_theme_support( 'post-thumbnails' );

// Adds RSS feed links to HTML <head>
add_theme_support( 'automatic-feed-links' );

// Allows the use of HTML5 markup for the listen options
add_theme_support(
	'html5',
	array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	)
	);

/**
 * Truncate a string by character count.
 */
function sb_truncate( $string, $length = 100, $append = '&hellip;' ) {
	$string = trim( $string );

	if ( strlen( $string ) > $length ) {
		$string = wordwrap( $string, $length );
		$string = explode( "\n", $string, 2 );
		$string = $string[0] . $append;
	}

	return $string;
}

/**
 * Get Template part
 */
if ( ! function_exists( 'dp_get_template_part' ) ) {
	/**
	 * Custom get template part that allows us to send through variables
	 */
	function dp_get_template_part( $slug, $name, $args ) {
		global $dp_args;
		$dp_args = $args;
		get_template_part( $slug, get_post_format() );
		$dp_args = false;
	}
}
