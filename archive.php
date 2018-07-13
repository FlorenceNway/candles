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
		A curated page dedicated to all the really good links out there. 
		<br>
		<br>
		Seriously, they’re good.
		</p>
	</div>

	<div class="resource-links">
	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>

			<hr class="resource-hr">

				<h1><?php 
					echo get_the_title();
					
					// the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
				?></h1>

				<?php if ( 'post' === get_post_type() ) :

					echo get_the_content(); 

				?>
		
					
		
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
	
		</article><!-- #post-## -->

	<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

	</div>	
		<?php get_footer(); ?>
</main>
</div><!-- #primary -->




