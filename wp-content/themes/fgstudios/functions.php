<?php
/**
 * fgstudios functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fgstudios
 */





/**
 * Enqueue scripts and styles.
 */
 require "functions/_s.php" ;
 require "functions/css-js.php" ;
 require "functions/nav.php" ;
 require "functions/backend.php" ;
 require "functions/custom-post-types.php" ;



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
