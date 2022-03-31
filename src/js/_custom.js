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
    if ($("#bootscore-navbar").hasClass("more-nav")) {
      $('a[href*="about"]').addClass( "active" );

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

    // init rellax.js
    var rellax = new Rellax('.rellax');

    // init isotope
    $('.row-masonry').imagesLoaded( function() {

      var $container = $('.row-masonry').isotope({
        // options
        itemSelector: '.masonry-item',
        transitionDuration: '0.5s',
        masonry: {
        columnWidth: '.masonry-item'
        }
      });

      // isotope load more
      var initShow = 5; //number of items loaded on init & onclick load more button
      var counter = 3; //counter for load more button
      var iso = $container.data('isotope'); // get Isotope instance

      loadMore(initShow); //execute function onload

      function loadMore(toShow) {
        $container.find(".hidden").removeClass("hidden");

        var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
          return item.element;
        });
        $(hiddenElems).addClass('hidden');
        $container.isotope('layout');

        //when no more to load, hide show more button
        if (hiddenElems.length == 0) {
          jQuery("#load-more").hide();
        } else {
          jQuery("#load-more").show();
        };

      }

      //append load more button
      $container.after('<div class="text-center mt-5 position-relative"><button id="load-more" class="service-listing-button service-listing-button-back btn-default px-4 text-center position-relative">Weitere Bilder</button></div>');

      //when load more button clicked
      $("#load-more").click(function() {
        if ($('#filters').data('clicked')) {
          //when filter button clicked, set initial value for counter
          counter = initShow;
          $('#filters').data('clicked', false);
        } else {
          counter = counter;
        };

        counter = counter + initShow;

        loadMore(counter);
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

});

// jQuery End
