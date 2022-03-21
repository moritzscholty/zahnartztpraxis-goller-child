<section class="position-relative">


  <!-- background image -->
  <div class="detail-image-wrap d-none d-lg-block">
    <div class="detail-image" style="background-image: url('<?php echo esc_url( $attributes['detail-image']['url'] ); ?>');"></div>
  </div>
  <div class="svg-divider-wrap d-none d-lg-block">
    <div class="svg-divider"></div>
  </div>

  <div class="detail-image-wrap-mobile d-lg-none position-relative">
      <div class="detail-image" style="background-image: url('<?php echo esc_url( $attributes['detail-image-mobile']['url'] ); ?>');"></div>
      <div class="detail-divider">
        <svg id="detail-divider-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.9 61.27"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M1274.6,213c-136.88,20.92-259.06,29.68-370.32,31H1918.9V210.8C1722.9,185.7,1500.4,178.5,1274.6,213Z" transform="translate(0 -182.73)"/><path class="cls-1" d="M0,185.4V244H843.86C498.88,240,259.39,168.16,0,185.4Z" transform="translate(0 -182.73)"/></svg>
      </div>
  </div>

  <!-- content -->
  <div class="detail more container">
    <div class="row">
      <div class="col-lg-6">
      </div>
      <div class="col-lg-6">

          <nav class="breadcrumb-detail-wrap">
            <ol class="breadcrumb-detail position-relative">
              <li class="breadcrumb-detail-item"><a href="<?php echo esc_url(home_url()); ?>#intro">Home</a></li>
              <li class="breadcrumb-detail-item active" aria-current="page"><?php echo get_the_title(); ?></li>
            </ol>
          </nav>

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

          <div class="detail-resources">

            <?php if ( $attributes['detail-resources'] ) : ?>
              <p class="lead mb-0">Weitere</p>
              <h2 class="mb-5">Informationen</h2>
            <?php endif; ?>

            <?php foreach( $attributes['detail-resources'] as $inner ): ?>
              <div class="detail-resource position-relative ">
                <h5><?php echo $inner['detail-resource-title']; ?></h5>
                <p class="mt-4 mb-0"><?php echo $inner['detail-resource-text']; ?></p>
                <?php if ( $inner['detail-resource-button-text'] ) : ?>
                  <a class="service-listing-button btn-default position-relative px-4 text-center" href="<?php echo esc_url( $inner['detail-resource-button-link'] ); ?>" target="_blank"><span><?php echo $inner['detail-resource-button-text']; ?></span></a>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>

          </div>

      </div>
    </div>
  </div>


</section>
