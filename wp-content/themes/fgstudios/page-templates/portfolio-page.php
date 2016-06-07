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
         <a href="#films--main"><div class="col-md-4 portfolio--trio" id="films--trio">
           <span>Films</span>
         </div></a>
         <a href="#photos--main"><div class="col-md-4 portfolio--trio" id="photos--trio">
           <span>Photos</span>
         </div></a>
         <a href="#designs--main"><div class="col-md-4 portfolio--trio" id="design--trio">
           <span>Designs</span>
         </div></a>
       </div>


         <div class="col-md-2 scrollspy" id="port--nav" data-spy="affix">
           <div class="row">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/film-icon.png' ?>"><span id="film-nav">Films</span>
             <div class="arrow arrow-show arrow-films"></div>
           </div>
           <div class="row middle">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/photo-icon.png' ?>"><span id="photo-nav">Photos</span>
             <div class="arrow arrow-hide arrow-photos"></div>
           </div>
           <div class="row">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/design-icon.png' ?>"><span id="design-nav">Design</span>
            <div class="arrow arrow-hide  arrow-designs"></div>
          </div>
         </div>


         <div class="col-md-10" id="port--main">
           <span id="films--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="films--header">Films</h2>
             </div>
             <div class="col-md-9" id="port--main-nav">
               <a class="cat cat--active" data-filter="*">All</a>
               <a class="cat" data-filter=".highlights">Event Highlights</a>
               <a class="cat" data-filter=".commercials">Commercials</a>
               <a class="cat" data-filter=".documentaries">Documentaries</a>
               <a class="cat" data-filter=".shows">Shows</a>
               <a class="cat" data-filter=".weddings">Weddings</a>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid shows weddings">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid shows weddings">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <span id="photos--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="spacing photos--header">Photos</h2>
             </div>
             <div class="col-md-9" id="port--main-nav">
               <a class="cat cat--active" data-filter="*">All</a>
               <a class="cat" data-filter=".highlights">Event Highlights</a>
               <a class="cat" data-filter=".commercials">Commercials</a>
               <a class="cat" data-filter=".documentaries">Documentaries</a>
               <a class="cat" data-filter=".shows">Shows</a>
               <a class="cat" data-filter=".weddings">Weddings</a>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid shows weddings">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <span id="designs--main"></span>
           <div class="row">
             <div class="col-md-3">
               <h2 class="spacing designs--header">Designs</h2>
             </div>
             <div class="col-md-9" id="port--main-nav">
               <a class="cat cat--active" data-filter="*">All</a>
               <a class="cat" data-filter=".highlights">Event Highlights</a>
               <a class="cat" data-filter=".commercials">Commercials</a>
               <a class="cat" data-filter=".documentaries">Documentaries</a>
               <a class="cat" data-filter=".shows">Shows</a>
               <a class="cat" data-filter=".weddings">Weddings</a>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid shows weddings">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid shows weddings">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
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
