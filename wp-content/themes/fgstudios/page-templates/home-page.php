<?php
/**
* Template Name: Home Page Template
*
*/
    get_header();
     ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div id="home">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="fullscreen-video">
      </div>

        <div class="home--content">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <span></span><?php the_content(); ?>
        </div>

      </div><!-- .entry-content -->
    </main>
  </div>

<?php endwhile; // end of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/wp-content/themes/fgstudios/inc/homepg-inline-js.php";
    include_once($path);
?>

<?php
get_sidebar();
get_footer();
?>
