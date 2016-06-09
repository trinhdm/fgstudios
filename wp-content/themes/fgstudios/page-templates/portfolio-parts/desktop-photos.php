<div class="row">
  <div class="col-md-3 col-sm-3 col-xs-12">
    <h2 class="spacing photos--header">Photos</h2>
  </div>
  <div class="col-md-9 col-sm-9 col-xs-12 port--main-photo port--main-nav">
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
       echo '<div class="col-md-4 col-sm-6 col-xs-12 portfolio-display photo-item '. $tax .'">';
       echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
       echo the_post_thumbnail();
       echo '</a>';
       echo '</div>';
     endwhile; ?>
  </div>
</div>
