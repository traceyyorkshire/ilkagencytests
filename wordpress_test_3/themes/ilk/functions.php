<?php
/**
 * functions.php file
*/

// featured images
add_theme_support( 'post-thumbnails' );

// add excerpts for pages 	
add_post_type_support( 'page', 'excerpt' );

// add a nav menu
register_nav_menus( array(
			'main'   => __( 'Main Menu', 'ilktheme' ),
) );
		
function ilk_register(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ilk_register' );
