<?php
/**
 * 

 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



<div id="resources" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="resource-info">
	<p>
	A curated page dedicated to all the really good links out there. 
	<br>
	Seriously, they’re good.
	</p>
</div>



		<div class="resources">
		<div class="resources-info">	

			<?php $args = array( 'post_type' => 'resources', 'posts_per_page' => 5, 'order' => 'ASC',); 
	$posts = new WP_Query( $args ); ?>


            <?php endforeach; ?>
            </ul>
          <?php endif; ?>      
            </div><!-- shop-categories-wrapper -->
        </section>
</div>
</div>

