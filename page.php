<?php get_header(); ?>
<?php while (have_posts()) : the_post(); $is_docs = is_page_template('templates/page-docs.php') || false; ?>
<header class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><h1 class="page-title"><?php the_title(); ?></h1><?php if (has_excerpt()) : ?><p class="lead"><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?></div></header>
<section class="section"><div class="container <?php echo $is_docs ? 'docs-layout' : ''; ?>"><?php if ($is_docs) : ?><aside class="docs-sidebar"><strong>Documentação</strong><a href="#inicio">Introdução</a><a href="#api">API</a><a href="#webhooks">Webhooks</a><a href="#rag">RAG</a></aside><?php endif; ?><div class="entry-content" id="inicio"><?php the_content(); ?></div></div></section>
<?php endwhile; get_footer(); ?>
