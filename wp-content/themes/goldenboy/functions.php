<?php
require_once ABSPATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(ABSPATH);
$dotenv->load();

function goldenboy_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post_thumbnails');
}

add_action('after_setup_theme', 'goldenboy_theme_support');

function goldenboy_register_styles() {
  $version = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'goldenboy', 
    get_template_directory_uri() . '/style.css', 
    array(), 
    $version, 
    'all'
  );
}

add_action('wp_enqueue_scripts', 'goldenboy_register_styles');

function goldenboy_register_scripts() {
  wp_enqueue_script(
    'goldenboy',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    '1.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'goldenboy_register_scripts');

function goldenboy_enqueue_scripts() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'goldenboy_enqueue_scripts');

function my_acf_google_map_api( $api ){
  $api['key'] = esc_attr($_ENV['GOOGLE_MAPS_API_KEY']);
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');