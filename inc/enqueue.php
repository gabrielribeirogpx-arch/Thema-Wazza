<?php
/** Asset loading. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_assets(): void {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('wazzaapi-style', get_stylesheet_uri(), array(), $version);
    wp_enqueue_style('wazzaapi-theme', get_template_directory_uri() . '/assets/css/theme.css', array('wazzaapi-style'), $version);
    wp_enqueue_script('wazzaapi-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'wazzaapi_assets');
