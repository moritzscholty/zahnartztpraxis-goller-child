<?php

/**
 * Template Name: Blank meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

include('header-meta.php');
?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">

      <div class="entry-content">
        <?php the_post(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages(array(
          'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
          'after'  => '</div>',
        ));
        ?>
      </div>

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
