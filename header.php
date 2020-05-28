<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action( 'wp_body_open' ); ?>
    <!-- preloader -->
    <div class="preloader">
        <div class="content">
            <div class="loader-border">
                <span></span>
            </div>
            <div class="pr-wrap">
                <div class="pr-logo"></div>
                <div class="pr-logo-status"></div>
            </div>
        </div>
    </div>
    <div class="site" id="page">

        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar">

            <a class="skip-link sr-only sr-only-focusable"
                href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

            <nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

                <h2 id="main-nav-label" class="sr-only">
                    <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
                </h2>

                <?php if ( 'container' === $container ) : ?>
                <div class="container">
                    <?php endif; ?>

                    <div class="row align-items-center w-100">
                        <div class="header-social col-md-3">

                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                        </div>
                        <div class="header-logo col-md-6 col-6 text-center">
                            <?php if ( ! has_custom_logo() ) { ?>

                            <?php if ( is_front_page() && is_home() ) : ?>

                            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                    itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                            <?php else : ?>

                            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                itemprop="url"><?php bloginfo( 'name' ); ?></a>

                            <?php endif; ?>

                            <?php } else {
						the_custom_logo();
						} ?>
                        </div>
                        <div class="menu-btn col-md-3 col-6 text-right">
                            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<span class="navbar-toggler-icon"></span>
						</button> -->

                            <a href="#" aria-label="Toggle navigation" class="open-nav-btn text-center">
                                <span class="small text-uppercase">Menu</span>
                                <span class="nav-span"></span>
                                <span class="nav-span"></span>
                                <span class="nav-span"></span>
                            </a>


                        </div>

                    </div> <!-- row -->
                    <?php if ( 'container' === $container ) : ?>
                </div><!-- .container -->
                <?php endif; ?>

            </nav><!-- .site-navigation -->

            <nav class="site-nav">
                <div class="nav-half">
                    <a href="#" class="close-nav d-sm-block d-md-none" style="opacity: 1;"><svg
                            class="svg-inline--fa fa-times fa-w-10" aria-hidden="true" data-prefix="fal"
                            data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z">
                            </path>
                        </svg><!-- <i class="fal fa-times"></i> --><span class="sr-only">Close Nav</span></a>
                    <div class="logo-wrapper">
                        <?php the_custom_logo() ?>
                    </div>

                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'nav navbar-nav mx-auto main-menu',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
                    <div class="social-nav text-center mt-5">

                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                    </div>
                </div>
                <div class="panel-half">
                    <a href="#" class="close-nav">
                        <img src="https://harveykalles.com/wp-content/themes/kalles-theme/images/close.svg" width="60">
                        <span class="sr-only">Close Nav</span>
                    </a>
                    <div class="panel-inner">
                        <img class="menu-img" src="<?php echo get_template_directory_uri() ?>/img/Menu-image.jpg">
                    </div>

                </div>
            </nav>

        </div><!-- #wrapper-navbar end -->