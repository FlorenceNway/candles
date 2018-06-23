<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main d-container" role="main">
			<h1 class="simplified_text">UX Mentoring simplified...</h1>

			<ol class="front_page_intro">
				<li>Tell us about yourself</li>
				<li>Get your perfect match</li>
				<li>Connect with them on Slack</li>
			</ol>

			<h3><a href="<?php echo get_template_directory_uri(); ?>/step-1/" class="link"> Register for free </a></h3>

			<h3>We also have an amazing blog, read <a href="<?php echo get_template_directory_uri();?>/blog/" class="link">the latest posts </h3></a>

<!------------------Only to show in Mobile view ----------- -->
		<div class="blog-wrapper" id="moblie-frontpage">
			<?php $args = array( 'post_type' => 'post','order' =>'ASC')?>

			   <?php $posts = new WP_Query( $args );  ?>

				<?php if ( $posts->have_posts() ) : ?>
				  
				  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				  	<div class="single-blog-wrapper blog_in_front_page">

				  		<div class="left-text-wrapper">
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
				    
						 	<div class="blog-detail">
						     	<span class="author">
						     		<?php 
						     			echo get_the_author();
									 ?>
				        		</span>
				    		</div>
						</div>
				

					<div class="feature_img">
						<a href="<?php echo get_permalink(); ?>" rel="bookmark">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" /></a>
					</div>
				</div>
				  <?php endwhile; ?>
				<?php endif; ?>
		</div>
<!-------------------End Only to show in Mobile view----- -->

		</main><!-- #main -->
	</div><!-- #primary -->
		
<?php get_footer(); ?>

<select>
	<option value="mentor">Mentor</option>
</select>