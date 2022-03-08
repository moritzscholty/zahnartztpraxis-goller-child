<section class="position-relative">


  <!-- background image -->
  <div class="detail-image-wrap">
    <div class="detail-image" style="background-image: url('<?php echo esc_url( $attributes['detail-image']['url'] ); ?>');"></div>
  </div>

  <div class="svg-divider-wrap">
    <div class="svg-divider" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/divider/vertical-1.svg);">
    </div>
    <div class="svg-divider-bg">
    </div>
  </div>

  <!-- content -->
  <div class="detail container">
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>#service">Leistungen</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
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
            <a class="service-listing-button service-listing-button-back btn-default px-4 text-center" href="<?php echo esc_url(home_url()); ?>#service"><span><?php echo $attributes['detail-button-text']; ?></span></a>
          </div>

          <div class="detail-resources">

            <?php if ( $attributes['detail-resources'] ) : ?>
              <p class="lead mb-0">Weitere</p>
              <h2 class="mb-5">Informationen</h2>
            <?php endif; ?>

            <?php foreach( $attributes['detail-resources'] as $inner ): ?>
              <div class="detail-resource position-relative ">
                <h4><?php echo $inner['detail-resource-title']; ?></h4>
                <p class="mt-4 mb-0"><?php echo $inner['detail-resource-text']; ?></p>
                <a class="service-listing-button btn-default position-relative px-4 text-center" href="<?php echo esc_url( $inner['detail-resource-button-link'] ); ?>" target="_blank"><span><?php echo $inner['detail-resource-button-text']; ?></span></a>
              </div>
            <?php endforeach; ?>

          </div>

      </div>
    </div>
  </div>


</section>
