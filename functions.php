<?php
/**
 * This file is a part of the Radium Framework core.
 * Please be cautious editing this file,
 *
 * @category tapona
 * @package  Energia
 * @author   Franklin Gitonga
 * @link     http://qazana.net/
 */
namespace tapona;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class Frontend {

    /**
     * Class Construct
     */
    public function __construct() {
        
        add_action( 'analytica_admin_setup_config', [ $this, 'admin_setup_config' ] );
        add_action( 'analytica_theme_defaults',     [ $this, 'get_options' ], 999 );

        add_action( 'wp_enqueue_scripts',           [ $this, 'enqueue_styles' ], 15 );
        add_action( 'wp_enqueue_scripts',           [ $this, 'enqueue_scripts' ], 999 );
        add_action( 'wp_print_scripts',             [ $this, 'dequeue_scripts' ], 999 );
        
        add_action( 'after_setup_theme',            [ $this, 'parent_theme_setup' ] );
        
        add_filter( 'body_class',                   [ $this, 'body_classes'] );
        

        $this->include_files();
        if(function_exists('qazana')) {
            qazana()->extend->controls= new \QazanaPro\Controls;
        }
    }

    /**
     * Load child theme files
     */
    function include_files() {
        include('includes/slick.php');
        include('qazana/includes/controls.php');
        require_once ('includes/functions/acf.php');

        include('includes/share.php'); //includes share links
    }


    /**
     * Add front end scripts
     *
     * @since 1.0.0
     */
    function enqueue_scripts() {
        wp_enqueue_script(
            'tapona-on-off-canvas',
            get_stylesheet_directory_uri().'/assets/frontend/js/on-off-canvas.js',
            '',
            '1.0.0',
            false
        );
        wp_enqueue_script(
            'js-files',
            get_stylesheet_directory_uri().'/assets/frontend/js/main.min.js',
            'scroll-magic',
            '1.0.0',
            false
        );
        wp_enqueue_script(
            'gsap',
            get_stylesheet_directory_uri().'/assets/frontend/js/gsap/jquery.gsap.min.js',
            'jquery',
            '1.0.0',
            false
        );
        wp_enqueue_script(
            'timelinelite',
            get_stylesheet_directory_uri().'/assets/frontend/js/gsap/TimelineLite.min.js',
            'jquery',
            '1.0.0',
            false
        );
        wp_enqueue_script(
            'timelinemax',
            get_stylesheet_directory_uri().'/assets/frontend/js/gsap/TimelineMax.min.js',
            'jquery',
            '1.0.0',
            false
        );
        wp_enqueue_script(
            'tweenmffax',
            get_stylesheet_directory_uri().'/assets/frontend/js/gsap/TweenMax.min.js',
            'jquery',
            '1.0.0',
            false
        );
        wp_enqueue_script(
            'tweenlite',
            get_stylesheet_directory_uri().'/assets/frontend/js/gsap/TweenLite.min.js',
            'jquery',
            '1.0.0',
            false
        );
        wp_enqueue_script(
            'scroll-magic',
            get_stylesheet_directory_uri().'/assets/frontend/js/ScrollMagic.min.js',
            'jquery',
            '1.0.0',
            false
        );
    }

     /**
     * Remove front end scripts
     *
     * 
     */
    function dequeue_scripts() {
     
        wp_dequeue_script(
            'analytica-frontend'
        );
    }

    /**
     * Add front end stylesheets
     *
     * @since 1.0.0
     */
    function enqueue_styles() {
        wp_enqueue_style( 'tapona-frontend', get_stylesheet_directory_uri() . '/assets/frontend/css/style.css', '', '1.0.0', 'all' );
        wp_enqueue_style( 'tapona-fonts', get_stylesheet_directory_uri() . '/assets/frontend/fonts/stylesheet.css', '', '1.0.0', 'all' );
    }

     /**
     * Add or remove parent theme actions - A parent theme loads first therefore this is needs to load after using 'after_setup_theme' action hook
     *
     * @return void
     */
    function parent_theme_setup() {
        add_theme_support( 'post-formats', 'post-thumbnails', array() );
        add_image_size('post-featured-image', 1920, 800, true); // post featured image
        add_image_size('related-post-image', 372, 372, true); // related post image
        add_image_size('post-slider-image', 1050, 700, true); // post slider image
        add_image_size('our-work-images', 507, 567, true); // our-work

        remove_theme_support( 'custom-header', 'header-text', 'custom-background', 'automatic-feed-links', 'analytica-sidebars'  );
    }

