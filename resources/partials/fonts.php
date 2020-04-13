<?php
/**
 * Include fonts
 *
 * @package dp
 */

$font_config = dp_config( 'font-loader' );
if ( $font_config ) :
?>
	<script id="font-loader">
		WebFontConfig = <?php echo json_encode( $font_config ); ?>;

		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>
<?php
endif;
