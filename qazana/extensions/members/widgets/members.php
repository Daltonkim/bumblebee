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
class Members extends Widget_Base {

    /**
	 * Retrieve tabs widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'members';
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
		return __( 'Members', 'qazana' );
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

	<div class="meet_the_team">
		<div class="meet_the_team_content">
			<div class="title">Meet the team</div>
			<div class="team-members" id="team-members">
	
				<?php $custom_query = new WP_Query( array( 'post_type' => 'meet_the_team', 'order' => 'ASC', 'posts_per_page' => -1, 'category_name' => 'meet-the-team')); ?>
					<?php
						while($custom_query->have_posts()) : $custom_query->the_post();
						$image = get_field('member_image');
						$position = get_field('position');
						$email =get_field('email_address');
					?>
	
					<div class="team-members-member">
						<div class="members-wrapper">
							<img src="<?php echo $image['url']?>" alt="<?php echo $image['title']; ?>">
							<div class="member-meta">
								<p><?php the_title(); ?></p>
								<p><?php echo $position; ?>.</p>
								<p><a href="mailto:<?php echo $email; ?>">Mail_</a></p>
							</div>
						</div>
					</div>
	
	
					<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>
	
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
