<?php
/**
 * Genesis SCSS starter theme appearance settings.
 *
 * @package Genesis SCSS starter theme
 * @author  Jane James
 * @license GPL-2.0-or-later
 * @link    https://jane-james.com.au
 */

$genesis_scss_starter_theme_default_colors = [
	'link'   => '#0073e5',
	'accent' => '#0073e5',
];

$genesis_scss_starter_theme_link_color = get_theme_mod(
	'genesis_scss_starter_theme_link_color',
	$genesis_scss_starter_theme_default_colors['link']
);

$genesis_scss_starter_theme_accent_color = get_theme_mod(
	'genesis_scss_starter_theme_accent_color',
	$genesis_scss_starter_theme_default_colors['accent']
);

$genesis_scss_starter_theme_link_color_contrast   = genesis_scss_starter_theme_color_contrast( $genesis_scss_starter_theme_link_color );
$genesis_scss_starter_theme_link_color_brightness = genesis_scss_starter_theme_color_brightness( $genesis_scss_starter_theme_link_color, 35 );

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $genesis_scss_starter_theme_link_color,
	'button-color'         => $genesis_scss_starter_theme_link_color_contrast,
	'button-outline-hover' => $genesis_scss_starter_theme_link_color_brightness,
	'link-color'           => $genesis_scss_starter_theme_link_color,
	'default-colors'       => $genesis_scss_starter_theme_default_colors,
	'editor-color-palette' => [
		[
			'name'  => __( 'Custom color', 'genesis-scss-starter-theme' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genesis_scss_starter_theme_link_color,
		],
		[
			'name'  => __( 'Accent color', 'genesis-scss-starter-theme' ),
			'slug'  => 'theme-secondary',
			'color' => $genesis_scss_starter_theme_accent_color,
		],
	],
	'editor-font-sizes'    => [
		[
			'name' => __( 'Small', 'genesis-scss-starter-theme' ),
			'size' => 12,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'genesis-scss-starter-theme' ),
			'size' => 18,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'genesis-scss-starter-theme' ),
			'size' => 20,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'genesis-scss-starter-theme' ),
			'size' => 24,
			'slug' => 'larger',
		],
	],
];
