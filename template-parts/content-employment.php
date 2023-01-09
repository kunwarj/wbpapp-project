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
    <header class="entry-header">
        <?php
        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        ?>
        <!-- Deadline date -->
        <p class="deadline-date">Deadline: <?php echo $deadline; ?></p>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <!-- button -->
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">LEARN MORE</a>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->