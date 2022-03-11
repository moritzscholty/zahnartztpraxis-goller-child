<section class="base-section-spacing <?php echo $attributes['service-background-color']; ?> position-relative overflow-hidden">

  <!-- shape divider -->
  <div class="service-divider">
    <svg id="service-divider-1" data-name="service-divider-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 600"><path d="M454,459.3v570.5c207.6-33.9,458.9-49.7,713.8-5.7,143.6,24.8,269.6,34.3,383.1,35.2h39.8c317.3-2.7,537.8-68.5,783.3-36.5V459.3Z" transform="translate(-454 -459.3)"/></svg>
  </div>

  <div class="service container position-relative">

    <!-- service heading -->
    <div class="row">
      <div class="col my-auto w-100 t-c <?php echo $attributes['service-text-align']; ?>">
        <?php if ( $attributes['service-sub'] ) : ?>
          <p class="lead mb-0"><?php echo $attributes['service-sub']; ?></p>
        <?php endif; ?>
        <?php if ( $attributes['service-headline'] ) : ?>
          <h2 class="mb-5"><?php echo $attributes['service-headline']; ?></h2>
        <?php endif; ?>
      </div>
    </div>

    <!-- service listings -->
    <div class="row gx-3 gy-5">
      <?php foreach( $attributes['service-list'] as $inner ): ?>
        <div class="col-6 col-sm-6 col-md-4">
          <div class="service-listing d-flex flex-column justify-content-center align-items-center">
            <?php if ( isset( $inner['service-listing-icon']['url'] ) ) : ?>
                <div class="service-listing-icon-container position-absolute top-0 start-50 translate-middle">
                  <img class="service-listing-icon" src="<?php echo esc_url( $inner['service-listing-icon']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['service-listing-icon']['alt'] ); ?>">
                </div>
            <?php endif; ?>
            <h3 class="service-listing-title"><?php echo $inner['service-listing-title']; ?></h3>
            <a class="service-listing-button service-listing-button-home btn-default position-absolute top-100 start-50 translate-middle px-4 text-center" href="<?php echo esc_url( $inner['service-listing-button'] ); ?>"><span>mehr erfahren</span></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

</section>
