<?php
/** Helpers. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }

function wazzaapi_reading_time(?int $post_id = null): string {
    $post_id = $post_id ?: get_the_ID();
    $words = str_word_count(wp_strip_all_tags((string) get_post_field('post_content', $post_id)));
    $minutes = max(1, (int) ceil($words / 220));
    return sprintf(_n('%d min de leitura', '%d min de leitura', $minutes, 'wazzaapi'), $minutes);
}

function wazzaapi_breadcrumb(): void {
    echo '<nav class="breadcrumb" aria-label="' . esc_attr__('Breadcrumb', 'wazzaapi') . '"><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Início', 'wazzaapi') . '</a><span aria-hidden="true">/</span>';
    if (is_singular()) { echo '<span>' . esc_html(get_the_title()) . '</span>'; }
    elseif (is_search()) { echo '<span>' . esc_html__('Busca', 'wazzaapi') . '</span>'; }
    elseif (is_archive()) { echo '<span>' . wp_kses_post(get_the_archive_title()) . '</span>'; }
    else { echo '<span>' . esc_html__('Blog', 'wazzaapi') . '</span>'; }
    echo '</nav>';
}

function wazzaapi_post_card(?int $post_id = null): void {
    $post_id = $post_id ?: get_the_ID(); ?>
    <article <?php post_class('card post-card hover-lift', $post_id); ?> data-animate="up">
        <a class="thumb" href="<?php echo esc_url(get_permalink($post_id)); ?>" aria-label="<?php echo esc_attr(sprintf(__('Ler: %s', 'wazzaapi'), get_the_title($post_id))); ?>">
            <?php if (has_post_thumbnail($post_id)) { echo get_the_post_thumbnail($post_id, 'large', array('loading' => 'lazy', 'alt' => esc_attr(get_the_title($post_id)))); } else { echo '<span class="thumb-fallback">WazzaAPI</span>'; } ?>
        </a>
        <div class="post-card-content">
            <div class="post-meta"><?php echo esc_html(wp_strip_all_tags(get_the_category_list(', ', '', $post_id)) ?: __('Insights', 'wazzaapi')); ?> · <?php echo esc_html(wazzaapi_reading_time($post_id)); ?></div>
            <h2><a href="<?php echo esc_url(get_permalink($post_id)); ?>"><?php echo esc_html(get_the_title($post_id)); ?></a></h2>
            <p><?php echo esc_html(get_the_excerpt($post_id)); ?></p>
        </div>
    </article>
<?php }
