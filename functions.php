<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
function mytheme_setup() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
register_nav_menus();
function emtx_excerpt_length( $length ) {
	return 100; 
}
add_filter( 'excerpt_length', 'emtx_excerpt_length' );
?>
