<section class="base-section-spacing <?php echo $attributes['intro-background-color']; ?> position-relative">

  <div class="intro container">
    <div class="row">

      <!-- intro first col -->
      <div class="col-md-6 my-auto <?php if ( $attributes['intro-order'] ) : ?>change-order order-2 order-md-2<?php else: ?>order-2 order-md-1<?php endif; ?>">
        <div class="t-c <?php echo $attributes['intro-text-align']; ?>">
          <?php if ( $attributes['intro-sub'] ) : ?>
            <p class="lead mb-0"><?php echo $attributes['intro-sub']; ?></p>
          <?php endif; ?>
          <?php if ( $attributes['intro-headline'] ) : ?>
            <h2 class="mb-5"><?php echo $attributes['intro-headline']; ?></h2>
          <?php endif; ?>
        </div>
        <?php if ( $attributes['intro-text'] ) : ?>
          <p><?php echo $attributes['intro-text']; ?></p>
        <?php endif; ?>
        <?php if ( $attributes['intro-button-text'] ) : ?>
          <a class="btn-default px-4 d-inline-block mt-3 position-relative" href="<?php echo $attributes['intro-button-url']; ?>"><?php echo $attributes['intro-button-text']; ?></a>
        <?php endif; ?>


      </div>

      <!-- intro second col -->
      <div class="col-md-6 col-circle my-auto text-center <?php if ( $attributes['intro-order'] ) : ?>change-order order-1 order-md-1<?php else: ?>order-1 order-md-2<?php endif; ?>">
        <?php if ( isset( $attributes['intro-image']['url'] ) ) : ?>
          <img class="intro-image" src="<?php echo esc_url( $attributes['intro-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['intro-image']['alt'] ); ?>">
        <?php endif; ?>

        <!-- intro circles -->
        <?php if ( $attributes['intro-circle'] ) : ?>
          <div class="circle rellax" data-rellax-speed="1.8"></div>
        	<div class="circle rellax" data-rellax-speed="1.3"></div>
        <?php endif; ?>

      </div>

    </div>
  </div>

</section>
