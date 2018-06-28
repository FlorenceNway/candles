<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main content-container" role="main">
		
		<h1 class="header-blog">Blog</h1>
		
		<div class="blog-wrapper" id="mobile-blog-page">
			<?php $args = array( 'post_type' => 'post','order' =>'ASC')?>

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
			    
					 	<div class="blog-detail">
					     	<span class="author">
					     		<?php 
					     			echo get_the_author();
								  ?>
			        		</span>
			    		</div>

				    	<div class="blog-content">
				    	 	<span class="short-description">
					     		<?php 
					     			$mykey_values = get_post_custom_values( 'short_description' );
								  	foreach ( $mykey_values as $key => $value ) {
								    	echo $value; 
								  	}
					     		?>
			        		</span>
				    	</div>
					</div>

					<div class="feature_img">
						<a href="<?php echo get_permalink(); ?>" rel="bookmark">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" /></a>
					</div>
				</div>	
					   	<!-- <a href="<?php //echo get_permalink();?>" class="post-btn">READ MORE</a> -->
				  <?php endwhile; ?>
				<?php endif; ?>
		</div>				  

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
