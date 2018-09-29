<div class="container">
			<div class="portfolio-head">
			 <h2>Recent Portfolio</h2>
			 <p class="para-1">Lorem ipsum dolor sit amet, coctetuer adipiscing elit, sed di nonummy nibh euismod te..</p>
			</div>			
			<div class="portfolio-container">
				<div class="portfolio-carousel owl-carousel">
				<?php
                 $args=array(
                       'post_type'=>'portfolio',
                       'status'=>'published',
                       'post_per_page'=>4

                 );
				// The Query
			$the_query = new WP_Query( $args );

			// The Loop
		while($the_query->have_posts()):$the_query->the_post();
			?>
			<div>
				<div class="portfolio-col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 	<div class="portfolio-square">
                 		<div class="por-thumbnail">
                          <?php the_post_thumbnail('medium');?>

                 		</div>
                 		<h3><?php the_title() ?></h3>
                        <p><?php the_excerpt();?></p>
                         
                 	</div>
                  

                 </div>
			</div>
                 
			<?php
				/* Restore original Post Data */
				wp_reset_postdata();
			endwhile;
			 ?>
			 </div>
			</div>
		</div>