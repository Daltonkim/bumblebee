<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>




<?php
/**
 * This file is a part of the Radium Framework core.
 * Please be cautious editing this file,
 *
 * @category Analytica
 * @package  Energia
 * @author   Franklin Gitonga
 * @link     http://radiumthemes.com/
 */
if ( ! analytica_is_php_version_compatible() ) {
    return;
}

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until <div class="site-inner">
 *
 * @since 1.0.0
 */
do_action( 'analytica_doctype' );
do_action( 'analytica_meta' );
do_action( 'analytica_title' );

wp_head(); // we need this for plugins

?></head><?php 

analytica_markup( array(
    'element' => '<body %s>',
    'context' => 'body',
) );

do_action( 'analytica_before' );

analytica_markup( array(
    'element' => '<div %s>',
    'context' => 'site-container',
) );

do_action( 'analytica_body_top' ); 

analytica_markup( array(
    'element' => '<div %s>',
    'context' => 'site',
) );

    do_action( 'analytica_header_before' );
    $header_image = get_custom_logo();
    ?>


	<div  class="site-header site-header-primary site-header-transparent site-header-left site-header-has-container" role="banner">
    <div class="analytica-container">
    <div class="site-id">
        <div class="site-title-wrapper">
            <div class="site-title">
                <?php echo  the_custom_logo();?>
                </a></div>
            </div>
        </div>
        <div class="header-container site-navigation style='font-family: 'Roboto Slab''">

		<nav class="nav nav-horizontal nav-animation-submenu-left-to-right">
        <button class="menu-trigger show-on-small button" aria-label="Main mobile navigation">
    <span>
        <span></span>
        <span></span>
        <span></span>
    </span>
</button>             
            <?php
            
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'menu-menu-1, analytica_mega menu dl-menu menu-v2 dl-menu-toggle',
				)
			);
            ?>
        </nav><!-- #site-navigation -->
        </div>
        </div><!-- #masthead -->
    <div class="scroll-progress">
	<span class="scroll-progress__bar"></span>
</div> 
 </div>
 <?php
    do_action( 'analytica_header_after' );

    do_action( 'analytica_content_before' ); 

        analytica_markup( array(
            'element' => '<div %s>',
            'context' => 'site-content',
        ) );
                
            do_action( 'analytica_content_top' );

                analytica_markup( array(
                    'element' => '<div %s>',
                    'context' => 'site-inner',
                ) );

                analytica_structural_wrap( 'site-inner', 'open' );
