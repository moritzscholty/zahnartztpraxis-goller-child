<section class="base-section-spacing">
  <div class="service container">
    <div class="row gx-5 gap-5">

      <!-- service heading -->
      <div class="col-md my-auto w-100">
        <?php if ( $attributes['service-sub'] ) : ?>
          <p class="lead mb-0"><?php echo $attributes['service-sub']; ?></p>
        <?php endif; ?>
        <?php if ( $attributes['service-headline'] ) : ?>
          <h2 class="mb-5"><?php echo $attributes['service-headline']; ?></h2>
        <?php endif; ?>
      </div>

      <!-- service listings -->
      <?php foreach( $attributes['service-list'] as $inner ): ?>
        <div>
          <?php if ( isset( $inner['service-listing-icon']['url'] ) ) : ?>
              <img class="service-listing-icon" src="<?php echo esc_url( $inner['service-listing-icon']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['service-listing-icon']['alt'] ); ?>">
          <?php endif; ?>
          <p class="service-listing-title"><?php echo $inner['service-listing-title']; ?></p>
          <a class="service-listing-button" href="<?php echo esc_url( $inner['service-listing-button'] ); ?>"></a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
