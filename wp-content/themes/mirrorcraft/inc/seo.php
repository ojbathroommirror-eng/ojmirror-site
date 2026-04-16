<?php

function mirrorcraft_has_seo_plugin() {
  return defined('WPSEO_VERSION')
    || defined('RANK_MATH_VERSION')
    || defined('AIOSEO_VERSION')
    || class_exists('AIOSEO\\Plugin\\Common\\Main');
}

function mirrorcraft_get_seo_blueprints() {
  return array(
    '' => array(
      'title'       => 'LED Bathroom Mirror Manufacturer in China | Custom Lighted Mirrors & Medicine Cabinets | OJMIRROR',
      'description' => 'OJMIRROR manufactures custom LED bathroom mirrors, lighted medicine cabinets, and OEM/ODM mirror programs for hospitality, multifamily, healthcare, and private label buyers worldwide.',
    ),
    'products' => array(
      'title'       => 'LED Bathroom Mirrors, Lighted Medicine Cabinets & Custom Mirror Programs | OJMIRROR',
      'description' => 'Explore OJMIRROR product lines including LED bathroom mirrors, lighted medicine cabinets, framed mirrors, and custom OEM/ODM mirror programs for global B2B buyers.',
    ),
    'products/led-bathroom-mirrors' => array(
      'title'       => 'LED Bathroom Mirror Manufacturer in China | Backlit, Front-lit, Framed | OJMIRROR',
      'description' => 'Source custom LED bathroom mirrors with anti-fog, dimming, CCT control, touch sensors, and project-ready customization from OJMIRROR in China.',
    ),
    'products/lighted-medicine-cabinets' => array(
      'title'       => 'Lighted Medicine Cabinet Manufacturer in China | OJMIRROR',
      'description' => 'OJMIRROR supplies lighted medicine cabinets for hospitality, multifamily, and residential projects with custom sizing, storage layouts, and mirror lighting options.',
    ),
    'products/framed-led-mirrors' => array(
      'title'       => 'Framed LED Mirror Manufacturer in China | Custom Decorative Mirror Programs | OJMIRROR',
      'description' => 'Explore framed LED mirror programs for premium bathrooms, hospitality interiors, and branded product lines with custom styling and OEM support.',
    ),
    'products/makeup-mirrors' => array(
      'title'       => 'Makeup Mirror Manufacturer in China | Vanity Mirror OEM ODM | OJMIRROR',
      'description' => 'Source makeup and vanity mirror programs with task lighting, custom sizing, private label support, and beauty-focused OEM/ODM development from OJMIRROR.',
    ),
    'products/custom-led-mirrors' => array(
      'title'       => 'OEM ODM Custom LED Mirror Manufacturer in China | OJMIRROR',
      'description' => 'Develop custom LED mirror programs with OEM, ODM, private label, customized sizing, feature mix, branding, and packaging support from OJMIRROR.',
    ),
    'applications' => array(
      'title'       => 'LED Mirror Applications for Hospitality, Commercial, Residential & Healthcare | OJMIRROR',
      'description' => 'See how OJMIRROR organizes LED mirror and medicine cabinet programs for hotels, commercial spaces, residential projects, senior living, salons, and healthcare environments.',
    ),
    'applications/hospitality' => array(
      'title'       => 'Hotel Bathroom LED Mirrors & Lighted Medicine Cabinets | OJMIRROR',
      'description' => 'Custom hotel bathroom mirror programs with anti-fog, dimmable lighting, repeatable specification, and project-ready packaging support from OJMIRROR.',
    ),
    'applications/commercial' => array(
      'title'       => 'Commercial LED Mirror Supplier | OJMIRROR',
      'description' => 'Explore commercial mirror solutions for public bathrooms, reception spaces, amenities, and shared-use interiors with practical lighting and project-ready support.',
    ),
    'applications/residential' => array(
      'title'       => 'Residential and Multifamily Bathroom Mirror Supplier | OJMIRROR',
      'description' => 'OJMIRROR supports residential and multifamily developments with repeatable LED mirror programs, dependable specifications, and cleaner procurement workflows.',
    ),
    'applications/senior-living' => array(
      'title'       => 'Senior Living Bathroom Mirror Supplier | OJMIRROR',
      'description' => 'Find LED mirror programs for senior living bathrooms, dressing spaces, and comfort-focused residential care environments.',
    ),
    'applications/retail-furniture' => array(
      'title'       => 'Retail Furniture and Display Mirror Supplier | OJMIRROR',
      'description' => 'Discover custom mirror programs for furniture stores, showroom displays, and branded retail environments that need stronger presentation and OEM flexibility.',
    ),
    'applications/salon' => array(
      'title'       => 'Salon and Vanity Mirror Manufacturer | OJMIRROR',
      'description' => 'Source salon and vanity mirror programs with task lighting, custom styling, and beauty-focused OEM/ODM support from OJMIRROR.',
    ),
    'applications/healthcare' => array(
      'title'       => 'Healthcare Bathroom Mirror Manufacturer | OJMIRROR',
      'description' => 'Explore healthcare-oriented LED mirror programs designed for visibility, maintenance, comfort, and long-term bathroom use.',
    ),
    'manufacturing' => array(
      'title'       => 'LED Mirror Manufacturing, QC & Export Packaging | OJMIRROR',
      'description' => 'Learn how OJMIRROR approaches mirror development, sample review, quality control, packaging, and export support for global B2B orders.',
    ),
    'projects' => array(
      'title'       => 'LED Mirror Project Cases and Product Routes | OJMIRROR',
      'description' => 'View project routes and case-style pages for hospitality, multifamily, and private label LED mirror programs.',
    ),
    'resources' => array(
      'title'       => 'Catalog, Buying Guides and FAQ | OJMIRROR',
      'description' => 'Access OJMIRROR product catalogs, FAQ content, and buying guides for LED bathroom mirrors and lighted medicine cabinets.',
    ),
    'faq' => array(
      'title'       => 'LED Mirror FAQ | OEM, MOQ, Samples, Certification Support | OJMIRROR',
      'description' => 'Get answers about customization, OEM/ODM, samples, lead time, certification direction, and bathroom-use LED mirror programs.',
    ),
    'contact' => array(
      'title'       => 'Contact OJMIRROR | Request a Quote for LED Mirrors and Mirror Cabinets',
      'description' => 'Contact OJMIRROR to discuss pricing, product requirements, OEM/ODM mirror programs, and project-based LED bathroom mirror sourcing.',
    ),
  );
}

