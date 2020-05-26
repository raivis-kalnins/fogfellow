<?php
/**
 * The Loop
 *
 * @package DP
 */

?>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
			</a>
		<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<?php sb_truncate( get_the_excerpt() ); ?>

			<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

			<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'glass' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>