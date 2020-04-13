<?php
/**
 * 404
 *
 * @package    dp
 * @author     SMILE <hello@digitalpulse.click>
 * @copyright  Digital Pulse
 */
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );

get_header();
get_template_part( '/resources/partials/hero' );
?>
<section class="pull-up--half">
	<div class="container container--large">
			<main class="body-head">
			<section class="section section-404 columns">
				<div class="container">
					<h1><?php esc_html_e( '404', 'dp' ); ?></h1>
					<div class="column is-full">
							<h2><?php esc_html_e( "We couldn't find that!", 'dp' ); ?></h2>
							<p>
							<?php
							esc_html_e( "We're very sorry, but we couldn't find the page ", 'dp' );
			echo( $current_url );
			?>
			</p>
				<p><?php esc_html_e( 'If you typed in the address, try double checking the spelling.', 'dp' ); ?></p>
				<p><?php esc_html_e( "If you followed a link from somewhere, please contact us and we'll try our best to fix the error.", 'dp' ); ?></p>
				<a href="<?php echo esc_url( home_url() ); ?>" class="button"><?php esc_html_e( 'Back to the homepage', 'dp' ); ?></a>
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>
</div>
</section>

<?php
get_footer();
