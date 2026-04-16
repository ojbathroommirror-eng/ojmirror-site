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
      'question' => __('Are your LED mirrors dimmable and anti-fog?', 'mirrorcraft'),
      'answer'   => __('Yes. Dimming and anti-fog options can be provided depending on the product model and project requirements.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Can I customize the size, shape, and cabinet configuration?', 'mirrorcraft'),
      'answer'   => __('Yes. We support customized dimensions, shapes, lighting layouts, and cabinet configurations for OEM and project orders.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Can I request a sample before placing a bulk order?', 'mirrorcraft'),
      'answer'   => __('Yes. Sample planning is a standard part of many project workflows, especially when teams need to confirm size, finish, lighting, and installation fit before mass production.', 'mirrorcraft'),
    ),
    array(
      'question' => __('What is the MOQ and production lead time?', 'mirrorcraft'),
      'answer'   => __('MOQ and lead time depend on product complexity, finish requirements, electronics, and order quantity. We usually confirm both after the specification route and sample requirements are clear.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Can you discuss certification-related requirements?', 'mirrorcraft'),
      'answer'   => __('Yes. We can discuss certification direction according to the target application, destination requirement, and selected product route.', 'mirrorcraft'),
    ),
    array(
      'question' => __('Are your products suitable for bathroom environments?', 'mirrorcraft'),
      'answer'   => __('Our illuminated bathroom products are developed for humid-use scenarios, with specifications confirmed according to the selected model and target application.', 'mirrorcraft'),
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

function mirrorcraft_get_product_category_pages() {
  return array(
    'bathroom-mirrors' => array(
      'title'          => __('Bathroom Mirrors', 'mirrorcraft'),
      'path'           => 'products/bathroom-mirrors',
      'image_key'      => 'bathroom-mirror',
      'intro'          => __('Bathroom mirror programs built around practical installation, contemporary styling, and the specification needs of residential and hospitality buyers.', 'mirrorcraft'),
      'overview_title' => __('Bathroom Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This category covers modern bathroom mirror directions that balance appearance, moisture-area suitability, and flexible project support.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Residential and hospitality focused', 'mirrorcraft'),
        __('Framed and frameless directions', 'mirrorcraft'),
        __('Specification support', 'mirrorcraft'),
        __('Private label options', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Clean silhouettes for modern bathrooms', 'mirrorcraft')),
        array('item_text' => __('Flexible shapes, finishes, and sizing', 'mirrorcraft')),
        array('item_text' => __('Suitable for residential and project supply', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Frame and edge style customization', 'mirrorcraft')),
        array('item_text' => __('Wall-mounted and vanity-oriented formats', 'mirrorcraft')),
        array('item_text' => __('Packaging support for import programs', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Bathroom brands that need a core mirror category', 'mirrorcraft'),
        __('Apartment and renovation buyers sourcing practical mirror lines', 'mirrorcraft'),
        __('Distributors building complete bathroom assortments', 'mirrorcraft'),
      ),
      'closing'        => __('Share your target style direction, quantity range, and market requirements to receive a bathroom mirror proposal.', 'mirrorcraft'),
    ),
    'medicine-cabinets' => array(
      'title'          => __('Medicine Cabinets', 'mirrorcraft'),
      'path'           => 'products/medicine-cabinets',
      'image_key'      => 'medicine-cabinet',
      'intro'          => __('Lighted medicine cabinets that combine mirror presentation, storage function, and clean wall-mounted design for modern bathrooms.', 'mirrorcraft'),
      'overview_title' => __('Medicine Cabinet Overview', 'mirrorcraft'),
      'overview_text'  => __('This line is aimed at buyers who need both mirror lighting and practical cabinet storage in one product category.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Storage plus illumination', 'mirrorcraft'),
        __('Project and retail suitable', 'mirrorcraft'),
        __('Cabinet depth options', 'mirrorcraft'),
        __('OEM / ODM available', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Integrated mirror and cabinet structure', 'mirrorcraft')),
        array('item_text' => __('Lighting layouts for modern bathroom use', 'mirrorcraft')),
        array('item_text' => __('Premium appearance with practical storage', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Cabinet size, door, and shelf configuration', 'mirrorcraft')),
        array('item_text' => __('Lighting, anti-fog, and switch options', 'mirrorcraft')),
        array('item_text' => __('Branding and export packaging support', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Hospitality and residential projects that need storage utility', 'mirrorcraft'),
        __('Bathroom brands adding higher-value cabinet lines', 'mirrorcraft'),
        __('Importers looking for combined function and design', 'mirrorcraft'),
      ),
      'closing'        => __('Tell us the cabinet dimensions, feature requirements, and target market so we can quote the right medicine cabinet route.', 'mirrorcraft'),
    ),
    'decorative-mirrors' => array(
      'title'          => __('Decorative Mirrors', 'mirrorcraft'),
      'path'           => 'products/decorative-mirrors',
      'image_key'      => 'bathroom-mirror',
      'intro'          => __('Decorative framed mirror programs for premium bathrooms, design-led interiors, and buyers who need a stronger style story.', 'mirrorcraft'),
      'overview_title' => __('Decorative Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('Framed mirrors help buyers create more distinctive bathroom and hospitality collections without losing practical product flexibility.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Decorative edge styling', 'mirrorcraft'),
        __('Premium finish direction', 'mirrorcraft'),
        __('Retail and hospitality friendly', 'mirrorcraft'),
        __('Customization support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Stronger decorative presentation', 'mirrorcraft')),
        array('item_text' => __('Frame finish choices for different markets', 'mirrorcraft')),
        array('item_text' => __('Suitable for premium bathroom collections', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Frame material and color selection', 'mirrorcraft')),
        array('item_text' => __('Round, rectangular, and shaped formats', 'mirrorcraft')),
        array('item_text' => __('Private label packaging and brand styling', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Retail buyers selling decorative bathroom mirror lines', 'mirrorcraft'),
        __('Hospitality projects with stronger design requirements', 'mirrorcraft'),
        __('Importers building premium interior assortments', 'mirrorcraft'),
      ),
      'closing'        => __('Send your preferred frame style, size range, and finish direction to receive a decorative mirror quotation.', 'mirrorcraft'),
    ),
    'makeup-mirrors' => array(
      'title'          => __('Makeup Mirrors', 'mirrorcraft'),
      'path'           => 'products/makeup-mirrors',
      'image_key'      => 'makeup-mirror',
      'intro'          => __('Makeup mirror collections for hotels, salons, vanity areas, and beauty-focused buyers who need clear close-up lighting performance.', 'mirrorcraft'),
      'overview_title' => __('Makeup Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This line is built for daily grooming and beauty use, with practical wall-mounted and vanity-friendly formats.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Beauty and vanity use', 'mirrorcraft'),
        __('Wall-mounted options', 'mirrorcraft'),
        __('Hospitality and salon fit', 'mirrorcraft'),
        __('Sample support available', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Clear close-up mirror function', 'mirrorcraft')),
        array('item_text' => __('Lighting support for beauty use', 'mirrorcraft')),
        array('item_text' => __('Compact formats for hotel and vanity programs', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Arm style, finish, and mounting options', 'mirrorcraft')),
        array('item_text' => __('Magnification and lighting configuration', 'mirrorcraft')),
        array('item_text' => __('Retail and hospitality packaging support', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Hotel bathroom and guestroom vanity programs', 'mirrorcraft'),
        __('Salon and beauty space sourcing', 'mirrorcraft'),
        __('Retail buyers selling grooming mirror products', 'mirrorcraft'),
      ),
      'closing'        => __('Tell us your finish, mounting, and lighting requirements to receive a makeup mirror recommendation and quotation.', 'mirrorcraft'),
    ),
    'full-length-mirrors' => array(
      'title'          => __('Full Length Mirrors', 'mirrorcraft'),
      'path'           => 'products/full-length-mirrors',
      'image_key'      => 'makeup-mirror',
      'intro'          => __('Full-length mirror programs for dressing areas, hospitality rooms, retail spaces, and residential interiors that need a stronger vertical format.', 'mirrorcraft'),
      'overview_title' => __('Full Length Mirror Overview', 'mirrorcraft'),
      'overview_text'  => __('This category supports buyers who need large-format mirrors with a clean silhouette and optional illuminated presentation.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('Vertical mirror format', 'mirrorcraft'),
        __('Retail and hospitality suitable', 'mirrorcraft'),
        __('Optional illuminated styling', 'mirrorcraft'),
        __('OEM / ODM support', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Space-enhancing full-length presentation', 'mirrorcraft')),
        array('item_text' => __('Suitable for dressing and fitting scenarios', 'mirrorcraft')),
        array('item_text' => __('Flexible framing and mounting direction', 'mirrorcraft')),
      ),
      'options'        => array(
        array('item_text' => __('Freestanding and wall-mounted possibilities', 'mirrorcraft')),
        array('item_text' => __('Frame finishes and illumination choices', 'mirrorcraft')),
        array('item_text' => __('Project and retail packaging support', 'mirrorcraft')),
      ),
      'use_cases'      => array(
        __('Hospitality rooms and apartment dressing areas', 'mirrorcraft'),
        __('Retail fitting and display environments', 'mirrorcraft'),
        __('Interior brands that need large-format mirror options', 'mirrorcraft'),
      ),
      'closing'        => __('Share the format, finish direction, and market type to receive a full-length mirror proposal.', 'mirrorcraft'),
    ),
    'custom-led-mirrors' => array(
      'title'          => __('Custom LED Mirrors', 'mirrorcraft'),
      'path'           => 'products/custom-led-mirrors',
      'image_key'      => 'medicine-cabinet',
      'intro'          => __('Custom LED mirror development for brands, wholesalers, and project buyers who need spec-driven products rather than off-the-shelf models.', 'mirrorcraft'),
      'overview_title' => __('Custom Program Overview', 'mirrorcraft'),
      'overview_text'  => __('This route is designed for buyers who need their own combination of size, lighting, features, packaging, and branding support.', 'mirrorcraft'),
      'buyer_tags'     => array(
        __('OEM / ODM route', 'mirrorcraft'),
        __('Private label packaging', 'mirrorcraft'),
        __('Spec-driven development', 'mirrorcraft'),
        __('Quotation and sample consultation', 'mirrorcraft'),
      ),
      'features'       => array(
        array('item_text' => __('Custom dimensions, layouts, and structures', 'mirrorcraft')),
        array('item_text' => __('Lighting and functional feature flexibility', 'mirrorcraft')),
        array('item_text' => __('Branding and packaging support for export', 'mirrorcraft')),
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
      'closing'        => __('Send your product brief, quantity target, and branding requirements so we can advise the right custom LED mirror path.', 'mirrorcraft'),
    ),
  );
}

function mirrorcraft_normalize_product_category_slug($slug) {
  $slug = trim((string) $slug, '/');

  $aliases = array(
    'framed-mirrors' => 'decorative-mirrors',
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
    $path = $path ? untrailingslashit($path) : '';

    if ('/products/framed-mirrors' === $path || '/products/decorative-mirrors' === $path) {
      $item->title = __('Decorative Mirrors', 'mirrorcraft');
      $item->post_title = __('Decorative Mirrors', 'mirrorcraft');
      $item->url = mirrorcraft_get_product_category_page_link('decorative-mirrors');
    }
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

  if ('/products/framed-mirrors' !== $request_path) {
    return;
  }

  wp_safe_redirect(mirrorcraft_get_product_category_page_link('decorative-mirrors'), 301);
  exit;
}
add_action('template_redirect', 'mirrorcraft_redirect_legacy_product_category_links', 1);

function mirrorcraft_get_about_submenu_pages() {
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
      'title'    => __('FAQs', 'mirrorcraft'),
      'path'     => 'about/faqs',
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
      'label' => __('FAQs', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug($faq_page['path'], '/' . trim($faq_page['path'], '/')),
    );
  }

  return $items;
}

function mirrorcraft_get_application_submenu_pages() {
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
      'title'         => __('Multifamily', 'mirrorcraft'),
      'path'          => 'applications/residential',
      'template'      => 'page-templates/page-application-section.php',
      'eyebrow'       => __('Multifamily', 'mirrorcraft'),
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
  $visible_slugs = array(
    'hospitality',
    'commercial',
    'residential',
    'senior-living',
    'healthcare',
  );

  foreach (mirrorcraft_get_application_submenu_pages() as $slug => $page) {
    if (!in_array($slug, $visible_slugs, true)) {
      continue;
    }

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
