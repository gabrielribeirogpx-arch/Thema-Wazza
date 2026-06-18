<?php
/** Comments template. @package WazzaAPI */
if (!defined('ABSPATH')) { exit; }
if (post_password_required()) { return; }
?>
<section id="comments" class="comments-area card" aria-labelledby="comments-title">
    <h2 id="comments-title"><?php comments_number(__('Seja o primeiro a comentar', 'wazzaapi'), __('1 comentário', 'wazzaapi'), __('% comentários', 'wazzaapi')); ?></h2>
    <?php if (have_comments()) : ?>
        <ol class="comment-list"><?php wp_list_comments(array('style' => 'ol', 'short_ping' => true, 'avatar_size' => 48)); ?></ol>
        <?php the_comments_navigation(); ?>
    <?php endif; ?>
    <?php if (!comments_open() && get_comments_number()) : ?><p class="no-comments"><?php esc_html_e('Comentários encerrados.', 'wazzaapi'); ?></p><?php endif; ?>
    <?php comment_form(array('class_submit' => 'btn btn-primary', 'title_reply' => __('Participe da conversa', 'wazzaapi'))); ?>
</section>
