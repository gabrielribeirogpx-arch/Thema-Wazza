<?php get_header(); ?>
<section class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><h1 class="page-title"><?php single_post_title('', true) ?: esc_html_e('Blog WazzaAPI', 'wazzaapi'); ?></h1><p class="lead"><?php esc_html_e('Estratégias, guias e novidades sobre WhatsApp, IA, automação e vendas.', 'wazzaapi'); ?></p><?php get_search_form(); ?></div></section>
<section class="section"><div class="container"><div class="grid grid-3"><?php if (have_posts()) : while (have_posts()) : the_post(); wazzaapi_post_card(); endwhile; else : ?><article class="card"><h2><?php esc_html_e('Nenhum post publicado ainda.', 'wazzaapi'); ?></h2></article><?php endif; ?></div><div class="pagination"><?php the_posts_pagination(); ?></div></div></section>
<?php get_footer(); ?>
