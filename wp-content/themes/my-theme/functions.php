<?php

function enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function register_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'village-vet'),
        )
    );
}

add_action('after_setup_theme', 'register_menus');


function add_smooth_scroll_script()
{
    wp_enqueue_script('scroll.js', get_template_directory_uri() . '/scroll.js');
}

add_action('wp_enqueue_scripts', 'add_smooth_scroll_script');

