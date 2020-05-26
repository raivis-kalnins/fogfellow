<?php
/**
 * Archive
 *
 * @package DP
 */
$queried_object = get_queried_object();

get_header();
get_template_part( '/resources/partials/hero' );
?>
<section class="section-archive pull-up--half-desktop pull-left">
	<div class="columns mobile-reverse">
		<div class="column is-full">
			<?php get_template_part( '/resources/partials/breadcrumbs' ); ?>
			<main>
				<header class="archive--head head columns is-vcentered">
					<div class="column">
						<h1 class="is-1"><?php echo substr(get_the_archive_title(), strpos(get_the_archive_title(), ': ') + 2); ?></h1>
						<?php 
							if ( get_post_type( $post_id ) === 'shop' ) :
								if ( ! empty( get_option( 'shop-desc' ) ) ) : 
						?>
						<p class="shop-desc"><?php echo get_option( 'shop-desc' ); ?></p>
						<?php 
								endif;
							endif;
						?>
					</div>
				</header>
				<div class="container column is-full">
					<div class="term-description-container">
						<?php echo $term_desc; ?>
					</div>
					<?php if ( have_posts() ) : ?>
					<div class="columns is-mobile">
						<?php
							while ( have_posts() ) :
							the_post();
							$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
						?>
						<div class="column is-full-mobile is-half-tablet is-4-desktop">
							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--archive faux-link__element' ); ?>>
								<div class="post-img"></div>
								<div class="post-details">
									<h3><?php esc_html_e( sb_truncate( get_the_title(), 56 ) ); ?></h3>
									<span class="content">
						<?php
							if ( is_category() || is_archive() ) {
								// the_excerpt();
								} else {
								the_content();
								}
							?>
										<a href="<?php the_permalink(); ?>" class="faux-link__overlay-link"></a>
									</span>
								</div>
							<?php if ( $background ) : ?>
									<style>
										#post-<?php the_ID(); ?> .post-img {
											background-image:url( '<?php echo esc_url( $background ); ?>' );
										}
									</style>
								<?php endif; ?>
							</article>
						</div>
						<?php endwhile; ?>
					</div>
					<div class="columns">
						<div class="column is-full is-marginless">
							<?php get_template_part( 'pagination' ); ?>
						</div>
					</div>
					<?php else : ?>
					<div class="columns">
						<div class="content column has-text-left">
							<h1 class=""><?php _e( 'Nothing Found!' ); ?></h1>
							<p><?php _e( 'Oops, there&apos;s nothing there...' ); ?></p>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</main>
		</div>
	</div>
</section>
<?php
get_footer();