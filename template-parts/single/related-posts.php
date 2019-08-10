<div class="related-articles">
    <?php
        // Get a list of the current post's categories
        global $post;
        $categories = get_the_category( $post->ID );
        $catidlist = '';
        foreach( $categories as $category) {
            $catidlist .= $category->cat_ID . ",";
        }

        // Build our category based custom query arguments
        $custom_query_args = array( 
            'posts_per_page' => 3, // Number of related posts to display
            'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
            'cat' => $catidlist, // Select posts in the same categories as the current post
        );

        // Initiate the custom query
        $custom_query = new WP_Query( $custom_query_args ); ?>
        <div class="related-posts">
            <?php
            // Run the loop and output data for the results
            if ( $custom_query->have_posts() ) : ?>
            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                <div class="related-posts_card">
                <div class="related-posts_card_content ">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                           $categories = get_the_category();
                            if ( ! empty( $categories ) ) { ?>
                            <h2 class="story-category"> <?php echo esc_html( $categories[0]->name ); ?> </h2> 
                            <?php
                            }
                        ?>
                        </a>
                        <a class="title-related" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                      <span class="author-name"><p><?php the_author(); ?></p> | <p>
                          
                      <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?>

                    </p></span>


                    </div>
                    <div class="related-posts_card_img">
                        <a href="<?php the_permalink(); ?>">
                            
                       <img src="<?php echo get_field('featured_image'); ?>"/>

                        </a>
                    </div>
                  
                </div> <!-- related-posts_card -->

            <?php endwhile; ?>
            <?php else : ?>

                <div class="no-posts">
                    <h1>Ops.. Seems like we don't have any related posts for this post.</h1>
                </div>

            <?php endif; ?>
        </div>
        <?php wp_reset_postdata();
    ?>
</div>