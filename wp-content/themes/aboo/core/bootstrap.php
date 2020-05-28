<?php

/**
 * Aboo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aboo
 */

if (!defined('_ABOO_VERSION')) {
    define('_ABOO_VERSION', '1.0.0');
}

if (!function_exists("aboo_include")) {
    function aboo_include(string $path)
    {
        require_once aboo_path($path);
    }
}

if (!function_exists("aboo_path")) {
    function aboo_path(string $path)
    {
        return get_template_directory() . "/core/" . $path;
    }
}
if (!function_exists("aboo_uri")) {
    function aboo_uri(string $path)
    {
        return get_template_directory_uri() . "/" . $path;
    }
}

// setup the theme
aboo_include("setup.php");
