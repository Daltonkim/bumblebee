<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Analytica
 * @since 1.0.0 
 */
$image = get_field('featured_image');

get_header(); ?>

<div class="single-post">
    <div class="single-post_featured-image">
        <div class="single-post_featured-image_img">
            <!-- <?php the_post_thumbnail('post-featured-image'); ?> -->
             <img src="<?php echo $image ?>">
        </div>

        <div class="single-post_meta">
            <div class="single-post_meta-content">
                <div class="blog">
                    <?php
                           $categories = get_the_category();
                            if ( ! empty( $categories ) ) { ?>
                            <h1> <?php echo esc_html( $categories[0]->name ); ?> </h1> 
                            <?php
                            }
                        ?>
                    <p><?php the_field('tag_line'); ?></p>
                </div>
            </div>

            <div class="single-post_meta-content">
                <div class="date">
                 
                </div>
            </div>
        </div>
    </div>

    <div class="single-post_content">
        <div class="single-post_content-wrapper">
            <div class="single-post_content-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="single-post_content-wrapper">
            <?php the_field('blog_content'); ?>
        </div>
        <?php if( get_field('video_image') ): ?>
        <div class="single-post-video">
            <div class="video">
                <?php $image = get_field('video_image'); ?>
                <video playsinline controls poster="<?php echo $image['url']; ?>">
                    <source src="<?php the_field('video'); ?>" type="video/mp4">
                </video>
            </div>
        </div>
        <?php endif; ?>

       

        <div class="clear"></div>

        <div class="single-post_content-wrapper">
            <?php the_field('blog_content-2'); ?>
        </div>
        <?php if( get_field('image_1') ): ?>
        <div class="single-post-image">
            <div class="single-image_1">
            <?php $image1 = get_field('image_1'); ?>
            <img class="blog-inner-image" src=" <?php echo $image1['url'] ?>" alt="blog image">
            </div>
            <div class="single-image_2">
            <?php $image2 = get_field('image_2'); ?>
            <img class="blog-inner-image" src=" <?php echo $image2['url'] ?>" alt="blog image">
            
            </div>
        </div>
        <?php endif; ?>
        <div class="clear"></div>

        <div class="single-post_content-wrapper">
            <?php the_field('blog_content'); ?>
        </div>
        <?php if( get_field('image_3') ): ?>
        <div class="single-post-image">
            <div class="single-image_1">
            <?php $image3= get_field('image_3'); ?>
            <img class="blog-inner-image" src=" <?php echo $image3['url'] ?>" alt="blog image">
            </div>
            <div class="single-image_2">
            <?php $image4 = get_field('image_4'); ?>
            <img class="blog-inner-image" src=" <?php echo $image4['url'] ?>" alt="blog image">
            
            </div>
        </div>
        <?php endif; ?>


        <div class="single-post_content-wrapper">
        <span class="author-name"><p><?php the_author(); ?></p> | <p>
                          
                          <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?>
    
                        </p></span>
        <span class="relatable-topics"><p class="posts-relatable"> Related posts </p><div class="line-related"></div> <p class="posts-view"> View All</p></span>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/single/related-posts'); ?>

<?php get_footer(); ?>
