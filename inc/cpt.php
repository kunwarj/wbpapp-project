<?php

/*
* Creating a function to create our Custom post type
*/

function wbpapp_project_team_custom_post_type()
{

    // Set UI labels for Custom Post Type team
    $labels = array(
        'name'                => _x('Employment', 'Post Type General Name', 'wbpapp-project'),
        'singular_name'       => _x('Employment', 'Post Type Singular Name', 'wbpapp-project'),
        'menu_name'           => __('Employment', 'wbpapp-project'),
        'parent_item_colon'   => __('Parent Employment', 'wbpapp-project'),
        'all_items'           => __('All Employment', 'wbpapp-project'),
        'view_item'           => __('View Employment', 'wbpapp-project'),
        'add_new_item'        => __('Add New Employment', 'wbpapp-project'),
        'add_new'             => __('Add New', 'wbpapp-project'),
        'edit_item'           => __('Edit Employment', 'wbpapp-project'),
        'update_item'         => __('Update Employment', 'wbpapp-project'),
        'search_items'        => __('Search Employment', 'wbpapp-project'),
        'not_found'           => __('Not Found', 'wbpapp-project'),
        'not_found_in_trash'  => __('Not found in Trash', 'wbpapp-project'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('Employment', 'wbpapp-project'),
        'description'         => __('Employment details', 'wbpapp-project'),
        'menu_icon'           => 'dashicons-businessman',
        'labels'              => $labels,
        'show_in_rest'        => true,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Registering your Custom Post Type
    register_post_type('employment', $args);
}
add_action('init', 'wbpapp_project_team_custom_post_type', 0);
