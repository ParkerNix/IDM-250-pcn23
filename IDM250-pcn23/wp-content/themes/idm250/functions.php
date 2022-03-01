<?php
//Check Server PHP Version

if (version_compare('7.4', phpversion(), '>')) {
    die('Go download PHP 7.4 or greater, you flop.');
}

//Check PHP Version
if (version_compare($GLOBALS['wp_version'], '5.4.16', '<')){
    die('This WP theme only works in WordPress 5.4.2 or later, go upgrade you flop.');
}

function include_styles() {
    wp_enqueue_style('style.css', get_template_directory_uri() . '/styles/style.css');
}

add_action('wp_enqueue_scripts', 'include_styles');

function include_js_files() {
    wp_enqueue_script('idm250-js', get_template_directory_uri() . '/scripts/script.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'include_js_files');

function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu'
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');

function please_render_menu($menu_name) {
    if(!$menu_name) {
        return;
    }
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}

function add_post_thumbnails_support() {
    add_theme_support('post-thumnails');
}

add_action('after_setup_theme', 'add_post_thumbnails_support');

/**
 * Register Custom Post types
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */
function idm_register_custom_post_type()
{
    $args = [
        'label' => 'Project',
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project'
        ],
        'supports' => [
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats'
        ],
        // 'taxonomies'            => ['category', 'post_tag'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'projects'],
        // Dash Icons https://developer.wordpress.org/resource/dashicons/#media-audio
        'menu_icon' => 'dashicons-clipboard'
        // 'menu_icon'             => get_stylesheet_directory_uri() . '/static/images/icons/industries.png'
    ];

    register_post_type('idm-projects', $args);
}
add_action('init', 'idm_register_custom_post_type');

function idm_register_sidebars() {
    register_sidebar([
        'name' => 'Primary Sidebar',
        'id' => 'sidebar-primary',
    ]);

    register_sidebar([
        'name' => 'Secondary Sidebar',
        'id' => 'sidebar-secondary',
    ]);
}

add_action('widget_init', 'idm_register_sidebars');

?>