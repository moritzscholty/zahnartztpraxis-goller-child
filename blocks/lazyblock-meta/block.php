<section class="base-section-spacing <?php echo $attributes['meta-background-color']; ?> position-relative">

  <div class="meta container">
    <div class="row">

      <!-- meta first col -->
      <div class="col-md-5 col-lg-4">
        <?php if ( $attributes['meta-headline'] ) : ?>
          <h2 class="meta-headline"><?php echo $attributes['meta-headline']; ?></h2>
        <?php endif; ?>
      </div>

      <!-- meta second col -->
      <div class="col-md-7 col-lg-8">
        <?php if ( $attributes['meta-content'] ) : ?>
          <div class="meta-content">
            <?php echo $attributes['meta-content']; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>

</section>
