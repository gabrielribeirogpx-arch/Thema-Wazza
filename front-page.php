<?php
/**
 * Landing page principal.
 *
 * @package WazzaAPI
 */

get_header();
?>
<section class="hero" aria-labelledby="hero-title">
    <div class="container hero-grid">
        <div data-animate>
            <span class="eyebrow"><?php esc_html_e('WhatsApp + IA para times comerciais', 'wazzaapi'); ?></span>
            <h1 id="hero-title"><?php esc_html_e('Venda mais com conversas', 'wazzaapi'); ?> <span class="gradient-text"><?php esc_html_e('inteligentes', 'wazzaapi'); ?></span> <?php esc_html_e('no WhatsApp.', 'wazzaapi'); ?></h1>
            <p class="lead"><?php esc_html_e('A WazzaAPI centraliza atendimento, automações, integrações e agentes de IA para transformar mensagens em receita com uma experiência premium.', 'wazzaapi'); ?></p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contato/')); ?>"><?php esc_html_e('Testar gratuitamente', 'wazzaapi'); ?></a>
                <a class="btn btn-secondary" href="#recursos"><?php esc_html_e('Ver recursos', 'wazzaapi'); ?></a>
            </div>
            <div class="hero-stats" aria-label="<?php esc_attr_e('Indicadores da WazzaAPI', 'wazzaapi'); ?>">
                <div class="stat"><strong>24/7</strong><span><?php esc_html_e('IA atendendo', 'wazzaapi'); ?></span></div>
                <div class="stat"><strong>3x</strong><span><?php esc_html_e('mais conversões', 'wazzaapi'); ?></span></div>
                <div class="stat"><strong>+40%</strong><span><?php esc_html_e('produtividade', 'wazzaapi'); ?></span></div>
            </div>
        </div>
        <div class="platform-mockup" aria-label="<?php esc_attr_e('Mockup da plataforma WazzaAPI', 'wazzaapi'); ?>" data-animate>
            <div class="mockup-top" aria-hidden="true"><span></span><span></span><span></span></div>
            <div class="dashboard">
                <div class="mock-card"><strong><?php esc_html_e('Pipeline', 'wazzaapi'); ?></strong><div class="bar fill"></div><div class="bar"></div><div class="bar fill bar-72"></div><div class="bar"></div></div>
                <div class="mock-card"><strong><?php esc_html_e('Agente IA', 'wazzaapi'); ?></strong><div class="chat-bubble"><?php esc_html_e('Olá! Posso ajudar com planos e integrações?', 'wazzaapi'); ?></div><div class="chat-bubble green"><?php esc_html_e('Quero automatizar vendas pelo WhatsApp.', 'wazzaapi'); ?></div><div class="chat-bubble"><?php esc_html_e('Perfeito. Vou qualificar o lead e enviar para o CRM.', 'wazzaapi'); ?></div></div>
            </div>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="clientes-title"><div class="container"><div class="section-header"><span class="eyebrow"><?php esc_html_e('Clientes', 'wazzaapi'); ?></span><h2 id="clientes-title"><?php esc_html_e('Empresas modernas escolhem a WazzaAPI', 'wazzaapi'); ?></h2></div><div class="logo-cloud" data-animate><div class="client-logo">NOVA</div><div class="client-logo">PULSE</div><div class="client-logo">ORBIT</div><div class="client-logo">LUMI</div><div class="client-logo">ATLAS</div></div></div></section>
