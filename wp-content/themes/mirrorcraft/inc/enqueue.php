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

function mirrorcraft_get_critical_css_contents() {
  static $critical_css = null;

  if ($critical_css !== null) {
    return $critical_css;
  }

  $critical_path = get_template_directory() . '/assets/css/critical.css';

  if (!file_exists($critical_path)) {
    $critical_css = '';
    return $critical_css;
  }

  $critical_css = (string) file_get_contents($critical_path);

  if ($critical_css === '') {
    return $critical_css;
  }

  $critical_css = preg_replace('!/\*[^*]*\*+([^/*][^*]*\*+)*/!', '', $critical_css);
  $critical_css = preg_replace('/\s+/', ' ', $critical_css);
  $critical_css = trim((string) $critical_css);

  return $critical_css;
}

function mirrorcraft_print_inline_critical_css() {
  if (is_admin()) {
    return;
  }

  $critical_css = mirrorcraft_get_critical_css_contents();

  if ($critical_css === '') {
    return;
  }

  echo "<style id='mirrorcraft-critical-inline'>{$critical_css}</style>\n";
}
add_action('wp_head', 'mirrorcraft_print_inline_critical_css', 20);

function mirrorcraft_async_main_style_tag($html, $handle, $href, $media) {
  if ('mirrorcraft-main' !== $handle) {
    return $html;
  }

  $media = $media && 'all' !== $media ? $media : 'all';

  return sprintf(
    '<link rel="preload" as="style" href="%1$s" media="%2$s" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n" .
    '<noscript><link rel="stylesheet" id="mirrorcraft-main-css" href="%1$s" media="%2$s"></noscript>' . "\n",
    esc_url($href),
    esc_attr($media)
  );
}
add_filter('style_loader_tag', 'mirrorcraft_async_main_style_tag', 10, 4);

function mirrorcraft_mark_home_lcp_preload_high_priority($resources) {
  if (!is_front_page() || !is_array($resources)) {
    return $resources;
  }

  $hero_sources = function_exists('mirrorcraft_get_home_hero_background_sources')
    ? mirrorcraft_get_home_hero_background_sources()
    : array();

  $hero_candidates = array_filter(
    array(
      $hero_sources['desktop'] ?? '',
      $hero_sources['mobile'] ?? '',
      function_exists('mirrorcraft_get_active_hero_image_url') ? mirrorcraft_get_active_hero_image_url() : '',
    )
  );

  if (empty($hero_candidates)) {
    return $resources;
  }

  foreach ($resources as &$resource) {
    if (!is_array($resource)) {
      continue;
    }

    if (($resource['as'] ?? '') !== 'image') {
      continue;
    }

    $href = (string) ($resource['href'] ?? '');

    if ($href === '' || !in_array($href, $hero_candidates, true)) {
      continue;
    }

    $resource['fetchpriority'] = 'high';
  }
  unset($resource);

  return $resources;
}
add_filter('wp_preload_resources', 'mirrorcraft_mark_home_lcp_preload_high_priority', 20);

function mirrorcraft_preload_hero_scene() {
  $hero_scene_url = '';
  $hero_scene_srcset = '';

  if (is_front_page()) {
    return;
  } elseif (is_page_template('page-templates/page-products.php') && function_exists('mirrorcraft_theme_image_optimized_url')) {
    $hero_scene_url = mirrorcraft_theme_image_optimized_url('real-estate-bathroom-mirror.png');

    if ($hero_scene_url === '') {
      $hero_scene_url = mirrorcraft_theme_image_optimized_url('residential-led-bathroom-mirror.png');
    }

    if ($hero_scene_url === '') {
      $hero_scene_url = mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png');
    }
  } elseif (is_page_template('page-templates/page-about.php') && function_exists('mirrorcraft_theme_image_optimized_url')) {
    $hero_scene_url = mirrorcraft_theme_image_optimized_url('home-hero-banner-20260422.png');

    if ($hero_scene_url === '') {
      $hero_scene_url = mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png');
    }
  }

  if (!$hero_scene_url) {
    return;
  }

  echo '<link rel="preload" as="image" href="' . esc_url($hero_scene_url) . '" imagesizes="100vw"';

  if ($hero_scene_srcset) {
    echo ' imagesrcset="' . esc_attr($hero_scene_srcset) . '"';
  }

  echo ' fetchpriority="high">' . "\n";
}
add_action('wp_head', 'mirrorcraft_preload_hero_scene', 2);

function mirrorcraft_disable_core_frontend_block_styles() {
  if (is_admin()) {
    return;
  }

  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('classic-theme-styles');
  wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'mirrorcraft_disable_core_frontend_block_styles', 100);

function mirrorcraft_disable_core_global_style_hooks() {
  if (is_admin()) {
    return;
  }

  remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
  remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
  remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('init', 'mirrorcraft_disable_core_global_style_hooks');

function mirrorcraft_disable_emoji_assets() {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('emoji_svg_url', '__return_false');

  add_filter(
    'tiny_mce_plugins',
    static function ($plugins) {
      if (!is_array($plugins)) {
        return array();
      }

      return array_values(array_diff($plugins, array('wpemoji')));
    }
  );
}
add_action('init', 'mirrorcraft_disable_emoji_assets');
