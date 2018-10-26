<?php
// Register Custom Post Type
function bio_post_type() {

	$labels = array(
		'name'                  => _x( 'Bios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Bio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Bios', 'text_domain' ),
		'name_admin_bar'        => __( 'Bios', 'text_domain' ),
		'archives'              => __( 'Bio Archives', 'text_domain' ),
		'attributes'            => __( 'Bio Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Bio:', 'text_domain' ),
		'all_items'             => __( 'All Bios', 'text_domain' ),
		'add_new_item'          => __( 'Add New Bio', 'text_domain' ),
		'add_new'               => __( 'Add New Bio', 'text_domain' ),
		'new_item'              => __( 'New Bio', 'text_domain' ),
		'edit_item'             => __( 'Edit Bio', 'text_domain' ),
		'update_item'           => __( 'Update Bio', 'text_domain' ),
		'view_item'             => __( 'View Bio', 'text_domain' ),
		'view_items'            => __( 'View Bios', 'text_domain' ),
		'search_items'          => __( 'Search Bios', 'text_domain' ),
		'not_found'             => __( 'Bio not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Bio not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Bio Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set bio featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove bio featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as bio featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into bio', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this bio', 'text_domain' ),
		'items_list'            => __( 'Bio list', 'text_domain' ),
		'items_list_navigation' => __( 'Bio list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter bio list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Bio', 'text_domain' ),
		'description'           => __( 'Information about each Laser Highway performer and staff member', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'bio', $args );

}
add_action( 'init', 'bio_post_type', 0 );
?>