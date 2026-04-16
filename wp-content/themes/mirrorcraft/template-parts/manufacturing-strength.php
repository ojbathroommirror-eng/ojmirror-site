<?php
$title = mirrorcraft_default_text('manufacturing_strength_title', 'Factory Capability That Supports Specification, Quality, and Delivery');
$text  = mirrorcraft_default_text('manufacturing_strength_text', 'Our production approach is built around drawing review, sample confirmation, quality consistency, practical lead-time planning, and dependable support for export orders.');
$strengths = mirrorcraft_get_rows(
  'manufacturing_strength_items',
  array(
    array('item_text' => 'Project-oriented drawing and sample review'),
    array('item_text' => 'Inspection-focused production workflow'),
    array('item_text' => 'Functional testing for mirrors and cabinets'),
    array('item_text' => 'Protective export packaging support'),
    array('item_text' => 'Lead-time planning tied to approved specifications'),
  )
);
$metrics = array(
  array('value' => __('Project Ready', 'mirrorcraft'), 'label' => __('Production focus', 'mirrorcraft')),
  array('value' => 'LED + Cabinet', 'label' => __('Category specialization', 'mirrorcraft')),
  array('value' => 'QC Driven', 'label' => __('Inspection mindset', 'mirrorcraft')),
  array('value' => 'Sample to Shipment', 'label' => __('Project coordination', 'mirrorcraft')),
);
?>
<section id="manufacturing-strength" class="section section-dark">
  <div class="shell">
    <p class="eyebrow"><?php esc_html_e('Manufacturing Strength', 'mirrorcraft'); ?></p>
    <h2><?php echo esc_html($title); ?></h2>
    <p class="section-copy"><?php echo esc_html($text); ?></p>
    <div class="stats-grid">
      <?php foreach ($metrics as $metric) : ?>
        <article class="stat-card stat-card-dark">
          <strong class="stat-value"><?php echo esc_html($metric['value']); ?></strong>
          <span class="stat-label"><?php echo esc_html($metric['label']); ?></span>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="card-grid five-up">
      <?php foreach ($strengths as $strength) : ?>
        <article class="info-card dark">
          <h3><?php echo esc_html($strength['item_text'] ?? ''); ?></h3>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
