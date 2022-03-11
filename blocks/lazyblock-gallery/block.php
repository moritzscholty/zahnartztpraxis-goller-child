<section class="base-section-spacing <?php echo $attributes['gallery-background-color']; ?> position-relative overflow-hidden">

  <!-- shape divider -->
  <div class="gallery-divider">
    <svg id="gallery-divider-1" data-name="gallery-divider-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 600"><path d="M887.2,601.6V869.9c208.5,126.8,685,364.3,1158.2,233.5,364.1-100.6,614.8-2.7,761.8,98.2v-600Z" transform="translate(-887.2 -601.6)"/></svg>
  </div>

  <div class="gallery position-relative">

    <!-- gallery heading -->
    <div class="container">
      <div class="row">

        <div class="col my-auto w-100 t-c <?php echo $attributes['gallery-text-align']; ?>">
          <?php if ( $attributes['gallery-sub'] ) : ?>
            <p class="lead mb-0"><?php echo $attributes['gallery-sub']; ?></p>
          <?php endif; ?>
          <?php if ( $attributes['gallery-headline'] ) : ?>
            <h2 class="mb-5"><?php echo $attributes['gallery-headline']; ?></h2>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- gallery images -->
    <div class="container py-5">

      <div class="row row-masonry gx-3 gy-3" data-masonry='{"percentPosition": true }'>

        <?php foreach( $attributes['gallery-images'] as $image ): ?>

          <div class="col col-6 col-sm-6 col-md-4 masonry-item">
            <div class="img-wrap">
              <a data-fslightbox="gallery" href="<?php echo esc_url( $image['url'] ); ?>" class="gallery-image-link"><img class="gallery-image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"></a>
            </div>
          </div>

        <?php endforeach; ?>

      </div>



    </div>

  </div>

</section>
