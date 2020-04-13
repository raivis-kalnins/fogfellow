<?php
/**
 * Customise the core/file block.
 *
 * @package dp
 */

/**
 * Callback / render function.
 */
function render_core_file( $attributes, $content ) {

	$attachment_id = $attributes['id'];
	$download_url  = preg_replace( '/^http:/i', 'https:', $attributes['href'] );

	$file = get_post( $attachment_id );

	return sprintf(
		'<section class="downloads">
			<div class="is-flex vacany-section columns">
				<div class="file-meta column is-paddingless is-10">
					<h3 class="is-marginless is-5">%1$s</h3>
					<small class="base-text">%2$s</small>
				</div>
				<div class="column is-paddingless is-2 file-download is-flex">
					<a target="_blank" download="%1$s" href="%3$s">
						<span class="is-6 has-text-weight-bold has-text-dark is-family-secondary">Download</span>
					</a>
				</div>
			</div>
		</section>',
		esc_html( $file->post_title ),
		esc_html( $file->post_content ),
		esc_url( $download_url ),
		esc_html( 'Download the file: ' . $file->post_title )
	);
}

/**
 * Register the block & change set the render function.
 */
function register_core_file() {
	register_block_type(
		'core/file',
		array(
			'render_callback' => 'render_core_file',
		)
	);
}
add_action( 'init', 'register_core_file' );
