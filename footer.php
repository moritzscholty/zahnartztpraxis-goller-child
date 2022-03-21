<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

<footer class="footer">

  <!-- shape divider -->
  <div class="footer-divider footer-divider-wrap-2">
        <svg id="footer-divider-2" data-name="footer-divider-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 130"><path d="M391.1,521v71.5c355.2-23.49,673.1,119,1275.3,27.47,225.9-34.34,448.6-27.17,644.7-2.19V521Z" transform="translate(-391.1 -520.96)"/></svg>
  </div>
  <div class="footer-divider footer-divider-wrap-1">
    <svg id="footer-divider-1" data-name="footer-divider-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 130"><path d="M591.5,506.1v90.5c193.5-26.7,419.4-35.3,648,4.2,608.1,105,900.7-65,1272,9.6V506.1Z" transform="translate(-591.5 -506.1)"/></svg>
  </div>


  <div class="bootscore-footer pt-sm-5 pb-sm-5 pb-3 ">
    <div class="container">

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-md-6 col-lg-4 footer-item footer-logo d-flex">
          <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/logo/logo-bw.svg" alt="logo" class="logo"></a>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-6 col-lg-4 footer-item footer-about">
          <p class="mb-4">
            <?php if( get_field("footer-about-headline","option") ): ?>
              <span class="text-white"><?php the_field("footer-about-headline","option");?></span><br>
            <?php endif; ?>
          </p>
          <p>
            <?php if( get_field("footer-about-txt","option") ): ?>
              <?php the_field("footer-about-txt","option");?>
            <?php endif; ?>
          </p>

        </div>

        <!-- Footer 3 Widget -->
        <div class="col-md-6 col-lg-2 footer-item footer-nav">

          <p class="mb-4">
            <?php if( get_field("footer-nav-headline","option") ): ?>
              <span class="text-white"><?php the_field("footer-nav-headline","option");?></span><br>
            <?php endif; ?>
          </p>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer-menu mb-sm-3',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
            'depth' => 1,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
          ));
          ?>

        </div>

        <!-- Footer 4 Widget -->
        <div class="col-md-6 col-lg-2 footer-item footer-social d-flex">
          <div class="align-self-md-center align-self-lg-start">
            <p class="mb-4">
              <?php if( get_field("footer-social-headline","option") ): ?>
                <span class="text-white"><?php the_field("footer-social-headline","option");?></span>
              <?php endif; ?>
            </p>
            <div class="social-wrap">
              <?php
              $image = get_field('footer-social-icon-1-src',"option");
              $link = get_field('footer-social-icon-1-link',"option");
              if( $image ): ?>
                  <a class="social-icon" target="_blank" href="<?php echo esc_url( $link ); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
              <?php endif; ?>
              <?php
              $image = get_field('footer-social-icon-2-src',"option");
              $link = get_field('footer-social-icon-2-link',"option");
              if( $image ): ?>
                  <a class="social-icon" target="_blank" href="<?php echo esc_url( $link ); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
              <?php endif; ?>
              <?php
              $image = get_field('footer-social-icon-3-src,"option"');
              $link = get_field('footer-social-icon-3-link,"option"');
              if( $image ): ?>
                  <a class="social-icon" target="_blank" href="<?php echo esc_url( $link ); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
              <?php endif; ?>
            </div>
          </div>


        </div>

      </div>

    </div>
  </div>

</footer>

<div class="info bg-darkergrey py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-md-start">
        <p class="mb-0">&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      </div>
      <div class="col-lg-6 text-center text-md-end footer-meta">
        <a href="<?php echo esc_url( get_permalink( get_option( 'wp_page_for_privacy_policy' ) ) ); ?>">Datenschutz</a>
        <!-- impressum -->
        <?php if (file_exists('testing.txt')) { ?>
          <a href="<?php $imprint_url = get_permalink('451'); echo $imprint_url; ?>">Impressum</a>
        <?php } else {?>
          <a href="<?php $imprint_url = get_permalink('182'); echo $imprint_url; ?>">Impressum</a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<!-- topbtn -->
<div class="top-button position-fixed zi-1020">
  <a href="#to-top">
    <div class="top-button-wrap">
      <div class="top-button-link" href="#to-top"></div>
    </div>
  </a>
</div>

<!-- sidebar -->
<aside class="sidebar d-none d-sm-block">

  <a class="sidebar-link" href="tel:<?php the_field("sidebar-phone","option");?>">
    <div class="sidebar-btn sidebar-phone">
      <div class="sidebar-icon-wrap">
        <div class="sidebar-icon"></div>
      </div>
      <div class="sidebar-field"><?php the_field("sidebar-phone","option");?></div>
    </div>
  </a>

  <a class="sidebar-link" href="mailto:<?php the_field("sidebar-email","option");?>">
    <div class="sidebar-btn sidebar-email">
      <div class="sidebar-icon-wrap">
        <div class="sidebar-icon"></div>
      </div>
      <div class="sidebar-field"><?php the_field("sidebar-email","option");?></div>
    </div>
  </a>

  <?php
  $addressurl = get_field("sidebar-address-url","option");
  ?>
  <a class="sidebar-link" href="<?php echo esc_url( $addressurl ); ?>" target="_blank">
    <div class="sidebar-btn sidebar-address">
      <div class="sidebar-icon-wrap">
        <div class="sidebar-icon"></div>
      </div>
      <div class="sidebar-field"><?php the_field("sidebar-address","option");?></div>
    </div>
  </a>

</aside>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
