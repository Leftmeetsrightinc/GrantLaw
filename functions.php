<?php

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );
    
add_theme_support('menus');

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'description' => 'Appears as the sidebar on the custom homepage',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
    ));
}

function create_post_type() {
  register_post_type( 'description',
    array(
      'labels' => array(
        'name' => __( 'Blog header text' ),
        'singular_name' => __( 'Header' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {

	if ( is_home() && $query->is_main_query() || is_feed() )
		$query->set( 'post_type', array( 'post', 'header', 'audio', 'video', 'gallery' ) );

	return $query;
}
?>