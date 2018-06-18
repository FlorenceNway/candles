<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					
				</div><!-- .site-info -->

				<nav id="mobile-navigation" class="overlay" role="navigation">
					<button class="menu-toggle" aria-controls="secondary-menu" onclick="openNav()" aria-expanded="false"><?php esc_html( 'Secondary Menu' ); ?>Menu</button>
					<div class="mobile-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
