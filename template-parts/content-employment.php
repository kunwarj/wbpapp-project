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
    <header class="entry-header flex flex-col xs:flex-row gap-3 justify-between items-start xs:items-center text-[22px] md:text-[28px] leading-6 md:leading-8 text-primary font-semibold">
        <?php
        the_title('<h4 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h4>');
        ?>
        <!-- Deadline date -->
        <p class="deadline-date">Deadline: <?php echo $deadline; ?></p>
    </header><!-- .entry-header -->

    <div class="entry-content single-content text-secondary text-base lg:text-lg leading-7">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <a href="<?php the_permalink(); ?>" class="button primary inline-block">LEARN MORE</a>

</article><!-- #post-<?php the_ID(); ?> -->