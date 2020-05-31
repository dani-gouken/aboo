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
if (!function_exists("aboo_get_taxonomy_by_post_type")) {
    function aboo_get_taxonomy_by_post_type(string $post_type)
    {
        if ($post_type == "post") {
            return "category";
        }
        return $post_type . "_category";
    }
}

// setup the theme
aboo_include("/includes/class-wp-bootstrap-navwalker.php");
aboo_include("setup.php");
