<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ksl
 * @since 1.0
 * @version 1.2
 */
?>

<div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        if (is_sticky() && is_home()) :
            echo ksl_get_svg(array('icon' => 'thumb-tack'));
        endif;
        ?>
        <?php if ('' !== get_the_post_thumbnail() && !is_single()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('ksl-featured-image'); ?>
                </a>
            </div><!-- .post-thumbnail -->
        <?php endif; ?>

        <header class="entry-header">
            <?php
            if ('post' === get_post_type()) {
                echo '<div class="entry-meta">';
                if (is_single()) {
                    ksl_posted_on();
                } else {
                    echo ksl_time_link();
                    ksl_edit_link();
                };
                echo '</div><!-- .entry-meta -->';
            };

            if (is_single()) {
                the_title('<h1 class="entry-title">', '</h1>');
            } elseif (is_front_page() && is_home()) {
                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
            } else {
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            }
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'ksl'), get_the_title()
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'ksl'),
                'after' => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after' => '</span>',
            ));
            ?>
        </div><!-- .entry-content -->

        <?php
        if (is_single()) {
            ksl_entry_footer();
        }
        ?>

    </article><!-- #post-## -->
</div>