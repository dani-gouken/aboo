<?php

/**
 * Enqueue scripts and styles.
 */
function aboo_scripts()
{
    aboo_load_style([
        "bootstrap.min.css",
        "bootstrap.min.css.map",
        "paper-kit.min.css",
        "paper-kit.css.map",
        "custom.css",
    ]);

    aboo_load_js([
        "core/jquery.min.js",
        "core/popper.min.js",
        "core/bootstrap.min.js",
        "plugins/bootstrap-switch.js",
        "plugins/nouislider.min.js",
        "plugins/moment.min.js",
        "plugins/bootstrap-tagsinput.js",
        "plugins/bootstrap-selectpicker.js",
        "plugins/bootstrap-datetimepicker.js",
        "plugins/photo_swipe/photoswipe.min.js",
        "plugins/photo_swipe/photoswipe-ui-default.js",
        "plugins/photo_swipe/init-gallery.js",
        "plugins/jasny-bootstrap.min.js",
        "paper-kit.js",
        "plugins/presentation-page/main.js",
    ]);
}
add_action('wp_enqueue_scripts', 'aboo_scripts');


if (!function_exists("is_js_in_header")) {
    function is_js_in_header(string $path): bool
    {
        return in_array($path, [
            "core/jquery.min.js"
        ]);
    }
}

if (!function_exists("aboo_load_style")) {
    function aboo_load_style(array $files)
    {
        foreach ($files as $file) {
            wp_register_style($file, aboo_uri("resources/assets/css/" . $file, array(), _ABOO_VERSION));
            wp_enqueue_style($file);
        }
        wp_register_style(
            "g-font",
            "https://fonts.googleapis.com/css?family=Montserrat:400,700,200",
            false
        );
        wp_enqueue_style("g-font");
    }
}
if (!function_exists("aboo_load_js")) {
    function aboo_load_js(array $files)
    {
        foreach ($files as $file) {
            wp_register_script(
                $file,
                aboo_uri("resources/assets/js/" . $file,),
                array(),
                _ABOO_VERSION,
                !is_js_in_header($file)
            );
            wp_enqueue_script($file);
        }
    }
}
