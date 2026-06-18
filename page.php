<?php
/**
 * Template de páginas.
 *
 * @package WazzaAPI
 */

get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <section class="page-hero" aria-labelledby="page-title-<?php the_ID(); ?>">
            <div class="container">
                <span class="eyebrow"><?php bloginfo('name'); ?></span>
                <h1 class="page-title" id="page-title-<?php the_ID(); ?>"><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="section">
            <div class="container entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
        </section>
    </article>
<?php endwhile; ?>
<?php
get_footer();
