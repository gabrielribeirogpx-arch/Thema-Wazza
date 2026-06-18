<?php
/** SEO tags. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_description(): string {
    if (is_singular()) {
        return has_excerpt() ? get_the_excerpt() : wp_trim_words(wp_strip_all_tags(get_the_content()), 28);
    }
    $custom = get_theme_mod('wazzaapi_meta_description');
    return $custom ?: (get_bloginfo('description') ?: __('Automação de atendimento e vendas no WhatsApp com Inteligência Artificial, RAG, CRM, campanhas e integrações.', 'wazzaapi'));
}

function wazzaapi_head_meta(): void {
    $description = wazzaapi_description();
    $title = wp_get_document_title();
    $url = is_singular() ? get_permalink() : home_url(add_query_arg(array(), $GLOBALS['wp']->request ?? ''));
    $image = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/assets/svg/wazza-mark.svg';
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:type" content="' . esc_attr(is_singular('post') ? 'article' : 'website') . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
}
add_action('wp_head', 'wazzaapi_head_meta', 1);
