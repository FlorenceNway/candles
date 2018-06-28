<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			
			
			<!-- #content -->
			<section id="mobile-block">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					
				</div><!-- .site-info -->

				<nav id="mobile-navigation" class="overlay" role="navigation">

					<!-- I added a close button 20/06/18  -->
					<div class="mobile-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/white_logo.svg" alt="Candles logo" class="logo">
					</div>	

					<section class="mobile-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
					<div class="mobile-close">
					<a href="javascript:void(0)" id="closebtn" onclick="closeNav()">Close</a>
					</div>
					</scetion>
				
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
