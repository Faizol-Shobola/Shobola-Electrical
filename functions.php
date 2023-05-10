<?php
/**
 * Shobola Electrical functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shobola_Electrical
 */

if ( ! defined( 'SHOBOLA_ELECRTICAL_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SHOBOLA_ELECRTICAL_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shobola_electrical_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Shobola Electrical, use a find and replace
		* to change 'shobola-electrical' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'shobola-electrical', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'shobola-electrical' ),
		)
	);


	/**
	 * Register Custom Post types
	*/


	/**
	 * Register Custom Navigation Walker
	 */
	function register_navwalker(){
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	}
	add_action( 'after_setup_theme', 'register_navwalker' );
	

	/**
	 * Use namespaced data attribute for Bootstrap's dropdown toggles.
	 *
	 * @param array    $atts HTML attributes applied to the item's `<a>` element.
	 * @param WP_Post  $item The current menu item.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 * @return array
	 */
	function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
		if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
			if ( array_key_exists( 'data-toggle', $atts ) ) {
				unset( $atts['data-toggle'] );
				$atts['data-bs-toggle'] = 'dropdown';
			}
		}
		return $atts;
	}

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'shobola_electrical_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'shobola_electrical_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shobola_electrical_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shobola_electrical_content_width', 640 );
}
add_action( 'after_setup_theme', 'shobola_electrical_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shobola_electrical_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shobola-electrical' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shobola-electrical' ),
			'before_widget' => '<aside class="widget with-title">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Opening-hours', 'shobola-electrical' ),
			'id'            => 'opening-hours',
			'description'   => esc_html__( 'Add widgets here.', 'shobola-electrical' ),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widgte-title"><h4>',
			'after_title'   => '</h4></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-info', 'shobola-electrical' ),
			'id'            => 'footer-info',
			'description'   => esc_html__( 'Add widgets here.', 'shobola-electrical' ),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widgte-title"><h4>',
			'after_title'   => '</h4></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-copyright', 'shobola-electrical' ),
			'id'            => 'footer-copyright',
			'description'   => esc_html__( 'Add widgets here.', 'shobola-electrical' ),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widgte-title"><h4>',
			'after_title'   => '</h4></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Social-media', 'shobola-electrical' ),
			'id'            => 'social-media',
			'description'   => esc_html__( 'Add widgets here.', 'shobola-electrical' ),
			'before_widget' => '<div class="widget with-title">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Menu', 'shobola-electrical' ),
			'id'            => 'menu',
			'description'   => esc_html__( 'Add widgets here.', 'shobola-electrical' ),
			'before_widget' => '<div class="widget with-title">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'shobola_electrical_widgets_init' );


function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">
			<i class="themifyicon ti-home"></i> 
			&nbsp;Home&nbsp;&nbsp;&#187;&nbsp;&nbsp;
		</a>';
	echo "";
    if (is_category() || is_single()) {
        the_category(' &bull; ');
            if (is_single()) {
                the_title();
            }
    } elseif (is_page()) {
        echo the_title();
    } elseif (is_search()) {
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


/**
 * Enqueue scripts and styles.
 */
function shobola_electrical_scripts() {
	wp_enqueue_style( 'shobola-electrical-style', get_stylesheet_uri(), array(), SHOBOLA_ELECRTICAL_VERSION );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), false, 'all');
	wp_enqueue_style( 'megamenu', get_template_directory_uri() . '/css/megamenu.css', array(), false, 'all');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), false, 'all');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), false, 'all');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), false, 'all');
	wp_enqueue_style( 'themify-icon', get_template_directory_uri() . '/css/themify-icon.css', array(), false, 'all');
	wp_enqueue_style( 'shortcodes', get_template_directory_uri() . '/css/shortcodes.css', array(), false, 'all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style( 'extend', get_template_directory_uri() . '/css/extend.css', array(), false, 'all');

	// revolution slider css
	wp_enqueue_style( 'rs6', get_template_directory_uri() . '/revolution/css/rs6.css', array(), false, 'all');

	wp_style_add_data( 'shobola-electrical-style', 'rtl', 'replace' );

	wp_enqueue_script( 'shobola-electrical-navigation', get_template_directory_uri() . '/js/navigation.js', array(), SHOBOLA_ELECRTICAL_VERSION, true );
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/js/customizer.js', array(), false, 'all');
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.min.js', array(), false, 'all');
	wp_enqueue_script( 'jquery-isotope', get_template_directory_uri() . '/js/jquery-isotope.js', array(), false, 'all');
	wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery-validate.js', array(), false, 'all');
	wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/js/jquery-waypoints.js', array(), false, 'all');
	wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/js/jquery.easing.js', array(), false, 'all');
	wp_enqueue_script( 'jquery.prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), false, 'all');
	wp_enqueue_script( 'numinate', get_template_directory_uri() . '/js/numinate.min.js', array(), false, 'all');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), false, 'all');
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), false, 'all');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), false, 'all');

	// revolution slider js
	wp_enqueue_script( 'rbtools', get_template_directory_uri() . '/revolution/js/rbtools.min.js', array(), false, 'all');
	wp_enqueue_script( 'rs6', get_template_directory_uri() . '/revolution/js/rs6.min.js', array(), false, 'all');
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/revolution/js/slider.js', array(), false, 'all');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shobola_electrical_scripts' );


function load_scripts(){
    //Load scripts:
    wp_enqueue_script('jquery'); # Loading the WordPress bundled jQuery version.
    //may add more scripts to load like jquery-ui
}
add_action('wp_enqueue_scripts', 'load_scripts');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

