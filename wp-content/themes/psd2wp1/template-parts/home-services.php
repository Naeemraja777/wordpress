<div class="container">
			<div class="service-head">
			 <h2>Check our latest Wordpress Theme which implements a Page Bulder and a Revolution Slider</h2>
			 <p>Learn how to build Wordpress Themes with ease with a premium Page Builder which allows you to add new Pages in seconds.</p>
			</div>
			<div class="service-container">
				<?php
                 $args=array(
                       'post_type'=>'services',
                       'status'=>'published',
                       'post_per_page'=>4

                 );
				// The Query
			$the_query = new WP_Query( $args );

			// The Loop
		while($the_query->have_posts()):$the_query->the_post();
			?>
                 <div class="service-col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 	<div class="ser-circle">
                 		<div class="ser-icon">
                          <?php the_post_thumbnail('thumbnail');?>

                 		</div>
                 		<h1><?php the_title() ?></h1>
                        <p><?php the_excerpt();?></p>
                         <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-angle-double-right"></i>
                 	</div>
                  

                 </div>
			<?php
				/* Restore original Post Data */
				wp_reset_postdata();
			endwhile;
			 ?>
			</div>
		</div>