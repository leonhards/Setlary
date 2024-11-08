<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Setlary
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header w-100">
            <div class="top-menu">
                <div class="container d-flex flex-wrap">
                    <div class="site-description me-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11">
                            <circle id="Ellipse_1" data-name="Ellipse 1" cx="5.5" cy="5.5" r="5.5" fill="#4bca9d"></circle>
                        </svg>
                        <?php
                        $site_description_default = "Selamat datang di Setlary, penyedia solusi keuangan dinamis dan inovatif yang menawarkan akses gaji yang lebih fleksibel.";
                        $site_description = (get_bloginfo('description')  !== '') ? get_bloginfo('description') : $site_description_default;
                        echo $site_description;
                        ?>
                    </div>
                    <div class="top-menu-right">
                        <ul class="nav">
                            <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12">
                                <a href="#" class="nav-link active">Solusi Perusahaan</a>
                            </li>
                            <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13">
                                <a href="#" class="nav-link">Solusi Karyawan</a>
                            </li>
                        </ul>
                        <div class="dropdown lang-option">
                            <a href="#" class="d-block text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/indonesia.svg" alt="Indonesia" width="25" class="rounded-circle"> Indonesia

                            </a>
                            <ul class="dropdown-menu text-small">
                                <li>
                                    <a href="#" class="dropdown-item" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/english.svg" alt="English" width="25" class="rounded-circle me-2"> English
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/indonesia.svg" alt="Indonesia" width="25" class="rounded-circle me-2"> Indonesia
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-menu">
                <div class="container d-flex flex-wrap align-items-center">
                    <a href="#">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/dist/images/logo-v.svg" alt="Setlary">';
                        }
                        ?>
                    </a>
                    <nav class="nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'nav nav-primary'
                            )
                        );
                        ?>
                    </nav>
                    <ul class="nav nav-button">
                        <li class="nav-item px-2">
                            <a href="#" class="btn btn-primary rounded-pill" role="button" aria-pressed="true">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-secondary rounded-pill" role="button" aria-pressed="true">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>

        </header><!-- #masthead -->