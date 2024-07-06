<?php

add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');
function esgi_enqueue_assets()
{
    wp_enqueue_style('main', get_stylesheet_uri());
}

add_action('after_setup_theme', 'esgi_register_nav_menu');
function esgi_register_nav_menu()
{
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'esgi-theme'),
        'footer-menu' => __('Footer Menu', 'esgi-theme')
    ]);
}
