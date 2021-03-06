<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Analytica
 * @since 1.0.0
 */
if ( ! analytica_is_php_version_compatible() ) {
    return;
}

            analytica_structural_wrap( 'site-inner', 'close' );

            echo '</div>'; // end .site-inner or #inner

            do_action( 'analytica_content_bottom' ); 
            
        ?></div><!-- #content --><?php

        do_action( 'analytica_content_after' );

        do_action( 'analytica_footer_before' );

        do_action( 'analytica_footer' );

        do_action( 'analytica_footer_after' );

        ?></div><!-- #page --><?php

    do_action( 'analytica_body_bottom' ); 
    
    ?></div><!-- .site-container --><?php

    do_action( 'analytica_after' );

    wp_footer(); ?>
    <div class="scroll-to-top">  
        <div id="gototop">    
        <span class="ricon-arrow-top">
            </span><img class="back-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/arrow-up.png" alt="scroll to top">
        </div>
    </div>
    <?php
    ?></body>
</html>
