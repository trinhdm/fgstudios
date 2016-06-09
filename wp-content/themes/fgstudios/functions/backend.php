<?php

add_action('admin_head', 'edit_admin_menu');
function edit_admin_menu(){
  global $menu;
	$menu[9] = Array('', 'read', 'separator-custom-post-types', '', 'wp-menu-separator');
	$menu[10] = $menu[5];
	unset($menu[5]); // Unset Posts
  $menu[18] = $menu[10]; // Copy Media from position 10 to position 14
  unset($menu[10]); // Unset Media (from original position)
  $menu[19] = $menu[15]; // Copy Links from position 15 to position 19
  unset($menu[15]); // Unset Links (from original position)
  $menu[14] = Array('', 'read', 'separator-custom-post-types', '', 'wp-menu-separator');
  ksort($menu);
}