    /**
     * Add options
     *
     * @since 1.0.0
     */
    function get_options( $options ) {

        $accent_color = '#0274be';

        $primary = [
            'color' => '#212121',
            'font-family' => 'HK Grotesk',
        ];

        $secondary = [
            'color' => '#212121',
            'font-family' => 'Roboto Slab',
        ];

        $options['site-layout']         = 'site-wide';
        $options['site-content-width']  = 870;
        $options['site-sidebar-width']  = 300;

        // Colors
        $options['site-accent-color'] = $accent_color;
        $options['site-background-color'] = '#ffffff';
        $options['site-content-background-color'] = '#ffffff';
        $options['site-link-color'] = '#000000';
        $options['site-link-highlight-color'] = '#000000';
        $options['site-text-color'] = '#3a3a3a';
        $options['site-border-color'] = '';

        //Content Settings
        $options['site-sidebar-layout'] = _analytica_return_full_width_content();
        $options['single-post-layout'] = _analytica_return_full_width_content();

        $options['placeholder-image'] = '';
        $options['single-has-post-thumbnail'] = false;
        $options['archive-post-meta-color'] = '#b1b1b1';

        $options['module-accent-color'] = '';

        $options['site-hero-breadcrumbs'] = false;
        $options['site-hero-text-alignment'] = 'text-center';

        //Header
        $options['site-header-background-color'] = "#ffffff";
        $options['site-header-link-color'] = "#000";
        $options['site-header-link-highlight-color'] = "#000000";

        //Footer 
        $options['site-footer'] = true;
        $options['site-footer-layout'] = '1';
        $options['site-footer-width'] = true;
        $options['site-footer-widgets'] = true;
        $options['site-footer-padding'] = [
            'top'    => '0',
            'left'   => '0',
            'bottom' => '0',
            'right'  => '0',
        ];
        $options['site-theme-badge'] = false;
        $options['site-footer-colophon'] = false;
        $options['site-back-to-top'] = false;
        $options['site-background'] = [
            'background-color'    => $accent_color,
            'background-image'    => '',
            'background-repeat'   => 'no-repeat',
            'background-size'     => 'cover',
            'background-attach'   => 'fixed',
            'background-position' => 'left-top',
        ];

        // Typography
        $fonts = [
            'font-base' => [
                'font-family'    => $primary['font-family'],
                'color'          => $primary['color'],
                'font-size'      => '20px',
                'line-height'    => '1.6em',
                'letter-spacing' => '0',
                'variant'        => 'regular',
                'text-transform' => 'none',
            ],

            'font-secondary-base' => [
                'font-family' => $secondary['font-family'],
                'color'       => $secondary['color'],
            ],

            'font-h1' => [
                'font-family'    => $secondary['font-family'],
                'variant'        => 'regular',
                'font-size'      => '76px',
                'font-weight'    => 'bold',
                'line-height'    => '1.47',
                'letter-spacing' => '0',
                'color'          => $secondary['color'],
                'text-transform' => 'capitalize',
            ],

            'font-h2' => [
                'font-family'    => $secondary['font-family'],
                'variant'        => 'bold',
                'font-size'      => '50px',
                'line-height'    => '1.68',
                'letter-spacing' => '0',
                'color'          => $secondary['color'],
                'text-transform' => 'capitalize',
            ],

            'font-h3' => [
                'font-family'    => $secondary['font-family'],
                'variant'        => 'regular',
                'font-size'      => '24px',
                'line-height'    => '1.5',
                'letter-spacing' => '0',
                'color'          => $secondary['color'],
                'text-transform' => 'capitalize',
            ],

            'font-h4' => [
                'font-family'    => $secondary['font-family'],
                'variant'        => 'regular',
                'font-size'      => '18px',
                'line-height'    => '1.5',
                'letter-spacing' => '0',
                'color'          => $secondary['color'],
                'text-transform' => 'capitalize',
            ],

            'font-h5' => [
                'font-family'    => $secondary['font-family'],
                'variant'        => 'regular',
                'font-size'      => '14px',
                'line-height'    => '1.5',
                'letter-spacing' => '0',
                'color'          => $secondary['color'],
                'text-transform' => 'capitalize',
            ],

            'font-h6' => [
                'font-family'    => $secondary['font-family'],
                'variant'        => 'regular',
                'font-size'      => '12px',
                'line-height'    => '1.5',
                'letter-spacing' => '0',
                'color'          => $secondary['color'],
                'text-transform' => 'capitalize',
            ],

            'font-em' => [
                'font-family' => 'Playfair Display',
                'variant'     => 'italic',
            ],

            'font-strong' => [
                'font-family' => $primary['font-family'],
                'variant'     => 'bold',
            ],

            'font-form-labels' => [
                'font-family' => $primary['font-family'],
            ],

            'font-form-legend' => [
                'font-family' => $primary['font-family'],
            ],

            'archive-post-meta'    => array(
                'date',
                'time',
            ),

            'single-post-meta'    => array(
                'date',
                'time',
            ),

        ];

        return array_merge( $options, $fonts );
    }

