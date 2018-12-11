<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cnh_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'cnh_body_classes' );

/**
 * Add breadcrumbs.
 */
add_theme_support( 'yoast-seo-breadcrumbs' );

/**
 * Remove "Editor" links from sub-menus.
 */
function cnh_remove_submenus() {
  remove_submenu_page( 'themes.php', 'theme-editor.php' );
  remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'cnh_remove_submenus', 110 );

/**
 * Change all post titles to uppercase 
 */ 
function all_character_uppercase($title){
  return ucfirst(strtoupper($title)); 
}
// add_filter('the_title', 'all_character_uppercase');
