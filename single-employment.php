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

<main id="primary" class="site-main mb-16">



    <?php
    while (have_posts()) :
        the_post();

        $deadline = get_field('deadline');
        $location = get_field('location');
        $salary = get_field('salary');

    ?>

        <?php get_template_part('template-parts/section/banner'); ?>
        <div class="container mt-10 mb-20">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-header flex justify-between pb-4 items-baseline">

                    <!-- Deadline date -->
                    <p class="deadline text-[#47525E] text-2xl">Deadline: <?php echo $deadline; ?></p>

                    <a href="<?php the_permalink(); ?>" class="button primary mt-5 inline-block">APPLY NOW</a>
                </div><!-- .entry-header -->

                <!-- apply now button -->


                <div class="entry-content mb-6">
                    <p><strong>Location:</strong> <?php echo $location; ?></p>
                    <p><strong>Salary:</strong> <?php echo $salary; ?></p>
                </div><!-- .entry-content -->
                <div class="single-content">
                    <?php the_content(); ?>
                </div>

                <!-- apply now button -->
                <a href="<?php the_permalink(); ?>" class="button primary mt-5 inline-block">APPLY NOW</a>
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    <?php

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
