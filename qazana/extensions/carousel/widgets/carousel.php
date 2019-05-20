<?php
namespace Qazana\Extensions\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Qazana\Widget_Base;
use Qazana\Controls_Manager;
use Qazana\Utils;
use Qazana\Repeater;
use Qazana\Group_Control_Image_Size;

/**
 * Qazana button widget.
 *
 * Qazana widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Carousel extends Widget_Base {

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
		return 'carousel';
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
		return __( 'Carousel', 'qazana' );
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
        
		$repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => __('Image', 'energia'),
                'type' => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'slides',
            [
                'label' => __('Slides', 'qazana-pro'),
                'type' => Controls_Manager::REPEATER,
                'show_label' => true,
                'fields' => array_values($repeater->get_controls()),
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `image_size` and `image_custom_dimension`.
                'default' => 'custom',
                'separator' => 'none',
                'exclude' => ['thumbnail', 'medium', 'medium_large', 'large', 'featured', 'blog-featured', 'post-thumbnail'],
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
    public function render() { 
        $settings = $this->get_settings_for_display();

        if (empty($settings['slides'])) {
            return;
        }

        $gallery = [];

        $counter = 0;

        foreach ($settings['slides'] as $slide) {
            $url = Group_Control_Image_Size::get_attachment_image_src($slide['image']['id'], 'image', $settings);

            $gallery[] = '<div class="carousel-item"><img class="img-'.$counter.'" alt="" src="'.$url.'"/></div>';
            ++$counter;
        }

        if (empty($gallery)) {
            return;
		} ?>
		
        <div class="carousel-section">
            <div class="carousel" id="carousel">
                <?php echo implode('', $gallery); ?>
            </div>
        </div>

    <?php }
}