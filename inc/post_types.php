<?php
/**
 * Registers blank post types
 */

//////////////////////////////////////////////////////////////////
// Custom Post type Components - PHP Templates + Shortcodes
//////////////////////////////////////////////////////////////////

function create_post_type_components() {

	register_taxonomy_for_object_type('category', 'components'); // Register Taxonomies for Category

	register_taxonomy_for_object_type('post_tag', 'components');

	register_post_type('components',
		array(
		'labels' => array(
			'name' => __('Components', 'wp'),
			'singular_name' => __('component', 'wp'),
			'add_new' => __('Add New', 'wp'),
			'add_new_item' => __('Add New component Post', 'wp'),
			'edit' => __('Edit', 'wp'),
			'edit_item' => __('Edit component Post', 'wp'),
			'new_item' => __('New component Post', 'wp'),
			'view' => __('View component Post', 'wp'),
			'view_item' => __('View component Post', 'wp'),
			'search_items' => __('Search component Post', 'wp'),
			'not_found' => __('No component Posts found', 'wp'),
			'not_found_in_trash' => __('No component Posts found in Trash', 'wp')
		),
		'hierarchical' => true,
		'publicly_queryable' => true,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		//'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'supports' => array('title','editor','thumbnail','page-attributes'),
		'can_export' => true, // Allows export in Tools > Export
		'taxonomies' => array('post_tag','category')
	));
}
// add_action('init', 'create_post_type_components'); => only if need specific large reusable sections