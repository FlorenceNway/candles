<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
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
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			
			<?php $fullHeight = is_front_page(); ?> 
			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"></p>
				</div><!-- .site-branding -->

				<a href="<?php echo get_option("siteurl"); ?>" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/black_logo.svg" alt="Candles logo" class="black-logo">
				</a>

				<nav id="desktop-navigation" class="main-navigation <?php echo $fullHeight  ? ' nav-full-height ' : ' nav-height'; ?>" role="navigation">
				
					 
						<a href="<?php echo get_option("siteurl"); ?>" >
							<img src="<?php echo get_template_directory_uri(); ?>/images/white_logo.svg" alt="Candles logo" class="logo">
						</a>
						<p class="mentor-text">UX Mentoring simplified <i class="fas fa-long-arrow-alt-down"></i></p>

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array('theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						
			
				</nav><!-- #site-navigation -->
			
		</header><!-- #masthead -->
		
		<div id="content" class="site-content site-container box">
