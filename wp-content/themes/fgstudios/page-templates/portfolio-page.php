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
    var photosHeader = $('h2.photos--header').offset().top - 190,
    designsHeader = $('h2.designs--header').offset().top - 190,
    filmsHeader = $('h2.films--header').offset().top - 190,
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
               <a class="film-cat cat--active-film" data-filter="*">All</a>
               <a class="film-cat" data-filter=".film-highlights">Event Highlights</a>
               <a class="film-cat" data-filter=".film-commercials">Commercials</a>
               <a class="film-cat" data-filter=".film-documentaries">Documentaries</a>
               <a class="film-cat" data-filter=".film-shows">Shows</a>
               <a class="film-cat" data-filter=".film-weddings">Weddings</a>
             </div>
           </div>

           <div id="film-grid">
             <div class="row">
               <div class="col-md-4 portfolio-display film-item film-highlights">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display film-item film-shows film-weddings">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo10.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display film-item film-highlights film-documentaries">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo11.jpg' ?>">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 portfolio-display film-item film-commercials">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo12.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display film-item film-commercials film-documentaries film-shows">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo3.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display film-item film-weddings">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo1.jpg' ?>">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 portfolio-display film-item film-highlights film-shows">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo11.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display film-item film-shows film-weddings">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo10.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display film-item film-documentaries">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
               </div>
             </div>
           </div>

           <span id="photos--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="spacing photos--header">Photos</h2>
             </div>
             <div class="col-md-9 port--main-photo" id="port--main-nav">
               <a class="photo-cat cat--active-photo" data-filter="*">All</a>
               <a class="photo-cat" data-filter=".photo-people">People</a>
               <a class="photo-cat" data-filter=".photo-landscape">Landscape</a>
               <a class="photo-cat" data-filter=".photo-commercials">Commercial</a>
               <a class="photo-cat" data-filter=".photo-weddings">Weddings</a>
               <a class="photo-cat" data-filter=".photo-events">Events</a>
               <a class="photo-cat" data-filter=".photo-booth">Photo Booth</a>
             </div>
           </div>

           <div id="photo-grid">
             <div class="row">
               <div class="col-md-4 portfolio-display photo-item photo-people">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display photo-item photo-weddings photo-events">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo10.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display photo-item photo-booth photo-commercials">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo11.jpg' ?>">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 portfolio-display photo-item photo-landscape">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo12.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display photo-item photo-landscape photo-booth photo-weddings">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo3.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display photo-item photo-events">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo1.jpg' ?>">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 portfolio-display photo-item photo-people photo-weddings">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo11.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display photo-item photo-weddings photo-events">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo10.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display photo-item photo-commercials">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
               </div>
             </div>
           </div>

           <span id="designs--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="spacing designs--header">Designs</h2>
             </div>
             <div class="col-md-9 port--main-design" id="port--main-nav">
               <a class="design-cat cat--active-design" data-filter="*">All</a>
               <a class="design-cat" data-filter=".design-logos">Logos</a>
               <a class="design-cat" data-filter=".design-graphics">Graphics</a>
               <a class="design-cat" data-filter=".design-cards">Cards</a>
               <a class="design-cat" data-filter=".design-shirts">Shirts</a>
               <a class="design-cat" data-filter=".design-banners">Banners</a>
               <a class="design-cat" data-filter=".design-other">Other Prints</a>
             </div>
           </div>

           <div id="design-grid">
             <div class="row">
               <div class="col-md-4 portfolio-display design-item design-logos design-other">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display design-item design-shirts design-banners">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo10.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display design-item design-logos design-cards">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo11.jpg' ?>">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 portfolio-display design-item design-graphics">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo12.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display design-item design-other design-graphics design-cards design-shirts">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo3.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display design-item design-banners">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo1.jpg' ?>">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 portfolio-display design-item design-other design-logos design-shirts">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo11.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display design-item design-shirts design-banners">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo10.jpg' ?>">
               </div>

               <div class="col-md-4 portfolio-display design-item design-cards">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
               </div>
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
