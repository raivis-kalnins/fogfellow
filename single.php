<?php
/**
 * Singular
 *
 * @package    dp
 * @author     Digital Pulse <hello@digitalpulse.click>
 * @copyright  Digital Pulse
 */

get_header();
while ( have_posts() ) :
the_post();
$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
$slug = $post->post_name;
$price = get_field('price');
/**
 * Get the stripe header.
 */
dp_get_template_part(
	'/resources/partials/hero',
	'',
	array(
		'background_image' => $background,
	)
);
?>
<section class="pull-up--half-desktop pull-left">
	<div class="columns is-marginless mobile-reverse">
		<div class="column is-full-tablet is-8-desktop is-paddingless">
			<?php get_template_part( '/resources/partials/breadcrumbs' ); ?>
			<main>
				<header class="single--head head columns is-marginless is-vcentered">
					<div class="is-paddingless column">
						<h1 class="is-1 is-marginless"><?php esc_html_e( get_the_title() ); ?></h1>
					</div>
				</header>
				<article class="head columns is-marginless">
					<div class="single-content is-paddingless column is-full">
						<?php the_content(); ?>
						<?php if ( get_post_type( $post_id ) === 'shop' ) : ?>
							<div class="card-price">Price: <b>€ <?php echo $price; ?></b></div>
							<a href="#" data-name="<?php echo $slug; ?>" data-price="<?php echo $price; ?>" class="add-to-cart button--fullgreen button">Add to cart</a>
						<?php endif; ?>
						<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>
					</div>
				</article>
			</main>
		</div>
		<aside class="aside-toggle column is-4 is-flex with-margin">
			<div class="aside-container">
				<input class="hidden" type="checkbox" name="toggle-details" id="toggle-details" />
				<label class="is-block has-background-white" for="toggle-details">
					<h3 class="aside-title">In this section</h3>
				</label>
				<span class="aside-items">
					<?php get_sidebar(); ?>
				</span>
			</div>
		</aside>
	</div>
</section>
<?php
endwhile;
get_footer();
