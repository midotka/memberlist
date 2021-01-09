<?php
/*
Plugin Name: WP Memberlist
Plugin URI: http://plus130.com
Description: Creating a Memberlist
Version: 1.0
Author: Michael Kamp
Author URI: http://plus130.com
Text Domain: wp-memberlist
Domain Path: /languages
*/

// https://generatewp.com/post-type/
// Register Custom Post Type
function wp_memberlist_add_post_type() {

	$labels = array(
		'name'                  => _x( 'Members', 'Post Type General Name', 'wp-memberlist' ),
		'singular_name'         => _x( 'Member', 'Post Type Singular Name', 'wp-memberlist' ),
		'menu_name'             => __( 'Members', 'wp-memberlist' ),
		'name_admin_bar'        => __( 'Members', 'wp-memberlist' ),
		'archives'              => __( 'Item Archives', 'wp-memberlist' ),
		'attributes'            => __( 'Item Attributes', 'wp-memberlist' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wp-memberlist' ),
		'all_items'             => __( 'All Items', 'wp-memberlist' ),
		'add_new_item'          => __( 'Add New Item', 'wp-memberlist' ),
		'add_new'               => __( 'Add New', 'wp-memberlist' ),
		'new_item'              => __( 'New Item', 'wp-memberlist' ),
		'edit_item'             => __( 'Edit Item', 'wp-memberlist' ),
		'update_item'           => __( 'Update Item', 'wp-memberlist' ),
		'view_item'             => __( 'View Item', 'wp-memberlist' ),
		'view_items'            => __( 'View Items', 'wp-memberlist' ),
		'search_items'          => __( 'Search Item', 'wp-memberlist' ),
		'not_found'             => __( 'Not found', 'wp-memberlist' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wp-memberlist' ),
		'featured_image'        => __( 'Featured Image', 'wp-memberlist' ),
		'set_featured_image'    => __( 'Set featured image', 'wp-memberlist' ),
		'remove_featured_image' => __( 'Remove featured image', 'wp-memberlist' ),
		'use_featured_image'    => __( 'Use as featured image', 'wp-memberlist' ),
		'insert_into_item'      => __( 'Insert into item', 'wp-memberlist' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wp-memberlist' ),
		'items_list'            => __( 'Items list', 'wp-memberlist' ),
		'items_list_navigation' => __( 'Items list navigation', 'wp-memberlist' ),
		'filter_items_list'     => __( 'Filter items list', 'wp-memberlist' ),
	);
	$args = array(
		'label'                 => __( 'Member', 'wp-memberlist' ),
		'description'           => __( 'Memberlist', 'wp-memberlist' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
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
	register_post_type( 'wp_memberlist', $args );

}
add_action( 'init', 'wp_memberlist_add_post_type', 0 );


add_action( 'add_meta_boxes', 'wp_memberlist_add_custom_meta_box' );
function wp_memberlist_add_custom_meta_box() {
    add_meta_box(
    'wp_memberlist_editor',
    __( 'Member', 'wp-memberlist' ),
    'wp_memberlist_editor',
    'wp_memberlist',
    'advanced',
    'high'
    );
}


function wp_memberlist_editor( $post ) {
    echo 'Willkommen bei unserer ersten Meta Box!';
}
