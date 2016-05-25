<?php
/**
* Template Name: Home Page Template
*
*/
    get_header();
     ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <div class="fullscreen-video">
      </div>



          <?php the_content(); ?>
      </div><!-- .entry-content -->

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
