
<?php
/**
 * Template Name: Contact Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id"primary" class="content-area">
       <main class="site-main d-container" role="main">
		
	   <?php while ( have_posts() ) : the_post(); ?>
			<div class="contact">

				<h1><?php echo the_title(); ?></h1>
										
				<div>
					<?php echo the_content(); ?> 
				</div>

				
			</div>

			

		  <?php wp_reset_postdata(); ?>

		<?php endwhile; ?>

		
	</div>
	<?php get_footer(); ?>
	</main>
	
</div>







