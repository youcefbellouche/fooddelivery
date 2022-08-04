<?php

/**
 * Define Constants
 */

define( 'FD_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'FD_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'FD_THEME_DIR_URL', trailingslashit( get_template_directory_uri() ) );
define( 'FD_STYLESHEET_DIR', trailingslashit( get_stylesheet_directory() ) );
define( 'FD_STYLESHEET_DIR_URL', trailingslashit( get_stylesheet_directory_uri() ) );

/**
 * Composer Vendor
 * 
 */
require_once FD_THEME_DIR . 'vendor/autoload.php';

