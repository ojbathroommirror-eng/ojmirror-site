<?php

function mirrorcraft_theme_image_url($filename) {
  $relative_path = '/assets/images/' . ltrim((string) $filename, '/');
  $absolute_path = get_template_directory() . $relative_path;

  if (!file_exists($absolute_path)) {
    return '';
  }

  return get_template_directory_uri() . $relative_path;
}

function mirrorcraft_theme_image_versioned_url($filename) {
  $filename = ltrim((string) $filename, '/');

  if ($filename === '') {
    return '';
  }

  $url = mirrorcraft_theme_image_url($filename);

  if ($url === '') {
    return '';
  }

  return add_query_arg(
    'ver',
    mirrorcraft_asset_version('/assets/images/' . $filename),
    $url
  );
}

function mirrorcraft_theme_image_first_available_url($filenames, $versioned = true) {
  foreach ((array) $filenames as $filename) {
    $filename = ltrim((string) $filename, '/');

    if ($filename === '') {
      continue;
    }

    $path_parts = pathinfo($filename);
    $dirname = !empty($path_parts['dirname']) && '.' !== $path_parts['dirname']
      ? trailingslashit($path_parts['dirname'])
      : '';
    $basename = $path_parts['filename'] ?? $filename;
    $extension = strtolower((string) ($path_parts['extension'] ?? ''));
    $candidates = array();

    if ($extension !== 'avif' && $extension !== 'webp') {
      $candidates[] = $dirname . $basename . '.avif';
      $candidates[] = $dirname . $basename . '.webp';
    }

    $candidates[] = $filename;

    foreach ($candidates as $candidate) {
      $url = $versioned
        ? mirrorcraft_theme_image_versioned_url($candidate)
        : mirrorcraft_theme_image_url($candidate);

      if ($url !== '') {
        return $url;
      }
    }
  }

  return '';
}

function mirrorcraft_theme_image_optimized_url($filename, $versioned = true) {
  $filename = ltrim((string) $filename, '/');

  if ($filename === '') {
    return '';
  }

  $path_parts = pathinfo($filename);
  $dirname = !empty($path_parts['dirname']) && '.' !== $path_parts['dirname']
    ? trailingslashit($path_parts['dirname'])
    : '';
  $basename = $path_parts['filename'] ?? $filename;
  $extension = strtolower((string) ($path_parts['extension'] ?? ''));

  $candidates = array();

  foreach (array('avif', 'webp') as $candidate_extension) {
    if ($candidate_extension === $extension) {
      continue;
    }

    $candidates[] = $dirname . $basename . '.' . $candidate_extension;
  }

  $candidates[] = $filename;

  return mirrorcraft_theme_image_first_available_url($candidates, $versioned);
}

function mirrorcraft_get_home_hero_background_sources() {
  $desktop = mirrorcraft_theme_image_first_available_url(
    array(
      'home-hero-banner-20260423c.webp',
      'home-hero-banner-20260423c.jpg',
      'home-hero-banner-20260422.webp',
    )
  );

  $mobile = mirrorcraft_theme_image_first_available_url(
    array(
      'home-hero-banner-20260423c-mobile.webp',
      'home-hero-banner-20260422-mobile.webp',
    )
  );

  if ($desktop === '') {
    $desktop = mirrorcraft_get_active_hero_image_url();
  }

  if ($mobile === '') {
    $mobile = $desktop;
  }

  return array(
    'desktop' => $desktop,
    'mobile'  => $mobile,
  );
}

function mirrorcraft_get_page_summary($post_id = 0, $fallback = '') {
  $post_id = $post_id ? (int) $post_id : (int) get_queried_object_id();

  if (!$post_id) {
    return $fallback;
  }

  $excerpt = trim((string) get_the_excerpt($post_id));

  if ($excerpt !== '') {
    return $excerpt;
  }

  $content = trim((string) get_post_field('post_content', $post_id));

  if ($content !== '') {
    return wp_trim_words(wp_strip_all_tags(strip_shortcodes($content)), 34, '...');
  }

  return $fallback;
}

