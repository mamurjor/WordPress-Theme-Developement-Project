<?php
// Register Custom Post Type client
function create_client_cpt() {

	$labels = array(
		'name' => _x( 'clients', 'Post Type General Name', 'learnwp' ),
		'singular_name' => _x( 'client', 'Post Type Singular Name', 'learnwp' ),
		'menu_name' => _x( 'clients', 'Admin Menu text', 'learnwp' ),
		'name_admin_bar' => _x( 'client', 'Add New on Toolbar', 'learnwp' ),
		'archives' => __( 'client Archives', 'learnwp' ),
		'attributes' => __( 'client Attributes', 'learnwp' ),
		'parent_item_colon' => __( 'Parent client:', 'learnwp' ),
		'all_items' => __( 'All clients', 'learnwp' ),
		'add_new_item' => __( 'Add New client', 'learnwp' ),
		'add_new' => __( 'Add New', 'learnwp' ),
		'new_item' => __( 'New client', 'learnwp' ),
		'edit_item' => __( 'Edit client', 'learnwp' ),
		'update_item' => __( 'Update client', 'learnwp' ),
		'view_item' => __( 'View client', 'learnwp' ),
		'view_items' => __( 'View clients', 'learnwp' ),
		'search_items' => __( 'Search client', 'learnwp' ),
		'not_found' => __( 'Not found', 'learnwp' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'learnwp' ),
		'featured_image' => __( 'Featured Image', 'learnwp' ),
		'set_featured_image' => __( 'Set featured image', 'learnwp' ),
		'remove_featured_image' => __( 'Remove featured image', 'learnwp' ),
		'use_featured_image' => __( 'Use as featured image', 'learnwp' ),
		'insert_into_item' => __( 'Insert into client', 'learnwp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this client', 'learnwp' ),
		'items_list' => __( 'clients list', 'learnwp' ),
		'items_list_navigation' => __( 'clients list navigation', 'learnwp' ),
		'filter_items_list' => __( 'Filter clients list', 'learnwp' ),
	);
	$args = array(
		'label' => __( 'client', 'learnwp' ),
		'description' => __( '', 'learnwp' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'client', $args );

}
add_action( 'init', 'create_client_cpt', 0 );

?>