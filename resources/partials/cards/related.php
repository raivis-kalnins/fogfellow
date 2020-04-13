<?php
/**
 * Related card, used in the related loop.
 * Output will differ dependant on if it has
 * & is allowed a thumbnail.
 *
 * @package dp
 */

$categories = get_the_category();
if ( ! empty( $categories ) ) {
	$term_desc = esc_html( $categories[0]->description );
}
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
		<article class="card card--related faux-link__element" title="<?php echo single_cat_title(); ?>">
			<div class="thumbnail" style="background-image:url( 
				<?php
				if ( $background ) {
					echo $background; }
				?>
			)"></div>
			<div class="is-capitalized is-8 card_type"><span><?php echo $args['cat']; ?></span></div>
			<div class="main has-color-black has-background-white">
				<time datetime="<?php echo get_the_date( 'F-jS-Y' ); ?>"><span class="is-8 has-text-weight-light"><?php echo get_the_date( 'F jS Y' ); ?></span></time>
				<h4 class="is-4"><?php esc_html_e( sb_truncate( get_the_title(), 40 ) ); ?></h4>
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
