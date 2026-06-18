<?php
/**
 * Arquivos e página de blog.
 *
 * @package WazzaAPI
 */

get_header();
?>
<section class="page-hero" aria-labelledby="archive-title">
    <div class="container">
        <span class="eyebrow"><?php esc_html_e('Blog WazzaAPI', 'wazzaapi'); ?></span>
        <h1 class="page-title" id="archive-title"><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<p class="lead">', '</p>'); ?>
    </div>
</section>
<section class="section">
    <div class="container grid grid-3">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php wazzaapi_post_card(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('Nenhum post encontrado.', 'wazzaapi'); ?></p>
        <?php endif; ?>
    </div>
    <div class="container pagination"><?php the_posts_pagination(); ?></div>
</section>
<?php
get_footer();
