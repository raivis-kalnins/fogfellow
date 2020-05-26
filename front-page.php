<?php /* Template Name: Front Page Template */ 
	get_header();
	$custom_logo_id = get_theme_mod('custom_logo'); 
	$logo = wp_get_attachment_image_url($custom_logo_id,'full');
	$home_zig_images = get_field( 'zig_zag_img' ) ? get_field( 'zig_zag_img' ) : get_field( 'zig_zag_img', $home_id );
?>
<section class="section full" id="home-slider">
	<div class="full rellax bg-home" <?php if ( has_header_image() ) { ?> class="custom-background section" data-rellax-speed="5" style="background-image: url('<?php if(is_front_page()) { echo esc_url(get_header_image()); } ?>');" <?php } ?>>
		<?php if( ! empty( $logo ) ) : ?>
			<img src="<?php echo $logo; ?>" alt="Logo - <?php echo $logo_alt; ?>" class="logo-c lazyload fadeIn delay-025 rellax" data-rellax-speed="2" data-rellax-xs-speed="1" />
		<?php endif; ?>
		<h1 class="rellax" data-rellax-speed="2" data-rellax-xs-speed="1"><?php the_title(); ?></h1>
		<a class="scroll-downs btn-sl fadeIn delay-025 rellax" data-rellax-speed="2" data-rellax-xs-speed="1" href="#hello" title="Hello">
			<div class="mousey">
				<div class="scroller"></div>
			</div>
		</a>
	</div>
</section>
<div class="d-container"><div class="diagonal diagonal--left">
	<span style="background-image: url(<?php
		if ( $home_zig_images ) :
			foreach ( $home_zig_images as $index => $home_zig_image ) :
				if ( 0 == $index ) :
					echo $home_zig_image['url'];
				endif;
			endforeach;
		endif;
		?>)"></span>
	</div>
</div>
<section class="section sc-about sc1" id="hello">
	<div class="container columns">
		<div class="column is-4 rellax" data-rellax-speed="4" data-rellax-xs-speed="3">
			<?php if (have_posts()): 
				while (have_posts()) : the_post(); ?>
					<div class="description"><?php the_content(); ?></div>
				<?php endwhile; ?>
			<?php else: ?>
				<h1><?php _e( 'Sorry, nothing to display.', 'dp' ); ?></h1>
			<?php endif; ?>
		</div>
		<div class="column is-8 rellax home-img" data-rellax-speed="7" data-rellax-xs-speed="5">
			<?php if ( has_post_thumbnail( $_post->ID ) ) : ?>
				<div class="about-img animated fadeIn">
					<img src="<?php 
					if ( wp_is_mobile() ) { 
						echo the_post_thumbnail_url(null, "small"); 
					} else { 
						echo the_post_thumbnail_url(null, "full"); 
					} ?>" alt="" class="lazyload" />
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<div class="d-container rellax" data-rellax-speed="1" data-rellax-xs-speed="1">
	<div class="diagonal diagonal--right">
		<span style="background-image: url(<?php
		if ( $home_zig_images ) :
			foreach ( $home_zig_images as $index => $home_zig_image ) :
				if ( 1 == $index ) :
					echo $home_zig_image['url'];
				endif;
			endforeach;
		endif;
		?>)"></span>
	</div>
