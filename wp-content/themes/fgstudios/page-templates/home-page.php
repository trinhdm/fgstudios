<?php
/**
* Template Name: Home Page Template
*
*/
    get_header();
     ?>

<style>
/* prevents scrolling on mobile*/
html, body {
  overflow-x: hidden;
}
body {
  position: relative
}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div id="home">

      <div id="loader-wrapper">
  			<div id="loader"></div>

  			<div class="loader-section section-left"></div>
              <div class="loader-section section-right"></div>

              <div class="loader--logo animated fadeOut animate-delay-logo-loader"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>">
        			</div>
  		</div>


    <?php while ( have_posts() ) : the_post(); ?>
      <div class="color-overlay"><div class="fullscreen-video">
      </div></div>

        <div class="home--content">
          <h1 class="entry-title animated fadeInLeft animate-delay1"><?php the_title(); ?></h1>
          <div class="animated fadeInLeft animate-delay2"><span class="line"></span><?php the_content(); ?></div>


          <button type="button" class="btn btn-primary home--button" data-toggle="button" aria-pressed="false">
            <p>Portfolio</p> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i>
          </button>
        </div>

      </div><!-- .entry-content -->
    </main>
  </div>

<?php endwhile; // end of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<script>
jQuery(document).ready(function( $ ) {

	setTimeout(function(){
		$('body').addClass('loaded');
	}, 3000);

});
</script>

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/wp-content/themes/fgstudios/inc/homepg-inline-js.php";
    include_once($path);
?>

<?php
get_sidebar();
get_footer();
?>
