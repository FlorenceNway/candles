<?php
/**
 * Template Name: Register Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="register">
			<h3>Register for free</h3>
			<p>Some body copy about registering for a service that has thousands of people already engaging in Slack.</p>
			<a href="<?php echo get_template_directory_uri(); ?>/step-1/"> Register for free </a>
		</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
