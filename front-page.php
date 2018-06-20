<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1>UX Mentoring simplified...</h1>
			<ol class="front_page_intro">
				<li>Tell us about yourself</li>
				<li>Get your perfect match</li>
				<li>Connect with them on Slack</li>
			</ol>

			<h3>We also have an amazing blog, read <a href="<?php echo get_template_directory_uri();?>/blog/" class="blog-link">the latest posts </h3></a>

<!------------------Only to show in Mobile view ----------- -->
		<div class="blog-wrapper" id="moblie-frontpage">
			<?php $args = array( 'post_type' => 'post','order' =>'ASC')?>

			   <?php $posts = new WP_Query( $args );  ?>

				<?php if ( $posts->have_posts() ) : ?>
				  
				  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				  	<div class="single-blog-wrapper">

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
					     			$mykey_values = get_post_custom_values( 'author' );
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
					<a href="<?php echo get_permalink();?>" class="post-btn">READ MORE</a><br><br>

				  <?php endwhile; ?>
				<?php endif; ?>
		</div>
<!-------------------End Only to show in Mobile view----- -->

		</main><!-- #main -->
	</div><!-- #primary -->
		
<?php get_footer(); ?>
