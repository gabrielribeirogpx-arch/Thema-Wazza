<?php
/** Header do tema WazzaAPI. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php esc_html_e('Pular para o conteúdo', 'wazzaapi'); ?></a>
<header class="site-header" role="banner" data-site-header>
    <div class="container header-inner">
        <a class="site-branding" href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="<?php echo esc_attr(get_bloginfo('name') ?: 'WazzaAPI'); ?>">
            <?php if (has_custom_logo()) : the_custom_logo(); else : ?><span class="brand-mark" aria-hidden="true">W</span><span class="brand-word">Wazza<span>API</span></span><?php endif; ?>
        </a>
        <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false" data-menu-toggle><span aria-hidden="true">☰</span><span class="screen-reader-text"><?php esc_html_e('Abrir menu', 'wazzaapi'); ?></span></button>
        <nav class="main-navigation" id="primary-menu" aria-label="<?php esc_attr_e('Menu principal', 'wazzaapi'); ?>" data-primary-navigation>
            <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>'wazzaapi_default_menu')); ?>
        </nav>
        <div class="header-actions" aria-label="<?php esc_attr_e('Ações rápidas', 'wazzaapi'); ?>">
            <a class="btn btn-ghost" href="<?php echo esc_url(wp_login_url()); ?>"><?php esc_html_e('Entrar', 'wazzaapi'); ?></a>
            <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contato/')); ?>"><?php esc_html_e('Testar Gratuitamente', 'wazzaapi'); ?></a>
        </div>
    </div>
</header>
<div class="site-menu-overlay" data-menu-overlay hidden></div>
<main id="content" class="site-main">
