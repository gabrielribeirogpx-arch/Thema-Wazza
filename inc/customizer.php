<?php
/** Customizer options. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_customize_register(WP_Customize_Manager $wp_customize): void {
    $wp_customize->add_section('wazzaapi_seo', array('title' => __('SEO WazzaAPI', 'wazzaapi'), 'priority' => 32));
    $wp_customize->add_setting('wazzaapi_meta_description', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('wazzaapi_meta_description', array('label' => __('Descrição padrão', 'wazzaapi'), 'section' => 'wazzaapi_seo', 'type' => 'textarea'));
}
add_action('customize_register', 'wazzaapi_customize_register');
