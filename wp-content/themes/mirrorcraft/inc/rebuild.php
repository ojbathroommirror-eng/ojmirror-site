<?php

function mirrorcraft_theme_image_url($filename) {
  $relative_path = '/assets/images/' . ltrim((string) $filename, '/');
  $absolute_path = get_template_directory() . $relative_path;

  if (!file_exists($absolute_path)) {
    return '';
  }

  return get_template_directory_uri() . $relative_path;
}

function mirrorcraft_get_page_summary($post_id = 0, $fallback = '') {
  $post_id = $post_id ? (int) $post_id : (int) get_queried_object_id();

  if (!$post_id) {
    return $fallback;
  }

  $excerpt = trim((string) get_the_excerpt($post_id));

  if ($excerpt !== '') {
    return $excerpt;
  }

  $content = trim((string) get_post_field('post_content', $post_id));

  if ($content !== '') {
    return wp_trim_words(wp_strip_all_tags(strip_shortcodes($content)), 34, '...');
  }

  return $fallback;
}

function mirrorcraft_get_default_menu_items() {
  return array(
    array(
      'label' => __('Home', 'mirrorcraft'),
      'url'   => home_url('/'),
    ),
    array(
      'label' => __('About', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('about', '/about/'),
    ),
    array(
      'label' => __('Products', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('products', '/products/'),
    ),
    array(
      'label' => __('Applications', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('applications', '/applications/'),
    ),
    array(
      'label' => __('Projects', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('projects', '/projects/'),
    ),
    array(
      'label' => __('FAQs', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('faqs', '/faqs/'),
    ),
    array(
      'label' => __('Contact', 'mirrorcraft'),
      'url'   => mirrorcraft_link_by_slug('contact', '/contact/'),
    ),
  );
}

function mirrorcraft_rebuild_fallback_menu($args = array()) {
  $items = mirrorcraft_get_default_menu_items();

  echo '<ul class="nav-list">';

  foreach ($items as $item) {
    echo '<li><a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a></li>';
  }

  echo '</ul>';
}

function mirrorcraft_render_editor_content_section($args = array()) {
  $defaults = array(
    'section_class' => 'editor-content-section',
    'article_class' => 'editor-content-card',
  );

  mirrorcraft_render_visual_editor_section(wp_parse_args($args, $defaults));
}

function mirrorcraft_get_product_family_cards() {
  return array(
    array(
      'tag'   => __('Backlit / Front-lit / Framed', 'mirrorcraft'),
      'title' => __('LED Bathroom Mirrors', 'mirrorcraft'),
      'text'  => __('Core mirror programs for hospitality bathrooms, multifamily units, branded interiors, and premium residential projects.', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
      'link'  => mirrorcraft_link_by_slug('products', '/products/'),
    ),
    array(
      'tag'   => __('Storage + Illumination', 'mirrorcraft'),
      'title' => __('Lighted Medicine Cabinets', 'mirrorcraft'),
      'text'  => __('Cabinet routes that combine lighting, storage, and cleaner installation logic for projects that need more than a mirror alone.', 'mirrorcraft'),
      'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
      'link'  => mirrorcraft_link_by_slug('products', '/products/'),
    ),
    array(
      'tag'   => __('OEM / ODM / Private Label', 'mirrorcraft'),
      'title' => __('Custom Mirror Programs', 'mirrorcraft'),
      'text'  => __('Custom sizes, shapes, frames, features, and packaging direction for buyers building a differentiated product line.', 'mirrorcraft'),
      'image' => mirrorcraft_get_customization_reference_image_url(),
      'link'  => mirrorcraft_link_by_slug('contact', '/contact/'),
    ),
  );
}

function mirrorcraft_get_application_cards() {
  return array(
    array(
      'tag'   => __('Hospitality', 'mirrorcraft'),
      'title' => __('Hotel and guestroom programs', 'mirrorcraft'),
      'text'  => __('Built around repeatable room layouts, anti-fog expectations, and the visual consistency hospitality buyers ask for first.', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_url('hero-bathroom-led-scene-alt.jpg'),
    ),
    array(
      'tag'   => __('Multifamily', 'mirrorcraft'),
      'title' => __('Apartment and residential developments', 'mirrorcraft'),
      'text'  => __('Mirror solutions framed for unit repetition, dependable specification, and clean installation across multiple layouts.', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_url('hero-bathroom-led-scene.jpg'),
    ),
    array(
      'tag'   => __('Healthcare', 'mirrorcraft'),
      'title' => __('Care-oriented bathroom environments', 'mirrorcraft'),
      'text'  => __('Product routes organized around visibility, maintenance, comfort, and the practical needs of long-term use spaces.', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_url('product-medicine-cabinet.jpg'),
    ),
    array(
      'tag'   => __('Retail / Brand', 'mirrorcraft'),
      'title' => __('Private label and branded collections', 'mirrorcraft'),
      'text'  => __('The rebuilt site is ready for differentiated collections, curated feature mixes, and private label quote conversations.', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_url('hero-makeup-model.jpg'),
    ),
  );
}

function mirrorcraft_get_process_steps() {
  return array(
    array(
      'title' => __('Define the product route', 'mirrorcraft'),
      'text'  => __('Start with category, application, quantity range, and the feature set that actually matters to the buyer.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Lock the brief', 'mirrorcraft'),
      'text'  => __('Align size, style, finish, lighting behavior, cabinet structure, packaging, and any custom program requirements.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Confirm with samples', 'mirrorcraft'),
      'text'  => __('Move from concept to sample review before full production, especially when the project depends on repeat consistency.', 'mirrorcraft'),
    ),
    array(
      'title' => __('Produce and deliver', 'mirrorcraft'),
      'text'  => __('Carry the order through production planning, QC checkpoints, export packing, and shipment coordination.', 'mirrorcraft'),
    ),
  );
}

function mirrorcraft_render_faq_items($items, $id_prefix = 'faq') {
  if (empty($items) || !is_array($items)) {
    return;
  }
  ?>
  <div class="faq-list" data-faq-list>
    <?php foreach ($items as $index => $item) : ?>
      <?php
      $question = trim((string) ($item['question'] ?? ''));
      $answer = trim((string) ($item['answer'] ?? ''));
      $panel_id = sanitize_html_class($id_prefix . '-panel-' . ($index + 1));
      ?>
      <article class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr($panel_id); ?>" data-faq-trigger>
          <span><?php echo esc_html($question); ?></span>
          <span class="faq-symbol" aria-hidden="true">+</span>
        </button>
        <div id="<?php echo esc_attr($panel_id); ?>" class="faq-panel" hidden>
          <p><?php echo esc_html($answer); ?></p>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
  <?php
}

function mirrorcraft_render_post_card($post_id = 0) {
  $post_id = $post_id ? (int) $post_id : get_the_ID();
  $permalink = get_permalink($post_id);
  $title = get_the_title($post_id);
  $summary = mirrorcraft_get_page_summary($post_id, __('Open the full post for the detailed article.', 'mirrorcraft'));
  $thumbnail = get_the_post_thumbnail_url($post_id, 'large');
  ?>
  <article class="post-card">
    <?php if ($thumbnail) : ?>
      <a class="post-card-media" href="<?php echo esc_url($permalink); ?>">
        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy" decoding="async">
      </a>
    <?php endif; ?>
    <div class="post-card-body">
      <p class="post-card-meta"><?php echo esc_html(get_the_date('', $post_id)); ?></p>
      <h2><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h2>
      <p><?php echo esc_html($summary); ?></p>
      <a class="text-link" href="<?php echo esc_url($permalink); ?>"><?php esc_html_e('Read article', 'mirrorcraft'); ?></a>
    </div>
  </article>
  <?php
}

function mirrorcraft_render_contact_form($context = 'page') {
  $state = mirrorcraft_get_contact_form_state($context);
  $current_request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/';
  $current_request_url = esc_url_raw(remove_query_arg(array('inquiry_token'), home_url($current_request_uri)));
  $product_interest_options = mirrorcraft_get_inquiry_product_interest_options();
  $project_type_options = mirrorcraft_get_inquiry_project_type_options();
  ?>
  <div class="contact-form-shell" id="contact-form">
    <?php if (!empty($state['message'])) : ?>
      <div class="contact-alert contact-alert-<?php echo esc_attr($state['status'] ?: 'info'); ?>" role="status" aria-live="polite">
        <?php echo esc_html($state['message']); ?>
      </div>
    <?php endif; ?>

    <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" enctype="multipart/form-data">
      <input type="hidden" name="action" value="mirrorcraft_submit_inquiry">
      <input type="hidden" name="redirect_to" value="<?php echo esc_url($current_request_url); ?>">
      <input type="hidden" name="response_anchor" value="contact-form">
      <input type="hidden" name="contact_form_context" value="<?php echo esc_attr($context); ?>">
      <input type="hidden" name="website" value="">
      <?php wp_nonce_field('mirrorcraft_submit_inquiry', 'mirrorcraft_inquiry_nonce'); ?>

      <div class="form-grid">
        <label class="form-field">
          <span><?php esc_html_e('Name', 'mirrorcraft'); ?></span>
          <input type="text" name="contact_name" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'name')); ?>">
          <?php if (mirrorcraft_contact_form_error($state, 'name')) : ?>
            <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'name')); ?></small>
          <?php endif; ?>
        </label>

        <label class="form-field">
          <span><?php esc_html_e('Email', 'mirrorcraft'); ?></span>
          <input type="email" name="contact_email" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'email')); ?>">
          <?php if (mirrorcraft_contact_form_error($state, 'email')) : ?>
            <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'email')); ?></small>
          <?php endif; ?>
        </label>

        <label class="form-field">
          <span><?php esc_html_e('Company', 'mirrorcraft'); ?></span>
          <input type="text" name="contact_company" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'company')); ?>">
        </label>

        <label class="form-field">
          <span><?php esc_html_e('Phone', 'mirrorcraft'); ?></span>
          <input type="text" name="contact_phone" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'phone')); ?>">
        </label>

        <label class="form-field">
          <span><?php esc_html_e('Country', 'mirrorcraft'); ?></span>
          <input type="text" name="contact_country" value="<?php echo esc_attr(mirrorcraft_contact_form_value($state, 'country')); ?>">
        </label>

        <label class="form-field">
          <span><?php esc_html_e('Product interest', 'mirrorcraft'); ?></span>
          <select name="contact_product_interest">
            <option value=""><?php esc_html_e('Select one', 'mirrorcraft'); ?></option>
            <?php foreach ($product_interest_options as $option) : ?>
              <option value="<?php echo esc_attr($option); ?>" <?php selected(mirrorcraft_contact_form_value($state, 'product_interest'), $option); ?>><?php echo esc_html($option); ?></option>
            <?php endforeach; ?>
          </select>
        </label>

        <label class="form-field">
          <span><?php esc_html_e('Project type', 'mirrorcraft'); ?></span>
          <select name="contact_project_type">
            <option value=""><?php esc_html_e('Select one', 'mirrorcraft'); ?></option>
            <?php foreach ($project_type_options as $option) : ?>
              <option value="<?php echo esc_attr($option); ?>" <?php selected(mirrorcraft_contact_form_value($state, 'project_type'), $option); ?>><?php echo esc_html($option); ?></option>
            <?php endforeach; ?>
          </select>
        </label>
      </div>

      <label class="form-field form-field-full">
        <span><?php esc_html_e('Message', 'mirrorcraft'); ?></span>
        <textarea name="contact_message" rows="7"><?php echo esc_textarea(mirrorcraft_contact_form_value($state, 'message')); ?></textarea>
        <?php if (mirrorcraft_contact_form_error($state, 'message')) : ?>
          <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'message')); ?></small>
        <?php endif; ?>
      </label>

      <label class="form-field form-field-full">
        <span><?php esc_html_e('Attachment (optional)', 'mirrorcraft'); ?></span>
        <input type="file" name="contact_attachment" accept=".jpg,.jpeg,.png,.webp,.pdf,.doc,.docx,.xls,.xlsx">
        <small class="form-note"><?php esc_html_e('Accepted file types include images, PDF, Word, and Excel files up to 8MB.', 'mirrorcraft'); ?></small>
        <?php if (mirrorcraft_contact_form_error($state, 'attachment')) : ?>
          <small class="form-error"><?php echo esc_html(mirrorcraft_contact_form_error($state, 'attachment')); ?></small>
        <?php endif; ?>
      </label>

      <div class="form-actions">
        <button type="submit" class="button button-primary"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></button>
      </div>
    </form>
  </div>
  <?php
}
