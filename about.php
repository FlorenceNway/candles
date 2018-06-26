<?php /* Template Name: About Template */ 
		get_header(); 
?>

<div id"primary" class="content-area">
       <main id="main" class="site-main" role="main">
		
	   <?php while ( have_posts() ) : the_post(); ?>
			<div class="map-side">
				<h1><?php echo the_title(); ?></h1>
										
				<div>
					<?php echo the_content(); ?> 
				</div>

				<div class="Tom-info">
				    <?php echo CFS()->get( 'tom_text' ); ?>
				</div>
				<div class="Tom-img">
					<img src="<?php echo CFS()->get( 'tom_image' ); ?>">
				</div>

			</div>

		  <?php wp_reset_postdata(); ?>

		<?php endwhile; ?>

		
	</div>
	</main>
	
</div>



<?php get_footer(); ?>