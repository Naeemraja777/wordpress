<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psd_to_wordpress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-head-row row ml-0 mr-0">
			<div class="container">
			<div class=" footer-heading footer-head-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <p class="para-3">Get to know us better now!</p>
                 <p>Share your Products over the Social Networks</p>

			</div>
			<div class="footer-icons-col footer-head-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <a href=""><i class="fa fa-rss"></i></a>
              <a href=""><i class="fa fa-pinterest"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-dribble"></i></a>
			</div>
			<div class="search-footer-heading footer-head-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
                     <p class="para-3">Search!</p>
                      <p>Search Across Our Website</p>
			</div>
			<div class="search-col footer-head-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
             <?php get_search_form();?>

			</div>
		</div>
	</div>
		<div class="footer-widgets-row row ml-0 mr-0">
			<div class="container">
		<div class="footer-widget-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php dynamic_sidebar('footer-1'); ?>
		</div>
		<div class="footer-contact-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php dynamic_sidebar('footer-2'); ?>
		</div>
		<div class="footer-signin-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php dynamic_sidebar('footer-3'); ?>
		</div>
		<div class="footer-widget-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<?php dynamic_sidebar('footer-4'); ?>
		</div>
		</div>				
		</div>
		<div class="footer-copyright-row row ml-0 mr-0">
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/owl.carousel.js">



$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
}) 

});

	</script>

</body>
</html>
