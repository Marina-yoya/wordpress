<?php

function sightseeing_register_menus() {
    add_theme_support('page-templates');
    register_nav_menus(array(
        'primary-menu' => esc_html__('Primary Menu', 'sightseeing'),
    ));
    add_theme_support('custom-logo');
    wp_enqueue_style('sightseeing-style', get_stylesheet_uri());
}
add_action('after_setup_theme', 'sightseeing_register_menus');


function sightseeing_customize_register($wp_customize) {
   
    $wp_customize->add_section('sightseeing_navigation_settings', array(
        'title' => __('Navigation Menu', 'sightseeing'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('sightseeing_primary_menu', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post', 
    ));

    
    $wp_customize->add_control('sightseeing_primary_menu', array(
        'label' => __('Select Primary Menu', 'sightseeing'),
        'section' => 'sightseeing_navigation_settings',
        'type' => 'select',
        'choices' => sightseeing_get_all_menus(),
    ));

    
}
add_action('customize_register', 'sightseeing_customize_register');


function sightseeing_get_all_menus() {
    $menus = get_terms('nav_menu', array('hide_empty' => false));
    $menu_choices = array();
    foreach ($menus as $menu) {
        $menu_choices[$menu->term_id] = $menu->name;
    }
    return $menu_choices;
}


add_theme_support('post-thumbnails');

function sightseeing_customize_footer_register($wp_customize)
{
    
    $wp_customize->add_setting('footer_text', array(
        'default' => 'All Rights Reserved',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('footer_text', array(
        'label' => __('Footer Text', 'sightseeing'),
        'section' => 'footer_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer Settings', 'sightseeing'),
        'priority' => 200, 
    ));
}
add_action('customize_register', 'sightseeing_customize_footer_register');


function sightseeing_register_widget_areas() {
    register_sidebar(array(
        'name' => __('Custom Sidebar', 'sightseeing'),
        'id' => 'custom_sidebar',
        'description' => __('Add widgets here to appear in the sidebar.', 'sightseeing'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area', 'sightseeing'),
        'id' => 'footer_widget_area',
        'description' => __('Add widgets here to appear in the footer.', 'sightseeing'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'sightseeing_register_widget_areas');



