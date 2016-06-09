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
})( jQuery );
</script>




<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
     <div class="container" id="portfolio">
       <div class="row">
         <a href="#films--main"><div class="col-xl-4 col-md-4 portfolio--trio" id="films--trio">
           <span>Films</span>
         </div></a>
         <a href="#photos--main"><div class="col-xl-4 col-md-4 portfolio--trio" id="photos--trio">
           <span>Photos</span>
         </div></a>
         <a href="#designs--main"><div class="col-xl-4 col-md-4 portfolio--trio" id="design--trio">
           <span>Designs</span>
         </div></a>
       </div>

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


         <div class="col-md-10" id="port--main">
           <span id="films--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="films--header nospacing">Films</h2>
             </div>
             <div class="col-md-9 nospacing port--main-film" id="port--main-nav">
               <nav class="menu film__port--main-nav">
                 <ul class="menu__list">
                   <?php
                    $terms = get_terms('film-portfolio-categories');
                    $count = count($terms);
                    echo '<li class="film-item__port--main-nav film-item__port--main-nav--current"><a class="menu__link film-cat cat--active-film" href="javascript:void(0)" title="" data-filter="*">All</a></li>';
                    if ( $count > 0 ){

                      foreach ( $terms as $term ) {

                        $termname = strtolower($term->name);
                        $termname = str_replace(' ', '-', $termname);
                        echo '<li class="film-item__port--main-nav"><a class="menu__link film-cat" href="javascript:void(0)" title="" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
                      }
                    }
                    ?>
                 </ul>
               </nav>
             </div>
           </div>

           <div id="film-grid">
             <div class="row">
               <?php
               /*
               Query the post
               */
               $args = array( 'post_type' => 'films-portfolio', 'posts_per_page' => -1 );
               $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();

               /*
               Pull category for each unique post using the ID
               */
               $terms = get_the_terms( $post->ID, 'film-portfolio-categories' );
               if ( $terms && ! is_wp_error( $terms ) ) :

                 $links = array();

                 foreach ( $terms as $term ) {
                   $links[] = $term->name;
                 }

                 $tax_links = join( " ", str_replace(' ', '-', $links));
                 $tax = strtolower($tax_links);
                 else :
	                  $tax = '';
                  endif;

                  /* Insert category name into portfolio-item class */
                  echo '<div class="col-md-4 portfolio-display film-item '. $tax .'">';
                  echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
                  echo the_post_thumbnail();
                  echo '</a>';
                  echo '</div>';
                endwhile; ?>
              </div>
           </div>

           <span id="photos--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="spacing photos--header">Photos</h2>
             </div>
             <div class="col-md-9 port--main-photo" id="port--main-nav">
               <nav class="menu photo__port--main-nav">
                 <ul class="menu__list">
                   <?php
                    $terms = get_terms('photo-portfolio-categories');
                    $count = count($terms);
                    echo '<li class="photo-item__port--main-nav photo-item__port--main-nav--current"><a class="menu__link photo-cat cat--active-photo" href="javascript:void(0)" title="" data-filter="*">All</a></li>';
                    if ( $count > 0 ){

                      foreach ( $terms as $term ) {

                        $termname = strtolower($term->name);
                        $termname = str_replace(' ', '-', $termname);
                        echo '<li class="photo-item__port--main-nav"><a class="menu__link photo-cat" href="javascript:void(0)" title="" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
                      }
                    }
                    ?>
                 </ul>
               </nav>
             </div>
           </div>

           <div id="photo-grid">
             <div class="row">
               <?php
               /*
               Query the post
               */
               $args = array( 'post_type' => 'photos-portfolio', 'posts_per_page' => -1 );
               $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();

               /*
               Pull category for each unique post using the ID
               */
               $terms = get_the_terms( $post->ID, 'photo-portfolio-categories' );
               if ( $terms && ! is_wp_error( $terms ) ) :

                 $links = array();

                 foreach ( $terms as $term ) {
                   $links[] = $term->name;
                 }

                 $tax_links = join( " ", str_replace(' ', '-', $links));
                 $tax = strtolower($tax_links);
                 else :
                    $tax = '';
                  endif;

                  /* Insert category name into portfolio-item class */
                  echo '<div class="col-md-4 portfolio-display photo-item '. $tax .'">';
                  echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
                  echo the_post_thumbnail();
                  echo '</a>';
                  echo '</div>';
                endwhile; ?>
             </div>
           </div>

           <span id="designs--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="spacing designs--header">Designs</h2>
             </div>
             <div class="col-md-9 port--main-design" id="port--main-nav">
               <nav class="menu design__port--main-nav">
                 <ul class="menu__list">
                   <?php
                    $terms = get_terms('design-portfolio-categories');
                    $count = count($terms);
                    echo '<li class="design-item__port--main-nav design-item__port--main-nav--current"><a class="menu__link design-cat cat--active-design" href="javascript:void(0)" title="" data-filter="*">All</a></li>';
                    if ( $count > 0 ){

                      foreach ( $terms as $term ) {

                        $termname = strtolower($term->name);
                        $termname = str_replace(' ', '-', $termname);
                        echo '<li class="design-item__port--main-nav"><a class="menu__link design-cat" href="javascript:void(0)" title="" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
                      }
                    }
                    ?>
                 </ul>
               </nav>
             </div>
           </div>

           <div id="design-grid">
             <div class="row">
               <?php
               /*
               Query the post
               */
               $args = array( 'post_type' => 'designs-portfolio', 'posts_per_page' => -1 );
               $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();

               /*
               Pull category for each unique post using the ID
               */
               $terms = get_the_terms( $post->ID, 'design-portfolio-categories' );
               if ( $terms && ! is_wp_error( $terms ) ) :

                 $links = array();

                 foreach ( $terms as $term ) {
                   $links[] = $term->name;
                 }

                 $tax_links = join( " ", str_replace(' ', '-', $links));
                 $tax = strtolower($tax_links);
                 else :
                    $tax = '';
                  endif;

                  /* Insert category name into portfolio-item class */
                  echo '<div class="col-md-4 portfolio-display design-item '. $tax .'">';
                  echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
                  echo the_post_thumbnail();
                  echo '</a>';
                  echo '</div>';
                endwhile; ?>
             </div>
           </div>

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
