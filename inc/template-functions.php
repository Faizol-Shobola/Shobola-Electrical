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

//custom post (projects)
function project_init() {
    // set up project labels
    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'add_new' => 'Add New Project',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'new_item' => 'New Project',
        'all_items' => 'All Projects',
        'view_item' => 'View Project',
        'search_items' => 'Search Projects',
        'not_found' =>  'No Projects Found',
        'not_found_in_trash' => 'No Projects found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Projects',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'projects'),
        'query_var' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'project', $args );
    
    // register taxonomy
    register_taxonomy('project_category', 'project', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'project-category' )));
	}
	add_action( 'init', 'project_init' );


//custom post (clients)
function client_init() {
	// set up client labels
	$labels = array(
			'name' => 'Clients',
			'singular_name' => 'client',
			'add_new' => 'Add New Client',
			'add_new_item' => 'Add New Client',
			'edit_item' => 'Edit Client',
			'new_item' => 'New Client',
			'all_items' => 'All Clients',
			'view_item' => 'View Client',
			'search_items' => 'Search Clients',
			'not_found' =>  'No Clients Found',
			'not_found_in_trash' => 'No Client found in Trash', 
			'parent_item_colon' => '',
			'menu_name' => 'Clients',
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
	register_post_type( 'client', $args );
}
	add_action( 'init', 'client_init' );

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
			'menu_icon' => 'dashicons-testimonial',
			'supports' => array('title','editor','excerpt','trackbacks','custom-fields',
													'comments','revisions','thumbnail','author','page-attributes')
	);
	
	register_post_type( 'testimonial', $args );
}
	add_action( 'init', 'testimonial_init' );