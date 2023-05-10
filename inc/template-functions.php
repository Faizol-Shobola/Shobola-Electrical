<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Shobola_Electrical
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function shobola_electrical_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'shobola_electrical_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function shobola_electrical_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'shobola_electrical_pingback_header' );


//custom post (testimonials)
function testimonial_init() {
	// set up testimonial labels
	$labels = array(
			'name' => 'Testimonials',
			'singular_name' => 'testimonial',
			'add_new' => 'Add New Testimonial',
			'add_new_item' => 'Add New Testimonial',
			'edit_item' => 'Edit Testimonial',
			'new_item' => 'New Testimonial',
			'all_items' => 'All Testimonials',
			'view_item' => 'View Testimonial',
			'search_items' => 'Search Testimonials',
			'not_found' =>  'No Testimonials Found',
			'not_found_in_trash' => 'No Testimonial found in Trash', 
			'parent_item_colon' => '',
			'menu_name' => 'Testimonials',
	);
	
	// register post type
	$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'testimonial'),
			'query_var' => true,
			'menu_icon' => 'dashicons-businessman',
			'supports' => array('title','editor','excerpt','trackbacks','custom-fields',
													'comments','revisions','thumbnail','author','page-attributes')
	);
	register_post_type( 'testimonial', $args );
}
	add_action( 'init', 'testimonial_init' );