<?php
/**
 * Footer do tema WazzaAPI.
 *
 * @package WazzaAPI
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
</main>
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <section aria-labelledby="footer-about">
                <h2 class="footer-title" id="footer-about"><?php bloginfo('name'); ?></h2>
                <p><?php esc_html_e('Atendimento, vendas e automações no WhatsApp com inteligência artificial para empresas que querem crescer com relacionamento.', 'wazzaapi'); ?></p>
            </section>
            <section aria-labelledby="footer-product">
                <h2 class="footer-title" id="footer-product"><?php esc_html_e('Produto', 'wazzaapi'); ?></h2>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/#recursos')); ?>"><?php esc_html_e('Recursos', 'wazzaapi'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/#solucoes')); ?>"><?php esc_html_e('Soluções', 'wazzaapi'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/#precos')); ?>"><?php esc_html_e('Preços', 'wazzaapi'); ?></a></li>
                </ul>
            </section>
            <section aria-labelledby="footer-company">
                <h2 class="footer-title" id="footer-company"><?php esc_html_e('Empresa', 'wazzaapi'); ?></h2>
                <?php if (has_nav_menu('footer')) : ?>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-links',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ));
                    ?>
                <?php else : ?>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blog', 'wazzaapi'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contato/')); ?>"><?php esc_html_e('Contato', 'wazzaapi'); ?></a></li>
                        <li><a href="<?php echo esc_url(wp_login_url()); ?>"><?php esc_html_e('Entrar', 'wazzaapi'); ?></a></li>
                    </ul>
                <?php endif; ?>
            </section>
            <section aria-labelledby="footer-integrations">
                <h2 class="footer-title" id="footer-integrations"><?php esc_html_e('Integrações', 'wazzaapi'); ?></h2>
                <ul class="footer-links">
                    <li><?php esc_html_e('WhatsApp Business', 'wazzaapi'); ?></li>
                    <li><?php esc_html_e('CRM', 'wazzaapi'); ?></li>
                    <li><?php esc_html_e('Webhooks', 'wazzaapi'); ?></li>
                </ul>
            </section>
        </div>
        <div class="footer-bottom">
            <span>© <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>.</span>
            <span><?php esc_html_e('Tema WordPress nativo e sem build complexo.', 'wazzaapi'); ?></span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
