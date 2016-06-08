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
  $('#port--main-nav.port--main-film a').on('click', function(){
    $('a.cat--active-film').removeClass('cat--active-film');
    $(this).addClass('cat--active-film');
  });

  $('#port--main-nav.port--main-photo a').on('click', function(){
    $('a.cat--active-photo').removeClass('cat--active-photo');
    $(this).addClass('cat--active-photo');
  });

  $('#port--main-nav.port--main-design a').on('click', function(){
    $('a.cat--active-design').removeClass('cat--active-design');
    $(this).addClass('cat--active-design');
  });
});

// portfolio: film isotope
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

  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
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

  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
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

  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });
});

})( jQuery );
