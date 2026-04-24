<?php
/*
Template Name: Products Page
*/
get_header();

$contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
$products_url = mirrorcraft_link_by_slug('products', '/products/');

$hero_image = mirrorcraft_theme_image_url('home-hero-banner-20260423c.jpg');

if (!$hero_image) {
  $hero_image = mirrorcraft_get_product_category_image_url('bathroom-mirror');
}

$cri_visual_image = mirrorcraft_theme_image_url('hero-makeup-model-large.jpg');

if (!$cri_visual_image) {
  $cri_visual_image = mirrorcraft_theme_image_url('hero-makeup-model.jpg');
}

if (!$cri_visual_image) {
  $cri_visual_image = mirrorcraft_get_product_category_image_url('makeup-mirror');
}

$cta_image = mirrorcraft_theme_image_url('hero-bathroom-led-scene-alt-hero.jpg');

if (!$cta_image) {
  $cta_image = $hero_image;
}

$products_page_icons = array(
  'rendering'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="7.2"/><path d="M12 4.8v14.4"/><path d="M4.8 12h14.4"/><path d="m7.2 7.2 9.6 9.6"/><path d="m16.8 7.2-9.6 9.6"/></svg>',
  'eye'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M2.8 12s3.4-5.7 9.2-5.7S21.2 12 21.2 12s-3.4 5.7-9.2 5.7S2.8 12 2.8 12Z"/><circle cx="12" cy="12" r="2.7"/></svg>',
  'dimmable'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4.2v2.1"/><path d="M6.4 6.4 7.9 7.9"/><path d="M4.2 12h2.1"/><path d="M17.6 6.4 16.1 7.9"/><path d="M12 19.8v-2.1"/><path d="M19.8 12h-2.1"/><path d="M8 15.4a4.2 4.2 0 1 0 8 0A4 4 0 0 0 12 8a4.6 4.6 0 0 0-4 7.4Z"/></svg>',
  'temperature'=> '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M10 6.5a2 2 0 1 1 4 0v6.1a4 4 0 1 1-4 0Z"/><path d="M12 10v5"/><path d="M12 18.8h.01"/></svg>',
  'anti-fog'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M6 5.5h12a1.5 1.5 0 0 1 1.5 1.5v8A1.5 1.5 0 0 1 18 16.5H6A1.5 1.5 0 0 1 4.5 15V7A1.5 1.5 0 0 1 6 5.5Z"/><path d="M7.5 9.5c1 .9 2 .9 3 0s2-.9 3 0 2 .9 3 0"/><path d="M7.5 13c1 .9 2 .9 3 0s2-.9 3 0 2 .9 3 0"/></svg>',
  'sensor'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12m-1.1 0a1.1 1.1 0 1 0 2.2 0 1.1 1.1 0 1 0-2.2 0"/><path d="M7.4 7.4a6.5 6.5 0 0 0 0 9.2"/><path d="M16.6 7.4a6.5 6.5 0 0 1 0 9.2"/><path d="M4.8 4.8a10.2 10.2 0 0 0 0 14.4"/><path d="M19.2 4.8a10.2 10.2 0 0 1 0 14.4"/></svg>',
);

