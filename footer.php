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

    <style>
    .shapedividers-wrapper {
      position: absolute;
      top: 0;
      height: 100%;
      width: 100%;
    }
    .shapedividers_com-6261 {
      position: absolute;
      overflow: hidden;
      top: 0%;
      height: 100%;
      width: 100%;
    }
    /*
    generated css starts here
    https://shapedividers.com/
    */
    .shapedividers_com-6261{
    overflow:hidden;
    position:relative;
    }
    .shapedividers_com-6261::before{
    content:'';
    font-family:'shape divider from ShapeDividers.com';
    position: absolute;
    bottom: -1px;
    left: -1px;
    right: -1px;
    top: -1px;
    z-index: 3;
    pointer-events: none;
    background-repeat: no-repeat;
    background-size: 100% 117px;
    background-position: 50% 0%;
    background-image: url('data:image/svg+xml;charset=utf8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.28 2.17" preserveAspectRatio="none"><path d="M0 1c3.17.8 7.29-.38 10.04-.55 2.75-.17 9.25 1.47 12.67 1.3 3.43-.17 4.65-.84 7.05-.87 2.4-.02 5.52.88 5.52.88V0H0z" fill="%23ffffff"/></svg>');
    }

    @media (min-width:768px){
    .shapedividers_com-6261::before{
    background-size: 100% 149px;
    background-position: 50% 0%;
    }
    }

    @media (min-width:1025px){
    .shapedividers_com-6261::before{
    bottom: -0.1vw;
    left: -0.1vw;
    right: -0.1vw;
    top: -0.1vw;
    background-size: 112% 195px;
    background-position: 50% 0%;
    transform: rotateY(180deg);
    }
    }
    @media (min-width:2100px){
    .shapedividers_com-6261::before{
    background-size: 112% calc(2vw + 195px);
    }
    }
    </style>
    <div class="shapedividers-wrapper">
        <!--<div class="shapedividers_com-6261"></div>-->
    </div>


  <div class="bootscore-footer pt-5 pb-3">
    <div class="container">

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-md-6 col-lg-4 footer-logo d-flex">
          <a class="align-self-center mb-5" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/logo/logo-bw.svg" alt="logo" class="logo"></a>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-6 col-lg-4 footer-about">
          <p class="mb-4">
            <?php if( get_field("footer-about-headline") ): ?>
              <span class="text-white"><?php the_field("footer-about-headline");?></span><br>
            <?php endif; ?>
          </p>
          <p>
            <?php if( get_field("footer-about-txt") ): ?>
              <?php the_field("footer-about-txt");?>
            <?php endif; ?>
          </p>

        </div>

        <!-- Footer 3 Widget -->
        <div class="col-md-6 col-lg-2 footer-nav">

          <p class="mb-4">
            <?php if( get_field("footer-nav-headline") ): ?>
              <span class="text-white"><?php the_field("footer-nav-headline");?></span><br>
            <?php endif; ?>
          </p>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer-menu',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
            'depth' => 1,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
          ));
          ?>

        </div>

        <!-- Footer 4 Widget -->
        <div class="col-md-6 col-lg-2 footer-social">

          <p class="mb-4">
            <?php if( get_field("footer-social-headline") ): ?>
              <span class="text-white"><?php the_field("footer-social-headline");?></span>
            <?php endif; ?>
          </p>
          <div class="social-wrap">
            <?php
            $image = get_field('footer-social-icon-1-src');
            $link = get_field('footer-social-icon-1-link');
            if( $image ): ?>
                <a class="social-icon" target="_blank" href="<?php echo esc_url( $link ); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
            <?php endif; ?>
            <?php
            $image = get_field('footer-social-icon-2-src');
            $link = get_field('footer-social-icon-2-link');
            if( $image ): ?>
                <a class="social-icon" target="_blank" href="<?php echo esc_url( $link ); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
            <?php endif; ?>
            <?php
            $image = get_field('footer-social-icon-3-src');
            $link = get_field('footer-social-icon-3-link');
            if( $image ): ?>
                <a class="social-icon" target="_blank" href="<?php echo esc_url( $link ); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
            <?php endif; ?>
          </div>


        </div>

      </div>

    </div>
  </div>

</footer>

<div class="info bg-darkergrey py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-left">
        <p class="mb-0">&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      </div>
      <div class="col-lg-6 text-end meta">
        <a href="<?php echo esc_url( get_permalink( get_option( 'wp_page_for_privacy_policy' ) ) ); ?>">Datenschutz</a>
        <a href="<?php $imprint_url = get_permalink('451'); echo $imprint_url; ?>">Impressum</a>
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
<aside class="sidebar">

  <a class="sidebar-link" href="tel:<?php the_field("sidebar-phone");?>">
    <div class="sidebar-btn sidebar-phone">
      <div class="sidebar-icon-wrap">
        <div class="sidebar-icon"></div>
      </div>
      <div class="sidebar-field"><?php the_field("sidebar-phone");?></div>
    </div>
  </a>

  <a class="sidebar-link" href="mailto:<?php the_field("sidebar-email");?>">
    <div class="sidebar-btn sidebar-email">
      <div class="sidebar-icon-wrap">
        <div class="sidebar-icon"></div>
      </div>
      <div class="sidebar-field"><?php the_field("sidebar-email");?></div>
    </div>
  </a>

  <?php
  $addressurl = get_field('sidebar-address-url');
  ?>
  <a class="sidebar-link" href="<?php echo esc_url( $addressurl ); ?>" target="_blank">
    <div class="sidebar-btn sidebar-address">
      <div class="sidebar-icon-wrap">
        <div class="sidebar-icon"></div>
      </div>
      <div class="sidebar-field"><?php the_field("sidebar-address");?></div>
    </div>
  </a>

</aside>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
