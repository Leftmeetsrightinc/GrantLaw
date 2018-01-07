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
    'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
    ));
}
?>