<?php

function mirrorcraft_get_core_pages_config() {
  $pages = array(
    'home' => array(
      'title'    => __('Home', 'mirrorcraft'),
      'template' => '',
    ),
    'about' => array(
      'title'    => __('About', 'mirrorcraft'),
      'template' => 'page-templates/page-about.php',
    ),
    'products' => array(
      'title'    => __('Products', 'mirrorcraft'),
      'template' => 'page-templates/page-products.php',
    ),
    'applications' => array(
      'title'    => __('Applications', 'mirrorcraft'),
      'template' => 'page-templates/page-applications.php',
    ),
    'contact' => array(
      'title'    => __('Contact', 'mirrorcraft'),
      'template' => 'page-templates/page-contact.php',
    ),
    'blog' => array(
      'title'    => __('Blog', 'mirrorcraft'),
      'template' => '',
    ),
  );

  foreach (mirrorcraft_get_about_submenu_pages() as $slug => $page) {
    $pages[$slug] = array(
      'title'    => $page['title'],
      'slug'     => $slug,
      'path'     => $page['path'],
      'parent'   => 'about',
      'template' => $page['template'],
    );
  }

  foreach (mirrorcraft_get_application_submenu_pages() as $slug => $page) {
    $pages[$slug] = array(
      'title'    => $page['title'],
      'slug'     => $slug,
      'path'     => $page['path'],
      'parent'   => 'applications',
      'template' => $page['template'],
    );
  }

  foreach (mirrorcraft_get_product_category_pages() as $slug => $category) {
    $pages[$slug] = array(
      'title'    => $category['title'],
      'slug'     => $slug,
      'path'     => $category['path'],
      'parent'   => 'products',
      'template' => 'page-templates/page-product-category.php',
    );
  }

  return $pages;
}

function mirrorcraft_ensure_page($slug, $args, $page_ids = array()) {
  $path = !empty($args['path']) ? trim((string) $args['path'], '/') : $slug;
  $page_slug = !empty($args['slug']) ? sanitize_title((string) $args['slug']) : basename($path);
  $page = get_page_by_path($path);

  if (!$page instanceof WP_Post && $page_slug !== $path) {
    $page = get_page_by_path($page_slug);
  }

  $parent_id = 0;

  if (!empty($args['parent'])) {
    if (isset($page_ids[$args['parent']])) {
      $parent_id = (int) $page_ids[$args['parent']];
    } else {
      $parent_page = get_page_by_path((string) $args['parent']);
      $parent_id = $parent_page instanceof WP_Post ? (int) $parent_page->ID : 0;
    }
  }

  $page_data = array(
    'post_title'   => $args['title'],
    'post_name'    => $page_slug,
    'post_type'    => 'page',
    'post_status'  => 'publish',
    'post_content' => isset($args['content']) ? $args['content'] : '',
    'post_parent'  => $parent_id,
  );

  if ($page instanceof WP_Post) {
    $page_id = (int) $page->ID;

    if ('publish' !== $page->post_status || (int) $page->post_parent !== $parent_id) {
      wp_update_post(
        array(
          'ID'          => $page_id,
          'post_status' => 'publish',
          'post_parent' => $parent_id,
        )
      );
    }
  } else {
    $page_id = wp_insert_post($page_data);

    if (is_wp_error($page_id) || !$page_id) {
      return 0;
    }
  }

  if (!empty($args['template'])) {
    update_post_meta($page_id, '_wp_page_template', $args['template']);
  }

  return (int) $page_id;
}

function mirrorcraft_assign_primary_menu($page_ids) {
  $locations = get_nav_menu_locations();
  $menu_id = !empty($locations['primary']) ? (int) $locations['primary'] : 0;

  if (!$menu_id) {
    $menu_name = __('Primary Menu', 'mirrorcraft');
    $menu = wp_get_nav_menu_object($menu_name);
    $menu_id = $menu ? (int) $menu->term_id : (int) wp_create_nav_menu($menu_name);
  }

  if (!$menu_id) {
    return;
  }

  $menu_items = wp_get_nav_menu_items($menu_id);
  $menu_items = is_array($menu_items) ? $menu_items : array();

  if (empty($locations['primary'])) {
    $slugs = array('home', 'about', 'products', 'applications', 'contact');

    foreach ($slugs as $slug) {
      if (empty($page_ids[$slug])) {
        continue;
      }

      wp_update_nav_menu_item(
        $menu_id,
        0,
        array(
          'menu-item-object-id' => $page_ids[$slug],
          'menu-item-object'    => 'page',
          'menu-item-type'      => 'post_type',
          'menu-item-status'    => 'publish',
        )
      );
    }

    $locations['primary'] = $menu_id;
    set_theme_mod('nav_menu_locations', $locations);

    $menu_items = wp_get_nav_menu_items($menu_id);
    $menu_items = is_array($menu_items) ? $menu_items : array();
  }

  mirrorcraft_ensure_about_submenu_items($menu_id, $page_ids, $menu_items);
  mirrorcraft_ensure_applications_submenu_items($menu_id, $page_ids, $menu_items);
  mirrorcraft_ensure_products_submenu_items($menu_id, $page_ids, $menu_items);
}

