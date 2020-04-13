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
		<a class="scroll-downs btn-sl fadeIn delay-025 rellax" data-rellax-speed="2" data-rellax-xs-speed="1" href="#about" title="About">
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
<section class="section sc-about" id="sc1">
	<div class="container columns">
		<div class="column is-4 rellax" data-rellax-speed="4" data-rellax-xs-speed="3">
			<?php if (have_posts()): 
				while (have_posts()) : the_post(); ?>
					<div class="description"><?php the_content(); ?></div>
				<?php endwhile; ?>
			<?php else: ?>
				<h1><?php _e( 'Sorry, nothing to display.', 'dp' ); ?></h1>
			<?php endif; ?>
			<a class="btn button--green btn-more" href="#products" title="products">Read more</a>
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
<div class="d-container">
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
<section class="section sc-products" id="sc2">
	<div class="container columns">
		<div class="column">
			<h2>Products</h2>
			<?php if( have_rows('products') ): ?>
				<div class="row d-flex justify-content-center">
					<?php while( have_rows('products') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$link = get_sub_field('link');
						?>
						<div class="col-12 col-sm-12 col-md-4 col-lg-2">
							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>">
							<?php endif; ?>
							<?php 
								$img_i = file_get_contents($image['url']);
								$data_i = base64_encode($img_i);
							?>
								<div style="background: url('data:image/svg+xml;base64,<?php echo $data_i; ?>') center / cover no-repeat"></div>
								<h3><?php echo $title; ?></h3>
							<?php if( $link ): ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<a class="btn button--white btn-more" href="#shop" title="Shop">Read more</a>
		</div>
	</div>
</section>
<section class="section" id="sc3">
	<div class="container columns">
		<div class="column">
			<h2>Shop</h2>
			<p>Loop shoping items...</p>
			<a class="btn button--orange btn-more" href="#news" title="News">Read more</a>
		</div>
	</div>
</section>
<section class="section" id="sc4">
	<div class="container columns">
		<div class="column">
			<h2>Blog news</h2>
			<?php /*
			function wpdocs_custom_excerpt_length( $length ) { return 10; }
			add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 32 );
			$args = array('post_type'=>'post','cat'=>'');
			$loop = new WP_Query($args); 
			while ($loop->have_posts()): $loop->the_post(); ?>
				<div class="post-item col-4">
					<article>
						<?php the_post_thumbnail(); ?>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
					</article>
				</div>
			<?php endwhile; wp_reset_query(); */ ?>
			<a class="btn button--orange btn-more" href="#image-gallery" title="Gallery">Read more</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>
