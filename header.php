<?php  	
	ini_set('display_errors', 1); // debug PHP
	$custom_logo_id = get_theme_mod('custom_logo'); 
	$logo = wp_get_attachment_image_src($custom_logo_id,'full');
	$logo_s = get_template_directory_uri().'/resources/dist/img/br/fog-logo-s.png';
	$logo_alt = get_bloginfo('name');
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="<?php echo get_template_directory_uri(); ?>/resources/dist/img/i/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/resources/dist/img/i/touch.png" rel="apple-touch-icon-precomposed">
			<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178425106-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-178425106-1');
        </script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="root">
		<?php do_action( 'after_body_open_tag' ); ?>
		<div id="prline"></div>
		<main role="main">
			<nav class="navbar" role="navigation" aria-label="main navigation">
				<label class="container">
					<div class="navbar-brand">
						<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo $logo_s; ?>" alt="Logo - <?php echo $logo_alt; ?>" /></a>
					</div>
					<input class="hm-input" type="checkbox">
					<div id="menu-hm">
						<i class="hm-line first"></i>
						<i class="hm-line second"></i>
						<i class="hm-line third"></i>
					</div>
					<div class="navbar-menu">
						<div class="navbar-end">
							<?php
								if( is_front_page() ) :
									wp_nav_menu(
										array(
											'menu'        => 'Main menu',
											'depth'       => 3,
											'container'   => '',
											'menu_class'  => '',
											'items_wrap'  => '%3$s',
											'walker'      => new Bulma_Menu_Walker(),
											'fallback_cb' => 'Bulma_Menu_Walker::fallback',
										)
									);
								else:
									wp_nav_menu(
										array(
											'menu'        => 'Sidebar menu',
											'depth'       => 3,
											'container'   => '',
											'menu_class'  => '',
											'items_wrap'  => '%3$s',
											'walker'      => new Bulma_Menu_Walker(),
											'fallback_cb' => 'Bulma_Menu_Walker::fallback',
										)
									);
								endif;
							?>
						</div>
					</div>
					<div class="cart-top">
						<button type="button" class="btn-cart button modal-button" data-toggle="modal" data-target="modal"><span class="total-count"></span></button>
						<button type="button"  class="clear-cart"></button>
					</div>
				</label>
			</nav>
			<?php if(is_front_page()) : ?>
				<div class="waveHorizontals">
					<svg id="waveHorizontal1" class="waveHorizontal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 350 20" preserveAspectRatio="none" enable-background="new 0 0 350 20" xml:space="preserve">
						<path d="M0,17.1C29.9,17.1,57.8,0,87.5,0c30.2,0,58.1,17.1,87.1,17.1c29.9,0,57.8-17.1,87.7-17.1	c29.9,0,57.8,17.1,87.7,17.1V20H0V17.1z" fill="rgba(69,121,226,0.5)" />
					</svg>
					<svg id="waveHorizontal2" class="waveHorizontal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 350 20" preserveAspectRatio="none" enable-background="new 0 0 350 20" xml:space="preserve">
						<path d="M0,17.1C29.9,17.1,57.8,0,87.5,0c30.2,0,58.1,17.1,87.1,17.1c29.9,0,57.8-17.1,87.7-17.1	c29.9,0,57.8,17.1,87.7,17.1V20H0V17.1z" fill="rgba(52,97,193,0.5)" />
					</svg>
					<svg id="waveHorizontal3" class="waveHorizontal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 350 20" preserveAspectRatio="none" enable-background="new 0 0 350 20" xml:space="preserve">
						<path d="M0,17.1C29.9,17.1,57.8,0,87.5,0c30.2,0,58.1,17.1,87.1,17.1c29.9,0,57.8-17.1,87.7-17.1	c29.9,0,57.8,17.1,87.7,17.1V20H0V17.1z" fill="rgba(18,8,70,0.9)" />
					</svg>
				</div>
			<?php endif; ?>
