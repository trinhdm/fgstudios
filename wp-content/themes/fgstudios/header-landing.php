<?php
/**
 * header for the landing page
 *
 * @package fgstudios
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fgstudios' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	</header><!-- #masthead -->

<div id="header">
</div>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/landing-page.css' ?>">
	<div id="content" class="site-content">
