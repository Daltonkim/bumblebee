<?php
namespace Qazana\Extensions\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Qazana\Widget_Base;
use WP_Query;

/**
 * Tabs Widget
 */
class Stories extends Widget_Base {

    /**
	 * Retrieve tabs widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'stories';
	}

    /**
	 * Retrieve tabs widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Stories', 'qazana' );
	}

    /**
	 * Register tabs widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
	}

    /**
	 * Render tabs widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	public function render() {

		 
		// WP_Query arguments
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
						<div class="stories__wrapper">
                            <div class="stories__title">
                                <h1 class="">
                                    <?php echo get_the_title() ?>
                                </h1>
                            </div>
                            <div class="stories__excerpt">
                                    <p>a
									Lorem Ipsum is simply dummy text of the printing and typesetting…
									</p>
                            </div>
                        <a href="<?php the_permalink(); ?>">
                            <p class="stories__permalink-text">Read More</p>
						</a>
			        </div>
                </div><?php				endwhile;
			else :
				// no posts found
			endif;
		?>
		</div><?php

		// Restore original Post Data
		 wp_reset_postdata();
	}

    /**
	 * Render tabs widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _content_template() {
	}
}
