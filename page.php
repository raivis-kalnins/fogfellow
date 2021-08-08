<?php 
/**
 * Pages
 *
 * @package    dp
 * @author     Digital Pulse <hello@digitalpulse.click>
 * @copyright  Digital Pulse
 */


get_header();
while ( have_posts() ) :
the_post();
$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
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
$body_classes = get_body_class();

if (in_array('page-distributors', $body_classes)) {

?>
<div id="fog-glob" style="position:absolute;right:15%;top:70px;z-index:-1">
	<img src="https://fogfellowdesigns.com/wp-content/uploads/2020/12/glob.gif" alt="FOG Glob" style="opacity:0.8;transform: rotate(14deg) scale(1.1, 1.1);width:120%" />
</div>
<?php
} else {}
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
						<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>
					</div>
				</article>
			</main>
		</div>
		<aside class="aside-toggle column is-4 is-flex with-margin">
			<div class="aside-container">
				<input class="hidden" type="checkbox" name="toggle-details" id="toggle-details" />
				<label class="is-block" for="toggle-details">
					<h3 class="aside-title">Other sections</h3>
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
