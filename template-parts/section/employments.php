<?php

// wp query to get all employment posts
$args = array(
    'post_type' => 'employment',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

$employment = new WP_Query($args);

// loop through all employment posts
if ($employment->have_posts()) {

    while ($employment->have_posts()) {
        $employment->the_post();

        // import template part for each employment post
        get_template_part('template-parts/content', get_post_type());
    }
}

// reset post data
wp_reset_postdata();