<?php
/**
 *
 * @package dp
 * @version 1.0.0
 */

/**
 * Sidebar Menu Class
 */
class Sidebar_Menu_Walker extends Walker_Nav_Menu {
	/**
	 * Starts the list before the elements are added.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// Depth-dependent classes.
		$indent        = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1 ); // because it counts the first submenu as 0
		$classes       = array(
			'sub-menu ',
			( $display_depth % 2 ? 'menu-odd' : 'menu-even' ),
			( $display_depth >= 2 ? 'sub-' : ' ' ),
			'menu-depth-' . $display_depth,
		);
		$class_names   = implode( '', $classes );

		// Build HTML for output.
		$output .= "\n" . $indent . '<i class="nav-ico"></i><ul class="' . $class_names . '">' . "\n";
	}
	/**
	 * Start the element output.
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
		// Depth-dependent classes.
		$depth_classes     = array(
			( 0 ? 'main-menu-item' : 'sub-menu-item' == $depth ),
			( $depth >= 2 ? 'sub-sub-menu-item' : ' ' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item',
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
		// Passed classes.
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		// $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		// Build HTML.
		$output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="faux-link__element nav-item' . $depth_class_names . '"><input aria-label="Toggle Sub menu items" type="checkbox" id="sub-menu-' . $item->ID . '-check" class="toggle-sub-mobile hidden hidden--fixed" aria-hidden="true" /><label for="sub-menu-' . $item->ID . '-check" class="faux-link__overlay-link"></label>';
		// Link attributes.
		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
		// Build HTML output and pass through the proper filter.
		$item_output = sprintf(
			'%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);
		$output     .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
