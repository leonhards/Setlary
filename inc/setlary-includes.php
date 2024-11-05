<?php

/**
 * Include files
 * 
 * @package Setlary
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

require get_theme_file_path('/inc/admin-functions.php');

// various Block Editor Features that are supported by Setlary.
require get_theme_file_path('/inc/block-editor.php');

// // require_once get_theme_file_path( '/inc/block-patterns.php' );
// // require_once get_theme_file_path( '/inc/block-styles.php' );

require get_theme_file_path('/inc/bs5navwalker.php');

require get_theme_file_path('/inc/custom-header.php');

require get_theme_file_path('/inc/customizer.php');

require get_theme_file_path('/inc/extras.php');

require get_theme_file_path('/inc/optimizations.php');

require get_theme_file_path('/inc/template-functions.php');

require get_theme_file_path('/inc/template-tags.php');

require get_theme_file_path('/inc/widgets.php');
