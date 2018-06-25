<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main content-container" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Uh oh Spaghettio!' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'Page not found.You may have mistyped the address or the page may have moved. Or maybe, just maybe, someone provided you with a hoax link? How about we just start again and go to the home page?' ); ?></p>

									

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
