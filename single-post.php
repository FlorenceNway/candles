<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main content-container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article class="single-blog-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header ">
				<div id="first-img-formobile">
					<div class="first-single-image">
						    <?php if ( has_post_thumbnail() ) : 
										the_post_thumbnail(); 
								 endif; 
							?>
					</div>	
				</div>

				<div class="blog-category">
				        <?php 
				        	foreach((get_the_category()) as $category){
								        echo $category->name."<br>";
								       }
						?> 
				</div>

				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<div class="author">
					    <?php 
						     echo "by ".get_the_author();
						?>
				</div>

				<div id="first-img-fordesktop">
					<div class="first-single-image">
						    <?php if ( has_post_thumbnail() ) : 
										the_post_thumbnail(); 
								 endif; 
							?>
					</div>	
				</div>				    	
				
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<div class="navigation">
			
			
			<?php the_post_navigation(); ?>

		</div>

		</article><!-- #post-## -->

			
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>