<section class="section section-muted" id="solucoes" aria-labelledby="solucoes-title"><div class="container"><div class="section-header"><span class="eyebrow"><?php esc_html_e('Funcionalidades', 'wazzaapi'); ?></span><h2 id="solucoes-title"><?php esc_html_e('Uma central completa para relacionamento e receita', 'wazzaapi'); ?></h2><p><?php esc_html_e('Cards de funcionalidades pensados para equipes de vendas, suporte e operações.', 'wazzaapi'); ?></p></div><div class="grid grid-3"><article class="card" data-animate><div class="icon">🤖</div><h3><?php esc_html_e('Agentes de IA', 'wazzaapi'); ?></h3><p><?php esc_html_e('Respostas automáticas, qualificação de leads e handoff humano com contexto completo.', 'wazzaapi'); ?></p></article><article class="card" data-animate><div class="icon">💬</div><h3><?php esc_html_e('Inbox omnichannel', 'wazzaapi'); ?></h3><p><?php esc_html_e('Organize conversas, etiquetas, responsáveis e histórico em uma interface simples.', 'wazzaapi'); ?></p></article><article class="card" data-animate><div class="icon">⚡</div><h3><?php esc_html_e('Automações', 'wazzaapi'); ?></h3><p><?php esc_html_e('Fluxos para nutrição, follow-up, recuperação de carrinho e pós-venda.', 'wazzaapi'); ?></p></article></div></div></section>
<section class="section" id="recursos" aria-labelledby="recursos-title"><div class="container"><div class="section-header"><span class="eyebrow"><?php esc_html_e('Como funciona', 'wazzaapi'); ?></span><h2 id="recursos-title"><?php esc_html_e('Ative em poucos passos', 'wazzaapi'); ?></h2></div><div class="grid grid-3 steps"><article class="card step" data-animate><h3><?php esc_html_e('Conecte o WhatsApp', 'wazzaapi'); ?></h3><p><?php esc_html_e('Configure seu canal oficial e importe contatos com segurança.', 'wazzaapi'); ?></p></article><article class="card step" data-animate><h3><?php esc_html_e('Crie fluxos inteligentes', 'wazzaapi'); ?></h3><p><?php esc_html_e('Monte automações e treine a IA com perguntas frequentes e regras do negócio.', 'wazzaapi'); ?></p></article><article class="card step" data-animate><h3><?php esc_html_e('Meça e otimize', 'wazzaapi'); ?></h3><p><?php esc_html_e('Acompanhe conversões, tempo de resposta e desempenho por equipe.', 'wazzaapi'); ?></p></article></div></div></section>
<section class="section section-dark" id="integracoes" aria-labelledby="integracoes-title"><div class="container"><div class="section-header"><span class="eyebrow"><?php esc_html_e('Recursos premium', 'wazzaapi'); ?></span><h2 id="integracoes-title"><?php esc_html_e('Integrações, segurança e dados para escalar', 'wazzaapi'); ?></h2><p><?php esc_html_e('Conecte CRM, webhooks, campanhas e dashboards em uma operação fluida.', 'wazzaapi'); ?></p></div><div class="grid grid-4"><article class="card" data-animate><h3>CRM</h3><p class="muted"><?php esc_html_e('Sincronização com funis comerciais.', 'wazzaapi'); ?></p></article><article class="card" data-animate><h3>API</h3><p class="muted"><?php esc_html_e('Endpoints e webhooks para devs.', 'wazzaapi'); ?></p></article><article class="card" data-animate><h3><?php esc_html_e('Relatórios', 'wazzaapi'); ?></h3><p class="muted"><?php esc_html_e('Indicadores de atendimento e vendas.', 'wazzaapi'); ?></p></article><article class="card" data-animate><h3><?php esc_html_e('Compliance', 'wazzaapi'); ?></h3><p class="muted"><?php esc_html_e('Boas práticas para operação segura.', 'wazzaapi'); ?></p></article></div></div></section>
<section class="section" id="precos" aria-labelledby="resultados-title"><div class="container"><div class="section-header"><span class="eyebrow"><?php esc_html_e('Resultados', 'wazzaapi'); ?></span><h2 id="resultados-title"><?php esc_html_e('Impacto mensurável desde as primeiras conversas', 'wazzaapi'); ?></h2></div><div class="results" data-animate><div class="result"><strong>72%</strong><?php esc_html_e('menos tempo de resposta', 'wazzaapi'); ?></div><div class="result"><strong>18k</strong><?php esc_html_e('mensagens automatizadas', 'wazzaapi'); ?></div><div class="result"><strong>31%</strong><?php esc_html_e('mais leads qualificados', 'wazzaapi'); ?></div><div class="result"><strong>99%</strong><?php esc_html_e('disponibilidade', 'wazzaapi'); ?></div></div></div></section>
<section class="section section-muted" aria-labelledby="blog-title"><div class="container"><div class="section-header"><span class="eyebrow"><?php esc_html_e('Blog', 'wazzaapi'); ?></span><h2 id="blog-title"><?php esc_html_e('Conteúdos para crescer no WhatsApp', 'wazzaapi'); ?></h2></div><div class="grid grid-3"><?php $wazzaapi_posts = new WP_Query(array('posts_per_page' => 3, 'ignore_sticky_posts' => true)); if ($wazzaapi_posts->have_posts()) : while ($wazzaapi_posts->have_posts()) : $wazzaapi_posts->the_post(); wazzaapi_post_card(); endwhile; wp_reset_postdata(); else : ?><article class="card" data-animate><h3><?php esc_html_e('Insights WazzaAPI', 'wazzaapi'); ?></h3><p><?php esc_html_e('Publique posts nativos do WordPress para exibir novidades, guias e estratégias aqui.', 'wazzaapi'); ?></p></article><?php endif; ?></div></div></section>
<section class="section"><div class="container"><div class="cta" data-animate><div><span class="eyebrow"><?php esc_html_e('Comece agora', 'wazzaapi'); ?></span><h2><?php esc_html_e('Pronto para transformar seu WhatsApp em um motor de vendas?', 'wazzaapi'); ?></h2><p><?php esc_html_e('Fale com a WazzaAPI e teste gratuitamente uma operação mais inteligente.', 'wazzaapi'); ?></p></div><a class="btn btn-primary" href="<?php echo esc_url(home_url('/contato/')); ?>"><?php esc_html_e('Testar gratuitamente', 'wazzaapi'); ?></a></div></div></section>
<?php
get_footer();