function mirrorcraft_get_seo_blueprint() {
  $path = '';

  if (is_front_page()) {
    $path = '';
  } elseif (is_page() || is_singular()) {
    $permalink = get_permalink(get_queried_object_id());
    $path = trim((string) wp_parse_url((string) $permalink, PHP_URL_PATH), '/');
  }

  $blueprints = mirrorcraft_get_seo_blueprints();

  return $blueprints[$path] ?? array();
}

function mirrorcraft_filter_document_title($title) {
  if (is_admin() || mirrorcraft_has_seo_plugin()) {
    return $title;
  }

  $blueprint = mirrorcraft_get_seo_blueprint();

  if (!empty($blueprint['title'])) {
    return $blueprint['title'];
  }

  return $title;
}
add_filter('pre_get_document_title', 'mirrorcraft_filter_document_title', 20);

function mirrorcraft_get_theme_color() {
  return '#0b6d37';
}

function mirrorcraft_seo_clean_text($text) {
  return trim((string) preg_replace('/\s+/', ' ', wp_strip_all_tags((string) $text)));
}

function mirrorcraft_seo_trim_description($text) {
  $text = mirrorcraft_seo_clean_text($text);

  if ($text === '') {
    return '';
  }

  return wp_trim_words($text, 28, '...');
}

function mirrorcraft_get_meta_image_url() {
  $brand_logo_url = mirrorcraft_get_brand_logo_url();

  if ($brand_logo_url) {
    return $brand_logo_url;
  }

  $site_icon = get_site_icon_url(512);

  if ($site_icon) {
    return $site_icon;
  }

  return '';
}

function mirrorcraft_get_seo_description() {
  $blueprint = mirrorcraft_get_seo_blueprint();

  if (!empty($blueprint['description'])) {
    return $blueprint['description'];
  }

  if (is_front_page()) {
    return mirrorcraft_seo_trim_description(
      mirrorcraft_default_text(
        'hero_text',
        mirrorcraft_get_option_field('footer_blurb', get_bloginfo('description'))
      )
    );
  }

  if (is_page_template('page-templates/page-products.php')) {
    return mirrorcraft_seo_trim_description(mirrorcraft_default_text('products_intro', ''));
  }

  if (is_page_template('page-templates/page-contact.php')) {
    return mirrorcraft_seo_trim_description(mirrorcraft_default_text('contact_intro', ''));
  }

  if (is_page_template('page-templates/page-about.php')) {
    return mirrorcraft_seo_trim_description(mirrorcraft_default_text('about_intro', ''));
  }

  if (is_page_template('page-templates/page-product-category.php')) {
    return mirrorcraft_seo_trim_description(mirrorcraft_default_text('category_intro', ''));
  }

  if (is_singular()) {
    if (has_excerpt()) {
      return mirrorcraft_seo_trim_description(get_the_excerpt());
    }

    $content = get_post_field('post_content', get_queried_object_id());

    if (!empty($content)) {
      return mirrorcraft_seo_trim_description($content);
    }
  }

  if (is_archive()) {
    $archive_description = get_the_archive_description();

    if (!empty($archive_description)) {
      return mirrorcraft_seo_trim_description($archive_description);
    }

    return mirrorcraft_seo_trim_description(wp_get_document_title());
  }

  if (is_search()) {
    return mirrorcraft_seo_trim_description(
      sprintf(
        __('Search results for %s on %s.', 'mirrorcraft'),
        get_search_query(),
        get_bloginfo('name')
      )
    );
  }

  return mirrorcraft_seo_trim_description(
    mirrorcraft_get_option_field('footer_blurb', get_bloginfo('description'))
  );
}

