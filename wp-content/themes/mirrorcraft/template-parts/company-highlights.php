<?php
$front_page_id = mirrorcraft_get_front_page_id();
$default_featured_categories = array(
  array(
    'title' => __('Bathroom Mirrors', 'mirrorcraft'),
    'text'  => __('Backlit, front-lit, and framed LED bathroom mirrors for hospitality guestrooms, multifamily bathrooms, and commercial washrooms.', 'mirrorcraft'),
    'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
    'image_key' => 'bathroom-mirror',
  ),
  array(
    'title' => __('Medicine Cabinets', 'mirrorcraft'),
    'text'  => __('Illuminated mirrored cabinets that combine storage, lighting, and wall-mounted layouts for guestrooms, units, and care environments.', 'mirrorcraft'),
    'link'  => mirrorcraft_get_product_category_page_link('medicine-cabinets'),
    'image_key' => 'medicine-cabinet',
  ),
  array(
    'title' => __('Decorative Mirrors', 'mirrorcraft'),
    'text'  => __('Decorative and custom mirror programs for amenity spaces, lobbies, and designer-led interiors.', 'mirrorcraft'),
    'link'  => mirrorcraft_get_product_category_page_link('decorative-mirrors'),
    'image_key' => 'custom-mirror',
  ),
  array(
    'title' => __('Makeup Mirrors', 'mirrorcraft'),
    'text'  => __('Vanity-oriented mirrors for suites, guestrooms, dressing areas, and care-focused resident spaces.', 'mirrorcraft'),
    'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
    'image_key' => 'makeup-mirror',
  ),
  array(
    'title' => __('Full Length Mirrors', 'mirrorcraft'),
    'text'  => __('Large-format mirrors for guestrooms, amenity dressing spaces, senior living wardrobes, and multifunction interiors.', 'mirrorcraft'),
    'link'  => mirrorcraft_get_product_category_page_link('full-length-mirrors'),
    'image_key' => 'makeup-mirror',
  ),
  array(
    'title' => __('Custom LED Mirrors', 'mirrorcraft'),
    'text'  => __('Specification-led mirror development for architects, designers, purchasers, and project teams with custom size and function requirements.', 'mirrorcraft'),
    'link'  => mirrorcraft_get_product_category_page_link('custom-led-mirrors'),
    'image_key' => 'custom-mirror',
  ),
);

$section_eyebrow = mirrorcraft_default_text('product_range_eyebrow', 'Product Programs', $front_page_id);
$section_title = mirrorcraft_default_text('product_range_title', 'Start with the mirror program that fits your project', $front_page_id);
$section_text = mirrorcraft_default_text('product_range_intro', 'Compare standard and custom mirror solutions for hospitality, commercial, multifamily, healthcare, and senior living environments.', $front_page_id);
$button_label = mirrorcraft_default_text('product_range_button_text', 'Explore Products', $front_page_id);
$configured_categories = mirrorcraft_get_rows('product_categories', array(), $front_page_id);
$featured_categories = $default_featured_categories;

if (!empty($configured_categories)) {
  $featured_categories = array();

  foreach ($configured_categories as $index => $category) {
    $default_category = $default_featured_categories[$index] ?? array();
    $title = trim((string) ($category['category_name'] ?? ''));
    $text = trim((string) ($category['category_text'] ?? ''));
    $link = trim((string) ($category['category_link'] ?? ''));

    $featured_categories[] = array(
      'title'     => $title !== '' ? $title : ($default_category['title'] ?? ''),
      'text'      => $text !== '' ? $text : ($default_category['text'] ?? ''),
      'link'      => $link !== '' ? $link : ($default_category['link'] ?? mirrorcraft_link_by_slug('products', '/products')),
      'image_key' => $default_category['image_key'] ?? 'bathroom-mirror',
    );
  }
}
?>
<section id="company-highlights" class="section section-tight">
  <div class="shell">
    <div class="section-header">
      <div>
        <p class="eyebrow"><?php echo esc_html($section_eyebrow); ?></p>
        <h2><?php echo esc_html($section_title); ?></h2>
        <p class="section-copy"><?php echo esc_html($section_text); ?></p>
      </div>
      <a class="button button-outline" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products')); ?>">
        <?php echo esc_html($button_label); ?>
      </a>
    </div>
    <div class="card-grid three-up category-showcase-grid">
      <?php foreach ($featured_categories as $category) : ?>
        <?php $image_url = mirrorcraft_get_product_category_image_url($category['image_key'] ?? ''); ?>
        <article class="info-card category-showcase-card">
          <?php if ($image_url) : ?>
            <div class="category-visual category-visual-image">
              <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category['title']); ?>" width="1200" height="1200" loading="lazy" decoding="async">
            </div>
          <?php endif; ?>
          <h3><?php echo esc_html($category['title']); ?></h3>
          <p><?php echo esc_html($category['text']); ?></p>
          <a class="text-link" href="<?php echo esc_url($category['link']); ?>"><?php esc_html_e('Learn More', 'mirrorcraft'); ?></a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
