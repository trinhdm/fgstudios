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
         <div class="col-md-4 portfolio--trio" id="films--trio">
           <span>Films</span>
         </div>
         <div class="col-md-4 portfolio--trio" id="photos--trio">
           <span>Photos</span>
         </div>
         <div class="col-md-4 portfolio--trio" id="design--trio">
           <span>Designs</span>
         </div>
       </div>

       <div class="row">
         <div class="col-md-3" id="port--nav">
           <div class="row">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/film-icon.png' ?>"><span id="film-nav">Films</span>
           </div>
           <div class="row middle">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/photo-icon.png' ?>"><span id="photo-nav">Photos</span>
             <div class="clearfix"></div>
           </div>
           <div class="row">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/design-icon.png' ?>"><span id="design-nav">Design</span>
            <div class="clearfix"></div>
          </div>
         </div>
         <div class="col-md-9" id="port--main">
           <h2>Films</h2>
           <h2>Photos</h2>
           <h2>Designs</h2>
         </div>
       </div>
     </div>
  </div>
</div>

<?php
get_sidebar();
get_footer();
?>
