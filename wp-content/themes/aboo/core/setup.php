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

// filter
function my_posts_where($where)
{

    $where = str_replace("meta_key = 'delivered_by_$", "meta_key LIKE 'delivered_by_%", $where);
    $where = str_replace("meta_key = 'document_required_$", "meta_key LIKE 'document_required_%", $where);
    return $where;
}

add_filter('posts_where', 'my_posts_where');
add_filter('pre_get_posts', 'my_get_posts');

function my_get_posts($query)
{

    if (is_home() && $query->is_main_query() || (is_date() && is_archive()))
        $query->set('post_type', array('post', 'service', 'institution', 'document'));

    return $query;
}

function aboo_pagination_links()
{
    global $wp_query;

    if (
        $wp_query->max_num_pages <= 1
    ) return;

    $big = 999999999; // need an unlikely integer
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ));
    if (is_array($pages)) {
        $current_page = get_query_var('paged');
        $paged = ($current_page == 0) ? 1 : $current_page;
        echo '<div class="text-center mx-auto pagination-area"><ul class="pagination pagination-success justify-content-center">';
        foreach ($pages as $page) {
            $active = strpos($page, "page-numbers current") > 0;
            if (!$active) {
                echo "<li class='page-item'>$page</li>";
            } else {
                echo "<li class='active page-item'>$page</li>";
            }
        }
        echo '</ul></div>';
    }
}
function prefix_modify_nav_menu_args($args)
{
    return array_merge($args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ));
}
add_filter('wp_nav_menu_args', 'prefix_modify_nav_menu_args');