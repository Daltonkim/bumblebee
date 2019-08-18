<?php
 /*
 Template Name: blog 
 */ 


?>
<?php get_header(); ?>
 <?php         
 
      //WP_Query arguments
		$args = array(
			'post_type'              => 'post',
			'posts_per_page'         => '-1',
			'order'                  => 'DESC',
		);

		// The Query
		$query = new WP_Query( $args );
       
    	?><div class="stories__content">
			<?php
		
			 if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
                $image = get_field('featured_image');?>
                <div class="stories__body">
                        <div class="stories__image" style="background-image: url('<?php echo $image ?>'); background-position:center center;background-size: cover; background-repeat: no-repeat;">
                        </div>
                            <div class="stories__title">
                                <h1 class="">
                                    <?php echo get_the_title() ?>
                                </h1>
                            </div>
                            <div class="stories__excerpt">
                                    <p>afnklasnfklansklfalskfl</p>
                            </div>
                        <a href="<?php the_permalink(); ?>">
                            <p class="stories__permalink-text">Read More</p>
                        </a>
                </div><?php				endwhile;
			else :
				// no posts found
			endif;
		?>
		</div><?php

		// Restore original Post Data
         wp_reset_postdata();
         ?>
    
    
