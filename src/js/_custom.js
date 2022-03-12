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

    // additional parameters nav
    if ($("#bootscore-navbar").hasClass("detail-nav")) {
      $('a[href*="service"]').addClass( "active" );



      var formvar=1;
      $('.nav-link').click(function() {
        if(formvar==1)
        {
          var url = window.location.origin;
          var value = $(this).attr("href");
          $(this).attr("href", url + value);

        setTimeout(function(){formi=1}, 5000);
        formvar=0;
        }
        //else alert("no dbl clicking");
      });

    }
    if ($("#bootscore-navbar").hasClass("meta-nav")) {

      var formvar=1;
      $('.nav-link').click(function() {
        if(formvar==1)
        {
          var url = window.location.origin;
          var value = $(this).attr("href");
          $(this).attr("href", url + value);

        setTimeout(function(){formi=1}, 5000);
        formvar=0;
        }
        //else alert("no dbl clicking");
      });
      
    }

    // register rellax.js
    var rellax = new Rellax('.rellax');

    // init Masonry
    var $grid = $('.row-masonry').masonry({
      itemSelector: '.gallery-image',
      percentPosition: true
    });
    // layout masonry after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    });



    // mobile text limits
    if (window.innerWidth < 768){
      $(".service-listing-button-home span").text(function(index, currentText) {
        if(currentText.length > 7){
            return currentText.substr(0, 8)+"..";
        }
      });
    };
    if (window.innerWidth < 1024){
      $(".wp-block-table td:first-child").text(function(index, currentText) {
        if(currentText.length > 3){
            return currentText.substr(0, 2)+":";
        }
      });
    };



});

// jQuery End
