<?php
/** Widget areas. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_widgets_init(): void {
    register_sidebar(array('name' => __('Sidebar do blog', 'wazzaapi'), 'id' => 'sidebar-1', 'description' => __('Widgets exibidos em posts e listagens.', 'wazzaapi'), 'before_widget' => '<section class="sidebar-widget card">', 'after_widget' => '</section>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>'));
    register_sidebar(array('name' => __('Rodapé institucional', 'wazzaapi'), 'id' => 'footer-1', 'description' => __('Widgets exibidos no rodapé.', 'wazzaapi'), 'before_widget' => '<section class="footer-widget">', 'after_widget' => '</section>', 'before_title' => '<h2 class="footer-title">', 'after_title' => '</h2>'));
}
add_action('widgets_init', 'wazzaapi_widgets_init');
