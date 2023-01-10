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
        <div class="container">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-header flex flex-col xs:flex-row gap-5 justify-between items-center text-[22px] md:text-[28px] leading-6 md:leading-8 text-primary font-semibold">

                    <!-- Deadline date -->
                    <p class="deadline">Deadline: <?php echo $deadline; ?></p>

                    <a href="<?php the_permalink(); ?>" class="button primary inline-block applyNowButton">APPLY NOW</a>
                </div><!-- .entry-header -->

                <!-- apply now button -->


                <div class="entry-content text-secondary text-base lg:text-lg leading-7">
                    <p>Location:
                        <?php echo $location; ?>
                    </p>
                    <p>Salary: <?php echo $salary; ?></p>
                </div><!-- .entry-content -->
                <div class="single-content text-secondary text-base lg:text-lg leading-7">
                    <?php the_content(); ?>
                </div>

                <!-- apply now button -->
                <a href="<?php the_permalink(); ?>" class="button primary inline-block bottomApplyNow applyNowButton">APPLY NOW</a>
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
        <div id="apply-pop-up-bg" class="none" style="display: none;">
            <div class="container">
                <div id="popup-body">
                    <div id="popup-content">
                        place
                        <br>
                        your
                        <br>
                        content
                        <br>
                        here
                    </div>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="close-pop-up">
                        <g id="style=fill">
                            <g id="close-circle">
                                <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM8.46967 8.46967C8.76257 8.17678 9.23744 8.17678 9.53033 8.46967L12 10.9393L14.4697 8.46967C14.7626 8.17678 15.2374 8.17678 15.5303 8.46967C15.8232 8.76257 15.8232 9.23744 15.5303 9.53033L13.0606 12L15.5303 14.4697C15.8232 14.7626 15.8232 15.2374 15.5303 15.5303C15.2374 15.8232 14.7625 15.8232 14.4696 15.5303L12 13.0607L9.53033 15.5303C9.23743 15.8232 8.76256 15.8232 8.46967 15.5303C8.17678 15.2374 8.17678 14.7625 8.46967 14.4696L10.9393 12L8.46967 9.53033C8.17678 9.23743 8.17678 8.76256 8.46967 8.46967Z" fill="#FF0000" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    <?php

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
