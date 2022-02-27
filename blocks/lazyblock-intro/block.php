<section class="base-section-spacing <?php echo $attributes['intro-background-color']; ?> position-relative">

  <div class="intro container">
    <div class="row gx-5 gap-5">

      <!-- intro first col -->
      <div class="col-md my-auto <?php if ( $attributes['intro-order'] ) : ?>change-order order-2<?php endif; ?>">
        <?php if ( $attributes['intro-sub'] ) : ?>
          <p class="lead mb-0"><?php echo $attributes['intro-sub']; ?></p>
        <?php endif; ?>
        <?php if ( $attributes['intro-headline'] ) : ?>
          <h2 class="mb-5"><?php echo $attributes['intro-headline']; ?></h2>
        <?php endif; ?>
        <?php if ( $attributes['intro-text'] ) : ?>
          <p><?php echo $attributes['intro-text']; ?></p>
        <?php endif; ?>
      </div>

      <!-- intro second col -->
      <div class="col-md col-circle my-auto text-center <?php if ( $attributes['intro-order'] ) : ?>change-order order-1<?php endif; ?>">
        <?php if ( isset( $attributes['intro-image']['url'] ) ) : ?>
          <img class="intro-image" src="<?php echo esc_url( $attributes['intro-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['intro-image']['alt'] ); ?>">
        <?php endif; ?>

        <!-- intro circles -->
        <?php if ( $attributes['intro-circle'] ) : ?>
          <div class="circle rellax" data-rellax-speed="1.4"></div>
        	<div class="circle rellax" data-rellax-speed="1.1"></div>
        <?php endif; ?>

      </div>

    </div>
  </div>

</section>