function mirrorcraft_get_canonical_url() {
  if (is_paged()) {
    return get_pagenum_link(get_query_var('paged'));
  }

  if (is_front_page()) {
    return home_url('/');
  }

  if (is_home()) {
    $posts_page_id = (int) get_option('page_for_posts');

    if ($posts_page_id) {
      return get_permalink($posts_page_id);
    }

    return home_url('/');
  }

  if (is_singular()) {
    return get_permalink();
  }

  if (is_search()) {
    return home_url('/?s=' . rawurlencode(get_search_query()));
  }

  if (is_post_type_archive()) {
    $post_type = get_query_var('post_type');

    if (is_array($post_type)) {
      $post_type = reset($post_type);
    }

    if ($post_type) {
      $archive_link = get_post_type_archive_link($post_type);

      if ($archive_link) {
        return $archive_link;
      }
    }
  }

  if (is_category() || is_tag() || is_tax()) {
    $term_link = get_term_link(get_queried_object());

    if (!is_wp_error($term_link)) {
      return $term_link;
    }
  }

  if (is_author()) {
    return get_author_posts_url(get_queried_object_id());
  }

  global $wp;
  $request_path = isset($wp->request) ? $wp->request : '';

  if ($request_path !== '') {
    return home_url('/' . user_trailingslashit($request_path));
  }

  return home_url('/');
}

function mirrorcraft_prepare_seo_output() {
  if (!mirrorcraft_has_seo_plugin()) {
    remove_action('wp_head', 'rel_canonical');
  }
}
add_action('template_redirect', 'mirrorcraft_prepare_seo_output');

function mirrorcraft_output_seo_meta() {
  if (is_admin() || is_feed() || mirrorcraft_has_seo_plugin()) {
    return;
  }

  $title = wp_get_document_title();
  $description = mirrorcraft_get_seo_description();
  $canonical = is_404() ? '' : mirrorcraft_get_canonical_url();
  $image = mirrorcraft_get_meta_image_url();
  $fallback_icon = has_site_icon() ? '' : mirrorcraft_get_brand_logo_url();
  $site_name = get_bloginfo('name') ?: 'OJMIRROR';
  $og_type = is_singular('post') ? 'article' : 'website';

  if ($description !== '') {
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
  }

  echo '<meta name="theme-color" content="' . esc_attr(mirrorcraft_get_theme_color()) . '">' . "\n";

  if ($canonical !== '') {
    echo '<link rel="canonical" href="' . esc_url($canonical) . '">' . "\n";
  }

  if ($fallback_icon) {
    echo '<link rel="icon" href="' . esc_url($fallback_icon) . '" sizes="512x512" type="image/png">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url($fallback_icon) . '">' . "\n";
  }

  echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
  echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
  echo '<meta property="og:type" content="' . esc_attr($og_type) . '">' . "\n";

  if ($canonical !== '') {
    echo '<meta property="og:url" content="' . esc_url($canonical) . '">' . "\n";
  }

  if ($description !== '') {
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
  }

  echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
  echo '<meta name="twitter:card" content="' . esc_attr($image ? 'summary_large_image' : 'summary') . '">' . "\n";

  if ($image) {
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
  }

  if (is_singular('post')) {
    echo '<meta property="article:published_time" content="' . esc_attr(get_post_time(DATE_W3C)) . '">' . "\n";
    echo '<meta property="article:modified_time" content="' . esc_attr(get_post_modified_time(DATE_W3C)) . '">' . "\n";
  }
}
add_action('wp_head', 'mirrorcraft_output_seo_meta', 1);

