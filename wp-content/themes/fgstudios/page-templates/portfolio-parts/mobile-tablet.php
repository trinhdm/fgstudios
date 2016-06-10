<ul class="nav nav-tabs port__mobile-tablet-display">
  <li class="active"><a data-target="#films" data-toggle="tab">Films</a></li>
  <li><a data-target="#photos" data-toggle="tab">Photos</a></li>
  <li><a data-target="#designs" data-toggle="tab">Designs</a></li>
</ul>

<div class="tab-content port__mobile-tablet-display">
  <div class="tab-pane active port--main" id="films">
    <div class="col-md-12 nospacing port--main-film port--main-nav">
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

      <div id="film-grid__mobile-tablet">
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
             echo '<div class="col-md-4 col-sm-6 col-xs-12 portfolio-display film-item '. $tax .'">';
             echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
             echo the_post_thumbnail();
             echo '</a>';
             echo '</div>';
           endwhile; ?>
         </div>
      </div>
  </div>


  <!-- PHOTOS FOR MOBILE/TABLET -->
  <div class="tab-pane port--main" id="photos">
    <div class="col-md-12 nospacing port--main-photo port--main-nav">
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

      <div id="photo-grid__mobile-tablet">
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
  </div>
  <div class="tab-pane" id="designs">
    desiggnnzz
  </div>
</div>
