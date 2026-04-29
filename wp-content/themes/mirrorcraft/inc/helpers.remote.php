<?php

function mirrorcraft_asset_version($relative_path) {
  $asset_path = get_template_directory() . '/' . ltrim($relative_path, '/');

  if (file_exists($asset_path)) {
    return (string) filemtime($asset_path);
  }

  $theme = wp_get_theme();

  return $theme->get('Version') ?: '0.1.0';
}

function mirrorcraft_get_field($key, $default = '', $post_id = false) {
  if (function_exists('get_field')) {
    $value = get_field($key, $post_id ?: false);
    if ($value !== null && $value !== '' && $value !== array()) {
      return $value;
    }
  }

  return $default;
}

function mirrorcraft_default_text($key, $default = '', $post_id = false) {
  return mirrorcraft_get_field($key, $default, $post_id);
}

function mirrorcraft_get_rows($key, $default = array(), $post_id = false) {
  $rows = mirrorcraft_get_field($key, array(), $post_id);
  if (is_array($rows) && !empty($rows)) {
    return $rows;
  }

  return $default;
}

function mirrorcraft_get_image_url_from_value($image) {
  if (is_array($image) && !empty($image['url'])) {
    return $image['url'];
  }

  if (is_string($image) && $image !== '') {
    return $image;
  }

  return '';
}

function mirrorcraft_get_text_items_from_rows($rows, $value_key = 'item_text') {
  $items = array();

  if (!is_array($rows)) {
    return $items;
  }

  foreach ($rows as $row) {
    if (!is_array($row)) {
      continue;
    }

    $value = trim((string) ($row[$value_key] ?? ''));

    if ($value !== '') {
      $items[] = $value;
    }
  }

  return $items;
}

function mirrorcraft_get_stat_items_from_rows($rows, $value_key = 'value', $label_key = 'label') {
  $items = array();

  if (!is_array($rows)) {
    return $items;
  }

  foreach ($rows as $row) {
    if (!is_array($row)) {
      continue;
    }

    $value = trim((string) ($row[$value_key] ?? ''));
    $label = trim((string) ($row[$label_key] ?? ''));

    if ($value === '' && $label === '') {
      continue;
    }

    $items[] = array(
      'value' => $value,
      'label' => $label,
    );
  }

  return $items;
}

function mirrorcraft_get_titled_items_from_rows($rows, $title_key = 'item_title', $text_key = 'item_text') {
  $items = array();

  if (!is_array($rows)) {
    return $items;
  }

  foreach ($rows as $row) {
    if (!is_array($row)) {
      continue;
    }

    $title = trim((string) ($row[$title_key] ?? ''));
    $text = trim((string) ($row[$text_key] ?? ''));

    if ($title === '' && $text === '') {
      continue;
    }

    $items[] = array(
      'title' => $title,
      'text'  => $text,
    );
  }

  return $items;
}

function mirrorcraft_get_image_titled_items_from_rows($rows, $title_key, $text_key, $image_key, $link_key = '') {
  $items = array();

  if (!is_array($rows)) {
    return $items;
  }

  foreach ($rows as $row) {
    if (!is_array($row)) {
      continue;
    }

    $title = trim((string) ($row[$title_key] ?? ''));
    $text = trim((string) ($row[$text_key] ?? ''));
    $image = mirrorcraft_get_image_url_from_value($row[$image_key] ?? '');
    $link = $link_key ? trim((string) ($row[$link_key] ?? '')) : '';

    if ($title === '' && $text === '' && $image === '' && $link === '') {
      continue;
    }

    $item = array(
      'title' => $title,
      'text'  => $text,
      'image' => $image,
    );

    if ($link_key !== '') {
      $item['link'] = $link;
    }

    $items[] = $item;
  }

  return $items;
}

function mirrorcraft_get_page_id_by_path($path, $expected_template = '') {
  $path = trim((string) $path, '/');

  if ($path === '') {
    return false;
  }

  $page = get_page_by_path($path);

  if (!$page instanceof WP_Post) {
    return false;
  }

  if ($expected_template !== '') {
    $page_template = (string) get_page_template_slug($page->ID);

    if ($page_template !== $expected_template) {
      return false;
    }
  }

  return (int) $page->ID;
}

function mirrorcraft_override_text_fields($data, $field_map, $post_id = false) {
  if (!$post_id) {
    return $data;
  }

  foreach ($field_map as $data_key => $field_key) {
    $value = mirrorcraft_get_field($field_key, null, $post_id);

    if ($value !== null && $value !== '') {
      $data[$data_key] = (string) $value;
    }
  }

  return $data;
}

function mirrorcraft_get_about_section_page_overrides($data, $post_id = false) {
  if (!$post_id) {
    return $data;
  }

  $data = mirrorcraft_override_text_fields(
    $data,
    array(
      'eyebrow'     => 'about_section_eyebrow',
      'hero_title'  => 'about_section_hero_title',
      'hero_text'   => 'about_section_hero_text',
      'focus_title' => 'about_section_focus_title',
      'focus_text'  => 'about_section_focus_text',
      'aside_kicker' => 'about_section_aside_kicker',
      'aside_title' => 'about_section_aside_title',
      'cards_title' => 'about_section_cards_title',
      'cards_text'  => 'about_section_cards_text',
      'steps_title' => 'about_section_steps_title',
      'steps_text'  => 'about_section_steps_text',
      'cta_title'   => 'about_section_cta_title',
      'cta_text'    => 'about_section_cta_text',
      'cta_button'  => 'about_section_cta_button',
    ),
    $post_id
  );

  $hero_chips = mirrorcraft_get_text_items_from_rows(mirrorcraft_get_rows('about_section_hero_chips', array(), $post_id));
  $hero_stats = mirrorcraft_get_stat_items_from_rows(mirrorcraft_get_rows('about_section_hero_stats', array(), $post_id));
  $focus_items = mirrorcraft_get_text_items_from_rows(mirrorcraft_get_rows('about_section_focus_items', array(), $post_id));
  $aside_items = mirrorcraft_get_text_items_from_rows(mirrorcraft_get_rows('about_section_aside_items', array(), $post_id));
  $cards = mirrorcraft_get_titled_items_from_rows(mirrorcraft_get_rows('about_section_cards', array(), $post_id));
  $steps = mirrorcraft_get_titled_items_from_rows(mirrorcraft_get_rows('about_section_steps', array(), $post_id));

  if (!empty($hero_chips)) {
    $data['hero_chips'] = $hero_chips;
  }

  if (!empty($hero_stats)) {
    $data['hero_stats'] = $hero_stats;
  }

  if (!empty($focus_items)) {
    $data['focus_items'] = $focus_items;
  }

  if (!empty($aside_items)) {
    $data['aside_items'] = $aside_items;
  }

  if (!empty($cards)) {
    $data['cards'] = $cards;
  }

  if (!empty($steps)) {
    $data['steps'] = $steps;
  }

  return $data;
}

function mirrorcraft_get_application_section_page_overrides($data, $post_id = false) {
  if (!$post_id) {
    return $data;
  }

  $data = mirrorcraft_override_text_fields(
    $data,
    array(
      'eyebrow'                    => 'application_section_eyebrow',
      'hero_title'                 => 'application_section_hero_title',
      'hero_text'                  => 'application_section_hero_text',
      'focus_title'                => 'application_section_focus_title',
      'focus_text'                 => 'application_section_focus_text',
      'scenario_intro_title'       => 'application_section_scenario_intro_title',
      'scenario_intro_text'        => 'application_section_scenario_intro_text',
      'scenario_areas_title'       => 'application_section_scenario_areas_title',
      'aside_kicker'               => 'application_section_aside_kicker',
      'aside_title'                => 'application_section_aside_title',
      'products_title'             => 'application_section_products_title',
      'cards_title'                => 'application_section_cards_title',
      'cards_text'                 => 'application_section_cards_text',
      'recommended_products_title' => 'application_section_recommended_products_title',
      'recommended_products_text'  => 'application_section_recommended_products_text',
      'steps_title'                => 'application_section_steps_title',
      'steps_text'                 => 'application_section_steps_text',
      'cta_title'                  => 'application_section_cta_title',
      'cta_text'                   => 'application_section_cta_text',
      'cta_button'                 => 'application_section_cta_button',
    ),
    $post_id
  );

  $image = mirrorcraft_get_image_field_url('application_section_image', '', $post_id);
  $hero_chips = mirrorcraft_get_text_items_from_rows(mirrorcraft_get_rows('application_section_hero_chips', array(), $post_id));
  $hero_stats = mirrorcraft_get_stat_items_from_rows(mirrorcraft_get_rows('application_section_hero_stats', array(), $post_id));
  $focus_items = mirrorcraft_get_text_items_from_rows(mirrorcraft_get_rows('application_section_focus_items', array(), $post_id));
  $scenario_areas = mirrorcraft_get_image_titled_items_from_rows(
    mirrorcraft_get_rows('application_section_scenario_areas', array(), $post_id),
    'area_title',
    'area_text',
    'area_image'
  );
  $aside_items = mirrorcraft_get_text_items_from_rows(mirrorcraft_get_rows('application_section_aside_items', array(), $post_id));
  $products = mirrorcraft_get_text_items_from_rows(mirrorcraft_get_rows('application_section_products', array(), $post_id));
  $cards = mirrorcraft_get_titled_items_from_rows(mirrorcraft_get_rows('application_section_cards', array(), $post_id));
  $recommended_products = mirrorcraft_get_image_titled_items_from_rows(
    mirrorcraft_get_rows('application_section_recommended_products', array(), $post_id),
    'product_title',
    'product_text',
    'product_image',
    'product_link'
  );
  $steps = mirrorcraft_get_titled_items_from_rows(mirrorcraft_get_rows('application_section_steps', array(), $post_id));

  if ($image !== '') {
    $data['image'] = $image;
  }

  if (!empty($hero_chips)) {
    $data['hero_chips'] = $hero_chips;
  }

  if (!empty($hero_stats)) {
    $data['hero_stats'] = $hero_stats;
  }

  if (!empty($focus_items)) {
    $data['focus_items'] = $focus_items;
  }

  if (!empty($scenario_areas)) {
    $data['scenario_areas'] = $scenario_areas;
  }

  if (!empty($aside_items)) {
    $data['aside_items'] = $aside_items;
  }

  if (!empty($products)) {
    $data['products'] = $products;
  }

  if (!empty($cards)) {
    $data['cards'] = $cards;
  }

  if (!empty($recommended_products)) {
    $data['recommended_products'] = $recommended_products;
  }

  if (!empty($steps)) {
    $data['steps'] = $steps;
  }

  return $data;
}

function mirrorcraft_default_faq_items() {
  return array(
    array(
      'question' => __('Can you customize LED bathroom mirrors and lighted medicine cabinets?', 'mirrorcraft'),
      'answer'   => __('Yes. OJMIRROR supports custom dimensions, mirror shapes, lighting layouts, feature combinations, frame directions, and cabinet configurations for project and OEM orders.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Do you support OEM and private label mirror programs?', 'mirrorcraft'),
      'answer'   => __('Yes. We support OEM, ODM, branded packaging direction, and custom product development for distributors, importers, and private label buyers.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Can we request a sample before placing a bulk order?', 'mirrorcraft'),
      'answer'   => __('Yes. Sample review is an important step for projects that need to confirm finish, size, lighting behavior, and installation fit before full production.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Are your mirrors suitable for bathroom environments?', 'mirrorcraft'),
      'answer'   => __('Yes. Bathroom-use mirror programs are developed for humid-use scenarios, with final specifications confirmed according to the selected model and target market.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Can you discuss certification-related requirements?', 'mirrorcraft'),
      'answer'   => __('Yes. We can discuss certification direction according to the target application, destination requirement, and selected product route.', 'mirrorcraft'),
    ),
  );
}

function mirrorcraft_get_faq_items($post_id = false) {
  return mirrorcraft_get_rows('faq_items', mirrorcraft_default_faq_items(), $post_id);
}

function mirrorcraft_get_option_field($key, $default = '') {
  if (function_exists('get_field')) {
    $value = get_field($key, 'option');
    if ($value !== null && $value !== '' && $value !== array()) {
      return $value;
    }
  }

  $theme_mod = get_theme_mod('mirrorcraft_' . $key, null);
  if ($theme_mod !== null && $theme_mod !== '') {
    return $theme_mod;
  }

  return $default;
}

function mirrorcraft_get_front_page_id() {
  $front_page_id = (int) get_option('page_on_front');

  return $front_page_id > 0 ? $front_page_id : false;
}

function mirrorcraft_get_image_field_url($key, $default = '', $post_id = false) {
  $image = mirrorcraft_get_field($key, '', $post_id);

  if (is_array($image) && !empty($image['url'])) {
    return $image['url'];
  }

  if (is_string($image) && $image !== '') {
    return $image;
  }

  return $default;
}

function mirrorcraft_get_file_field_data($key, $default = array(), $post_id = false) {
  $file = mirrorcraft_get_field($key, array(), $post_id);

  if (is_array($file) && !empty($file['url'])) {
    return $file;
  }

  if (is_string($file) && $file !== '') {
    return array(
      'url'      => $file,
      'title'    => basename($file),
      'filename' => basename($file),
    );
  }

  return $default;
}

function mirrorcraft_get_renderable_post_content($post_id = 0) {
  $resolved_post = get_post($post_id ?: get_queried_object_id());

  if (!$resolved_post instanceof WP_Post) {
    return '';
  }

  $content = trim((string) $resolved_post->post_content);

  if ($content === '') {
    return '';
  }

  return apply_filters('the_content', $resolved_post->post_content);
}

function mirrorcraft_render_visual_editor_section($args = array()) {
  $post_id = !empty($args['post_id']) ? (int) $args['post_id'] : 0;
  $content_html = mirrorcraft_get_renderable_post_content($post_id);

  if ($content_html === '') {
    return;
  }

  $section_class = !empty($args['section_class']) ? trim((string) $args['section_class']) : '';
  $shell_class = !empty($args['shell_class']) ? trim((string) $args['shell_class']) : '';
  $article_class = !empty($args['article_class']) ? trim((string) $args['article_class']) : '';
  $eyebrow = !empty($args['eyebrow']) ? (string) $args['eyebrow'] : '';
  $title = !empty($args['title']) ? (string) $args['title'] : '';
  $description = !empty($args['description']) ? (string) $args['description'] : '';
  ?>
  <section class="<?php echo esc_attr(trim('section section-tight ' . $section_class)); ?>">
    <div class="<?php echo esc_attr(trim('shell ' . $shell_class)); ?>">
      <article class="<?php echo esc_attr(trim('entry-card entry-card-rich ' . $article_class)); ?>">
        <div class="entry-content prose-flow">
          <?php if ($eyebrow || $title || $description) : ?>
            <div class="visual-editor-intro">
              <?php if ($eyebrow) : ?>
                <p class="eyebrow"><?php echo esc_html($eyebrow); ?></p>
              <?php endif; ?>
              <?php if ($title) : ?>
                <h2><?php echo esc_html($title); ?></h2>
              <?php endif; ?>
              <?php if ($description) : ?>
                <p class="section-copy"><?php echo esc_html($description); ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php echo $content_html; ?>
        </div>
      </article>
    </div>
  </section>
  <?php
}

function mirrorcraft_get_contact_phone() {
  $configured_phone = (string) mirrorcraft_get_option_field('contact_phone', '+086 19866489134');
  $normalized_phone = trim($configured_phone);
  $legacy_defaults = array(
    '',
    '+86 000 0000 0000',
    '+86 166 2097 8601',
    '19866489134',
  );

  if (in_array($normalized_phone, $legacy_defaults, true)) {
    return '+086 19866489134';
  }

  return $normalized_phone;
}

function mirrorcraft_get_contact_email() {
  return 'info@ojmirror.com';
}

function mirrorcraft_get_contact_phone_href() {
  return preg_replace('/[^0-9+]/', '', mirrorcraft_get_contact_phone());
}

function mirrorcraft_get_whatsapp_number() {
  $raw_number = (string) mirrorcraft_get_option_field(
    'contact_whatsapp_number',
    mirrorcraft_get_contact_phone()
  );
  $digits = preg_replace('/\D+/', '', $raw_number);

  if (strpos($digits, '086') === 0) {
    $digits = '86' . substr($digits, 3);
  }

  if ($digits === '' || preg_match('/^0+$/', $digits) || in_array($digits, array('8616620978601'), true)) {
    $fallback_digits = preg_replace('/\D+/', '', mirrorcraft_get_contact_phone());

    if (strpos($fallback_digits, '086') === 0) {
      $fallback_digits = '86' . substr($fallback_digits, 3);
    }

    return $fallback_digits;
  }

  return $digits;
}

function mirrorcraft_get_contact_address() {
  $configured_address = (string) mirrorcraft_get_option_field(
    'contact_address',
    'No. 5, Zhanxing Road, Zhongshan Port Subdistrict, Zhongshan Torch Development Zone, Zhongshan, Guangdong, China.'
  );
  $normalized_address = trim($configured_address);
  $legacy_defaults = array(
    '',
    'Foshan, Guangdong, China',
    '中山市火炬开发区中山港街道展兴路5号',
  );

  if (in_array($normalized_address, $legacy_defaults, true)) {
    return 'No. 5, Zhanxing Road, Zhongshan Port Subdistrict, Zhongshan Torch Development Zone, Zhongshan, Guangdong, China.';
  }

  return $normalized_address;
}

function mirrorcraft_get_contact_map_embed_url() {
  $configured_url = trim((string) mirrorcraft_get_option_field('contact_map_embed_url', ''));

  if ($configured_url !== '') {
    return $configured_url;
  }

  $address = trim((string) mirrorcraft_get_contact_address());

  if ($address === '') {
    return '';
  }

  return 'https://www.google.com/maps?output=embed&q=' . rawurlencode($address);
}

function mirrorcraft_get_contact_map_link() {
  $configured_url = trim((string) mirrorcraft_get_option_field('contact_map_link', ''));

  if ($configured_url !== '') {
    return $configured_url;
  }

  $address = trim((string) mirrorcraft_get_contact_address());

  if ($address === '') {
    return '';
  }

  return 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($address);
}

function mirrorcraft_get_contact_city_name() {
  return 'Zhongshan';
}

function mirrorcraft_has_whatsapp_number() {
  return mirrorcraft_get_whatsapp_number() !== '';
}

function mirrorcraft_get_whatsapp_message() {
  return (string) mirrorcraft_get_option_field(
    'contact_whatsapp_message',
    __('Hello OJMIRROR, I would like to inquire about LED bathroom mirrors and mirror cabinets.', 'mirrorcraft')
  );
}

function mirrorcraft_get_whatsapp_link() {
  $number = mirrorcraft_get_whatsapp_number();

  if ($number !== '') {
    return add_query_arg(
      array(
        'text' => mirrorcraft_get_whatsapp_message(),
      ),
      'https://wa.me/' . $number
    );
  }

  return mirrorcraft_link_by_slug('contact', '/contact') . '#contact-form';
}

function mirrorcraft_link_by_slug($slug, $fallback = '/') {
  static $link_cache = array();

  $cache_key = $slug . '|' . $fallback;

  if (isset($link_cache[$cache_key])) {
    return $link_cache[$cache_key];
  }

  $page = get_page_by_path($slug);

  if ($page instanceof WP_Post) {
    $link_cache[$cache_key] = get_permalink($page);

    return $link_cache[$cache_key];
  }

  $link_cache[$cache_key] = home_url($fallback);

  return $link_cache[$cache_key];
}

function mirrorcraft_get_breadcrumb_items() {
  if (is_front_page()) {
    return array();
  }

  $items = array(
    array(
      'label' => __('Home', 'mirrorcraft'),
      'url'   => home_url('/'),
    ),
  );

  if (is_page()) {
    $page_id = get_queried_object_id();
    $ancestor_ids = array_reverse(get_post_ancestors($page_id));

    foreach ($ancestor_ids as $ancestor_id) {
      $items[] = array(
        'label' => get_the_title($ancestor_id),
        'url'   => get_permalink($ancestor_id),
      );
    }

    $items[] = array(
      'label' => get_the_title($page_id),
      'url'   => '',
    );

    return $items;
  }

  if (is_singular('post')) {
    $posts_page_id = (int) get_option('page_for_posts');

    if ($posts_page_id) {
      $items[] = array(
        'label' => get_the_title($posts_page_id),
        'url'   => get_permalink($posts_page_id),
      );
    }

    $items[] = array(
      'label' => get_the_title(get_queried_object_id()),
      'url'   => '',
    );

    return $items;
  }

  if (is_search()) {
    $items[] = array(
      'label' => sprintf(__('Search: %s', 'mirrorcraft'), get_search_query()),
      'url'   => '',
    );

    return $items;
  }

  if (is_archive()) {
    $items[] = array(
      'label' => wp_strip_all_tags(get_the_archive_title()),
      'url'   => '',
    );

    return $items;
  }

  if (is_404()) {
    $items[] = array(
      'label' => __('Not found', 'mirrorcraft'),
      'url'   => '',
    );
  }

  return $items;
}

function mirrorcraft_render_breadcrumbs() {
  $items = mirrorcraft_get_breadcrumb_items();

  if (count($items) < 2) {
    return;
  }

  echo '<nav class="site-breadcrumbs" aria-label="' . esc_attr__('Breadcrumb', 'mirrorcraft') . '">';
  echo '<ol class="site-breadcrumbs__list">';

  foreach ($items as $index => $item) {
    $is_last = $index === array_key_last($items);

    echo '<li class="site-breadcrumbs__item">';

    if (!$is_last && !empty($item['url'])) {
      echo '<a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a>';
    } else {
      echo '<span>' . esc_html($item['label']) . '</span>';
    }

    echo '</li>';
  }

  echo '</ol>';
  echo '</nav>';
}

function mirrorcraft_get_breadcrumb_schema_items() {
  $items = mirrorcraft_get_breadcrumb_items();

  if (count($items) < 2) {
    return array();
  }

  $schema_items = array();

  foreach ($items as $index => $item) {
    $schema_items[] = array(
      '@type'    => 'ListItem',
      'position' => $index + 1,
      'name'     => $item['label'],
      'item'     => !empty($item['url']) ? $item['url'] : mirrorcraft_get_canonical_url(),
    );
  }

  return $schema_items;
}

