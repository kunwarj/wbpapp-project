<?php

/**
 * Template part for displaying employment posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wbpapp_Project
 */

$deadline = get_field('deadline');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header flex justify-between pb-4">
        <?php
        the_title('<h2 class="entry-title text-[#47525E] text-2xl"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        ?>
        <!-- Deadline date -->
        <p class="deadline-date text-[#47525E] text-2xl">Deadline: <?php echo $deadline; ?></p>
    </header><!-- .entry-header -->

    <div class="entry-content single-content text-base">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <a href="<?php the_permalink(); ?>" class="button primary mt-5 inline-block mb-10">LEARN MORE</a>

</article><!-- #post-<?php the_ID(); ?> -->