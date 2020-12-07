<?php

/**
* file which registers our post type for the ratings
*
* @package         WP Ratings
* @subpackage      WP Ratings/includes
* @author          Awais Ahmed Khan
* @copyright       2020 Awais Ahmed Khan
* @license         MIT
*
**/


// no access if you call it directly
if (!defined('ABSPATH')) {
	exit;
}

function wp_rating_add_post_type() {

	$labels = array(
		'name'                  => _x('Ratings', 'Post Type General Name', 'embrace-rating'),
		'singular_name'         => _x('Rating', 'Post Type Singular Name', 'embrace-rating'),
		'menu_name'             => __('Ratings', 'embrace-rating'),
		'name_admin_bar'        => __('Ratings', 'embrace-rating'),
		'parent_item_colon'     => __('Parent Item:', 'embrace-rating'),
		'all_items'             => __('All Items', 'embrace-rating'),
		'add_new_item'          => __('Add New Item', 'embrace-rating'),
		'add_new'               => __('Add New', 'embrace-rating'),
		'new_item'              => __('New Item', 'embrace-rating'),
		'edit_item'             => __('Edit Item', 'embrace-rating'),
		'update_item'           => __('Update Item', 'embrace-rating'),
		'view_item'             => __('View Item', 'embrace-rating'),
		'search_items'          => __('Search Item', 'embrace-rating'),
		'not_found'             => __('Not found', 'embrace-rating'),
		'not_found_in_trash'    => __('Not found in Trash', 'embrace-rating'),
		'items_list'            => __('Items list', 'embrace-rating'),
		'items_list_navigation' => __('Items list navigation', 'embrace-rating'),
		'filter_items_list'     => __('Filter items list', 'embrace-rating'),
	);
	$args = array(
		'label'                 => __('Rating', 'embrace-rating'),
		'labels'                => $labels,
		'supports'              => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('wp_rating', $args);

}
add_action('init', 'wp_rating_add_post_type', 0);
