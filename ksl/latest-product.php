<?php
/**
 * Template Name: Latest Product
 * 
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ksl
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        include_once 'inc/slider.php';
        ?>
        
            <?php
            // Show the selected frontpage content.
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'front-page');
                endwhile;
            else :
                get_template_part('template-parts/post/content', 'none');
            endif;
            ?>

            <?php
            // Get each of our panels and show the post data.
            if (0 !== ksl_panel_count() || is_customize_preview()) : // If we have pages to show.

                /**
                 * Filter number of front page sections in ksl.
                 *
                 * @since ksl 1.0
                 *
                 * @param int $num_sections Number of front page sections.
                 */
                $num_sections = apply_filters('ksl_front_page_sections', 4);
                global $kslcounter;

                // Create a setting and control for each of the sections available in the theme.
                for ($i = 1; $i < ( 1 + $num_sections ); $i++) {
                    $kslcounter = $i;
                    ksl_front_page_section(null, $i);
                }

            endif; // The if ( 0 !== ksl_panel_count() ) ends here. 
            ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
