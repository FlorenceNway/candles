<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main content-container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

<script>
var lookingFor = document.getElementById('lookingFor').value;
console.log('lookingFor:', lookingFor);

	jQuery(".mentor").hide();
	jQuery(".mentored").hide();
	jQuery(".both").hide();
	
	if(lookingFor == "a mentor") {
	  jQuery(".mentor").show();
	} else if (lookingFor == "mentored") {
	  jQuery(".mentored").show();
	} else {
		document.getElementsByClassName('total-step').innerHTML = '4';
	  document.getElementById('step3').innerHTML = '3';
	  document.getElementById('step4').innerHTML = '4';	
	  jQuery(".both").show();
	  
	}
</script>
