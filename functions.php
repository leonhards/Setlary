<?php
/**
 * Setlary functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Setlary
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'SETLARY_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SETLARY_VERSION', '1.0.0' );
}

// Setlary inc directory that holds the files to be included.
$setlary_inc_dir = 'inc';

// Array of files to include.
$setlary_includes = array(
	'/theme-setup.php',
	'/theme-scripts.php',
	'/setlary-includes.php'
);

foreach ($setlary_includes as $setlary_file) {
	require_once get_theme_file_path( $setlary_inc_dir . $setlary_file );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