function mirrorcraft_get_default_menu_items() {
  return array(
    array(
      'label' => __('Home', 'mirrorcraft'),
      'url'   => home_url('/'),
    ),
    array(
      'label' => __('About', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('about', '/about/'),
    ),
    array(
      'label' => __('Products', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('products', '/products/'),
    ),
    array(
      'label' => __('Applications', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('applications', '/applications/'),
    ),
    array(
      'label' => __('Contact', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('contact', '/contact/'),
    ),
  );
}

function mirrorcraft_get_core_page_blueprints() {
  $blueprints = array(
    array(
      'path'     => 'about',
      'title'    => __('About', 'mirrorcraft'),
      'template' => 'page-templates/page-about.php',
    ),
    array(
      'path'     => 'products',
      'title'    => __('Products', 'mirrorcraft'),
      'template' => 'page-templates/page-products.php',
    ),
    array(
      'path'     => 'applications',
      'title'    => __('Applications', 'mirrorcraft'),
      'template' => 'page-templates/page-applications.php',
    ),
    array(
      'path'     => 'manufacturing',
      'title'    => __('Manufacturing', 'mirrorcraft'),
      'template' => 'page-templates/page-manufacturing.php',
    ),
    array(
      'path'     => 'projects',
      'title'    => __('Projects', 'mirrorcraft'),
      'template' => 'page-templates/page-projects.php',
    ),
    array(
      'path'  => 'blog',
      'title' => __('Blog', 'mirrorcraft'),
    ),
    array(
      'path'     => 'resources',
      'title'    => __('Resources', 'mirrorcraft'),
      'template' => 'page-templates/page-resources.php',
    ),
    array(
      'path'     => 'faq',
      'title'    => __('FAQs', 'mirrorcraft'),
      'template' => 'page-templates/page-faqs.php',
    ),
    array(
      'path'     => 'contact',
      'title'    => __('Contact', 'mirrorcraft'),
      'template' => 'page-templates/page-contact.php',
    ),
    array(
      'path'     => 'privacy-policy',
      'title'    => __('Privacy Policy', 'mirrorcraft'),
      'template' => 'page-templates/page-privacy.php',
    ),
    array(
      'path'     => 'terms-and-conditions',
      'title'    => __('Terms and Conditions', 'mirrorcraft'),
      'template' => 'page-templates/page-terms.php',
    ),
  );

  foreach (array('projects', 'our-partners', 'technology', 'production-workshop', 'quality-control', 'video-blog', 'download-catalogue') as $slug) {
    $page = mirrorcraft_get_about_section_page_data($slug);

    if (empty($page['path']) || empty($page['title']) || empty($page['template'])) {
      continue;
    }

    $blueprints[] = array(
      'path'     => $page['path'],
      'title'    => $page['title'],
      'template' => $page['template'],
    );
  }

  foreach (mirrorcraft_get_product_category_pages() as $category) {
    $blueprints[] = array(
      'path'     => $category['path'],
      'title'    => $category['title'],
      'template' => 'page-templates/page-product-category.php',
    );
  }

  foreach (array_keys(mirrorcraft_get_application_submenu_pages()) as $slug) {
    $page = mirrorcraft_get_application_section_page_data($slug);

    if (empty($page['path']) || empty($page['title'])) {
      continue;
    }

    $blueprints[] = array(
      'path'     => $page['path'],
      'title'    => $page['title'],
      'template' => 'page-templates/page-application-section.php',
    );
  }

  return $blueprints;
}

function mirrorcraft_ensure_page_at_path($path, $title, $template = '') {
  $path = trim((string) $path, '/');
  $title = trim((string) $title);

  if ($path === '' || $title === '') {
    return 0;
  }

  $existing_page = get_page_by_path($path);

  if ($existing_page instanceof WP_Post) {
    $page_id = (int) $existing_page->ID;

    if ($template !== '') {
      $current_template = (string) get_post_meta($page_id, '_wp_page_template', true);

      if ($current_template !== $template) {
        update_post_meta($page_id, '_wp_page_template', $template);
      }
    }

    if ((string) $existing_page->post_title !== $title) {
      wp_update_post(
        array(
          'ID'         => $page_id,
          'post_title' => $title,
        )
      );
    }

    return $page_id;
  }

  $parent_id = 0;
  $segments = explode('/', $path);
  $slug = array_pop($segments);

  if (!empty($segments)) {
    $parent_path = implode('/', $segments);
    $parent_page = get_page_by_path($parent_path);

    if ($parent_page instanceof WP_Post) {
      $parent_id = (int) $parent_page->ID;
    }
  }

  $page_id = wp_insert_post(
    array(
      'post_type'      => 'page',
      'post_status'    => 'publish',
      'post_title'     => $title,
      'post_name'      => $slug,
      'post_parent'    => $parent_id,
      'comment_status' => 'closed',
    ),
    true
  );

  if (is_wp_error($page_id) || !$page_id) {
    return 0;
  }

  if ($template !== '') {
    update_post_meta($page_id, '_wp_page_template', $template);
  }

  return (int) $page_id;
}

function mirrorcraft_maybe_seed_core_pages() {
  if (!is_admin() || wp_doing_ajax() || !current_user_can('manage_options')) {
    return;
  }

  static $has_run = false;

  if ($has_run) {
    return;
  }

  $has_run = true;

  foreach (mirrorcraft_get_core_page_blueprints() as $blueprint) {
    mirrorcraft_ensure_page_at_path(
      $blueprint['path'] ?? '',
      $blueprint['title'] ?? '',
      $blueprint['template'] ?? ''
    );
  }
}
add_action('admin_init', 'mirrorcraft_maybe_seed_core_pages');

function mirrorcraft_normalize_request_path($path) {
  $path = trim((string) $path);

  if ($path === '') {
    return '';
  }

  $path = wp_parse_url($path, PHP_URL_PATH);
  $path = is_string($path) ? $path : '';

  if ($path === '') {
    return '';
  }

  $home_path = wp_parse_url(home_url('/'), PHP_URL_PATH);
  $home_path = is_string($home_path) ? trim($home_path, '/') : '';
  $normalized_path = trim($path, '/');

  if ($home_path !== '' && strpos($normalized_path, $home_path . '/') === 0) {
    $normalized_path = substr($normalized_path, strlen($home_path) + 1);
  } elseif ($home_path !== '' && $normalized_path === $home_path) {
    $normalized_path = '';
  }

  return trim($normalized_path, '/');
}

function mirrorcraft_maybe_seed_requested_core_page() {
  if (is_admin() || wp_doing_ajax() || (defined('REST_REQUEST') && REST_REQUEST)) {
    return;
  }

  $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash((string) $_SERVER['REQUEST_URI']) : '';
  $request_path = mirrorcraft_normalize_request_path($request_uri);

  if ($request_path === '') {
    return;
  }

  $requested_blueprint = null;

  foreach (mirrorcraft_get_core_page_blueprints() as $blueprint) {
    $blueprint_path = trim((string) ($blueprint['path'] ?? ''), '/');

    if ($blueprint_path !== '' && $blueprint_path === $request_path) {
      $requested_blueprint = $blueprint;
      break;
    }
  }

  if (!$requested_blueprint) {
    return;
  }

  mirrorcraft_ensure_page_at_path(
    $requested_blueprint['path'] ?? '',
    $requested_blueprint['title'] ?? '',
    $requested_blueprint['template'] ?? ''
  );
}
add_action('init', 'mirrorcraft_maybe_seed_requested_core_page', 20);

function mirrorcraft_get_header_about_submenu_items() {
  $items = array();

  foreach (mirrorcraft_get_about_submenu_items() as $item) {
    $key = (string) ($item['key'] ?? '');

    if (in_array($key, array('about', 'projects', 'blog'), true)) {
      continue;
    }

    $items[] = $item;
  }

  return $items;
}

function mirrorcraft_primary_nav_item_is_active($key) {
  $key = trim((string) $key);

  if ($key === '') {
    return false;
  }

  $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash((string) $_SERVER['REQUEST_URI']) : '';
  $request_path = mirrorcraft_normalize_request_path($request_uri);

  switch ($key) {
    case 'home':
      return is_front_page();

    case 'products':
      return 0 === strpos($request_path, 'products')
        || is_page_template('page-templates/page-products.php')
        || is_page_template('page-templates/page-product-category.php');

    case 'applications':
      return 0 === strpos($request_path, 'applications')
        || is_page_template('page-templates/page-applications.php')
        || is_page_template('page-templates/page-application-section.php');

    case 'projects':
      return 'projects' === $request_path
        || 0 === strpos($request_path, 'projects/')
        || 'about/projects' === $request_path
        || is_page_template('page-templates/page-projects.php');

    case 'about':
      return 'about' === $request_path
        || (0 === strpos($request_path, 'about/') && 'about/projects' !== $request_path)
        || is_page_template('page-templates/page-about.php')
        || is_page_template('page-templates/page-about-section.php');

    case 'blog':
      return is_home()
        || is_singular('post')
        || is_archive()
        || is_search()
        || 'blog' === $request_path
        || 0 === strpos($request_path, 'blog/')
        || is_page('blog')
        || is_page_template('page-blog.php');

    case 'contact':
      return 'contact' === $request_path
        || 0 === strpos($request_path, 'contact/')
        || is_page_template('page-templates/page-contact.php');
  }

  return false;
}

function mirrorcraft_rebuild_fallback_menu($args = array()) {
  $items = array(
    array(
      'key'   => 'home',
      'label' => __('Home', 'mirrorcraft'),
      'url'   => home_url('/'),
    ),
    array(
      'key'      => 'products',
      'label'    => __('Products', 'mirrorcraft'),
      'url'      => mirrorcraft_link_by_slug('products', '/products/'),
      'children' => mirrorcraft_get_products_submenu_items(),
    ),
    array(
      'key'      => 'applications',
      'label'    => __('Applications', 'mirrorcraft'),
      'url'      => mirrorcraft_link_by_slug('applications', '/applications/'),
      'children' => mirrorcraft_get_applications_submenu_items(),
    ),
    array(
      'key'   => 'projects',
      'label' => __('Projects', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('projects', '/projects/'),
    ),
    array(
      'key'      => 'about',
      'label'    => __('About Us', 'mirrorcraft'),
      'url'      => mirrorcraft_link_by_slug('about', '/about/'),
      'children' => mirrorcraft_get_header_about_submenu_items(),
    ),
    array(
      'key'   => 'blog',
      'label' => __('Blog', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('blog', '/blog/'),
    ),
    array(
      'key'   => 'contact',
      'label' => __('Contact Us', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('contact', '/contact/'),
    ),
  );

  echo '<ul class="nav-list">';

  foreach ($items as $item) {
    $has_children = !empty($item['children']) && is_array($item['children']);
    $item_classes = array();

    if ($has_children) {
      $item_classes[] = 'menu-item-has-children';
    }

    if (!empty($item['key']) && mirrorcraft_primary_nav_item_is_active($item['key'])) {
      $item_classes[] = $has_children ? 'current-menu-parent' : 'current-menu-item';
    }

    $li_class = !empty($item_classes) ? ' class="' . esc_attr(implode(' ', $item_classes)) . '"' : '';

    echo '<li' . $li_class . '>';
    echo '<a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a>';

    if ($has_children) {
      echo '<ul class="sub-menu">';

      foreach ($item['children'] as $child) {
        if (empty($child['label']) || empty($child['url'])) {
          continue;
        }

        echo '<li><a href="' . esc_url($child['url']) . '">' . esc_html($child['label']) . '</a></li>';
      }

      echo '</ul>';
    }

    echo '</li>';
  }

  echo '</ul>';
}

function mirrorcraft_render_editor_content_section($args = array()) {
  $defaults = array(
    'section_class' => 'editor-content-section',
    'article_class' => 'editor-content-card',
  );

  mirrorcraft_render_visual_editor_section(wp_parse_args($args, $defaults));
}

function mirrorcraft_get_product_family_cards() {
  return array(
    array(
      'slug'  => 'bathroom-mirrors',
      'tag'   => __('Backlit / Front-lit / Framed', 'mirrorcraft'),
      'title' => __('Bathroom Mirrors', 'mirrorcraft'),
      'text'  => __('Custom LED bathroom mirrors for hospitality bathrooms, multifamily units, premium residential builds, and branded product lines.', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'link'  => mirrorcraft_link_by_slug('products/bathroom-mirrors', '/products/bathroom-mirrors/'),
    ),
    array(
      'slug'             => 'medicine-cabinets',
      'tag'              => __('Storage + Illumination', 'mirrorcraft'),
      'title'            => __('Medicine Cabinets', 'mirrorcraft'),
      'text'             => __('Mirror cabinet programs that combine illumination, storage, and cleaner installation logic for higher-value bathroom projects.', 'mirrorcraft'),
      'image'            => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
      'link'             => mirrorcraft_link_by_slug('products/medicine-cabinets', '/products/medicine-cabinets/'),
      'media_fit'        => 'contain',
      'media_position'   => '50% 50%',
      'media_background' => '#231710',
      'hover_scale'      => '1',
    ),
    array(
      'slug'  => 'makeup-mirrors',
      'tag'   => __('Vanity / Beauty / Task-lit', 'mirrorcraft'),
      'title' => __('Makeup Mirrors', 'mirrorcraft'),
      'text'  => __('Makeup mirror programs with focused task lighting, vanity-friendly proportions, and customization support for salons, dressing zones, and beauty-led retail.', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
      'link'  => mirrorcraft_link_by_slug('products/makeup-mirrors', '/products/makeup-mirrors/'),
    ),
    array(
      'slug'  => 'custom-mirrors',
      'tag'   => __('OEM / ODM / Private Label', 'mirrorcraft'),
      'title' => __('Custom Mirrors', 'mirrorcraft'),
      'text'  => __('OEM and ODM mirror development for importers, distributors, designers, and private label buyers who need more than an off-the-shelf model.', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_optimized_url('custom-mirrors-reference-20260422.png'),
      'link'  => mirrorcraft_link_by_slug('products/custom-mirrors', '/products/custom-mirrors/'),
    ),
  );
}

function mirrorcraft_get_application_cards() {
  $items = array();
  $slugs = array_keys(mirrorcraft_get_application_submenu_pages());

  foreach ($slugs as $slug) {
    $page = mirrorcraft_get_application_section_page_data($slug);

    if (empty($page)) {
      continue;
    }

    $items[] = array(
      'slug'  => $slug,
      'tag'   => $page['title'] ?? ucfirst(str_replace('-', ' ', $slug)),
      'title' => $page['hero_title'] ?? ($page['title'] ?? ucfirst(str_replace('-', ' ', $slug))),
      'text'  => $page['hero_text'] ?? '',
      'image' => $page['image'] ?? mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'link'  => mirrorcraft_get_application_section_page_link($slug),
    );
  }

  return $items;
}

function mirrorcraft_get_process_steps() {
  return array(
    array(
      'title' => __('Define the product route', 'mirrorcraft'),
      'text'  => __('Start with category, target market, quantity range, and the feature mix that matters to the project.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Lock the brief', 'mirrorcraft'),
      'text'  => __('Confirm size, shape, lighting behavior, finish, cabinet structure, and packaging requirements before quoting deeper.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Sample and review', 'mirrorcraft'),
      'text'  => __('Use samples to align visual details, installation logic, and specification expectations before production.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Approve and produce', 'mirrorcraft'),
      'text'  => __('Move into production planning, quality checkpoints, and packaging preparation once the route is approved.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Export and deliver', 'mirrorcraft'),
      'text'  => __('Coordinate shipment, export packing, and project handoff with a clearer final brief and fewer surprises downstream.', 'mirrorcraft'),
    ),
  );
}

function mirrorcraft_render_faq_items($items, $id_prefix = 'faq') {
  if (empty($items) || !is_array($items)) {
    return;
  }
  ?>
  <div class="faq-list" data-faq-list>
    <?php foreach ($items as $index => $item) : ?>
      <?php
      $question = trim((string) ($item['question'] ?? ''));
      $answer = trim((string) ($item['answer'] ?? ''));
      $panel_id = sanitize_html_class($id_prefix . '-panel-' . ($index + 1));
      ?>
      <article class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr($panel_id); ?>" data-faq-trigger>
          <span><?php echo esc_html($question); ?></span>
          <span class="faq-symbol" aria-hidden="true">+</span>
        </button>
        <div id="<?php echo esc_attr($panel_id); ?>" class="faq-panel" hidden>
          <p><?php echo esc_html($answer); ?></p>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
  <?php
}

function mirrorcraft_render_post_card($post_id = 0) {
  $post_id = $post_id ? (int) $post_id : get_the_ID();
  $permalink = get_permalink($post_id);
  $title = get_the_title($post_id);
  $summary = mirrorcraft_get_page_summary($post_id, __('Open the full post for the detailed article.', 'mirrorcraft'));
  $thumbnail = get_the_post_thumbnail_url($post_id, 'large');
  ?>
  <article class="post-card">
    <?php if ($thumbnail) : ?>
      <a class="post-card-media" href="<?php echo esc_url($permalink); ?>">
        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy" decoding="async">
      </a>
    <?php endif; ?>
    <div class="post-card-body">
      <p class="post-card-meta"><?php echo esc_html(get_the_date('', $post_id)); ?></p>
      <h2><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h2>
      <p><?php echo esc_html($summary); ?></p>
      <a class="text-link" href="<?php echo esc_url($permalink); ?>"><?php esc_html_e('Read article', 'mirrorcraft'); ?></a>
    </div>
  </article>
  <?php
}

function mirrorcraft_render_contact_form($context = 'page') {
  $state = mirrorcraft_get_contact_form_state($context);
  $current_request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/';
  $current_request_url = esc_url_raw(remove_query_arg(array('inquiry_token'), home_url($current_request_uri)));
  $product_interest_options = mirrorcraft_get_inquiry_product_interest_options();
  $project_type_options = mirrorcraft_get_inquiry_project_type_options();
  $is_contact_page = ('contact-page' === $context);
  $is_home_cta = ('home-cta' === $context);
  $contact_quick_options = mirrorcraft_get_contact_quick_inquiry_options();
  $contact_whatsapp_link = mirrorcraft_get_whatsapp_link();
  $contact_whatsapp_external = mirrorcraft_has_whatsapp_number();
  $products_url = mirrorcraft_link_by_slug('products', '/products/');
  $response_anchor = $is_home_cta ? 'home-inquiry-form' : 'contact-form';
  ?>
  <div class="contact-form-shell<?php echo $is_home_cta ? ' contact-form-shell-home-cta' : ''; ?>" id="<?php echo esc_attr($response_anchor); ?>">
    <?php if (!empty($state['message'])) : ?>
      <div class="contact-alert contact-alert-<?php echo esc_attr($state['status'] ?: 'info'); ?>" role="status" aria-live="polite">
        <?php echo esc_html($state['message']); ?>
      </div>
    <?php endif; ?>

    <form class="contact-form<?php echo $is_contact_page ? ' contact-form-contact-page' : ''; ?><?php echo $is_home_cta ? ' contact-form-home-cta' : ''; ?>" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" enctype="multipart/form-data">
      <input type="hidden" name="action" value="mirrorcraft_submit_inquiry">
      <input type="hidden" name="redirect_to" value="<?php echo esc_url($current_request_url); ?>">
      <input type="hidden" name="response_anchor" value="<?php echo esc_attr($response_anchor); ?>">
      <input type="hidden" name="contact_form_context" value="<?php echo esc_attr($context); ?>">
      <input type="hidden" name="website" value="">
      <?php wp_nonce_field('mirrorcraft_submit_inquiry', 'mirrorcraft_inquiry_nonce'); ?>

      <?php if ($is_contact_page) : ?>
        <fieldset class="contact-project-picker">
          <legend class="form-label"><?php esc_html_e('Quick Inquiry for Projects', 'mirrorcraft'); ?></legend>
          <p class="form-note"><?php esc_html_e('Choose the route that best matches your business so our team can prepare the right quotation faster.', 'mirrorcraft'); ?></p>
          <div class="contact-project-options">
            <?php foreach ($contact_quick_options as $option) : ?>
              <label class="contact-project-option">
                <input type="radio" name="contact_project_type" value="<?php echo esc_attr($option); ?>" <?php checked(mirrorcraft_contact_form_value($state, 'project_type'), $option); ?>>
                <span><?php echo esc_html($option); ?></span>
              </label>
            <?php endforeach; ?>
          </div>
        </fieldset>

        <div class="contact-page-form-grid">
          <label class="form-field">
            <span class="form-label"><?php esc_html_e('Name', 'mirrorcraft'); ?> <span class="form-required">*</span></span>
            <input type="text" name="contact_name" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'name')); ?>" placeholder="<?php esc_attr_e('Your name', 'mirrorcraft'); ?>" required>
            <?php if (mirrorcraft_contact_form_error($state, 'name')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'name')); ?></small>
            <?php endif; ?>
          </label>

          <label class="form-field">
            <span class="form-label"><?php esc_html_e('Email', 'mirrorcraft'); ?> <span class="form-required">*</span></span>
            <input type="email" name="contact_email" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'email')); ?>" placeholder="<?php esc_attr_e('you@company.com', 'mirrorcraft'); ?>" required>
            <?php if (mirrorcraft_contact_form_error($state, 'email')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'email')); ?></small>
            <?php endif; ?>
          </label>

          <label class="form-field">
            <span class="form-label"><?php esc_html_e('Country', 'mirrorcraft'); ?></span>
            <input type="text" name="contact_country" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'country')); ?>" placeholder="<?php esc_attr_e('Your country', 'mirrorcraft'); ?>">
          </label>

          <label class="form-field">
            <span class="form-label"><?php esc_html_e('Company Name', 'mirrorcraft'); ?></span>
            <input type="text" name="contact_company" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'company')); ?>" placeholder="<?php esc_attr_e('Company name', 'mirrorcraft'); ?>">
          </label>

          <label class="form-field form-field-full">
            <span class="form-label"><?php esc_html_e('Custom Requirements', 'mirrorcraft'); ?> <span class="form-required">*</span></span>
            <textarea name="contact_message" rows="8" placeholder="<?php esc_attr_e('Tell us the size, function, quantity, target market, or any drawing details.', 'mirrorcraft'); ?>" required><?php echo esc_textarea(mirrorcraft_contact_form_value($state, 'message')); ?></textarea>
            <?php if (mirrorcraft_contact_form_error($state, 'message')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'message')); ?></small>
            <?php endif; ?>
          </label>

          <label class="form-field form-field-full">
            <span class="form-label"><?php esc_html_e('Upload Drawing', 'mirrorcraft'); ?></span>
            <div class="contact-file-input" data-file-input>
              <input
                class="contact-file-input-native"
                id="contact-attachment-contact-page"
                type="file"
                name="contact_attachment"
                accept=".jpg,.jpeg,.png,.webp,.pdf,.doc,.docx,.xls,.xlsx">
              <span class="contact-file-input-button" aria-hidden="true"><?php esc_html_e('Choose File', 'mirrorcraft'); ?></span>
              <span class="contact-file-input-name" data-file-name data-default-name="<?php esc_attr_e('No file selected', 'mirrorcraft'); ?>"><?php esc_html_e('No file selected', 'mirrorcraft'); ?></span>
            </div>
            <small class="form-note"><?php esc_html_e('Upload drawings, reference photos, or requirement sheets up to 8MB.', 'mirrorcraft'); ?></small>
            <?php if (mirrorcraft_contact_form_error($state, 'attachment')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'attachment')); ?></small>
            <?php endif; ?>
          </label>
        </div>
      <?php elseif ($is_home_cta) : ?>
        <div class="contact-home-cta-grid">
          <label class="form-field">
            <span class="form-label"><?php esc_html_e('Name', 'mirrorcraft'); ?> <span class="form-required">*</span></span>
            <input type="text" name="contact_name" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'name')); ?>" placeholder="<?php esc_attr_e('Your name', 'mirrorcraft'); ?>" required>
            <?php if (mirrorcraft_contact_form_error($state, 'name')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'name')); ?></small>
            <?php endif; ?>
          </label>

          <label class="form-field">
            <span class="form-label"><?php esc_html_e('Email', 'mirrorcraft'); ?> <span class="form-required">*</span></span>
            <input type="email" name="contact_email" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'email')); ?>" placeholder="<?php esc_attr_e('you@company.com', 'mirrorcraft'); ?>" required>
            <?php if (mirrorcraft_contact_form_error($state, 'email')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'email')); ?></small>
            <?php endif; ?>
          </label>

          <label class="form-field">
            <span class="form-label"><?php esc_html_e('Custom Requirements', 'mirrorcraft'); ?> <span class="form-required">*</span></span>
            <textarea name="contact_message" rows="6" placeholder="<?php esc_attr_e('Tell us the size, function, quantity, target market, or any drawing details.', 'mirrorcraft'); ?>" required><?php echo esc_textarea(mirrorcraft_contact_form_value($state, 'message')); ?></textarea>
            <?php if (mirrorcraft_contact_form_error($state, 'message')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'message')); ?></small>
            <?php endif; ?>
          </label>
        </div>
      <?php else : ?>
        <div class="form-grid">
          <label class="form-field">
            <span><?php esc_html_e('Name', 'mirrorcraft'); ?></span>
            <input type="text" name="contact_name" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'name')); ?>">
            <?php if (mirrorcraft_contact_form_error($state, 'name')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'name')); ?></small>
            <?php endif; ?>
          </label>

          <label class="form-field">
            <span><?php esc_html_e('Email', 'mirrorcraft'); ?></span>
            <input type="email" name="contact_email" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'email')); ?>">
            <?php if (mirrorcraft_contact_form_error($state, 'email')) : ?>
              <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'email')); ?></small>
            <?php endif; ?>
          </label>

          <label class="form-field">
            <span><?php esc_html_e('Company', 'mirrorcraft'); ?></span>
            <input type="text" name="contact_company" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'company')); ?>">
          </label>

          <label class="form-field">
            <span><?php esc_html_e('Phone', 'mirrorcraft'); ?></span>
            <input type="text" name="contact_phone" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'phone')); ?>">
          </label>

          <label class="form-field">
            <span><?php esc_html_e('Country', 'mirrorcraft'); ?></span>
            <input type="text" name="contact_country" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'country')); ?>">
          </label>

          <label class="form-field">
            <span><?php esc_html_e('Product interest', 'mirrorcraft'); ?></span>
            <select name="contact_product_interest">
              <option value=""><?php esc_html_e('Select one', 'mirrorcraft'); ?></option>
              <?php foreach ($product_interest_options as $option) : ?>
                <option value="<?php echo esc_attr($option); ?>" <?php selected(mirrorcraft_contact_form_value($state, 'product_interest'), $option); ?>><?php echo esc_html($option); ?></option>
              <?php endforeach; ?>
            </select>
          </label>

          <label class="form-field">
            <span><?php esc_html_e('Project type', 'mirrorcraft'); ?></span>
            <select name="contact_project_type">
              <option value=""><?php esc_html_e('Select one', 'mirrorcraft'); ?></option>
              <?php foreach ($project_type_options as $option) : ?>
                <option value="<?php echo esc_attr($option); ?>" <?php selected(mirrorcraft_contact_form_value($state, 'project_type'), $option); ?>><?php echo esc_html($option); ?></option>
              <?php endforeach; ?>
            </select>
          </label>
        </div>

        <label class="form-field form-field-full">
          <span><?php esc_html_e('Message', 'mirrorcraft'); ?></span>
          <textarea name="contact_message" rows="7"><?php echo esc_textarea(mirrorcraft_contact_form_value($state, 'message')); ?></textarea>
          <?php if (mirrorcraft_contact_form_error($state, 'message')) : ?>
            <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'message')); ?></small>
          <?php endif; ?>
        </label>

        <label class="form-field form-field-full">
          <span><?php esc_html_e('Attachment (optional)', 'mirrorcraft'); ?></span>
          <div class="contact-file-input" data-file-input>
            <input
              class="contact-file-input-native"
              id="contact-attachment-default"
              type="file"
              name="contact_attachment"
              accept=".jpg,.jpeg,.png,.webp,.pdf,.doc,.docx,.xls,.xlsx">
            <span class="contact-file-input-button" aria-hidden="true"><?php esc_html_e('Choose File', 'mirrorcraft'); ?></span>
            <span class="contact-file-input-name" data-file-name data-default-name="<?php esc_attr_e('No file selected', 'mirrorcraft'); ?>"><?php esc_html_e('No file selected', 'mirrorcraft'); ?></span>
          </div>
          <small class="form-note"><?php esc_html_e('Accepted file types include images, PDF, Word, and Excel files up to 8MB.', 'mirrorcraft'); ?></small>
          <?php if (mirrorcraft_contact_form_error($state, 'attachment')) : ?>
            <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'attachment')); ?></small>
          <?php endif; ?>
        </label>
      <?php endif; ?>

      <div class="form-actions<?php echo $is_contact_page ? ' contact-page-form-actions' : ''; ?><?php echo $is_home_cta ? ' home-cta-form-actions' : ''; ?>">
        <?php if ($is_contact_page) : ?>
          <a
            class="button button-secondary"
            href="<?php echo esc_url($contact_whatsapp_link); ?>"
            <?php if ($contact_whatsapp_external) : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>
          >
            <?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?>
          </a>
        <?php endif; ?>
        <button type="submit" class="button button-primary"><?php echo esc_html($is_contact_page ? __('Get Quote Now', 'mirrorcraft') : ($is_home_cta ? __('Submit Your Inquiry', 'mirrorcraft') : __('Send Inquiry', 'mirrorcraft'))); ?></button>
        <?php if ($is_home_cta) : ?>
          <input type="hidden" name="contact_product_interest" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'product_interest')); ?>">
          <input type="hidden" name="contact_project_type" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'project_type')); ?>">
          <input type="hidden" name="contact_quantity" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'quantity')); ?>">
        <?php endif; ?>
      </div>
    </form>
  </div>
  <?php
}
