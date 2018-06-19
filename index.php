<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php endif; ?>

			
			<?php /* Start the Loop */ ?>
			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		<div class="blog-wrapper">
			<?php $args = array( 'post_type' => 'post','order' =>'ASC')?>

			   <?php $posts = new WP_Query( $args );  ?>

			<?php /* Start the Loop */ ?>

				<?php if ( $posts->have_posts() ) : ?>
				  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
				  	<div class="single-blog-wrapper">
					    <h2 class="blog-name">
					    	<a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?> </a></h2>
					    <div class="blog-img">
					    	<img src='<?php the_post_thumbnail_url(); ?>'>
					    </div>
					 	<div class="sub-detail">
					     <span class="author">
			        		<?php echo "by ".get_the_author_meta("display_name"); ?></span>
			    			
		    	 		</div>
			    	 <div class="blog-content">
			    	 	<?php the_excerpt(); ?>
			    	 </div>
					   <a href="<?php echo get_permalink();?>" class="post-btn">READ MORE</a>

					</div>  
				  <?php endwhile; ?>
				  <?php endif; ?>
		</div>				  

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
