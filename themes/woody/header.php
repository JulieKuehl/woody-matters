<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Woody
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woody' ); ?></a>

	<header id="masthead" class="site-header boxed" role="banner">
		<div class="site-branding">
			<img src="/images/logo.png" alt="Woody Matters logo" />
<!--			<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--			<p class="site-description">--><?php //bloginfo( 'description' ); ?><!--</p>-->
		</div><!-- .site-branding -->

		<div class="header-secondary-info">
			<div class="social-links">
				<?php dynamic_sidebar( 'social-links' ); ?>
			</div><!-- .social-links -->
			<button class="share-your-story" aria-controls="">Share Your Story</button>
		</div><!-- .header-secondary-info -->
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'woody' ); ?></button>
		<div class="boxed">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div><!-- .boxed -->
	</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
