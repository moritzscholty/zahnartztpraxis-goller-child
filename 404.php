<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootscore
 */

include('header-meta.php');
?>
<div id="content" class="site-content container py-5 mt-5">
  <div id="primary" class="content-area">

    <main id="main" class="site-main">

      <section class="error-404 not-found position-relative">
        <div class="page-404">

          <?php if( get_field("404-heading","option") ): ?>
            <h1 class="404-heading"><?php the_field("404-heading","option");?></h1>
          <?php endif; ?>
          <?php if( get_field("404-title","option") ): ?>
            <h2 class="404-title"><?php the_field("404-title","option");?></h2>
          <?php endif; ?>
          <?php if( get_field("404-text","option") ): ?>
            <div class="404-text mb-5"><?php the_field("404-text","option");?></div>
          <?php endif; ?>
          <?php
          $link = get_field("404-button","option");
          if( $link ):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="service-listing-button service-listing-button-back btn-default px-4 text-center position-relative" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>

        </div>
      </section><!-- .error-404 -->

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
