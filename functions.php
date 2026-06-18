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
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo', array('height'=>120,'width'=>360,'flex-height'=>true,'flex-width'=>true));
    add_theme_support('custom-background', array('default-color'=>'ffffff'));
    add_theme_support('custom-header', array('width'=>1600,'height'=>720,'flex-width'=>true,'flex-height'=>true,'header-text'=>false,'uploads'=>true));
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script','navigation-widgets'));

    register_nav_menus(array('primary'=>__('Principal','wazzaapi'),'footer'=>__('Rodapé','wazzaapi')));
}
add_action('after_setup_theme', 'wazzaapi_setup');

function wazzaapi_assets(): void {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('wazzaapi-style', get_stylesheet_uri(), array(), $version);
    wp_enqueue_style('wazzaapi-theme', get_template_directory_uri() . '/assets/css/theme.css', array('wazzaapi-style'), $version);
    wp_enqueue_script('wazzaapi-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'wazzaapi_assets');

function wazzaapi_widgets_init(): void {
    register_sidebar(array(
        'name'          => __('Rodapé institucional', 'wazzaapi'),
        'id'            => 'footer-1',
        'description'   => __('Widgets exibidos no rodapé.', 'wazzaapi'),
        'before_widget' => '<section class="footer-widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="footer-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'wazzaapi_widgets_init');

function wazzaapi_description(): string {
    if (is_singular()) {
        return has_excerpt() ? get_the_excerpt() : wp_trim_words(wp_strip_all_tags(get_the_content()), 28);
    }
    return get_bloginfo('description') ?: __('Automação de atendimento e vendas no WhatsApp com Inteligência Artificial, RAG, CRM, campanhas e integrações.', 'wazzaapi');
}

function wazzaapi_head_meta(): void {
    $description = wazzaapi_description();
    $title = wp_get_document_title();
    $url = is_singular() ? get_permalink() : home_url(add_query_arg(array(), $GLOBALS['wp']->request ?? ''));
    $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
    if (!$image) {
        $image = get_template_directory_uri() . '/screenshot.png';
    }
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:type" content="' . (is_singular('post') ? 'article' : 'website') . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
}
add_action('wp_head', 'wazzaapi_head_meta', 1);

function wazzaapi_schema(): void {
    $schema = array('@context'=>'https://schema.org','@type'=>'Organization','name'=>get_bloginfo('name') ?: 'WazzaAPI','url'=>home_url('/'),'sameAs'=>array(),'description'=>wazzaapi_description());
    $logo_id = get_theme_mod('custom_logo');
    if ($logo_id) { $schema['logo'] = wp_get_attachment_image_url($logo_id, 'full'); }
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'wazzaapi_schema', 20);

function wazzaapi_excerpt_length(): int { return 24; }
add_filter('excerpt_length', 'wazzaapi_excerpt_length');

function wazzaapi_default_menu(): void {
    $items = array('Recursos'=>'/#recursos','Soluções'=>'/#solucoes','Preços'=>'/#precos','Integrações'=>'/#integracoes','Blog'=>'/blog/','Documentação'=>'/documentacao/','Contato'=>'/contato/');
    echo '<ul id="primary-menu-list" class="menu">';
    foreach ($items as $label => $path) {
        echo '<li class="menu-item"><a href="' . esc_url(home_url($path)) . '">' . esc_html__($label, 'wazzaapi') . '</a></li>';
    }
    echo '</ul>';
}

function wazzaapi_reading_time(?int $post_id = null): string {
    $post_id = $post_id ?: get_the_ID();
    $words = str_word_count(wp_strip_all_tags(get_post_field('post_content', $post_id)));
    $minutes = max(1, (int) ceil($words / 220));
    return sprintf(_n('%d min de leitura', '%d min de leitura', $minutes, 'wazzaapi'), $minutes);
}

function wazzaapi_breadcrumb(): void {
    echo '<nav class="breadcrumb" aria-label="' . esc_attr__('Breadcrumb', 'wazzaapi') . '"><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Início', 'wazzaapi') . '</a><span>/</span>';
    if (is_singular()) { echo '<span>' . esc_html(get_the_title()) . '</span>'; }
    elseif (is_search()) { echo '<span>' . esc_html__('Busca', 'wazzaapi') . '</span>'; }
    elseif (is_archive()) { echo '<span>' . esc_html(get_the_archive_title()) . '</span>'; }
    else { echo '<span>' . esc_html__('Blog', 'wazzaapi') . '</span>'; }
    echo '</nav>';
}

function wazzaapi_post_card(?int $post_id = null): void {
    $post_id = $post_id ?: get_the_ID(); ?>
    <article <?php post_class('card post-card hover-lift', $post_id); ?> data-animate="up">
        <a class="thumb" href="<?php echo esc_url(get_permalink($post_id)); ?>" aria-label="<?php echo esc_attr(sprintf(__('Ler: %s', 'wazzaapi'), get_the_title($post_id))); ?>">
            <?php if (has_post_thumbnail($post_id)) { echo get_the_post_thumbnail($post_id, 'large', array('loading'=>'lazy')); } else { echo '<span class="thumb-fallback">WazzaAPI</span>'; } ?>
        </a>
        <div class="post-card-content">
            <div class="post-meta"><?php echo esc_html(wp_strip_all_tags(get_the_category_list(', ', '', $post_id)) ?: __('Insights', 'wazzaapi')); ?> · <?php echo esc_html(wazzaapi_reading_time($post_id)); ?> · <?php echo esc_html(get_the_author_meta('display_name', (int) get_post_field('post_author', $post_id))); ?></div>
            <h2><a href="<?php echo esc_url(get_permalink($post_id)); ?>"><?php echo esc_html(get_the_title($post_id)); ?></a></h2>
            <p><?php echo esc_html(get_the_excerpt($post_id)); ?></p>
        </div>
    </article>
<?php }
