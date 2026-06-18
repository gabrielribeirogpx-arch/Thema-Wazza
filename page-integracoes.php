<?php
/** Template Name: Integrações WazzaAPI */
get_header();
$integrations = array('Meta','Gemini','OpenAI','Claude','MCP','APIs externas','Webhooks','CRM','ERP');
?>
<section class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><span class="eyebrow">Integrações</span><h1 class="page-title">Conecte IA, WhatsApp e sistemas de negócio.</h1><p class="lead">Uma camada flexível para orquestrar dados, eventos e ferramentas externas.</p></div></section>
<section class="section section-muted"><div class="container cards-3"><?php foreach ($integrations as $integration) : ?><article class="card hover-lift" data-animate="up"><h2><?php echo esc_html($integration); ?></h2><p><?php esc_html_e('Conexões seguras para automatizar processos, enriquecer contexto e registrar eventos em tempo real.', 'wazzaapi'); ?></p></article><?php endforeach; ?></div></section>
<?php get_footer(); ?>
