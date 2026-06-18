<?php
/** Template Name: Soluções WazzaAPI */
get_header();
$segments = array('Prefeitura','Câmara Municipal','Restaurante','Clínica','Loja','Imobiliária','Advocacia','E-commerce');
?>
<section class="page-hero"><div class="container"><?php wazzaapi_breadcrumb(); ?><span class="eyebrow">Soluções</span><h1 class="page-title">WhatsApp com IA para cada segmento.</h1><p class="lead">Fluxos, automações e atendimento personalizados para operações públicas e privadas.</p></div></section>
<section class="section"><div class="container cards-3"><?php foreach ($segments as $segment) : ?><article class="card hover-lift" data-animate="up"><h2><?php echo esc_html($segment); ?></h2><p><?php esc_html_e('Automatize triagem, respostas frequentes, agendamentos, follow-ups e relatórios com linguagem adequada ao seu público.', 'wazzaapi'); ?></p><a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contato/')); ?>"><?php esc_html_e('Ver aplicação', 'wazzaapi'); ?></a></article><?php endforeach; ?></div></section>
<?php get_footer(); ?>
