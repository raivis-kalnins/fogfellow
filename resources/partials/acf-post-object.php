<?php
/**
 * Article Event Post Object Block Template.
 *
 * @package dp
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'article-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'article';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$post_object_title = get_field( 'post_object_title' );
$post_object_text  = get_field( 'post_object_text' );
$post_object   = get_field( 'post_object' );

if ( $post_object ) :
	$post      = $post_object;
	$post_type = ucfirst( $post->post_type );
	setup_postdata( $post );
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class_name ); ?> card card--post-object faux-link__element">
	<div class="post-object-header"><?php echo $post_type; ?></div>
	<div class="post-object-content">
		<h4 class="post-object-text"><?php echo $post_object_title; ?></h4>
		<span class="post-object-text"><?php echo $post_object_text; ?></span>
		<span class="read-more">Read more</span>
	</div>
		<a href="<?php echo get_permalink( $post->ID ); ?>" class="faux-link__overlay-link" title="<?php echo get_the_title( $post->ID ); ?>"></a>
</div>

<?php
	wp_reset_postdata();
	endif;
?>
