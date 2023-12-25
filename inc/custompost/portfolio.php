<?php 


// Register Custom Post Type portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'learnwp' ),
		'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'learnwp' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'learnwp' ),
		'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'learnwp' ),
		'archives' => __( 'portfolio Archives', 'learnwp' ),
		'attributes' => __( 'portfolio Attributes', 'learnwp' ),
		'parent_item_colon' => __( 'Parent portfolio:', 'learnwp' ),
		'all_items' => __( 'All portfolios', 'learnwp' ),
		'add_new_item' => __( 'Add New portfolio', 'learnwp' ),
		'add_new' => __( 'Add New', 'learnwp' ),
		'new_item' => __( 'New portfolio', 'learnwp' ),
		'edit_item' => __( 'Edit portfolio', 'learnwp' ),
		'update_item' => __( 'Update portfolio', 'learnwp' ),
		'view_item' => __( 'View portfolio', 'learnwp' ),
		'view_items' => __( 'View portfolios', 'learnwp' ),
		'search_items' => __( 'Search portfolio', 'learnwp' ),
		'not_found' => __( 'Not found', 'learnwp' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'learnwp' ),
		'featured_image' => __( 'Featured Image', 'learnwp' ),
		'set_featured_image' => __( 'Set featured image', 'learnwp' ),
		'remove_featured_image' => __( 'Remove featured image', 'learnwp' ),
		'use_featured_image' => __( 'Use as featured image', 'learnwp' ),
		'insert_into_item' => __( 'Insert into portfolio', 'learnwp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'learnwp' ),
		'items_list' => __( 'portfolios list', 'learnwp' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'learnwp' ),
		'filter_items_list' => __( 'Filter portfolios list', 'learnwp' ),
	);
	$args = array(
		'label' => __( 'portfolio', 'learnwp' ),
		'description' => __( 'portfolio', 'learnwp' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );
?>