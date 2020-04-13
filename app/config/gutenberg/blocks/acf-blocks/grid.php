<?php
/**
 * Block Name: Grid
 *
 * @package dp
 */

// Partialise the views.
$pre_title = 'welcome world';
$title     = 'Hello World';
$excerpt   = '';

$background_style = 'background-color: blue;';

$text_alignment = get_field( 'text_alignment' ) ? get_field( 'text_alignment' ) : 'center';
$text_alignment = 'has-text-align-' . $text_alignment;

// Vertical Alignment
$alignment        = get_field( 'vertical_alignment' ) ? get_field( 'vertical_alignment' ) : 'center';
$alignment        = 'is-v' . $alignment;
$background_class = '';

?>

<section class="grid">
	<div class="columns is-multiline is-marginless">
		<div class="column is-paddingless is-12-tablet is-6-desktop is-7-widescreen">
			<?php
				dp_get_template_part(
					'resources/partials/cta/front-page',
					'',
					array(
						'id'     => 'front-page-main-cta',
						'append' => 'left_block_',
					)
				);
			?>
		</div>
		<div class="column is-paddingless is-auto">
			<div class="is-marginless">
				<div>
					<?php
						dp_get_template_part(
							'resources/partials/cta/front-page-search',
							'',
							array(
								'append'       => 'cta_',
								'is_sub_field' => 'cta_',
							)
						);
					?>
				</div>
				<div class="columns is-multiline right-side is-marginless">
					<?php
					if ( have_rows( 'right_block' ) ) :
						$total_blocks = count( get_field( 'right_block' ) );
						while ( have_rows( 'right_block' ) ) :
							the_row();

							if ( $total_blocks > 2 ) :
								$is_class = 3 === get_row_index() ? 'is-auto is-12-mobile' : 'is-6 is-12-mobile';
							else :
								$is_class = 'is-auto is-12-mobile';
							endif;

							echo '<div class="column ' . esc_attr( $is_class ) . ' is-paddingless">';
								dp_get_template_part(
									'resources/partials/cta/front-page',
									'',
									array(
										'append'       => 'cta_',
										'is_sub_field' => 'cta_',
										'heading_size' => 'is-3',
										'image_size'   => 'small_square',
									)
								);
							echo '</div>';
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
