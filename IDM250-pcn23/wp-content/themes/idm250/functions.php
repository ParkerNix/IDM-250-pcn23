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
    wp_enqueue_styles('style.css', get_template_directory_uri() . '/styles/style.css');
}

add_action('wp_enqueue_styles', 'incude_css_files');

function include_js_files() {
    wp_enqueue_scripts('idm250-js', get_template_directory_uri() . '/scripts/script.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'include_js_files');

function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu'
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');
?>