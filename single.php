<?php
/**
 * Template de post individual.
 *
 * @package WazzaAPI
 */

get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <section class="page-hero" aria-labelledby="post-title-<?php the_ID(); ?>">
            <div class="container">
                <div class="post-meta"><?php echo esc_html(get_the_date()); ?> · <?php the_author_posts_link(); ?></div>
                <h1 class="page-title" id="post-title-<?php the_ID(); ?>"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?><p class="lead"><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?>
            </div>
        </section>
        <?php if (has_post_thumbnail()) : ?>
            <div class="container featured-image-wrap">
                <?php the_post_thumbnail('large', array('loading' => 'eager')); ?>
            </div>
        <?php endif; ?>
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
