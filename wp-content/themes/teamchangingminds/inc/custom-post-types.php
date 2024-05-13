<?php

// Create Custom Post Types

add_action( 'init', 'teamchangingminds_create_post_type' );
function teamchangingminds_create_post_type() {
	
	// Create Stories
	register_post_type( 'story',
		array(
			'labels' => array(
				'name' => __( 'Stories' ),
				'singular_name' => __( 'Story' ),
				'add_new'            => _x( 'Add New', 'Story' ),
				'add_new_item'       => __( 'Add New Story' ),
				'edit_item'          => __( 'Edit Story' ),
				'new_item'           => __( 'New Story' ),
				'all_items'          => __( 'All Stories' ),
				'view_item'          => __( 'View Story' ),
				'search_items'       => __( 'Search Stories' ),
				'not_found'          => __( 'No Stories found' ),
				'not_found_in_trash' => __( 'No Stories found in the Trash' ),
				'parent_item_colon'  => '',
    			'menu_name'          => 'Stories'
			),
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'menu_position' => 5,
		'rewrite' => array('slug' => 'responder-stories', 'with_front' => false),
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' )
		)
	);
	
}

?>
