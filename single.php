<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wbpapp_Project
 */

get_header();
?>

<main id="primary" class="site-main text-slate-300">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/section/banner'); ?>

        <div class="container">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="single-content text-secondary text-base lg:text-lg leading-7">
                    <?php the_content(); ?>
                </div>
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>

    <?php
        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'wbpapp-project') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'wbpapp-project') . '</span> <span class="nav-title">%title</span>',
            )
        );

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
