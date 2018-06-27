<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="resources">
		<div class="resources-info">	

	<?php $args = array( 'post_type' => 'resources', 'posts_per_page' => 5, 'order' => 'ASC',); 
	$posts = new WP_Query( $args ); ?>

	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					echo get_the_content();
				?>

			<?php endwhile; ?>

				

	<?php endif; ?>

</div>
</div>

