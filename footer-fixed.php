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

<div class="footer-fixed info py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-start">
        <p class="mb-0">&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      </div>
      <div class="col-lg-6 text-center text-lg-end footer-meta">
        <a href="<?php echo esc_url( get_permalink( get_option( 'wp_page_for_privacy_policy' ) ) ); ?>">Datenschutz</a>
        <a href="<?php $imprint_url = get_permalink('451'); echo $imprint_url; ?>">Impressum</a>
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
