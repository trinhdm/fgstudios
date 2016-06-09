<?php
/**
* Template Name: Portfolio Page
*
*/
    get_header();
     ?>

<script>
(function($) {
  $('ul.navbar-nav').addClass('navbar-right');
  $('#fgsnav').removeClass('animate-delay3');
  $('.logo--header').removeClass('animate-delay3');
  $('#main-logo').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/logo-black.png' ?>');

  $(function(){
    $('#port--nav').affix({
      offset: {
        top: $('#port--nav').offset().top - 20,

        bottom: ($('footer').outerHeight(true) +
            $('.application').outerHeight(true)) +
            40
      }
    });
  });

  $(function() {
    var photosHeader = $('h2.photos--header').offset().top,     // original is -190
    designsHeader = $('h2.designs--header').offset().top,
    filmsHeader = $('h2.films--header').offset().top,
    $window = $(window);

    $window.scroll(function() {
      if ( $window.scrollTop() >= photosHeader ) {
        $('.arrow-films').removeClass('arrow-show').addClass('arrow-hide');
        $('.arrow-photos').removeClass('arrow-hide').addClass('arrow-show');
        $('.arrow-designs').removeClass('arrow-show').addClass('arrow-hide');
      }

      else if ( $window.scrollTop() >= filmsHeader ) {
        $('.arrow-films').removeClass('arrow-hide').addClass('arrow-show');
        $('.arrow-designs').removeClass('arrow-show').addClass('arrow-hide');
        $('.arrow-photos').removeClass('arrow-show').addClass('arrow-hide');
      }

      if ( $window.scrollTop() >= designsHeader ) {
        $('.arrow-films').removeClass('arrow-show').addClass('arrow-hide');
        $('.arrow-designs').removeClass('arrow-hide').addClass('arrow-show');
        $('.arrow-photos').removeClass('arrow-show').addClass('arrow-hide');
      }
    });
  });


  // add display none to grid
  // click header
  // display block to grid

  // $('.films--header').on('click', function(){
  //   $('#film-grid').removeClass('grid-displaynone').addClass('grid-display');
  // });
})( jQuery );
</script>




<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
     <div class="container" id="portfolio">
       <div class="row">
         <a href="#films--main"><div class="col-xl-4 col-md-4 col-sm-12 col-xs-12 portfolio--trio" id="films--trio">
           <span>Films</span>
         </div></a>
         <a href="#photos--main"><div class="col-xl-4 col-md-4 col-sm-12 col-xs-12 portfolio--trio" id="photos--trio">
           <span>Photos</span>
         </div></a>
         <a href="#designs--main"><div class="col-xl-4 col-md-4 col-sm-12 col-xs-12 portfolio--trio" id="design--trio">
           <span>Designs</span>
         </div></a>
       </div>

       <?php
          $part1 = $_SERVER['DOCUMENT_ROOT'];
          $part1 .= '/wp-content/themes/fgstudios/page-templates/portfolio-parts/mobile-tablet.php';
          include_once($part1);
       ?>

       <div class="row" style="margin-top: 20px">
         <div class="col-md-2" id="port--nav" data-spy="affix">
           <a href="#films--main"><div class="row">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/film-icon.png' ?>"><span id="film-nav">Films</span>
             <div class="arrow arrow-show arrow-films"></div>
           </div></a>
           <a href="#photos--main"><div class="row middle">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/photo-icon.png' ?>"><span id="photo-nav">Photos</span>
             <div class="arrow arrow-hide arrow-photos"></div>
           </div></a>
           <a href="#designs--main"><div class="row">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/design-icon.png' ?>"><span id="design-nav">Design</span>
            <div class="arrow arrow-hide  arrow-designs"></div>
          </div></a>


          <a href="#top">
            <img id="arrow--icon" src="<?php echo get_template_directory_uri() . '/assets/img/arrow-icon.png' ?>">
          </a>
         </div>


         <div class="col-md-10 port--main" id="port__desktop-display">
           <span id="films--main"></span>
           <?php
              $films = $_SERVER['DOCUMENT_ROOT'];
              $films .= '/wp-content/themes/fgstudios/page-templates/portfolio-parts/desktop-films.php';
              include_once($films);
           ?>

           <span id="photos--main"></span>
           <?php
              $photos = $_SERVER['DOCUMENT_ROOT'];
              $photos .= '/wp-content/themes/fgstudios/page-templates/portfolio-parts/desktop-photos.php';
              include_once($photos);
           ?>

           <span id="designs--main"></span>
           <?php
              $designs = $_SERVER['DOCUMENT_ROOT'];
              $designs .= '/wp-content/themes/fgstudios/page-templates/portfolio-parts/desktop-designs.php';
              include_once($designs);
           ?>

         </div>
       </div>
     </div>
  </div>
