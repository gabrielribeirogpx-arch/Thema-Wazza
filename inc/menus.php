<?php
/** Menus. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_register_menus(): void {
    register_nav_menus(array('primary' => __('Principal', 'wazzaapi'), 'footer' => __('Rodapé', 'wazzaapi')));
}
add_action('after_setup_theme', 'wazzaapi_register_menus');

function wazzaapi_default_menu(): void {
    $items = array('Recursos' => '/recursos/', 'Soluções' => '/solucoes/', 'Preços' => '/pricing/', 'Integrações' => '/integracoes/', 'Blog' => '/blog/', 'Documentação' => '/docs/', 'Contato' => '/contato/');
    echo '<ul id="primary-menu-list" class="menu">';
    foreach ($items as $label => $path) {
        echo '<li class="menu-item"><a href="' . esc_url(home_url($path)) . '">' . esc_html__($label, 'wazzaapi') . '</a></li>';
    }
    echo '</ul>';
}
