<section class="base-section-spacing <?php echo $attributes['contact-background-color']; ?> position-relative overflow-hidden">

  <!-- shape divider -->
  <div class="contact-divider">
    <svg id="contact-divider-1" data-name="contact-divider-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 244"><defs></defs><path d="M391.1,329.7V515.1c355-23.6,672.7,119.6,1274.6,27.6,225.8-34.5,448.3-27.3,644.3-2.2V329.7Z" transform="translate(-391.1 -329.7)"/></svg>
  </div>


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
            <p class="contact-list-point contact-address"><a href="<?php echo $attributes['contact-maps-ext-url']; ?>" target="_blank"><?php echo $attributes['contact-address']; ?></a></p>
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
