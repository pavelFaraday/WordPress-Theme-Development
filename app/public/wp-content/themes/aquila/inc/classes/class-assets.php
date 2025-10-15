<?php

/**
 * Enqueue assets: scripts and styles.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }

    public function setup_hooks()
    {
        // actions
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Register styles
        wp_register_style('style-css', get_stylesheet_uri());
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', []);
        // Enqueue styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }
    public function register_scripts()
    {
        // Register Scripts
        wp_register_script('main-js', AQUILA_DIR_URI . '/assets/main.js', [], '1.0.0', true);
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], '1.0.0', true);
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}
