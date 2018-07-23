<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laser_Highway
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Michroma|Roboto" rel="stylesheet">
	<!-- google verification -->
	<meta name="google-site-verification" content="Q476T5t1zcB5YUHdF6Tv02X6UyxHLKTe6radgP0bZls" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'laser_highway' ); ?></a>

	<header id="masthead" class="site-header container">
		<div class="site-branding row">
			<div class="header col-md-8 col-sm-6 col-xs-12">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$laser_highway_description = get_bloginfo( 'description', 'display' );
			if ( $laser_highway_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $laser_highway_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div>
			<div class="search col-md-4 col-sm-6 col-xs-12">
				<div class="float-md-right float-sm-none searchformtop">
					<?php get_search_form() ?>
				
			</div>
		</div><!-- .site-branding -->
		<span class='overdecoration container'>	--------------------------  ESSENTIALS -------------------------- </span>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'nav',
				'container_class' => 'main-navigation col-md-6',
				'container_id'    => 'site-navigation',
				'menu_class'      => 'nav nav-fill',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
				'link_after'	  => "<span class='activeicon'></span>"
			) );
			?>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
