<?php

//CSSとJSの読み込み

function register_stylesheet() {
  wp_register_style('reset', get_template_directory_uri().'/css/reset.css');

  wp_register_style('style', get_template_directory_uri().'/style.css');
}

function add_stylesheet() {
  register_stylesheet();
  wp_enqueue_style('reset', '', array(), '1.0', false);
  wp_enqueue_style('style', '', array(), '1.0', false);
}

add_action('wp_enqueue_scripts', 'add_stylesheet');

$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );