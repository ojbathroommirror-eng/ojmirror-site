<?php
$eyebrow = mirrorcraft_default_text('testimonials_eyebrow', 'Testimonials');
$title = mirrorcraft_default_text('testimonials_title', 'What Buyers Value Most');
$text = mirrorcraft_default_text('testimonials_text', 'The best feedback usually centers on response speed, practical customization, and mirror programs that are easy to specify and deliver.');
$quotes = mirrorcraft_get_rows(
  'testimonials',
  array(
    array('quote_text' => 'Their team provided strong support from product development to shipment, especially on specification details.', 'client_name' => __('Project Buyer', 'mirrorcraft')),
    array('quote_text' => 'We needed a clearer mirror program for a multifamily rollout, and they responded with practical customization options.', 'client_name' => __('Multifamily Developer', 'mirrorcraft')),
    array('quote_text' => 'Reliable communication, sensible product suggestions, and a workflow that feels built for export projects.', 'client_name' => __('Purchasing Team', 'mirrorcraft')),
    array('quote_text' => 'Sampling moved quickly, communication stayed clear, and the custom mirror details were easier to finalize than expected.', 'client_name' => __('Design Partner', 'mirrorcraft')),
  )
);
$fallback_quotes = array(
  array('quote_text' => 'Their team provided strong support from product development to shipment, especially on specification details.', 'client_name' => __('Project Buyer', 'mirrorcraft')),
  array('quote_text' => 'We needed a clearer mirror program for a multifamily rollout, and they responded with practical customization options.', 'client_name' => __('Multifamily Developer', 'mirrorcraft')),
  array('quote_text' => 'Reliable communication, sensible product suggestions, and a workflow that feels built for export projects.', 'client_name' => __('Purchasing Team', 'mirrorcraft')),
  array('quote_text' => 'Sampling moved quickly, communication stayed clear, and the custom mirror details were easier to finalize than expected.', 'client_name' => __('Design Partner', 'mirrorcraft')),
);

if (count($quotes) < 4) {
  foreach ($fallback_quotes as $fallback_quote) {
    if (count($quotes) >= 4) {
      break;
    }

    $quotes[] = $fallback_quote;
  }
}
?>
<section class="section">
  <div class="shell">
    <div class="section-header">
      <div>
        <p class="eyebrow"><?php echo esc_html($eyebrow); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($text); ?></p>
      </div>
    </div>
    <div class="card-grid two-up testimonial-grid">
      <?php foreach ($quotes as $quote) : ?>
        <blockquote class="quote-card testimonial-card">
          <p><?php echo esc_html($quote['quote_text'] ?? ''); ?></p>
          <?php if (!empty($quote['client_name'])) : ?>
            <cite><?php echo esc_html($quote['client_name']); ?></cite>
          <?php endif; ?>
        </blockquote>
      <?php endforeach; ?>
    </div>
  </div>
</section>
