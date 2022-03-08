<div class="headvisual container-fluid">

  <!-- headvisual overlay -->
  <div class="overlay"></div>

  <!-- headvisual video -->
  <?php if ( $attributes['headvisual-option'] ) : ?>
    <img class="headvisual-image" src="<?php echo esc_url( $attributes['headvisual-image']['url'] ); ?>" >
  <?php else: ?>
    <?php if ( isset( $attributes['headvisual-video']['url'] ) ) : ?>
      <video class="headvisual-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="<?php echo esc_url( $attributes['headvisual-video']['url'] ); ?>" />
          <img src="<?php echo esc_url( $attributes['headvisual-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['headvisual-image']['alt'] ); ?>">
      </video>
    <?php else: ?>
      <img class="headvisual-image" src="<?php echo esc_url( $attributes['headvisual-image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['headvisual-image']['alt'] ); ?>">
    <?php endif; ?>
  <?php endif; ?>

  <!-- headvisual content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="text-container w-100 mb-5 text-white">
        <?php if ( $attributes['headvisual-headline'] ) : ?>
            <h1 class="text-white"><?php echo $attributes['headvisual-headline']; ?></h1>
        <?php endif; ?>
        <?php if ( $attributes['headvisual-sub'] ) : ?>
            <p class="lead mb-0"><?php echo $attributes['headvisual-sub']; ?></p>
        <?php endif; ?>
      </div>
    </div>

    <!-- headvisual circles -->
    <?php if ( $attributes['headvisual-circle'] ) : ?>
      <div class="circle-container">
        <div class="circle rellax" data-rellax-speed="-8"></div>
      	<div class="circle rellax" data-rellax-speed="-9"></div>
      	<div class="circle rellax" data-rellax-speed="-8"></div>
        <div class="circle rellax" data-rellax-speed="-9"></div>
      </div>
    <?php endif; ?>

    <!-- headvisual scroll -->
    <?php if ( $attributes['headvisual-anchor'] ) : ?>
      <a href="#<?php echo $attributes['headvisual-anchor-link']; ?>" class="scroll-container" style="<?php if ( $attributes['headvisual-anchor-link'] ) : ?><?php else: ?>pointer-events:none;<?php endif; ?>">
        <!--<p>scrollen</p>-->
        <div class="scroller"></div>

      </a>
    <?php endif; ?>

    <!-- headvisual wave -->f
    <div class="wave-container">
      <?php if ( $attributes['headvisual-waves'] ) : ?>
        <div class="wave" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/placeholders/wave.svg');<?php if ( $attributes['headvisual-waves-animate'] ) : ?><?php else: ?>animation:none;<?php endif; ?>"></div>
        <div class="wave" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/placeholders/wave.svg');<?php if ( $attributes['headvisual-waves-animate'] ) : ?><?php else: ?>animation:none;<?php endif; ?>"></div>
      <?php endif; ?>
    </div>
  </div>
</div>
