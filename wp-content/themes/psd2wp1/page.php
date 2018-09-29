<?php
/**
Template Home Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package psd_to_wordpress
 */

get_header();
?>

	<div id="primary" class="content-area">
		<div class="home-banner row ml-0 mr-0">
			<div class="container">
				<div class="banner-text">
					<h1>REVENANT IS A RESPONSIVE THEME </h1>
             <p>Lorem ipsum dolor sit amet, consecte
				adipiscing elit. Fusce at justo eget lorem 
				port titor tincidunt.</p>
				</div>
             


			</div>
		</div><!-- Home Banner -->

		<div class="home-services row ml-0 mr-0">
			<?php get_template_part('template-parts/home','services');?>
		</div>
		<div class="home-portfolio row ml-0 mr-0">
			<?php get_template_part('template-parts/home','portfolio');?>
		</div>
		<div class="home-mews row ml-0 mr-0">
			<?php get_template_part('template-parts/home','news');?>
		</div>
		<!-- home-services -->
	</div><!-- #primary -->

<?php

get_footer();
?>