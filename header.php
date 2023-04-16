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

	<header id="masthead" class="site-header ttm-header-style-01">
		<!-- topbar -->
		<div class="top_bar ttm-bgcolor-darkgrey clearfix">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6">
								<div class="top_bar_contact_item">
									<div class="top_bar_icon"><i class="flaticon flaticon-placeholder"></i></div>
									<div class="top_bar_content">81 Bank Road Saginaw, MI 48601</div>
								</div>
								<div class="top_bar_contact_item">
									<div class="top_bar_icon"><i class="flaticon flaticon-envelope"></i></div>
									<div class="top_bar_content"> <a href="mailto:info@example.com">info@example.com</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="contact-info">
									<div class="top_bar_contact_item top_bar_social ml-auto p-0">
										<ul class="social-icons d-flex">
											<li>
												<a class="ttm-social-facebook" href="https://www.facebook.com/themetechMount18" rel="noopener" aria-label="facebook"><i class=" fa fa-facebook-f"></i></a></li>
											<li>
												<a class="ttm-social-twitter" href="https://twitter.com/themetechmount" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
											<li>
												<a class="ttm-social-linkedin" href="https://www.linkedin.com/company/themetech-mount/" rel="noopener" aria-label="google"><i class="fa fa-linkedin"></i></a></li>
											<li>
												<a class="ttm-social-pinteres" href="https://in.pinterest.com/themetechmount/_created/" rel="noopener" aria-label="google"><i class="fa fa-pinterest-p"></i></a></li>
										</ul>
									</div>
									<div class="top_bar_contact_item ttm-highlight-right">
										<div class="top_bar_icon"><i class="flaticon-phone-call"></i></div>
										<div class="top_bar_content"> Talk To Expert:
											<strong><a href="tel:143456789">0 (143) 456 7899</a></strong></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- topbar end -->
		<!-- site-header-menu -->
		<div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
			<div class="site-header-menu-inner ttm-stickable-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 ">
							<!--site-navigation -->
							<div class="site-navigation d-flex flex-row  justify-content-between align-items-center">
								<!-- site-branding -->
								<div class="site-branding">
									<?php the_custom_logo();?>
								</div><!-- .site-branding end -->
								
								<div class="btn-show-menu-mobile menubar menubar--squeeze">
									<span class="menubar-box">
										<span class="menubar-inner menu-toggle" aria-controls="primary-menu" aria-expanded="false"></span>
									</span>
								</div>
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'container'            => 'nav',
											'container_class'      => 'main-menu menu-mobile',
											'container_id'      => 'menu',
											'menu_id'        => 'menu',
											'menu_class'     => "menu justify-content-end align-items-center", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
											// 'items_wrap'  => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
									        'depth'          => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
									        'after'		     => $icon, // (string) Text after the link markup.
										    'item_spacing'   => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
										)
									);
									?><!-- #site-navigation -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->


