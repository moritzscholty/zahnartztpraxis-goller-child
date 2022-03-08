<section class="base-section-spacing <?php echo $attributes['service-background-color']; ?> position-relative">

  <!-- shape divider -->
  <?php if ( $attributes['service-divide'] ) : ?>
    <style>
    .shapedividers-wrapper {
      position: absolute;
      top: 0;
      height: 100%;
      width: 100%;
    }
    .shapedividers_com-6261 {
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
    .shapedividers_com-6261{
    overflow:hidden;
    position:relative;
    }
    .shapedividers_com-6261::before{
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
    background-image: url('data:image/svg+xml;charset=utf8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.28 2.17" preserveAspectRatio="none"><path d="M0 1c3.17.8 7.29-.38 10.04-.55 2.75-.17 9.25 1.47 12.67 1.3 3.43-.17 4.65-.84 7.05-.87 2.4-.02 5.52.88 5.52.88V0H0z" fill="%23<?php echo $attributes['service-divide-color']; ?>"/></svg>');
    }

    @media (min-width:768px){
    .shapedividers_com-6261::before{
    background-size: 100% 149px;
    background-position: 50% 0%;
    }
    }

    @media (min-width:1025px){
    .shapedividers_com-6261::before{
    bottom: -0.1vw;
    left: -0.1vw;
    right: -0.1vw;
    top: -0.1vw;
    background-size: 112% 195px;
    background-position: 50% 0%;
    transform: rotateY(180deg);
    }
    }
    @media (min-width:2100px){
    .shapedividers_com-6261::before{
    background-size: 112% calc(2vw + 195px);
    }
    }
    </style>
    <div class="shapedividers-wrapper <?php if ( $attributes['service-divide-parallax'] ) : ?>rellax<?php endif; ?> <?php echo $attributes['service-background-color']; ?>" data-rellax-speed="1.8">
        <div class="shapedividers_com-6261"></div>
    </div>
  <?php endif; ?>

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
    <div class="row gx-4 gy-5">
      <?php foreach( $attributes['service-list'] as $inner ): ?>
        <div class="col-sm-6 col-md-4">
          <div class="service-listing d-flex flex-column justify-content-center align-items-center">
            <?php if ( isset( $inner['service-listing-icon']['url'] ) ) : ?>
                <div class="service-listing-icon-container position-absolute top-0 start-50 translate-middle">
                  <img class="service-listing-icon" src="<?php echo esc_url( $inner['service-listing-icon']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['service-listing-icon']['alt'] ); ?>">
                </div>
            <?php endif; ?>
            <h3 class="service-listing-title"><?php echo $inner['service-listing-title']; ?></h3>
            <a class="service-listing-button btn-default position-absolute top-100 start-50 translate-middle px-4 text-center" href="<?php echo esc_url( $inner['service-listing-button'] ); ?>"><span>mehr erfahren</span></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

</section>
