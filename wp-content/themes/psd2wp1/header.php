<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Psd_To_WP_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'psd2wp1' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="small-header row ml-o sr-o">
          <div class="container">
             <div class="pull-left col-lg-7 col-md-7 col-sm-12 col-xs-12">
             	<div class="small-header-info">
             		<i class="fa fa-mobile"></i> 03135524278
             	</div>
             	<div class="small-header-info">
             		<i class="fa fa-envelope"></i> info@academy.pk
             	</div>
             	<div class="small-header-info">
             		<i class="fa fa-clock-o"></i> Monday - Sunday,8.00 - 12.00
             	</div>
             </div>
             <div class="pull-right col-lg-5 col-md-5 col-sm-12 col-xs-12  ">
             	<?php
			  wp_nav_menu( array(
			 	'theme_location' => 'menu-2',
				'menu_id'        => 'small-menu',
			'container'     =>  '',
			'menu_clas'     =>'small-menu'
			) );
			?>
             </div> 
             	 
          </div>
		</div>
		<div class="site-branding row ml-o sr-o">
			<div class="container">
         	 <?php
			 the_custom_logo();
			
			 ?>
           </div>
			
		</div><!-- .site-branding -->
		<div class="nav-row row ml-o sr-o">
			<div class="container">
		     <nav id="site-navigation" class="main-navigation">
			  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'psd2wp1' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'     =>  ''
			) );
			?>
		</nav><!-- #site-navigation -->	
	     </div>
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
