<?php
function survey_init() {
	$labels = array(
		'name'                  => _x( 'Surveys', 'Post type general name', 'blog' ),
		'singular_name'         => _x( 'Survey', 'Post type singular name', 'blog' ),
		'menu_name'             => _x( 'Surveys', 'Admin Menu text', 'blog' ),
		'name_admin_bar'        => _x( 'Survey', 'Add New on Toolbar', 'blog' ),
		'add_new'               => __( 'Add New', 'blog' ),
		'add_new_item'          => __( 'Add New Survey', 'blog' ),
		'new_item'              => __( 'New Survey', 'blog' ),
		'edit_item'             => __( 'Edit Survey', 'blog' ),
		'view_item'             => __( 'View Survey', 'blog' ),
		'all_items'             => __( 'All Surveys', 'blog' ),
		'search_items'          => __( 'Search Surveys', 'blog' ),
		'parent_item_colon'     => __( 'Parent Surveys:', 'blog' ),
		'not_found'             => __( 'No surveys found.', 'blog' ),
		'not_found_in_trash'    => __( 'No surveys found in Trash.', 'blog' ),
		'featured_image'        => _x( 'Survey Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blog' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blog' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blog' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blog' ),
		'archives'              => _x( 'Survey archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'blog' ),
		'insert_into_item'      => _x( 'Insert into survey', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blog' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this survey', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blog' ),
		'filter_items_list'     => _x( 'Filter surveys list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blog' ),
		'items_list_navigation' => _x( 'Surveys list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blog' ),
		'items_list'            => _x( 'Surveys list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blog' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => 'Short Survey',
		'public'             => true,
		'hierarchical'       => false,
		'exclude_from_search'=> false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-tickets-alt',
		'capability_type'    => 'post',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'        => true,
		'rewrite'            => array( 'slug' => 'survey' ),
		'query_var'          => true,
		'can_export'         => true
	);

	register_post_type( 'survey', $args );
}

add_action( 'init', 'survey_init' );