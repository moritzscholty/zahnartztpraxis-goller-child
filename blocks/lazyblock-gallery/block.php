<section class="base-section-spacing <?php echo $attributes['gallery-background-color']; ?> position-relative">

  <!-- shape divider -->
  <?php if ( $attributes['gallery-divide'] ) : ?>
    <style>
    .shapedividers-wrapper {
      position: absolute;
      top: 0;
      height: 100%;
      width: 100%;
    }
    .shapedividers_com-7700 {
      position: absolute;
      overflow: hidden;
      top: 0%;
      height: 100%;
      width: 100%;
    }
    /*
    generated css starts here
    https://shapedividers.com/
    */
    .shapedividers_com-7700{
    overflow:hidden;
    position:relative;
    }
    .shapedividers_com-7700::before{
    content:'';
    font-family:'shape divider from ShapeDividers.com';
    position: absolute;
    bottom: -1px;
    left: -1px;
    right: -1px;
    top: -1px;
    z-index: 3;
    pointer-events: none;
    background-repeat: no-repeat;
    background-size: 100% 117px;
    background-position: 50% 0%;
    background-image: url('data:image/svg+xml;charset=utf8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.28 2.17" preserveAspectRatio="none"><path d="M0 1c3.17.8 7.29-.38 10.04-.55 2.75-.17 9.25 1.47 12.67 1.3 3.43-.17 4.65-.84 7.05-.87 2.4-.02 5.52.88 5.52.88V0H0z" fill="%23<?php echo $attributes['gallery-divide-color']; ?>"/></svg>');
    }

    @media (min-width:768px){
    .shapedividers_com-7700::before{
    background-size: 100% 149px;
    background-position: 50% 0%;
    }
    }

    @media (min-width:1025px){
    .shapedividers_com-7700::before{
    bottom: -0.1vw;
    left: -0.1vw;
    right: -0.1vw;
    top: -0.1vw;
    background-size: 100% 234px;
    background-position: 50% 0%;
    background-image: url('data:image/svg+xml;charset=utf8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0.1 35.28 2.17" preserveAspectRatio="none"><path d="M0 1.85c2.56-.83 7.68-.3 11.79-.42 4.1-.12 6.86-.61 9.58-.28 2.73.33 5.61 1.17 8.61 1 3-.19 4.73-.82 5.3-.84V.1H0z" fill="%23<?php echo $attributes['gallery-divide-color']; ?>"/></svg>');
    }
    }
    @media (min-width:2100px){
    .shapedividers_com-7700::before{
    background-size: 100% calc(2vw + 234px);
    }
    }
    </style>
    <div class="shapedividers-wrapper <?php if ( $attributes['gallery-divide-parallax'] ) : ?>rellax<?php endif; ?> <?php echo $attributes['gallery-background-color']; ?>" data-rellax-speed="1.8">
        <div class="shapedividers_com-7700"></div>
    </div>
  <?php endif; ?>

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

      <div class="row row-masonry gx-4 gy-4" data-masonry='{"percentPosition": true }'>

        <?php foreach( $attributes['gallery-images'] as $image ): ?>

          <div class="col col-sm-6 col-md-4 masonry-item">
            <div class="img-wrap">
              <a data-fslightbox="gallery" href="<?php echo esc_url( $image['url'] ); ?>" class="gallery-image-link"><img class="gallery-image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"></a>
            </div>
          </div>

        <?php endforeach; ?>

      </div>



    </div>

  </div>

</section>
