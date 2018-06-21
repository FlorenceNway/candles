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

					<!-- I added a close button 20/06/18  -->
					
			<a href="javascript:void(0)" id="closebtn" onclick="closeNav()">Close</a>
					
					<div class="mobile-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


					</div>
					<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span>
					
				</nav><!-- #site-navigation -->
				 <!-- Added a open button 20/06/18-->
		<span id="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<!-- added the open and close function for mobile nav -->
		<script type="text/javascript">
			
			function openNav() {
    document.getElementById("mobile-navigation").style.display = "flex";
}

function closeNav() {
    document.getElementById("mobile-navigation").style.display = "none";
}
		</script>
		<?php wp_footer(); ?>

	</body>
</html>
