<?php
/*
*   This template repalys the structure of the page to the Blog WP_Query
*/
?>
<div class="blog__left">
    <div class="blog__pic">
        <?php if( get_field('blog_image') ): ?>
            <img src="<?php the_field('blog_image'); ?>" />
        <?php endif; ?>
    </div>
    <div class="blog__date-area">
        <div class="blog__date">
            <?php echo get_the_date('d/m/Y') ?>
        </div>
        <div class="blog__sport-next">
            <?php _e( 'Sport Next', 'tapona' ); ?>
        </div>
        <div class="blog__yellow-background">
        </div>
            <div class="blog__blog-heading">
                <?php _e( 'Blog', 'tapona' ); ?>
            </div>

    </div>
</div>
<div class="blog__right">
    <div class="blog__title">
        <?php echo get_the_title() ?>
    </div>
    <div class="blog__excerpt">
        <?php the_field('excerpt'); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="blog__btn">
        <span> 
            <?php _e( 'Lees Meer &nbsp;&nbsp;>', 'tapona' ); ?> 
        </span>
    </a>
</div>