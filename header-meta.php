<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Favicon Default -->
  <?php
  include('favicon.php');
  ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="to-top"></div>

  <div id="page" class="site">

    <header id="masthead" class="site-header active">

      <div class="fixed-top bg-light">

        <nav id="nav-main" class="navbar navbar-expand-lg navbar-light">

          <div class="container">

            <!-- Navbar Brand -->
            <a class="navbar-brand xs d-md-none" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/logo/logo.svg" alt="logo" class="logo xs"></a>
            <a class="navbar-brand md d-none d-md-block" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/logo/logo.svg" alt="logo" class="logo md"></a>

            <!-- Offcanvas Navbar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
              <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => 'detail-nav-item',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav bootscore-navbar-mobile meta-nav ms-auto %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>


                <!-- Bootstrap 5 Nav Walker Main Menu End -->


                <!-- Contactbar -->
                <div class="menu-contactbar">
                  <a class="menu-contactbar-item" href="tel:<?php the_field("sidebar-phone","option");?>">
                    <div class="menu-contactbar-icon icon-phone"></div>
                  </a>
                  <a class="menu-contactbar-item" href="mailto:<?php the_field("sidebar-email","option");?>">
                    <div class="menu-contactbar-icon icon-email"></div>
                  </a>
                  <a class="menu-contactbar-item" href="<?php the_field("sidebar-address-url","option"); ?>" target="_blank">
                    <div class="menu-contactbar-icon icon-address"></div>
                  </a>
                </div>

              </div>
            </div>


            <div class="header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <div class="top-nav-widget">
                <?php if (is_active_sidebar('top-nav')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Navbar Toggler -->
              <button class="btn burgermenu btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fas fa-bars"></i>
              </button>

            </div><!-- .header-actions -->

          </div><!-- .container -->

        </nav><!-- .navbar -->

        <!-- Top Nav Search Mobile Collapse -->
        <div class="collapse container d-lg-none" id="collapse-search">
          <?php if (is_active_sidebar('top-nav-search')) : ?>
            <div class="mb-2">
              <?php dynamic_sidebar('top-nav-search'); ?>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- .fixed-top .bg-light -->

    </header><!-- #masthead -->

    <?php bootscore_ie_alert(); ?>
