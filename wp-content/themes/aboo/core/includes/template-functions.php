<?php
function aboo_body_classes($classes)
{
    $classes[] = 'index-page sidebar-collapse';
    return $classes;
}
add_filter('body_class', 'aboo_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function aboo_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'aboo_pingback_header');

function aboo_time_ago_function($date)
{
    return sprintf(esc_html__('%s ago', 'textdomain'), human_time_diff(strtotime($date), time()));
}
add_filter('get_the_date', 'aboo_time_ago_function');
