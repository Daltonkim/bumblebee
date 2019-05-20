<div class="related-articles">
    <?php
        // Get a list of the current post's categories
        global $post;
        // fetch taxonomy terms for current product
        $productterms = get_the_terms( get_the_ID(), 'job-category'  );
         
        if( $productterms ) {
            $producttermnames[] = 0;

            foreach( $productterms as $productterm ) {  
                $producttermnames[] = $productterm->name;
            }
        }
             
        // Build our category based custom query arguments
        $custom_query_args = array( 
            'posts_per_page' => 3, // Number of related posts to display
            'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
            'tax_query' => array(
                array(
                    'taxonomy' => 'job-category',
                    'field'    => 'slug',
                    'terms'    => $producttermnames,
                ),
            ),
            // 'cat' => $catidlist, // Select posts in the same categories as the current post
        );

        // Initiate the custom query
        $custom_query = new WP_Query( $custom_query_args ); ?>

        <div class="related-articles_heading">
            <div class="related-articles_heading_content">
                <div class="share-post">
                    <?php share_buttons(); ?>
                </div>
            </div>

            <div class="related-articles_heading_content">
                <div class="related-articles_title">
                    <h1>meer VACATURES.</h1>
                </div>
            </div>
        </div>

        <div class="related-posts">
            <?php
            // Run the loop and output data for the results
            if ( $custom_query->have_posts() ) : ?>
            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                <div class="related-posts_card">
                    <div class="related-posts_card_img">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('related-post-image');
                                }
                                else {
                                    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/frontend/images/news-background.jpg" />';
                                }
                            ?>
                        </a>
                    </div>
                    <div class="related-posts_card_content ">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <p>Bekijk vacature.</p>
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