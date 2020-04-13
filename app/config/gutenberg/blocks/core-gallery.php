<?php
/**
 * Customise the core/gallery block.
 *
 * @package dp
 */

/**
 * Callback / render function.
 */
function render_core_gallery( $attributes, $content ) {
	$image_ids = $attributes['ids'];
	$columns   = $attributes['columns'];
	$link_to   = $attributes['linkTo'];

	/**
	 * Switch the column class dependant on the
	 * number of columns the user wants to output.
	 */
	switch ( $columns ) {
		case 1:
			$class = 'is-12';
			break;
		case 3:
			$class = 'is-4';
			break;
		case 2:
			$class = 'is-6';
			break;
		default:
			$class = 'is-3';
			break;
	}

	/**
	 * If the user has selected to
	 * show more than one image per row use this markup.
	 */
	if ( $columns > 1 ) :

		$thumbnails  = '';
		$image_count = count( $image_ids );

		// Loop the thumbnails & set the columns class.
		foreach ( $image_ids as $key => $image_id ) {

			$attachment_image = wp_get_attachment_image_url( $image_id, 'hd' );

			$figures .= sprintf(
				'<input type="radio" class="hidden hidden--fixed" name="core-gallery-images" id="%3$s" />
				<figure id="%1$s" name="core-gallery-images" class="is-hidden column is-12 faux-link__element">
					<img src="%2$s" />
				</figure>',
				esc_attr( 'core-gallery-' . $image_id ),
				esc_url( $attachment_image ),
				esc_attr( 'core-gallery-image-' . $image_id )
			);

			if ( $key < 7 ) {

				$thumbnails .= get_image_markup( $image_id, $link_to, $class, false, ! isset( $attributes['linkTo'] ) );

			} else {
				if ( 7 === $key ) {
					$thumbnails .= sprintf(
						'<div class="show_more column %s">
							<label class="toggle-images is-flex is-6 is-family-secondary has-text-weight-bold" for="toggle_all_gallery_images">View all %s images</label>
						</div>',
						esc_attr( $class ),
						esc_html( $image_count )
					);
				}

				// Get the image.
				$thumbnails .= get_image_markup( $image_id, $link_to, $class, true, ! isset( $attributes['linkTo'] ) );

				if ( ( $image_count - 1 ) === $key ) {
					$thumbnails .= sprintf(
						'<div class="is-hidden column %s">
							<label class="toggle-images is-flex is-6 is-family-secondary has-text-weight-bold" for="toggle_all_gallery_images">Show fewer images</label>
						</div>',
						esc_attr( $class ),
						esc_html( $image_count )
					);
				}
			}
		}

		// Variables for the first image.
		$attachment = wp_get_attachment_image_url( $image_ids[0], 'hd' );
		$link       = dp_get_attachment_link( $image_ids[0], $link_to );

		// The main html output.
		$render = sprintf(
				'<section class="core-gallery">
					<div class="columns">
						<input type="radio" class="hidden hidden--fixed" name="core-gallery-images" id="core-gallery-image-%4$s" checked />
						<figure class="column is-12 is-hidden faux-link__element">
							<img src="%s" />
							%s
						</figure>
						%5$s
					</div>
					<input type="checkbox" class="hidden hidden--fixed" id="toggle_all_gallery_images" />
					<div class="columns is-flex is-multiline">
						%s
					</div>
				</section>',
				esc_url( $attachment ),
				$link,
				$thumbnails,
				$image_ids[0],
				$figures
			);

	else :
		/**
		 * Render one image per row.
		 */

		$render = 'column 1';
	endif;

	// Onload output all images.
	// Only show the first 7
	// On check of see all, set the data-url of the images to the src of the hidden images and show the images.
	// Checkbox to hide / show images. Only use js to set the data url to the src.

	return $render;
}

/**
 * Register the block & change set the render function.
 */
function register_core_gallery() {
	register_block_type(
		'core/gallery',
		array(
			'render_callback' => 'render_core_gallery',
		)
	);
}
add_action( 'init', 'register_core_gallery' );

/**
 * Get the a tag or nothing for the image link.
 */
function dp_get_attachment_link( $image_id, $link_to ) {

	switch ( $link_to ) {
		case 'attachment':
			$link = '<a href=" ' . esc_url( wp_get_attachment_link( $image_id ) ) . ' " class="faux-link__overlay-link" target="_blank"></a>';
			break;
		case 'media':
			$link = '<a href=" ' . esc_url( wp_get_attachment_image_url( $image_id, 'full' ) ) . ' " class="faux-link__overlay-link" target="_blank"></a>';
			break;

		default:
			$link = '';
			break;
	}
	return $link;
}

/**
 * Render Markup.
 */
function get_image_markup( $image_id, $link_to, $class, $is_hidden = false, $render_label = false ) {

	$attachment = wp_get_attachment_image_url( $image_id, 'small_square' );
	$link       = dp_get_attachment_link( $image_id, $link_to );

	if ( $render_label ) {
		return sprintf(
			'<label for="%6$s" class="%1$s single-image %2$s column faux-link__element">
				<img class="lazy is-block" src="%4$s" data-src="%4$s" />
				%5$s
			</label>',
			esc_attr( $class ),
			$is_hidden ? 'is-hidden' : '',
			esc_url( get_stylesheet_directory_uri() . '/resources/dist/img/fallback.png' ),
			esc_url( $attachment ),
			$link,
			esc_attr( 'core-gallery-image-' . $image_id )
		);
	} else {

		return sprintf(
			'<div class="%1$s single-image %2$s column faux-link__element">
				<img class="lazy is-block" src="%3$s" data-src="%4$s" />
				%5$s
			</div>',
			esc_attr( $class ),
			$is_hidden ? 'is-hidden' : '',
			esc_url( get_stylesheet_directory_uri() . '/resources/dist/img/fallback.png' ),
			esc_url( $attachment ),
			$link
		);
	}
}
