<?php
/**
 * Registers blank post types
 */

//////////////////////////////////////////////////////////////////
// Custom Post type locations - PHP Templates + Shortcodes
//////////////////////////////////////////////////////////////////
function create_post_type_locations() {
	register_taxonomy_for_object_type('category', 'locations'); // Register Taxonomies for Category
	register_taxonomy_for_object_type('post_tag', 'locations');
	register_post_type('locations',
		array(
		'labels' => array(
			'name' => __('Filiales', 'freetimers'),
			'singular_name' => __('locations', 'freetimers'),
			'add_new' => __('Add New', 'freetimers'),
			'add_new_item' => __('Add New locations Post', 'freetimers'),
			'edit' => __('Edit', 'freetimers'),
			'edit_item' => __('Edit locations Post', 'freetimers'),
			'new_item' => __('New locations Post', 'freetimers'),
			'view' => __('View locations Post', 'freetimers'),
			'view_item' => __('View locations Post', 'freetimers'),
			'search_items' => __('Search locations Post', 'freetimers'),
			'not_found' => __('No locations Posts found', 'freetimers'),
			'not_found_in_trash' => __('No locations Posts found in Trash', 'freetimers')
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
add_action('init', 'create_post_type_locations');