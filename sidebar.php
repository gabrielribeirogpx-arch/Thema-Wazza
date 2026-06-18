<?php
/** Blog sidebar. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }
?>
<aside class="blog-sidebar" aria-label="<?php esc_attr_e('Barra lateral do blog', 'wazzaapi'); ?>">
    <?php if (is_active_sidebar('sidebar-1')) : dynamic_sidebar('sidebar-1'); else : ?>
        <section class="sidebar-widget card"><h2 class="widget-title"><?php esc_html_e('Pesquisar', 'wazzaapi'); ?></h2><?php get_search_form(); ?></section>
        <section class="sidebar-widget card"><h2 class="widget-title"><?php esc_html_e('Categorias', 'wazzaapi'); ?></h2><ul><?php wp_list_categories(array('title_li' => '', 'show_count' => true)); ?></ul></section>
        <section class="sidebar-widget card"><h2 class="widget-title"><?php esc_html_e('Posts recentes', 'wazzaapi'); ?></h2><ul><?php wp_get_archives(array('type' => 'postbypost', 'limit' => 5)); ?></ul></section>
    <?php endif; ?>
</aside>
