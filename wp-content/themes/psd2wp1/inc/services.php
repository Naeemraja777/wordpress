<?php
// Register Custom Post Type
function services_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'psd2wp1' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'psd2wp1' ),
		'menu_name'             => __( 'Services', 'psd2wp1' ),
		'name_admin_bar'        => __( 'Services', 'psd2wp1' ),
		'archives'              => __( 'Services Archives', 'psd2wp1' ),
		'attributes'            => __( 'Services Attributes', 'psd2wp1' ),
		'parent_item_colon'     => __( 'Parent Item:', 'psd2wp1' ),
		'all_items'             => __( 'All Items', 'psd2wp1' ),
		'add_new_item'          => __( 'Add New Item', 'psd2wp1' ),
		'add_new'               => __( 'Add New', 'psd2wp1' ),
		'new_item'              => __( 'New Item', 'psd2wp1' ),
		'edit_item'             => __( 'Edit Item', 'psd2wp1' ),
		'update_item'           => __( 'Update Item', 'psd2wp1' ),
		'view_item'             => __( 'View Item', 'psd2wp1' ),
		'view_items'            => __( 'View Items', 'psd2wp1' ),
		'search_items'          => __( 'Search Item', 'psd2wp1' ),
		'not_found'             => __( 'Not found', 'psd2wp1' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp1' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp1' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp1' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp1' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp1' ),
		'insert_into_item'      => __( 'Insert into item', 'psd2wp1' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'psd2wp1' ),
		'items_list'            => __( 'Items list', 'psd2wp1' ),
		'items_list_navigation' => __( 'Items list navigation', 'psd2wp1' ),
		'filter_items_list'     => __( 'Filter items list', 'psd2wp1' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'psd2wp1' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-networking',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'services_post_type', 0 );
?>