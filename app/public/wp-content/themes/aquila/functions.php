<?php

/**
 * Functions for the Aquila theme.
 *
 * @package Aquila
 */


function aquila_enqueue_scripts()
{
    // Register main stylesheet and JavaScript file
    // wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');
    wp_register_style('style-css', get_stylesheet_uri());
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], '1.0.0', true);

    // Enqueue styles and scripts
    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
