<?php
/**
 * News Archive page
 *
 * @package dp
 */

/**
 * Add custom body class
 */
function news_archive_body_class( $classes ) {
	$classes[] = 'home-frontpage';
	return $classes;
}
add_filter( 'body_class', 'news_archive_body_class' );

$categories = get_the_category();
if ( ! empty( $categories ) ) {
	$term_desc = esc_html( $categories[0]->description );
}
get_header();
?>
<div class="bg-wave"></div>
<div class="home-search-box">
	<h1><?php esc_html_e( 'Search for a course' ); ?></h1>
	<?php
		dp_get_template_part(
			'searchform',
			'',
			array(
				'classes'     => array( 'course_search' ),
				'placeholder' => 'Course Search',
				'submit_icon' => 'fa-search',
				'post_type'   => 'course',
				'id'          => 'course_search',
			)
		);
	?>
</div>
<div class="wrap-video">
	<?php if ( ! empty( get_option( 'video1' ) ) ) : ?>
		<video class="homepage-video" id="myVideo" webkit-playsinline="true" playsinline="true" autoplay="true" muted="" loop="true" preload="auto" src="<?php echo wp_get_attachment_url( get_option( 'video1' ) ); ?>" poster="<?php echo wp_get_attachment_url( get_option( 'poster1' ) ); ?>"></video>
	<?php endif; ?>
</div>
<section class="swiper-container">
	<div class="swiper-wrapper">
		<?php if ( ! empty( get_option( 'banner1' ) ) ) : ?>
			<div class="swiper-slide faux-link__element" style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'banner1' ) ); ?> )">
				<a href="<?php echo get_option( 'banner_url1' ); ?>" class="faux-link__overlay-link"></a>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( get_option( 'banner2' ) ) ) : ?>
			<div class="swiper-slide faux-link__element" style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'banner2' ) ); ?> )">
				<a href="<?php echo get_option( 'banner_url2' ); ?>" class="faux-link__overlay-link"></a>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( get_option( 'banner3' ) ) ) : ?>
			<div class="swiper-slide faux-link__element" style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'banner3' ) ); ?> )">
				<a href="<?php echo get_option( 'banner_url3' ); ?>" class="faux-link__overlay-link"></a>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( get_option( 'banner4' ) ) ) : ?>
			<div class="swiper-slide faux-link__element" style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'banner4' ) ); ?> )">
				<a href="<?php echo get_option( 'banner_url4' ); ?>" class="faux-link__overlay-link"></a>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( get_option( 'banner5' ) ) ) : ?>
			<div class="swiper-slide faux-link__element"  style="background-image: url(<?php echo wp_get_attachment_url( get_option( 'banner5' ) ); ?> )">
				<a href="<?php echo get_option( 'banner_url5' ); ?>" class="faux-link__overlay-link"></a>
			</div>
		<?php endif; ?>
	</div>
	<div class="swiper-button-prev swiper-button-white"></div>
	<div class="swiper-button-next swiper-button-white"></div>
</section>
<section class="pull-up--half">
	<div class="container container--large">
		<main class="body-head">
			<div class="container">
				<section class="body-main archive-top-news columns">
					<?php
						$args = array(
							'post_type'      => 'post',
							'cat'            => 'arts-and-culture',
							'posts_per_page' => 6,
						);
						$loop = new WP_Query( $args );
						if ( have_posts() ) :
						while ( $loop->have_posts() ) :
								$loop->the_post();
								$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
								?>
						<div class="column is-full-mobile is-half-tablet is-4-desktop">
							<article class="card card--archive faux-link__element" title="<?php echo esc_attr( get_the_title() ); ?>">
								<div class="post-img" style="background-image:url( 
										<?php
										if ( $background ) {
											echo $background; }
										?>
									)"></div>
								<div class="post-details">
									<h3><?php esc_html_e( sb_truncate( get_the_title(), 40 ) ); ?></h3>
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
				<h2><?php echo( 'Featured Events' ); ?></h2>
				<div class="columns tribe-featured-events">
					<?php
					/**
					 * Featured Event
					 */
					$args           = array(
						'eventDisplay'   => 'custom',
						'posts_per_page' => 2,
						'meta_query'     => array(
							'relation'   => 'AND',
							'featured'   => array(
								'key'     => Tribe__Events__Featured_Events::FEATURED_EVENT_KEY,
								'compare' => 'EXISTS',
							),
							'start_date' => array(
								'key'     => '_EventStartDate',
								'value'   => current_time( 'mysql' ),
								'compare' => '>=',
								'type'    => 'DATETIME',
							),
						),
						'orderby'        => array(
							'start_date' => 'ASC',
						),
					);
					$featured_event = tribe_get_events( $args );
					if ( ! empty( $featured_event ) ) :
						// var_dump($featured_event );
						for ( $i = 0; $i <= 1; $i++ ) :
							if ( ! empty( $featured_event[ $i ]->ID ) ) :
					?>
						<!-- Fetured Event  -->
						<div class="column tribe-featured-event is-full-mobile is-half-tablet is-half-desktop column">
							<div class="event-card card--related faux-link__element" style="background-image:url(<?php echo esc_url( get_the_post_thumbnail_url( $featured_event[ $i ] ) ); ?>"> 
								<div class="main has-color-white">
									<h3><?php echo sb_truncate( get_the_title( $featured_event[ $i ]->ID ), 56 ); ?></h3>
									<div class="event-date"><?php echo tribe_get_start_date( $featured_event[ $i ]->ID, false, 'j M' ) . ' | ' . tribe_get_start_time( $featured_event[ $i ]->ID, false, 'h m' ) . ' - ' . tribe_get_end_time( $featured_event[ $i ]->ID, false, 'h m' ); ?></div>
									<span class="event-content"><?php echo wp_strip_all_tags( wp_trim_words( $featured_event[ $i ]->post_content, 15 ) ); ?></span>
								</div>
								<a class="faux-link__overlay-link" href="<?php echo esc_url( get_the_permalink( $featured_event[ $i ]->ID ) ); ?>"></a> 
							</div>
						</div>
					<?php
						endif;
						endfor;
						endif;
					?>
				</div>
				<h2><?php echo( 'Latest News' ); ?></h2>
				<section class="body-main top-news columns">
					<?php
						$args = array(
							'post_type'      => 'post',
							'cat'            => 'news',
							'posts_per_page' => 4,
						);
						$loop = new WP_Query( $args );
						if ( have_posts() ) :
						while ( $loop->have_posts() ) :
								$loop->the_post();
								$background = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
								?>
					<div class="column is-full-mobile is-full-tablet is-half">
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
	</div>
</section>

<?php
get_footer();
