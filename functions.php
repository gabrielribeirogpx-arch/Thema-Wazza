<?php
/**
 * Funções e configurações do tema WazzaAPI.
 *
 * @package WazzaAPI
 */

if (!defined('ABSPATH')) {
    exit;
}

function wazzaapi_setup(): void {
    load_theme_textdomain('wazzaapi', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo', array(
        'height'      => 120,
        'width'       => 360,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));
    add_theme_support('custom-header', array(
        'default-image'      => '',
        'width'              => 1600,
        'height'             => 720,
        'flex-width'         => true,
        'flex-height'        => true,
        'header-text'        => false,
        'uploads'            => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    ));

    register_nav_menus(array(
        'primary' => __('Principal', 'wazzaapi'),
        'footer'  => __('Rodapé', 'wazzaapi'),
    ));
}
add_action('after_setup_theme', 'wazzaapi_setup');

function wazzaapi_assets(): void {
    $theme = wp_get_theme();
    $version = $theme->get('Version');

    wp_enqueue_style('wazzaapi-style', get_stylesheet_uri(), array(), $version);
    wp_enqueue_style('wazzaapi-theme', get_template_directory_uri() . '/assets/css/theme.css', array('wazzaapi-style'), $version);
    wp_enqueue_script('wazzaapi-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'wazzaapi_assets');

function wazzaapi_meta_description(): void {
    if (is_singular()) {
        $description = has_excerpt() ? get_the_excerpt() : wp_trim_words(wp_strip_all_tags(get_the_content()), 28);
    } else {
        $description = get_bloginfo('description') ?: __('Plataforma WazzaAPI para WhatsApp com IA, automações, integrações e atendimento comercial.', 'wazzaapi');
    }

    if ($description) {
        echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    }
}
add_action('wp_head', 'wazzaapi_meta_description', 1);

function wazzaapi_schema(): void {
    $logo_id = get_theme_mod('custom_logo');
    $logo = $logo_id ? wp_get_attachment_image_url($logo_id, 'full') : '';
    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'Organization',
        'name'     => get_bloginfo('name'),
        'url'      => home_url('/'),
    );

    if ($logo) {
        $schema['logo'] = $logo;
    }

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'wazzaapi_schema', 20);

function wazzaapi_excerpt_length(): int {
    return 24;
}
add_filter('excerpt_length', 'wazzaapi_excerpt_length');

function wazzaapi_default_menu(): void {
    $items = array(
        __('Recursos', 'wazzaapi')     => home_url('/#recursos'),
        __('Soluções', 'wazzaapi')     => home_url('/#solucoes'),
        __('Preços', 'wazzaapi')       => home_url('/#precos'),
        __('Integrações', 'wazzaapi')  => home_url('/#integracoes'),
        __('Blog', 'wazzaapi')         => home_url('/blog/'),
        __('Contato', 'wazzaapi')      => home_url('/contato/'),
    );

    echo '<ul id="primary-menu-list" class="menu">';
    foreach ($items as $label => $url) {
        echo '<li class="menu-item"><a href="' . esc_url($url) . '">' . esc_html($label) . '</a></li>';
    }
    echo '</ul>';
}

function wazzaapi_post_card(?int $post_id = null): void {
    $post_id = $post_id ?: get_the_ID();
    ?>
    <article <?php post_class('card post-card', $post_id); ?> data-animate>
        <a class="thumb" href="<?php echo esc_url(get_permalink($post_id)); ?>" aria-label="<?php echo esc_attr(sprintf(__('Ler: %s', 'wazzaapi'), get_the_title($post_id))); ?>">
            <?php
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, 'large', array('loading' => 'lazy'));
            }
            ?>
        </a>
        <div class="post-card-content">
            <div class="post-meta"><?php echo esc_html(get_the_date('', $post_id)); ?> · <?php esc_html_e('Blog WazzaAPI', 'wazzaapi'); ?></div>
            <h2><a href="<?php echo esc_url(get_permalink($post_id)); ?>"><?php echo esc_html(get_the_title($post_id)); ?></a></h2>
            <p><?php echo esc_html(get_the_excerpt($post_id)); ?></p>
        </div>
    </article>
    <?php
}
