<?php
/**
 * Pagination
 *
 * @package    dp
 * @author     Digital Pulse <hello@digitalpulse.click>
 * @copyright  Digital Pulse
 */
$paged    = get_query_var( 'paged' );
$max_page = $wp_query->max_num_pages;
$request  = remove_query_arg( 'paged' );
$base     = trailingslashit( get_bloginfo( 'url' ) );

/**
 * Check is or not paginated
 */
if ( $wp_query->max_num_pages > 1 ) :
?>
	<nav class="pagination is-centered" role="navigation" aria-label="pagination">
		<div class="pagination-wrap">
			<a href="<?php echo previous_posts( false ); ?>"
				class="pagination-previous"
				<?php
					if ( 1 > $paged ) :
					esc_attr_e( 'disabled' );
					endif;
				?>
			><?php _e( 'Previous' ); ?></a>
			<a href="<?php echo next_posts( $max_page, false ); ?>"
				class="pagination-next"
			<?php
			if ( $max_page <= $paged ) :
				esc_attr_e( 'disabled' );
			endif;
			?>
			><?php _e( 'Next page' ); ?></a>
			<ul class="pagination-list"
				<?php
					if ( 1 > $paged ) :
					esc_attr_e( 'disabled' );
					endif;
				?>
				>
				<?php for ( $n = 1; $n <= $max_page; $n++ ) : ?>
					<li>
						<?php if ( $n === $paged || 0 === $paged && 1 === $n ) : ?>
							<span class="pagination-link is-current" aria-label="Page <?php esc_attr_e( $n ); ?>" aria-current="page"
							><?php _e( $n ); ?></span>
						<?php else : ?>
							<?php $page_link = get_pagenum_link( $n ); ?>
							<a href="<?php echo esc_url( $page_link ); ?>" class="pagination-link" aria-label="Goto page <?php esc_attr_e( $n ); ?>"
							><?php _e( $n ); ?></a>
						<?php endif; ?>
					</li>
				<?php endfor; ?>
			</ul>
		</div>
	</nav>
<?php else : ?>
	<!-- no paging -->
<?php endif; ?>
<!-- /pagination -->
