<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			<section id="mobile-block">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					
				</div><!-- .site-info -->

				<nav id="mobile-navigation" class="overlay" role="navigation">

					<!-- I added a close button 20/06/18  -->
					
			
					
					<div class="mobile-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<a href="javascript:void(0)" id="closebtn" onclick="closeNav()">Close</a>

					</div>
				
				</nav><!-- #site-navigation -->
				 <!-- Added a open button 20/06/18-->
		<span id="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">MENU</span>	
			</footer><!-- #colophon -->
			</section>
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
