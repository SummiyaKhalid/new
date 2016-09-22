

<?php
/*
* Creating a function to create our CPT
*/

function custom_post_type_books() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Books', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Book', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Books', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Book', 'twentythirteen' ),
		'all_items'           => __( 'All Books', 'twentythirteen' ),
		'view_item'           => __( 'View Book', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Book', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Book', 'twentythirteen' ),
		'update_item'         => __( 'Update Book', 'twentythirteen' ),
		'search_items'        => __( 'Search Book', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Books', 'twentythirteen' ),
		'description'         => __( 'Book news and reviews', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genre' ),
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
		'menu_icon'           => 'dashicons-book',

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'Books', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_books', 0 );


?>
