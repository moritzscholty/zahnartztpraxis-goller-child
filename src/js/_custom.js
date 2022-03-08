jQuery(function ($) {

  // header nav
  $(document).ready(function(){

    const navbar = document.querySelector('.header-anim')

  window.addEventListener('scroll', function(e) {
    const lastPosition = window.scrollY
    if (lastPosition > 50 ) {
      navbar.classList.add('active')
    } else if (navbar.classList.contains('active')) {
      navbar.classList.remove('active')
    } else {
      navbar.classList.remove('active')
    }
  })

  });

    // additional parameters detail nav
    if ($("#bootscore-navbar").hasClass("detail-nav")) {
      $('a[href*="service"]').addClass( "active" );
    }

    // register rellax.js
    var rellax = new Rellax('.rellax');

    // init Masonry
    var $grid = $('.row-masonry').masonry({
      itemSelector: '.gallery-image',
      percentPosition: true
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    });


});

// jQuery End
