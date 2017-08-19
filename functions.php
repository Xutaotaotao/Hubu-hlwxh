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
function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages 

    if(is_home()){
      $query->set('posts_per_page', 3);
    }

    if(is_page_template('page-news.php')){
      $query->set('posts_per_page', 10);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );
?>
