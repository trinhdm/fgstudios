<?php
/**
* Template Name: Portfolio Page
*
*/
    get_header();
     ?>

<?php
   $jsbegin = $_SERVER['DOCUMENT_ROOT'];
   $jsbegin .= '/wp-content/themes/fgstudios/page-templates/portfolio-parts/js-beginning.php';
   include_once($jsbegin);
?>


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


<?php
   $jsend = $_SERVER['DOCUMENT_ROOT'];
   $jsend .= '/wp-content/themes/fgstudios/page-templates/portfolio-parts/js-ending.php';
   include_once($jsend);
?>
