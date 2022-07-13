<section class="base-section-spacing <?php echo $attributes['custom-background-color']; ?> position-relative">

  <!-- shape divider -->
  <div class="custom-divider">
    <svg id="custom-divider-1" data-name="contact-divider-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 600"><path d="M796.6,694.4v600h0c142.3-107.3,386.3-215.1,751.3-134.5,499.9,110.4,982.3-179.3,1168.7-310.7V694.4Z" transform="translate(-796.6 -694.4)"/></svg>
  </div>


  <div class="custom container">
    <div class="row">

      <!-- custom first col -->
      <div class="col-md-6 col-lg-6 col-circle my-auto text-center <?php if ( $attributes['custom-order'] ) : ?>change-order order-1 order-md-2<?php else: ?>order-1 order-md-1<?php endif; ?>">
        <?php if ( isset( $attributes['custom-image']['url'] ) ) : ?>
          <img class="custom-image" src="<?php echo esc_url( $attributes['custom-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['custom-image']['alt'] ); ?>">
        <?php endif; ?>

        <!-- custom circles -->
        <?php if ( $attributes['custom-circle'] ) : ?>
          <div class="circle rellax" data-rellax-speed="1.8"></div>
          <div class="circle rellax" data-rellax-speed="1.3"></div>
        <?php endif; ?>

      </div>

      <!-- custom second col -->
      <div class="col-md-6 col-lg-6 my-auto <?php if ( $attributes['custom-order'] ) : ?>change-order order-2 order-md-1<?php else: ?>order-2 order-md-2<?php endif; ?>">
        <div class="t-c <?php echo $attributes['custom-text-align']; ?>">
          <?php if ( $attributes['custom-sub'] ) : ?>
            <p class="lead mb-0"><?php echo $attributes['custom-sub']; ?></p>
          <?php endif; ?>
          <?php if ( $attributes['custom-headline'] ) : ?>
            <h2 class="mb-5"><?php echo $attributes['custom-headline']; ?></h2>
          <?php endif; ?>
        </div>
        <?php if ( $attributes['custom-inner'] ) : ?>
          <?php echo $attributes['custom-inner']; ?>
        <?php endif; ?>
      </div>
    </div>


    <!-- custom information -->
    <?php if ( $attributes['custom-display-information'] ) : ?>
      <div class="row gx-0 gy-0">
        <div class="custom-information-container">
          <?php if ( $attributes['custom-information-headline'] ) : ?>
            <h5 class="mb-5"><?php echo $attributes['custom-information-headline']; ?></h5>
          <?php endif; ?>

          <div class="row gx-1 gy-0">
            <div class="col-md-4">
              <?php if ( $attributes['custom-information-row-1'] ) : ?>
                <p class=""><?php echo $attributes['custom-information-row-1']; ?></p>
              <?php endif; ?>
            </div>
            <div class="col">
              <?php if ( $attributes['custom-information-row-2'] ) : ?>
                <p class=""><?php echo $attributes['custom-information-row-2']; ?></p>
              <?php endif; ?>
            </div>
            <div class="col">
              <?php if ( $attributes['custom-information-row-3'] ) : ?>
                <p class=""><?php echo $attributes['custom-information-row-3']; ?></p>
              <?php endif; ?>
            </div>
            <div class="col">
              <?php if ( $attributes['custom-information-row-4'] ) : ?>
                <p class=""><?php echo $attributes['custom-information-row-4']; ?></p>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
      <?php endif; ?>

  </div>

</section>
