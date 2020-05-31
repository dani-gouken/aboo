<?php
// Register Custom Taxonomy
function aboo_custom_taxonomy()
{

    $labels = array(
        'name'                       => _x('Institution Categories', 'Taxonomy General Name', 'aboo'),
        'singular_name'              => _x('Institution Category', 'Taxonomy Singular Name', 'aboo'),
        'menu_name'                  => __('Categories', 'aboo'),
        'all_items'                  => __('All Items', 'aboo'),
        'parent_item'                => __('Parent Item', 'aboo'),
        'parent_item_colon'          => __('Parent Item:', 'aboo'),
        'new_item_name'              => __('New Item Name', 'aboo'),
        'add_new_item'               => __('Add New Item', 'aboo'),
        'edit_item'                  => __('Edit Item', 'aboo'),
        'update_item'                => __('Update Item', 'aboo'),
        'view_item'                  => __('View Item', 'aboo'),
        'separate_items_with_commas' => __('Separate items with commas', 'aboo'),
        'add_or_remove_items'        => __('Add or remove items', 'aboo'),
        'choose_from_most_used'      => __('Choose from the most used', 'aboo'),
        'popular_items'              => __('Popular Items', 'aboo'),
        'search_items'               => __('Search Items', 'aboo'),
        'not_found'                  => __('Not Found', 'aboo'),
        'no_terms'                   => __('No items', 'aboo'),
        'items_list'                 => __('Items list', 'aboo'),
        'items_list_navigation'      => __('Items list navigation', 'aboo'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite' => array('slug' => 'institution-category'),
    );
    register_taxonomy('institution_category', array('institution'), $args);

    $labels = array(
        'name'                       => _x('service Categories', 'service Categories', 'aboo'),
        'singular_name'              => _x('service Category', 'Service Category', 'aboo'),
        'menu_name'                  => __('Categories', 'aboo'),
        'all_items'                  => __('All Items', 'aboo'),
        'parent_item'                => __('Parent Item', 'aboo'),
        'parent_item_colon'          => __('Parent Item:', 'aboo'),
        'new_item_name'              => __('New Item Name', 'aboo'),
        'add_new_item'               => __('Add New Item', 'aboo'),
        'edit_item'                  => __('Edit Item', 'aboo'),
        'update_item'                => __('Update Item', 'aboo'),
        'view_item'                  => __('View Item', 'aboo'),
        'separate_items_with_commas' => __('Separate items with commas', 'aboo'),
        'add_or_remove_items'        => __('Add or remove items', 'aboo'),
        'choose_from_most_used'      => __('Choose from the most used', 'aboo'),
        'popular_items'              => __('Popular Items', 'aboo'),
        'search_items'               => __('Search Items', 'aboo'),
        'not_found'                  => __('Not Found', 'aboo'),
        'no_terms'                   => __('No items', 'aboo'),
        'items_list'                 => __('Items list', 'aboo'),
        'items_list_navigation'      => __('Items list navigation', 'aboo'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite' => array('slug' => 'service-category'),
    );
    register_taxonomy('service_category', array('service'), $args);

    $labels = array(
        'name'                       => _x('Document Categories', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Document Category', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Categories', 'text_domain'),
        'all_items'                  => __('All Items', 'text_domain'),
        'parent_item'                => __('Parent Item', 'text_domain'),
        'parent_item_colon'          => __('Parent Item:', 'text_domain'),
        'new_item_name'              => __('New Item Name', 'text_domain'),
        'add_new_item'               => __('Add New Item', 'text_domain'),
        'edit_item'                  => __('Edit Item', 'text_domain'),
        'update_item'                => __('Update Item', 'text_domain'),
        'view_item'                  => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Items', 'text_domain'),
        'search_items'               => __('Search Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite' => array('slug' => 'document-category'),
    );
    register_taxonomy('document_category', array('document'), $args);
}
add_action('init', 'aboo_custom_taxonomy', 0);
