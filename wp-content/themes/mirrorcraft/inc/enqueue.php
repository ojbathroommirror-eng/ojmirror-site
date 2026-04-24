<?php

function mirrorcraft_enqueue_assets() {
  $style_path = '/assets/css/main.css';
  $script_path = '/assets/js/main.js';

  wp_enqueue_style(
    'mirrorcraft-main',
    get_template_directory_uri() . $style_path,
    array(),
    mirrorcraft_asset_version($style_path)
  );

  wp_enqueue_script(
    'mirrorcraft-main',
    get_template_directory_uri() . $script_path,
    array(),
    mirrorcraft_asset_version($script_path),
    true
  );

  wp_script_add_data('mirrorcraft-main', 'strategy', 'defer');
}
add_action('wp_enqueue_scripts', 'mirrorcraft_enqueue_assets');

function mirrorcraft_preload_hero_scene() {
  if (!is_front_page()) {
    return;
  }

  $hero_sources = function_exists('mirrorcraft_get_home_hero_background_sources')
    ? mirrorcraft_get_home_hero_background_sources()
    : array();
  $hero_scene_url = $hero_sources['desktop'] ?? mirrorcraft_get_active_hero_image_url();
  $hero_scene_srcset = '';

  if (!$hero_scene_url) {
    return;
  }

  if (!empty($hero_sources['mobile']) && $hero_sources['mobile'] !== $hero_scene_url) {
    $hero_scene_srcset = $hero_sources['mobile'] . ' 768w, ' . $hero_scene_url . ' 1440w';
  }

  echo '<link rel="preload" as="image" href="' . esc_url($hero_scene_url) . '" imagesizes="100vw"';

  if ($hero_scene_srcset) {
    echo ' imagesrcset="' . esc_attr($hero_scene_srcset) . '"';
  }

  echo '>' . "\n";
}
add_action('wp_head', 'mirrorcraft_preload_hero_scene', 2);
