<?php
/**
 * Template Name: Resources Template
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

