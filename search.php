<?php get_header(); ?>
<section class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><h1 class="page-title"><?php printf(esc_html__('Resultados para: %s', 'wazzaapi'), esc_html(get_search_query())); ?></h1><?php get_search_form(); ?></div></section>
<section class="section"><div class="container"><div class="grid grid-3"><?php if (have_posts()) : while (have_posts()) : the_post(); wazzaapi_post_card(); endwhile; else : ?><article class="card"><h2><?php esc_html_e('Nada encontrado', 'wazzaapi'); ?></h2><p><?php esc_html_e('Tente pesquisar por WhatsApp, IA, automação ou CRM.', 'wazzaapi'); ?></p></article><?php endif; ?></div><div class="pagination"><?php the_posts_pagination(); ?></div></div></section>
<?php get_footer(); ?>
