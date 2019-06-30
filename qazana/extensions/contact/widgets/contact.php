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
class Contact extends Widget_Base {

    /**
	 * Retrieve tabs widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'contact';
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
		return __( 'Contact', 'qazana' );
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
		?>
		
		<div class="contact-section">
			<div class="content">
				<div class="playground">
					<div class="title">playground. 333</div>
				</div>

				<div class="playground">
					<h1>welcome to our playground.</h1>
					<p>Lorem ipsum dolor sit amet, consecetadaring elit seda do eiusmod tempor incididunt uta labore et dolore magna se aliqua. Ut enim ad minim veniam, quis nostrud exercitationis ullamco laboris nisi ut aliquip ex ea comosale.</p>    
				</div>
			</div>

			<div class="content">
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/office.jpg" alt="Office">
					<div class="title"><h1>Contact</h1></div>
				</div>

				<div class="clear"></div>

				<div class="contact-info">
					<div class="details">
						<h1 class="hide">Contact</h1>
					</div>

					<div class="details">
						<h3>Visit us</h3>
						<p>Buitenwatersloot 333</p>
						<p>2614 GS Delft</p>
						<p>+31 (0)15 219 54 54</p>
						<p>info@tapona.nl</p>
					</div>
				</div>

			</div>
		</div>

		
	<?php }

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
