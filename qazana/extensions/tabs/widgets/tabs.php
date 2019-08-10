<?php
namespace Qazana\Extensions\Widgets;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Qazana\Widget_Base;
use Qazana\Controls_Manager;
use Qazana\Utils;
use Qazana\Repeater;


/**
 * Qazana button widget.
 *
 * Qazana widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Tabs extends Widget_Base {

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
		return 'tabs';
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
		return __( 'tabs', 'qazana' );
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
            'heading',
            [
                'label' => __('Heading', 'energia'),
                'type' => Controls_Manager::TEXT,
                'default' => __('event Heading', 'energia'),
                'label_block' => true,
            ]
		);
		$repeater->add_control(
            'itemId',
            [
                'label' => __('ID', 'energia'),
                'type' => Controls_Manager::TEXT,
                'default' => __('event Heading', 'energia'),
                'label_block' => true,
            ]
		);
		$repeater->add_control(
            'atag',
            [
                'label' => __('anchorlink', 'energia'),
                'type' => Controls_Manager::TEXT,
                'default' => __('#anchor', 'energia'),
                'label_block' => true,
            ]
        );
		$this->add_control(
            'tabs',
            [
                'label' => __('tabs', 'qazana-pro'),
                'type' => Controls_Manager::REPEATER,
                'show_label' => true,
                'default' => [
                    [
						'heading' => __('event 1 Heading', 'energia'),

					],
					[
						'atag' => __('anchor link', 'energia'),

					],
					[
						'itemId' => __('Put ID', 'energia'),

					],
					
                ],
                'fields' => array_values($repeater->get_controls()),
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

        if (empty($settings['tabs'])) {
            return;
        }

        $head = [];

		$counter = 0;
		
		 
        foreach ($settings['tabs'] as $tab) {
            $heading = $tab['heading'];
			$anchor = $tab['atag'];
			$itemId = $tab['itemId'];

			
			$head[] = '	       
						<li><a id="'.$itemId.'" href="'.$anchor.'">'.$heading.'</a></li>
					  ';
            ++$counter;
        }
        if (empty($head)) {
            return;
		} ?>
        <div class="tabclass1">
				<header class="tab-header">
				
				<nav class="tab-class">
					<ul>
					<?php echo implode('', $head); ?>
					<ul>
				</nav>
				</header>
		</div>
					
        <?php


    }
}