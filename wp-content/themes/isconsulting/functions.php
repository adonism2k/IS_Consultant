<?php

if (!is_admin()) {
  require_once( ABSPATH . "wp-admin/includes/post.php" );
}

function theme_prefix_setup() {
	add_theme_support( "custom-logo", array("header-text" => array("site-title","site-description")));
}
add_action( "after_setup_theme", "theme_prefix_setup" );

function string_translate() {
  // footer
  pll_register_string('footer_contact-us', 'Contact Us');
  pll_register_string('footer_newsletter', 'Special Letter to Us');
  pll_register_string('footer_newsletter_description', 'For more updates and information, drop us an email or phone number.');
  pll_register_string('contact_map', 'Find Us on Map');
  pll_register_string('full-name_label', 'Full Name');
  pll_register_string('phone_label', 'Phone Number');
  pll_register_string('email_label', 'Email Address');
  pll_register_string('message_label', 'Message');
}
add_action("after_setup_theme", "string_translate");


function custom_post_type() {
	
	/**
	 * Post Type: Portfolio
	 */
	 $labels = array(
    "name"                  => _x( "Portfolio", "Post Type General Name", "text_domain" ),
    "singular_name"         => _x( "Project", "Post Type Singular Name", "text_domain" ),
    "menu_name"             => __( "Portfolio", "text_domain" ),
    "name_admin_bar"        => __( "Portfolio", "text_domain" ),
    "archives"              => __( "Project Archives", "text_domain" ),
    "parent_item_colon"     => __( "Parent Project:", "text_domain" ),
    "all_items"             => __( "All Portfolio", "text_domain" ),
    "add_new_item"          => __( "Add New Project", "text_domain" ),
    "add_new"               => __( "Add New", "text_domain" ),
    "new_item"              => __( "New Project", "text_domain" ),
    "edit_item"             => __( "Edit Project", "text_domain" ),
    "update_item"           => __( "Update Project", "text_domain" ),
    "view_item"             => __( "View Project", "text_domain" ),
    "search_items"          => __( "Search Portfolio", "text_domain" ),
    "not_found"             => __( "Not found", "text_domain" ),
    "not_found_in_trash"    => __( "Not found in Trash", "text_domain" ),
    "featured_image"        => __( "Featured Image", "text_domain" ),
    "set_featured_image"    => __( "Set featured image", "text_domain" ),
    "remove_featured_image" => __( "Remove featured image", "text_domain" ),
    "use_featured_image"    => __( "Use as featured image", "text_domain" ),
    "insert_into_item"      => __( "Insert into project", "text_domain" ),
    "uploaded_to_this_item" => __( "Uploaded to this project", "text_domain" ),
    "items_list"            => __( "Portfolio list", "text_domain" ),
    "items_list_navigation" => __( "Portfolio list navigation", "text_domain" ),
    "filter_items_list"     => __( "Filter Portfolio list", "text_domain" ),
  );

	$args = array(
    "label"               => __( "Portfolio", "text_domain" ),
    "labels"              => $labels,
    "hierarchical"        => false,
    "public"              => true,
    "show_ui"             => true,
    "show_in_menu"        => true,
    "menu_position"       => 5,
    "show_in_admin_bar"   => true,
    "show_in_nav_menus"   => true,
    "can_export"          => true,
    "has_archive"         => true,
    "exclude_from_search" => false,
    "publicly_queryable"  => true,
    "capability_type"     => "page",
    "menu_icon"           => "dashicons-id-alt",
    "rewrite"             => array("slug" => "porfolio"),
    "show_in_rest"        => true,
    "supports"            => array("thumbnail", "title", "editor", "custom-fields")
  );
	register_post_type( "portfolio", $args );

	/**
	 * Post Type: Services
	 */
	$labels = array(
    "name"                  => _x( "Services", "Post Type General Name", "text_domain" ),
    "singular_name"         => _x( "Service", "Post Type Singular Name", "text_domain" ),
    "menu_name"             => __( "Services", "text_domain" ),
    "name_admin_bar"        => __( "Services", "text_domain" ),
    "archives"              => __( "Service Archives", "text_domain" ),
    "parent_item_colon"     => __( "Parent Service:", "text_domain" ),
    "all_items"             => __( "All Service", "text_domain" ),
    "add_new_item"          => __( "Add New Service", "text_domain" ),
    "add_new"               => __( "Add New", "text_domain" ),
    "new_item"              => __( "New Service", "text_domain" ),
    "edit_item"             => __( "Edit Service", "text_domain" ),
    "update_item"           => __( "Update Service", "text_domain" ),
    "view_item"             => __( "View Service", "text_domain" ),
    "search_items"          => __( "Search Service", "text_domain" ),
    "not_found"             => __( "Not found", "text_domain" ),
    "not_found_in_trash"    => __( "Not found in Trash", "text_domain" ),
    "featured_image"        => __( "Featured Image", "text_domain" ),
    "set_featured_image"    => __( "Set featured image", "text_domain" ),
    "remove_featured_image" => __( "Remove featured image", "text_domain" ),
    "use_featured_image"    => __( "Use as featured image", "text_domain" ),
    "insert_into_item"      => __( "Insert into item", "text_domain" ),
    "uploaded_to_this_item" => __( "Uploaded to this item", "text_domain" ),
    "items_list"            => __( "Services list", "text_domain" ),
    "items_list_navigation" => __( "Services list navigation", "text_domain" ),
    "filter_items_list"     => __( "Filter Services list", "text_domain" ),
  );

	$args = array(
    "label"               => __( "Services", "text_domain" ),
    "labels"              => $labels,
    "hierarchical"        => false,
    "public"              => true,
    "show_ui"             => true,
    "show_in_menu"        => true,
    "menu_position"       => 6,
    "show_in_admin_bar"   => true,
    "show_in_nav_menus"   => true,
    "can_export"          => true,
    "has_archive"         => true,
    "exclude_from_search" => false,
    "publicly_queryable"  => true,
    "capability_type"     => "page",
    "menu_icon"           => "dashicons-admin-generic",
    "rewrite"             => array("slug" => "news"),
    "show_in_rest"        => true,
    "supports"            => array("thumbnail", "title", "editor", "custom_fields"),
  );
	register_post_type( "services", $args );
  
	/**
	 * Post Type: Values
	 */
	$labels = array(
    "name"                  => _x( "Values", "Post Type General Name", "text_domain" ),
    "singular_name"         => _x( "Value", "Post Type Singular Name", "text_domain" ),
    "menu_name"             => __( "Values", "text_domain" ),
    "name_admin_bar"        => __( "Values", "text_domain" ),
    "archives"              => __( "Value Archives", "text_domain" ),
    "parent_item_colon"     => __( "Parent value:", "text_domain" ),
    "all_items"             => __( "All values", "text_domain" ),
    "add_new_item"          => __( "Add New value", "text_domain" ),
    "add_new"               => __( "Add New", "text_domain" ),
    "new_item"              => __( "New value", "text_domain" ),
    "edit_item"             => __( "Edit value", "text_domain" ),
    "update_item"           => __( "Update value", "text_domain" ),
    "view_item"             => __( "View value", "text_domain" ),
    "search_items"          => __( "Search value", "text_domain" ),
    "not_found"             => __( "Not found", "text_domain" ),
    "not_found_in_trash"    => __( "Not found in Trash", "text_domain" ),
    "featured_image"        => __( "Featured Image", "text_domain" ),
    "set_featured_image"    => __( "Set featured image", "text_domain" ),
    "remove_featured_image" => __( "Remove featured image", "text_domain" ),
    "use_featured_image"    => __( "Use as featured image", "text_domain" ),
    "insert_into_item"      => __( "Insert into value", "text_domain" ),
    "uploaded_to_this_item" => __( "Uploaded to this value", "text_domain" ),
    "items_list"            => __( "Values list", "text_domain" ),
    "items_list_navigation" => __( "Values list navigation", "text_domain" ),
    "filter_items_list"     => __( "Filter values list", "text_domain" ),
  );

	$args = array(
    "label"               => __( "Values", "text_domain" ),
    "labels"              => $labels,
    "hierarchical"        => false,
    "public"              => true,
    "show_ui"             => true,
    "show_in_menu"        => true,
    "menu_position"       => 6,
    "show_in_admin_bar"   => true,
    "show_in_nav_menus"   => true,
    "can_export"          => true,
    "has_archive"         => true,
    "exclude_from_search" => false,
    "publicly_queryable"  => true,
    "capability_type"     => "page",
    "menu_icon"           => "dashicons-chart-line",
    "rewrite"             => array("slug" => "values"),
    "show_in_rest"        => true,
    "supports"            => array("thumbnail", "title", "editor", "custom_fields"),
  );
	register_post_type("values", $args);
}
add_action("init","custom_post_type");

