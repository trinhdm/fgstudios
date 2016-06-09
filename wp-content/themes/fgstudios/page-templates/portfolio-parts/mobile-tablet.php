


<!-- <div class="row port--main" id="port__mobile-tablet-display">
  <div class="col-md-12">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
          <div class="panel-heading">
            <h2 class="films--header nospacing">Films</h2>
          </div>
        </a>
        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body">
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
        </div>
    </div>
         <div class="panel panel-default">
             <div class="panel-heading">
                  <h4 class="panel-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="">
                         Collapsible Group Item #2
                       </a>
                     </h4>

             </div>
             <div id="collapseTwo" class="panel-collapse collapse">
                 <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                     richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                     dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                     moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                     assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                     wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                     vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                     synth nesciunt you probably haven't heard of them accusamus labore sustainable
                     VHS.</div>
             </div>
         </div>
         <div class="panel panel-default">
             <div class="panel-heading">
                  <h4 class="panel-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="">
                         Collapsible Group Item #3
                       </a>
                     </h4>

             </div>
             <div id="collapseThree" class="panel-collapse collapse">
                 <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                     richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                     dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                     moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                     assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                     wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                     vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                     synth nesciunt you probably haven't heard of them accusamus labore sustainable
                     VHS.</div>
             </div>
         </div>
     </div>
  </div>
</div> -->
