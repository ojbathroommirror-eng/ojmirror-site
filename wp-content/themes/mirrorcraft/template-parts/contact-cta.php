<?php
$contact_form_state = mirrorcraft_get_contact_form_state('page');
$eyebrow = mirrorcraft_default_text('contact_cta_eyebrow', 'Quick Inquiry Form');
$title = mirrorcraft_default_text('contact_cta_title', 'Ready to Discuss Your Project?');
$text  = mirrorcraft_default_text('contact_cta_text', 'Share your target product category, quantity, application, and customization needs. We will help you move from project brief to quotation more efficiently.');
$button_label = mirrorcraft_default_text('contact_cta_button_text', 'Send Inquiry');
$form_eyebrow = mirrorcraft_default_text('contact_cta_form_eyebrow', $eyebrow);
$form_text = mirrorcraft_default_text('contact_cta_form_text', 'Fill in the form and our team will reply with product suggestions, specification advice, sample planning, or a quotation.');
$inquiry_points = mirrorcraft_get_text_items_from_rows(
  mirrorcraft_get_rows(
    'contact_cta_points',
    array(
      array('item_text' => __('Product category or reference style', 'mirrorcraft')),
      array('item_text' => __('Dimensions, lighting, cabinet, or smart feature requirements', 'mirrorcraft')),
      array('item_text' => __('Estimated quantity and target application', 'mirrorcraft')),
      array('item_text' => __('Drawings, packaging, or sampling expectations', 'mirrorcraft')),
    )
  )
);
?>
<section id="contact-cta" class="section contact-band">
  <div class="shell split-grid align-center contact-cta-shell">
    <div class="contact-cta-copy">
      <p class="eyebrow"><?php echo esc_html($eyebrow); ?></p>
      <h2><?php echo esc_html($title); ?></h2>
      <p class="section-copy"><?php echo esc_html($text); ?></p>
      <ul class="feature-list inquiry-list">
        <?php foreach ($inquiry_points as $point) : ?>
          <li><?php echo esc_html($point); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <article id="contact-form" class="hero-card contact-panel-card contact-panel-form-card">
      <div class="contact-form-heading contact-panel-form-heading">
        <p class="eyebrow"><?php echo esc_html($form_eyebrow); ?></p>
        <p class="section-copy"><?php echo esc_html($form_text); ?></p>
      </div>

      <?php if (!empty($contact_form_state['message'])) : ?>
        <div class="contact-form-alert contact-form-alert-<?php echo esc_attr($contact_form_state['status'] ?: 'info'); ?>" role="status" aria-live="polite">
          <?php echo esc_html($contact_form_state['message']); ?>
        </div>
      <?php endif; ?>

      <form class="contact-form contact-form-compact" data-contact-form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="mirrorcraft_submit_inquiry">
        <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url('/')); ?>">
        <?php wp_nonce_field('mirrorcraft_submit_inquiry', 'mirrorcraft_inquiry_nonce'); ?>

        <div class="contact-form-honeypot" aria-hidden="true">
          <label for="contact-cta-website"><?php esc_html_e('Website', 'mirrorcraft'); ?></label>
          <input id="contact-cta-website" type="text" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="contact-form-grid contact-form-grid-compact">
          <?php
          $name_error = mirrorcraft_contact_form_error($contact_form_state, 'name');
          $email_error = mirrorcraft_contact_form_error($contact_form_state, 'email');
          $message_error = mirrorcraft_contact_form_error($contact_form_state, 'message');
          ?>
          <div class="contact-form-group">
            <label for="contact-cta-name"><?php esc_html_e('Name', 'mirrorcraft'); ?> <span class="field-required">*</span></label>
            <input
              id="contact-cta-name"
              class="contact-form-input<?php echo $name_error ? ' is-error' : ''; ?>"
              type="text"
              name="contact_name"
              value="<?php echo esc_attr(mirrorcraft_contact_form_value($contact_form_state, 'name')); ?>"
              autocomplete="name"
              required
              aria-required="true"
              aria-invalid="<?php echo $name_error ? 'true' : 'false'; ?>"
              <?php if ($name_error) : ?>aria-describedby="contact-cta-name-error"<?php endif; ?>
            >
            <?php if ($name_error) : ?>
              <p id="contact-cta-name-error" class="contact-form-error"><?php echo esc_html($name_error); ?></p>
            <?php endif; ?>
          </div>

          <div class="contact-form-group">
            <label for="contact-cta-email"><?php esc_html_e('Email', 'mirrorcraft'); ?> <span class="field-required">*</span></label>
            <input
              id="contact-cta-email"
              class="contact-form-input<?php echo $email_error ? ' is-error' : ''; ?>"
              type="email"
              name="contact_email"
              value="<?php echo esc_attr(mirrorcraft_contact_form_value($contact_form_state, 'email')); ?>"
              autocomplete="email"
              required
              aria-required="true"
              aria-invalid="<?php echo $email_error ? 'true' : 'false'; ?>"
              <?php if ($email_error) : ?>aria-describedby="contact-cta-email-error"<?php endif; ?>
            >
            <?php if ($email_error) : ?>
              <p id="contact-cta-email-error" class="contact-form-error"><?php echo esc_html($email_error); ?></p>
            <?php endif; ?>
          </div>

          <div class="contact-form-group">
            <label for="contact-cta-company"><?php esc_html_e('Company', 'mirrorcraft'); ?></label>
            <input
              id="contact-cta-company"
              class="contact-form-input"
              type="text"
              name="contact_company"
              value="<?php echo esc_attr(mirrorcraft_contact_form_value($contact_form_state, 'company')); ?>"
              autocomplete="organization"
            >
          </div>

          <div class="contact-form-group contact-form-group-full">
            <label for="contact-cta-message"><?php esc_html_e('Message', 'mirrorcraft'); ?> <span class="field-required">*</span></label>
            <textarea
              id="contact-cta-message"
              class="contact-form-textarea<?php echo $message_error ? ' is-error' : ''; ?>"
              name="contact_message"
              rows="6"
              required
              aria-required="true"
              aria-invalid="<?php echo $message_error ? 'true' : 'false'; ?>"
              <?php if ($message_error) : ?>aria-describedby="contact-cta-message-error"<?php endif; ?>
            ><?php echo esc_textarea(mirrorcraft_contact_form_value($contact_form_state, 'message')); ?></textarea>
            <?php if ($message_error) : ?>
              <p id="contact-cta-message-error" class="contact-form-error"><?php echo esc_html($message_error); ?></p>
            <?php endif; ?>
          </div>
        </div>

        <div class="contact-form-actions">
          <button class="button button-primary contact-form-submit" type="submit">
            <span data-submit-label data-submitting-label="<?php esc_attr_e('Sending...', 'mirrorcraft'); ?>"><?php echo esc_html($button_label); ?></span>
          </button>
        </div>
      </form>
    </article>
  </div>
</section>
