<?php
/** Theme setup. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_setup(): void {
    load_theme_textdomain('wazzaapi', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo', array('height' => 120, 'width' => 360, 'flex-height' => true, 'flex-width' => true));
    add_theme_support('custom-background', array('default-color' => 'ffffff'));
    add_theme_support('custom-header', array('width' => 1600, 'height' => 720, 'flex-width' => true, 'flex-height' => true, 'header-text' => false, 'uploads' => true));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets'));
}
add_action('after_setup_theme', 'wazzaapi_setup');

function wazzaapi_excerpt_length(): int { return 24; }
add_filter('excerpt_length', 'wazzaapi_excerpt_length');
