<?php

function university_post_types()
{
    // campus post type
    register_post_type('campus', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'campuses'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Campuses',
            'add_new' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus'
        ),
        'menu_icon' => 'dashicons-admin-multisite'
    ));

    // event post type
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    //program post type
    register_post_type('program', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new' => 'Add New program',
            'edit_item' => 'Edit program',
            'all_items' => 'All programs',
            'singular_name' => 'program'
        ),
        'menu_icon' => 'dashicons-admin-site-alt'
    ));

    //proff post type
    register_post_type('professor', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new' => 'Add New professor',
            'edit_item' => 'Edit professor',
            'all_items' => 'All professors',
            'singular_name' => 'professor'
        ),
        'menu_icon' => 'dashicons-lightbulb'
    ));
}

add_action('init', 'university_post_types');
