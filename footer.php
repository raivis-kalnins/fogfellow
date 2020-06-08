<?php
/**
 * Footer
 *
 * @package    dp
 * @author     Digital Pulse <hello@digitalpulse.click>
 * @copyright  Digital Pulse
 */
?>
		<footer class="footer sc-contact sc5" id="contact">
			<div class="container columns foo-top">
				<div class="column foo-contacts is-full-tablet is-5-desktop">
					<h2>Contact us</h2>
					<?php if ( ! empty( get_option( 'phone' ) ) ) : ?>
						<p class="foo-phone"><?php echo get_option( 'phone' ); ?></p>
					<?php endif; ?>
					<?php if ( ! empty( get_option( 'email' ) ) ) : ?>
						<p class="foo-email"><?php echo get_option( 'email' ); ?></p>
					<?php endif; ?>
					<?php if ( ! empty( get_option( 'address' ) ) ) : ?>
						<p class="foo-address"><?php echo get_option( 'address' ); ?></p>
					<?php endif; ?>
				</div>
				<div class="column foo-contact-form is-full-tablet is-7">
					<div class="contact-form-wrap">
						<?php echo do_shortcode('[contact-form-7 id="294" title="Contact form EN"]'); ?>
					</div>
				</div>
			</div>
			<div class="container columns foo-bottom">
				<div class="column foo-copyright is-full-tablet is-5">
					<span>&copy; 2019 - <?php echo date('Y'); ?> FOG Fellow Designs LTD</span>
					<div class="foo-menu">
						<?php
							wp_nav_menu(
								array(
									'menu'        => 'Footer Menu',
									'depth'       => 1,
									'container'   => '',
									'menu_class'  => '',
									'items_wrap'  => '%3$s',
									'walker'      => new Bulma_Menu_Walker(),
									'fallback_cb' => 'Bulma_Menu_Walker::fallback',
								)
							);
						?>
					</div>
				</div>
				<div class="column foo-social is-full-tablet is-7">
					<?php if ( ! empty( get_option( 'soc_fb' ) ) ) : ?>
						<div class="foo-soc soc-fb faux-link__element">
							<a href="<?php echo get_option( 'soc_fb' ); ?>" target="_blank" class="soc-url faux-link__overlay-link"></a>
						</div>
					<?php endif; ?>
					<?php if ( ! empty( get_option( 'soc_ln' ) ) ) : ?>
						<div class="foo-soc soc-ln faux-link__element">
							<a href="<?php echo get_option( 'soc_ln' ); ?>" target="_blank" class="soc-url faux-link__overlay-link"></a>
						</div>
					<?php endif; ?>
					<?php if ( ! empty( get_option( 'soc_in' ) ) ) : ?>
						<div class="foo-soc soc-in faux-link__element">
							<a href="<?php echo get_option( 'soc_in' ); ?>" target="_blank" class="soc-url faux-link__overlay-link"></a>
						</div>
					<?php endif; ?>
					<?php if ( ! empty( get_option( 'soc_yt' ) ) ) : ?>
						<div class="foo-soc soc-yt faux-link__element">
							<a href="<?php echo get_option( 'soc_yt' ); ?>" target="_blank" class="soc-url faux-link__overlay-link"></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="partners-wrap">
				<?php if ( ! empty( get_option( 'partner1' ) ) ) : ?>
					<div class="foo-partner">
						<a href="<?php echo get_option( 'partner1' ); ?>"><div style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'logo1' ) ); ?> )"></div></a>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( get_option( 'partner2' ) ) ) : ?>
					<div class="foo-partner">
						<a href="<?php echo get_option( 'partner2' ); ?>"><div style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'logo2' ) ); ?> )"></div></a>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( get_option( 'partner3' ) ) ) : ?>
					<div class="foo-partner">
						<a href="<?php echo get_option( 'partner3' ); ?>"><div style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'logo3' ) ); ?> )"></div></a>
					</div>
				<?php endif; ?>
			</div>
		</footer>
	</main>

	<div class="menu-plus">
		<div class="left-menu menu-list">
			<ul>
				<li>
						<a href="#">
								<svg id="camera" xmlns="http://www.w3.org/2000/svg" width="49.878" height="39.799"
										viewBox="0 0 49.878 39.799">
										<circle fill="currentcolor" id="Ellipse_1" data-name="Ellipse 1" cx="4.26" cy="4.26" r="4.26"
												transform="translate(27.745 18.185)" />
										<path fill="currentcolor" id="Path_3" data-name="Path 3"
												d="M47.761,11.1H44.747l-1.87-5.2H27.913l-1.87,5.2H13.885V9.329a3.013,3.013,0,1,0-6.027,0V11.1H4.117A3.062,3.062,0,0,0,1,14.213V42.581A3.062,3.062,0,0,0,4.117,45.7H47.761a3.062,3.062,0,0,0,3.117-3.117V14.213A3.062,3.062,0,0,0,47.761,11.1ZM16.9,18.473H6.715V16.4H16.9ZM33.005,37.8a9.456,9.456,0,1,1,9.456-9.456A9.491,9.491,0,0,1,33.005,37.8Z"
												transform="translate(-1 -5.9)" />
								</svg>
						</a>
				</li>
				<li>
						<a href="#">
								<svg id="video" xmlns="http://www.w3.org/2000/svg" width="50" height="41.632"
										viewBox="0 0 50 41.632">
										<path fill="currentcolor" id="Path_8" data-name="Path 8"
												d="M33.867,41.5H5.537A3.039,3.039,0,0,0,2.5,44.537V63.6a3.039,3.039,0,0,0,3.037,3.037h28.33A3.039,3.039,0,0,0,36.9,63.6V44.537A2.974,2.974,0,0,0,33.867,41.5Z"
												transform="translate(-2.5 -25.004)" />
										<path fill="currentcolor" id="Path_9" data-name="Path 9"
												d="M83.726,44.832,75.4,49.6V61.432l8.326,4.818a2.16,2.16,0,0,0,3.247-1.885V46.717A2.16,2.16,0,0,0,83.726,44.832Z"
												transform="translate(-36.973 -26.45)" />
										<circle fill="currentcolor" id="Ellipse_2" data-name="Ellipse 2" cx="6.493" cy="6.493" r="6.493"
												transform="translate(2.775)" />
										<circle fill="currentcolor" id="Ellipse_3" data-name="Ellipse 3" cx="6.493" cy="6.493" r="6.493"
												transform="translate(18.77)" />
								</svg>
						</a>
				</li>
			</ul>
		</div>
		<div class="plus">
			<a href="javascript:;">
				<svg xmlns="http://www.w3.org/2000/svg" width="16.005" height="16.005" viewBox="0 0 26.005 26.005">
					<path fill="#ffffff" id="Path_1" data-name="Path 1" d="M46,985.362a1.53,1.53,0,0,0-1.53,1.53v9.943H34.53a1.53,1.53,0,1,0,0,3.059h9.943v9.943a1.53,1.53,0,1,0,3.059,0v-9.943h9.943a1.53,1.53,0,1,0,0-3.059H47.532v-9.943A1.53,1.53,0,0,0,46,985.362Z" transform="translate(-33 -985.362)"/>
				</svg>
			</a>
		</div>
		<div class="right-menu menu-list">
			<ul>
				<li>
						<a href="#">
								<svg id="link" xmlns="http://www.w3.org/2000/svg" width="41.818" height="41.818"
										viewBox="0 0 41.818 41.818">
										<g id="Group_7" data-name="Group 7" transform="translate(0 4.481)">
												<path fill="currentcolor" id="Path_10" data-name="Path 10"
														d="M34.857,42.338H6.481A4.486,4.486,0,0,1,2,37.857V9.481A4.486,4.486,0,0,1,6.481,5H9.468a1.494,1.494,0,0,1,0,2.987H6.481A1.5,1.5,0,0,0,4.987,9.481V37.857a1.5,1.5,0,0,0,1.494,1.494H34.857a1.494,1.494,0,0,0,1.494-1.494V34.87a1.494,1.494,0,1,1,2.987,0v2.987A4.486,4.486,0,0,1,34.857,42.338Z"
														transform="translate(-2 -5)" />
										</g>
										<path fill="currentcolor" id="Path_11" data-name="Path 11"
												d="M37.364,2H10.481A4.486,4.486,0,0,0,6,6.481V33.364a4.486,4.486,0,0,0,4.481,4.481H37.364a4.486,4.486,0,0,0,4.481-4.481V6.481A4.486,4.486,0,0,0,37.364,2ZM35.87,19.922a1.494,1.494,0,0,1-2.987,0V13.8L20.061,26.619a1.494,1.494,0,1,1-2.113-2.112L31.5,10.961H23.922a1.494,1.494,0,1,1,0-2.987H35.87Z"
												transform="translate(-0.026 -2)" />
								</svg>
						</a>
				</li>
				<li>
						<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="40.909" viewBox="0 0 50 40.909">
										<path fill="currentcolor" id="picture"
												d="M68.864,27.5A3.636,3.636,0,0,1,72.5,31.13V64.779a3.638,3.638,0,0,1-3.636,3.63H26.136a3.636,3.636,0,0,1-3.636-3.63V31.13a3.638,3.638,0,0,1,3.636-3.63ZM27.045,32.95v22.4c0,.5.22.561.491.137l5.9-9.226c1.079-1.688,2.739-1.634,3.7.125l1.485,2.706a.493.493,0,0,0,.923.031l5.166-8.066c1.088-1.7,2.794-1.664,3.821.06l8.148,13.676a.5.5,0,0,0,.928.006l1-1.664a2.285,2.285,0,0,1,4.066-.212l4.73,6.273c.3.4.549.32.549-.183V32.957a.917.917,0,0,0-.912-.912H27.957A.906.906,0,0,0,27.045,32.95Z"
												transform="translate(-22.5 -27.5)" />
								</svg>
						</a>
				</li>								
			</ul>
		</div>
	</div>

	<div class="scroll-up"></div>

	<!-- Modal -->
	<div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<i class="modal-close"></i>
				<div class="modal-header">
					<h2 class="modal-title" id="exampleModalLabel">Shopping basket</h2>
				</div>
				<div class="modal-body">
					<table class="show-cart table"></table>
					<div><b>Total price:</b> £ <span class="total-cart"></span></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="modal-order button--green btn-more">Order now</button>
				</div>
			</div>
		</div>
	</div> 
	<?php
		$template_file = get_post_meta( get_the_ID(), '_wp_page_template', true );
	?>
	<?php
		get_template_part( 'resources/partials/fonts' );
		wp_footer();
	?>
	</body>
</html>
