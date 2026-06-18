<?php
/**
 * Bootstrap do tema WazzaAPI.
 *
 * @package WazzaAPI
 */

if (!defined('ABSPATH')) {
    exit;
}

$wazzaapi_includes = array(
    'theme-setup.php',
    'enqueue.php',
    'menus.php',
    'widgets.php',
    'customizer.php',
    'helpers.php',
    'seo.php',
    'schema.php',
);

foreach ($wazzaapi_includes as $wazzaapi_include) {
    require_once get_template_directory() . '/inc/' . $wazzaapi_include;
}
