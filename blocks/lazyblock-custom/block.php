<section class="base-section-spacing <?php echo $attributes['custom-background-color']; ?> position-relative">

  <!-- shape divider -->
  <?php if ( $attributes['custom-divide'] ) : ?>
    <style>
    .shapedividers-wrapper {
      position: absolute;
      top: 0;
      height: 100%;
      width: 100%;
    }
    .shapedividers_com-1552 {
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
    .shapedividers_com-1552::before{
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
    background-size: 100% 137px;
    background-position: 50% 0%;
    background-image: url('data:image/svg+xml;charset=utf8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.28 2.17" preserveAspectRatio="none"><path d="M0 1c3.17.8 7.29-.38 10.04-.55 2.75-.17 9.25 1.47 12.67 1.3 3.43-.17 4.65-.84 7.05-.87 2.4-.02 5.52.88 5.52.88V0H0z" fill="%23<?php echo $attributes['custom-divide-color']; ?>"/></svg>');
    }

    @media (min-width:768px){
    .shapedividers_com-1552::before{
    background-size: 100% 149px;
    background-position: 50% 0%;
    }
    }

    @media (min-width:1025px){
    .shapedividers_com-1552::before{
    bottom: -0.1vw;
    left: -0.1vw;
    right: -0.1vw;
    top: -0.1vw;
    background-size: 100% 208px;
    background-position: 50% 0%;
    }
    }
    @media (min-width:2100px){
    .shapedividers_com-1552::before{
    background-size: 100% calc(2vw + 208px);
    }
    }
    </style>
    <div class="shapedividers-wrapper <?php if ( $attributes['custom-divide-parallax'] ) : ?>rellax<?php endif; ?> <?php echo $attributes['custom-background-color']; ?>" data-rellax-speed="1.8">
        <div class="shapedividers_com-1552"></div>
    </div>
  <?php endif; ?>


  <div class="custom container">
    <div class="row gx-5 gap-5">

      <!-- custom first col -->
      <div class="col-md col-circle my-auto text-center <?php if ( $attributes['custom-order'] ) : ?>change-order order-2<?php endif; ?>">
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
      <div class="col-md my-auto <?php if ( $attributes['custom-order'] ) : ?>change-order order-1<?php endif; ?>">
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
  </div>

</section>
