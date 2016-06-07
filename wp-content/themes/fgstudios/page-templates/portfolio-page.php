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

       <div class="row">
         <div class="col-md-2" id="port--nav">
           <div class="row">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/film-icon.png' ?>"><span id="film-nav">Films</span>
             <div class="arrow arrow-show"></div>
           </div>
           <div class="row middle">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/photo-icon.png' ?>"><span id="photo-nav">Photos</span>
             <div class="arrow arrow-hide"></div>
           </div>
           <div class="row">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/design-icon.png' ?>"><span id="design-nav">Design</span>
            <div class="arrow arrow-hide"></div>
          </div>
         </div>


         <div class="col-md-10" id="port--main">
           <span id="films--main"></span>
           <div class="row">
             <div class="col-md-4">
               <h2>Films</h2>
             </div>
             <div class="col-md-8" id="port--main-nav">
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
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo1.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid shows weddings">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo2.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid highlights">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo3.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo4.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo5.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo6.jpg' ?>">
             </div>
           </div>

           <span id="photos--main"></span>
           <div class="row">
             <div class="col-md-4">
               <h2 class="spacing">Photos</h2>
             </div>
             <div class="col-md-8" id="port--main-nav">
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
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo7.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo8.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo9.jpg' ?>">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo10.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo11.jpg' ?>">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio--demo12.jpg' ?>">
             </div>
           </div>

           <span id="designs--main"></span>
           <div class="row">
             <div class="col-md-4">
               <h2 class="spaciing">Designs</h2>
             </div>
             <div class="col-md-8" id="port--main-nav">
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
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 portfolio-display pic-grid">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
             </div>

             <div class="col-md-4 portfolio-display pic-grid">
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