</div>
<section class="section sc-products sc2" id="products">
	<div class="container columns">
		<div class="column">
			<h2>Products</h2>
			<div class="bl-content">
				<?php 
					if( have_rows('products') ):
					$rowCount = count( get_field('products') );
					$i = 1;
				?>
					<ul class="tab-container">
						<?php while( have_rows('products') ): 
							the_row();
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$content = get_sub_field('description');
							$n = $i++;
							?>
							<li>
								<input class="tab-toggle" id="tab-<?php echo $n; ?>" type="radio" name="toggle" <?php if( $n == 1) { echo 'checked'; } ?> /> 
								<label data-title="Tab <?php echo $n; ?>" class="tab" for="tab-<?php echo $n; ?>"><?php echo $title; ?></label>            
								<ul class="tab-content-container">
									<li class="tab-content columns">
										<div class="column is-4">
											<div class="image-box">
											<a data-fancybox="gallery" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
											</div>
										</div>
										<div class="column is-8">
											<?php echo $content; ?>
											<span class="button--green btn-desc-<?php echo $n; ?>">Read more</span>
											<div class="arrows">
												<label class="back tab-<?php echo $n - 1; ?>" for="tab-<?php echo $n - 1; ?>">&#8249;</label>
												<label class="next tab-<?php echo $n + 1; if( $n == $rowCount) { echo ' last'; } ?>" for="tab-<?php echo $n + 1; ?>">&#8250;</label>   
											</div>
										</div>
									</li>
								</ul>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="section sc-shop sc3" id="shop">
	<div class="container">
		<h2>Shop</h2>
		<div class="bl-content columns swiper-container">
			<div class="swiper-wrapper">
				<?php
					$args_shop = array(
						'post_type'      => 'shop',
						'posts_per_page' => 12,
					);
					$loop_shop = new WP_Query( $args_shop );
					if ( have_posts() ) :
					while ( $loop_shop->have_posts() ) :
							$loop_shop->the_post();
							$bg_shop = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
							$price = get_field('price');
				?>
				<div class="column swiper-slide is-full-mobile is-half-tablet is-3">
					<article class="card card--related all-shop faux-link__element" title="<?php echo esc_attr( get_the_title() ); ?>">
						<div class="thumbnail" style="background-image:url( 
								<?php
								if ( $bg_shop ) {
									echo $bg_shop; }
									$post = get_post( $post_id );
									$slug = $post->post_name;
								?>
							)"></div>
							<div class="main has-color-black has-background-white">
								<h3 class="is-4" data-title="<?php esc_html_e( sb_truncate( get_the_title(), 40 ) ); ?>"><?php esc_html_e( sb_truncate( get_the_title(), 55 ) ); ?></h3>
								<div class="card-desc"><?php esc_html_e( sb_truncate( get_the_excerpt(), 54 ) ); ?></div>
								<div class="card-price">Price: <b>€ <?php echo $price; ?></b></div>
								<a href="#" data-name="<?php echo $slug; ?>" data-price="<?php echo $price; ?>" class="add-to-cart button--fullgreen button">Add to cart</a>
								<a href="<?php the_permalink(); ?>" class="read-more-shop button--fullgrey button">Read More</a>
							</div>
					</article>
				</div>
				<?php
					endwhile;
					wp_reset_query();
					endif;
				?>
			</div>
		</div>
		<a class="btn button--green btn-more" href="<?php echo get_home_url(); ?>/shop" title="Shop">All products</a>
	</div>
</section>
<section class="section sc-news sc4" id="news">
	<div class="container">
		<h2>Blog news</h2>
		<div class="bl-content columns">
			<?php
				$args_news = array(
					'post_type'      => 'post',
					'cat'            => 'news',
					'posts_per_page' => 4,
				);
				$loop_news = new WP_Query( $args_news );
				if ( have_posts() ) :
				while ( $loop_news->have_posts() ) :
						$loop_news->the_post();
						$bg_news = get_the_post_thumbnail_url( get_the_ID(), 'hd' );
			?>
			<div class="column is-full-mobile is-half-tablet is-3">
				<article class="card card--related all-news faux-link__element" title="<?php echo esc_attr( get_the_title() ); ?>">
					<div class="thumbnail" style="background-image:url( 
							<?php
							if ( $bg_news ) {
								echo $bg_news; }
							?>
						)"></div>
						<div class="main has-color-black has-background-white">
							<h3 class="is-4"><?php esc_html_e( sb_truncate( get_the_title(), 40 ) ); ?></h3>
							<span class="desc"><?php esc_html_e( sb_truncate( get_the_excerpt(), 54 ) ); ?></span>
							<span class="read-more">Read More</span>
						</div>
					<a href="<?php the_permalink(); ?>" class="faux-link__overlay-link"></a>
				</article>
			</div>
			<?php
				endwhile;
				wp_reset_query();
				endif;
			?>
		</div>
		<a class="btn button--green btn-more" href="<?php echo get_home_url(); ?>/news" title="news">All news</a>
	</div>
</section>
<?php get_footer(); ?>
