<?php
/**
 * Template padrão e listagem de posts.
 *
 * @package WazzaAPI
 */

get_header();
?>
<section class="page-hero" aria-labelledby="index-title">
    <div class="container">
        <span class="eyebrow"><?php esc_html_e('WazzaAPI', 'wazzaapi'); ?></span>
        <h1 class="page-title" id="index-title"><?php echo is_home() ? esc_html__('Blog', 'wazzaapi') : esc_html(get_bloginfo('name')); ?></h1>
    </div>
</section>
<section class="section">
    <div class="container grid grid-3">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php wazzaapi_post_card(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('Nenhum conteúdo encontrado.', 'wazzaapi'); ?></p>
        <?php endif; ?>
    </div>
    <div class="container pagination"><?php the_posts_pagination(); ?></div>
</section>
<?php
get_footer();
