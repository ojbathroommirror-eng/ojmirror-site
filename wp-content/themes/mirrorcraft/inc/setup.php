<?php

function mirrorcraft_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support(
    'custom-logo',
    array(
      'height'      => 120,
      'width'       => 320,
      'flex-height' => true,
      'flex-width'  => true,
    )
  );
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'mirrorcraft'),
      'footer'  => __('Footer Menu', 'mirrorcraft'),
    )
  );
}
add_action('after_setup_theme', 'mirrorcraft_setup');

function mirrorcraft_body_classes($classes) {
  if (is_front_page()) {
    $classes[] = 'is-front-page';
  }

  return $classes;
}
add_filter('body_class', 'mirrorcraft_body_classes');
