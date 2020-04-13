<?php
/**
 * Custom social share block.
 *
 * @package dp
 */

/**
 * Register the accordion block rendering.
 */
register_block_type(
	'dp-blocks/social-share',
	array(
		'render_callback' => 'render_social_share_callback',
		'attributes'      => array(
			'facebook' => array(
				'type' => 'boolean',
			),
			'twitter'  => array(
				'type' => 'boolean',
			),
			'linkedin' => array(
				'type' => 'boolean',
			),
		),
	)
);

/**
 * Render the social share block.
 */
function render_social_share_callback( $attributes ) {

	global $wp;

	$share_text = 'I found this on @musicatdp ' . get_the_title();
	$list       = '';
	$linkedin   = 'http://www.linkedin.com/shareArticle?mini=true&url=' . rawurlencode( home_url( $wp->request ) ) . '&title=' . get_the_title() . '&summary=I found this on dp College';

	if ( ! isset( $attributes['facebook'] ) ) {
		$list .= sprintf(
			'<li>
				<a
				onclick="%s"
				href="%s"
				class="is-block">
					<img src="%s"class="is-block"  title="Share on Facebook" />
				</a>
			</li>',
			"window.open( this.href,'targetWindow',' toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=600'); return false;",
			'https://facebook.com/sharer.php?u=' . rawurlencode( home_url( $wp->request ) ),
			esc_url( get_stylesheet_directory_uri() . '/resources/dist/img/i/facebook.svg' )
		);
	}

	if ( ! isset( $attributes['facebook'] ) ) {
		$list .= sprintf(
			'<li>
				<a
				onclick="%s"
				href="%s"
				class="is-block">
					<img src="%s" class="is-block" title="Share on Twitter" />
				</a>
			</li>',
			"window.open( this.href,'targetWindow',' toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=600'); return false;",
			'https://twitter.com/share?text=' . $share_text . '&url=' . rawurlencode( home_url( $wp->request ) ),
			esc_url( get_stylesheet_directory_uri() . '/resources/dist/img/i/twitter.svg' )
		);
	}

	if ( ! isset( $attributes['facebook'] ) ) {
		$list .= sprintf(
			'<li>
				<a
				onclick="%s"
				href="%s"
				class="is-block">
					<img src="%s" class="is-block" title="Share on Linkedin" />
				</a>
			</li>',
			"window.open( this.href,'targetWindow',' toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=600'); return false;",
			$linkedin,
			esc_url( get_stylesheet_directory_uri() . '/resources/dist/img/i/linkedin.svg' )
		);
	}

	return sprintf(
		'<section class="social-share is-flex has-text-centered">
			<h2 class="is-4 is-marginless is-family-secondary">%1$s</h2>
			<ul class="is-flex">%2$s</ul>
		</section>',
		esc_html( $attributes['title'] ),
		$list
	);
}
