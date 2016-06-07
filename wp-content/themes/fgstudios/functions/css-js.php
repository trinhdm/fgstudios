<?php


/**
 * Enqueue scripts and styles.
 */


function fgstudios_scripts() {
 	wp_enqueue_style( 'fgstudios-style', get_stylesheet_uri() );

 	wp_enqueue_script( 'fgstudios-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

 	wp_enqueue_script( 'fgstudios-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
 		wp_enqueue_script( 'comment-reply' );
 	}
 }
 add_action( 'wp_enqueue_scripts', 'fgstudios_scripts' );


function enqueue_js() {
  wp_enqueue_script('jquery');

	wp_register_script('init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'));
	wp_enqueue_script('init');
  //
  wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'));
  wp_enqueue_script('modernizr');

	// wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'));
	// wp_enqueue_script('isotope');

	// wp_register_script('metabox', get_template_directory_uri() . '/assets/js/metabox.js', array('jquery'));
	// wp_enqueue_script('metabox');

  wp_register_script('jquery.bootstrap.min', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', 'jquery');
  wp_enqueue_script('jquery.bootstrap.min');
}

add_action( 'init', 'enqueue_js' );


function enqueue_css() {
	wp_register_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'animate' );

	wp_register_style( 'bootstrap.min', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap.min' );

	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_css' );


function register_more_stylesheets() {
    wp_register_style( 'stylesheet_name', get_stylesheet_directory_uri() . '/assets/css/portfolio.css' );
}
function add_my_stylesheet() {
    if ( is_page('portfolio') ) // using page slug
    wp_enqueue_style( 'stylesheet_name' );  // no brackets needed for one line and no else
}
add_action( 'init', 'register_more_stylesheets' ); // should I use wp_print_styles hook instead?
add_action( 'wp_enqueue_scripts', 'add_my_stylesheet' );



// registers custom nav menu
$bspath = $_SERVER['DOCUMENT_ROOT'];
$bspath .= "/wp-content/themes/fgstudios/inc/wp_bootstrap_navwalker.php";

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

// enables bootstrap navwalker
 require_once($bspath);



 add_filter('nav_menu_css_class' , 'special_nav_class');
 function special_nav_class($classes, $item){
      if( in_array('current-menu-item', $classes) ){
              $classes[] = 'navlink-active';
      }
      return $classes;
 }

 ?>
