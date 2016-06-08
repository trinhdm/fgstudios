(function($) {

    // smooth scrolling
  $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



$(function() {
  var $grid = $('#film-grid').isotope({
    itemSelector: '.film-item',
    percentPosition: true,
    filter: '*',
    transitionDuration: '0.8s',
    // layoutMode: 'fitColumns',
    masonry: {
      columnWidth: '.col-md-4'
    },
    // only opacity for reveal/hide transition
    containerStyle: {
		  position: 'relative',
		  overflow: 'visible'
	  }
  });

  $('.film-cat').click(function(){
    var selector = $(this).attr('data-filter');
    $grid.isotope({
        filter: selector,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
        }
    });
  return false;
  });
});





// portfolio: photo isotope
$(function() {
  var $grid = $('#photo-grid').isotope({
    itemSelector: '.photo-item',
    percentPosition: true,
    filter: '*',
    transitionDuration: '0.8s',
    // layoutMode: 'fitColumns',
    masonry: {
      columnWidth: '.col-md-4'
    },
    // only opacity for reveal/hide transition
    containerStyle: {
		  position: 'relative',
		  overflow: 'visible'
	  }
  });

  $('.photo-cat').click(function(){
    var selector = $(this).attr('data-filter');
    $grid.isotope({
        filter: selector,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
        }
    });
  return false;
  });
});



// portfolio: design isotope
$(function() {
  var $grid = $('#design-grid').isotope({
    itemSelector: '.design-item',
    percentPosition: true,
    filter: '*',
    transitionDuration: '0.8s',
    // layoutMode: 'fitColumns',
    masonry: {
      columnWidth: '.col-md-4'
    },
    // only opacity for reveal/hide transition
    containerStyle: {
		  position: 'relative',
		  overflow: 'visible'
	  }
  });

  $('.design-cat').click(function(){
    var selector = $(this).attr('data-filter');
    $grid.isotope({
        filter: selector,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
        }
    });
  return false;
  });
});

// $(function() {
//
//   if (Modernizr.history) {
//
//     // history is supported; do magical things
//
//     // hijack the nav click event
//     $("nav").delegate("a", "click", function() {
//
//       _href = $(this).attr("href");
//
//       // change the url without a page refresh and add a history entry.
//       history.pushState(null, null, _href);
//
//       // load the content
//       loadContent(_href); // fear not! we're going to build this function in the next code block
//
//     });
//
//   } else {
//
//     // history is not supported; nothing fancy here
//
//   }
//
// });

})( jQuery );
