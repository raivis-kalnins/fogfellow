<?php
/**
 * File to manage the customiser
 * This could be upgaded to more simplet json format in the future
 *
 * @package dp
 */

/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * https://robincornett.com/additional-css-wordpress-customizer/
 */
function dp_remove_css_section( $wp_customize ) {
	$wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'dp_remove_css_section', 15 );

/**
 * File to manage the customiser
 */
function register_additional_customizer_settings( $wp_customize ) {

	$wp_customize->add_setting(
		'address',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
		);
	$wp_customize->add_control(
		new WP_Customize_Control(
		$wp_customize,
		'address',
		array(
			'label'       => __( 'Address', 'textdomain' ),
			'description' => __( 'Company Address', 'textdomain' ),
			'priority'    => 10,
			'section'     => 'title_tagline',
			'type'        => 'text',
		)
	)
	);

	$wp_customize->add_setting(
		'email',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
		);
	$wp_customize->add_control(
		new WP_Customize_Control(
		$wp_customize,
		'email',
		array(
			'label'       => __( 'Email', 'textdomain' ),
			'description' => __( 'Company Email', 'textdomain' ),
			'priority'    => 10,
			'section'     => 'title_tagline',
			'type'        => 'text',
		)
	)
	);

	$wp_customize->add_setting(
		'phone',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
		);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'phone',
			array(
				'label'       => __( 'Phone', 'textdomain' ),
				'description' => __( 'Company Phone', 'textdomain' ),
				'priority'    => 10,
				'section'     => 'title_tagline',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'shop-desc',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
		);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'shop-desc',
			array(
				'label'       => __( 'Store', 'textdomain' ),
				'description' => __( 'Shop description', 'textdomain' ),
				'priority'    => 10,
				'section'     => 'title_tagline',
				'type'        => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'shop-desc-star',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
		);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'shop-desc-star',
			array(
				'label'       => __( 'Shop comment', 'textdomain' ),
				'description' => __( 'Shop comment *', 'textdomain' ),
				'priority'    => 10,
				'section'     => 'title_tagline',
				'type'        => 'textarea',
			)
		)
	);


	/**
	 * New Homepage Media section
	 */
	$wp_customize->add_section(
		'homepage_options',
		array(
			'title'    => __( 'Homepage Media', 'textdomain' ),
			'priority' => 30,
		)
	);

	// Video & Poster
	$wp_customize->add_setting(
		'poster1',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'poster1',
			array(
				'label'     => __( 'Homepage video poster', 'textdomain' ),
				'mime_type' => 'image',
				'section'   => 'homepage_options',
			)
		)
	);

	$wp_customize->add_setting(
		'video1',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'video1',
			array(
				'label'     => __( 'Homepage video', 'textdomain' ),
				'mime_type' => 'video',
				'section'   => 'homepage_options',
			)
		)
	);

	// Slide 1
	$wp_customize->add_setting(
		'slide_url1',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_url1',
			array(
				'label'    => __( '1. Slide URL', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide_txt1',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_txt1',
			array(
				'label'    => __( '1. Slide description', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide1',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'slide1',
			array(
				'label'     => __( '1. Slide Image', 'textdomain' ),
				'mime_type' => 'image',
				'section'   => 'homepage_options',
			)
		)
	);

	// slide 2
	$wp_customize->add_setting(
		'slide_url2',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_url2',
			array(
				'label'    => __( '2. slide URL', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide_txt2',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_txt2',
			array(
				'label'    => __( '2. Slide description', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide2',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'slide2',
			array(
				'label'     => __( '2. Slide Image', 'textdomain' ),
				'mime_type' => 'image',
				'section'   => 'homepage_options',
			)
		)
	);

	// slide 3
	$wp_customize->add_setting(
		'slide_url3',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_url3',
			array(
				'label'    => __( '3. slide URL', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide_txt3',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_txt3',
			array(
				'label'    => __( '3. Slide description', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide3',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'slide3',
			array(
				'label'     => __( '3. slide Image', 'textdomain' ),
				'mime_type' => 'image',
				'section'   => 'homepage_options',
			)
		)
	);

	// slide 4
	$wp_customize->add_setting(
		'slide_url4',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_url4',
			array(
				'label'    => __( '4. slide URL', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide_txt4',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_txt4',
			array(
				'label'    => __( '4. Slide description', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide4',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'slide4',
			array(
				'label'     => __( '4. slide Image', 'textdomain' ),
				'mime_type' => 'image',
				'section'   => 'homepage_options',
			)
		)
	);

	// slide 5
	$wp_customize->add_setting(
		'slide_url5',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_url5',
			array(
				'label'    => __( '5. slide URL', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide_txt5',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'slide_txt5',
			array(
				'label'    => __( '5. Slide description', 'textdomain' ),
				'priority' => 10,
				'section'  => 'homepage_options',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'slide5',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'slide5',
			array(
				'label'     => __( '5. slide Image', 'textdomain' ),
				'mime_type' => 'image',
				'section'   => 'homepage_options',
			)
		)
	);

	/**
	 * New Social Media section
	 */
	$wp_customize->add_section(
		'soc_media',
		array(
			'title'    => __( 'Social Media', 'textdomain' ),
			'priority' => 30,
		)
	);

	// Facebook
	$wp_customize->add_setting(
		'soc_fb',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'soc_fb',
			array(
				'label'    => __( 'Facebook', 'textdomain' ),
				'priority' => 10,
				'section'  => 'soc_media',
				'type'     => 'text',
			)
		)
	);

	// Linkedin
	$wp_customize->add_setting(
		'soc_ln',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'soc_ln',
			array(
				'label'    => __( 'Linkedin', 'textdomain' ),
				'priority' => 10,
				'section'  => 'soc_media',
				'type'     => 'text',
			)
		)
	);

	// Instagram
	$wp_customize->add_setting(
		'soc_in',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'soc_in',
			array(
				'label'    => __( 'Instagram', 'textdomain' ),
				'priority' => 10,
				'section'  => 'soc_media',
				'type'     => 'text',
			)
		)
	);

	// YouTube
	$wp_customize->add_setting(
		'soc_yt',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'soc_yt',
			array(
				'label'    => __( 'YouTube', 'textdomain' ),
				'priority' => 10,
				'section'  => 'soc_media',
				'type'     => 'text',
			)
		)
	);

	/**
	 * New Partners section
	 */
	$wp_customize->add_section(
		'partners',
		array(
			'title'    => __( 'Our Partners', 'textdomain' ),
			'priority' => 30,
		)
	);

	// Partner 1
	$wp_customize->add_setting(
		'partner1',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'partner1',
			array(
				'label'    => __( '1. Partner URL', 'textdomain' ),
				'priority' => 10,
				'section'  => 'partners',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'logo1',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'logo1',
			array(
				'label'     => __( '1. Partner Logo', 'textdomain' ),
				'mime_type' => 'image',
				'section'   => 'partners',
			)
		)
	);

	// Partner 2
	$wp_customize->add_setting(
		'partner2',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'partner2',
			array(
				'label'            => __( '2. Partner URL', 'textdomain' ),
				'priority'         => 10,
				'section'          => 'partners',
				'type'             => 'text',
				'background-color' => 'white',
			)
		)
	);

	$wp_customize->add_setting(
		'logo2',
		array(
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'logo2',
			array(
				'section'   => 'partners',
				'label'     => '2. Partner Logo',
				'mime_type' => 'image',
			)
		)
	);

	// Partner 3
	$wp_customize->add_setting(
		'partner3',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'partner3',
			array(
				'label'    => __( '3. Partner URL', 'textdomain' ),
				'priority' => 10,
				'section'  => 'partners',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'logo3',
		array(
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'logo3',
			array(
				'section'   => 'partners',
				'label'     => '3. Partner Logo',
				'mime_type' => 'image',
			)
		)
	);
}
add_action( 'customize_register', 'register_additional_customizer_settings', 10 );

/**
 * Add custom style for admin
 */
function my_customizer_styles() {
	?>
		<style>
			#sub-accordion-section-partners li:nth-child(even) {
				padding: 5px;
			}
			#sub-accordion-section-partners li:nth-child(odd) {
				background-color: #999999;
				color: #ffffff;
				padding: 5px;
			}
		</style>
	<?php
}
add_action( 'customize_controls_print_styles', 'my_customizer_styles', 999 );

/**
 * Change body class
 */
function custom_class( $classes ) {
	if ( is_page( 'about' ) ) {
		$classes[] = 'body-pink';
	} elseif ( ( is_page( 'contact' ) ) || ( is_page( 'home' ) ) || ( is_page( 'campaign' ) ) ) {
		$classes[] = 'body-black';
	} else {
		$classes[] = 'body-green';
	}
	return $classes;
}
add_filter( 'body_class', 'custom_class' );

/**
 * Change logo class
 */
function change_logo() {
	if ( is_page( 'about' ) ) {
		$logo = 'logo-pink';
	} elseif ( ( is_page( 'contact' ) ) || ( is_page( 'home' ) ) || ( is_page( 'campaign' ) ) ) {
		$logo = 'logo-black';
	} else {
		$logo = 'logo-green';
	}

	// Change logo
	switch ( $logo ) {
		case 'logo-white':
			echo dp_get_assets( 'img/logo-white.png' );
			break;
		case 'logo-black':
			echo dp_get_assets( 'img/logo-black.png' );
			break;
		case 'logo-pink':
			echo dp_get_assets( 'img/logo-pink.png' );
			break;
		case 'logo-green':
				echo dp_get_assets( 'img/logo-green.png' );
			break;
		default:
			echo dp_get_assets( 'img/logo-green.png' );
			break;
	};
}

/**
 * Hide The Events Calendar Admin Gutenberg blocks
 */
function hide_event_tables( $hook ) {
?>

	<style type="text/css">
		[aria-label="Block: Event Price"],
		.editor-block-list-item-tribe-event-price,
		[aria-label="Block: Event Sharing"],
		.editor-block-list-item-tribe-event-links,
		[aria-label="Block: Related Events"],
		.editor-block-list-item-tribe-related-events,
		[aria-label="Block: Event Organizer"],
		.editor-block-list-item-tribe-event-organizer { 
			display: none !important; 
		}
	</style> 
<?php
}
add_action( 'admin_enqueue_scripts', 'hide_event_tables' );


/**
 * Redirect 'category/news' category to 'News page' ( at http://www.example.com/news' )
 *
 */
function template_category_template_redirect()
{
    if( is_category())
    {
        wp_redirect( site_url() );
        die;
    }
}
add_action( 'template_redirect','template_category_template_redirect' );
