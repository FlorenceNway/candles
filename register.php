<?php
/**
 * Template Name: Register Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main content-container" role="main">

		<div class="register">
			<h3>Register for free</h3>
			<p>Some body copy about registering for a service that has thousands of people already engaging in Slack.</p>

			<h4 class="register_text mobile-register-link"><a href="<?php echo get_template_directory_uri(); ?>/form-register/" class="link"> Register for free </a><i class="fas fa-arrow-right"></i></h4>

			<h4 class="register_text desktop-register-link"><a href="<?php echo get_template_directory_uri(); ?>/desktop-form/" class="link"> Register for free </a><i class="fas fa-arrow-right"></i></h4>
			
		</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->



