<?php
/**
 * Template Name: Success Message Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1>Great!</h1>
			<p><?php echo CFS()->get( 'success_message' ); ?></p>
			<p>In the meantime, feel free to read <a href="<?php echo get_template_directory_uri(); ?>/index.php">the latest article on our Blog.</a></p>
			<p>Thanks!</p>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
