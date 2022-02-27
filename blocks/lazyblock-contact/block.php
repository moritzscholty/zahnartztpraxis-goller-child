<section class="base-section-spacing <?php echo $attributes['contact-background-color']; ?> position-relative">

  <!-- shape divider -->
  <?php if ( $attributes['contact-divide'] ) : ?>
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
    background-image: url('data:image/svg+xml;charset=utf8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.28 2.17" preserveAspectRatio="none"><path d="M0 1c3.17.8 7.29-.38 10.04-.55 2.75-.17 9.25 1.47 12.67 1.3 3.43-.17 4.65-.84 7.05-.87 2.4-.02 5.52.88 5.52.88V0H0z" fill="%23<?php echo $attributes['contact-divide-color']; ?>"/></svg>');
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
    <div class="shapedividers-wrapper <?php if ( $attributes['contact-divide-parallax'] ) : ?>rellax<?php endif; ?> <?php echo $attributes['contact-background-color']; ?>" data-rellax-speed="1.8">
        <div class="shapedividers_com-6261"></div>
    </div>
  <?php endif; ?>

  <div class="contact container position-relative">




    <div class="row f-flex">

      <!-- contact first col -->
      <div class="col-md-6 col-lg-4 contact-wrap">
        <div class="contact-heading">
          <?php if ( $attributes['contact-sub'] ) : ?>
            <p class="lead mb-0"><?php echo $attributes['contact-sub']; ?></p>
          <?php endif; ?>
          <?php if ( $attributes['contact-headline'] ) : ?>
            <h2 class="mb-5"><?php echo $attributes['contact-headline']; ?></h2>
          <?php endif; ?>
        </div>

        <div class="contact-details">
          <?php if ( $attributes['contact-phone'] ) : ?>
            <p class="contact-list-point contact-phone"><a href="tel:+49<?php echo $attributes['contact-phone']; ?>"><?php echo $attributes['contact-phone']; ?></a></p>
          <?php endif; ?>
          <?php if ( $attributes['contact-email'] ) : ?>
            <p class="contact-list-point contact-email"><a href="mailto:<?php echo $attributes['contact-email']; ?>"><?php echo $attributes['contact-email']; ?></a></p>
          <?php endif; ?>
          <?php if ( $attributes['contact-address'] ) : ?>
            <p class="contact-list-point contact-address"><?php echo $attributes['contact-address']; ?></p>
          <?php endif; ?>
        </div>
      </div>

      <!-- custom second col -->
      <?php if ( $attributes['contact-maps-show'] ) : ?>
        <div class="col-md-6 col-lg-8 my-auto">
          <iframe class="contact-map<?php if ( $attributes['contact-maps-grey'] ) : ?> greyscale<?php endif; ?>" src="<?php echo $attributes['contact-maps-embedd-url']; ?>" width="100%" height="<?php echo $attributes['contact-maps-height']; ?>px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      <?php endif; ?>

    </div>


  </div>

</section>
