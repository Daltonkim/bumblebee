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
class Blog extends Widget_Base {

    /**
	 * Retrieve tabs widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'blog';
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
		return __( 'Blog', 'qazana' );
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
			'posts_per_page'         => '1',
			'order'                  => 'DESC',
		);

		// The Query
		$query = new WP_Query( $args );

    	?><div class="blog__container">
			<?php
		
			 if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
					get_template_part( 'template-parts/blog/overview', null );
				endwhile;
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