function mirrorcraft_ensure_about_submenu_items($menu_id, $page_ids, $menu_items = array()) {
  $about_parent_id = 0;
  $about_page_id = !empty($page_ids['about']) ? (int) $page_ids['about'] : 0;
  $about_url = untrailingslashit(home_url('/about'));

  foreach ((array) $menu_items as $item) {
    $is_about_page = $about_page_id && (int) $item->object_id === $about_page_id;
    $is_about_title = strtolower(trim((string) $item->title)) === 'about';
    $is_about_url = untrailingslashit((string) $item->url) === $about_url;

    if ((int) $item->menu_item_parent === 0 && ($is_about_page || $is_about_title || $is_about_url)) {
      $about_parent_id = (int) $item->ID;
      break;
    }
  }

  if (!$about_parent_id) {
    return;
  }

  foreach (mirrorcraft_get_about_submenu_items() as $submenu_item) {
    $exists = false;

    foreach ((array) $menu_items as $item) {
      if ((int) $item->menu_item_parent !== $about_parent_id) {
        continue;
      }

      if (trim((string) $item->title) === $submenu_item['label']) {
        $exists = true;

        if (untrailingslashit((string) $item->url) !== untrailingslashit($submenu_item['url'])) {
          wp_update_nav_menu_item(
            $menu_id,
            $item->ID,
            array(
              'menu-item-title'     => $submenu_item['label'],
              'menu-item-url'       => $submenu_item['url'],
              'menu-item-type'      => 'custom',
              'menu-item-status'    => 'publish',
              'menu-item-parent-id' => $about_parent_id,
            )
          );
        }

        break;
      }
    }

    if ($exists) {
      continue;
    }

    wp_update_nav_menu_item(
      $menu_id,
      0,
      array(
        'menu-item-title'     => $submenu_item['label'],
        'menu-item-url'       => $submenu_item['url'],
        'menu-item-type'      => 'custom',
        'menu-item-status'    => 'publish',
        'menu-item-parent-id' => $about_parent_id,
      )
    );
  }
}

function mirrorcraft_ensure_products_submenu_items($menu_id, $page_ids, $menu_items = array()) {
  $products_parent_id = 0;
  $products_page_id = !empty($page_ids['products']) ? (int) $page_ids['products'] : 0;
  $products_url = untrailingslashit(home_url('/products'));

  foreach ((array) $menu_items as $item) {
    $is_products_page = $products_page_id && (int) $item->object_id === $products_page_id;
    $is_products_title = strtolower(trim((string) $item->title)) === 'products';
    $is_products_url = untrailingslashit((string) $item->url) === $products_url;

    if ((int) $item->menu_item_parent === 0 && ($is_products_page || $is_products_title || $is_products_url)) {
      $products_parent_id = (int) $item->ID;
      break;
    }
  }

  if (!$products_parent_id) {
    return;
  }

  foreach (mirrorcraft_get_products_submenu_items() as $submenu_item) {
    $exists = false;
    $submenu_url = untrailingslashit($submenu_item['url']);
    $legacy_submenu_url = '/products/decorative-mirrors' === wp_parse_url($submenu_url, PHP_URL_PATH)
      ? untrailingslashit(home_url('/products/framed-mirrors'))
      : '';

    foreach ((array) $menu_items as $item) {
      if ((int) $item->menu_item_parent !== $products_parent_id) {
        continue;
      }

      $item_title = trim((string) $item->title);
      $item_url = untrailingslashit((string) $item->url);

      if (
        $item_title === $submenu_item['label']
        || $item_url === $submenu_url
        || ($legacy_submenu_url && $item_url === $legacy_submenu_url)
      ) {
        $exists = true;

        if ($item_url !== $submenu_url || $item_title !== $submenu_item['label']) {
          wp_update_nav_menu_item(
            $menu_id,
            $item->ID,
            array(
              'menu-item-title'     => $submenu_item['label'],
              'menu-item-url'       => $submenu_item['url'],
              'menu-item-type'      => 'custom',
              'menu-item-status'    => 'publish',
              'menu-item-parent-id' => $products_parent_id,
            )
          );
        }

        break;
      }
    }

    if ($exists) {
      continue;
    }

    wp_update_nav_menu_item(
      $menu_id,
      0,
      array(
        'menu-item-title'     => $submenu_item['label'],
        'menu-item-url'       => $submenu_item['url'],
        'menu-item-type'      => 'custom',
        'menu-item-status'    => 'publish',
        'menu-item-parent-id' => $products_parent_id,
      )
    );
  }
}

