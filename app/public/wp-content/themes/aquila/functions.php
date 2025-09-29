<?php

/**
 * Functions for the Aquila theme.
 *
 * @package Aquila
 */


function aquila_enqueue_scripts()
{
    // wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
