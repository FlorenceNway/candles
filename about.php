
<?php
/**
 * Template Name: About Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id"primary" class="content-area">
       <main id="about-page" class="site-main" role="main">
		
	   <?php while ( have_posts() ) : the_post(); ?>
			<div class="about">

				<h1><?php echo the_title(); ?></h1>
										
				<div>
					<?php echo the_content(); ?> 
				</div>

				<hr class="blue-line">
				<h2><?php echo CFS()->get( 'meet_team_title' ); ?></h2>
				<div class="tom">
					<div class="tom-grid">
						
						<div class="tom-name">
							<?php echo CFS()->get( 'tom_name' ); ?>
						</div>
						<div class="tom-img">
						<img src="<?php echo CFS()->get( 'tom_image' ); ?>">
						</div>
						</div>
						<div class="tom-info">
						    <?php echo CFS()->get( 'tom_content' ); ?>
					</div>

			

				</div>
				<br>
				<br>
				<br>
				<div class="tabrez">
					<div class="tab-grid">	
					<div class="tabrez-name">
							<?php echo CFS()->get( 'tabrez_name' ); ?>
					</div>
					<div class="tabrez-img">
					
							<img src="<?php echo CFS()->get( 'tabrez_image' ); ?>">	
					</div>
					</div>
					<div class="tabrez-info">
					 		<?php echo CFS()->get( 'tabrez_content' ); ?>
					</div>
					
		
				</div>

			</div>

		  <?php wp_reset_postdata(); ?>

		<?php endwhile; ?>

		
	</div>
	</main>
	<?php get_footer(); ?>

</div>







