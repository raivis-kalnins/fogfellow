<?php
/**
 * Related content partial.
 *
 * @package dp
 */

?>

<section class="section related-content has-background-white-ter">
	<div class="container container--large">
		<header class="has-text-centered is-block">
			<h3 class="is-3 title is-inline">You may also like</h3>
		</header>
		<div class="main-loop columns is-multiline is-marginless">
			<?php
				$has_card_type = true;
				$has_thumbnail = true;
				// temp loop until we know what we are looping.
				require get_stylesheet_directory() . '/resources/partials/cards/related.php';
			?>
		</div>
	</div>
</section>
