<?php
function dev_enqueue_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'dev_enqueue_scripts');



// link upper menu 
function get_top_parent_id(){
    global $post;
    if( $post->post_parent ){
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
        return $ancestors[0];
    }
    return $post->ID;
}

// theme setup 
function my_theme_setup(){
 
// registor menu 
register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer' => __( 'Footer Menu' )
));

  // post img 
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'custom', 320, 200, true );

}
add_action( 'after_setup_theme', 'my_theme_setup' );