<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main d-container" role="main">
			<div class="front-page-wrapper">
				
			<h3 class="simplified_text">UX Mentoring simplified...</h3>

			<ol class="front_page_intro">
				<li>Tell us about yourself</li>
				<li>Get your perfect match</li>
				<li>Connect with them on Slack</li>
			</ol>

			<h4 class="register_text mobile-register-link"><a href="<?php echo get_template_directory_uri(); ?>/form-register/" class="link"> Register for free <i class="fas fa-arrow-right"></i></a></h4>

			<h4 class="register_text desktop-register-link"><a href="<?php echo get_template_directory_uri(); ?>/desktop-form/" class="link"> Register for free <i class="fas fa-arrow-right"></i></a></h4>
		

			<p class="front_latest_post_link">We also have an amazing blog, read <a href="<?php echo get_template_directory_uri();?>/blog/" class="link">the latest posts </a></p>
		</div>
<!------------------Only to show in Mobile view ----------- -->
		<div class="blog-wrapper" id="moblie-frontpage">
			<?php $args = array( 'post_type' => 'post','order' =>'ASC','posts_per_page' => 2)?>

			   <?php $posts = new WP_Query( $args );  ?>

				<?php if ( $posts->have_posts() ) : ?>
				  
				  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				  	<div class="single-blog-wrapper">

				  		<div class="text-wrapper">
					  		<div class="blog-category">
				        			<?php 
				        				foreach((get_the_category()) as $category){
								        echo $category->name."<br>";
								       }
								      ?> 
				        	</div>

						    <h3 class="blog-name">
						    	<a href="<?php echo get_permalink(); ?>" rel="bookmark">
						    		<?php echo get_the_title(); ?> </a>
						    </h3>
				    
						    <span class="author">
						     		<?php 
						     			echo get_the_author();
									 ?>
				        	</span>
				    		
						</div>
				

					<div class="feature_img">
						<a href="<?php echo get_permalink(); ?>" rel="bookmark">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" /></a>
					</div>

				</div>

				  <?php endwhile; ?>
				<?php endif; ?>

				<p class="blog-link"><a href="<?php echo get_template_directory_uri();?>/blog/" class="link">Read More <i class="fas fa-arrow-right"></i></a></p>
		</div>
<!-------------------End Only to show in Mobile view----- -->

<?php get_footer(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
		