function mirrorcraft_get_product_category_pages() {
  return array(
    'bathroom-mirrors' => array(
      'title'          => __('Bathroom Mirrors', 'mirrorcraft'),
      'path'           => 'products/bathroom-mirrors',
      'image_key'      => 'bathroom-mirror',
      'intro'          => __('Bathroom mirror programs for hospitality, residential, and commercial bathrooms, with modern lighting options, practical installation planning, and B2B customization support.', 'mirrorcraft'),
      'overview_title' => __('Bathroom Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This category covers illuminated and non-illuminated bathroom mirror directions built around layout fit, visual consistency, and practical daily use.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Hospitality and residential focused', 'mirrorcraft'),
        __('Modern wall-mounted formats', 'mirrorcraft'),
        __('Project and wholesale supply', 'mirrorcraft'),
        __('OEM / ODM support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Backlit, front-lit, framed, round, and shaped bathroom mirror formats', 'mirrorcraft')),
        array('item_text' => __('Anti-fog, dimming, and specification-friendly lighting options where needed', 'mirrorcraft')),
        array('item_text' => __('Custom sizing, finish direction, packaging, and private label support', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Frame, edge, and mounting configuration adjustments', 'mirrorcraft')),
        array('item_text' => __('Lighting behavior tailored to the target market and application', 'mirrorcraft')),
        array('item_text' => __('Branding and export packaging planning for B2B orders', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Hotel bathroom programs and guestroom upgrades', 'mirrorcraft'),
        __('Apartment and multifamily developments', 'mirrorcraft'),
        __('Importers and distributors building branded mirror assortments', 'mirrorcraft'),
      ),
      'closing'        => __('Share your target size range, finish direction, and destination market to receive a workable bathroom mirror proposal.', 'mirrorcraft'),
    ),
    'makeup-mirrors' => array(
      'title'          => __('Makeup Mirrors', 'mirrorcraft'),
      'path'           => 'products/makeup-mirrors',
      'image_key'      => 'makeup-mirror',
      'intro'          => __('Makeup mirror programs with focused task lighting, clean grooming visibility, and customization support for vanity, beauty, salon, and retail use.', 'mirrorcraft'),
      'overview_title' => __('Makeup Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This category is designed for buyers who need closer-range lighting performance, vanity-friendly proportions, and stronger styling direction for beauty-related environments.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Beauty and grooming focused', 'mirrorcraft'),
        __('Task-lighting friendly', 'mirrorcraft'),
        __('Vanity and salon applications', 'mirrorcraft'),
        __('OEM / ODM support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Task-lighting mirror formats for makeup and grooming use', 'mirrorcraft')),
        array('item_text' => __('Wall-mounted, countertop, and vanity-oriented configurations', 'mirrorcraft')),
        array('item_text' => __('Custom sizing, frame direction, and branding support', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Lighting behavior tuned for close-up grooming visibility', 'mirrorcraft')),
        array('item_text' => __('Custom shape, finish, and mounting direction', 'mirrorcraft')),
        array('item_text' => __('Private label packaging and beauty-brand development support', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Salon and beauty service environments', 'mirrorcraft'),
        __('Vanity-focused residential and hospitality spaces', 'mirrorcraft'),
        __('Retail buyers building beauty-led mirror assortments', 'mirrorcraft'),
      ),
      'closing'        => __('Share your target use environment, lighting preference, and quantity plan to receive a workable makeup mirror quotation.', 'mirrorcraft'),
    ),
    'full-length-mirrors' => array(
      'title'          => __('Full Length Mirrors', 'mirrorcraft'),
      'path'           => 'products/full-length-mirrors',
      'image_key'      => 'makeup-mirror',
      'intro'          => __('Full length mirror programs for dressing rooms, bedrooms, fitting rooms, hospitality suites, and retail spaces that need clear proportions and dependable presentation.', 'mirrorcraft'),
      'overview_title' => __('Full Length Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This route is built for buyers who need larger-format mirrors with stable styling, practical mounting options, and better repeatability across rooms or store concepts.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Dressing and fitting use', 'mirrorcraft'),
        __('Hospitality and retail relevant', 'mirrorcraft'),
        __('Freestanding and wall-mounted formats', 'mirrorcraft'),
        __('Bulk-ready supply', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Full body-view mirrors in leaner, framed, and decorative directions', 'mirrorcraft')),
        array('item_text' => __('Wall-mounted and freestanding formats for different room layouts', 'mirrorcraft')),
        array('item_text' => __('Custom dimensions, finishes, and branding support for B2B orders', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Frame style, color, and shape adjustments', 'mirrorcraft')),
        array('item_text' => __('Protective packaging matched to larger-format transport needs', 'mirrorcraft')),
        array('item_text' => __('Private label support for retail and hospitality programs', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Retail fitting rooms and apparel store concepts', 'mirrorcraft'),
        __('Bedroom and wardrobe mirror programs', 'mirrorcraft'),
        __('Hotel suites and dressing-oriented hospitality layouts', 'mirrorcraft'),
      ),
      'closing'        => __('Tell us the target dimensions, mounting style, and finish direction so we can quote the right full length mirror route.', 'mirrorcraft'),
    ),
    'framed-mirrors' => array(
      'title'          => __('Framed Mirrors', 'mirrorcraft'),
      'path'           => 'products/framed-mirrors',
      'image_key'      => 'bathroom-mirror',
      'intro'          => __('Framed mirror programs for premium bathrooms, hospitality interiors, retail assortments, and buyers who need a stronger decorative and branded story.', 'mirrorcraft'),
      'overview_title' => __('Framed Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('Framed mirrors help buyers build more distinctive collections without losing practical installation flexibility or OEM options.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Framed decorative styling', 'mirrorcraft'),
        __('Premium finish direction', 'mirrorcraft'),
        __('Retail and hospitality friendly', 'mirrorcraft'),
        __('Customization support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Framed mirror presentation for premium bathroom and decor collections', 'mirrorcraft')),
        array('item_text' => __('Frame finish choices for different market directions', 'mirrorcraft')),
        array('item_text' => __('Custom sizes, shapes, and specification support for project programs', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Frame material and color selection', 'mirrorcraft')),
        array('item_text' => __('Round, rectangular, arched, and shaped formats', 'mirrorcraft')),
        array('item_text' => __('Private label packaging and style direction for import programs', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Retail buyers selling framed mirror lines', 'mirrorcraft'),
        __('Hospitality projects with stronger visual design requirements', 'mirrorcraft'),
        __('Importers building premium mirror assortments', 'mirrorcraft'),
      ),
      'closing'        => __('Send your preferred frame style, size direction, and finish requirements to receive a framed mirror quotation.', 'mirrorcraft'),
    ),
    'medicine-cabinets' => array(
      'title'          => __('Medicine Cabinets', 'mirrorcraft'),
      'path'           => 'products/medicine-cabinets',
      'image_key'      => 'medicine-cabinet',
      'intro'          => __('Medicine cabinet programs that combine mirror presentation, cabinet storage, and clean installation logic for residential, hospitality, and project bathroom supply.', 'mirrorcraft'),
      'overview_title' => __('Medicine Cabinet Overview', 'mirrorcraft'),
      'overview_text'  => __('This route is designed for buyers who need both mirror utility and organized storage in one specification-ready category.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Storage-led bathroom planning', 'mirrorcraft'),
        __('Hospitality and multifamily relevant', 'mirrorcraft'),
        __('Surface mount and recessed directions', 'mirrorcraft'),
        __('OEM / ODM available', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Mirror-plus-cabinet structure with storage-led bathroom planning', 'mirrorcraft')),
        array('item_text' => __('Lighting layouts, anti-fog, and switch options for project use', 'mirrorcraft')),
        array('item_text' => __('Cabinet depth, shelving, and door configuration support', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Custom sizing, internal storage layout, and mounting direction', 'mirrorcraft')),
        array('item_text' => __('Lighting behavior matched to the bathroom specification route', 'mirrorcraft')),
        array('item_text' => __('Branding, labeling, and export packaging support', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Hospitality and residential projects that need storage utility', 'mirrorcraft'),
        __('Bathroom brands adding a higher-value cabinet line', 'mirrorcraft'),
        __('Importers looking for mirror and storage in one product route', 'mirrorcraft'),
      ),
      'closing'        => __('Tell us the cabinet dimensions, storage expectations, and target market so we can quote the right medicine cabinet route.', 'mirrorcraft'),
    ),
    'smart-mirrors' => array(
      'title'          => __('Smart Mirrors', 'mirrorcraft'),
      'path'           => 'products/smart-mirrors',
      'image_key'      => 'bathroom-mirror',
      'intro'          => __('Smart mirror programs with integrated lighting, touch control, anti-fog, clock, Bluetooth, and other value-added functions for buyers who need stronger feature differentiation.', 'mirrorcraft'),
      'overview_title' => __('Smart Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This category is built for buyers who want mirrors that combine functional lighting with smarter user-facing features and a more competitive market story.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Feature-driven product route', 'mirrorcraft'),
        __('Retail and premium residential relevant', 'mirrorcraft'),
        __('Touch and anti-fog options', 'mirrorcraft'),
        __('Customization support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Touch control, anti-fog, dimming, and clock options', 'mirrorcraft')),
        array('item_text' => __('Bluetooth, CCT control, and other smart feature combinations where needed', 'mirrorcraft')),
        array('item_text' => __('Custom sizes, shapes, and feature packages for target markets', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Function combinations based on price level and customer type', 'mirrorcraft')),
        array('item_text' => __('Mirror format and lighting layout matched to the product brief', 'mirrorcraft')),
        array('item_text' => __('Private label packaging and export support for feature-led ranges', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Retail collections that need visible feature differentiation', 'mirrorcraft'),
        __('Premium residential or hospitality bathroom programs', 'mirrorcraft'),
        __('Importers building tech-forward mirror assortments', 'mirrorcraft'),
      ),
      'closing'        => __('Share the feature mix, target price level, and market route so we can recommend the right smart mirror program.', 'mirrorcraft'),
    ),
    'custom-mirrors' => array(
      'title'          => __('Custom Mirrors', 'mirrorcraft'),
      'path'           => 'products/custom-mirrors',
      'image_key'      => 'custom-mirror',
      'intro'          => __('OEM and ODM custom mirror development for brands, wholesalers, designers, and project buyers who need spec-driven products rather than off-the-shelf models.', 'mirrorcraft'),
      'overview_title' => __('Custom Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This route is designed for buyers who need control over size, shape, lighting, frame style, packaging, and brand direction.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('OEM / ODM route', 'mirrorcraft'),
        __('Private label packaging', 'mirrorcraft'),
        __('Spec-driven development', 'mirrorcraft'),
        __('Quotation and sample consultation', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Custom size, shape, frame, and feature mix development', 'mirrorcraft')),
        array('item_text' => __('Sample-first workflow before production approval', 'mirrorcraft')),
        array('item_text' => __('Branding, packaging, and export support for private label programs', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Logo, carton, and label customization', 'mirrorcraft')),
        array('item_text' => __('Feature combinations based on market needs', 'mirrorcraft')),
        array('item_text' => __('Development support from sample to bulk order', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Private label mirror brands', 'mirrorcraft'),
        __('Importers building market-specific programs', 'mirrorcraft'),
        __('Project buyers with specification requirements', 'mirrorcraft'),
      ),
      'closing'        => __('Send your product brief, quantity target, and branding requirements so we can advise the right custom mirror path.', 'mirrorcraft'),
    ),
    'antique-mirrors' => array(
      'title'          => __('Antique Mirrors', 'mirrorcraft'),
      'path'           => 'products/antique-mirrors',
      'image_key'      => 'bathroom-mirror',
      'intro'          => __('Antique mirror programs for buyers who need classic finishes, aged-glass effects, and decorative styling for hospitality, residential, and decor-led collections.', 'mirrorcraft'),
      'overview_title' => __('Antique Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This category is built for vintage-inspired, aged-finish, and classical decorative mirror directions that need stronger atmosphere and style character.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Decorative and classical styling', 'mirrorcraft'),
        __('Residential and hospitality relevant', 'mirrorcraft'),
        __('Aged-finish direction', 'mirrorcraft'),
        __('Customization support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Antique-finish and aged-look mirror directions for decorative collections', 'mirrorcraft')),
        array('item_text' => __('Frame and finish routes that support traditional or transitional interiors', 'mirrorcraft')),
        array('item_text' => __('Custom size, shape, and packaging support for B2B orders', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Frame details and finish direction matched to the style brief', 'mirrorcraft')),
        array('item_text' => __('Decorative proportions for wall, vanity, or hallway use', 'mirrorcraft')),
        array('item_text' => __('Private label packaging and assortment development support', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Decor and furniture collections with classical styling', 'mirrorcraft'),
        __('Hospitality interiors that need a warmer vintage expression', 'mirrorcraft'),
        __('Importers building antique-inspired mirror assortments', 'mirrorcraft'),
      ),
      'closing'        => __('Tell us the finish style, target dimensions, and collection direction so we can quote the right antique mirror route.', 'mirrorcraft'),
    ),
    'decorative-mirror' => array(
      'title'          => __('Decorative Mirror', 'mirrorcraft'),
      'path'           => 'products/decorative-mirror',
      'image_key'      => 'custom-mirror',
      'intro'          => __('Decorative mirror programs for wall decor, vanity areas, branded interiors, and buyers who need stronger visual impact and styling flexibility.', 'mirrorcraft'),
      'overview_title' => __('Decorative Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This category is intended for decorative-led mirror assortments where shape, framing, finish, and collection styling matter as much as basic function.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Decor-led product route', 'mirrorcraft'),
        __('Retail and hospitality relevant', 'mirrorcraft'),
        __('Shape and style flexibility', 'mirrorcraft'),
        __('Customization support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Decorative wall mirror formats for display, vanity, and room-enhancing use', 'mirrorcraft')),
        array('item_text' => __('Round, arched, organic, and statement-shape directions', 'mirrorcraft')),
        array('item_text' => __('Custom size, frame, and packaging support for assortment planning', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Shape, edge, and frame details aligned to the target style story', 'mirrorcraft')),
        array('item_text' => __('Collection planning support for retail, design, or project buyers', 'mirrorcraft')),
        array('item_text' => __('Private label packaging and export-ready delivery support', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Retail assortments and decorative wall collections', 'mirrorcraft'),
        __('Boutique hospitality and branded interior projects', 'mirrorcraft'),
        __('Importers building design-led mirror programs', 'mirrorcraft'),
      ),
      'closing'        => __('Share your preferred shapes, finish direction, and quantity target to receive a workable decorative mirror proposal.', 'mirrorcraft'),
    ),
  );
}

function mirrorcraft_normalize_product_category_slug($slug) {
  $slug = trim((string) $slug, '/');

  $aliases = array(
    'led-bathroom-mirrors'   => 'bathroom-mirrors',
    'bathroom-mirror'        => 'bathroom-mirrors',
    'bathroom-mirrors'       => 'bathroom-mirrors',
    'lighted-medicine-cabinets' => 'medicine-cabinets',
    'medicine-cabinet'       => 'medicine-cabinets',
    'medicine-cabinets'      => 'medicine-cabinets',
    'framed-led-mirrors'     => 'framed-mirrors',
    'framed-mirror'          => 'framed-mirrors',
    'framed-mirrors'         => 'framed-mirrors',
    'decorative-mirrors'     => 'decorative-mirror',
    'decorative-mirror'      => 'decorative-mirror',
    'custom-led-mirrors'     => 'custom-mirrors',
    'custom-mirror'          => 'custom-mirrors',
    'custom-mirrors'         => 'custom-mirrors',
    'makeup-mirror'       => 'makeup-mirrors',
    'makeup-mirrors'      => 'makeup-mirrors',
    'vanity-mirrors'      => 'makeup-mirrors',
    'full-length-mirror'  => 'full-length-mirrors',
    'full-length-mirrors' => 'full-length-mirrors',
    'smart-mirror'        => 'smart-mirrors',
    'smart-mirrors'       => 'smart-mirrors',
    'antique-mirror'      => 'antique-mirrors',
    'antique-mirrors'     => 'antique-mirrors',
  );

  return $aliases[$slug] ?? $slug;
}

function mirrorcraft_get_product_category_page_data($slug = '') {
  $categories = mirrorcraft_get_product_category_pages();

  if ($slug === '') {
    $post = get_queried_object();
    $slug = $post instanceof WP_Post ? $post->post_name : '';
  }

  $slug = mirrorcraft_normalize_product_category_slug($slug);

  return $categories[$slug] ?? array();
}

function mirrorcraft_get_product_category_page_link($slug) {
  $slug = mirrorcraft_normalize_product_category_slug($slug);
  $category = mirrorcraft_get_product_category_page_data($slug);
  $path = !empty($category['path']) ? $category['path'] : $slug;

  return mirrorcraft_link_by_slug($path, '/' . trim($path, '/'));
}

function mirrorcraft_get_products_submenu_items() {
  $items = array();

  foreach (mirrorcraft_get_product_category_pages() as $slug => $category) {
    $label = $category['title'];

    $items[] = array(
      'key'   => $slug,
      'label' => $label,
      'url'   => mirrorcraft_get_product_category_page_link($slug),
    );
  }

  return $items;
}

function mirrorcraft_override_primary_menu_labels($items, $args) {
  if (empty($items) || empty($args->theme_location) || 'primary' !== $args->theme_location) {
    return $items;
  }

  foreach ($items as $item) {
    $path = wp_parse_url((string) $item->url, PHP_URL_PATH);
    $path = $path ? trim((string) untrailingslashit($path), '/') : '';

    if (0 !== strpos($path, 'products/')) {
      continue;
    }

    $slug = mirrorcraft_normalize_product_category_slug(basename($path));
    $category = mirrorcraft_get_product_category_page_data($slug);

    if (empty($category['title'])) {
      continue;
    }

    $item->title = $category['title'];
    $item->post_title = $category['title'];
    $item->url = mirrorcraft_get_product_category_page_link($slug);
  }

  return $items;
}
add_filter('wp_nav_menu_objects', 'mirrorcraft_override_primary_menu_labels', 20, 2);

function mirrorcraft_redirect_legacy_product_category_links() {
  if (is_admin() || wp_doing_ajax() || wp_is_json_request()) {
    return;
  }

  $request_path = isset($_SERVER['REQUEST_URI']) ? wp_parse_url(wp_unslash($_SERVER['REQUEST_URI']), PHP_URL_PATH) : '';
  $request_path = $request_path ? untrailingslashit($request_path) : '';

  $redirect_map = array(
    '/products/led-bathroom-mirrors'     => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
    '/products/lighted-medicine-cabinets'=> mirrorcraft_get_product_category_page_link('medicine-cabinets'),
    '/products/framed-led-mirrors'       => mirrorcraft_get_product_category_page_link('framed-mirrors'),
    '/products/custom-led-mirrors'       => mirrorcraft_get_product_category_page_link('custom-mirrors'),
    '/products/decorative-mirrors'       => mirrorcraft_get_product_category_page_link('decorative-mirror'),
    '/applications/retail-furniture' => mirrorcraft_get_application_section_page_link('retail-chain-stores'),
    '/applications/salon'            => mirrorcraft_get_application_section_page_link('beauty-wellness'),
    '/faqs'                        => mirrorcraft_link_by_slug('faq', '/faq/'),
  );

  if (empty($redirect_map[$request_path])) {
    return;
  }

  wp_safe_redirect($redirect_map[$request_path], 301);
  exit;
}
add_action('template_redirect', 'mirrorcraft_redirect_legacy_product_category_links', 1);

function mirrorcraft_get_about_submenu_page_definitions() {
  return array(
    'projects' => array(
      'title'       => __('Projects', 'mirrorcraft'),
      'path'        => 'about/projects',
      'template'    => 'page-templates/page-about-section.php',
      'eyebrow'     => __('Projects', 'mirrorcraft'),
      'hero_text'   => __('We support hospitality, residential, commercial, healthcare, and custom-led projects with a sourcing workflow that keeps specification, sampling, production, and delivery aligned.', 'mirrorcraft'),
      'hero_chips'  => array(
        __('Hospitality', 'mirrorcraft'),
        __('Residential', 'mirrorcraft'),
        __('Commercial', 'mirrorcraft'),
        __('Custom Programs', 'mirrorcraft'),
      ),
      'hero_stats'  => array(
        array('value' => __('OEM / ODM', 'mirrorcraft'), 'label' => __('Project model', 'mirrorcraft')),
        array('value' => __('Bulk Ready', 'mirrorcraft'), 'label' => __('Order support', 'mirrorcraft')),
        array('value' => __('Export Focus', 'mirrorcraft'), 'label' => __('Delivery route', 'mirrorcraft')),
      ),
      'focus_title' => __('Project work starts with the real installation environment.', 'mirrorcraft'),
      'focus_text'  => __('Different sectors ask for different mirror sizes, functions, packaging logic, and lead-time planning. We keep those decisions visible before volume production starts.', 'mirrorcraft'),
      'focus_items' => array(
        __('Match mirror families to the space type and daily-use expectation.', 'mirrorcraft'),
        __('Confirm lighting, anti-fog, storage, and finish options before quoting deeper.', 'mirrorcraft'),
        __('Support sample review, packing logic, and shipment planning for bulk programs.', 'mirrorcraft'),
      ),
      'aside_kicker' => __('Project Support', 'mirrorcraft'),
      'aside_title'  => __('How we keep custom and project orders easier to manage.', 'mirrorcraft'),
      'aside_items'  => array(
        __('Recommend the right product route based on layout, function, and buyer model.', 'mirrorcraft'),
        __('Translate drawings, target pricing, and finish direction into a workable supply brief.', 'mirrorcraft'),
        __('Keep production, inspection, and export preparation tied to the approved sample direction.', 'mirrorcraft'),
      ),
      'cards_title' => __('Where these project programs are commonly used', 'mirrorcraft'),
      'cards_text'  => __('The sectors vary, but the core need stays the same: the product has to fit the space, stay consistent in bulk, and arrive ready for rollout.', 'mirrorcraft'),
      'cards'       => array(
        array(
          'title' => __('Hospitality Projects', 'mirrorcraft'),
          'text'  => __('Guest room, suite, and amenity mirror packages that need brand consistency and renovation-friendly planning.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Residential Developments', 'mirrorcraft'),
          'text'  => __('Developer and multifamily mirror ranges that balance finish level, cost, and repeated unit layouts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Commercial Facilities', 'mirrorcraft'),
          'text'  => __('Washroom and shared-space mirror solutions that prioritize durability, easy maintenance, and a clean finished look.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Custom Programs', 'mirrorcraft'),
          'text'  => __('OEM and ODM programs for buyers who need tailored sizes, functions, packaging, or branding.', 'mirrorcraft'),
        ),
      ),
      'steps_title' => __('A practical workflow for project sourcing', 'mirrorcraft'),
      'steps_text'  => __('We keep project conversations simple by aligning the application, the product route, and the delivery plan from the start.', 'mirrorcraft'),
      'steps'       => array(
        array(
          'title' => __('Define the application', 'mirrorcraft'),
          'text'  => __('Confirm the sector, installation scene, quantity range, and feature priorities first.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Match the specification', 'mirrorcraft'),
          'text'  => __('Select the right mirror family, dimensions, lighting direction, and packaging requirements.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Review sample and quotation', 'mirrorcraft'),
          'text'  => __('Use sampling and commercial review to lock the brief before production.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Launch production and delivery', 'mirrorcraft'),
          'text'  => __('Move into manufacturing, inspection, packing, and shipment against the approved route.', 'mirrorcraft'),
        ),
      ),
      'cta_title'   => __('Discuss the mirror route that fits your project', 'mirrorcraft'),
      'cta_text'    => __('Share the sector, quantity plan, drawings, and feature needs, and we will recommend a suitable mirror or cabinet solution.', 'mirrorcraft'),
      'cta_button'  => __('Request a Quote', 'mirrorcraft'),
    ),
    'our-partners' => array(
      'title'       => __('Our Partners', 'mirrorcraft'),
      'path'        => 'about/our-partners',
      'template'    => 'page-templates/page-about-section.php',
      'eyebrow'     => __('Our Partners', 'mirrorcraft'),
      'hero_text'   => __('We work with brand owners, importers, distributors, and project teams that need a dependable LED mirror manufacturing partner with clear communication and repeat-order support.', 'mirrorcraft'),
      'hero_chips'  => array(
        __('Brand Owners', 'mirrorcraft'),
        __('Importers', 'mirrorcraft'),
        __('Distributors', 'mirrorcraft'),
        __('Project Teams', 'mirrorcraft'),
      ),
      'hero_stats'  => array(
        array('value' => __('OEM / ODM', 'mirrorcraft'), 'label' => __('Partnership model', 'mirrorcraft')),
        array('value' => __('Custom Ready', 'mirrorcraft'), 'label' => __('Development support', 'mirrorcraft')),
        array('value' => __('Repeat Orders', 'mirrorcraft'), 'label' => __('Supply focus', 'mirrorcraft')),
      ),
      'focus_title' => __('Different partners need different kinds of support.', 'mirrorcraft'),
      'focus_text'  => __('The best manufacturing relationships are built around clear responsibilities, realistic commercial planning, and a product route that fits the partner business model.', 'mirrorcraft'),
      'focus_items' => array(
        __('Brand owners usually need custom development, packaging, and product positioning support.', 'mirrorcraft'),
        __('Importers and distributors often focus on lead time, repeat quality, and assortment planning.', 'mirrorcraft'),
        __('Project teams need cleaner specification alignment, sampling, and shipment coordination.', 'mirrorcraft'),
      ),
      'aside_kicker' => __('Partnership Fit', 'mirrorcraft'),
      'aside_title'  => __('What our partners usually value most', 'mirrorcraft'),
      'aside_items'  => array(
        __('One supplier across multiple LED mirror and cabinet categories.', 'mirrorcraft'),
        __('Responsive engineering support before bulk production begins.', 'mirrorcraft'),
        __('Export-minded follow-through on inspection, packing, and delivery readiness.', 'mirrorcraft'),
      ),
      'cards_title' => __('Partner types we support', 'mirrorcraft'),
      'cards_text'  => __('Each route is different, but the goal stays the same: reduce sourcing friction and make scale-up easier.', 'mirrorcraft'),
      'cards'       => array(
        array(
          'title' => __('Private Label Brands', 'mirrorcraft'),
          'text'  => __('Custom mirror development for brands that need design, function, and packaging decisions handled as one program.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Importers & Distributors', 'mirrorcraft'),
          'text'  => __('Repeat-order supply support for buyers who need category clarity, stable quality, and cleaner export coordination.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Project Buyers', 'mirrorcraft'),
          'text'  => __('Project-facing support for sampling, specification review, and shipment planning across larger rollouts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Retail Programs', 'mirrorcraft'),
          'text'  => __('Product families built for assortment planning, repeated launch schedules, and market-specific positioning.', 'mirrorcraft'),
        ),
      ),
      'steps_title' => __('A simple way we onboard new partners', 'mirrorcraft'),
      'steps_text'  => __('We usually start by understanding the business model, then shape the right product and delivery workflow around it.', 'mirrorcraft'),
      'steps'       => array(
        array(
          'title' => __('Understand the route', 'mirrorcraft'),
          'text'  => __('Review the sales channel, target market, and quantity range first.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Build the product plan', 'mirrorcraft'),
          'text'  => __('Match the right mirror families, feature mix, and packaging approach to the partner need.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Confirm sample and pricing', 'mirrorcraft'),
          'text'  => __('Use samples and quotations to align the commercial direction before launch.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Scale supply with control', 'mirrorcraft'),
          'text'  => __('Move into production, inspection, and delivery planning once the brief is approved.', 'mirrorcraft'),
        ),
      ),
      'cta_title'   => __('Looking for a long-term mirror manufacturing partner?', 'mirrorcraft'),
      'cta_text'    => __('Tell us your product category, market, and business model, and we will recommend the best way to work together.', 'mirrorcraft'),
      'cta_button'  => __('Request a Quote', 'mirrorcraft'),
    ),
    'technology' => array(
      'title'       => __('Technology', 'mirrorcraft'),
      'path'        => 'about/technology',
      'template'    => 'page-templates/page-about-section.php',
      'eyebrow'     => __('Technology', 'mirrorcraft'),
      'hero_text'   => __('We focus on practical LED mirror technology that improves daily use, strengthens product positioning, and helps B2B buyers create more competitive collections.', 'mirrorcraft'),
      'hero_chips'  => array(
        __('Touch Control', 'mirrorcraft'),
        __('Anti-fog', 'mirrorcraft'),
        __('Dimmable Light', 'mirrorcraft'),
        __('Cabinet Functions', 'mirrorcraft'),
      ),
      'hero_stats'  => array(
        array('value' => __('Lighting', 'mirrorcraft'), 'label' => __('Core performance area', 'mirrorcraft')),
        array('value' => __('Smart Options', 'mirrorcraft'), 'label' => __('Value-add route', 'mirrorcraft')),
        array('value' => __('Customizable', 'mirrorcraft'), 'label' => __('Market adaptation', 'mirrorcraft')),
      ),
      'focus_title' => __('The functions buyers usually compare first', 'mirrorcraft'),
      'focus_text'  => __('Technology should support the market plan, not complicate it. We help buyers choose the right function mix based on customer expectations, price level, and application.', 'mirrorcraft'),
      'focus_items' => array(
        __('Touch switch, sensor, and dimming combinations.', 'mirrorcraft'),
        __('Anti-fog, defogging, and bathroom-use practicality.', 'mirrorcraft'),
        __('Color temperature control, Bluetooth, clock, and cabinet integration where needed.', 'mirrorcraft'),
      ),
      'aside_kicker' => __('Function Planning', 'mirrorcraft'),
      'aside_title'  => __('Technology should stay aligned with the customer type you are targeting.', 'mirrorcraft'),
      'aside_items'  => array(
        __('Retail collections often need stronger visible feature value.', 'mirrorcraft'),
        __('Hospitality projects usually prioritize ease of use and reliability.', 'mirrorcraft'),
        __('Residential programs need a practical cost-function balance.', 'mirrorcraft'),
      ),
      'cards_title' => __('Technology modules we commonly support', 'mirrorcraft'),
      'cards_text'  => __('Different buyers need different combinations of lighting, control, and integrated functionality. The right answer depends on the market route, not just the product spec.', 'mirrorcraft'),
      'cards'       => array(
        array(
          'title' => __('Lighting Control', 'mirrorcraft'),
          'text'  => __('Dimming, front-lit and backlit combinations, and color temperature adjustments for different bathroom and vanity experiences.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Anti-Fog & Bathroom Use', 'mirrorcraft'),
          'text'  => __('Practical heating and defogging options that support mirror clarity in humid-use environments.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Smart Add-ons', 'mirrorcraft'),
          'text'  => __('Bluetooth, clock, sensor, and other smart functions for buyers who want stronger feature differentiation.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Cabinet Integration', 'mirrorcraft'),
          'text'  => __('Lighting and storage combinations for medicine cabinets and other multi-function bathroom products.', 'mirrorcraft'),
        ),
      ),
      'steps_title' => __('A practical way to decide the right function set', 'mirrorcraft'),
      'steps_text'  => __('We usually help buyers narrow the function mix by working back from customer type, project environment, installation realities, and price positioning.', 'mirrorcraft'),
      'steps'       => array(
        array(
          'title' => __('Buyer Goal', 'mirrorcraft'),
          'text'  => __('Confirm whether the focus is retail appeal, project reliability, or private label differentiation.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Feature Selection', 'mirrorcraft'),
          'text'  => __('Select lighting, anti-fog, control, and cabinet functions based on actual market fit.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Prototype Review', 'mirrorcraft'),
          'text'  => __('Use sample evaluation to confirm usability, visual impact, and price-function balance.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production Route', 'mirrorcraft'),
          'text'  => __('Translate the approved function package into a stable production and packing route.', 'mirrorcraft'),
        ),
      ),
      'cta_title'   => __('Need help choosing the right mirror functions for your market?', 'mirrorcraft'),
      'cta_text'    => __('Tell us the product type, target customer, and feature direction you are considering, and we will help refine the function mix.', 'mirrorcraft'),
      'cta_button'  => __('Request a Quote', 'mirrorcraft'),
    ),
    'production-workshop' => array(
      'title'       => __('Production Workshop', 'mirrorcraft'),
      'path'        => 'about/production-workshop',
      'template'    => 'page-templates/page-about-section.php',
      'eyebrow'     => __('Production Workshop', 'mirrorcraft'),
      'hero_text'   => __('Our workshop structure is designed to keep glass processing, component preparation, assembly, inspection, and packaging closer together so buyers get more consistent results and clearer lead-time planning.', 'mirrorcraft'),
      'hero_chips'  => array(
        __('Injection Workshop', 'mirrorcraft'),
        __('Glass Processing', 'mirrorcraft'),
        __('Assembly Lines', 'mirrorcraft'),
        __('Packing Area', 'mirrorcraft'),
      ),
      'hero_stats'  => array(
        array('value' => __('100+ Sets', 'mirrorcraft'), 'label' => __('Production equipment', 'mirrorcraft')),
        array('value' => __('10 Lines', 'mirrorcraft'), 'label' => __('Automated production', 'mirrorcraft')),
        array('value' => __('600,000+', 'mirrorcraft'), 'label' => __('Annual mirror output', 'mirrorcraft')),
      ),
      'focus_title' => __('Bringing critical production steps together improves control.', 'mirrorcraft'),
      'focus_text'  => __('The workshop layout is not just about capacity. It helps us shorten coordination loops, improve process consistency, and respond faster when custom or bulk orders move into production.', 'mirrorcraft'),
      'focus_items' => array(
        __('Keep component preparation and assembly aligned with the approved specification.', 'mirrorcraft'),
        __('Reduce handoff gaps between production, inspection, and export packing.', 'mirrorcraft'),
        __('Support higher-volume orders with a more organized manufacturing rhythm.', 'mirrorcraft'),
      ),
      'aside_kicker' => __('Factory Depth', 'mirrorcraft'),
      'aside_title'  => __('What buyers usually notice from a stronger workshop system', 'mirrorcraft'),
      'aside_items'  => array(
        __('Cleaner visibility into production readiness and repeat-order planning.', 'mirrorcraft'),
        __('Faster response when custom development needs engineering adjustments.', 'mirrorcraft'),
        __('Better consistency across mirror glass, frames, electronics, and final packing.', 'mirrorcraft'),
      ),
      'cards_title' => __('Key workshop capabilities', 'mirrorcraft'),
      'cards_text'  => __('Our production environment combines capacity with process visibility, which is especially important for OEM, ODM, and export-oriented orders.', 'mirrorcraft'),
      'cards'       => array(
        array(
          'title' => __('Injection Workshop', 'mirrorcraft'),
          'text'  => __('Component supply can stay more stable because key molded parts are managed through dedicated in-house equipment.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Glass Processing', 'mirrorcraft'),
          'text'  => __('Key glass operations are handled with closer coordination to mirror sizing, edge treatment, and finishing requirements.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Assembly Lines', 'mirrorcraft'),
          'text'  => __('Lighting, electronics, structure, and appearance checks stay closer to the build process instead of being treated as separate steps.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Packing & Dispatch', 'mirrorcraft'),
          'text'  => __('Export packing and shipment preparation are organized around the approved project or assortment brief.', 'mirrorcraft'),
        ),
      ),
      'steps_title' => __('How a mirror order moves through the workshop', 'mirrorcraft'),
      'steps_text'  => __('The goal is to keep every stage connected to the same approved product brief.', 'mirrorcraft'),
      'steps'       => array(
        array(
          'title' => __('Prepare materials', 'mirrorcraft'),
          'text'  => __('Confirm glass, frame, electronics, and accessory readiness before build-up starts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Run production', 'mirrorcraft'),
          'text'  => __('Process mirror components through the right workshop sequence for the approved specification.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Inspect and test', 'mirrorcraft'),
          'text'  => __('Check appearance, lighting, controls, and structural fit before packing approval.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Pack and dispatch', 'mirrorcraft'),
          'text'  => __('Prepare finished goods for bulk shipment, export protection, and project labeling needs.', 'mirrorcraft'),
        ),
      ),
      'cta_title'   => __('Need a factory with stronger workshop coordination?', 'mirrorcraft'),
      'cta_text'    => __('Tell us your product type, annual demand, and customization needs, and we will recommend the right supply route.', 'mirrorcraft'),
      'cta_button'  => __('Request a Quote', 'mirrorcraft'),
    ),
    'quality-control' => array(
      'title'       => __('Quality Control', 'mirrorcraft'),
      'path'        => 'about/quality-control',
      'template'    => 'page-templates/page-about-section.php',
      'eyebrow'     => __('Quality Control', 'mirrorcraft'),
      'hero_text'   => __('B2B buyers need more than attractive photos. They need confidence that materials, functions, assembly, and packing have been checked with repeat orders in mind.', 'mirrorcraft'),
      'hero_chips'  => array(
        __('Material Check', 'mirrorcraft'),
        __('Functional Test', 'mirrorcraft'),
        __('Final Inspection', 'mirrorcraft'),
        __('Export Packing', 'mirrorcraft'),
      ),
      'hero_stats'  => array(
        array('value' => __('Incoming QC', 'mirrorcraft'), 'label' => __('Raw material review', 'mirrorcraft')),
        array('value' => __('Assembly QC', 'mirrorcraft'), 'label' => __('In-process checking', 'mirrorcraft')),
        array('value' => __('Packing Review', 'mirrorcraft'), 'label' => __('Shipment preparation', 'mirrorcraft')),
      ),
      'focus_title' => __('What quality control should mean for B2B buyers', 'mirrorcraft'),
      'focus_text'  => __('Quality control is not only about catching defects. It is about keeping specifications, appearance, functionality, and packing aligned so customers receive a more dependable batch.', 'mirrorcraft'),
      'focus_items' => array(
        __('Raw material and accessory verification before assembly.', 'mirrorcraft'),
        __('Lighting, switch, and anti-fog checks during production flow.', 'mirrorcraft'),
        __('Appearance review covering finish, edges, and mirror presentation.', 'mirrorcraft'),
        __('Protective packaging checks before outbound shipment.', 'mirrorcraft'),
      ),
      'aside_kicker' => __('Buyer Confidence', 'mirrorcraft'),
      'aside_title'  => __('The goal is consistency customers can reorder with more confidence.', 'mirrorcraft'),
      'aside_items'  => array(
        __('Fewer surprises between sample approval and bulk production.', 'mirrorcraft'),
        __('Clearer follow-through on features, structure, and packaging.', 'mirrorcraft'),
        __('Better shipment readiness for export-oriented orders.', 'mirrorcraft'),
      ),
      'cards_title' => __('Core quality checkpoints in our workflow', 'mirrorcraft'),
      'cards_text'  => __('Different products need different attention points, but the control approach stays focused on materials, function, visual consistency, and packing reliability.', 'mirrorcraft'),
      'cards'       => array(
        array(
          'title' => __('Incoming Material Review', 'mirrorcraft'),
          'text'  => __('Mirror glass, frame parts, cabinet accessories, and electrical components are reviewed before entering assembly flow.', 'mirrorcraft'),
        ),
        array(
          'title' => __('In-Process Inspection', 'mirrorcraft'),
          'text'  => __('Assembly, alignment, finish details, and structural fit are checked during production rather than left only to the end.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Functional Testing', 'mirrorcraft'),
          'text'  => __('Lighting output, controls, anti-fog response, and other selected functions are reviewed before packing.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Final Packing Review', 'mirrorcraft'),
          'text'  => __('The final stage focuses on surface protection, carton suitability, and shipment readiness for export delivery.', 'mirrorcraft'),
        ),
      ),
      'steps_title' => __('A simpler quality flow buyers can understand', 'mirrorcraft'),
      'steps_text'  => __('This gives customers a clearer view of how product control stays connected to the actual delivery outcome.', 'mirrorcraft'),
      'steps'       => array(
        array(
          'title' => __('Material Confirmation', 'mirrorcraft'),
          'text'  => __('Check core parts before they enter the production flow.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Assembly Monitoring', 'mirrorcraft'),
          'text'  => __('Review structure, fit, and appearance during build-up, not only at the end.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Function Check', 'mirrorcraft'),
          'text'  => __('Test electrical and lighting functions before approval for packing.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Packing & Dispatch', 'mirrorcraft'),
          'text'  => __('Prepare finished products with protective packing suitable for project and export orders.', 'mirrorcraft'),
        ),
      ),
      'cta_title'   => __('Need a supplier that keeps product control and export readiness in view?', 'mirrorcraft'),
      'cta_text'    => __('Contact us with your product type, quality expectations, and packaging needs, and we will discuss the right supply route.', 'mirrorcraft'),
      'cta_button'  => __('Request a Quote', 'mirrorcraft'),
    ),
    'video-blog' => array(
      'title'       => __('Video Blog', 'mirrorcraft'),
      'path'        => 'about/video-blog',
      'template'    => 'page-templates/page-about-section.php',
      'eyebrow'     => __('Video Blog', 'mirrorcraft'),
      'hero_text'   => __('Our video content gives buyers a clearer view of mirror production, factory capability, packaging details, and the product features that matter in real projects and retail programs.', 'mirrorcraft'),
      'hero_chips'  => array(
        __('Factory Walkthroughs', 'mirrorcraft'),
        __('Product Demos', 'mirrorcraft'),
        __('Packaging Insights', 'mirrorcraft'),
        __('Project Inspiration', 'mirrorcraft'),
      ),
      'hero_stats'  => array(
        array('value' => __('Product Video', 'mirrorcraft'), 'label' => __('Buyer education', 'mirrorcraft')),
        array('value' => __('Factory View', 'mirrorcraft'), 'label' => __('Production visibility', 'mirrorcraft')),
        array('value' => __('Use Cases', 'mirrorcraft'), 'label' => __('Application stories', 'mirrorcraft')),
      ),
      'focus_title' => __('Video helps buyers see what photos and PDFs cannot.', 'mirrorcraft'),
      'focus_text'  => __('For many buyers, video content makes it easier to understand the real factory environment, product functions, size proportions, and packaging details before they move deeper into sourcing.', 'mirrorcraft'),
      'focus_items' => array(
        __('Show how lighting, anti-fog, and smart features behave in real use.', 'mirrorcraft'),
        __('Help buyers understand factory scale, assembly flow, and inspection practices.', 'mirrorcraft'),
        __('Support project and retail teams with clearer visual references during approval.', 'mirrorcraft'),
      ),
      'aside_kicker' => __('Content Use', 'mirrorcraft'),
      'aside_title'  => __('How buyers usually use our video content', 'mirrorcraft'),
      'aside_items'  => array(
        __('Share product demos internally before sample approval.', 'mirrorcraft'),
        __('Review packaging and feature details with distributors or project stakeholders.', 'mirrorcraft'),
        __('Use factory videos to build confidence in manufacturing capability and follow-through.', 'mirrorcraft'),
      ),
      'cards_title' => __('Video topics buyers ask for most', 'mirrorcraft'),
      'cards_text'  => __('The strongest content usually answers practical sourcing questions, not just marketing ones.', 'mirrorcraft'),
      'cards'       => array(
        array(
          'title' => __('Factory Walkthroughs', 'mirrorcraft'),
          'text'  => __('A closer look at workshops, assembly flow, quality checkpoints, and shipment preparation.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Product Feature Demos', 'mirrorcraft'),
          'text'  => __('Short videos that show lighting control, anti-fog, cabinet functions, and other user-facing details.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Packaging & Delivery', 'mirrorcraft'),
          'text'  => __('Content that explains how mirrors are protected, labeled, and prepared for export or project delivery.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Application Stories', 'mirrorcraft'),
          'text'  => __('Examples that connect the right mirror family to hospitality, residential, healthcare, and other sectors.', 'mirrorcraft'),
        ),
      ),
      'steps_title' => __('How we build useful buyer-facing video content', 'mirrorcraft'),
      'steps_text'  => __('The best videos stay practical and answer the questions buyers usually ask before ordering.', 'mirrorcraft'),
      'steps'       => array(
        array(
          'title' => __('Choose the topic', 'mirrorcraft'),
          'text'  => __('Start with the product feature, process, or application story buyers need clarified most.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Show the real detail', 'mirrorcraft'),
          'text'  => __('Capture the product, workshop, or packaging scene in a way that supports sourcing decisions.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Share with context', 'mirrorcraft'),
          'text'  => __('Pair the video with specification points, application notes, or project guidance.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Use it in the sales process', 'mirrorcraft'),
          'text'  => __('Bring the content into sample review, quotation, or project planning conversations.', 'mirrorcraft'),
        ),
      ),
      'cta_title'   => __('Want product or factory videos for your buying team?', 'mirrorcraft'),
      'cta_text'    => __('Tell us what product family or production topic you want to review, and we will guide you to the right video content.', 'mirrorcraft'),
      'cta_button'  => __('Request a Quote', 'mirrorcraft'),
    ),
    'download-catalogue' => array(
      'title'    => __('Download Catalogue', 'mirrorcraft'),
      'path'     => 'about/download-catalogue',
      'template' => 'page-templates/page-download-catalogue.php',
    ),
    'faqs' => array(
      'title'    => __('FAQs', 'mirrorcraft'),
      'path'     => 'faq',
      'template' => 'page-templates/page-faqs.php',
    ),
  );
}

function mirrorcraft_get_about_submenu_item_definitions() {
  $items = array(
    array(
      'key'   => 'about',
      'label' => __('About Us', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('about', '/about'),
    ),
  );

  foreach (array('projects', 'our-partners', 'technology', 'production-workshop', 'quality-control') as $slug) {
    $page = mirrorcraft_get_about_section_page_data($slug);

    if (empty($page)) {
      continue;
    }

    $items[] = array(
      'key'   => $slug,
      'label' => $page['title'],
      'url'   => mirrorcraft_get_about_section_page_link($slug),
    );
  }

  $items[] = array(
    'key'   => 'blog',
    'label' => __('Blog', 'mirrorcraft'),
    'url'   => mirrorcraft_link_by_slug('blog', '/blog'),
  );

  $video_blog_page = mirrorcraft_get_about_section_page_data('video-blog');

  if (!empty($video_blog_page)) {
    $items[] = array(
      'key'   => 'video-blog',
      'label' => $video_blog_page['title'],
      'url'   => mirrorcraft_get_about_section_page_link('video-blog'),
    );
  }

  $faq_page = mirrorcraft_get_about_section_page_data('faqs');

  if (!empty($faq_page)) {
    $items[] = array(
      'key'   => 'faqs',
      'label' => __('FAQs', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug($faq_page['path'], '/' . trim($faq_page['path'], '/')),
    );
  }

  return $items;
}

function mirrorcraft_get_about_submenu_pages() {
  return mirrorcraft_get_about_submenu_page_definitions();
  return array(
    'projects' => array(
      'title'         => __('Projects', 'mirrorcraft'),
      'path'          => 'about/projects',
      'template'      => 'page-templates/page-projects.php',
      'eyebrow'       => __('Projects', 'mirrorcraft'),
      'hero_title'    => __('Mirror solutions built for hospitality, commercial, multifamily, healthcare, and senior living', 'mirrorcraft'),
      'hero_text'     => __('We support project teams who need LED bathroom mirrors and medicine cabinets matched to real project needs, layout realities, and dependable delivery follow-through.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Hotel Projects', 'mirrorcraft'),
        __('Commercial Fit-Outs', 'mirrorcraft'),
        __('Multifamily Programs', 'mirrorcraft'),
        __('Healthcare & Senior Living', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Hospitality', 'mirrorcraft'), 'label' => __('Core project route', 'mirrorcraft')),
        array('value' => __('OEM / ODM', 'mirrorcraft'), 'label' => __('Program model', 'mirrorcraft')),
        array('value' => __('Bulk Ready', 'mirrorcraft'), 'label' => __('Order support', 'mirrorcraft')),
        array('value' => __('Export Focus', 'mirrorcraft'), 'label' => __('Delivery approach', 'mirrorcraft')),
      ),
      'focus_title'   => __('Typical project requirements we help teams resolve early', 'mirrorcraft'),
      'focus_text'    => __('Different applications ask for different lighting, storage, installation, and maintenance decisions. Our role is to match the mirror solution to the real use case, not just send a generic catalog.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Consistent styling across volume orders', 'mirrorcraft'),
        __('Anti-fog, dimming, and practical bathroom functions', 'mirrorcraft'),
        __('Project-friendly packaging and specification confirmation', 'mirrorcraft'),
        __('Clear communication on lead time and shipment readiness', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Project Support', 'mirrorcraft'),
      'aside_title'   => __('How we help project teams reduce confusion during sourcing', 'mirrorcraft'),
      'aside_items'   => array(
        __('Product recommendation based on application, layout, and maintenance priorities', 'mirrorcraft'),
        __('Size, finish, function, and packaging guidance for project teams', 'mirrorcraft'),
        __('Quotation and sample discussion before production', 'mirrorcraft'),
        __('Follow-up that stays focused on delivery practicality', 'mirrorcraft'),
      ),
      'cards_title'   => __('Where these mirror programs are commonly used', 'mirrorcraft'),
      'cards_text'    => __('Applications vary, but the buying logic is similar: the product has to fit the project, look right for the market, and arrive with fewer surprises.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Hotel Bathrooms', 'mirrorcraft'),
          'text'  => __('Mirror solutions for hospitality projects that need modern appearance, functional lighting, anti-fog support, and bulk order consistency.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Multifamily Projects', 'mirrorcraft'),
          'text'  => __('Practical mirror and cabinet routes for developers who need easy specification alignment, stable quality, and cleaner installation planning.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Healthcare Bathrooms', 'mirrorcraft'),
          'text'  => __('Mirror and cabinet programs for healthcare spaces that need clear lighting, dependable functionality, and easy maintenance.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Architect-Led Custom Programs', 'mirrorcraft'),
          'text'  => __('Custom mirror development for architects, designers, purchasers, and facilities teams that need a clearer route from concept to approved specification.', 'mirrorcraft'),
        ),
      ),
      'steps_title'   => __('A project workflow that keeps sourcing practical', 'mirrorcraft'),
      'steps_text'    => __('We keep project-style orders clear by confirming application needs early and keeping sampling, production, inspection, and shipment aligned to the same brief.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Application Review', 'mirrorcraft'),
          'text'  => __('We first confirm the project type, target style, quantity range, and expected functions.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Specification Match', 'mirrorcraft'),
          'text'  => __('Mirror size, frame direction, cabinet structure, and lighting details are aligned with the intended use.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Sample / Quotation', 'mirrorcraft'),
          'text'  => __('Commercial terms and development expectations are clarified before final production planning.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production & Shipment', 'mirrorcraft'),
          'text'  => __('Manufacturing, inspection, packing, and dispatch stay connected to the approved requirement set.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Discuss the mirror route that fits your project or sector', 'mirrorcraft'),
      'cta_text'      => __('Send your application type, quantity plan, drawings, and feature needs, and our team will recommend a suitable mirror or cabinet solution.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'technology' => array(
      'title'         => __('Technology', 'mirrorcraft'),
      'path'          => 'about/technology',
      'template'      => 'page-templates/page-about-section.php',
      'eyebrow'       => __('Technology', 'mirrorcraft'),
      'hero_title'    => __('Technology options that help buyers build stronger mirror programs', 'mirrorcraft'),
      'hero_text'     => __('We focus on practical LED mirror functions that improve daily use, strengthen product positioning, and help B2B buyers create more competitive collections.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Touch Control', 'mirrorcraft'),
        __('Anti-fog', 'mirrorcraft'),
        __('Dimmable Light', 'mirrorcraft'),
        __('Cabinet Functions', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Lighting', 'mirrorcraft'), 'label' => __('Core performance area', 'mirrorcraft')),
        array('value' => __('Smart Options', 'mirrorcraft'), 'label' => __('Value-add route', 'mirrorcraft')),
        array('value' => __('User Focus', 'mirrorcraft'), 'label' => __('Design principle', 'mirrorcraft')),
        array('value' => __('Customizable', 'mirrorcraft'), 'label' => __('Market adaptation', 'mirrorcraft')),
      ),
      'focus_title'   => __('The functions buyers usually compare first', 'mirrorcraft'),
      'focus_text'    => __('Technology should support the market plan, not complicate it. We help buyers choose the right function mix based on customer expectations, price level, and application.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Touch switch, sensor, and dimming combinations', 'mirrorcraft'),
        __('Anti-fog, defogging, and bathroom-use practicality', 'mirrorcraft'),
        __('Color temperature control and lighting style direction', 'mirrorcraft'),
        __('Bluetooth, clock, and cabinet integration where needed', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Function Planning', 'mirrorcraft'),
      'aside_title'   => __('Technology should stay aligned with the customer type you are targeting', 'mirrorcraft'),
      'aside_items'   => array(
        __('Retail collections often need stronger visible feature value', 'mirrorcraft'),
        __('Hospitality projects usually prioritize ease of use and reliability', 'mirrorcraft'),
        __('Apartment and residential programs need practical cost-function balance', 'mirrorcraft'),
        __('Custom programs benefit from a cleaner feature hierarchy from the start', 'mirrorcraft'),
      ),
      'cards_title'   => __('Technology modules we commonly support', 'mirrorcraft'),
      'cards_text'    => __('Different buyers need different combinations of lighting, control, and integrated functionality. The right answer depends on the market route, not just the product spec.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Lighting Control', 'mirrorcraft'),
          'text'  => __('Dimming, front-lit and backlit combinations, and color temperature adjustments for different bathroom and vanity experiences.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Anti-Fog & Bathroom Use', 'mirrorcraft'),
          'text'  => __('Practical heating and defogging options that support mirror clarity in humid-use environments.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Smart Add-ons', 'mirrorcraft'),
          'text'  => __('Bluetooth, clock, sensor, and other smart functions for buyers who want stronger feature differentiation.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Cabinet Integration', 'mirrorcraft'),
          'text'  => __('Lighting and storage combinations for medicine cabinets and other multi-function bathroom products.', 'mirrorcraft'),
        ),
      ),
      'steps_title'   => __('A practical way to decide the right function set', 'mirrorcraft'),
      'steps_text'    => __('We usually help buyers narrow the function mix by working back from customer type, project environment, installation realities, and price positioning.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Buyer Goal', 'mirrorcraft'),
          'text'  => __('We confirm whether the focus is retail appeal, project reliability, or private label differentiation.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Feature Selection', 'mirrorcraft'),
          'text'  => __('Lighting, anti-fog, control, and cabinet functions are selected based on actual market fit.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Prototype Review', 'mirrorcraft'),
          'text'  => __('Sample evaluation helps buyers confirm usability, visual impact, and price-function balance.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production Route', 'mirrorcraft'),
          'text'  => __('The approved function package is then translated into a stable production and packing route.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Need help choosing the right mirror functions for your market?', 'mirrorcraft'),
      'cta_text'      => __('Tell us the product type, target customer, and feature direction you are considering, and we will help refine the function mix.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'quality-control' => array(
      'title'         => __('Quality Control', 'mirrorcraft'),
      'path'          => 'about/quality-control',
      'template'      => 'page-templates/page-about-section.php',
      'eyebrow'       => __('Quality Control', 'mirrorcraft'),
      'hero_title'    => __('Quality control built around inspection, consistency, and shipment readiness', 'mirrorcraft'),
      'hero_text'     => __('B2B buyers need more than attractive photos. They need confidence that materials, functions, assembly, and packing have been checked with repeat orders in mind.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Material Check', 'mirrorcraft'),
        __('Functional Test', 'mirrorcraft'),
        __('Final Inspection', 'mirrorcraft'),
        __('Export Packing', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Incoming QC', 'mirrorcraft'), 'label' => __('Raw material review', 'mirrorcraft')),
        array('value' => __('Assembly QC', 'mirrorcraft'), 'label' => __('In-process checking', 'mirrorcraft')),
        array('value' => __('Function Test', 'mirrorcraft'), 'label' => __('Lighting and control review', 'mirrorcraft')),
        array('value' => __('Packing Review', 'mirrorcraft'), 'label' => __('Shipment preparation', 'mirrorcraft')),
      ),
      'focus_title'   => __('What quality control should mean for B2B buyers', 'mirrorcraft'),
      'focus_text'    => __('Quality control is not only about catching defects. It is about keeping specifications, appearance, functionality, and packing aligned so customers receive a more dependable batch.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Raw material and accessory verification before assembly', 'mirrorcraft'),
        __('Lighting, switch, and anti-fog checks during production flow', 'mirrorcraft'),
        __('Appearance review covering finish, edges, and mirror presentation', 'mirrorcraft'),
        __('Protective packaging checks before outbound shipment', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Buyer Confidence', 'mirrorcraft'),
      'aside_title'   => __('The goal is consistency customers can reorder with more confidence', 'mirrorcraft'),
      'aside_items'   => array(
        __('Fewer surprises between sample approval and bulk production', 'mirrorcraft'),
        __('Clearer follow-through on features, structure, and packaging', 'mirrorcraft'),
        __('A workflow that helps support repeat B2B programs', 'mirrorcraft'),
        __('Better shipment readiness for export-oriented orders', 'mirrorcraft'),
      ),
      'cards_title'   => __('Core quality checkpoints in our workflow', 'mirrorcraft'),
      'cards_text'    => __('Different products need different attention points, but the control approach stays focused on materials, function, visual consistency, and packing reliability.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Incoming Material Review', 'mirrorcraft'),
          'text'  => __('Mirror glass, frame parts, cabinet accessories, and electrical components are reviewed before entering assembly flow.', 'mirrorcraft'),
        ),
        array(
          'title' => __('In-Process Inspection', 'mirrorcraft'),
          'text'  => __('Assembly, alignment, finish details, and structural fit are checked during production rather than left only to the end.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Functional Testing', 'mirrorcraft'),
          'text'  => __('Lighting output, controls, anti-fog response, and other selected functions are reviewed before packing.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Final Packing Review', 'mirrorcraft'),
          'text'  => __('The final stage focuses on surface protection, carton suitability, and shipment-readiness for export delivery.', 'mirrorcraft'),
        ),
      ),
      'steps_title'   => __('A simpler quality flow buyers can understand', 'mirrorcraft'),
      'steps_text'    => __('This gives customers a clearer view of how product control stays connected to the actual delivery outcome.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Material Confirmation', 'mirrorcraft'),
          'text'  => __('Core parts are checked before they enter the production flow.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Assembly Monitoring', 'mirrorcraft'),
          'text'  => __('Structure, fit, and appearance are reviewed during build-up, not only at the end.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Function Check', 'mirrorcraft'),
          'text'  => __('Electrical and lighting functions are tested before approval for packing.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Packing & Dispatch', 'mirrorcraft'),
          'text'  => __('Finished products are prepared with protective packing suitable for project and export orders.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Need a supplier that keeps product control and export readiness in view?', 'mirrorcraft'),
      'cta_text'      => __('Contact us with your product type, quality expectations, and packaging needs, and we will discuss the right supply route.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'download-catalogue' => array(
      'title'    => __('Download Catalogue', 'mirrorcraft'),
      'path'     => 'about/download-catalogue',
      'template' => 'page-templates/page-download-catalogue.php',
    ),
    'faqs' => array(
      'title'    => __('FAQ', 'mirrorcraft'),
      'path'     => 'faq',
      'template' => 'page-templates/page-faqs.php',
    ),
  );
}

function mirrorcraft_get_about_section_page_data($slug = '') {
  $pages = mirrorcraft_get_about_submenu_pages();
  $post = null;

  if ($slug === '') {
    $post = get_queried_object();
    $slug = $post instanceof WP_Post ? $post->post_name : '';
  }

  $page = $pages[$slug] ?? array();

  if (empty($page)) {
    return array();
  }

  $post_id = $post instanceof WP_Post ? $post->ID : mirrorcraft_get_page_id_by_path($page['path'] ?? '', $page['template'] ?? '');

  if ($post_id) {
    $page_title = get_the_title($post_id);

    if ($page_title) {
      $page['title'] = $page_title;
    }
  }

  return mirrorcraft_get_about_section_page_overrides($page, $post_id);
}

function mirrorcraft_get_about_section_page_link($slug) {
  $page = mirrorcraft_get_about_section_page_data($slug);

  if (empty($page['path'])) {
    return home_url('/about');
  }

  return mirrorcraft_link_by_slug($page['path'], '/' . trim($page['path'], '/'));
}

function mirrorcraft_get_about_submenu_items() {
  return mirrorcraft_get_about_submenu_item_definitions();
  $items = array(
    array(
      'key'   => 'about',
      'label' => __('About Us', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('about', '/about'),
    ),
  );

  foreach (array('projects', 'technology', 'quality-control', 'download-catalogue') as $slug) {
    $page = mirrorcraft_get_about_section_page_data($slug);

    if (empty($page)) {
      continue;
    }

    $items[] = array(
      'key'   => $slug,
      'label' => $page['title'],
      'url'   => mirrorcraft_get_about_section_page_link($slug),
    );
  }

  $items[] = array(
    'key'   => 'blog',
    'label' => __('Blog', 'mirrorcraft'),
    'url'   => mirrorcraft_link_by_slug('blog', '/blog'),
  );

  $faq_page = mirrorcraft_get_about_section_page_data('faqs');

  if (!empty($faq_page)) {
    $items[] = array(
      'key'   => 'faqs',
      'label' => __('FAQ', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug($faq_page['path'], '/' . trim($faq_page['path'], '/')),
    );
  }

  return $items;
}

function mirrorcraft_get_application_sector_product_catalog() {
  return array(
    'led-bathroom-mirrors' => array(
      'title' => __('LED Bathroom Mirrors', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'link'  => mirrorcraft_get_product_category_page_link('led-bathroom-mirrors'),
    ),
    'lighted-medicine-cabinets' => array(
      'title' => __('Lighted Medicine Cabinets', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
      'link'  => mirrorcraft_get_product_category_page_link('lighted-medicine-cabinets'),
    ),
    'framed-led-mirrors' => array(
      'title' => __('Framed LED Mirrors', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'link'  => mirrorcraft_get_product_category_page_link('framed-led-mirrors'),
    ),
    'makeup-mirrors' => array(
      'title' => __('Makeup Mirrors', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
      'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
    ),
    'custom-led-mirrors' => array(
      'title' => __('Custom LED Mirrors', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
      'link'  => mirrorcraft_get_product_category_page_link('custom-led-mirrors'),
    ),
  );
}

function mirrorcraft_get_application_sector_image($key) {
  $image_keys = array(
    'led-bathroom-mirrors'      => 'bathroom-mirror',
    'lighted-medicine-cabinets' => 'medicine-cabinet',
    'framed-led-mirrors'        => 'bathroom-mirror',
    'makeup-mirrors'            => 'makeup-mirror',
    'custom-led-mirrors'        => 'custom-mirror',
  );

  $lookup = $image_keys[$key] ?? 'bathroom-mirror';
  $image = mirrorcraft_get_product_category_image_url($lookup);

  if ($image) {
    return $image;
  }

  return mirrorcraft_get_active_hero_image_url();
}

function mirrorcraft_build_application_sector_products($items) {
  $catalog = mirrorcraft_get_application_sector_product_catalog();
  $products = array();

  foreach ($items as $item) {
    $key = $item['key'] ?? '';

    if ($key === '' || empty($catalog[$key])) {
      continue;
    }

    $products[] = array(
      'title' => $catalog[$key]['title'],
      'text'  => $item['text'] ?? '',
      'image' => $catalog[$key]['image'],
      'link'  => $catalog[$key]['link'],
    );
  }

  return $products;
}

function mirrorcraft_build_application_sector_areas($areas) {
  $items = array();

  foreach ($areas as $area) {
    $items[] = array(
      'title' => $area['title'] ?? '',
      'text'  => $area['text'] ?? '',
      'image' => mirrorcraft_get_application_sector_image($area['image'] ?? 'led-bathroom-mirrors'),
    );
  }

  return $items;
}

function mirrorcraft_get_application_sector_steps() {
  return array(
    array(
      'title' => __('Define the environment', 'mirrorcraft'),
      'text'  => __('Confirm the space type, traffic level, layout limits, and daily-use expectations before choosing a product family.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Match the product family', 'mirrorcraft'),
      'text'  => __('Select the right mirror, cabinet, or custom route based on function, finish, and installation needs.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Review sample and quotation', 'mirrorcraft'),
      'text'  => __('Use samples and commercial review to align the specification before bulk production.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Launch production and delivery', 'mirrorcraft'),
      'text'  => __('Move into manufacturing, inspection, export packing, and shipment planning against the approved brief.', 'mirrorcraft'),
    ),
  );
}

function mirrorcraft_build_application_sector_page($slug, $definition) {
  $label = $definition['label'];
  $cards = array();

  foreach ($definition['product_focus'] ?? array() as $focus_card) {
    $cards[] = array(
      'title' => $focus_card['title'],
      'text'  => $focus_card['text'],
    );
  }

  return array(
    'title'         => $label,
    'path'          => 'applications/' . $slug,
    'template'      => 'page-templates/page-application-section.php',
    'eyebrow'       => $label,
    'hero_title'    => $definition['hero_title'],
    'hero_text'     => $definition['intro'],
    'hero_chips'    => $definition['hero_chips'] ?? array(),
    'hero_stats'    => $definition['hero_stats'] ?? array(),
    'image'         => mirrorcraft_get_application_sector_image($definition['image_key'] ?? 'led-bathroom-mirrors'),
    'focus_title'   => sprintf(__('What matters most in %s environments', 'mirrorcraft'), $label),
    'focus_text'    => $definition['focus_text'] ?? $definition['intro'],
    'focus_items'   => $definition['summary'] ?? array(),
    'aside_kicker'  => __('Sector Priorities', 'mirrorcraft'),
    'aside_title'   => sprintf(__('Key planning points for %s programs', 'mirrorcraft'), $label),
    'aside_items'   => $definition['priorities'] ?? array(),
    'scenario_intro_title' => $label,
    'scenario_intro_text'  => $definition['scenario_intro_text'] ?? $definition['intro'],
    'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
    'scenario_areas'       => mirrorcraft_build_application_sector_areas($definition['areas'] ?? array()),
    'cards_title'          => sprintf(__('Recommended mirror directions for %s', 'mirrorcraft'), $label),
    'cards_text'           => __('Start with the product directions that best match the environment, then refine the spec around lighting, maintenance, and installation reality.', 'mirrorcraft'),
    'cards'                => $cards,
    'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
    'recommended_products_text'  => __('These product families are usually the strongest starting point when buyers compare mirror options for this sector.', 'mirrorcraft'),
    'recommended_products'       => mirrorcraft_build_application_sector_products($definition['recommended_products'] ?? array()),
    'steps_title'          => __('Typical workflow', 'mirrorcraft'),
    'steps_text'           => __('We keep application-driven sourcing practical by aligning environment, product route, sample review, and delivery planning from the start.', 'mirrorcraft'),
    'steps'                => mirrorcraft_get_application_sector_steps(),
    'cta_title'            => sprintf(__('Need the right mirror route for %s?', 'mirrorcraft'), $label),
    'cta_text'             => $definition['cta_text'],
    'cta_button'           => __('Request a Quote', 'mirrorcraft'),
  );
}

function mirrorcraft_get_application_sector_page_definitions() {
  $definitions = array(
    'hospitality' => array(
      'label'      => __('Hospitality', 'mirrorcraft'),
      'hero_title' => __('LED mirror programs for hospitality guest rooms, suites, and amenity spaces.', 'mirrorcraft'),
      'image_key'  => 'framed-led-mirrors',
      'intro'      => __('Hospitality projects often need a strong decorative impression without losing sight of maintenance, replacement planning, and repeatability across multiple properties.', 'mirrorcraft'),
      'hero_chips' => array(__('Guest Rooms', 'mirrorcraft'), __('Suites', 'mirrorcraft'), __('Public Washrooms', 'mirrorcraft'), __('Spa Zones', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Brand Ready', 'mirrorcraft'), 'label' => __('Rollout consistency', 'mirrorcraft')),
        array('value' => __('Anti-Fog', 'mirrorcraft'), 'label' => __('Guest bathroom fit', 'mirrorcraft')),
        array('value' => __('Bulk Ready', 'mirrorcraft'), 'label' => __('Project support', 'mirrorcraft')),
      ),
      'focus_text' => __('Hospitality mirror programs need to balance a polished guest-facing look with long-term maintainability and a product route that can repeat across many rooms and properties.', 'mirrorcraft'),
      'summary'    => array(
        __('Coordinate mirror families across guest rooms, lobbies, washrooms, and spa zones.', 'mirrorcraft'),
        __('Support repeat procurement for hotel groups, serviced apartments, and renovation cycles.', 'mirrorcraft'),
        __('Plan lighting, anti-fog, and packaging around hospitality operations and installation schedules.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Guest rooms and suites', 'mirrorcraft'), 'text' => __('Backlit and framed bathroom mirrors can be aligned to brand packages, room tiers, and renovation standards.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Lobby and public washrooms', 'mirrorcraft'), 'text' => __('Commercial-use mirror formats need a polished appearance with stronger durability and simple upkeep.', 'mirrorcraft'), 'image' => 'custom-led-mirrors'),
        array('title' => __('Spa and amenity areas', 'mirrorcraft'), 'text' => __('Dimmable lighting and vanity-oriented mirror formats help support premium guest experiences in wellness zones.', 'mirrorcraft'), 'image' => 'makeup-mirrors'),
      ),
      'product_focus' => array(
        array('title' => __('Illuminated bathroom mirrors', 'mirrorcraft'), 'text' => __('A clean hospitality staple for guestrooms that need dependable lighting and a modern visual signature.', 'mirrorcraft')),
        array('title' => __('Decorative framed vanity mirrors', 'mirrorcraft'), 'text' => __('Useful where the design brief calls for a warmer, more residential feel in suites or premium programs.', 'mirrorcraft')),
        array('title' => __('Coordinated mirror packages', 'mirrorcraft'), 'text' => __('Matching collections across guestrooms and shared spaces help create visual consistency during rollout.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Keep mounting positions, dimensions, and replacement planning consistent across room types.', 'mirrorcraft'),
        __('Select finishes and electronics that hold up to frequent guest turnover and cleaning cycles.', 'mirrorcraft'),
        __('Coordinate protective packaging for renovation logistics and multi-property shipment planning.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A dependable hospitality staple for guest bathrooms that need modern lighting and easy daily use.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('Useful for premium suites and amenity spaces that need a warmer decorative story.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('A practical route when storage and integrated lighting need to work together in bathroom layouts.', 'mirrorcraft')),
      ),
      'cta_text' => __('Share the property type, room mix, and feature needs, and we will recommend the right hospitality mirror route.', 'mirrorcraft'),
    ),
    'residential' => array(
      'label'      => __('Residential', 'mirrorcraft'),
      'hero_title' => __('Mirror solutions for homes, apartments, condos, and branded residential programs.', 'mirrorcraft'),
      'image_key'  => 'lighted-medicine-cabinets',
      'intro'      => __('Residential applications usually need the right balance between visual appeal, value engineering, and simple installation across multiple layouts or unit tiers.', 'mirrorcraft'),
      'hero_chips' => array(__('Primary Bathrooms', 'mirrorcraft'), __('Powder Rooms', 'mirrorcraft'), __('Bedrooms', 'mirrorcraft'), __('Wardrobes', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Value Ready', 'mirrorcraft'), 'label' => __('Tiered programs', 'mirrorcraft')),
        array('value' => __('Easy Install', 'mirrorcraft'), 'label' => __('Layout fit', 'mirrorcraft')),
        array('value' => __('Custom Mix', 'mirrorcraft'), 'label' => __('SKU flexibility', 'mirrorcraft')),
      ),
      'focus_text' => __('Residential programs succeed when cost, finish level, and installation simplicity all stay aligned across bathrooms, dressing zones, and repeated unit layouts.', 'mirrorcraft'),
      'summary'    => array(
        __('Support developer packages, private-label collections, and multi-unit housing programs.', 'mirrorcraft'),
        __('Align mirror dimensions with bathrooms, dressing areas, wardrobes, and entry spaces.', 'mirrorcraft'),
        __('Keep finish, controls, and feature sets consistent across different apartment or villa types.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Primary bathrooms', 'mirrorcraft'), 'text' => __('Illuminated mirrors and cabinets can add storage, task lighting, and a stronger finished look.', 'mirrorcraft'), 'image' => 'lighted-medicine-cabinets'),
        array('title' => __('Powder rooms and secondary baths', 'mirrorcraft'), 'text' => __('Compact formats help maintain design continuity while staying practical for tighter spaces.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Bedrooms and dressing zones', 'mirrorcraft'), 'text' => __('Full-length and vanity mirrors support everyday use while extending the broader interior language.', 'mirrorcraft'), 'image' => 'makeup-mirrors'),
      ),
      'product_focus' => array(
        array('title' => __('Bathroom LED mirrors', 'mirrorcraft'), 'text' => __('A flexible option for developers and home brands looking for modern styling with integrated lighting.', 'mirrorcraft')),
        array('title' => __('Mirror cabinets', 'mirrorcraft'), 'text' => __('Useful where storage efficiency and clean-lined bathroom layouts matter just as much as appearance.', 'mirrorcraft')),
        array('title' => __('Full-length mirrors', 'mirrorcraft'), 'text' => __('Suitable for dressing areas, bedrooms, and branded furniture or decor collections.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Balance cost targets with the finish and feature level expected by each housing tier.', 'mirrorcraft'),
        __('Standardize installation details so contractors can work efficiently across repeated unit layouts.', 'mirrorcraft'),
        __('Protect visual surfaces during last-mile delivery, staging, and residential handover.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A strong base option for modern residential bathrooms that need clean lighting and an easy-to-spec mirror route.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Useful for bathrooms where organized storage and integrated lighting should work together.', 'mirrorcraft')),
        array('key' => 'makeup-mirrors', 'text' => __('Helpful for vanity and dressing spaces where personal-use visibility matters more.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the housing type, target finish level, and quantity plan, and we will recommend a suitable residential mirror program.', 'mirrorcraft'),
    ),
    'commercial' => array(
      'label'      => __('Commercial', 'mirrorcraft'),
      'hero_title' => __('Commercial mirror programs for offices, mixed-use buildings, and public-facing amenities.', 'mirrorcraft'),
      'image_key'  => 'custom-led-mirrors',
      'intro'      => __('Commercial projects often combine high traffic, repeated cleaning, and tight installation windows, so specs need to stay practical as well as design-forward.', 'mirrorcraft'),
      'hero_chips' => array(__('Office Washrooms', 'mirrorcraft'), __('Reception', 'mirrorcraft'), __('Amenities', 'mirrorcraft'), __('Staff Zones', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('High Traffic', 'mirrorcraft'), 'label' => __('Daily use fit', 'mirrorcraft')),
        array('value' => __('Clean Finish', 'mirrorcraft'), 'label' => __('Professional look', 'mirrorcraft')),
        array('value' => __('Easy Service', 'mirrorcraft'), 'label' => __('Maintenance route', 'mirrorcraft')),
      ),
      'focus_text' => __('Commercial environments need mirrors that look clean, install reliably, and remain easy to maintain across public and staff-facing spaces.', 'mirrorcraft'),
      'summary'    => array(
        __('Support office, mixed-use, and shared amenity environments with repeatable specifications.', 'mirrorcraft'),
        __('Plan for high-traffic use, quick cleaning cycles, and straightforward maintenance access.', 'mirrorcraft'),
        __('Create mirror packages that work across public washrooms, lounges, and staff-facing areas.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Office washrooms', 'mirrorcraft'), 'text' => __('Durable mirror systems help maintain a clean and professional standard in daily-use facilities.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Shared amenities', 'mirrorcraft'), 'text' => __('Lounge, reception, and tenant spaces often need mirrors that feel elevated without becoming hard to service.', 'mirrorcraft'), 'image' => 'custom-led-mirrors'),
        array('title' => __('Employee wellness zones', 'mirrorcraft'), 'text' => __('Locker rooms and support spaces benefit from clear lighting, durable construction, and simple operation.', 'mirrorcraft'), 'image' => 'lighted-medicine-cabinets'),
      ),
      'product_focus' => array(
        array('title' => __('Durable illuminated mirrors', 'mirrorcraft'), 'text' => __('A dependable option for commercial washrooms that need good visibility and a modern finish.', 'mirrorcraft')),
        array('title' => __('Slim framed wall mirrors', 'mirrorcraft'), 'text' => __('Useful where the design goal is understated but still polished across shared-use interiors.', 'mirrorcraft')),
        array('title' => __('Practical cabinet mirrors', 'mirrorcraft'), 'text' => __('A fit for smaller support spaces where storage and tidy organization matter.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Choose constructions that handle frequent use and routine maintenance without becoming fussy.', 'mirrorcraft'),
        __('Align mounting, wiring, and replacement access with the building coordination plan.', 'mirrorcraft'),
        __('Match rollout quantities and packaging to phased installation schedules.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A dependable starting point for public washrooms and shared commercial facilities.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('Useful where the design brief needs a more polished or premium-facing finish.', 'mirrorcraft')),
        array('key' => 'custom-led-mirrors', 'text' => __('Helpful for reception zones and layouts that need tailored sizing or branding alignment.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the commercial space type, quantity, and feature needs, and we will recommend a suitable mirror solution.', 'mirrorcraft'),
    ),
    'healthcare' => array(
      'label'      => __('Healthcare', 'mirrorcraft'),
      'hero_title' => __('Mirror programs for healthcare spaces that need calm visuals and practical maintenance.', 'mirrorcraft'),
      'image_key'  => 'lighted-medicine-cabinets',
      'intro'      => __('Healthcare environments call for mirrors that feel reassuring, clean easily, and install securely without introducing unnecessary visual or operational complexity.', 'mirrorcraft'),
      'hero_chips' => array(__('Patient Rooms', 'mirrorcraft'), __('Clinical Washrooms', 'mirrorcraft'), __('Staff Zones', 'mirrorcraft'), __('Visitor Areas', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Easy Clean', 'mirrorcraft'), 'label' => __('Maintenance fit', 'mirrorcraft')),
        array('value' => __('Soft Light', 'mirrorcraft'), 'label' => __('Daily comfort', 'mirrorcraft')),
        array('value' => __('Secure Mounting', 'mirrorcraft'), 'label' => __('Long-term use', 'mirrorcraft')),
      ),
      'focus_text' => __('Healthcare projects need mirrors that stay calm in appearance, easy to clean, and dependable in long-term daily use for patients, staff, and visitors.', 'mirrorcraft'),
      'summary'    => array(
        __('Support patient, staff, and visitor spaces with easy-clean mirror specifications.', 'mirrorcraft'),
        __('Reduce visual harshness with thoughtful lighting and clearer day-to-day usability.', 'mirrorcraft'),
        __('Plan mounting and maintenance details carefully for secure, dependable long-term use.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Patient rooms and ensuite baths', 'mirrorcraft'), 'text' => __('Mirror selections should feel calm, simple to use, and appropriate for a wide range of users.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Clinical and public washrooms', 'mirrorcraft'), 'text' => __('High-frequency cleaning and daily traffic make secure construction and practical finishes especially important.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
        array('title' => __('Staff support areas', 'mirrorcraft'), 'text' => __('Break rooms, changing spaces, and support washrooms benefit from durable and low-fuss specifications.', 'mirrorcraft'), 'image' => 'lighted-medicine-cabinets'),
      ),
      'product_focus' => array(
        array('title' => __('Soft-light LED mirrors', 'mirrorcraft'), 'text' => __('Helpful where glare management and comfortable daily visibility are more important than decorative effects.', 'mirrorcraft')),
        array('title' => __('Simple-control wall mirrors', 'mirrorcraft'), 'text' => __('Straightforward operation can reduce confusion in patient and visitor-facing environments.', 'mirrorcraft')),
        array('title' => __('Support-area cabinet mirrors', 'mirrorcraft'), 'text' => __('Useful for staff zones where storage, tidiness, and efficient use of space all matter.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Favor surfaces and details that are easy to clean and maintain on a regular schedule.', 'mirrorcraft'),
        __('Keep lighting comfortable and clear rather than overly dramatic or visually harsh.', 'mirrorcraft'),
        __('Coordinate specification decisions early so procurement stays aligned across departments and phases.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A practical route for care environments that need clear lighting and a clean modern mirror format.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Useful where organized storage and integrated mirror lighting need to work together.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('Helpful in visitor-facing areas that still need a soft, calm, professional finish.', 'mirrorcraft')),
      ),
      'cta_text' => __('Share the healthcare setting, room type, and quantity target, and we will recommend a suitable mirror solution.', 'mirrorcraft'),
    ),
    'beauty-wellness' => array(
      'label'      => __('Beauty & Wellness', 'mirrorcraft'),
      'hero_title' => __('Beauty and wellness mirror programs built around flattering light and stronger brand atmosphere.', 'mirrorcraft'),
      'image_key'  => 'makeup-mirrors',
      'intro'      => __('Beauty-led spaces depend on mirrors that support facial visibility, grooming tasks, and a more intentional customer experience from arrival through treatment.', 'mirrorcraft'),
      'hero_chips' => array(__('Salon Stations', 'mirrorcraft'), __('Treatment Rooms', 'mirrorcraft'), __('Reception', 'mirrorcraft'), __('Retail Corners', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Facial Light', 'mirrorcraft'), 'label' => __('Visibility quality', 'mirrorcraft')),
        array('value' => __('Brand Atmosphere', 'mirrorcraft'), 'label' => __('Interior fit', 'mirrorcraft')),
        array('value' => __('Humidity Aware', 'mirrorcraft'), 'label' => __('Spa-ready route', 'mirrorcraft')),
      ),
      'focus_text' => __('Beauty and wellness projects need mirrors that look premium, support detailed grooming tasks, and stay aligned with the broader brand experience.', 'mirrorcraft'),
      'summary'    => array(
        __('Support salons, spas, treatment rooms, and wellness suites with a more refined mirror language.', 'mirrorcraft'),
        __('Balance flattering illumination, brand identity, and humidity-aware product selection.', 'mirrorcraft'),
        __('Create mirror packages that move consistently across styling, wash, and treatment zones.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Salon styling stations', 'mirrorcraft'), 'text' => __('Clear visibility, clean edge detailing, and a branded look help each station feel more premium.', 'mirrorcraft'), 'image' => 'makeup-mirrors'),
        array('title' => __('Spa and treatment rooms', 'mirrorcraft'), 'text' => __('Mirrors often need a softer visual presence that complements a calming lighting environment.', 'mirrorcraft'), 'image' => 'custom-led-mirrors'),
        array('title' => __('Reception and retail corners', 'mirrorcraft'), 'text' => __('Statement mirrors can reinforce the brand identity while improving the perceived finish of the space.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
      ),
      'product_focus' => array(
        array('title' => __('Front-lit vanity mirrors', 'mirrorcraft'), 'text' => __('Useful for makeup, skin consultation, and grooming scenarios that need stronger facial visibility.', 'mirrorcraft')),
        array('title' => __('Dimmable ambient mirrors', 'mirrorcraft'), 'text' => __('A better fit where atmosphere and flexible light levels support the wellness concept.', 'mirrorcraft')),
        array('title' => __('Full-length styling mirrors', 'mirrorcraft'), 'text' => __('Helpful for salons, dressing zones, and consultation areas that need whole-look visibility.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Tune lighting quality and brightness around grooming and treatment expectations.', 'mirrorcraft'),
        __('Coordinate mirror style with the broader materials, finishes, and customer experience.', 'mirrorcraft'),
        __('Keep custom sizing and layout planning aligned with repeated station or room formats.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'makeup-mirrors', 'text' => __('A strong route for beauty-led spaces that need flattering illumination and a dedicated vanity feel.', 'mirrorcraft')),
        array('key' => 'custom-led-mirrors', 'text' => __('Useful for salons and premium wellness interiors that need tailored sizes or shapes.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('Helpful where the decorative story is part of the customer experience.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the service environment, styling direction, and feature needs, and we will recommend the right beauty and wellness mirror route.', 'mirrorcraft'),
    ),
    'real-estate-development' => array(
      'label'      => __('Real Estate Development', 'mirrorcraft'),
      'hero_title' => __('Developer-focused mirror programs for new-build, fit-out, and phased real estate delivery.', 'mirrorcraft'),
      'image_key'  => 'led-bathroom-mirrors',
      'intro'      => __('Real estate development projects usually need clear specification packages, phased delivery, and a product mix that can scale from show units to full handover.', 'mirrorcraft'),
      'hero_chips' => array(__('Model Units', 'mirrorcraft'), __('Sales Suites', 'mirrorcraft'), __('Handover Packages', 'mirrorcraft'), __('Amenity Areas', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Spec Ready', 'mirrorcraft'), 'label' => __('Developer route', 'mirrorcraft')),
        array('value' => __('Phased Delivery', 'mirrorcraft'), 'label' => __('Site planning', 'mirrorcraft')),
        array('value' => __('Tiered Options', 'mirrorcraft'), 'label' => __('Unit classes', 'mirrorcraft')),
      ),
      'focus_text' => __('Developers need mirror programs that stay consistent from show units to final handover, while still allowing for different building phases or unit tiers.', 'mirrorcraft'),
      'summary'    => array(
        __('Support developers with mirror families that stay consistent from sample units to bulk rollout.', 'mirrorcraft'),
        __('Build specification packages that account for tiered units, amenity areas, and project phases.', 'mirrorcraft'),
        __('Coordinate procurement and packaging to suit site schedules and staged installation.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Model units and sales suites', 'mirrorcraft'), 'text' => __('Display-ready mirrors help establish the visual standard that later phases need to match.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
        array('title' => __('Residential or mixed-use handover packages', 'mirrorcraft'), 'text' => __('Repeatable product selections keep installation simpler across large volumes of units.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Shared amenity and service areas', 'mirrorcraft'), 'text' => __('Developments often need related mirror styles that can scale from private units to common zones.', 'mirrorcraft'), 'image' => 'custom-led-mirrors'),
      ),
      'product_focus' => array(
        array('title' => __('Standardized LED mirror families', 'mirrorcraft'), 'text' => __('A strong fit for multi-unit projects that need one coherent specification system.', 'mirrorcraft')),
        array('title' => __('Value-engineered alternates', 'mirrorcraft'), 'text' => __('Useful when different building phases or unit classes need controlled cost variation.', 'mirrorcraft')),
        array('title' => __('Custom sizing for project coordination', 'mirrorcraft'), 'text' => __('Helpful when final millwork, plumbing, or lighting layouts require tighter dimensional alignment.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Keep sample approvals, bill-of-material decisions, and phase-by-phase procurement tightly connected.', 'mirrorcraft'),
        __('Use repeatable installation details to support site teams working under schedule pressure.', 'mirrorcraft'),
        __('Plan packaging and labeling clearly for site delivery, staging, and room-by-room handover.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A dependable base family for repeated residential bathroom layouts and phased developer rollouts.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Helpful in premium units where storage and integrated lighting raise the finish level.', 'mirrorcraft')),
        array('key' => 'custom-led-mirrors', 'text' => __('Useful when final layouts need tighter dimensional or aesthetic coordination.', 'mirrorcraft')),
      ),
      'cta_text' => __('Share the project phase, unit mix, and handover goals, and we will recommend the best mirror program for your development.', 'mirrorcraft'),
    ),
    'retail-chain-stores' => array(
      'label'      => __('Retail & Chain Stores', 'mirrorcraft'),
      'hero_title' => __('Retail mirror programs for chain stores, branded concepts, and repeated location rollouts.', 'mirrorcraft'),
      'image_key'  => 'makeup-mirrors',
      'intro'      => __('Retail environments often rely on mirrors as both functional fixtures and brand touchpoints, especially when one concept needs to repeat cleanly across many locations.', 'mirrorcraft'),
      'hero_chips' => array(__('Fitting Rooms', 'mirrorcraft'), __('Public Washrooms', 'mirrorcraft'), __('Service Counters', 'mirrorcraft'), __('Store Rollouts', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Repeat Stores', 'mirrorcraft'), 'label' => __('Rollout fit', 'mirrorcraft')),
        array('value' => __('Brand Visuals', 'mirrorcraft'), 'label' => __('Concept alignment', 'mirrorcraft')),
        array('value' => __('High Traffic', 'mirrorcraft'), 'label' => __('Daily durability', 'mirrorcraft')),
      ),
      'focus_text' => __('Retail programs need mirrors that strengthen the brand concept, stay practical under customer traffic, and repeat cleanly from store to store.', 'mirrorcraft'),
      'summary'    => array(
        __('Support fitting rooms, washrooms, service counters, and branded feature walls.', 'mirrorcraft'),
        __('Keep mirror packages repeatable for new store openings, refreshes, and multi-city rollouts.', 'mirrorcraft'),
        __('Balance visual impact, install speed, and durability in customer-facing spaces.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Fitting rooms', 'mirrorcraft'), 'text' => __('Full-length mirrors need dependable clarity, careful proportions, and easy repeatability from store to store.', 'mirrorcraft'), 'image' => 'makeup-mirrors'),
        array('title' => __('Public washrooms', 'mirrorcraft'), 'text' => __('Retail washrooms benefit from mirror solutions that look polished but stay practical to maintain.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
        array('title' => __('Beauty or service counters', 'mirrorcraft'), 'text' => __('Illuminated and branded mirror formats can improve both customer experience and store identity.', 'mirrorcraft'), 'image' => 'custom-led-mirrors'),
      ),
      'product_focus' => array(
        array('title' => __('Full-length fitting mirrors', 'mirrorcraft'), 'text' => __('A core retail requirement for apparel, lifestyle, and department-style store concepts.', 'mirrorcraft')),
        array('title' => __('Lit service mirrors', 'mirrorcraft'), 'text' => __('Useful for beauty retail, consultation spaces, and premium branded service touchpoints.', 'mirrorcraft')),
        array('title' => __('Durable framed washroom mirrors', 'mirrorcraft'), 'text' => __('A practical fit for high-traffic public areas that still need to reflect the store brand.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Standardize dimensions, finishes, and mounting so each new location opens with consistent fixtures.', 'mirrorcraft'),
        __('Choose constructions that handle daily customer traffic and fast store cleaning routines.', 'mirrorcraft'),
        __('Coordinate packaging and labeling for store-by-store distribution instead of bulk site dumping.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'makeup-mirrors', 'text' => __('Useful for fitting rooms and dressing-oriented retail spaces that need clear whole-look visibility.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('A strong fit for customer-facing washrooms and polished branded concepts.', 'mirrorcraft')),
        array('key' => 'custom-led-mirrors', 'text' => __('Helpful where special sizes or brand-signature designs matter.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the store concept, rollout plan, and fixture requirements, and we will recommend a suitable retail mirror route.', 'mirrorcraft'),
    ),
    'fitness-sports' => array(
      'label'      => __('Fitness & Sports', 'mirrorcraft'),
      'hero_title' => __('Fitness and sports mirror programs for locker rooms, studios, and performance-focused spaces.', 'mirrorcraft'),
      'image_key'  => 'custom-led-mirrors',
      'intro'      => __('Fitness and sports environments need mirrors that stay clear under heavy use, work well in humid areas, and support active routines without becoming fragile or hard to maintain.', 'mirrorcraft'),
      'hero_chips' => array(__('Locker Rooms', 'mirrorcraft'), __('Studios', 'mirrorcraft'), __('Recovery Zones', 'mirrorcraft'), __('Training Rooms', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Moisture Ready', 'mirrorcraft'), 'label' => __('Locker room fit', 'mirrorcraft')),
        array('value' => __('Clear Visibility', 'mirrorcraft'), 'label' => __('Active use', 'mirrorcraft')),
        array('value' => __('Easy Clean', 'mirrorcraft'), 'label' => __('Facility upkeep', 'mirrorcraft')),
      ),
      'focus_text' => __('Fitness and sports spaces need mirrors that can handle humidity, repeated cleaning, and heavy use while still supporting visibility and a polished facility feel.', 'mirrorcraft'),
      'summary'    => array(
        __('Support studios, locker rooms, wash areas, and recovery spaces with practical mirror specifications.', 'mirrorcraft'),
        __('Balance lighting, durability, and easy cleaning in high-use wellness environments.', 'mirrorcraft'),
        __('Plan formats that work for both grooming needs and broader spatial visibility.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Locker rooms and wash areas', 'mirrorcraft'), 'text' => __('Mirrors need to stand up to humidity, repeated use, and regular maintenance without losing appearance.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Studios and active training rooms', 'mirrorcraft'), 'text' => __('Larger mirror formats can support coaching, movement visibility, and a more open-feeling space.', 'mirrorcraft'), 'image' => 'custom-led-mirrors'),
        array('title' => __('Recovery and wellness zones', 'mirrorcraft'), 'text' => __('Calmer mirror formats work well in spa, sauna-adjacent, or post-workout amenity spaces.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
      ),
      'product_focus' => array(
        array('title' => __('Anti-fog bathroom mirrors', 'mirrorcraft'), 'text' => __('A good fit for locker rooms and changing facilities where steam and humidity are routine.', 'mirrorcraft')),
        array('title' => __('Full-length training mirrors', 'mirrorcraft'), 'text' => __('Useful for studios and wellness rooms that benefit from broader body-view visibility.', 'mirrorcraft')),
        array('title' => __('Compact cabinet mirrors', 'mirrorcraft'), 'text' => __('Helpful in support spaces where grooming use and tidy storage need to happen together.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Select finishes and structures suited to moisture, high traffic, and repeated cleaning.', 'mirrorcraft'),
        __('Keep larger mirror installations coordinated carefully with wall build-up and fixing conditions.', 'mirrorcraft'),
        __('Plan replacement and upkeep around facility operations that may run long hours every day.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A practical route for changing facilities and wash areas that need anti-fog support and clear lighting.', 'mirrorcraft')),
        array('key' => 'custom-led-mirrors', 'text' => __('Useful for studios where larger-format mirrored walls or tailored layouts matter.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Helpful in support spaces where tidy storage and mirror function need to work together.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the facility type, humidity conditions, and installation needs, and we will recommend the right fitness and sports mirror route.', 'mirrorcraft'),
    ),
    'transportation' => array(
      'label'      => __('Transportation', 'mirrorcraft'),
      'hero_title' => __('Transportation mirror solutions for terminals, lounges, stations, and passenger-facing facilities.', 'mirrorcraft'),
      'image_key'  => 'framed-led-mirrors',
      'intro'      => __('Transportation projects usually involve high daily traffic, security-sensitive installation conditions, and a strong need for low-maintenance, easy-to-service specifications.', 'mirrorcraft'),
      'hero_chips' => array(__('Terminals', 'mirrorcraft'), __('Lounges', 'mirrorcraft'), __('Stations', 'mirrorcraft'), __('Support Areas', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Heavy Traffic', 'mirrorcraft'), 'label' => __('Public facility fit', 'mirrorcraft')),
        array('value' => __('Easy Service', 'mirrorcraft'), 'label' => __('Maintenance route', 'mirrorcraft')),
        array('value' => __('Phased Install', 'mirrorcraft'), 'label' => __('Site coordination', 'mirrorcraft')),
      ),
      'focus_text' => __('Transportation facilities need mirror packages that can tolerate constant use, stay easy to service, and support clear differentiation between public, premium, and staff-only spaces.', 'mirrorcraft'),
      'summary'    => array(
        __('Support airports, stations, passenger lounges, and service facilities with dependable mirror packages.', 'mirrorcraft'),
        __('Plan for heavy use, straightforward maintenance, and efficient replacement where needed.', 'mirrorcraft'),
        __('Keep fixtures coordinated across repeated washroom, lounge, and support-area layouts.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Terminal washrooms', 'mirrorcraft'), 'text' => __('Public-facing facilities need mirror specifications that can stay presentable under constant traffic.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Premium lounges', 'mirrorcraft'), 'text' => __('Passenger amenity areas often call for a step-up in finish and lighting without losing practicality.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
        array('title' => __('Staff and operations areas', 'mirrorcraft'), 'text' => __('Support spaces benefit from mirror solutions that prioritize resilience and easy upkeep.', 'mirrorcraft'), 'image' => 'lighted-medicine-cabinets'),
      ),
      'product_focus' => array(
        array('title' => __('Durable public-area mirrors', 'mirrorcraft'), 'text' => __('Well suited for washrooms and service environments where performance under heavy use is the baseline.', 'mirrorcraft')),
        array('title' => __('Premium vanity mirrors', 'mirrorcraft'), 'text' => __('A fit for lounge or upgraded passenger areas where the brief asks for a more refined experience.', 'mirrorcraft')),
        array('title' => __('Integrated cabinet solutions', 'mirrorcraft'), 'text' => __('Helpful in operational spaces where storage and organized layouts matter alongside mirror function.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Use robust mounting and construction details appropriate for high-traffic public environments.', 'mirrorcraft'),
        __('Coordinate mirror rollouts with tight site logistics and phased transport-facility schedules.', 'mirrorcraft'),
        __('Keep maintenance and replacement simple for teams managing round-the-clock operations.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A dependable base for public washrooms and other high-traffic passenger facilities.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('Useful where lounge and premium areas need a more refined finish.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Helpful for support spaces that need mirror use and organized storage together.', 'mirrorcraft')),
      ),
      'cta_text' => __('Share the facility type, traffic level, and maintenance needs, and we will recommend a suitable transportation mirror program.', 'mirrorcraft'),
    ),
    'cruise-marine' => array(
      'label'      => __('Cruise & Marine', 'mirrorcraft'),
      'hero_title' => __('Cruise and marine mirror programs for cabins, public decks, and crew-support interiors.', 'mirrorcraft'),
      'image_key'  => 'framed-led-mirrors',
      'intro'      => __('Marine environments typically need more attention to compact layouts, humidity, finish resilience, and secure installation details across both guest and operational spaces.', 'mirrorcraft'),
      'hero_chips' => array(__('Cabins', 'mirrorcraft'), __('Suites', 'mirrorcraft'), __('Public Decks', 'mirrorcraft'), __('Crew Areas', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Compact Fit', 'mirrorcraft'), 'label' => __('Cabin layouts', 'mirrorcraft')),
        array('value' => __('Humidity Ready', 'mirrorcraft'), 'label' => __('Marine conditions', 'mirrorcraft')),
        array('value' => __('Secure Mounting', 'mirrorcraft'), 'label' => __('Installation route', 'mirrorcraft')),
      ),
      'focus_text' => __('Cruise and marine projects need mirror packages that can handle moisture, tighter dimensions, and the secure installation logic required for moving environments.', 'mirrorcraft'),
      'summary'    => array(
        __('Support cabin, suite, public amenity, and crew-use mirror requirements within tighter footprints.', 'mirrorcraft'),
        __('Plan for humidity, cleaning demands, and secure installation across marine interiors.', 'mirrorcraft'),
        __('Coordinate design consistency from guest cabins to public-facing wellness and washroom zones.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Cabins and suites', 'mirrorcraft'), 'text' => __('Guest accommodations often need compact but premium-feeling mirror solutions that maximize perceived space.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
        array('title' => __('Public washrooms and amenity decks', 'mirrorcraft'), 'text' => __('Shared marine interiors call for mirrors that look polished while staying practical to maintain.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Crew support areas', 'mirrorcraft'), 'text' => __('Back-of-house spaces benefit from durable, space-efficient mirror formats that are easy to service.', 'mirrorcraft'), 'image' => 'lighted-medicine-cabinets'),
      ),
      'product_focus' => array(
        array('title' => __('Moisture-aware illuminated mirrors', 'mirrorcraft'), 'text' => __('A good fit for guest cabins and wash areas where lighting quality and environmental exposure both matter.', 'mirrorcraft')),
        array('title' => __('Compact cabinet mirrors', 'mirrorcraft'), 'text' => __('Useful in smaller bathrooms where efficient storage and multifunctionality are important.', 'mirrorcraft')),
        array('title' => __('Vanity mirrors for premium suites', 'mirrorcraft'), 'text' => __('Helpful for elevated guest programs that need a more residential and luxurious bathroom feel.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Choose finishes and structures with marine humidity and maintenance realities in mind.', 'mirrorcraft'),
        __('Coordinate secure mounting and packaging for tight delivery, handling, and installation conditions.', 'mirrorcraft'),
        __('Keep dimensional planning accurate so products fit compact cabin and washroom layouts cleanly.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A dependable route for marine washrooms that need clear lighting and a moisture-aware format.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Helpful where compact storage and mirror function need to work together in tight cabins.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('Useful in premium suites or guest zones that need a warmer decorative finish.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the marine setting, cabin constraints, and feature needs, and we will recommend a suitable cruise and marine mirror route.', 'mirrorcraft'),
    ),
    'senior-living' => array(
      'label'      => __('Senior Living', 'mirrorcraft'),
      'hero_title' => __('Senior living mirror programs built around comfort, clarity, and everyday practicality.', 'mirrorcraft'),
      'image_key'  => 'led-bathroom-mirrors',
      'intro'      => __('Senior living environments need mirrors that feel approachable, support everyday routines, and stay easy for operators to maintain across large resident communities.', 'mirrorcraft'),
      'hero_chips' => array(__('Resident Bathrooms', 'mirrorcraft'), __('Amenity Spaces', 'mirrorcraft'), __('Support Areas', 'mirrorcraft'), __('Care Communities', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Clear Visibility', 'mirrorcraft'), 'label' => __('Daily comfort', 'mirrorcraft')),
        array('value' => __('Simple Use', 'mirrorcraft'), 'label' => __('Resident-friendly', 'mirrorcraft')),
        array('value' => __('Easy Upkeep', 'mirrorcraft'), 'label' => __('Operator fit', 'mirrorcraft')),
      ),
      'focus_text' => __('Senior living spaces need mirrors that support comfort and visibility without adding unnecessary complexity to resident use or facility maintenance.', 'mirrorcraft'),
      'summary'    => array(
        __('Support independent living, assisted living, and shared amenity spaces with practical mirror specs.', 'mirrorcraft'),
        __('Favor clear visibility, comfortable lighting, and straightforward operation for daily use.', 'mirrorcraft'),
        __('Keep replacement and upkeep manageable for operators running multi-unit communities.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Resident bathrooms', 'mirrorcraft'), 'text' => __('Mirror solutions should feel intuitive and comfortable while supporting a clean, residential appearance.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Shared amenity spaces', 'mirrorcraft'), 'text' => __('Community salons, wellness rooms, and wash areas benefit from calm but dependable mirror packages.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
        array('title' => __('Support and staff zones', 'mirrorcraft'), 'text' => __('Behind-the-scenes spaces still need durable mirror specifications that align with broader facility standards.', 'mirrorcraft'), 'image' => 'lighted-medicine-cabinets'),
      ),
      'product_focus' => array(
        array('title' => __('Soft-light LED mirrors', 'mirrorcraft'), 'text' => __('A good fit where visibility and comfort need to work together in everyday routines.', 'mirrorcraft')),
        array('title' => __('Accessible cabinet mirrors', 'mirrorcraft'), 'text' => __('Useful in resident bathrooms where storage and organization help support independence.', 'mirrorcraft')),
        array('title' => __('Low-fuss bathroom mirrors', 'mirrorcraft'), 'text' => __('Straightforward, durable formats help operators maintain consistency across many rooms or suites.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Keep controls, light levels, and daily usability intuitive for a wide range of residents.', 'mirrorcraft'),
        __('Choose constructions that stand up to regular facility cleaning and maintenance workflows.', 'mirrorcraft'),
        __('Coordinate mirror sizing and mounting with accessible bathroom planning early in the process.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A dependable route for resident bathrooms that need clear lighting and comfortable visibility.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Useful where storage and organization help support a cleaner resident routine.', 'mirrorcraft')),
        array('key' => 'framed-led-mirrors', 'text' => __('Helpful in amenity spaces that need warmth without operational complexity.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the room type, accessibility needs, and quantity plan, and we will recommend a suitable senior living mirror route.', 'mirrorcraft'),
    ),
    'education' => array(
      'label'      => __('Education', 'mirrorcraft'),
      'hero_title' => __('Education mirror solutions for campuses, residence halls, sports facilities, and shared-use washrooms.', 'mirrorcraft'),
      'image_key'  => 'led-bathroom-mirrors',
      'intro'      => __('Education projects often need durable, cost-aware mirror specifications that can repeat across many rooms and shared facilities while staying easy to maintain.', 'mirrorcraft'),
      'hero_chips' => array(__('Residence Halls', 'mirrorcraft'), __('Campus Washrooms', 'mirrorcraft'), __('Sports Facilities', 'mirrorcraft'), __('Student Amenities', 'mirrorcraft')),
      'hero_stats' => array(
        array('value' => __('Repeatable Specs', 'mirrorcraft'), 'label' => __('Campus scale', 'mirrorcraft')),
        array('value' => __('Durable Build', 'mirrorcraft'), 'label' => __('Heavy student use', 'mirrorcraft')),
        array('value' => __('Cost Aware', 'mirrorcraft'), 'label' => __('Value planning', 'mirrorcraft')),
      ),
      'focus_text' => __('Education facilities need mirror packages that stay durable, repeatable, and simple for campus teams to maintain across broad footprints.', 'mirrorcraft'),
      'summary'    => array(
        __('Support dormitories, campus washrooms, fitness facilities, and student-facing amenities.', 'mirrorcraft'),
        __('Keep mirror packages durable, repeatable, and straightforward for maintenance teams.', 'mirrorcraft'),
        __('Balance cost targets with everyday usability across broad campus footprints.', 'mirrorcraft'),
      ),
      'areas' => array(
        array('title' => __('Residence halls', 'mirrorcraft'), 'text' => __('Student housing programs often need practical bathroom and dressing mirrors that can repeat at scale.', 'mirrorcraft'), 'image' => 'led-bathroom-mirrors'),
        array('title' => __('Shared academic facilities', 'mirrorcraft'), 'text' => __('Classroom buildings and public washrooms benefit from straightforward, hard-wearing mirror selections.', 'mirrorcraft'), 'image' => 'framed-led-mirrors'),
        array('title' => __('Campus sports and wellness areas', 'mirrorcraft'), 'text' => __('Locker rooms and activity centers need mirror solutions that can handle heavy student use.', 'mirrorcraft'), 'image' => 'custom-led-mirrors'),
      ),
      'product_focus' => array(
        array('title' => __('Durable vanity mirrors', 'mirrorcraft'), 'text' => __('A dependable option for repeated student washroom layouts and campus public facilities.', 'mirrorcraft')),
        array('title' => __('Full-length dorm mirrors', 'mirrorcraft'), 'text' => __('Useful in student accommodation and dressing-oriented spaces where personal-use visibility matters.', 'mirrorcraft')),
        array('title' => __('Practical cabinet mirrors', 'mirrorcraft'), 'text' => __('Helpful where smaller bathrooms need better organization without losing clean visual order.', 'mirrorcraft')),
      ),
      'priorities' => array(
        __('Choose constructions that can tolerate heavy student traffic and routine campus maintenance.', 'mirrorcraft'),
        __('Keep unit dimensions and mounting details repeatable across large numbers of rooms or buildings.', 'mirrorcraft'),
        __('Plan logistics clearly for phased campus projects, dorm turnovers, and summer installation windows.', 'mirrorcraft'),
      ),
      'recommended_products' => array(
        array('key' => 'led-bathroom-mirrors', 'text' => __('A dependable route for repeated student washroom layouts and shared campus facilities.', 'mirrorcraft')),
        array('key' => 'makeup-mirrors', 'text' => __('Useful in dorm and dressing-oriented spaces where full-look visibility matters.', 'mirrorcraft')),
        array('key' => 'lighted-medicine-cabinets', 'text' => __('Helpful in smaller bathrooms that need organized storage without losing a clean appearance.', 'mirrorcraft')),
      ),
      'cta_text' => __('Tell us the campus setting, maintenance priorities, and quantity plan, and we will recommend a suitable education mirror program.', 'mirrorcraft'),
    ),
  );

  $pages = array();

  foreach ($definitions as $slug => $definition) {
    $pages[$slug] = mirrorcraft_build_application_sector_page($slug, $definition);
  }

  return $pages;
}

function mirrorcraft_get_application_submenu_pages() {
  return mirrorcraft_get_application_sector_page_definitions();
  return array(
    'hospitality' => array(
      'title'         => __('Hospitality', 'mirrorcraft'),
      'path'          => 'applications/hospitality',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Hospitality', 'mirrorcraft'),
      'hero_title'    => __('LED mirror solutions for hospitality bathrooms and guest-facing spaces', 'mirrorcraft'),
      'hero_text'     => __('We support hotel groups, serviced apartment projects, and hospitality buyers who need reliable mirror styling, practical functions, and cleaner bulk-order follow-through.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Hotel Bathrooms', 'mirrorcraft'),
        __('Guest Suites', 'mirrorcraft'),
        __('Renovation Programs', 'mirrorcraft'),
        __('Project Supply', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Anti-Fog', 'mirrorcraft'), 'label' => __('Useful bathroom function', 'mirrorcraft')),
        array('value' => __('Bulk Ready', 'mirrorcraft'), 'label' => __('Project supply support', 'mirrorcraft')),
        array('value' => __('Consistent Look', 'mirrorcraft'), 'label' => __('Room-type alignment', 'mirrorcraft')),
        array('value' => __('OEM / ODM', 'mirrorcraft'), 'label' => __('Customization available', 'mirrorcraft')),
      ),
      'image'         => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'focus_title'   => __('What hospitality buyers usually care about first', 'mirrorcraft'),
      'focus_text'    => __('Hospitality projects usually need a balance between guest-facing appearance, practical bathroom performance, and a product route that can scale across multiple rooms or properties.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Consistent style across room categories', 'mirrorcraft'),
        __('Anti-fog and comfortable LED lighting', 'mirrorcraft'),
        __('Installation-friendly sizing for renovation work', 'mirrorcraft'),
        __('Protective packing and project-oriented delivery follow-up', 'mirrorcraft'),
      ),
      'scenario_intro_title' => __('Mirrors for hospitality industry', 'mirrorcraft'),
      'scenario_intro_text'  => __('Hospitality environments include hotel bathrooms, guestrooms, suites, reception-facing spaces, and dining-related interiors where mirror presentation supports both function and visual comfort. The right mirror route should help the property look cleaner, feel brighter, and stay easier to standardize across repeated room layouts.', 'mirrorcraft'),
      'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
      'scenario_areas'       => array(
        array(
          'title' => __('Bathrooms', 'mirrorcraft'),
          'text'  => __('Guest bathrooms usually need anti-fog, practical lighting, and a mirror format that keeps daily use comfortable while matching the room design direction.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
        ),
        array(
          'title' => __('Guestrooms', 'mirrorcraft'),
          'text'  => __('Guestroom mirrors often support dressing, vanity, and visual spaciousness, so buyers usually care about styling consistency and placement flexibility.', 'mirrorcraft'),
          'image' => mirrorcraft_get_active_hero_image_url(),
        ),
        array(
          'title' => __('Restaurants & Shared Spaces', 'mirrorcraft'),
          'text'  => __('Hospitality public areas benefit from mirrors that reinforce atmosphere, improve perceived openness, and stay aligned with the wider interior concept.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
        ),
      ),
      'aside_kicker'  => __('Project Fit', 'mirrorcraft'),
      'aside_title'   => __('Built for hotel specification needs and repeat bulk delivery', 'mirrorcraft'),
      'aside_items'   => array(
        __('Mirror programs matched to guest room and bathroom layouts', 'mirrorcraft'),
        __('Function combinations selected for hospitality use, not just showroom appeal', 'mirrorcraft'),
        __('Cleaner quotation and sample discussion before project confirmation', 'mirrorcraft'),
      ),
      'products_title' => __('Recommended product types for hospitality applications', 'mirrorcraft'),
      'products'      => array(
        __('Backlit LED Mirrors', 'mirrorcraft'),
        __('Front-lit Bathroom Mirrors', 'mirrorcraft'),
        __('Lighted Medicine Cabinets', 'mirrorcraft'),
        __('Custom Project Mirrors', 'mirrorcraft'),
      ),
      'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
      'recommended_products'       => array(
        array(
          'title' => __('Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('LED bathroom mirrors for hotel bathrooms that need clear illumination, modern styling, and practical daily-use functions.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirror'),
        ),
        array(
          'title' => __('Medicine Cabinets', 'mirrorcraft'),
          'text'  => __('Lighted medicine cabinets for hospitality projects that want storage, mirror lighting, and a cleaner wall-mounted configuration.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
          'link'  => mirrorcraft_get_product_category_page_link('medicine-cabinet'),
        ),
      ),
      'cards_title'   => __('How we support hospitality mirror programs', 'mirrorcraft'),
      'cards_text'    => __('This application often needs more than a standard product list. Buyers usually want product fit, installation clarity, and stable follow-through for room-based projects.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Room-Type Consistency', 'mirrorcraft'),
          'text'  => __('We help match size, style, and lighting direction across standard rooms, suites, and other hospitality layouts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Bathroom Function Match', 'mirrorcraft'),
          'text'  => __('Anti-fog, dimming, and practical switching options can be aligned with the intended guest experience.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Renovation Flexibility', 'mirrorcraft'),
          'text'  => __('Mirror sizes and mounting approaches can be adapted to renovation constraints and wall layouts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Project Delivery Support', 'mirrorcraft'),
          'text'  => __('Communication, packing, and shipment preparation stay connected to the approved project brief.', 'mirrorcraft'),
        ),
      ),
      'steps_title'   => __('Typical hospitality project workflow', 'mirrorcraft'),
      'steps_text'    => __('We usually keep hospitality discussions focused on room type, function expectations, sample review, and shipment practicality.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Project Brief', 'mirrorcraft'),
          'text'  => __('Confirm the hotel type, room layout, quantity plan, and feature expectations first.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Specification Match', 'mirrorcraft'),
          'text'  => __('Mirror dimensions, lighting direction, and cabinet options are aligned to the bathroom environment.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Sample / Quote', 'mirrorcraft'),
          'text'  => __('Samples and pricing are reviewed before finalizing the production route.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production & Shipment', 'mirrorcraft'),
          'text'  => __('Manufacturing, inspection, and packing are kept aligned with the approved hospitality requirement.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Looking for a more dependable hospitality mirror supplier?', 'mirrorcraft'),
      'cta_text'      => __('Send your project brief, room type, and function requirements, and we will recommend the right LED mirror route.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'commercial' => array(
      'title'         => __('Commercial', 'mirrorcraft'),
      'path'          => 'applications/commercial',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Commercial', 'mirrorcraft'),
      'hero_title'    => __('LED mirror solutions for commercial spaces that need practical lighting and a clean finished look', 'mirrorcraft'),
      'hero_text'     => __('We support commercial buyers with LED mirror and cabinet options for public washrooms, shared amenities, reception areas, and other commercial interiors that need dependable day-to-day performance.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Commercial Bathrooms', 'mirrorcraft'),
        __('Reception Areas', 'mirrorcraft'),
        __('Shared Amenities', 'mirrorcraft'),
        __('Facility Fit-Out', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Project Friendly', 'mirrorcraft'), 'label' => __('Commercial-ready route', 'mirrorcraft')),
        array('value' => __('Clean Styling', 'mirrorcraft'), 'label' => __('Professional appearance', 'mirrorcraft')),
        array('value' => __('Flexible Layout', 'mirrorcraft'), 'label' => __('Size and mounting support', 'mirrorcraft')),
        array('value' => __('Bulk Supply', 'mirrorcraft'), 'label' => __('Project-scale delivery', 'mirrorcraft')),
      ),
      'image'         => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'focus_title'   => __('Mirrors for commercial spaces', 'mirrorcraft'),
      'focus_text'    => __('Commercial projects usually need mirrors that look clean, install reliably, and fit the practical requirements of bathrooms, public areas, and shared-use interiors. The goal is usually not decoration alone, but a better combination of visibility, maintenance, and layout fit.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Functional lighting for regular daily use', 'mirrorcraft'),
        __('Clean and professional presentation in public-facing spaces', 'mirrorcraft'),
        __('Flexible sizing, mounting, and layout coordination', 'mirrorcraft'),
        __('Practical support for bulk project communication and delivery', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Commercial Use', 'mirrorcraft'),
      'aside_title'   => __('Designed for public-facing spaces that need dependable performance and a professional appearance', 'mirrorcraft'),
      'aside_items'   => array(
        __('Mirror formats can be matched to commercial bathrooms, reception zones, or shared amenity spaces', 'mirrorcraft'),
        __('We help align dimensions, lighting, and practical features to the actual layout and usage scene', 'mirrorcraft'),
        __('Project packing, export follow-up, and bulk order coordination stay connected to the application', 'mirrorcraft'),
      ),
      'products_title' => __('Suitable product types for commercial use', 'mirrorcraft'),
      'products'      => array(
        __('LED Bathroom Mirrors', 'mirrorcraft'),
        __('Custom LED Mirrors', 'mirrorcraft'),
        __('Medicine Cabinets', 'mirrorcraft'),
        __('Decorative LED Mirrors', 'mirrorcraft'),
      ),
      'scenario_intro_title' => __('Mirrors for commercial spaces', 'mirrorcraft'),
      'scenario_intro_text'  => __('Different commercial environments require different mirror formats, functions, and installation logic. We help buyers match mirror size, lighting performance, and styling direction to the actual space and project requirement.', 'mirrorcraft'),
      'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
      'scenario_areas'       => array(
        array(
          'title' => __('Commercial Bathrooms', 'mirrorcraft'),
          'text'  => __('Ideal for public or staff washrooms that need practical lighting, clean styling, and dependable daily use.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
        ),
        array(
          'title' => __('Reception & Shared Areas', 'mirrorcraft'),
          'text'  => __('Suitable for lobbies, shared amenities, and public-facing interiors that need a cleaner finished look.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
        ),
        array(
          'title' => __('Restaurants & Service Spaces', 'mirrorcraft'),
          'text'  => __('Works well in mixed-use commercial spaces where durability, layout fit, and easy maintenance matter.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
        ),
      ),
      'cards_title'   => __('Support for commercial applications', 'mirrorcraft'),
      'cards_text'    => __('Commercial mirror sourcing usually works best when layout fit, maintenance needs, and delivery planning are clarified early.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Layout Adaptation', 'mirrorcraft'),
          'text'  => __('Mirror dimensions, mounting, and lighting direction can be matched to different commercial wall layouts and installation scenes.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Functional Upgrades', 'mirrorcraft'),
          'text'  => __('Anti-fog, dimming, touch, and other practical functions can be selected based on the intended usage environment.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Professional Styling', 'mirrorcraft'),
          'text'  => __('We keep the mirror direction clean, simple, and suitable for public-facing or mixed-use commercial interiors.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Bulk Delivery Support', 'mirrorcraft'),
          'text'  => __('Commercial buyers get clearer support on specification review, packing, export handling, and shipment follow-up.', 'mirrorcraft'),
        ),
      ),
      'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
      'recommended_products_text'  => __('These product directions are usually the most practical starting point when buyers compare mirror solutions for commercial bathrooms, shared amenities, and public-facing interiors.', 'mirrorcraft'),
      'recommended_products'       => array(
        array(
          'title' => __('LED Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('A practical route for commercial bathrooms that need a clean illuminated mirror solution with easy daily usability.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirror'),
        ),
        array(
          'title' => __('Custom LED Mirrors', 'mirrorcraft'),
          'text'  => __('Useful for reception areas, public interiors, and projects that need a more tailored size, shape, or visual direction.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('custom-mirror'),
        ),
      ),
      'steps_title'   => __('Typical workflow for commercial buyers', 'mirrorcraft'),
      'steps_text'    => __('Commercial sourcing usually moves faster when the installation scene, quantity, and practical function needs are clarified early.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Use Case Review', 'mirrorcraft'),
          'text'  => __('We first confirm whether the mirror is for bathrooms, shared amenities, reception, or other commercial interior use.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Specification Alignment', 'mirrorcraft'),
          'text'  => __('Dimensions, lighting, practical functions, and structure are matched to the actual site requirement.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Quote Confirmation', 'mirrorcraft'),
          'text'  => __('Commercial terms, sample direction, and production scope are clarified before manufacturing starts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production Planning', 'mirrorcraft'),
          'text'  => __('Inspection, packing, and shipment are then managed against the confirmed commercial project route.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Need the right LED mirror route for a commercial project?', 'mirrorcraft'),
      'cta_text'      => __('Tell us the space type, quantity, and function needs, and our team will recommend a suitable commercial mirror solution.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'residential' => array(
      'title'         => __('Residential / Multifamily', 'mirrorcraft'),
      'path'          => 'applications/residential',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Residential / Multifamily', 'mirrorcraft'),
      'hero_title'    => __('LED mirror solutions for multifamily bathrooms and repeated unit layouts', 'mirrorcraft'),
      'hero_text'     => __('We support multifamily buyers with LED mirror solutions that balance practical daily use, modern styling, and the feature mix that works for apartment developments and build-to-rent programs.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Unit Bathrooms', 'mirrorcraft'),
        __('Build-to-Rent', 'mirrorcraft'),
        __('Apartment Use', 'mirrorcraft'),
        __('Repeated Layouts', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Repeatable Specs', 'mirrorcraft'), 'label' => __('Unit-type consistency', 'mirrorcraft')),
        array('value' => __('Daily Use', 'mirrorcraft'), 'label' => __('Practical function fit', 'mirrorcraft')),
        array('value' => __('Flexible Layout', 'mirrorcraft'), 'label' => __('Size and cabinet support', 'mirrorcraft')),
        array('value' => __('Bulk Ready', 'mirrorcraft'), 'label' => __('Project delivery route', 'mirrorcraft')),
      ),
      'image'         => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'focus_title'   => __('Mirrors for multifamily spaces', 'mirrorcraft'),
      'focus_text'    => __('Multifamily environments usually need mirrors that are easy to use every day, visually aligned with modern bathroom standards, and practical enough for apartment developments with repeated layouts.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Modern styling for apartment bathroom environments', 'mirrorcraft'),
        __('Comfortable LED lighting for daily routines', 'mirrorcraft'),
        __('Flexible size and cabinet options for repeated layouts', 'mirrorcraft'),
        __('Feature combinations that support resident usability and maintenance practicality', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Multifamily Fit', 'mirrorcraft'),
      'aside_title'   => __('Built for apartment supply, repeated unit layouts, and practical project delivery', 'mirrorcraft'),
      'aside_items'   => array(
        __('Mirror routes can be aligned to entry, mid, or premium multifamily positioning', 'mirrorcraft'),
        __('Dimming, anti-fog, and storage features can be matched to resident expectations', 'mirrorcraft'),
        __('Project packing and delivery coordination support phased rollouts and repeated units', 'mirrorcraft'),
      ),
      'products_title' => __('Suitable product types for multifamily use', 'mirrorcraft'),
      'products'      => array(
        __('Bathroom Mirrors', 'mirrorcraft'),
        __('Lighted Medicine Cabinets', 'mirrorcraft'),
        __('Custom-Shaped Mirrors', 'mirrorcraft'),
        __('Project Mirror Options', 'mirrorcraft'),
      ),
      'scenario_intro_title' => __('Mirrors for multifamily spaces', 'mirrorcraft'),
      'scenario_intro_text'  => __('Different multifamily projects need different mirror styles, functions, and layout-fit combinations. We help buyers match mirror direction to the apartment space, project standard, and installation realities.', 'mirrorcraft'),
      'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
      'scenario_areas'       => array(
        array(
          'title' => __('Unit Bathrooms', 'mirrorcraft'),
          'text'  => __('Ideal for apartment bathrooms that need practical lighting, clean styling, and comfortable daily use.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
        ),
        array(
          'title' => __('Amenity & Shared Spaces', 'mirrorcraft'),
          'text'  => __('Suitable for shared-use interiors where size fit, function mix, and stable bulk planning matter.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
        ),
        array(
          'title' => __('Model Units & Leasing Suites', 'mirrorcraft'),
          'text'  => __('Works well for presentation spaces that need clearer illumination, practical styling, and a dependable specification route.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
        ),
      ),
      'cards_title'   => __('Support for multifamily mirror programs', 'mirrorcraft'),
      'cards_text'    => __('Multifamily sourcing usually works best when the mirror program is built around repeated layouts, resident usability, and practical installation planning.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Layout Alignment', 'mirrorcraft'),
          'text'  => __('We help match mirror size, cabinet structure, and mounting options to repeated unit layouts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Function Mix', 'mirrorcraft'),
          'text'  => __('Lighting, anti-fog, touch, and storage features can be selected based on the intended resident experience.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Project Planning', 'mirrorcraft'),
          'text'  => __('Mirror sizes, finishes, and cabinet options can be organized into a cleaner unit-by-unit program.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Delivery Support', 'mirrorcraft'),
          'text'  => __('Packing, scheduling, and shipment follow-through can be aligned to the target project phase.', 'mirrorcraft'),
        ),
      ),
      'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
      'recommended_products_text'  => __('These product directions are usually the most practical starting point when buyers compare mirror solutions for unit bathrooms, amenity spaces, and multifamily programs.', 'mirrorcraft'),
      'recommended_products'       => array(
        array(
          'title' => __('Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('A dependable route for multifamily bathrooms that need clean lighting, everyday practicality, and a modern mirror look.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirror'),
        ),
        array(
          'title' => __('Medicine Cabinets', 'mirrorcraft'),
          'text'  => __('A practical route for projects that need integrated storage, mirror lighting, and a cleaner wall-mounted bathroom layout.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
          'link'  => mirrorcraft_get_product_category_page_link('medicine-cabinet'),
        ),
      ),
      'steps_title'   => __('Typical workflow for multifamily programs', 'mirrorcraft'),
      'steps_text'    => __('We usually keep multifamily product development focused on repeated layouts, price-function fit, and clear program planning.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Project Review', 'mirrorcraft'),
          'text'  => __('We confirm the unit type, quantity plan, and target resident experience first.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Specification Planning', 'mirrorcraft'),
          'text'  => __('Size, shape, cabinet layout, and function options are selected based on the planned mirror program.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Sample / Review', 'mirrorcraft'),
          'text'  => __('Samples help confirm style, usability, and project fit before volume planning.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production & Delivery', 'mirrorcraft'),
          'text'  => __('The approved multifamily range is then prepared for bulk production and shipment.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Need the right LED mirror route for multifamily buyers?', 'mirrorcraft'),
      'cta_text'      => __('Tell us the unit type, project scale, and product direction, and we will recommend a suitable multifamily mirror program.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'senior-living' => array(
      'title'         => __('Senior Living', 'mirrorcraft'),
      'path'          => 'applications/senior-living',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Senior Living', 'mirrorcraft'),
      'hero_title'    => __('LED mirror solutions for senior living spaces that need comfort, clarity, and easy daily use', 'mirrorcraft'),
      'hero_text'     => __('We support senior living projects with LED mirror solutions that improve daily visibility, create a calm residential atmosphere, and stay practical for long-term use in bathrooms, living spaces, and closets.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Senior Living', 'mirrorcraft'),
        __('Comfort Lighting', 'mirrorcraft'),
        __('Easy Daily Use', 'mirrorcraft'),
        __('Residential Care Spaces', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Clear Lighting', 'mirrorcraft'), 'label' => __('Visibility support', 'mirrorcraft')),
        array('value' => __('Simple Use', 'mirrorcraft'), 'label' => __('Comfort-first control', 'mirrorcraft')),
        array('value' => __('Anti-Fog', 'mirrorcraft'), 'label' => __('Bathroom practicality', 'mirrorcraft')),
        array('value' => __('Flexible Layout', 'mirrorcraft'), 'label' => __('Room-fit support', 'mirrorcraft')),
      ),
      'image'         => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'focus_title'   => __('Mirrors for senior living', 'mirrorcraft'),
      'focus_text'    => __('Senior living environments usually need mirrors that offer clearer illumination, comfortable daily interaction, and a residential look that still feels calm, practical, and dependable for long-term use.', 'mirrorcraft'),
      'focus_items'   => array(
        __('High-quality LED lighting for better daily visibility', 'mirrorcraft'),
        __('Simple, user-friendly control options', 'mirrorcraft'),
        __('Bathroom practicality including anti-fog support', 'mirrorcraft'),
        __('Mirror configurations that fit residential-care layouts', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Use Priority', 'mirrorcraft'),
      'aside_title'   => __('Built around comfort, visibility, and everyday practicality in senior living spaces', 'mirrorcraft'),
      'aside_items'   => array(
        __('Function choices are guided by usability, comfort, and project suitability', 'mirrorcraft'),
        __('Mirror structure can be adapted to different bathroom, closet, and living-space layouts', 'mirrorcraft'),
        __('Communication stays focused on the practical needs of the installation scene', 'mirrorcraft'),
      ),
      'products_title' => __('Recommended product types for senior-living applications', 'mirrorcraft'),
      'products'      => array(
        __('LED Bathroom Mirrors', 'mirrorcraft'),
        __('Medicine Cabinets', 'mirrorcraft'),
        __('Makeup / Vanity Mirrors', 'mirrorcraft'),
        __('Custom Layout Mirrors', 'mirrorcraft'),
      ),
      'scenario_intro_title' => __('Mirrors for senior living', 'mirrorcraft'),
      'scenario_intro_text'  => __('Different senior living spaces need different mirror functions and formats. We help buyers align lighting quality, ease of use, and layout suitability with the daily routines of bathrooms, living areas, and closet spaces.', 'mirrorcraft'),
      'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
      'scenario_areas'       => array(
        array(
          'title' => __('Bathrooms', 'mirrorcraft'),
          'text'  => __('A key area for anti-fog, clear illumination, and practical mirror use during everyday grooming and hygiene routines.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
        ),
        array(
          'title' => __('Living Rooms', 'mirrorcraft'),
          'text'  => __('Suitable for resident living spaces that benefit from comfortable lighting and a more polished residential interior look.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
        ),
        array(
          'title' => __('Closets & Dressing Areas', 'mirrorcraft'),
          'text'  => __('A useful fit for grooming and dressing spaces where brighter illumination and easy everyday interaction are important.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
        ),
      ),
      'cards_title'   => __('How we support senior-living mirror programs', 'mirrorcraft'),
      'cards_text'    => __('This application benefits from a simpler product strategy that prioritizes visibility, reliability, and layout compatibility.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Better Everyday Visibility', 'mirrorcraft'),
          'text'  => __('Mirror lighting can be aligned to grooming comfort and practical bathroom use.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Simple User Interaction', 'mirrorcraft'),
          'text'  => __('Feature sets can be selected to avoid unnecessary complexity in daily operation.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Layout Suitability', 'mirrorcraft'),
          'text'  => __('Size and mounting planning can be adapted to senior-living bathroom layouts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Project Coordination', 'mirrorcraft'),
          'text'  => __('We keep quotation, sample, and shipment follow-up focused on the intended use environment.', 'mirrorcraft'),
        ),
      ),
      'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
      'recommended_products_text'  => __('These product directions are usually the most practical starting point when buyers compare mirror solutions for bathrooms, closet areas, and comfort-focused senior living interiors.', 'mirrorcraft'),
      'recommended_products'       => array(
        array(
          'title' => __('LED Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('A dependable route for bathroom environments that need clearer illumination, anti-fog practicality, and a calm residential appearance.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirror'),
        ),
        array(
          'title' => __('Makeup / Vanity Mirrors', 'mirrorcraft'),
          'text'  => __('A useful option for closets and dressing areas where closer grooming visibility and more focused lighting are important.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirror'),
        ),
      ),
      'steps_title'   => __('Typical workflow for senior-living mirror sourcing', 'mirrorcraft'),
      'steps_text'    => __('We help narrow the right mirror route by starting from use comfort, layout, and maintenance practicality.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Use Scenario', 'mirrorcraft'),
          'text'  => __('We first confirm the bathroom environment, quantity plan, and expected user needs.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Function Planning', 'mirrorcraft'),
          'text'  => __('Lighting, control, and anti-fog options are selected based on actual practicality.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Sample Review', 'mirrorcraft'),
          'text'  => __('Samples are reviewed for visibility, usability, and layout fit.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production Route', 'mirrorcraft'),
          'text'  => __('The final mirror configuration is then translated into inspection, packing, and shipment planning.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Looking for mirror solutions suited to senior-living projects?', 'mirrorcraft'),
      'cta_text'      => __('Send your bathroom layout, feature expectations, and quantity target, and we will help narrow the right solution.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'retail-furniture' => array(
      'title'         => __('Retail Furniture', 'mirrorcraft'),
      'path'          => 'applications/retail-furniture',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Retail Furniture', 'mirrorcraft'),
      'hero_title'    => __('LED mirror solutions for retail furniture, showrooms, and branded display environments', 'mirrorcraft'),
      'hero_text'     => __('We support buyers who need LED mirrors integrated into retail furniture programs, showroom concepts, and display-led assortments that need stronger visual appeal and practical product differentiation.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Retail Display', 'mirrorcraft'),
        __('Furniture Integration', 'mirrorcraft'),
        __('Showroom Use', 'mirrorcraft'),
        __('Brand Presentation', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Display Appeal', 'mirrorcraft'), 'label' => __('Retail priority', 'mirrorcraft')),
        array('value' => __('Custom Sizes', 'mirrorcraft'), 'label' => __('Fixture matching', 'mirrorcraft')),
        array('value' => __('Branding', 'mirrorcraft'), 'label' => __('Private label support', 'mirrorcraft')),
        array('value' => __('OEM / ODM', 'mirrorcraft'), 'label' => __('Program flexibility', 'mirrorcraft')),
      ),
      'image'         => mirrorcraft_get_product_category_image_url('custom-mirror'),
      'focus_title'   => __('Mirrors for retail furniture spaces', 'mirrorcraft'),
      'focus_text'    => __('Retail furniture applications usually need mirrors that add visual impact, match the furniture or display concept, and help buyers present a stronger finished product in stores or showrooms.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Mirror appearance that supports showroom impact', 'mirrorcraft'),
        __('Sizes and shapes that match furniture or fixture layouts', 'mirrorcraft'),
        __('Branding, packaging, and display consistency', 'mirrorcraft'),
        __('Feature choices that improve product differentiation', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Retail Fit', 'mirrorcraft'),
      'aside_title'   => __('Built for display value, furniture integration, and private label presentation', 'mirrorcraft'),
      'aside_items'   => array(
        __('Mirror concepts can be aligned to branded furniture or display collections', 'mirrorcraft'),
        __('We support custom sizing, shape, and lighting direction for better visual impact', 'mirrorcraft'),
        __('OEM and packaging support help keep the assortment commercially consistent', 'mirrorcraft'),
      ),
      'products_title' => __('Suitable product types for retail-furniture use', 'mirrorcraft'),
      'products'      => array(
        __('Decorative Mirrors', 'mirrorcraft'),
        __('Custom LED Mirrors', 'mirrorcraft'),
        __('Makeup / Vanity Mirrors', 'mirrorcraft'),
        __('Display-Ready Mirror Formats', 'mirrorcraft'),
      ),
      'scenario_intro_title' => __('Mirrors for retail furniture spaces', 'mirrorcraft'),
      'scenario_intro_text'  => __('Different retail and furniture environments need different mirror formats and display effects. We help buyers match mirror size, lighting, and styling to showroom use, furniture integration, and branded presentation goals.', 'mirrorcraft'),
      'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
      'scenario_areas'       => array(
        array(
          'title' => __('Furniture Stores', 'mirrorcraft'),
          'text'  => __('A practical fit for furniture showrooms that need mirrors to complete room displays and improve product presentation.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
        ),
        array(
          'title' => __('Retail Showrooms', 'mirrorcraft'),
          'text'  => __('Useful for branded retail environments where mirror styling and lighting need to strengthen visual merchandising.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
        ),
        array(
          'title' => __('Display Corners & Vanity Areas', 'mirrorcraft'),
          'text'  => __('Suitable for focused display zones where makeup, dressing, or decorative mirror presentation supports the overall collection.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
        ),
      ),
      'cards_title'   => __('How we support retail and furniture-led mirror programs', 'mirrorcraft'),
      'cards_text'    => __('These applications often need product planning that balances showroom impact, brand fit, and commercial practicality.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Display Value', 'mirrorcraft'),
          'text'  => __('Mirror design and lighting direction can be aligned to stronger in-store and showroom presentation.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Fixture Compatibility', 'mirrorcraft'),
          'text'  => __('Custom sizing and structure can help the mirror fit broader furniture and fixture concepts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Branding Support', 'mirrorcraft'),
          'text'  => __('Logo, packaging, and visual direction can be adjusted for private label or branded programs.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Program Development', 'mirrorcraft'),
          'text'  => __('We help buyers organize mirror options into a clearer retail-facing assortment.', 'mirrorcraft'),
        ),
      ),
      'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
      'recommended_products_text'  => __('These product directions are usually the most practical starting point when buyers compare mirror solutions for furniture stores, showrooms, and branded retail display programs.', 'mirrorcraft'),
      'recommended_products'       => array(
        array(
          'title' => __('Custom LED Mirrors', 'mirrorcraft'),
          'text'  => __('A flexible route for retail display programs that need stronger styling, custom shapes, or more distinctive product presentation.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('custom-mirror'),
        ),
        array(
          'title' => __('Makeup / Vanity Mirrors', 'mirrorcraft'),
          'text'  => __('A useful option for showroom and dressing-related retail environments that need focused lighting and stronger display appeal.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirror'),
        ),
      ),
      'steps_title'   => __('Typical workflow for retail-furniture buyers', 'mirrorcraft'),
      'steps_text'    => __('This application usually works best when the mirror is developed around display context, furniture fit, and product positioning from the start.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Concept Review', 'mirrorcraft'),
          'text'  => __('We first confirm the retail or furniture concept, price level, and expected visual direction.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Specification Planning', 'mirrorcraft'),
          'text'  => __('Mirror dimensions, shape, frame, and lighting are matched to the display route.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Sample & Adjustment', 'mirrorcraft'),
          'text'  => __('Samples help confirm display effect, brand fit, and fixture compatibility.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production & Delivery', 'mirrorcraft'),
          'text'  => __('The final program then moves into production, branded packing, and shipment planning.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Need mirror solutions for retail furniture or showroom programs?', 'mirrorcraft'),
      'cta_text'      => __('Share your concept, target market, and product direction, and we will recommend a suitable mirror program.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'salon' => array(
      'title'         => __('Salon', 'mirrorcraft'),
      'path'          => 'applications/salon',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Salon', 'mirrorcraft'),
      'hero_title'    => __('LED mirror solutions for salon, beauty, and vanity-focused spaces', 'mirrorcraft'),
      'hero_text'     => __('We support salon and beauty buyers with LED mirror solutions that improve grooming visibility, strengthen space presentation, and help create a more comfortable experience for styling and makeup use.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Salon Spaces', 'mirrorcraft'),
        __('Beauty Counters', 'mirrorcraft'),
        __('Styling Stations', 'mirrorcraft'),
        __('Makeup Lighting', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Task Lighting', 'mirrorcraft'), 'label' => __('Daily salon use', 'mirrorcraft')),
        array('value' => __('Modern Styling', 'mirrorcraft'), 'label' => __('Beauty presentation', 'mirrorcraft')),
        array('value' => __('Custom Shapes', 'mirrorcraft'), 'label' => __('Design flexibility', 'mirrorcraft')),
        array('value' => __('Private Label', 'mirrorcraft'), 'label' => __('Brand programs', 'mirrorcraft')),
      ),
      'image'         => mirrorcraft_get_product_category_image_url('makeup-mirror'),
      'focus_title'   => __('Mirrors for salon spaces', 'mirrorcraft'),
      'focus_text'    => __('Salon environments usually need mirrors that offer brighter task lighting, a more polished visual effect, and formats that work naturally with styling stations, vanity counters, and beauty-focused interiors.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Bright and comfortable task lighting', 'mirrorcraft'),
        __('Mirror formats suited to vanity and grooming use', 'mirrorcraft'),
        __('Design direction that feels premium and photo-ready', 'mirrorcraft'),
        __('Flexible customization for branded beauty programs', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Beauty Fit', 'mirrorcraft'),
      'aside_title'   => __('Built for grooming, makeup, and beauty environments that need lighting quality and style', 'mirrorcraft'),
      'aside_items'   => array(
        __('Vanity and wall-mounted formats can be matched to different beauty spaces', 'mirrorcraft'),
        __('Function choices can focus on dimming, touch control, and comfort lighting', 'mirrorcraft'),
        __('Shape and finish customization help align the mirror with brand identity', 'mirrorcraft'),
      ),
      'products_title' => __('Suitable product types for salon use', 'mirrorcraft'),
      'products'      => array(
        __('Makeup Mirrors', 'mirrorcraft'),
        __('Vanity Mirrors', 'mirrorcraft'),
        __('Hollywood-Style Mirrors', 'mirrorcraft'),
        __('Custom-Shaped LED Mirrors', 'mirrorcraft'),
      ),
      'scenario_intro_title' => __('Mirrors for salon spaces', 'mirrorcraft'),
      'scenario_intro_text'  => __('Different salon environments need different mirror effects and layouts. We help buyers match mirror lighting, styling, and size to working stations, beauty counters, and customer-facing display areas.', 'mirrorcraft'),
      'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
      'scenario_areas'       => array(
        array(
          'title' => __('Styling Stations', 'mirrorcraft'),
          'text'  => __('A core salon area where brighter task lighting, clear reflection, and a more polished visual effect are essential for daily work.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
        ),
        array(
          'title' => __('Beauty Counters', 'mirrorcraft'),
          'text'  => __('Suitable for makeup and grooming areas that need more focused lighting and a mirror format that supports close-up service use.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
        ),
        array(
          'title' => __('Reception & Waiting Areas', 'mirrorcraft'),
          'text'  => __('A useful fit for front-of-house salon spaces that benefit from decorative mirrors and stronger customer-facing presentation.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
        ),
      ),
      'cards_title'   => __('How we support salon and beauty mirror programs', 'mirrorcraft'),
      'cards_text'    => __('Salon buyers often need a stronger combination of lighting comfort, visual impact, and brand-directed styling.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Task-Oriented Lighting', 'mirrorcraft'),
          'text'  => __('Lighting options can be selected for grooming, makeup, and beauty service visibility.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Vanity-Friendly Formats', 'mirrorcraft'),
          'text'  => __('Mirror shapes and mounting options can be matched to salon counters and beauty stations.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Premium Presentation', 'mirrorcraft'),
          'text'  => __('Design direction can be adjusted to create a more refined customer-facing beauty environment.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Customization Support', 'mirrorcraft'),
          'text'  => __('OEM / ODM options help salon and brand buyers build more differentiated mirror collections.', 'mirrorcraft'),
        ),
      ),
      'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
      'recommended_products_text'  => __('These product directions are usually the most practical starting point when buyers compare mirror solutions for styling stations, beauty counters, and customer-facing salon spaces.', 'mirrorcraft'),
      'recommended_products'       => array(
        array(
          'title' => __('Makeup Mirrors', 'mirrorcraft'),
          'text'  => __('A practical route for salon counters and grooming areas that need closer visibility, stronger lighting, and compact mirror formats.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
        ),
        array(
          'title' => __('Custom LED Mirrors', 'mirrorcraft'),
          'text'  => __('A flexible route for salon projects that need custom shapes, stronger styling, or a more brand-specific mirror direction.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('custom-led-mirrors'),
        ),
      ),
      'steps_title'   => __('Typical workflow for salon mirror sourcing', 'mirrorcraft'),
      'steps_text'    => __('We usually help salon buyers start from lighting use, space layout, and styling direction before finalizing the mirror format.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Use Review', 'mirrorcraft'),
          'text'  => __('We confirm whether the mirror is for beauty service, vanity retail, or salon furniture integration.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Feature Planning', 'mirrorcraft'),
          'text'  => __('Lighting, dimming, touch, and structure are selected around the intended experience.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Sample Check', 'mirrorcraft'),
          'text'  => __('Samples are reviewed for visual appeal, task lighting, and overall brand fit.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production Route', 'mirrorcraft'),
          'text'  => __('The final mirror concept then moves into production and export planning.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Looking for salon-ready mirror solutions?', 'mirrorcraft'),
      'cta_text'      => __('Tell us the beauty application, target style, and quantity plan, and we will recommend the right mirror route.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
    'healthcare' => array(
      'title'         => __('Healthcare', 'mirrorcraft'),
      'path'          => 'applications/healthcare',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Healthcare', 'mirrorcraft'),
      'hero_title'    => __('LED mirror solutions for healthcare, clinic, and behavioral health spaces', 'mirrorcraft'),
      'hero_text'     => __('We support healthcare-related projects with mirror solutions that prioritize practical visibility, safer daily use, and dependable configurations for bathrooms, patient-facing rooms, and care-oriented environments.', 'mirrorcraft'),
      'hero_chips'    => array(
        __('Behavioral Health', 'mirrorcraft'),
        __('Clinic Spaces', 'mirrorcraft'),
        __('Healthcare Washrooms', 'mirrorcraft'),
        __('Patient Rooms', 'mirrorcraft'),
      ),
      'hero_stats'    => array(
        array('value' => __('Practical Use', 'mirrorcraft'), 'label' => __('Healthcare focus', 'mirrorcraft')),
        array('value' => __('Clear Visibility', 'mirrorcraft'), 'label' => __('Daily function', 'mirrorcraft')),
        array('value' => __('Safer Fit', 'mirrorcraft'), 'label' => __('Care-space support', 'mirrorcraft')),
        array('value' => __('Flexible Sizes', 'mirrorcraft'), 'label' => __('Layout support', 'mirrorcraft')),
      ),
      'image'         => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'focus_title'   => __('Mirrors for healthcare spaces', 'mirrorcraft'),
      'focus_text'    => __('Healthcare environments usually need mirrors that support practical daily visibility, clean maintenance, and product configurations that suit bathrooms, patient areas, and behavior-focused care settings.', 'mirrorcraft'),
      'focus_items'   => array(
        __('Clear mirror visibility for daily hygiene and grooming use', 'mirrorcraft'),
        __('Simple and practical lighting support', 'mirrorcraft'),
        __('Mirror dimensions suited to care-oriented bathroom or wash areas', 'mirrorcraft'),
        __('Reliable communication and shipment planning for project use', 'mirrorcraft'),
      ),
      'aside_kicker'  => __('Healthcare Fit', 'mirrorcraft'),
      'aside_title'   => __('Built to support clean, practical, and easy-to-manage mirror use in healthcare spaces', 'mirrorcraft'),
      'aside_items'   => array(
        __('Product planning stays focused on practicality, visibility, and layout fit', 'mirrorcraft'),
        __('Lighting and structure can be adjusted for bathrooms, patient areas, and behavior-focused spaces', 'mirrorcraft'),
        __('Bulk order follow-up and export packing remain aligned to the project brief', 'mirrorcraft'),
      ),
      'products_title' => __('Suitable product types for healthcare use', 'mirrorcraft'),
      'products'      => array(
        __('LED Bathroom Mirrors', 'mirrorcraft'),
        __('Custom Mirror Solutions', 'mirrorcraft'),
        __('Behavioral Health Mirror Options', 'mirrorcraft'),
        __('ADA-Oriented Layouts', 'mirrorcraft'),
      ),
      'scenario_intro_title' => __('Mirrors for healthcare spaces', 'mirrorcraft'),
      'scenario_intro_text'  => __('Different healthcare settings require different mirror formats and performance priorities. We help buyers align mirror type, layout, and installation logic to bathrooms, patient rooms, offices, and specialized care environments.', 'mirrorcraft'),
      'scenario_areas_title' => __('Areas that require mirrors', 'mirrorcraft'),
      'scenario_areas'       => array(
        array(
          'title' => __('Bathrooms', 'mirrorcraft'),
          'text'  => __('A key healthcare area where practical visibility, anti-fog support, and straightforward cleaning matter every day.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
        ),
        array(
          'title' => __('Patient Rooms', 'mirrorcraft'),
          'text'  => __('Suitable for care-related rooms that need a calm, practical mirror solution aligned to regular daily routines.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
        ),
        array(
          'title' => __('Offices & Support Areas', 'mirrorcraft'),
          'text'  => __('A useful fit for staff and support spaces that still need clean, functional mirrors with dependable project consistency.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
        ),
      ),
      'cards_title'   => __('How we support healthcare mirror programs', 'mirrorcraft'),
      'cards_text'    => __('Healthcare-related projects usually benefit from a simpler, more practical sourcing path that keeps layout, visibility, safety, and maintenance in view.', 'mirrorcraft'),
      'cards'         => array(
        array(
          'title' => __('Practical Mirror Planning', 'mirrorcraft'),
          'text'  => __('Mirror dimensions and functions can be matched to clinics, washrooms, and care-oriented layouts.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Clear Lighting Support', 'mirrorcraft'),
          'text'  => __('Lighting direction and visibility can be selected for everyday practical use.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Project Coordination', 'mirrorcraft'),
          'text'  => __('Quotation, sample, and shipment follow-up stay tied to the healthcare application.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Stable Supply Route', 'mirrorcraft'),
          'text'  => __('We help buyers organize the mirror route for cleaner repeat ordering and delivery planning.', 'mirrorcraft'),
        ),
      ),
      'recommended_products_title' => __('Recommended products', 'mirrorcraft'),
      'recommended_products_text'  => __('These product directions are usually the most practical starting point when buyers compare mirror solutions for healthcare bathrooms, patient rooms, and behavior-focused care spaces.', 'mirrorcraft'),
      'recommended_products'       => array(
        array(
          'title' => __('Behavioral Health Mirror Solutions', 'mirrorcraft'),
          'text'  => __('A custom route for behavior-focused spaces that need safer mirror construction, simpler formats, and reliable project coordination.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('custom-led-mirrors'),
        ),
        array(
          'title' => __('ADA-Oriented Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('A practical route for healthcare bathrooms that need clear visibility, accessible layouts, and dependable day-to-day function.', 'mirrorcraft'),
          'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
        ),
      ),
      'steps_title'   => __('Typical workflow for healthcare-related mirror sourcing', 'mirrorcraft'),
      'steps_text'    => __('We usually begin with the use environment, expected function level, and layout needs before moving into sample and order planning.', 'mirrorcraft'),
      'steps'         => array(
        array(
          'title' => __('Environment Review', 'mirrorcraft'),
          'text'  => __('We confirm the care setting, room type, quantity range, and practical use expectations first.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Configuration Match', 'mirrorcraft'),
          'text'  => __('Mirror size, lighting, structure, and safer configuration details are aligned with the healthcare layout.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Sample / Approval', 'mirrorcraft'),
          'text'  => __('Sample review helps confirm function fit and application suitability.', 'mirrorcraft'),
        ),
        array(
          'title' => __('Production & Dispatch', 'mirrorcraft'),
          'text'  => __('The approved configuration then moves into production, packing, and shipment follow-up.', 'mirrorcraft'),
        ),
      ),
      'cta_title'     => __('Need the right mirror route for a healthcare or clinic project?', 'mirrorcraft'),
      'cta_text'      => __('Send your application details, room type, and quantity target, and we will help recommend a suitable healthcare mirror solution.', 'mirrorcraft'),
      'cta_button'    => __('Request a Quote', 'mirrorcraft'),
    ),
  );
}

function mirrorcraft_get_application_section_page_data($slug = '') {
  $pages = mirrorcraft_get_application_submenu_pages();
  $post = null;

  if ($slug === '') {
    $post = get_queried_object();
    $slug = $post instanceof WP_Post ? $post->post_name : '';
  }

  $page = $pages[$slug] ?? array();

  if (empty($page)) {
    return array();
  }

  $post_id = $post instanceof WP_Post ? $post->ID : mirrorcraft_get_page_id_by_path($page['path'] ?? '', $page['template'] ?? '');

  if ($post_id) {
    $page_title = get_the_title($post_id);

    if ($page_title) {
      $page['title'] = $page_title;
    }
  }

  return mirrorcraft_get_application_section_page_overrides($page, $post_id);
}

function mirrorcraft_get_application_section_page_link($slug) {
  $page = mirrorcraft_get_application_section_page_data($slug);
  $path = !empty($page['path']) ? $page['path'] : $slug;

  return mirrorcraft_link_by_slug($path, '/' . trim($path, '/'));
}

function mirrorcraft_get_applications_submenu_items() {
  $items = array();

  foreach (mirrorcraft_get_application_submenu_pages() as $slug => $page) {
    $items[] = array(
      'key'   => $slug,
      'label' => $page['title'],
      'url'   => mirrorcraft_get_application_section_page_link($slug),
    );
  }

  return $items;
}

function mirrorcraft_section_title($key, $default) {
  echo esc_html(mirrorcraft_default_text($key, $default));
}

function mirrorcraft_fallback_menu() {
  echo '<ul class="nav-list">';
  echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'mirrorcraft') . '</a></li>';
  echo '<li class="menu-item-has-children menu-item-about"><a href="' . esc_url(home_url('/about')) . '">' . esc_html__('About', 'mirrorcraft') . '</a>';
  echo '<ul class="sub-menu">';

  foreach (mirrorcraft_get_about_submenu_items() as $item) {
    echo '<li><a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a></li>';
  }

  echo '</ul></li>';
  echo '<li class="menu-item-has-children menu-item-products"><a href="' . esc_url(home_url('/products')) . '">' . esc_html__('Products', 'mirrorcraft') . '</a>';
  echo '<ul class="sub-menu">';

  foreach (mirrorcraft_get_products_submenu_items() as $item) {
    echo '<li><a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a></li>';
  }

  echo '</ul></li>';
  echo '<li class="menu-item-has-children menu-item-applications"><a href="' . esc_url(home_url('/applications')) . '">' . esc_html__('Applications', 'mirrorcraft') . '</a>';
  echo '<ul class="sub-menu">';

  foreach (mirrorcraft_get_applications_submenu_items() as $item) {
    echo '<li><a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a></li>';
  }

  echo '</ul></li>';
  echo '<li><a href="' . esc_url(home_url('/contact')) . '">' . esc_html__('Contact', 'mirrorcraft') . '</a></li>';
  echo '</ul>';
}

function mirrorcraft_get_brand_logo_url() {
  $brand_logo_path = get_template_directory() . '/assets/images/oj-brand-logo.png';

  if (file_exists($brand_logo_path)) {
    return get_template_directory_uri() . '/assets/images/oj-brand-logo.png';
  }

  $custom_logo_id = (int) get_theme_mod('custom_logo');

  if ($custom_logo_id) {
    $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

    if ($custom_logo_url) {
      return $custom_logo_url;
    }
  }

  return '';
}

function mirrorcraft_get_hero_scene_url() {
  $hero_scene_alt_path = get_template_directory() . '/assets/images/hero-bathroom-led-scene-hero.jpg';
  $fallback_url = '';

  if (file_exists($hero_scene_alt_path)) {
    $fallback_url = get_template_directory_uri() . '/assets/images/hero-bathroom-led-scene-hero.jpg';
  }

  if ($fallback_url === '') {
    $hero_scene_path = get_template_directory() . '/assets/images/hero-bathroom-led-scene-alt-hero.jpg';

    if (file_exists($hero_scene_path)) {
      $fallback_url = get_template_directory_uri() . '/assets/images/hero-bathroom-led-scene-alt-hero.jpg';
    }
  }

  return mirrorcraft_get_image_field_url('hero_background_image', $fallback_url);
}

function mirrorcraft_get_hero_makeup_image_url() {
  $makeup_scene_path = get_template_directory() . '/assets/images/hero-makeup-model-hero.jpg';
  $fallback_url = '';

  if (file_exists($makeup_scene_path)) {
    $fallback_url = get_template_directory_uri() . '/assets/images/hero-makeup-model-hero.jpg';
  }

  return mirrorcraft_get_image_field_url('hero_makeup_image', $fallback_url);
}

function mirrorcraft_get_hero_makeup_image_large_url() {
  $makeup_scene_large_path = get_template_directory() . '/assets/images/hero-makeup-model-large.jpg';

  if (file_exists($makeup_scene_large_path)) {
    return get_template_directory_uri() . '/assets/images/hero-makeup-model-large.jpg';
  }

  $makeup_scene_fallback_path = get_template_directory() . '/assets/images/hero-makeup-model.jpg';

  if (file_exists($makeup_scene_fallback_path)) {
    return get_template_directory_uri() . '/assets/images/hero-makeup-model.jpg';
  }

  return mirrorcraft_get_hero_makeup_image_url();
}

function mirrorcraft_get_active_hero_image_url() {
  return mirrorcraft_get_hero_scene_url();
}

function mirrorcraft_get_active_hero_image_srcset() {
  $configured_hero_image = mirrorcraft_get_field('hero_background_image', '');

  if (!empty($configured_hero_image)) {
    return '';
  }

  $small_path = get_template_directory() . '/assets/images/hero-bathroom-led-scene-mobile.jpg';
  $large_path = get_template_directory() . '/assets/images/hero-bathroom-led-scene-hero.jpg';

  if (!file_exists($small_path) || !file_exists($large_path)) {
    return '';
  }

  $small = get_template_directory_uri() . '/assets/images/hero-bathroom-led-scene-mobile.jpg';
  $large = get_template_directory_uri() . '/assets/images/hero-bathroom-led-scene-hero.jpg';

  if ($small && $large && $small !== $large) {
    return sprintf('%s 900w, %s 1536w', esc_url($small), esc_url($large));
  }

  return '';
}

function mirrorcraft_get_product_category_image_url($key) {
  $field_map = array(
    'bathroom-mirror'  => 'featured_bathroom_mirror_image',
    'medicine-cabinet' => 'featured_medicine_cabinet_image',
    'makeup-mirror'    => 'featured_makeup_mirror_image',
    'custom-mirror'    => 'featured_custom_led_mirror_image',
  );
  $asset_map = array(
    'bathroom-mirror'  => 'product-bathroom-mirror.jpg',
    'medicine-cabinet' => 'product-medicine-cabinet.jpg',
    'makeup-mirror'    => 'product-makeup-mirror.jpg',
    'custom-mirror'    => 'customization-shapes-image.jpg',
  );

  if (empty($asset_map[$key])) {
    return '';
  }

  $relative_path = '/assets/images/' . $asset_map[$key];
  $asset_path = get_template_directory() . $relative_path;
  $fallback_url = '';

  if (file_exists($asset_path)) {
    $fallback_url = get_template_directory_uri() . $relative_path;
  }

  $front_page_id = mirrorcraft_get_front_page_id();
  $field_key = $field_map[$key] ?? '';

  if ($field_key && $front_page_id) {
    return mirrorcraft_get_image_field_url($field_key, $fallback_url, $front_page_id);
  }

  return $fallback_url;
}

function mirrorcraft_get_customization_reference_image_url() {
  $relative_path = '/assets/images/customization-shapes-image.jpg';
  $asset_path = get_template_directory() . $relative_path;
  $fallback_url = '';

  if (file_exists($asset_path)) {
    $fallback_url = get_template_directory_uri() . $relative_path;
  }

  $front_page_id = mirrorcraft_get_front_page_id();

  if ($front_page_id) {
    return mirrorcraft_get_image_field_url('customization_shapes_image', $fallback_url, $front_page_id);
  }

  return $fallback_url;
}

function mirrorcraft_get_customization_controls_image_url() {
  $relative_path = '';
  $asset_path = '';
  $fallback_url = '';

  foreach (array('/assets/images/customization-controls-image.png', '/assets/images/customization-controls-image.jpg') as $candidate_path) {
    $candidate_asset_path = get_template_directory() . $candidate_path;

    if (!file_exists($candidate_asset_path)) {
      continue;
    }

    $relative_path = $candidate_path;
    $asset_path = $candidate_asset_path;
    $fallback_url = add_query_arg(
      'ver',
      (string) filemtime($asset_path),
      get_template_directory_uri() . $relative_path
    );
    break;
  }

  if ($fallback_url !== '') {
    return $fallback_url;
  }

  $front_page_id = mirrorcraft_get_front_page_id();

  if ($front_page_id) {
    return mirrorcraft_get_image_field_url('customization_controls_image', $fallback_url, $front_page_id);
  }

  return $fallback_url;
}

function mirrorcraft_get_article_visual_key($post = null, $title = '') {
  $post_object = null;

  if ($post instanceof WP_Post) {
    $post_object = $post;
  } elseif (is_numeric($post)) {
    $post_object = get_post((int) $post);
  }

  $haystack_parts = array();

  if ($post_object instanceof WP_Post) {
    $haystack_parts[] = $post_object->post_title;
    $haystack_parts[] = $post_object->post_excerpt;
    $haystack_parts[] = $post_object->post_content;

    $terms = get_the_terms($post_object, 'category');
    if (is_array($terms)) {
      foreach ($terms as $term) {
        $haystack_parts[] = $term->name;
        $haystack_parts[] = $term->slug;
      }
    }
  }

  if ($title !== '') {
    $haystack_parts[] = $title;
  }

  $haystack = strtolower(wp_strip_all_tags(implode(' ', array_filter($haystack_parts))));

  if ($haystack === '') {
    return 'bathroom-mirror';
  }

  if (preg_match('/cabinet|medicine|storage|door|shelf/', $haystack)) {
    return 'medicine-cabinet';
  }

  if (preg_match('/makeup|salon|beauty|vanity/', $haystack)) {
    return 'makeup-mirror';
  }

  if (preg_match('/custom|oem|odm|inquiry|quote|project|brand|collection/', $haystack)) {
    return 'custom-mirror';
  }

  return 'bathroom-mirror';
}

function mirrorcraft_get_article_image_url($post = null, $title = '') {
  $post_object = null;

  if ($post instanceof WP_Post) {
    $post_object = $post;
  } elseif (is_numeric($post)) {
    $post_object = get_post((int) $post);
  }

  if ($post_object instanceof WP_Post && has_post_thumbnail($post_object)) {
    $featured_url = get_the_post_thumbnail_url($post_object, 'large');
    if ($featured_url) {
      return $featured_url;
    }
  }

  return mirrorcraft_get_product_category_image_url(mirrorcraft_get_article_visual_key($post_object, $title));
}

function mirrorcraft_get_article_image_alt($post = null, $title = '') {
  $post_object = null;

  if ($post instanceof WP_Post) {
    $post_object = $post;
  } elseif (is_numeric($post)) {
    $post_object = get_post((int) $post);
  }

  if ($post_object instanceof WP_Post && has_post_thumbnail($post_object)) {
    $thumbnail_id = get_post_thumbnail_id($post_object);
    $alt_text = trim((string) get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true));
    if ($alt_text !== '') {
      return $alt_text;
    }

    return get_the_title($post_object);
  }

  if ($post_object instanceof WP_Post) {
    return get_the_title($post_object);
  }

  return $title !== '' ? $title : __('Article image', 'mirrorcraft');
}

function mirrorcraft_get_youtube_embed_url($url) {
  $url = trim((string) $url);

  if ($url === '') {
    return '';
  }

  $parts = wp_parse_url($url);

  if (empty($parts['host'])) {
    return '';
  }

  $host = strtolower($parts['host']);
  $path = $parts['path'] ?? '';
  $video_id = '';

  if (strpos($host, 'youtu.be') !== false) {
    $video_id = trim($path, '/');
  } elseif (strpos($host, 'youtube.com') !== false || strpos($host, 'youtube-nocookie.com') !== false) {
    if (!empty($parts['query'])) {
      parse_str($parts['query'], $query_args);
      if (!empty($query_args['v'])) {
        $video_id = (string) $query_args['v'];
      }
    }

    if ($video_id === '' && preg_match('#/(embed|shorts)/([^/?&]+)#', $path, $matches)) {
      $video_id = $matches[2];
    }
  }

  $video_id = preg_replace('/[^A-Za-z0-9_-]/', '', $video_id);

  if ($video_id === '') {
    return '';
  }

  return 'https://www.youtube-nocookie.com/embed/' . $video_id . '?rel=0&modestbranding=1';
}

function mirrorcraft_render_brand_logo($args = array()) {
  $args = wp_parse_args(
    $args,
    array(
      'class_name'      => '',
      'show_brand_name' => true,
      'show_tagline'    => true,
    )
  );

  $site_name = get_bloginfo('name') ?: 'OJMIRROR';
  $brand_name = $site_name;
  $brand_tagline = __('LED mirror and cabinet manufacturer', 'mirrorcraft');
  $brand_logo_url = mirrorcraft_get_brand_logo_url();

  if (stripos($site_name, 'ojmirror') !== false) {
    $brand_name = 'OJMIRROR';
    $brand_tagline = __('LED mirror and cabinet manufacturer', 'mirrorcraft');
  }

  $classes = trim('site-brand-fallback brand-lockup ' . $args['class_name']);
  ?>
  <a class="<?php echo esc_attr($classes); ?>" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr($brand_name); ?>">
    <?php if ($brand_logo_url) : ?>
      <span class="site-brand-mark brand-image-mark" aria-hidden="true">
        <img class="brand-image" src="<?php echo esc_url($brand_logo_url); ?>" alt="" width="64" height="64" decoding="async">
      </span>
    <?php else : ?>
      <span class="site-brand-mark brand-claw-mark" aria-hidden="true">
        <span class="brand-claw-core"></span>
        <span class="brand-claw brand-claw-1"></span>
        <span class="brand-claw brand-claw-2"></span>
        <span class="brand-claw brand-claw-3"></span>
      </span>
    <?php endif; ?>

    <?php if ($args['show_brand_name'] || $args['show_tagline']) : ?>
      <span class="brand-copy">
        <?php if ($args['show_brand_name']) : ?>
          <span class="brand-title"><?php echo esc_html($brand_name); ?></span>
        <?php endif; ?>
        <?php if ($args['show_tagline']) : ?>
          <span class="brand-tagline"><?php echo esc_html($brand_tagline); ?></span>
        <?php endif; ?>
      </span>
    <?php endif; ?>
  </a>
  <?php
}
