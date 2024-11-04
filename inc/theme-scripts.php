<?php
/**
 * Various scripts and styles.
 * 
 * @package Setlary
 */

 // Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'setlary_scripts' ) ) :
    /**
     * Enqueue scripts and styles.
     */
    function setlary_scripts() : void {
        wp_enqueue_style( 'setlary-style-min', get_stylesheet_uri(), array(), SETLARY_VERSION );

        wp_style_add_data( 'setlary-style-min', 'rtl', 'replace' );

        wp_enqueue_script( 'setlary-js', get_theme_file_uri() . '/dist/js/setlary.min.js', array( 'jquery' ), SETLARY_VERSION, true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }

    add_action( 'wp_enqueue_scripts', 'setlary_scripts' );
endif;

if ( ! function_exists( 'setlary_admin_scripts' ) ) :
    /**
     * Enqueue scripts and styles.
     */
    function setlary_admin_scripts() : void {
        wp_enqueue_script( 'setlary_admin_js', get_theme_file_uri() . '/dist/js/admin.js', array(), SETLARY_VERSION, true );

        wp_enqueue_style( 'setlary-admin', get_theme_file_uri() . '/dist/css/admin.css', array(), SETLARY_VERSION, true );
    }

    add_action( 'admin_enqueue_scripts', 'setlary_admin_scripts' );
endif;