$hero_features = array(
  array(
    'icon'  => 'rendering',
    'title' => __('RA >=95', 'mirrorcraft'),
    'note'  => __('True Color', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'eye',
    'title' => __('Flicker-Free', 'mirrorcraft'),
    'note'  => __('Eye Comfort', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'dimmable',
    'title' => __('Dimmable', 'mirrorcraft'),
    'note'  => __('10%-100%', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'temperature',
    'title' => __('CCT Adjustable', 'mirrorcraft'),
    'note'  => __('2700K-6500K', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'anti-fog',
    'title' => __('Anti-Fog', 'mirrorcraft'),
    'note'  => __('Clear Visibility', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'sensor',
    'title' => __('Smart Control', 'mirrorcraft'),
    'note'  => __('Touch / Sensor', 'mirrorcraft'),
  ),
);

$filter_groups = array(
  'category' => array(
    'title' => __('By Category', 'mirrorcraft'),
    'items' => array(
      array('slug' => 'bathroom-mirrors', 'label' => __('Bathroom Mirrors', 'mirrorcraft'), 'count' => 56),
      array('slug' => 'medicine-cabinets', 'label' => __('Mirror Cabinets', 'mirrorcraft'), 'count' => 28),
      array('slug' => 'makeup-mirrors', 'label' => __('Makeup Mirrors', 'mirrorcraft'), 'count' => 18),
      array('slug' => 'full-length-mirrors', 'label' => __('Full Length Mirrors', 'mirrorcraft'), 'count' => 12),
      array('slug' => 'smart-mirrors', 'label' => __('Smart Mirrors', 'mirrorcraft'), 'count' => 14),
    ),
  ),
  'shape' => array(
    'title' => __('By Shape', 'mirrorcraft'),
    'items' => array(
      array('slug' => 'round', 'label' => __('Round', 'mirrorcraft'), 'count' => 35),
      array('slug' => 'rectangle', 'label' => __('Rectangle', 'mirrorcraft'), 'count' => 45),
      array('slug' => 'oval', 'label' => __('Oval', 'mirrorcraft'), 'count' => 18),
      array('slug' => 'arch', 'label' => __('Arch', 'mirrorcraft'), 'count' => 14),
      array('slug' => 'irregular', 'label' => __('Irregular', 'mirrorcraft'), 'count' => 16),
    ),
  ),
  'function' => array(
    'title' => __('By Function', 'mirrorcraft'),
    'items' => array(
      array('slug' => 'anti-fog', 'label' => __('Anti-fog', 'mirrorcraft'), 'count' => 86),
      array('slug' => 'dimmable', 'label' => __('Dimmable', 'mirrorcraft'), 'count' => 98),
      array('slug' => 'touch', 'label' => __('Touch Sensor', 'mirrorcraft'), 'count' => 52),
      array('slug' => 'sensor', 'label' => __('Motion Sensor', 'mirrorcraft'), 'count' => 28),
      array('slug' => 'bluetooth', 'label' => __('Bluetooth', 'mirrorcraft'), 'count' => 16),
      array('slug' => 'clock', 'label' => __('Clock', 'mirrorcraft'), 'count' => 22),
      array('slug' => 'magnifying', 'label' => __('Magnifying', 'mirrorcraft'), 'count' => 18),
    ),
  ),
  'cri' => array(
    'title' => __('By CRI (Color Rendering Index)', 'mirrorcraft'),
    'items' => array(
      array('slug' => 'cri80', 'label' => __('CRI 80+', 'mirrorcraft'), 'count' => 20),
      array('slug' => 'cri90', 'label' => __('CRI 90+', 'mirrorcraft'), 'count' => 35),
      array('slug' => 'cri95', 'label' => __('CRI 95+', 'mirrorcraft'), 'count' => 128),
    ),
  ),
  'size' => array(
    'title' => __('By Size (mm)', 'mirrorcraft'),
    'items' => array(
      array('slug' => '600-below', 'label' => __('600 and below', 'mirrorcraft'), 'count' => 24),
      array('slug' => '600-800', 'label' => __('600 - 800', 'mirrorcraft'), 'count' => 45),
      array('slug' => '800-1000', 'label' => __('800 - 1000', 'mirrorcraft'), 'count' => 36),
      array('slug' => '1000-1200', 'label' => __('1000 - 1200', 'mirrorcraft'), 'count' => 18),
      array('slug' => '1200-up', 'label' => __('1200 and above', 'mirrorcraft'), 'count' => 15),
    ),
  ),
);

$catalog_products = array(
  array(
    'title'        => __('Round Backlit LED Mirror', 'mirrorcraft'),
    'image'        => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
    'link'         => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
    'category'     => 'bathroom-mirrors',
    'shape'        => 'round',
    'function'     => array('anti-fog', 'dimmable'),
    'cri'          => 'cri95',
    'size_filters' => array('600-below', '600-800', '800-1000'),
    'size_label'   => __('600 / 800 / 1000mm', 'mirrorcraft'),
    'size_rank'    => 800,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
  ),
  array(
    'title'        => __('Rectangular LED Mirror', 'mirrorcraft'),
    'image'        => mirrorcraft_theme_image_url('home-hero-banner-20260422.png'),
    'link'         => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
    'category'     => 'bathroom-mirrors',
    'shape'        => 'rectangle',
    'function'     => array('anti-fog', 'dimmable'),
    'cri'          => 'cri95',
    'size_filters' => array('600-below', '800-1000', '1000-1200'),
    'size_label'   => __('600x800 / 800x1000mm', 'mirrorcraft'),
    'size_rank'    => 900,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
  ),
  array(
    'title'        => __('Oval LED Mirror', 'mirrorcraft'),
    'image'        => mirrorcraft_theme_image_url('home-hero-banner-20260423c.jpg'),
    'link'         => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
    'category'     => 'bathroom-mirrors',
    'shape'        => 'oval',
    'function'     => array('dimmable'),
    'cri'          => 'cri95',
    'size_filters' => array('600-below', '800-1000', '1000-1200'),
    'size_label'   => __('500x800 / 600x1000mm', 'mirrorcraft'),
    'size_rank'    => 850,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
  ),
  array(
    'title'        => __('Arch LED Mirror', 'mirrorcraft'),
    'image'        => mirrorcraft_theme_image_url('residential-led-bathroom-mirror.png'),
    'link'         => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
    'category'     => 'bathroom-mirrors',
    'shape'        => 'arch',
    'function'     => array('anti-fog'),
    'cri'          => 'cri95',
    'size_filters' => array('600-below', '800-1000'),
    'size_label'   => __('600x800 / 800x1200mm', 'mirrorcraft'),
    'size_rank'    => 900,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
  ),
  array(
    'title'        => __('Irregular LED Mirror', 'mirrorcraft'),
    'image'        => mirrorcraft_theme_image_url('custom-mirrors-reference-20260422.png'),
    'link'         => mirrorcraft_get_product_category_page_link('custom-mirrors'),
    'category'     => 'full-length-mirrors',
    'shape'        => 'irregular',
    'function'     => array('anti-fog', 'dimmable'),
    'cri'          => 'cri95',
    'size_filters' => array('1000-1200', '1200-up'),
    'size_label'   => __('Custom Size', 'mirrorcraft'),
    'size_rank'    => 1200,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
  ),
  array(
    'title'        => __('LED Mirror Cabinet', 'mirrorcraft'),
    'image'        => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
    'link'         => mirrorcraft_get_product_category_page_link('medicine-cabinets'),
    'category'     => 'medicine-cabinets',
    'shape'        => 'rectangle',
    'function'     => array('anti-fog', 'dimmable', 'touch'),
    'cri'          => 'cri95',
    'size_filters' => array('600-below', '600-800', '800-1000'),
    'size_label'   => __('600x700 / 800x800mm', 'mirrorcraft'),
    'size_rank'    => 750,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('Touch', 'mirrorcraft')),
  ),
  array(
    'title'        => __('Makeup LED Mirror', 'mirrorcraft'),
    'image'        => mirrorcraft_get_product_category_image_url('makeup-mirror'),
    'link'         => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
    'category'     => 'makeup-mirrors',
    'shape'        => 'round',
    'function'     => array('dimmable', 'touch', 'magnifying'),
    'cri'          => 'cri95',
    'size_filters' => array('600-below'),
    'size_label'   => __('600 / 800mm', 'mirrorcraft'),
    'size_rank'    => 600,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('Touch', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
  ),
  array(
    'title'        => __('Smart LED Mirror', 'mirrorcraft'),
    'image'        => mirrorcraft_theme_image_url('hero-bathroom-led-scene-alt.jpg'),
    'link'         => mirrorcraft_get_product_category_page_link('smart-mirrors'),
    'category'     => 'smart-mirrors',
    'shape'        => 'rectangle',
    'function'     => array('anti-fog', 'bluetooth', 'clock', 'touch'),
    'cri'          => 'cri95',
    'size_filters' => array('600-below', '800-1000', '1000-1200'),
    'size_label'   => __('600x800 / 800x1200mm', 'mirrorcraft'),
    'size_rank'    => 900,
    'badge'        => __('RA 95', 'mirrorcraft'),
    'chips'        => array(__('RA 95', 'mirrorcraft'), __('Anti-fog', 'mirrorcraft'), __('Bluetooth', 'mirrorcraft'), __('Clock', 'mirrorcraft')),
  ),
);

$product_routes = array(
  array(
    'title' => __('Bathroom Mirrors', 'mirrorcraft'),
    'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
    'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
  ),
  array(
    'title' => __('Mirror Cabinets', 'mirrorcraft'),
    'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
    'link'  => mirrorcraft_get_product_category_page_link('medicine-cabinets'),
  ),
  array(
    'title' => __('Makeup Mirrors', 'mirrorcraft'),
    'image' => mirrorcraft_get_product_category_image_url('makeup-mirror'),
    'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
  ),
  array(
    'title' => __('Full Length Mirrors', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('retail-store-fitting-mirror.png'),
    'link'  => mirrorcraft_get_product_category_page_link('full-length-mirrors'),
  ),
  array(
    'title' => __('Smart Mirrors', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('hero-bathroom-led-scene-alt.jpg'),
    'link'  => mirrorcraft_get_product_category_page_link('smart-mirrors'),
  ),
  array(
    'title' => __('Custom Mirrors', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('custom-mirrors-reference-20260422.png'),
    'link'  => mirrorcraft_get_product_category_page_link('custom-mirrors'),
  ),
);

$cri_points = array(
  __('Shows true skin tones and object colors', 'mirrorcraft'),
  __('Ideal for makeup, grooming, and skincare use', 'mirrorcraft'),
  __('Essential for hotels, salons, and premium projects', 'mirrorcraft'),
  __('Higher lighting quality standard for B2B specifications', 'mirrorcraft'),
);

$customization_items = array(
  array('abbr' => __('Sh', 'mirrorcraft'), 'title' => __('Shape Customization', 'mirrorcraft')),
  array('abbr' => __('Sz', 'mirrorcraft'), 'title' => __('Size Customization', 'mirrorcraft')),
  array('abbr' => __('Fr', 'mirrorcraft'), 'title' => __('Frame Options', 'mirrorcraft')),
  array('abbr' => __('Lt', 'mirrorcraft'), 'title' => __('Lighting Options', 'mirrorcraft')),
  array('abbr' => __('Sm', 'mirrorcraft'), 'title' => __('Smart Functions', 'mirrorcraft')),
  array('abbr' => __('Pk', 'mirrorcraft'), 'title' => __('Packaging Customization', 'mirrorcraft')),
  array('abbr' => __('Lo', 'mirrorcraft'), 'title' => __('Logo / Branding Service', 'mirrorcraft')),
);

$industry_cards = array(
  array(
    'title' => __('Hospitality', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('hospitality-led-mirror-project.png'),
    'link'  => mirrorcraft_get_application_section_page_link('hospitality'),
  ),
  array(
    'title' => __('Residential', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('residential-led-bathroom-mirror.png'),
    'link'  => mirrorcraft_get_application_section_page_link('residential'),
  ),
  array(
    'title' => __('Commercial', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('commercial-washroom-led-mirror.png'),
    'link'  => mirrorcraft_get_application_section_page_link('commercial'),
  ),
  array(
    'title' => __('Beauty Salon', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('beauty-salon-led-mirror.png'),
    'link'  => mirrorcraft_get_application_section_page_link('salon'),
  ),
  array(
    'title' => __('Healthcare', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('healthcare-hospital-mirror.png'),
    'link'  => mirrorcraft_get_application_section_page_link('healthcare'),
  ),
  array(
    'title' => __('Real Estate Projects', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_url('real-estate-bathroom-mirror.png'),
    'link'  => mirrorcraft_link_by_slug('applications', '/applications/'),
  ),
);

$trust_items = array(
  array('abbr' => '10+', 'title' => __('Years Experience', 'mirrorcraft')),
  array('abbr' => 'OEM', 'title' => __('OEM / ODM Support', 'mirrorcraft')),
  array('abbr' => 'PS', 'title' => __('Project Supply Experience', 'mirrorcraft')),
  array('abbr' => 'QC', 'title' => __('Strict QC Quality Control', 'mirrorcraft')),
  array('abbr' => 'EX', 'title' => __('Safe Packaging Export Standard', 'mirrorcraft')),
  array('abbr' => 'CE', 'title' => __('Certifications CE, ETL, RoHS, SAA', 'mirrorcraft')),
);

$results_labels = array(
  'single' => __('Showing %s curated model', 'mirrorcraft'),
  'plural' => __('Showing %s curated models', 'mirrorcraft'),
);
?>
<main id="site-main" class="site-main page-shell products-page" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="products-page-hero">
      <div class="shell">
        <article class="products-page-hero__frame">
          <div class="products-page-hero__copy">
            <p class="products-page__eyebrow"><?php esc_html_e('Professional LED Mirror Catalog', 'mirrorcraft'); ?></p>
            <h1 class="products-page-hero__title">
              <span><?php echo esc_html__('High', 'mirrorcraft'); ?> <em><?php echo esc_html__('CRI 95', 'mirrorcraft'); ?></em></span>
              <span><?php esc_html_e('LED Mirrors for', 'mirrorcraft'); ?></span>
              <span><?php esc_html_e('Professional Lighting', 'mirrorcraft'); ?></span>
            </h1>
            <p class="products-page-hero__lead"><?php esc_html_e('True color rendering for makeup, hospitality, and premium projects.', 'mirrorcraft'); ?></p>

            <div class="products-page-hero__features" aria-label="<?php esc_attr_e('Product highlights', 'mirrorcraft'); ?>">
              <?php foreach ($hero_features as $feature) : ?>
                <div class="products-page-hero__feature">
                  <span class="products-page-hero__feature-icon" aria-hidden="true">
                    <?php
                    if (!empty($products_page_icons[$feature['icon']])) {
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Static inline SVG icon markup controlled by the theme.
                      echo $products_page_icons[$feature['icon']];
                    }
                    ?>
                  </span>
                  <span class="products-page-hero__feature-text">
                    <strong><?php echo esc_html($feature['title']); ?></strong>
                    <small><?php echo esc_html($feature['note']); ?></small>
                  </span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="products-page-hero__visual">
            <?php if ($hero_image) : ?>
              <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('High CRI LED mirror scene in a bathroom setting', 'mirrorcraft'); ?>" width="1600" height="980" decoding="async" fetchpriority="high">
            <?php endif; ?>

            <div class="products-page-hero__badge" aria-hidden="true">
              <span class="products-page-hero__badge-label">RA</span>
              <span class="products-page-hero__badge-value">95</span>
              <span class="products-page-hero__badge-copy"><?php esc_html_e('HIGH COLOR RENDERING INDEX', 'mirrorcraft'); ?></span>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section class="products-page-catalog">
      <div class="shell products-page-catalog__shell" data-products-root>
        <div class="products-page-catalog__crumbs">
          <?php mirrorcraft_render_breadcrumbs(); ?>
        </div>

        <aside class="products-page-filters">
          <div class="products-page-panel products-page-filters__panel">
            <div class="products-page-filters__header">
              <p class="products-page-filters__label"><?php esc_html_e('Filter By', 'mirrorcraft'); ?></p>
              <button class="products-page-filters__clear" type="button" data-products-clear><?php esc_html_e('Clear All', 'mirrorcraft'); ?></button>
            </div>

            <form class="products-page-filters__form">
              <?php foreach ($filter_groups as $group_key => $group) : ?>
                <section class="products-page-filter-group">
                  <div class="products-page-filter-group__header">
                    <h2><?php echo esc_html($group['title']); ?></h2>
                    <span aria-hidden="true">&minus;</span>
                  </div>

                  <div class="products-page-filter-group__options">
                    <?php foreach ($group['items'] as $item) : ?>
                      <label class="products-page-filter-option">
                        <input type="checkbox" value="<?php echo esc_attr($item['slug']); ?>" data-filter-group="<?php echo esc_attr($group_key); ?>">
                        <span><?php echo esc_html($item['label']); ?></span>
                        <small>(<?php echo esc_html((string) $item['count']); ?>)</small>
                      </label>
                    <?php endforeach; ?>
                  </div>
                </section>
              <?php endforeach; ?>
            </form>
          </div>
        </aside>

        <div class="products-page-catalog__main">
          <div class="products-page-catalog__toolbar">
            <div>
              <h2><?php esc_html_e('All Products', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Professional LED mirrors with High CRI 95 and flexible B2B customization.', 'mirrorcraft'); ?></p>
            </div>

            <div class="products-page-catalog__toolbar-actions">
              <p class="products-page-catalog__results" data-products-results>
                <?php echo esc_html(sprintf(__('Showing %s curated models', 'mirrorcraft'), count($catalog_products))); ?>
              </p>

              <label class="products-page-sort">
                <span class="screen-reader-text"><?php esc_html_e('Sort products', 'mirrorcraft'); ?></span>
                <select data-products-sort>
                  <option value="featured"><?php esc_html_e('Default sorting', 'mirrorcraft'); ?></option>
                  <option value="name"><?php esc_html_e('Name A-Z', 'mirrorcraft'); ?></option>
                  <option value="size"><?php esc_html_e('Size Low to High', 'mirrorcraft'); ?></option>
                </select>
              </label>
            </div>
          </div>

          <div class="products-page-grid" data-products-grid>
            <?php foreach ($catalog_products as $index => $product) : ?>
              <?php
              $card_image = $product['image'] ?: mirrorcraft_get_product_category_image_url('bathroom-mirror');
              $card_link = !empty($product['link']) ? $product['link'] : $products_url;
              $inquiry_link = add_query_arg(array('product' => $product['title']), $contact_url);
              ?>
              <article
                class="products-page-card"
                data-product-card
                data-featured-order="<?php echo esc_attr((string) $index); ?>"
                data-title="<?php echo esc_attr(strtolower($product['title'])); ?>"
                data-size-rank="<?php echo esc_attr((string) $product['size_rank']); ?>"
                data-category="<?php echo esc_attr($product['category']); ?>"
                data-shape="<?php echo esc_attr($product['shape']); ?>"
                data-function="<?php echo esc_attr(implode(' ', $product['function'])); ?>"
                data-cri="<?php echo esc_attr($product['cri']); ?>"
                data-size="<?php echo esc_attr(implode(' ', $product['size_filters'])); ?>"
              >
                <a class="products-page-card__media" href="<?php echo esc_url($card_link); ?>">
                  <?php if ($card_image) : ?>
                    <img src="<?php echo esc_url($card_image); ?>" alt="<?php echo esc_attr($product['title']); ?>" width="900" height="900" loading="lazy" decoding="async">
                  <?php endif; ?>
                  <span class="products-page-card__badge"><?php echo esc_html($product['badge']); ?></span>
                </a>

                <div class="products-page-card__body">
                  <h3><a href="<?php echo esc_url($card_link); ?>"><?php echo esc_html($product['title']); ?></a></h3>

                  <div class="products-page-card__chips">
                    <?php foreach ($product['chips'] as $chip) : ?>
                      <span><?php echo esc_html($chip); ?></span>
                    <?php endforeach; ?>
                  </div>

                  <p class="products-page-card__size"><?php echo esc_html(sprintf(__('Size: %s', 'mirrorcraft'), $product['size_label'])); ?></p>

                  <div class="products-page-card__actions">
                    <a class="products-page-card__button" href="<?php echo esc_url($inquiry_link); ?>"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></a>
                    <button class="products-page-card__wishlist" type="button" aria-label="<?php echo esc_attr(sprintf(__('Save %s', 'mirrorcraft'), $product['title'])); ?>">
                      <span aria-hidden="true">&#9825;</span>
                    </button>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <div class="products-page-empty" data-products-empty hidden>
            <p><?php esc_html_e('No products matched your filters. Try clearing one or two filters.', 'mirrorcraft'); ?></p>
          </div>

          <nav class="products-page-pagination" aria-label="<?php esc_attr_e('Products pagination', 'mirrorcraft'); ?>" data-products-pagination>
            <span class="is-current">1</span>
            <a href="<?php echo esc_url($products_url); ?>">2</a>
            <a href="<?php echo esc_url($products_url); ?>">3</a>
            <a href="<?php echo esc_url($products_url); ?>">4</a>
            <span>&hellip;</span>
            <a href="<?php echo esc_url($products_url); ?>">11</a>
            <a class="products-page-pagination__next" href="<?php echo esc_url($products_url); ?>" aria-label="<?php esc_attr_e('Next page', 'mirrorcraft'); ?>">&rsaquo;</a>
          </nav>
        </div>
      </div>
    </section>

    <section class="products-page-cri">
      <div class="shell products-page-cri__shell">
        <article class="products-page-panel products-page-cri__intro">
          <h2><?php esc_html_e('Why CRI 95 Matters?', 'mirrorcraft'); ?></h2>
          <ul class="products-page-cri__list">
            <?php foreach ($cri_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>

        <div class="products-page-cri__comparison">
          <article class="products-page-panel products-page-cri__panel">
            <h3><?php esc_html_e('CRI 80+', 'mirrorcraft'); ?></h3>
            <p><?php esc_html_e('Colors look dull and unnatural.', 'mirrorcraft'); ?></p>
            <div class="products-page-cri__visual products-page-cri__visual--low">
              <?php if ($cri_visual_image) : ?>
                <img src="<?php echo esc_url($cri_visual_image); ?>" alt="<?php esc_attr_e('Low CRI color rendering example', 'mirrorcraft'); ?>" width="1200" height="760" loading="lazy" decoding="async">
              <?php endif; ?>
            </div>
          </article>

          <div class="products-page-cri__vs" aria-hidden="true">VS</div>

          <article class="products-page-panel products-page-cri__panel products-page-cri__panel--highlight">
            <h3><?php esc_html_e('CRI 95+', 'mirrorcraft'); ?></h3>
            <p><?php esc_html_e('Colors look vivid and true-to-life.', 'mirrorcraft'); ?></p>
            <div class="products-page-cri__visual products-page-cri__visual--high">
              <?php if ($cri_visual_image) : ?>
                <img src="<?php echo esc_url($cri_visual_image); ?>" alt="<?php esc_attr_e('High CRI color rendering example', 'mirrorcraft'); ?>" width="1200" height="760" loading="lazy" decoding="async">
              <?php endif; ?>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="products-page-routes">
      <div class="shell">
        <div class="products-page-routes__grid">
          <?php foreach ($product_routes as $route) : ?>
            <article class="products-page-route-card">
              <a class="products-page-route-card__media" href="<?php echo esc_url($route['link']); ?>">
                <?php if (!empty($route['image'])) : ?>
                  <img src="<?php echo esc_url($route['image']); ?>" alt="<?php echo esc_attr($route['title']); ?>" width="720" height="520" loading="lazy" decoding="async">
                <?php endif; ?>
              </a>
              <div class="products-page-route-card__body">
                <h3><a href="<?php echo esc_url($route['link']); ?>"><?php echo esc_html($route['title']); ?></a></h3>
                <a class="products-page-route-card__link" href="<?php echo esc_url($route['link']); ?>"><?php esc_html_e('View More', 'mirrorcraft'); ?></a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="products-page-solutions">
      <div class="shell">
        <div class="products-page-solutions__track">
          <article class="products-page-solutions__intro">
            <p class="products-page__eyebrow"><?php esc_html_e('Custom LED Mirror Solutions', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Flexible OEM / ODM services to match your project needs.', 'mirrorcraft'); ?></h2>
            <a class="products-page-inline-button" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Learn More', 'mirrorcraft'); ?></a>
          </article>

          <?php foreach ($customization_items as $item) : ?>
            <article class="products-page-solution-card">
              <span class="products-page-solution-card__icon"><?php echo esc_html($item['abbr']); ?></span>
              <h3><?php echo esc_html($item['title']); ?></h3>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="products-page-industries">
      <div class="shell">
        <div class="products-page-section-heading">
          <h2><?php esc_html_e('Widely Used In', 'mirrorcraft'); ?></h2>
        </div>

        <div class="products-page-industries__grid">
          <?php foreach ($industry_cards as $industry) : ?>
            <article class="products-page-industry-card">
              <a class="products-page-industry-card__media" href="<?php echo esc_url($industry['link']); ?>">
                <?php if (!empty($industry['image'])) : ?>
                  <img src="<?php echo esc_url($industry['image']); ?>" alt="<?php echo esc_attr($industry['title']); ?>" width="900" height="620" loading="lazy" decoding="async">
                <?php endif; ?>
              </a>
              <div class="products-page-industry-card__body">
                <h3><a href="<?php echo esc_url($industry['link']); ?>"><?php echo esc_html($industry['title']); ?></a></h3>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="products-page-trust">
      <div class="shell">
        <div class="products-page-trust__grid">
          <?php foreach ($trust_items as $item) : ?>
            <article class="products-page-trust__item">
              <span class="products-page-trust__icon"><?php echo esc_html($item['abbr']); ?></span>
              <p><?php echo esc_html($item['title']); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="products-page-cta">
      <div class="shell">
        <article class="products-page-cta__card">
          <div class="products-page-cta__media">
            <?php if ($cta_image) : ?>
              <img src="<?php echo esc_url($cta_image); ?>" alt="<?php esc_attr_e('LED mirror project support', 'mirrorcraft'); ?>" width="960" height="620" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>

          <div class="products-page-cta__content">
            <p class="products-page__eyebrow"><?php esc_html_e('Project Support', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Need High CRI Mirrors for Your Project?', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('Send us your size, function, quantity, and application. We will recommend suitable models or provide custom solutions for you.', 'mirrorcraft'); ?></p>

            <div class="products-page-cta__actions">
              <a class="products-page-cta__button products-page-cta__button--primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
              <a class="products-page-cta__button products-page-cta__button--ghost" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
            </div>

            <ul class="products-page-cta__proof">
              <li><?php esc_html_e('Quick Response', 'mirrorcraft'); ?></li>
              <li><?php esc_html_e('Professional Support', 'mirrorcraft'); ?></li>
              <li><?php esc_html_e('Best Solutions', 'mirrorcraft'); ?></li>
            </ul>
          </div>
        </article>
      </div>
    </section>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var root = document.querySelector('[data-products-root]');

        if (!root) {
          return;
        }

        var grid = root.querySelector('[data-products-grid]');
        var cards = Array.prototype.slice.call(root.querySelectorAll('[data-product-card]'));
        var inputs = Array.prototype.slice.call(root.querySelectorAll('[data-filter-group]'));
        var clearButton = root.querySelector('[data-products-clear]');
        var resultNode = root.querySelector('[data-products-results]');
        var emptyNode = root.querySelector('[data-products-empty]');
        var sortSelect = root.querySelector('[data-products-sort]');
        var pagination = root.querySelector('[data-products-pagination]');
        var labels = <?php echo wp_json_encode($results_labels); ?>;

        function getTokens(node, group) {
          var value = node.getAttribute('data-' + group) || '';
          return value.trim() ? value.trim().split(/\s+/) : [];
        }

        function getActiveFilters() {
          var groups = {};

          inputs.forEach(function (input) {
            if (!input.checked) {
              return;
            }

            var group = input.getAttribute('data-filter-group');

            if (!groups[group]) {
              groups[group] = [];
            }

            groups[group].push(input.value);
          });

          return groups;
        }

        function matchesFilters(card, groups) {
          return Object.keys(groups).every(function (group) {
            if (!groups[group] || !groups[group].length) {
              return true;
            }

            var tokens = getTokens(card, group);

            return groups[group].some(function (value) {
              return tokens.indexOf(value) !== -1;
            });
          });
        }

        function sortCards(list) {
          var mode = sortSelect ? sortSelect.value : 'featured';

          return list.slice().sort(function (first, second) {
            if (mode === 'name') {
              return first.getAttribute('data-title').localeCompare(second.getAttribute('data-title'));
            }

            if (mode === 'size') {
              return Number(first.getAttribute('data-size-rank')) - Number(second.getAttribute('data-size-rank'));
            }

            return Number(first.getAttribute('data-featured-order')) - Number(second.getAttribute('data-featured-order'));
          });
        }

        function updateResults(count) {
          if (!resultNode) {
            return;
          }

          var label = count === 1 ? labels.single : labels.plural;
          resultNode.textContent = label.replace('%s', count);
        }

        function applyFilters() {
          var activeFilters = getActiveFilters();
          var visible = cards.filter(function (card) {
            var isVisible = matchesFilters(card, activeFilters);
            card.hidden = !isVisible;
            return isVisible;
          });

          sortCards(visible).forEach(function (card) {
            grid.appendChild(card);
          });

          updateResults(visible.length);

          if (emptyNode) {
            emptyNode.hidden = visible.length !== 0;
          }

          if (pagination) {
            pagination.hidden = visible.length !== cards.length;
          }
        }

        inputs.forEach(function (input) {
          input.addEventListener('change', applyFilters);
        });

        if (sortSelect) {
          sortSelect.addEventListener('change', applyFilters);
        }

        if (clearButton) {
          clearButton.addEventListener('click', function () {
            inputs.forEach(function (input) {
              input.checked = false;
            });

            if (sortSelect) {
              sortSelect.value = 'featured';
            }

            applyFilters();
          });
        }

        applyFilters();
      });
    </script>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
