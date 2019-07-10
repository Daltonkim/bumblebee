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
class Hero extends Widget_Base {

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
		return 'hero';
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
		return __( 'hero', 'qazana' );
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
                'label' => __('Settings', 'ngo'),
            ]
        );
        
		$this->add_control(
			'title',
			[
				'label' => __( 'title', 'qazana' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( 'Enter block title', 'qazana' ),
				
			]
		);

		$this->add_control(
			'text',
			[
				'label' => __( 'text', 'qazana' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( 'Enter block text', 'qazana' ),
				
			]
		);
		$this->add_control(
            'image',
            [
                'label' => __('Image', 'energia'),
                'type' => Controls_Manager::MEDIA,
            ]
		);
		$this->add_control(
            'arrow',
            [
                'label' => __('arrow_icon', 'energia'),
                'type' => Controls_Manager::MEDIA,
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
		$image = $this->get_settings('image');
		$title = $this->get_settings('title');
		$text = $this->get_settings('text');
		$arrow = $this->get_settings('arrow');


	 ?>

        
		<div id="bg" class="hero" style="background-image: url('<?php echo $image['url']; ?>')">
			<!-- <img src="<?php echo $image['url'];?>"alt="testimonial ngo" style="width:100%;"> -->
			<div class="hero__title"><?php echo $title ?></div>
			<div class="hero__text"><?php echo $text ?></div>
			<a href="#">
			<div class="hero__arrow arrow bounce"><img src="<?php echo $arrow['url'];?>"alt="testimonial ngo" style="width:3%;"> </div>
			</a>
		</div>
        <?php
    }
}