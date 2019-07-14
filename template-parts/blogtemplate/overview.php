<?php
/*
*   This template repalys the structure of the page to the Blog WP_Query
*/
?>
<?php
$image = get_field('featured_image');
?>
<div class="blogs__body">
<div class="blogs__image" style="background-image: url('<?php echo $image ?>'); background-position:center center;background-size: cover; background-repeat: no-repeat;">
</div>
 <div class="blogs__title">
 <h1 class="">
 <?php echo get_the_title() ?>
 </h1>
 </div>
 <div class="blogs__excerpt">
 <p>afnklasnfklansklfalskfl</p>
 </div>
 <a href="<?php the_permalink(); ?>">
 <p class="blogs__permalink-text">Read More</p>
 </a>
    <!-- <div class="news__content">
        <a class="news__gsap"href="<?php the_permalink(); ?>">
        <div class="news__wrapper" >
                <div class="news__featured-image" style="background-image: url('<?php echo $image ?>'); background-position:center center;background-size: cover; background-repeat: no-repeat;">
                    <div class="news__hover-color">
                        <div class="news__title-hover">
                            <h1 class="news__title-text-hover"><?php echo get_the_title() ?></h1>
                            <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) { ?>
                                <h2 class="news__title-text-category"> <?php echo esc_html( $categories[0]->name ); ?> </h2> 
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news__title">
                <h1 class="news__title-text"><?php echo get_the_title() ?></h1>
            </div>
        </a>

    </div> -->
</div>