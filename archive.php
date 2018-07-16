<?php
/**
 * The template for displaying resources posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="resources-area">
<main id="resources" class="site-main" role="main">
	<div class="resource-info">
		<p>
		A curated page dedicated to all the <span>really</span> good links out there. </p>
		
		<p>Seriously, they’re good.
		</p>
	</div>

	<div class="resource-links">

	<?php	

	$args = array( 'post_type' => 'resource', 'posts_per_page' => 6, 'order' => 'ASC'); 
	$posts = new WP_Query( $args );

	while ( $posts->have_posts() ) : $posts->the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<hr class="resource-hr">

			<h1><?php echo get_the_title();?></h1>

			<div class="resource-block">
				<?php echo get_the_content();  ?>
				<span>&#x2197;</span>
			</div>

		</article><!-- #post-## -->

	<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

	</div>	
		<?php get_footer(); ?>
</main>
</div><!-- #primary -->




