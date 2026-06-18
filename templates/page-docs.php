<?php
/**
 * Template Name: Documentação WazzaAPI
 * Template Post Type: page
 *
 * @package WazzaAPI
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
<header class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><h1 class="page-title"><?php the_title(); ?></h1><p class="lead"><?php esc_html_e('Guias técnicos, endpoints, webhooks e melhores práticas para integrar com a WazzaAPI.', 'wazzaapi'); ?></p></div></header>
<section class="section"><div class="container docs-layout"><aside class="docs-sidebar"><strong><?php esc_html_e('Nesta página', 'wazzaapi'); ?></strong><a href="#visao-geral">Visão geral</a><a href="#autenticacao">Autenticação</a><a href="#webhooks">Webhooks</a><a href="#rag">RAG</a></aside><div class="entry-content"><h2 id="visao-geral">Visão geral</h2><?php the_content(); ?><h2 id="autenticacao">Autenticação</h2><pre><code>Authorization: Bearer SUA_API_KEY</code></pre><h2 id="webhooks">Webhooks</h2><p>Receba eventos de mensagens, campanhas, leads e conversas em tempo real.</p><h2 id="rag">RAG</h2><p>Envie documentos, vetorize conteúdos e permita respostas contextualizadas pela IA.</p></div></div></section>
<?php endwhile; get_footer(); ?>
