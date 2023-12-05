<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 /**
 * Enqueues scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global bool       $is_IE
 * @global WP_Scripts $wp_scripts
 *
 * @return void
 */
function capybaras_child_scripts() {
	wp_enqueue_style( 'capybaras-child', get_stylesheet_uri(), array('twenty-twenty-one-style'), wp_get_theme()->get( 'Version' ) );
	
}
add_action( 'wp_enqueue_scripts', 'capybaras_child_scripts' );

add_image_size( 'img-posts', 300, 200, true );