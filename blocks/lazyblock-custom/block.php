<section class="base-section-spacing">
  <div class="custom container">
    <div class="row gx-5 gap-5">

      <!-- custom first col -->
      <div class="col-md col-circle my-auto text-center <?php if ( $attributes['custom-order'] ) : ?>change-order order-2<?php endif; ?>">
        <?php if ( isset( $attributes['custom-image']['url'] ) ) : ?>
          <img class="custom-image" src="<?php echo esc_url( $attributes['custom-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['custom-image']['alt'] ); ?>">
        <?php endif; ?>

        <!-- custom circles -->
        <?php if ( $attributes['custom-circle'] ) : ?>
          <div class="circle rellax" data-rellax-speed="1.4"></div>
          <div class="circle rellax" data-rellax-speed="1.1"></div>
        <?php endif; ?>

      </div>

      <!-- custom second col -->
      <div class="col-md my-auto <?php if ( $attributes['custom-order'] ) : ?>change-order order-1<?php endif; ?>">
        <?php if ( $attributes['custom-sub'] ) : ?>
          <p class="lead mb-0"><?php echo $attributes['custom-sub']; ?></p>
        <?php endif; ?>
        <?php if ( $attributes['custom-headline'] ) : ?>
          <h2 class="mb-5"><?php echo $attributes['custom-headline']; ?></h2>
        <?php endif; ?>
        <?php if ( $attributes['custom-inner'] ) : ?>
          <?php echo $attributes['custom-inner']; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
