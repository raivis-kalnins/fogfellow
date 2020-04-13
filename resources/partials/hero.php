<?php
/**
 * Hero partial.
 *
 * @package dp
 */

global $dp_args;
?>

<section id="hero" class="hero">
	<?php if ( $dp_args['background_image'] ) : ?>
		<style>
			#hero {
				background-image: url( '<?php echo esc_url( $dp_args['background_image'] ); ?>' );
				background-repeat: no-repeat;
				height: 50vh;
			}
		</style>
	<?php endif; ?>
</section>
