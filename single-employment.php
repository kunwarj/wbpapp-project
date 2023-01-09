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

<main id="primary" class="site-main">
    <?php
    while (have_posts()) :
        the_post();

        $deadline = get_field('deadline');
        $location = get_field('location');
        $salary = get_field('salary');

    ?>

        <?php get_template_part('template-parts/section/banner'); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- apply now button -->
            <a href="<?php echo get_field('apply_now_link'); ?>" class="btn btn-primary">APPLY NOW</a>

            <div class="entry-content">
                <p><strong>Deadline:</strong> <?php echo $deadline; ?></p>
                <p><strong>Location:</strong> <?php echo $location; ?></p>
                <p><strong>Salary:</strong> <?php echo $salary; ?></p>
                <?php the_content(); ?>
            </div><!-- .entry-content -->

            <!-- apply now button -->
            <a href="<?php echo get_field('apply_now_link'); ?>" class="btn btn-primary">APPLY NOW</a>
        </article><!-- #post-<?php the_ID(); ?> -->
    <?php

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