function mirrorcraft_output_schema_graph() {
  if (is_admin() || is_feed() || mirrorcraft_has_seo_plugin()) {
    return;
  }

  $title = wp_get_document_title();
  $description = mirrorcraft_get_seo_description();
  $canonical = is_404() ? '' : mirrorcraft_get_canonical_url();
  $image = mirrorcraft_get_meta_image_url();
  $site_name = get_bloginfo('name') ?: 'OJMIRROR';
  $email = mirrorcraft_get_contact_email();
  $phone = mirrorcraft_get_contact_phone();

  $graph = array();
  $organization = array(
    '@type'       => 'Organization',
    '@id'         => home_url('/#organization'),
    'name'        => $site_name,
    'url'         => home_url('/'),
    'description' => $description,
    'email'       => $email,
  );

  if (!empty($phone)) {
    $organization['telephone'] = $phone;
  }

  if ($image) {
    $organization['logo'] = array(
      '@type' => 'ImageObject',
      'url'   => $image,
    );
  }

  $graph[] = $organization;

  $website = array(
    '@type'       => 'WebSite',
    '@id'         => home_url('/#website'),
    'url'         => home_url('/'),
    'name'        => $site_name,
    'description' => mirrorcraft_seo_trim_description(get_bloginfo('description') ?: $description),
    'publisher'   => array('@id' => home_url('/#organization')),
    'potentialAction' => array(
      '@type'       => 'SearchAction',
      'target'      => home_url('/?s={search_term_string}'),
      'query-input' => 'required name=search_term_string',
    ),
  );

  $graph[] = $website;

  if ($canonical !== '') {
    $webpage = array(
      '@type'      => 'WebPage',
      '@id'        => $canonical . '#webpage',
      'url'        => $canonical,
      'name'       => $title,
      'description'=> $description,
      'isPartOf'   => array('@id' => home_url('/#website')),
      'about'      => array('@id' => home_url('/#organization')),
    );

    if ($image) {
      $webpage['primaryImageOfPage'] = array(
        '@type' => 'ImageObject',
        'url'   => $image,
      );
    }

    $graph[] = $webpage;
  }

  if (is_front_page() || is_page_template('page-templates/page-faqs.php') || is_page('faq')) {
    $faq_items = mirrorcraft_get_faq_items();
    $faq_entities = array();

    foreach ($faq_items as $item) {
      $question = isset($item['question']) ? mirrorcraft_seo_clean_text($item['question']) : '';
      $answer = isset($item['answer']) ? mirrorcraft_seo_clean_text($item['answer']) : '';

      if ($question === '' || $answer === '') {
        continue;
      }

      $faq_entities[] = array(
        '@type'          => 'Question',
        'name'           => $question,
        'acceptedAnswer' => array(
          '@type' => 'Answer',
          'text'  => $answer,
        ),
      );
    }

    if (!empty($faq_entities)) {
      $graph[] = array(
        '@type'      => 'FAQPage',
        '@id'        => home_url('/#faq'),
        'url'        => home_url('/#faq'),
        'name'       => mirrorcraft_default_text('faq_title', __('Frequently Asked Questions', 'mirrorcraft')),
        'mainEntity' => $faq_entities,
        'isPartOf'   => array('@id' => home_url('/#website')),
      );
    }
  }

  $breadcrumb_items = mirrorcraft_get_breadcrumb_schema_items();

  if (!empty($breadcrumb_items)) {
    $graph[] = array(
      '@type'           => 'BreadcrumbList',
      '@id'             => trailingslashit(home_url('/')) . '#breadcrumb',
      'itemListElement' => $breadcrumb_items,
    );
  }

  if (empty($graph)) {
    return;
  }

  echo '<script type="application/ld+json">' . wp_json_encode(
    array(
      '@context' => 'https://schema.org',
      '@graph'   => $graph,
    ),
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
  ) . '</script>' . "\n";
}
add_action('wp_head', 'mirrorcraft_output_schema_graph', 2);

function mirrorcraft_optimize_image_attributes($attributes, $attachment, $size) {
  if (empty($attributes['decoding'])) {
    $attributes['decoding'] = 'async';
  }

  if (empty($attributes['loading'])) {
    $attributes['loading'] = 'lazy';
  }

  $classes = isset($attributes['class']) ? (string) $attributes['class'] : '';

  if (strpos($classes, 'custom-logo') !== false) {
    $attributes['loading'] = 'eager';
    $attributes['fetchpriority'] = 'high';
  }

  return $attributes;
}
add_filter('wp_get_attachment_image_attributes', 'mirrorcraft_optimize_image_attributes', 10, 3);
