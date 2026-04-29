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

function mirrorcraft_disable_emojis_tinymce($plugins) {
  if (!is_array($plugins)) {
    return array();
  }

  return array_diff($plugins, array('wpemoji'));
}

function mirrorcraft_disable_emojis() {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

  add_filter('tiny_mce_plugins', 'mirrorcraft_disable_emojis_tinymce');
  add_filter('emoji_svg_url', '__return_false');
}
add_action('init', 'mirrorcraft_disable_emojis');
