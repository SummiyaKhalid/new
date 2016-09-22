
<?php
/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Movies', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
		'all_items'           => __( 'All Movies', 'twentythirteen' ),
		'view_item'           => __( 'View Movie', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
		'update_item'         => __( 'Update Movie', 'twentythirteen' ),
		'search_items'        => __( 'Search Movie', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Movies', 'twentythirteen' ),
		'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array( 'post_tag','genre'),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => 'dashicons-editor-video',
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',

	);
	
	// Registering your Custom Post Type
	register_post_type( 'Movies', $args );



}



function movies_metaboxes( ) {
   global $wp_meta_boxes;
   add_meta_box('postfunctiondiv', __('Release Date'), 'movies_metaboxes_html', 'movies', 'normal', 'high');
}
add_action( 'add_meta_boxes_movies', 'movies_metaboxes' );


function movies_metaboxes_html()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $date = isset($custom["date"][0])?$custom["date"][0]:'';
?>
    <label>Date:</label><input type="date" name="date" value="<?php echo $date; ?>">
<?php
}


function movies_save_post()
{
    if(empty($_POST)) return; // movies_save_post triggered by add new? 
    global $post;
    update_post_meta($post->ID, "date", $_POST["date"]);
}   

add_action( 'save_post_movies', 'movies_save_post' );   
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );





function my_updated_messages( $messages ) {
  global $post, $post_ID;
  $messages['movies'] = array(
    0 => '', 
    1 => sprintf( __('Movie updated. <a href="%s">View movie</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Movie updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Movie restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Movie published. <a href="%s">View Movie</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Movie saved.'),
    8 => sprintf( __('Movie submitted. <a target="_blank" href="%s">Preview Movie</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Movie scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Movie</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Movie draft updated. <a target="_blank" href="%s">Preview Movie</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );
 ?>
