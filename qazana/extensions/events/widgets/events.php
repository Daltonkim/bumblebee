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
class Events extends Widget_Base {

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
		return 'events';
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
		return __( 'Events', 'qazana' );
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
        $repeater->add_control(
            'heading',
            [
                'label' => __('Title', 'energia'),
                'type' => Controls_Manager::TEXT,
                'default' => __('event Heading', 'energia'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'subheading',
            [
                'label' => __('SubTitle', 'energia'),
                'type' => Controls_Manager::TEXT,
                'default' => __('event Sub Heading', 'energia'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => __('Description', 'energia'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('I am event content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'energia'),
                'show_label' => false,
            ]
        );
        $this->add_control(
            'events',
            [
                'label' => __('events', 'qazana-pro'),
                'type' => Controls_Manager::REPEATER,
                'show_label' => true,
                'default' => [
                    [
                        'heading' => __('event 1 Heading', 'energia'),
                        'subheading' => __('event 1 Subheading', 'energia'),
                        'description' => __('I am event content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'energia'),
                        'button_text' => __('Click Here', 'energia'),
                        'background_color' => '#833ca3',
                    ],
                    [
                        'heading' => __('event 2 Heading', 'energia'),
                        'subheading' => __('event 2 Subheading', 'energia'),
                        'description' => __('I am event content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'energia'),
                        'button_text' => __('Click Here', 'energia'),
                        'background_color' => '#4054b2',
                    ],
                    [
                        'heading' => __('event 3 Heading', 'energia'),
                        'subheading' => __('event 3 Subheading', 'energia'),
                        'description' => __('I am event content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'energia'),
                        'button_text' => __('Click Here', 'energia'),
                        'background_color' => '#1abc9c',
                    ],
                ],
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
    public function render()
    {   $settings = $this->get_settings_for_display();

        if (empty($settings['events'])) {
            return;
        }

        $gallery = [];

        $counter = 0;

        foreach ($settings['events'] as $event) {
            $url = Group_Control_Image_Size::get_attachment_image_src($event['image']['id'], 'image', $settings);
            $description= $event['description'];
            $heading = $event['heading'];
            $subheading = $event['subheading'];

            $desc[] = '	        <div class="description">
                                    <h3 class="sub-heading">'.$subheading.'</h3>
                                    <p>'.$description.'</p>
                                </div>';

            $gallery[] = '      <div id="event" class="event">
                                    <div class="events-mobile__words">
                                    <div class="events__line"></div>
                                    <div class="event-heading">'.$heading.'</div>
                                    </div>
                                    <img class="img-'.$counter.'" alt="" src="'.$url.'"/>

                                </div>';
          

            $gallerymobile[] = '<div class="children"> 
                                <div id="events-mobile__content" class="events-mobile__content">
                                            <div class="events-mobile__line"></div>
                                            <div class="events-mobile__title ">'.$heading.'</div>
                                            <img class="img-'.$counter.' eve-image" alt="" src="'.$url.'"/>
                                </div>
                                <div class="events-mobile__description-mobile">
                                            <h3 class="events-mobile__sub-heading-mobile">'.$subheading.'</h3>
                                            <p>'.$description.'</p>
                                </div> 
                                </div>';
            ++$counter;
        }
        if (empty($gallery)) {
            return;
		} ?>

    
    <section class="works">
	    <div class="wrapper">
		    <div class="eventr-controls">
		    <?php
                for ($x = 0; $x < $counter; $x++) 
                {
                    $y= $x+1;
                    echo '<div class="eventr-control" data-event="'.$x.'">0'.$y.'.</div>';
                } 
                ?>
        </div>
        
		<div class="eventr">
            <?php echo implode('', $gallery); ?>
		</div>
		<div class="eventr-description">
			 <p><?php echo implode('', $desc); ?></p>
        </div>
	    </div>
    </section>

    <!---start of the section mobile only -->
        <div class="events-mobile">
                <?php echo implode('', $gallerymobile); ?>
        </div>

        <?php
    }
}