<?php
 /*
 Template Name: blog 
 */ 


	 
 //WP_Query arguments
		$args = array(
			'post_type'              => 'post',
			'posts_per_page'         => '-1',
			'order'                  => 'DESC',
		);

		// The Query
		$query = new WP_Query( $args );
       
    	?><div class="blogs__container">
			<?php
		
			 if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
					get_template_part( 'template-parts/blogtemplate/overview', null );
				endwhile;
			else :
				// no posts found
			endif;
		?>
		</div><?php

		// Restore original Post Data
		 wp_reset_postdata();
	
