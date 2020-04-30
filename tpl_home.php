<?php /* Template Name: Home Page TPL - PHP */ 
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
		<?php /* ?>
		<div class="owl-carousel">
			<?php
				if ( has_post_thumbnail() ):
					for ($i = 1; $i <= 7; $i++) :
						if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), "image0$i", NULL, "full"); endif;
					endfor;
				endif;
			?>
		</div>
		<?php */ ?>
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
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
											</div>
										</div>
										<div class="column is-8">
											<?php echo $content; ?>
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
	<div class="container columns">
		<div class="column">
			<h2>Shop</h2>
			<div class="card" style="width: 20rem;">
				<img class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
				<div class="card-block">
					<h4 class="card-title">Orange</h4>
					<p class="card-text">Price: $0.5</p>
					<a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
				</div>
			</div>
			<a class="btn button--green btn-more" href="<?php echo get_home_url(); ?>/shop" title="Shop">Shop</a>
		</div>
	</div>
</section>
<section class="section sc-news sc4" id="news">
	<div class="container columns">
		<div class="column">
			<h2>Blog news</h2>
			<div class="bl-content">
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
			</div>
			<a class="btn button--green btn-more" href="<?php echo get_home_url(); ?>/news" title="news">All news</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>
