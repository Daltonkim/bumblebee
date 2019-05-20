<?php
namespace QazanaPro;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Main class plugin
 */
class Controls {

    /**
     * Add prefix to control.
     *
     * @return string
     */
    function add_prefix( $control ) {

        if ( 0 === strpos( $control, 'button' ) || 0 === strpos( $control, '_' ) || 0 === strpos( $control, 'section' ) || 0 === strpos( $control, 'tab' ) ) {

            $new_control = $control;

        } elseif ( 0 === strpos( $control, '_' ) ) {
            $new_control = '_button' . $control;
        } else {
            $new_control = 'button_' . $control;
        }

        return $new_control;
    }

    /**
     * [qazana_inline_button_control_blackist description]
     * @return bool
     */
    function remove_global_controls( $control_name, $custom_exclusions = array() ) {

        $exclude = [
            '_animation_animated',
            '_animation_delay',
            '_animation_duration',
            '_animation_in',
            '_animation_out',
            '_background_animated',
            '_background_animation',
            '_background_animation_duration',
            '_background_attachment',
            '_background_background',
            '_background_color',
            '_background_color_b',
            '_background_color_b_stop',
            '_background_color_stop',
            '_background_custom_position',
            '_background_custom_position_values',
            '_background_custom_size',
            '_background_custom_size_values',
            '_background_gradient_angle',
            '_background_gradient_position',
            '_background_gradient_type',
            '_background_hover_attachment',
            '_background_hover_background',
            '_background_hover_color',
            '_background_hover_color_b',
            '_background_hover_color_b_stop',
            '_background_hover_color_stop',
            '_background_hover_custom_position',
            '_background_hover_custom_position_values',
            '_background_hover_custom_size',
            '_background_hover_custom_size_values',
            '_background_hover_gradient_angle',
            '_background_hover_gradient_position',
            '_background_hover_gradient_type',
            '_background_hover_image',
            '_background_hover_position',
            '_background_hover_repeat',
            '_background_hover_size',
            '_background_hover_transition',
            '_background_hover_video_fallback',
            '_background_hover_video_link',
            '_background_hover_video_source',
            '_background_hover_youtube_video_link',
            '_background_image',
            '_background_position',
            '_background_repeat',
            '_background_size',
            '_background_video_fallback',
            '_background_video_link',
            '_background_video_source',
            '_background_youtube_video_link',
            '_border_border',
            '_border_color',
            '_border_hover_border',
            '_border_hover_color',
            '_border_hover_transition',
            '_border_hover_width',
            '_border_radius',
            '_border_radius_hover',
            '_border_width',
            '_box_shadow_box_shadow',
            '_box_shadow_box_shadow_position',
            '_box_shadow_box_shadow_type',
            '_box_shadow_hover_box_shadow',
            '_box_shadow_hover_box_shadow_position',
            '_box_shadow_hover_box_shadow_type',
            '_css_classes',
            '_custom_css_description',
            '_element_id',
            '_element_left',
            '_element_left_mobile',
            '_element_left_tablet',
            '_element_overflow',
            '_element_parallax',
            '_element_parallax_axis',
            '_element_parallax_mobile',
            '_element_parallax_momentum',
            '_element_parallax_tablet',
            '_element_position',
            '_element_position_mobile',
            '_element_position_tablet',
            '_element_rotate',
            '_element_rotate_degrees',
            '_element_top',
            '_element_top_mobile',
            '_element_top_tablet',
            '_element_transform_origin',
            '_hide_desktop',
            '_hide_mobile',
            '_hide_tablet',
            '_hover_animation',
            '_inline_element',
            '_margin',
            '_margin_mobile',
            '_margin_tablet',
            '_padding',
            '_padding_mobile',
            '_padding_tablet',
            '_responsive_description',
            '_section_background',
            '_section_border',
            '_section_custom_css',
            '_section_element_position',
            '_section_parallax',
            '_section_responsive',
            '_section_style',
            '_tab_background_hover',
            '_tab_background_normal',
            '_tab_border_hover',
            '_tab_border_normal',
            '_tabs_background',
            '_tabs_border',
            '_z_index',
            'custom_css',
        ];

        $exclude = array_merge( $exclude, $custom_exclusions );

        if ( in_array( $control_name, $exclude ) ) {
            return true;
        }

        return false;
    }

}