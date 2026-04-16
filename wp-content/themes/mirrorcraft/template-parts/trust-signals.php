<?php
$title = mirrorcraft_default_text('trust_signals_title', 'What Project Teams Need Confirmed Before Specifying');
$text  = mirrorcraft_default_text('trust_signals_text', 'We support the specification clarity, sample coordination, quality checks, and delivery planning that serious B2B buyers expect.');
$signals = mirrorcraft_get_rows(
  'trust_signal_items',
  array(
    array(
      'item_title' => __('Specification Support', 'mirrorcraft'),
      'item_text'  => __('Guidance on dimensions, cabinet layout, lighting functions, finishes, and project-fit product selection.', 'mirrorcraft'),
    ),
    array(
      'item_title' => __('Sample & MOQ Review', 'mirrorcraft'),
      'item_text'  => __('Efficient sample review and MOQ discussion before large-scale procurement or installation planning begins.', 'mirrorcraft'),
    ),
    array(
      'item_title' => __('Quality & Certification', 'mirrorcraft'),
      'item_text'  => __('Inspection-focused production workflows plus practical certification discussion for the target application and destination requirement.', 'mirrorcraft'),
    ),
    array(
      'item_title' => __('Project Delivery', 'mirrorcraft'),
      'item_text'  => __('Clear communication on lead time, packing, export handling, and shipment planning for project-driven orders.', 'mirrorcraft'),
    ),
  )
);
?>
<section id="trust-signals" class="section">
  <div class="shell">
    <div class="section-header">
      <div>
        <p class="eyebrow"><?php esc_html_e('Trust & Delivery', 'mirrorcraft'); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($text); ?></p>
      </div>
      <a class="button button-outline" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact')); ?>">
        <?php esc_html_e('Send Project Brief', 'mirrorcraft'); ?>
      </a>
    </div>
    <div class="card-grid four-up">
      <?php foreach ($signals as $signal) : ?>
        <article class="info-card support-card">
          <span class="card-kicker"><?php esc_html_e('Project Support', 'mirrorcraft'); ?></span>
          <h3><?php echo esc_html($signal['item_title'] ?? ''); ?></h3>
          <p><?php echo esc_html($signal['item_text'] ?? ''); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
