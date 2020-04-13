<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */
?>
<ul id="accordion-menu"  class="menu sidebar-menu">
	<?php
		wp_nav_menu(
			array(
				'menu'       => 'Sidebar Menu',
				'depth'      => 3,
				'container'  => '',
				'menu_class' => 'sidebar-menu',
				'items_wrap' => '%3$s',
				'walker'     => new Sidebar_Menu_Walker(),
			)
		);
	?>
</ul>
