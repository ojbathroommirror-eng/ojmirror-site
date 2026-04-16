<?php
$title = mirrorcraft_default_text('product_range_title', 'Popular Product Categories for Bathroom and Hospitality Projects');
$intro = mirrorcraft_default_text('product_range_intro', 'Our core categories are built around the products buyers request most often for residential, hospitality, and commercial bathroom spaces.');
$categories = mirrorcraft_get_rows(
  'product_categories',
  array(
    array('category_name' => 'LED Bathroom Mirrors', 'category_text' => 'Modern illuminated mirrors for residential, hotel, and premium bathroom applications.', 'category_link' => mirrorcraft_get_product_category_page_link('bathroom-mirrors')),
    array('category_name' => 'Lighted Medicine Cabinets', 'category_text' => 'Mirror cabinet solutions that combine lighting, storage, and clean contemporary styling.', 'category_link' => mirrorcraft_get_product_category_page_link('medicine-cabinets')),
    array('category_name' => 'Hollywood Mirrors', 'category_text' => 'Vanity mirrors designed for beauty, dressing, and retail-focused environments.', 'category_link' => mirrorcraft_get_product_category_page_link('makeup-mirrors')),
    array('category_name' => 'Wall Mounted Makeup Mirrors', 'category_text' => 'Space-saving makeup mirrors for hotels, apartments, and high-end bathrooms.', 'category_link' => mirrorcraft_get_product_category_page_link('makeup-mirrors')),
    array('category_name' => 'Decorative LED Mirrors', 'category_text' => 'Decorative framed mirror options for design-led interior projects.', 'category_link' => mirrorcraft_get_product_category_page_link('decorative-mirrors')),
    array('category_name' => 'Customized Mirror Projects', 'category_text' => 'Tailored OEM and ODM development for brands, wholesalers, and project buyers.', 'category_link' => mirrorcraft_get_product_category_page_link('custom-led-mirrors')),
  )
);
$category_badges = array(
  __('Hot Seller', 'mirrorcraft'),
  __('Project Ready', 'mirrorcraft'),
  __('Hotel Focused', 'mirrorcraft'),
  __('Vanity Category', 'mirrorcraft'),
  __('Premium Finish', 'mirrorcraft'),
  __('OEM / ODM', 'mirrorcraft'),
);
?>
<section id="product-categories" class="section section-alt">
  <div class="shell">
    <div class="section-header">
      <div>
        <p class="eyebrow"><?php esc_html_e('Our Product Range', 'mirrorcraft'); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($intro); ?></p>
      </div>
      <a class="button button-outline" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products')); ?>">
        <?php esc_html_e('View Product Page', 'mirrorcraft'); ?>
      </a>
    </div>
    <div class="card-grid three-up">
      <?php foreach ($categories as $index => $category) : ?>
        <article class="info-card product-card">
          <span class="card-kicker"><?php echo esc_html($category_badges[$index] ?? __('Product Line', 'mirrorcraft')); ?></span>
          <h3><?php echo esc_html($category['category_name'] ?? ''); ?></h3>
          <p><?php echo esc_html($category['category_text'] ?? ''); ?></p>
          <?php if (!empty($category['category_link'])) : ?>
            <p><a class="text-link" href="<?php echo esc_url($category['category_link']); ?>"><?php esc_html_e('Learn more', 'mirrorcraft'); ?></a></p>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
