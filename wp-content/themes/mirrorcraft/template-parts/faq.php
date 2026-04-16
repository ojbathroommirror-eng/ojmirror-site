<?php
$title = mirrorcraft_default_text('faq_title', 'Frequently Asked Questions');
$text  = mirrorcraft_default_text('faq_text', 'Common questions from architects, designers, purchasers, facilities teams, and project buyers about MOQ, samples, lead time, and certification.');
$faq_items = mirrorcraft_get_faq_items();
?>
<section id="faq" class="section section-alt">
  <div class="shell">
    <div class="section-header">
      <div>
        <p class="eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($text); ?></p>
      </div>
      <a class="button button-outline" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact')); ?>">
        <?php esc_html_e('Ask a Custom Question', 'mirrorcraft'); ?>
      </a>
    </div>
    <div class="faq-list">
      <?php foreach ($faq_items as $item) : ?>
        <details class="faq-item">
          <summary><?php echo esc_html($item['question'] ?? ''); ?></summary>
          <div class="faq-answer">
            <p><?php echo esc_html($item['answer'] ?? ''); ?></p>
          </div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>
