<?php
function aboo_setup_add_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //support pour HTML 5
    add_theme_support(
        'html5',
        array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
            'style', 'script',
        )
    );
    //logo éditable
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250, 'width' => 250,
            'flex-width' => true, 'flex-height' => true
        )
    );
    add_theme_support('menus');
}
function remove_guttenberg_from_pages()
{
    remove_post_type_support('page', 'editor');
}

function aboo_setup_register_menus()
{
    register_nav_menus(
        array(
            'menu-header' => esc_html__('Header', 'aboo'),
            'menu-footer' => esc_html__('Footer', 'aboo'),
        )
    );
}


if (!function_exists('aboo_setup')) :
    function aboo_setup()
    {
        aboo_setup_add_theme_support();
        aboo_setup_register_menus();
        add_filter('use_block_editor_for_post', '__return_false', 10);
        load_theme_textdomain('aboo', get_template_directory() . '/languages');
    }
endif;
add_action('after_setup_theme', 'aboo_setup');
