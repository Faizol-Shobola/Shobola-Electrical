<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shobola_Electrical
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
		<div class="page">
		<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
		<span class="navbar-toggler-icon"></span>
	</button>
    <a class="navbar-brand" href="#">Navbar</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-1',
            'depth'             => 2,
            'container'         => 'nav',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            // 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            // 'walker'            => 'new WP_Bootstrap_Navwalker()',
			
			// wp_nav_menu(
			// 	array(
			// 	'theme_location' => 'menu-1',
			// 	'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
			// 	'menu_class'        => "flex flex-col lg:flex-row py-5 lg:py-0 lg:items-center gap-4 lg:gap-5 text-center md:max-w-lg lg:max-w-full mx-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
			// 	'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
			// 	'container_class'   => "menu-container menu bg-white hidden lg:flex",
			// 	'link_before'       => '<li class="font-semibold capitalize cursor-pointer">', // (string) Text before the link text.
			// 	'link_after'        => '</li>', // (string) Text after the link text.
			// 	'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
			// 	// 'theme_location'    => "top-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
			// 	'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
			// 	)
			// );
        ) );
        ?>
    </div>
</nav>
