<?php
/** Template Name: Recursos WazzaAPI */
get_header();
$items = array('IA Generativa','RAG','Memórias','MCP','Flow Builder','Inbox','Campanhas','Dashboard','Tarefas','CRM/Pipeline','API Oficial WhatsApp');
?>
<section class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><span class="eyebrow">Produto</span><h1 class="page-title">Recursos para uma operação inteligente no WhatsApp.</h1><p class="lead">Módulos nativos para automatizar, vender, atender e integrar cada etapa da jornada.</p></div></section>
<section class="section"><div class="container"><div class="feature-grid"><?php foreach ($items as $item) : ?><article class="feature-card hover-lift" data-animate="up"><span class="icon-spark">✦</span><h2><?php echo esc_html($item); ?></h2><p><?php esc_html_e('Experiência premium com governança, dados em tempo real e operação simples para times modernos.', 'wazzaapi'); ?></p></article><?php endforeach; ?></div></div></section>
<?php get_footer(); ?>
