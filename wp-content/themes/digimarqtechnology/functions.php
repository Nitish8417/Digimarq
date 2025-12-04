<?php

/**
 * Theme Functions.
 */
function digimarqtechnology_enqueue_scripts()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));
    wp_register_style('header', get_template_directory_uri() . '/assets/css/header.css', [], filemtime(get_template_directory() . '/assets/css/header.css'));
   

    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', [], filemtime(get_template_directory() . '/assets/css/responsive.css'));



    wp_enqueue_style('main');
    wp_enqueue_style('header');
  
    wp_enqueue_style('responsive');


    // Enqueue JavaScript
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/main.js'), true);
    
}
add_action('wp_enqueue_scripts', 'digimarqtechnology_enqueue_scripts');


function enqueue_swiper_assets() {
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', [], null, true);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', [], null);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');







register_nav_menus(
    array('primary-menu' => 'Custom Navigation Menu')
);

function register_footer_menus()
{
    register_nav_menus(array(
        'footer_menu_1' => __('Footer Menu 1', 'digimarqtechnology'),
        'footer_menu_2' => __('Footer Menu 2', 'digimarqtechnology'),
        'footer_menu_3' => __('Footer Menu 3', 'digimarqtechnology'),
        'footer_menu_4' => __('Footer Menu 4', 'digimarqtechnology'),
    ));
}
add_action('init', 'register_footer_menus');


// Adding Custom Logo support to your Theme
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

// SVG Support in wordpresss
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


//Upload SVG Files
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}


function create_Leadership_post_type()
{
    $labels = array(
        'name'               => _x('Leadership', 'post type general name', 'digimarqtechnology'),
        'singular_name'      => _x('Leadership', 'post type singular name', 'digimarqtechnology'),
        'menu_name'          => _x('Leadership', 'admin menu', 'digimarqtechnology'),
        'name_admin_bar'     => _x('Leadership', 'add new on admin bar', 'digimarqtechnology'),
        'add_new'            => _x('Add New', 'Leadership', 'digimarqtechnology'),
        'add_new_item'       => __('Add New Leadership', 'digimarqtechnology'),
        'new_item'           => __('New Leadership', 'digimarqtechnology'),
        'edit_item'          => __('Edit Leadership', 'digimarqtechnology'),
        'view_item'          => __('View Leadership', 'digimarqtechnology'),
        'all_items'          => __('All Leadership', 'digimarqtechnology'),
        'search_items'       => __('Search Leadership', 'digimarqtechnology'),
        'parent_item_colon'  => __('Parent Leadership:', 'digimarqtechnology'),
        'not_found'          => __('No Leadership found.', 'digimarqtechnology'),
        'not_found_in_trash' => __('No Leadership found in Trash.', 'digimarqtechnology')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('A custom post type for Leadership articles.', 'digimarqtechnology'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'query_var'          => true,
        'menu_icon'           => 'dashicons-book',
        'rewrite'            => array('slug' => 'Leadership'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('Leadership', $args);
}

add_action('init', 'create_Leadership_post_type');




function create_services_post_type()
{
    $labels = array(
        'name'               => _x('Services', 'post type general name', 'digimarqtechnology'),
        'singular_name'      => _x('Services', 'post type singular name', 'digimarqtechnology'),
        'menu_name'          => _x('Services', 'admin menu', 'digimarqtechnology'),
        'name_admin_bar'     => _x('Services', 'add service on admin bar', 'digimarqtechnology'),
        'add_new'            => _x('Add New', 'services', 'digimarqtechnology'),
        'add_new_item'       => __('Add New Services', 'digimarqtechnology'),
        'new_item'           => __('New Services', 'digimarqtechnology'),
        'edit_item'          => __('Edit Services', 'digimarqtechnology'),
        'view_item'          => __('View Services', 'digimarqtechnology'),
        'all_items'          => __('All Services', 'digimarqtechnology'),
        'search_items'       => __('Search Services', 'digimarqtechnology'),
        'parent_item_colon'  => __('Parent Services:', 'digimarqtechnology'),
        'not_found'          => __('No services found.', 'digimarqtechnology'),
        'not_found_in_trash' => __('No services found in Trash.', 'digimarqtechnology')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('A custom post type for services articles.', 'digimarqtechnology'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'           => 'dashicons-book',
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('services', $args);
}

add_action('init', 'create_services_post_type');


function digimarqtechnology_mega_menu_card_markup($item_output, $item, $depth, $args)
{
    if (
        empty($args->theme_location) ||
        'primary-menu' !== $args->theme_location ||
        0 === $depth
    ) {
        return $item_output;
    }

    $title = apply_filters('the_title', $item->title, $item->ID);
    $description = wp_strip_all_tags($item->description);
    $thumb_markup = '';

    if ('services' === $item->object && $item->object_id) {
        if (has_post_thumbnail($item->object_id)) {
            $thumb_markup = get_the_post_thumbnail(
                $item->object_id,
                'medium',
                array(
                    'class' => 'mega-menu-card__image',
                    'loading' => 'lazy',
                    'alt' => esc_attr($title)
                )
            );
        }

        if (empty($description)) {
            $description = get_post_field('post_excerpt', $item->object_id);
        }

        if (empty($description)) {
            $description = wp_trim_words(
                wp_strip_all_tags(get_post_field('post_content', $item->object_id)),
                22,
                '…'
            );
        }
    }

    if (empty($thumb_markup)) {
        $thumb_markup = '<span class="mega-menu-card__image mega-menu-card__image--placeholder" aria-hidden="true"></span>';
    }

    if (empty($description)) {
        $description = __('Tailored solutions designed for measurable impact.', 'digimarqtechnology');
    }

    $atts = array(
        'href' => !empty($item->url) ? $item->url : '',
        'title' => !empty($item->attr_title) ? $item->attr_title : '',
        'target' => !empty($item->target) ? $item->target : '',
        'rel' => !empty($item->xfn) ? $item->xfn : '',
        'class' => 'mega-menu-card'
    );

    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
    $attributes = '';

    foreach ($atts as $attr => $value) {
        if (!empty($value)) {
            $value = 'href' === $attr ? esc_url($value) : esc_attr($value);
            $attributes .= ' ' . $attr . '="' . $value . '"';
        }
    }

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= '<span class="mega-menu-card__media">' . $thumb_markup . '</span>';
    $item_output .= '<span class="mega-menu-card__body">';
    $item_output .= '<span class="mega-menu-card__title">' . esc_html($title) . '</span>';
    $item_output .= '<span class="mega-menu-card__description">' . wp_kses_post($description) . '</span>';
    $item_output .= '</span>';
    $item_output .= '</a>';
    $item_output .= $args->after;

    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'digimarqtechnology_mega_menu_card_markup', 10, 4);
