<?php

/**
 * Functions for the Aquila theme.
 *
 * @package Aquila
 */

if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}


require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();


spl_autoload_register('AQUILA_THEME\Inc\Helpers\autoloader');

function aquila_enqueue_scripts()
{
    // Register styles
    wp_register_style('style-css', get_stylesheet_uri());
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', []);
    // Register Scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], '1.0.0', true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], '1.0.0', true);

    // Enqueue styles and scripts
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
