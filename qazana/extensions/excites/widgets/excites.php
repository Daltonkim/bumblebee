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
class Excites extends Widget_Base {

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
		return 'excites';
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
		return __( 'Excitement', 'qazana' );
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
			'title_1',
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
			'description_1',
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
			'title_2',
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
			'description_2',
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
			'title_3',
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
			'description_3',
			[
				'label' => __( 'Description', 'qazana' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				
				'placeholder' => __( 'Enter your Description here ', 'qazana' ),
				
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
		$settings = $this->get_settings();
		$title_1 = $this->get_settings('title_1');
		$title_2 = $this->get_settings('title_2');
		$title_3 = $this->get_settings('title_3');
		$desc_1 = $this->get_settings('description_1');
		$desc_2 = $this->get_settings('description_2');
		$desc_3 = $this->get_settings('description_3'); ?>

        

	<div class="excitement">
            <div id="excites"class="excitement__card">
			     <div class="excitement__card-wrapper">
				    <div class="excitement__card-wrapper-1">
					    <div class="excitement__excerpt"> <?php  echo $desc_1; ?> </div>
				    </div>
				    <div class="excitement__card-wrapper-2">
				        <div class="excitement__line"></div>
	                    <div class="excitement__title "> <?php  echo $title_1 ?> </div>
				    </div>
				</div>
		    </div>
    
		
            <div id="excites"class="excitement__card-2">
				<div class="excitement__card-wrapper">
				    <div class="excitement__card-wrapper-1">
					   <div class="excitement__excerpt"> <?php  echo $desc_2; ?> </div>
					</div>
					<div class="excitement__card-wrapper-2">
					   <div class="excitement__line"></div>
					   <div class="excitement__title "> <?php   echo $title_2; ?> </div>
					</div>
				</div>
		    </div>
        
		
            <div id="excites"class="excitement__card-3">
			    <div class="excitement__card-wrapper">
				    <div class="excitement__card-wrapper-1">
					   <div class="excitement__excerpt"> <?php  echo $desc_3; ?> </div>
					</div>
					<div class="excitement__card-wrapper-2">
					   <div class="excitement__line"></div>
					   <div class="excitement__title"> <?php   echo $title_3 ?> </div>
					</div>
				</div>
		    </div>
	</div>

   <!-- save for later --> 
	<!-- <div class="excitement-grid">
		<div class="excitement-grid_card">
			<div class="excitement-grid_card-img center-background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/van-overlay.jpg')"></div>
			<div class="excitement-grid_card-imghover center-background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/van.png')"></div>
			<div class="excitement-grid_card-content">
				<div class="text"><?php echo $desc_1; ?></div>
				<div class="text"><?php echo $title_1; ?></div>
			</div>
		</div>

		<div class="excitement-grid_card">
			<div class="excitement-grid_card-img center-background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/bike-overlay.jpg')"></div>
			<div class="excitement-grid_card-imghover center-background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/bike.jpg')"></div>
			<div class="excitement-grid_card-content">
				<div class="text"><?php echo $desc_2; ?></div>
				<div class="text"><?php echo $title_2; ?></div>
			</div>
		</div>

		<div class="excitement-grid_card">
			<div class="excitement-grid_card-img center-background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/tennis-overlay.jpg')"></div>
			<div class="excitement-grid_card-imghover center-background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/tennis.jpg')"></div>
			<div class="excitement-grid_card-content">
				<div class="text"><?php echo $desc_3; ?></div>
				<div class="text"><?php echo $title_3; ?></div>
			</div>
		</div>
	</div> -->


	<div class="excitement-mobile">
					<div class="excitement-mobile__wrapper">
					<div class="excitement-mobile__card-wrapper-2 title_1 ">
	                    <div class="excitement-mobile__title  "> <?php  echo $title_1 ?> </div>
					</div>	
				    <div class="excitement-mobile__card-wrapper-1 desc_1">
					    <div class="excitement-mobile__excerpt"> <?php  echo $desc_1; ?> </div>
					</div>
					</div>
					<div class="excitement-mobile__wrapper">
					<div class="excitement-mobile__card-wrapper-2 title_2">
					   <div class="excitement-mobile__title "> <?php   echo $title_2; ?> </div>
					</div>
				    <div class="excitement-mobile__card-wrapper-1 desc_2">
					   <div class="excitement-mobile__excerpt"> <?php  echo $desc_2; ?> </div>
					</div>
					</div>
					<div class="excitement-mobile__wrapper">
					<div class="excitement-mobile__card-wrapper-2 title_3">
					   <div class="excitement-mobile__title"> <?php   echo $title_3 ?> </div>
					</div>
				    <div class="excitement-mobile__card-wrapper-1 desc_3">
					   <div class="excitement-mobile__excerpt"> <?php  echo $desc_3; ?> </div>
					</div>
					</div>
					
	</div>
	
	
        <?php
    }
}