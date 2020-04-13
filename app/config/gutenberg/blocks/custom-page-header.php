<?php
/**
 * Page header block.
 *
 * @package dp
 */


/**
 * Register the accordion block rendering.
 */
register_block_type(
	'dp-blocks/page-header',
	array(
		'render_callback' => 'render_page_header_callback',
		'attributes'      => array(
			'page-title' => array(
				'type' => 'boolean',
			),
		),
	)
);

/**
 * Front-end block render.
 */
function render_page_header_callback( $attributes ) {

	switch ( $attributes['alignment'] ) {
		case 'right':
			$line_position = 'is-right';
			break;
		case 'center':
			$line_position = '';
			break;
		default:
			$line_position = 'is-left';
			break;
	}
	$sub_title = $attributes['subTitle'] ? '<small class="is-uppercase">' . esc_html( $attributes['subTitle'] ) . '</small>' : '';

	return sprintf(
		'<div class="container %3$s %4$s container--small">
				%1$s
				<h1 class="is-1 is-marginless">%2$s</h1>
				<div class="seperate_section %5$s"></div>
		</div>',
		$sub_title,
		esc_html( $attributes['title'] ),
		esc_attr( 'align' . $attributes['align'] ),
		esc_attr( 'has-text-align-' . $attributes['alignment'] ),
		esc_attr( $line_position )
	);

	// return 'page title';
}
