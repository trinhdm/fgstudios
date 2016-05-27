<?php

/*
	Plugin Name: Smashing Fields Plugin
	Description: Setting up configurable fields for our plugin.
	Author: Matthew Ray
	Version: 1.0.0
*/
// class Smashing_Fields_Plugin {
// 	// Our code will go here
//   public function __construct() {
// 	  // Hook into the admin menu
// 	  add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ) );
//
//     include_once( plugin_dir_path( __FILE__ ) . 'advanced-custom-fields/acf.php' );
//     add_filter( 'acf/settings/path', array( $this, 'update_acf_settings_path' ) );
//     add_filter( 'acf/settings/dir', array( $this, 'update_acf_settings_dir' ) );
//   }
//
//   public function update_acf_settings_path( $path ) {
// 	   $path = plugin_dir_path( __FILE__ ) . 'vendor/advanced-custom-fields/';
// 	    return $path;
//     }
//
//     public function update_acf_settings_dir( $dir ) {
// 	    $dir = plugin_dir_url( __FILE__ ) . 'vendor/advanced-custom-fields/';
// 	    return $dir;
//     }
//
//   public function create_plugin_settings_page() {
// 	// Add the menu item and page
// 	 $page_title = 'Home Page Settings';
// 	 $menu_title = 'Home Page Settings';
// 	 $capability = 'manage_options';
// 	 $slug = 'home_pg_fields';
// 	 $callback = array( $this, 'plugin_settings_page_content' );
// 	 $icon = 'dashicons-admin-plugins';
// 	 $position = 100;
//
// 	 add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
//   }
//
//   public function plugin_settings_page_content() {
// 	   echo 'Hello World!';
//   }
// }
// new Smashing_Fields_Plugin();
//
// function remove_footer_admin () {
//   echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Made with Love, by <a href="http://trinhdm.github.io" target="_blank">Doreen Trinh</a></p>';
// }
//
// add_filter('admin_footer_text', 'remove_footer_admin');
