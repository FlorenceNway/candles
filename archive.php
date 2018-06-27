<?php
/**
 * The template for displaying archive pages.
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
		<?php if ( have_posts() ) : ?>

			<header>
				
			</header><!-- .page-header -->
	<div class="resource-links">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		
	</div><!-- #primary -->

<?php get_footer(); ?>
