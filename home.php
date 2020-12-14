<?php
/**
 * News Archive page
 *
 * @package DP
 */

/**
 * Add custom body class
 */
function news_home_body_class( $classes ) {
	$classes[] = 'home-news';
	return $classes;
}
add_filter( 'body_class', 'news_home_body_class' );

$categories = get_the_category();
if ( ! empty( $categories ) ) {
	$term_desc = esc_html( $categories[0]->description );
}
get_header();
get_template_part( '/resources/partials/hero' );
?>
<section>
	<main>
		<h1 class="is-1 is-marginless"><?php echo( 'Latest News' ); ?></h1>
		<header>
			<!-- Swiper -->
			<section class="container swiper-container column is-full is-padingless">
				<div class="swiper-wrapper">
					<?php
						$args = array(
							'post_type' => 'post',
							'cat'       => 'news',
						);
						$loop = new WP_Query( $args );
						if ( have_posts() ) :
						while ( $loop->have_posts() ) :
								$loop->the_post();
								$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
								?>
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'faux-link__element swiper-slide' ); ?> style="background-image:url( '<?php echo esc_url( $background ); ?>' );" >
								<?php the_post_thumbnail(); ?>
						<div class="content">
							<p class="date"><?php echo get_the_date( 'F jS Y' ); ?></p>
							<p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><?php esc_html_e( sb_truncate( get_the_title(), 40 ) ); ?></p>
							<p class="caption" data-swiper-parallax="-20%"><?php esc_html_e( sb_truncate( get_the_excerpt(), 140 ) ); ?></p>
						</div>
						<a href="<?php the_permalink(); ?>" class="faux-link__overlay-link"></a>
					</div>
								<?php
					endwhile;
						wp_reset_query();
						endif;
					?>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev swiper-button-white"></div>
				<div class="swiper-button-next swiper-button-white"></div>
			</section>
		</header>
		<div class="has-background-white-ter">
			<section class="container top-news columns is-full">
				<?php
					$args = array(
						'post_type'      => 'post',
						'cat'            => 'news',
						'posts_per_page' => 3,
						'offset'         => 0,
					);
					$loop = new WP_Query( $args );
					if ( have_posts() ) :
					while ( $loop->have_posts() ) :
							$loop->the_post();
							$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
							?>
				<div class="column is-full-mobile is-half-tablet is-4-desktop">
					<article class="card card--related faux-link__element" title="<?php echo esc_attr( get_the_title() ); ?>">
						<div class="thumbnail" style="background-image:url( 
								<?php
								if ( $background ) {
									echo $background; }
								?>
							)"></div>
							<div class="main has-color-black has-background-white">
								<time datetime="<?php echo get_the_date( 'F-jS-Y' ); ?>"><span class="is-8 has-text-weight-light"><?php echo get_the_date( 'F jS Y' ); ?></span></time>
								<h4><?php esc_html_e( sb_truncate( get_the_title(), 40 ) ); ?></h4>
								<span><?php esc_html_e( sb_truncate( get_the_excerpt(), 80 ) ); ?></span>
								<p class="read-more">Read More</p>
							</div>
						<a href="<?php the_permalink(); ?>" class="faux-link__overlay-link"></a>
					</article>
				</div>
								<?php
				endwhile;
					wp_reset_query();
					endif;
				?>
			</section>
		</div>
		<div class="has-background-white">
			<section class="container top-news columns is-full">
				<?php
					$args = array(
						'post_type'      => 'post',
						'cat'            => 'news',
						'posts_per_page' => 20,
						'offset'         => 3,
					);
					$loop = new WP_Query( $args );
					if ( have_posts() ) :
					while ( $loop->have_posts() ) :
							$loop->the_post();
							$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
							?>
				<div class="column is-full-mobile is-half-tablet is-half-desktop">
					<article class="card card--related all-news faux-link__element" title="<?php echo esc_attr( get_the_title() ); ?>">
						<div class="thumbnail" style="background-image:url( 
								<?php
								if ( $background ) {
									echo $background; }
								?>
							)"></div>
							<div class="main has-color-black has-background-white">
								<time datetime="<?php echo get_the_date( 'F-jS-Y' ); ?>"><span class="is-8 has-text-weight-light"><?php echo get_the_date( 'F jS Y' ); ?></span></time>
								<h4 class="is-4"><?php esc_html_e( sb_truncate( get_the_title(), 40 ) ); ?></h4>
								<span><?php esc_html_e( sb_truncate( get_the_excerpt(), 54 ) ); ?></span>
								<p class="read-more">Read More</p>
							</div>
						<a href="<?php the_permalink(); ?>" class="faux-link__overlay-link"></a>
					</article>
				</div>
								<?php
				endwhile;
					wp_reset_query();
					endif;
				?>
			</section>
		</div>
	</main>
</section>

<?php
get_footer();