<?php

if ( ! is_admin() ) {
  require_once( ABSPATH . 'wp-admin/includes/post.php' );
}

/**
 * Implement the Custom Header feature.
 */
 function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(		
		'header-text' => array( 'site-title', 'site-description' ),
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function custom_post_type() {
	
	/**
	 * Post Type: Portfolio
	 */
	 $labels = array(
    'name'                  => _x( 'Portfolio', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Portfolio', 'text_domain' ),
    'name_admin_bar'        => __( 'Portfolio', 'text_domain' ),
    'archives'              => __( 'Project Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Project:', 'text_domain' ),
    'all_items'             => __( 'All Portfolio', 'text_domain' ),
    'add_new_item'          => __( 'Add New Project', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Project', 'text_domain' ),
    'edit_item'             => __( 'Edit Project', 'text_domain' ),
    'update_item'           => __( 'Update Project', 'text_domain' ),
    'view_item'             => __( 'View Project', 'text_domain' ),
    'search_items'          => __( 'Search Portfolio', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into project', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this project', 'text_domain' ),
    'items_list'            => __( 'Portfolio list', 'text_domain' ),
    'items_list_navigation' => __( 'Portfolio list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter Portfolio list', 'text_domain' ),
  );

	$args = array(
    'label'                 => __( 'Portfolio', 'text_domain' ),
    'labels'                => $labels,
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'menu_icon'             => 'dashicons-id-alt',
    'rewrite'               => array('slug' => 'porfolio'),
    'show_in_rest'          => true,
    'supports'              => array('thumbnail', 'title', 'editor', 'custom-fields')
  );

	register_post_type( 'portfolio', $args );

	/**
	 * Post Type: Services
	 */
		 $labels = array(
    'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Services', 'text_domain' ),
    'name_admin_bar'        => __( 'Services', 'text_domain' ),
    'archives'              => __( 'Service Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Service:', 'text_domain' ),
    'all_items'             => __( 'All Service', 'text_domain' ),
    'add_new_item'          => __( 'Add New Service', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Service', 'text_domain' ),
    'edit_item'             => __( 'Edit Service', 'text_domain' ),
    'update_item'           => __( 'Update Service', 'text_domain' ),
    'view_item'             => __( 'View Service', 'text_domain' ),
    'search_items'          => __( 'Search Service', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Services list', 'text_domain' ),
    'items_list_navigation' => __( 'Services list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter Services list', 'text_domain' ),
  );

	$args = array(
    'label'                 => __( 'Services', 'text_domain' ),
    'labels'                => $labels,
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'menu_icon'             => 'dashicons-admin-generic',
    'rewrite'               => array('slug' => 'news'),
    'show_in_rest'          => true,
    'supports'              => array('thumbnail', 'title', 'editor', 'custom_fields'),
  );

	register_post_type( 'services', $args );
}
add_action( 'init', 'custom_post_type');