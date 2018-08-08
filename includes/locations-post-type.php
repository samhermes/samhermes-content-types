<?php

// Register Locations custom post type
function samhermes_locations_post_type() {

	$labels = array(
		'name'                  => _x( 'Locations', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Location', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Locations', 'text_domain' ),
		'name_admin_bar'        => __( 'Location', 'text_domain' ),
		'archives'              => __( 'Location Archives', 'text_domain' ),
		'attributes'            => __( 'Location Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Location:', 'text_domain' ),
		'all_items'             => __( 'All Locations', 'text_domain' ),
		'add_new_item'          => __( 'Add New Location', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Location', 'text_domain' ),
		'edit_item'             => __( 'Edit Location', 'text_domain' ),
		'update_item'           => __( 'Update Location', 'text_domain' ),
		'view_item'             => __( 'View Location', 'text_domain' ),
		'view_items'            => __( 'View Locations', 'text_domain' ),
		'search_items'          => __( 'Search Location', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into location', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this location', 'text_domain' ),
		'items_list'            => __( 'Locations list', 'text_domain' ),
		'items_list_navigation' => __( 'Locations list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter locations list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Location', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'show_in_graphql' 		=> true,
		'graphql_single_name' 	=> 'location',
		'graphql_plural_name' 	=> 'locations',
	);
	register_post_type( 'locations', $args );

}
add_action( 'init', 'samhermes_locations_post_type', 0 );