<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
	</head>
	<body <?php body_class(); ?>>
	<header id="header">
		<ul class="nero">
			<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Mon compte</span></a></li>
			<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Mon panier</span></a></li>
			<li class="buitoni-ricerca"><a href="#"><i class="fa fa-search" aria-hidden="true"></i><span>Recherche</span></a></li>
		</ul>
		<div class="ricerca">
			<?php get_search_form ( $echo = true ) ?>
		</div>
		<div class="logo">
			<a href="<?php bloginfo(url) ?>"><img src="<?php bloginfo('template_directory')  ?>/assets/vorlogio/logo.png" alt="<?php bloginfo('name') ?>" /></a>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
	</header>

	<!-- <header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header> -->

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
