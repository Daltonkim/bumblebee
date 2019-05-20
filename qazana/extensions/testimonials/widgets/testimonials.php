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
class Testimonials extends Widget_Base {

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
		return 'Testimonials';
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
		return __( 'testimonials', 'qazana' );
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
			'date',
			[
				'label' => __( 'title', 'qazana' ),
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
				'label' => __( 'title', 'qazana' ),
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
                'label' => __('Image', 'energia'),
                'type' => Controls_Manager::MEDIA,
            ]
		);
		$this->add_control(
            'quote',
            [
                'label' => __('open quote pic', 'energia'),
                'type' => Controls_Manager::MEDIA,
            ]
		);	$this->add_control(
            'quote2',
            [
                'label' => __('close quote pic', 'energia'),
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
		$this->add_control(
			'quotetitle',
			[
				'label' => __( 'Quote section title', 'qazana' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( ' e.g Making a difference with the power of sports!', 'qazana' ),
				
			]
		);
		$this->add_control(
			'quotetext',
			[
				'label' => __( 'Quote section title', 'qazana' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( ' e.g Hans willem dicke / managing director', 'qazana' ),
				
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
		$quote2 = $this->get_settings('quote2');
		$quote = $this->get_settings('quote');
		$quotetitle = $this->get_settings('quotetitle');
		$quotetext= $this->get_settings('quotetext');

		$title = $this->get_settings('title');
		$date = $this->get_settings('date');
		$desc_3 = $this->get_settings('description'); ?>

        

	<div class="testimony">
            <div class="testimony__detail">
			   <div class="testimony__detail-wrapper">
				   <div class="testimony__detail-date-title">
					<p><?php echo $date;?></p>
				   <p><?php echo $title;?></p>
				   </div>

				   <div class="testimony__detail-image">
					   <img src="<?php echo $image['url'];?>"alt="testimonial ngo">
					    <a href="<?php echo $link['url']; ?>" class="testimony__detail-button"  target=_blank>
							<span> 
								<?php _e( 'Lees Meer &nbsp;&nbsp;>', 'ngo' ); ?> 
							</span>
						</a>
				   </div>
				   <div class="testimony__detail-desc">
					   <p><?php echo $desc_3; ?></p>
				   </div>
			   </div>
		    </div>
    
		
            <div class="testimony__quote">
				<div class="testimony__quote-wrapper">
				<div class="testimony__quote-open">
					<img src="<?php echo $quote['url'];?>" alt="quote">
				</div>
					<div class="testimony__quote-title"><h1><?php echo $quotetitle;?></h1></div>
					<div class="testimony__quote-undertext"><p><?php echo $quotetext;?><p></div>
					<div class="testimony__quote-close">
					<img src="<?php echo $quote2['url'];?>" alt="quote">
					</div>
				</div>
		    </div>
    </div>
        <?php
    }
}