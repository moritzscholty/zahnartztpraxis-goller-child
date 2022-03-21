<section class="position-relative">

  <!-- content -->
  <div class="text-dce container">
    <div class="row">

      <?php if ( $attributes['fixed-layout'] ) : ?>
        <div class="col-lg-6"></div>
      <?php endif; ?>

      <div class="<?php if ( $attributes['fixed-layout'] ) : ?>col-lg-6<?php endif; ?>">

          <div class="detail-data">
            <?php if ( $attributes['detail-sub'] ) : ?>
              <p class="lead mb-0"><?php echo $attributes['detail-sub']; ?></p>
            <?php endif; ?>
            <?php if ( $attributes['detail-headline'] ) : ?>
              <h2 class="mb-5"><?php echo $attributes['detail-headline']; ?></h2>
            <?php endif; ?>
            <?php if ( $attributes['detail-text'] ) : ?>
              <p><?php echo $attributes['detail-text']; ?></p>
            <?php endif; ?>
            <?php if ( $attributes['detail-button-text'] ) : ?>
              <a class="service-listing-button service-listing-button-back btn-default px-4 text-center" href="<?php echo esc_url(home_url()); ?>#service"><span><?php echo $attributes['detail-button-text']; ?></span></a>
             <?php endif; ?>
          </div>

      </div>
    </div>
  </div>


</section>
