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

function goldenboy_menus() {
  $locations = array(
    'primary' => 'Desktop Top',
    'footer' => 'Footer Bottom'
  );

  register_nav_menus($locations);
}

add_action('init', 'goldenboy_menus');

function goldenboy_enqueue_scripts() {
  // CSS
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('goldenboy-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');

  // JS
  wp_enqueue_script('jquery');
  wp_enqueue_script('goldenboy-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

  // AOS
  wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
  wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '2.3.1', true);
}
add_action('wp_enqueue_scripts', 'goldenboy_enqueue_scripts');

function my_acf_google_map_api( $api ){
  $api['key'] = esc_attr($_ENV['GOOGLE_MAPS_API_KEY']);
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');