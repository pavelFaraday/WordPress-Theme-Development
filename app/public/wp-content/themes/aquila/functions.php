<?php

/**
 * Functions for the Aquila theme.
 *
 * @package Aquila
 */

if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();


spl_autoload_register('AQUILA_THEME\Inc\Helpers\autoloader');
