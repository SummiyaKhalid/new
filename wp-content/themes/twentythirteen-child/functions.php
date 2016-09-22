<?php

include('movies.php');
include('taxonomy.php');
include('books.php');

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_gallery_shortcode($atts) {
	//return do_shortcode( '[gallery_bank type="images" format="thumbnail" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="true" album_id="2"]' );
 // var_dump(get_the_content()); die();
  
}
//add_shortcode('gallery_bank','my_gallery_shortcode');
 

// New code



?>
