<?php
/** Structured data. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_schema(): void {
    $schema = array('@context' => 'https://schema.org', '@type' => 'Organization', 'name' => get_bloginfo('name') ?: 'WazzaAPI', 'url' => home_url('/'), 'description' => wazzaapi_description());
    $logo_id = get_theme_mod('custom_logo');
    if ($logo_id) { $schema['logo'] = wp_get_attachment_image_url($logo_id, 'full'); }
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'wazzaapi_schema', 20);
