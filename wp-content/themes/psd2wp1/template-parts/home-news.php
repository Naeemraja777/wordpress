<div class="container">
			<div class="news-head">
			 <h2>Our Latest News</h2>
			 <p class="news-1">Lorem ipsum dolor sit amet, coctetuer adipiscing elit, sed di nonummy nibh euismod te..</p>
			</div>
			 
			<div class="news-container">								
				<?php
                 $args=array(
                       'post_type'=>'post',
                       'status'=>'published',
                       'post_per_page'=>3
                 );
				// The Query
			$the_query = new WP_Query( $args );

			// The Loop
		while($the_query->have_posts()):$the_query->the_post();
			?> 		
	           <div class="news-col col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 	
                 		<div class="news-thumbnail">
                          <?php the_post_thumbnail('thumbnail');?>

                 		</div>
                 		<div class="news-detail">
                 			<h3><?php the_title() ?></h3>
                 			 <p><?php wpacademy_tags_list(); ?></p>
                            <p><?php the_excerpt();?></p>
                 		</div>  
                 </div>
			<?php
				/* Restore original Post Data */
				wp_reset_postdata();
			endwhile;
			 ?>
			 
			</div>
		</div>