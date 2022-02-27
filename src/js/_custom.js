jQuery(function ($) {

  // header nav
  $(document).ready(function(){

    const navbar = document.querySelector('.site-header')

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


}); // jQuery End
