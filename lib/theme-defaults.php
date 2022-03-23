<?php
/**
 * Genesis SCSS starter theme.
 *
 * This file adds the default theme settings to the Genesis Sample Theme.
 *
 * @package Genesis SCSS starter theme
 * @author  Jane James
 * @license GPL-2.0-or-later
 * @link    https://jane-james.com.au
 */

add_filter( 'simple_social_default_styles', 'genesis_scss_starter_theme_social_default_styles' );
/**
 * Set Simple Social Icon defaults.
 *
 * @since 1.0.0
 *
 * @param array $defaults Social style defaults.
 * @return array Modified social style defaults.
 */
function genesis_scss_starter_theme_social_default_styles( $defaults ) {

	$args = genesis_get_config( 'simple-social-icons-settings' );

	return wp_parse_args( $args, $defaults );

}
