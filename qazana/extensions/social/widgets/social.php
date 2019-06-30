<?php
namespace Qazana\Extensions\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Qazana\Widget_Base;
use Qazana\Controls_Manager;
use Qazana\Utils;

/**
 * Qazana button widget.
 *
 * Qazana widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Social extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve button widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Social';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve button widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'social', 'qazana' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve button widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-text';
	}

	/**
     * Register button widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     */
    protected function _register_controls()
    {
        $this->start_controls_section(
            'settings',
            [
                'label' => __('Settings', 'tapona'),
            ]
        );
        
		$this->add_control(
			'date',
			[
				'label' => __( 'Post Date', 'qazana' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( 'Enter date e.g 12/12/2019', 'qazana' ),
				
			]
		);
		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'qazana' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( 'Enter block title', 'qazana' ),
				
			]
		);
		$this->add_control(
			'description',
			[
				'label' => __( 'Description', 'qazana' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( 'Enter your Description here ', 'qazana' ),
				
			]
		);
		$this->add_control(
            'image',
            [
                'label' => __('Image', 'qazana'),
                'type' => Controls_Manager::MEDIA,
            ]
		);
		$this->add_control(
			'link',
			[
				'label' => 'Link to',
				'type' => Controls_Manager::URL,
				'placeholder' => 'http://your-link.com',
				'condition' => [
					'image_link' => 'custom',
				],
				'show_label' => false,
			]
		);
        $this->end_controls_section();
    }

    /**
     * Render image box widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     */
    public function render()
    {   
		$settings = $this->get_settings_for_display();
		$link = $this->get_settings('link');
		$image = $this->get_settings('image');

		$title = $this->get_settings('title');
		$date = $this->get_settings('date');
		$desc = $this->get_settings('description'); ?>

	<div class="social">
            <div class="social__detail">
			   <div class="social__detail-wrapper">
				   <div class="social__detail-date-title">
					<p><?php echo $date;?></p>
				   <p><?php echo $title;?></p>
				   </div>

				   <div class="social__detail-image">
					   <img src="<?php echo $image['url'];?>"alt="testimonial tapona">
					    <a href="<?php echo $link['url']; ?>" class="social__detail-button"  target=_blank>
							<?php _e( 'Lees Meer &nbsp;&nbsp;>', 'tapona' ); ?> 
						</a>
				   </div>
				   <div class="social__detail-desc">
					   <p><?php echo $desc; ?></p>
				   </div>
			   </div>
		    </div>
    </div>
        <?php
    }
}