function page_contact_options() {
  include "inc/contact-options.php";
}

function register_contact_options() {
  register_setting("contact-options","address");
  register_setting("contact-options","phone_number");
  register_setting("contact-options","whatsapp_number");
  register_setting("contact-options","email");
  register_setting("contact-options","longitude");
  register_setting("contact-options","latitude");
}

function menu_option_contact() {
	add_menu_page(
    "Contact Options", // Page Title
    "Contact Options", // Menu Title
    "administrator", // Capability
    "contact-options", // Menu slug
    "page_contact_options", // function
    "dashicons-id", // Icon Url
    2 // Position
  ); //create new top-level menu
	add_action("admin_init","register_contact_options" ); //call register settings function
}
add_action("admin_menu","menu_option_contact"); // Create Options Contact

function my_myme_types($mime_types) {
    $mime_types["svg"] = "image/svg+xml"; //Adding svg extension
    return $mime_types;
}
add_filter("upload_mimes","my_myme_types",1,1);


function getStringBetween($tagname, $fromString) {
  $pattern = "#<\s*?$tagname\b[^>]*>(.*?)</$tagname\b[^>]*>#s";
  $string = $fromString;
  preg_match($pattern, $string, $matches);
  return $matches[1];
}
add_action("getStringBetween","getStringBetween" );

function slugToTitle($slug) {
  $title = explode('-', $slug);
  $title = join(' ', $title);
  $title = ucwords($title);
  return $title;
}
add_action( "slugToTitle", "slugToTitle" );