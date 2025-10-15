<?php

/**
 * 
 * Theme Class
 * @package Aquila
 * 
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;
    protected function __construct()
    {
        // load class.
        Assets::get_instance();

        // load class.
        $this->setup_hooks();
    }

    public function setup_hooks()
    {
        // actions
    }
}
