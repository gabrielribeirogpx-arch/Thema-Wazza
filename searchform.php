<?php
/** Search form. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Pesquisar no site', 'wazzaapi'); ?>">
    <label class="screen-reader-text" for="wazzaapi-search-field"><?php esc_html_e('Pesquisar por:', 'wazzaapi'); ?></label>
    <input id="wazzaapi-search-field" class="search-field" type="search" placeholder="<?php esc_attr_e('Buscar por IA, WhatsApp, CRM...', 'wazzaapi'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
    <button class="btn btn-primary search-submit" type="submit" aria-label="<?php esc_attr_e('Enviar pesquisa', 'wazzaapi'); ?>"><?php esc_html_e('Buscar', 'wazzaapi'); ?></button>
</form>
