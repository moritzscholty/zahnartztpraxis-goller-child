jQuery(function ($) {

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

}); // jQuery End

// register rellax.js
var rellax = new Rellax('.rellax');
