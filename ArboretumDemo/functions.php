<?php

//add css & js files

function arbor_setup(){
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap");
    wp_enqueue_style('fontawesome',"https://use.fontawesome.com/releases/v5.10.2/css/all.css");
    wp_enqueue_style('style',get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(),true);

}

add_action('wp_enqueue_scripts', 'arbor_setup');

//add theme support

function gt_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );

}

add_action('after_setup_theme', 'gt_init');

//events post type

function gt_custom_post_type(){
    register_post_type('events',
    array('rewrite' => array('slug' => 'events'),
    'labels' => array (
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Project'
    ),
    'menu-icon' => 'dashicons-dashboard',
    'public' => true,
    'has_archive' => true,
    'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
    )
    )
);
}
add_action('init', 'gt_custom_post_type');


?>