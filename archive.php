<?php get_header(); ?>
<section class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><h1 class="page-title"><?php the_archive_title(); ?></h1><?php the_archive_description('<p class="lead">','</p>'); ?><?php get_search_form(); ?></div></section>
<section class="section"><div class="container"><div class="grid grid-3"><?php if (have_posts()) : while (have_posts()) : the_post(); wazzaapi_post_card(); endwhile; else : ?><article class="card"><h2><?php esc_html_e('Nenhum conteúdo encontrado', 'wazzaapi'); ?></h2></article><?php endif; ?></div><div class="pagination"><?php the_posts_pagination(); ?></div></div></section>
<?php get_footer(); ?>
