<?php
$title = mirrorcraft_default_text('why_choose_us_title', 'Why Project Teams Choose OJMIRROR');
$text  = mirrorcraft_default_text('why_choose_us_text', 'We combine modern product design, reliable manufacturing, and responsive project support to help customers specify, sample, and deliver mirror programs more efficiently.');
$items = mirrorcraft_get_rows(
  'why_choose_us_items',
  array(
    array('item_title' => 'Professional experience in LED mirror and cabinet manufacturing', 'item_text' => 'Focused development for modern bathroom mirrors, medicine cabinets, and vanity products.'),
    array('item_title' => 'OEM and ODM support for custom project requirements', 'item_text' => 'Flexible solutions for drawings, packaging, size, function, and style requirements.'),
    array('item_title' => 'Stable quality control and export-oriented workflow', 'item_text' => 'Production planning built around consistency, inspection, and shipment readiness.'),
    array('item_title' => 'Flexible options for dimensions, lighting, and smart functions', 'item_text' => 'Support for anti-fog, dimming, color temperature, cabinet structure, and more.'),
    array('item_title' => 'Suitable for hospitality, commercial, multifamily, healthcare, and senior living', 'item_text' => 'Product direction aligned with project environments that need practical lighting and dependable delivery.'),
    array('item_title' => 'Fast response for inquiry, sampling, and quotation support', 'item_text' => 'A practical workflow that helps buyers move from drawings and requirements to order planning more efficiently.'),
  )
);
?>
<section id="why-ojmirror" class="section">
  <div class="shell">
    <p class="eyebrow"><?php esc_html_e('Why Choose Us', 'mirrorcraft'); ?></p>
    <h2><?php echo esc_html($title); ?></h2>
    <p class="section-copy"><?php echo esc_html($text); ?></p>
    <div class="card-grid three-up">
      <?php foreach ($items as $item) : ?>
        <article class="info-card">
          <h3><?php echo esc_html($item['item_title'] ?? ''); ?></h3>
          <?php if (!empty($item['item_text'])) : ?>
            <p><?php echo esc_html($item['item_text']); ?></p>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
