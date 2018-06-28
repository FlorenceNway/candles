<?php
/**
 * Template Name: Success Message Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main content-container" role="main">

			<h1>Great! You're all sign up now.</h1>
			<p><?php echo CFS()->get( 'success_message' ); ?></p><br>
			<p>If you've not signed up to the slack group, you can do that <a href="https://withcandles.slack.com/join/shared_invite/enQtMzc5NjEzOTk1NTUzLTJiYWNlNzM0MDk0YWVhZGFmYjY0NzliMmQ4NTZkNjY1NDFlOGNhZDFiYzZlZmIyNjFiNTc2ZDdkMzBmMzdiNmQ" class="link" target="_blank">here</a></p><br>
			<p>In the meantime, feel free to read <a href="<?php echo get_template_directory_uri(); ?>/index.php" class="link">the latest article on our Blog.</a></p>
			
			<p>Thanks!</p>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
