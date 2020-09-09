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
				<li><a href="javascript:;" data-fancybox="" data-src="#contact-form-pop" class="pop-email"></a></li>
				<li><a href="javascript:;" data-fancybox="" data-src="#callback-form-pop" class="pop-phone"></a></li>
			</ul>
		</div>
		<div class="plus">
			<a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="16.005" height="16.005" viewBox="0 0 26.005 26.005"><path fill="#ffffff" id="Path_1" data-name="Path 1" d="M46,985.362a1.53,1.53,0,0,0-1.53,1.53v9.943H34.53a1.53,1.53,0,1,0,0,3.059h9.943v9.943a1.53,1.53,0,1,0,3.059,0v-9.943h9.943a1.53,1.53,0,1,0,0-3.059H47.532v-9.943A1.53,1.53,0,0,0,46,985.362Z" transform="translate(-33 -985.362)"/></svg></a>
		</div>
		<div class="right-menu menu-list">
			<ul>
				<li><a href="<?php echo home_url(); ?>" class="pop-home"></a></li>
				<li><a href="<?php echo home_url(); ?>/shop" class="pop-reload"></a></li>							
			</ul>
		</div>
	</div>

	<div id="contact-form-pop" style="display:none" class="animated-modal">
		<?php echo do_shortcode('[contact-form-7 id="294" title="Contact form EN"]'); /* Popup content */ ?>
	</div>

	<div id="callback-form-pop" style="display:none" class="animated-modal">
		<?php echo do_shortcode('[contact-form-7 id="698" title="Callback EN"]'); /* Popup content */ ?>
		<input type="time" name="time" value="" id="callbacktime" class="form-control" placeholder="--:--" maxlength="5" onKeyPress="formatTime(this)" />
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
					<div class="total-price"><b>Total price:</b>  € <span class="total-cart"></span></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="modal-order button--green btn-more">Order now</button>
				</div>
				<div id="shop-form-pop" style="display:none">
					<?php echo do_shortcode('[contact-form-7 id="699" title="Contact form - Shop EN"]'); /* Popup content */ ?>
				</div>
			</div>
		</div>
	</div>
	<?php
		$template_file = get_post_meta( get_the_ID(), '_wp_page_template', true );
	?>
	<script src="https://www.google.com/recaptcha/api.js?render=6LdeOrMZAAAAAMHFsnRS1vrZfnJEW4bpaEugYXl8"></script>
	<script>
		// Recapcha
		grecaptcha.ready(function() {
			grecaptcha.execute('6LdeOrMZAAAAAMHFsnRS1vrZfnJEW4bpaEugYXl8', {action: 'fogfellow'});
		});
	</script>
	<?php
		get_template_part( 'resources/partials/fonts' );
		wp_footer();
	?>
	</body>
</html>
