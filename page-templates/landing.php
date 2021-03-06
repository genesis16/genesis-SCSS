<?php
/**
 * Genesis SCSS starter theme.
 *
 * This file adds the landing page template to the Genesis Sample Theme.
 *
 * Template Name: Landing
 *
 * @package Genesis SCSS starter theme
 * @author  Jane James
 * @license GPL-2.0-or-later
 * @link    https://jane-james.com.au
 */

add_filter( 'body_class', 'genesis_scss_starter_theme_landing_body_class' );
/**
 * Adds landing page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function genesis_scss_starter_theme_landing_body_class( $classes ) {

	$classes[] = 'landing-page';
	return $classes;

}

// Removes Skip Links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );

add_action( 'wp_enqueue_scripts', 'genesis_scss_starter_theme_dequeue_skip_links' );
/**
 * Dequeues Skip Links Script.
 *
 * @since 1.0.0
 */
function genesis_scss_starter_theme_dequeue_skip_links() {

	wp_dequeue_script( 'skip-links' );

}

// Removes site header elements.
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Removes navigation.
remove_theme_support( 'genesis-menus' );

// Removes site footer elements.
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Runs the Genesis loop.
genesis();
