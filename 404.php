<?php get_header(); ?>
<section class="page-hero"><div class="container"><h1 class="page-title"><?php esc_html_e('Página não encontrada', 'wazzaapi'); ?></h1><p class="lead"><?php esc_html_e('A conversa que você procurava saiu do fluxo. Volte para a página inicial ou pesquise no site.', 'wazzaapi'); ?></p><?php get_search_form(); ?><p><a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Voltar ao início', 'wazzaapi'); ?></a></p></div></section>
<?php get_footer(); ?>