    /**
     * Admin setup panel
     */
    function admin_setup_config( $config ) {

        $config = array(

            // Menu name under Appearance.
            'menu_name' => esc_html__( 'About tapona', 'tapona' ),
            // Page title.
            'page_name' => esc_html__( 'About tapona', 'tapona' ),
            // Main welcome title
            /* Translators: %s: theme name */
            'welcome_title' => sprintf( esc_html__( 'Welcome to %s! - Version ', 'tapona' ), 'tapona' ),
            // Main welcome content
            'welcome_content' => wp_get_theme()->get( 'Description' ),
    
            /**
             * Tabs array.
             *
             * The key needs to be ONLY consisted from letters and underscores. If we want to define outside the class a function to render the tab,
             * the will be the name of the function which will be used to render the tab content.
             */
            'tabs'                    => array(
                'getting_started'     => esc_html__( 'Getting Started', 'tapona' ),
                'recommended_actions' => esc_html__( 'Recommended Actions', 'tapona' ),
                'recommended_plugins' => esc_html__( 'Useful Plugins','tapona' ),
                'support'             => esc_html__( 'Support', 'tapona' ),
                'changelog'           => esc_html__( 'Changelog', 'tapona' ),
            ),
            // Getting started tab
            'getting_started' => array(
                'first' => array(
                    'title'               => esc_html__( 'Go to Customizer','tapona' ),
                    'text'                => esc_html__( 'Using the WordPress Customizer you can easily customize every aspect of the theme.','tapona' ),
                    'button_label'        => esc_html__( 'Go to Customizer','tapona' ),
                    'button_link'         => esc_url( admin_url( 'customize.php' ) ),
                    'is_button'           => true,
                    'recommended_actions' => false,
                    'is_new_tab'          => true
                ),
                'second' => array (
                    'title'               => esc_html__( 'Recommended actions','tapona' ),
                    'text'                => esc_html__( 'We have compiled a list of steps for you, to take make sure the experience you will have using one of our products is very easy to follow.','tapona' ),
                    'button_label'        => esc_html__( 'Recommended actions','tapona' ),
                    'button_link'         => esc_url( admin_url( 'themes.php?page=analytica-welcome&tab=recommended_actions' ) ),
                    'button_ok_label'     => esc_html__( 'You are good to go!','tapona' ),
                    'is_button'           => false,
                    'recommended_actions' => true,
                    'is_new_tab'          => false
                ),
                'third' => array(
                    'title'               => esc_html__( 'Read the documentation','tapona' ),
                    'text'                => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use tapona.','tapona' ),
                    'button_label'        => esc_html__( 'Documentation','tapona' ),
                    'button_link'         => 'https://qazana.net/docs-category/analytica/',
                    'is_button'           => false,
                    'recommended_actions' => false,
                    'is_new_tab'          => true
                )
            ),

            // Plugins array.
            'recommended_plugins'        => array(
                'already_activated_message' => esc_html__( 'Already activated', 'tapona' ),
                'version_label'             => esc_html__( 'Version: ', 'tapona' ),
                'install_label'             => esc_html__( 'Install and Activate', 'tapona' ),
                'activate_label'            => esc_html__( 'Activate', 'tapona' ),
                'deactivate_label'          => esc_html__( 'Deactivate', 'tapona' ),
                'content'                   => array(
                ),
            ),
            // Required actions array.
            'recommended_actions'        => array(
                'install_label'    => esc_html__( 'Install and Activate', 'tapona' ),
                'activate_label'   => esc_html__( 'Activate', 'tapona' ),
                'deactivate_label' => esc_html__( 'Deactivate', 'tapona' ),
                'content'          => array(
                    'kirki' => array(
                        'title'       => 'Kirki',
                        'description' => __( 'It is highly recommended that you install Kirki so you can access more customizer options.', 'tapona' ),
                        'check'       => class_exists( 'Kirki' ),
                        'plugin_slug' => 'kirki',
                        'id'          => 'kirki'
                    ),

                    'qazana' => array(
                        'title'       => 'Qazana',
                        'description' => __( 'It is highly recommended that you install Qazana so you can access build more customizable pages.', 'tapona' ),
                        'check'       => function_exists( 'qazana' ),
                        'plugin_slug' => 'qazana',
                        'id'          => 'qazana'
                    ),

                    'disable-comments' => array(
                        'title'       => 'Disable comments',
                        'check'       => function_exists( 'qazana' ),
                        'plugin_slug' => 'disable-comments',
                        'id'          => 'disable-comments'
                    ),
                ),
            ),
        );
        
        return $config;
    }

    /**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	function body_classes( $classes ) {

		global $is_IE;
			
		if ( $is_IE && $this->get_ie_version() <= 9 ) {
			$classes[] = 'ie-legacy';
		}

		return $classes;
	}

    /**
     * Get IE version fron user agent
     *
     * @return string version
     */
    function get_ie_version() {
        preg_match( '/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $version_no );
        return @$version_no[1];
    }

}

new Frontend;