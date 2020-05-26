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