function mirrorcraft_ensure_applications_submenu_items($menu_id, $page_ids, $menu_items = array()) {
  $applications_parent_id = 0;
  $applications_page_id = !empty($page_ids['applications']) ? (int) $page_ids['applications'] : 0;
  $applications_url = untrailingslashit(home_url('/applications'));

  foreach ((array) $menu_items as $item) {
    $is_applications_page = $applications_page_id && (int) $item->object_id === $applications_page_id;
    $is_applications_title = strtolower(trim((string) $item->title)) === 'applications';
    $is_applications_url = untrailingslashit((string) $item->url) === $applications_url;

    if ((int) $item->menu_item_parent === 0 && ($is_applications_page || $is_applications_title || $is_applications_url)) {
      $applications_parent_id = (int) $item->ID;
      break;
    }
  }

  if (!$applications_parent_id) {
    return;
  }

  foreach (mirrorcraft_get_applications_submenu_items() as $submenu_item) {
    $exists = false;

    foreach ((array) $menu_items as $item) {
      if ((int) $item->menu_item_parent !== $applications_parent_id) {
        continue;
      }

      if (trim((string) $item->title) === $submenu_item['label']) {
        $exists = true;

        if (untrailingslashit((string) $item->url) !== untrailingslashit($submenu_item['url'])) {
          wp_update_nav_menu_item(
            $menu_id,
            $item->ID,
            array(
              'menu-item-title'     => $submenu_item['label'],
              'menu-item-url'       => $submenu_item['url'],
              'menu-item-type'      => 'custom',
              'menu-item-status'    => 'publish',
              'menu-item-parent-id' => $applications_parent_id,
            )
          );
        }

        break;
      }
    }

    if ($exists) {
      continue;
    }

    wp_update_nav_menu_item(
      $menu_id,
      0,
      array(
        'menu-item-title'     => $submenu_item['label'],
        'menu-item-url'       => $submenu_item['url'],
        'menu-item-type'      => 'custom',
        'menu-item-status'    => 'publish',
        'menu-item-parent-id' => $applications_parent_id,
      )
    );
  }
}

function mirrorcraft_remove_obsolete_led_mirrors_page() {
  foreach (array('products/led-mirrors', 'led-mirrors') as $path) {
    $page = get_page_by_path($path);

    if ($page instanceof WP_Post && 'trash' !== $page->post_status) {
      wp_trash_post($page->ID);
    }
  }
}

function mirrorcraft_remove_obsolete_led_mirrors_menu_items($menu_id) {
  if (!$menu_id) {
    return;
  }

  $menu_items = wp_get_nav_menu_items($menu_id);
  $menu_items = is_array($menu_items) ? $menu_items : array();
  $obsolete_paths = array(
    untrailingslashit(home_url('/products/led-mirrors')),
    untrailingslashit(home_url('/led-mirrors')),
  );

  foreach ($menu_items as $item) {
    $item_title = trim((string) $item->title);
    $item_url = untrailingslashit((string) $item->url);

    if ($item_title === 'LED Mirrors' || in_array($item_url, $obsolete_paths, true)) {
      wp_delete_post($item->ID, true);
    }
  }
}

function mirrorcraft_bootstrap_site() {
  static $did_run = false;

  if ($did_run || wp_installing()) {
    return;
  }

  $did_run = true;

  $version = '2026-04-15-decorative-mirrors-link-update';
  if (get_option('mirrorcraft_bootstrap_version') === $version) {
    return;
  }

  $page_ids = array();

  foreach (mirrorcraft_get_core_pages_config() as $slug => $config) {
    $page_id = mirrorcraft_ensure_page($slug, $config, $page_ids);

    if ($page_id) {
      $page_ids[$slug] = $page_id;
    }
  }

  if (!empty($page_ids['home'])) {
    update_option('show_on_front', 'page');
    update_option('page_on_front', $page_ids['home']);
  }

  if (!empty($page_ids['blog'])) {
    update_option('page_for_posts', $page_ids['blog']);
  }

  mirrorcraft_assign_primary_menu($page_ids);
  $locations = get_nav_menu_locations();
  $primary_menu_id = !empty($locations['primary']) ? (int) $locations['primary'] : 0;

  mirrorcraft_remove_obsolete_led_mirrors_page();
  mirrorcraft_remove_obsolete_led_mirrors_menu_items($primary_menu_id);

  update_option('mirrorcraft_bootstrap_version', $version);
}
add_action('after_switch_theme', 'mirrorcraft_bootstrap_site');
add_action('init', 'mirrorcraft_bootstrap_site', 20);
