<?php
/**
 * Custom block for accordions.
 *
 * @package dp
 */

/**
 * Register the accordion block rendering.
 */
register_block_type(
	'dp-blocks/accordion',
	array(
		'render_callback' => 'render_accordion_callback',
		'attributes'      => array(
			'title'       => array(
				'type' => 'string',
			),
			'alignment'   => array(
				'type' => 'string',
			),
			'align'       => array(
				'type' => 'string',
			),
			'description' => array(
				'type' => 'string',
			),
		),
	)
);
/**
 * Render the accordion block.
 */
function render_accordion_callback( $attributes ) {

	$class_name = '';
	$alignment  = isset( $attributes['alignment'] ) ? ' has-text-align-' . $attributes['alignment'] : '';
	$align      = isset( $attributes['align'] ) ? ' align' . $attributes['align'] : '';

	$class_name .= isset( $attributes['noBottomMargin'] ) && true === $attributes['noBottomMargin'] ? 'mb-0' : '';
	$class_name .= isset( $attributes['noTopMargin'] ) && true === $attributes['noTopMargin'] ? ' mt-0' : '';

	$title   = isset( $attributes['title'] ) ? $attributes['title'] : '';
	$content = isset( $attributes['description'] ) ? $attributes['description'] : '';

	$checkbox_id = 'toggle-accordion-' . rand( 99, 9999 );

	return sprintf(
		'
		<section class="dp-accordion %1$s %6$s">
			<input type="checkbox" class="hidden hidden--fixed" id="%2$s" />
			<label for="%2$s" class="is-block is-6 is-family-tertiary has-text-weight-bold">%3$s</label>
			<div class="%5$s content is-hidden">%4$s</div>
		</section>
		',
		esc_attr( $class ),
		esc_attr( $checkbox_id ),
		esc_html( $title ),
		wp_kses( $content, sb_kses() ),
		esc_attr( $alignment ),
		esc_attr( $align )
	);
}
