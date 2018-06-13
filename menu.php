<?php
 
/**
 * Template Name: Menu Template
 *
 * @package RED_Starter_Theme
 */
?>


<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

