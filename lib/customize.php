<?php
/**
 * Genesis SCSS starter theme.
 *
 * This file adds the Customizer additions to the Genesis Sample Theme.
 *
 * @package Genesis SCSS starter theme
 * @author  Jane James
 * @license GPL-2.0-or-later
 * @link    https://jane-james.com.au
 */

add_action( 'customize_register', 'genesis_scss_starter_theme_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function genesis_scss_starter_theme_customizer_register( $wp_customize ) {

	$appearance = genesis_get_config( 'appearance' );

	$wp_customize->add_setting(
		'genesis_scss_starter_theme_link_color',
		[
			'default'           => $appearance['default-colors']['link'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genesis_scss_starter_theme_link_color',
			[
				'description' => __( 'Change the color of post info links and button blocks, the hover color of linked titles and menu items, and more.', 'genesis-scss-starter-theme' ),
				'label'       => __( 'Link Color', 'genesis-scss-starter-theme' ),
				'section'     => 'colors',
				'settings'    => 'genesis_scss_starter_theme_link_color',
			]
		)
	);

	$wp_customize->add_setting(
		'genesis_scss_starter_theme_accent_color',
		[
			'default'           => $appearance['default-colors']['accent'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genesis_scss_starter_theme_accent_color',
			[
				'description' => __( 'Change the default hover color for button links, menu buttons, and submit buttons. The button block uses the Link Color.', 'genesis-scss-starter-theme' ),
				'label'       => __( 'Accent Color', 'genesis-scss-starter-theme' ),
				'section'     => 'colors',
				'settings'    => 'genesis_scss_starter_theme_accent_color',
			]
		)
	);

	$wp_customize->add_setting(
		'genesis_scss_starter_theme_logo_width',
		[
			'default'           => 350,
			'sanitize_callback' => 'absint',
			'validate_callback' => 'genesis_scss_starter_theme_validate_logo_width',
		]
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'genesis_scss_starter_theme_logo_width',
		[
			'label'       => __( 'Logo Width', 'genesis-scss-starter-theme' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'genesis-scss-starter-theme' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'genesis_scss_starter_theme_logo_width',
			'type'        => 'number',
			'input_attrs' => [
				'min' => 100,
			],

		]
	);

}

/**
 * Displays a message if the entered width is not numeric or greater than 100.
 *
 * @param object $validity The validity status.
 * @param int    $width The width entered by the user.
 * @return int The new width.
 */
function genesis_scss_starter_theme_validate_logo_width( $validity, $width ) {

	if ( empty( $width ) || ! is_numeric( $width ) ) {
		$validity->add( 'required', __( 'You must supply a valid number.', 'genesis-scss-starter-theme' ) );
	} elseif ( $width < 100 ) {
		$validity->add( 'logo_too_small', __( 'The logo width cannot be less than 100.', 'genesis-scss-starter-theme' ) );
	}

	return $validity;

}