</div>

<?php
get_sidebar();
get_footer();
?>
<script>

// FOR FILM port--main-nav
(function() {
			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
				var menuItems = menu.querySelectorAll('.menu__link'),
					setCurrent = function(ev) {
						ev.preventDefault();

						var item = ev.target.parentNode; // li

						// return if already current
						if (classie.has(item, 'film-item__port--main-nav--current')) {
							return false;
						}
						// remove current
						classie.remove(menu.querySelector('.film-item__port--main-nav--current'), 'film-item__port--main-nav--current');
						// set current
						classie.add(item, 'film-item__port--main-nav--current');
					};

				[].slice.call(menuItems).forEach(function(el) {
					el.addEventListener('click', setCurrent);
				});
			});

			[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
				link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
				new Clipboard(link);
				link.addEventListener('click', function() {
					classie.add(link, 'link-copy--animate');
					setTimeout(function() {
						classie.remove(link, 'link-copy--animate');
					}, 300);
				});
			});
		})(window);



    // FOR PHOTO port--main-nav
    (function() {
    			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
    				var menuItems = menu.querySelectorAll('.menu__link'),
    					setCurrent = function(ev) {
    						ev.preventDefault();

    						var item = ev.target.parentNode; // li

    						// return if already current
    						if (classie.has(item, 'photo-item__port--main-nav--current')) {
    							return false;
    						}
    						// remove current
    						classie.remove(menu.querySelector('.photo-item__port--main-nav--current'), 'photo-item__port--main-nav--current');
    						// set current
    						classie.add(item, 'photo-item__port--main-nav--current');
    					};

    				[].slice.call(menuItems).forEach(function(el) {
    					el.addEventListener('click', setCurrent);
    				});
    			});

    			[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
    				link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
    				new Clipboard(link);
    				link.addEventListener('click', function() {
    					classie.add(link, 'link-copy--animate');
    					setTimeout(function() {
    						classie.remove(link, 'link-copy--animate');
    					}, 300);
    				});
    			});
    		})(window);



        // FOR DESIGN port--main-nav
        (function() {
        			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
        				var menuItems = menu.querySelectorAll('.menu__link'),
        					setCurrent = function(ev) {
        						ev.preventDefault();

        						var item = ev.target.parentNode; // li

        						// return if already current
        						if (classie.has(item, 'design-item__port--main-nav--current')) {
        							return false;
        						}
        						// remove current
        						classie.remove(menu.querySelector('.design-item__port--main-nav--current'), 'design-item__port--main-nav--current');
        						// set current
        						classie.add(item, 'design-item__port--main-nav--current');
        					};

        				[].slice.call(menuItems).forEach(function(el) {
        					el.addEventListener('click', setCurrent);
        				});
        			});

        			[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
        				link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
        				new Clipboard(link);
        				link.addEventListener('click', function() {
        					classie.add(link, 'link-copy--animate');
        					setTimeout(function() {
        						classie.remove(link, 'link-copy--animate');
        					}, 300);
        				});
        			});
        		})(window);
    </script>
