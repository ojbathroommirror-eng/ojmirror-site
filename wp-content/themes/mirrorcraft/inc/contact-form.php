<?php

function mirrorcraft_get_inquiry_product_interest_options() {
  return array(
    __('LED Bathroom Mirror', 'mirrorcraft'),
    __('Lighted Medicine Cabinet', 'mirrorcraft'),
    __('Decorative Mirror', 'mirrorcraft'),
    __('Makeup / Vanity Mirror', 'mirrorcraft'),
    __('Custom Mirror Program', 'mirrorcraft'),
    __('Other', 'mirrorcraft'),
  );
}

function mirrorcraft_get_inquiry_project_type_options() {
  return array(
    __('Hospitality', 'mirrorcraft'),
    __('Commercial', 'mirrorcraft'),
    __('Multifamily', 'mirrorcraft'),
    __('Healthcare', 'mirrorcraft'),
    __('Senior Living', 'mirrorcraft'),
    __('OEM / ODM / Custom', 'mirrorcraft'),
  );
}

function mirrorcraft_register_inquiry_post_type() {
  register_post_type(
    'mirrorcraft_inquiry',
    array(
      'labels' => array(
        'name'               => __('Inquiries', 'mirrorcraft'),
        'singular_name'      => __('Inquiry', 'mirrorcraft'),
        'menu_name'          => __('Inquiries', 'mirrorcraft'),
        'name_admin_bar'     => __('Inquiry', 'mirrorcraft'),
        'add_new_item'       => __('Add Inquiry', 'mirrorcraft'),
        'edit_item'          => __('View Inquiry', 'mirrorcraft'),
        'new_item'           => __('New Inquiry', 'mirrorcraft'),
        'view_item'          => __('View Inquiry', 'mirrorcraft'),
        'search_items'       => __('Search Inquiries', 'mirrorcraft'),
        'not_found'          => __('No inquiries found.', 'mirrorcraft'),
        'not_found_in_trash' => __('No inquiries found in Trash.', 'mirrorcraft'),
      ),
      'public'             => false,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'menu_icon'          => 'dashicons-email-alt',
      'supports'           => array('title', 'editor'),
      'capability_type'    => 'post',
      'map_meta_cap'       => true,
      'rewrite'            => false,
      'query_var'          => false,
      'has_archive'        => false,
      'publicly_queryable' => false,
      'show_in_rest'       => false,
    )
  );
}
add_action('init', 'mirrorcraft_register_inquiry_post_type');

function mirrorcraft_store_inquiry_flash($data) {
  $token = strtolower(wp_generate_password(20, false, false));

  set_transient('mirrorcraft_inquiry_flash_' . $token, $data, 10 * MINUTE_IN_SECONDS);

  return $token;
}

function mirrorcraft_get_inquiry_flash() {
  static $flash_cache = null;
  static $flash_loaded = false;

  if ($flash_loaded) {
    return $flash_cache;
  }

  $flash_loaded = true;

  if (empty($_GET['inquiry_token'])) {
    return null;
  }

  $token = sanitize_key(wp_unslash($_GET['inquiry_token']));

  if ($token === '') {
    return null;
  }

  $flash = get_transient('mirrorcraft_inquiry_flash_' . $token);

  if ($flash) {
    delete_transient('mirrorcraft_inquiry_flash_' . $token);
  }

  $flash_cache = is_array($flash) ? $flash : null;

  return $flash_cache;
}

function mirrorcraft_get_contact_form_state($context = 'page') {
  $default_state = array(
    'context' => $context,
    'status'  => '',
    'message' => '',
    'errors'  => array(),
    'values'  => array(
      'name'             => '',
      'email'            => '',
      'phone'            => '',
      'company'          => '',
      'country'          => '',
      'product_interest' => '',
      'project_type'     => '',
      'message'          => '',
    ),
  );

  $flash = mirrorcraft_get_inquiry_flash();

  if (!is_array($flash)) {
    return $default_state;
  }

  $state = wp_parse_args($flash, $default_state);

  if (($state['context'] ?? 'page') !== $context) {
    return $default_state;
  }

  $state['errors'] = wp_parse_args(is_array($state['errors']) ? $state['errors'] : array(), $default_state['errors']);
  $state['values'] = wp_parse_args(is_array($state['values']) ? $state['values'] : array(), $default_state['values']);

  if ($state['message'] === '') {
    if ($state['status'] === 'success') {
      $state['message'] = __('Thank you. Your inquiry has been sent successfully. Our team will get back to you soon.', 'mirrorcraft');
    } elseif ($state['status'] === 'saved') {
      $state['message'] = __('Your inquiry was saved, but the email notification could not be delivered. Please follow up by email if the matter is urgent.', 'mirrorcraft');
    } elseif ($state['status'] === 'error') {
      $state['message'] = !empty($state['errors']['form'])
        ? $state['errors']['form']
        : __('Please correct the highlighted fields and try again.', 'mirrorcraft');
    }
  }

  return $state;
}

function mirrorcraft_contact_form_value($state, $field) {
  if (!is_array($state) || empty($state['values']) || !array_key_exists($field, $state['values'])) {
    return '';
  }

  return (string) $state['values'][$field];
}

function mirrorcraft_contact_form_error($state, $field) {
  if (!is_array($state) || empty($state['errors']) || !array_key_exists($field, $state['errors'])) {
    return '';
  }

  return (string) $state['errors'][$field];
}

function mirrorcraft_get_inquiry_allowed_mimes() {
  return array(
    'jpg|jpeg|jpe' => 'image/jpeg',
    'png'          => 'image/png',
    'webp'         => 'image/webp',
    'pdf'          => 'application/pdf',
    'doc'          => 'application/msword',
    'docx'         => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'xls'          => 'application/vnd.ms-excel',
    'xlsx'         => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
  );
}

function mirrorcraft_get_inquiry_recipients() {
  return array(mirrorcraft_get_contact_email());
}

function mirrorcraft_get_inquiry_redirect_url() {
  $fallback = mirrorcraft_link_by_slug('contact', '/contact');
  $posted_redirect = isset($_POST['redirect_to']) ? esc_url_raw(wp_unslash($_POST['redirect_to'])) : '';
  $referer  = wp_get_referer();

  if ($posted_redirect) {
    return wp_validate_redirect($posted_redirect, $fallback);
  }

  if (!$referer) {
    return $fallback;
  }

  $contact_path = wp_parse_url($fallback, PHP_URL_PATH);
  $referer_path = wp_parse_url($referer, PHP_URL_PATH);

  if ($contact_path && $referer_path && trailingslashit($contact_path) === trailingslashit($referer_path)) {
    return $referer;
  }

  return $fallback;
}

function mirrorcraft_get_inquiry_response_anchor() {
  $anchor = isset($_POST['response_anchor']) ? wp_unslash($_POST['response_anchor']) : 'contact-form';
  $anchor = ltrim((string) $anchor, '#');
  $anchor = preg_replace('/[^A-Za-z0-9_:-]/', '', $anchor);

  return $anchor ?: 'contact-form';
}

function mirrorcraft_redirect_inquiry_with_flash($payload, $anchor = '') {
  $token        = mirrorcraft_store_inquiry_flash($payload);
  $redirect_url = add_query_arg(
    array(
      'inquiry_token' => rawurlencode($token),
    ),
    mirrorcraft_get_inquiry_redirect_url()
  );

  if ($anchor === '') {
    $anchor = mirrorcraft_get_inquiry_response_anchor();
  }

  wp_safe_redirect($redirect_url . '#' . $anchor);
  exit;
}

function mirrorcraft_build_inquiry_email_body($values) {
  $lines = array(
    sprintf(__('Website: %s', 'mirrorcraft'), home_url('/')),
    sprintf(__('Inquiry Page: %s', 'mirrorcraft'), $values['source_url'] ?? __('Not recorded', 'mirrorcraft')),
    sprintf(__('Name: %s', 'mirrorcraft'), $values['name']),
    sprintf(__('Email: %s', 'mirrorcraft'), $values['email']),
    sprintf(__('Company: %s', 'mirrorcraft'), $values['company'] ?: __('Not provided', 'mirrorcraft')),
    sprintf(__('Country: %s', 'mirrorcraft'), $values['country'] ?: __('Not provided', 'mirrorcraft')),
    sprintf(__('Product Interest: %s', 'mirrorcraft'), $values['product_interest'] ?: __('Not provided', 'mirrorcraft')),
    sprintf(__('Project Type: %s', 'mirrorcraft'), $values['project_type'] ?: __('Not provided', 'mirrorcraft')),
    sprintf(__('Attachment: %s', 'mirrorcraft'), $values['attachment_url'] ?? __('Not provided', 'mirrorcraft')),
    '',
    __('Message:', 'mirrorcraft'),
    $values['message'],
  );

  return implode("\n", $lines);
}

function mirrorcraft_handle_inquiry_submission() {
  if ('POST' !== strtoupper($_SERVER['REQUEST_METHOD'] ?? '')) {
    wp_safe_redirect(mirrorcraft_get_inquiry_redirect_url());
    exit;
  }

  $nonce = isset($_POST['mirrorcraft_inquiry_nonce']) ? wp_unslash($_POST['mirrorcraft_inquiry_nonce']) : '';

  if ($nonce === '' && isset($_POST['mirrorcraft_contact_nonce'])) {
    $nonce = wp_unslash($_POST['mirrorcraft_contact_nonce']);
  }

  $nonce_is_valid = $nonce !== '' && (
    wp_verify_nonce($nonce, 'mirrorcraft_submit_inquiry')
    || wp_verify_nonce($nonce, 'mirrorcraft_contact_form_submit')
  );

  if (!$nonce_is_valid) {
    mirrorcraft_redirect_inquiry_with_flash(
      array(
        'context' => sanitize_key(wp_unslash($_POST['contact_form_context'] ?? 'page')) ?: 'page',
        'status' => 'error',
        'errors' => array(
          'form' => __('Security check failed. Please try again.', 'mirrorcraft'),
        ),
      )
    );
  }

  $website = isset($_POST['website']) ? wp_unslash($_POST['website']) : '';

  if ($website === '' && isset($_POST['contact_website'])) {
    $website = wp_unslash($_POST['contact_website']);
  }

  if (!empty($website)) {
    mirrorcraft_redirect_inquiry_with_flash(
      array(
        'context' => sanitize_key(wp_unslash($_POST['contact_form_context'] ?? 'page')) ?: 'page',
        'status' => 'success',
      )
    );
  }

  $form_context = sanitize_key(wp_unslash($_POST['contact_form_context'] ?? 'page'));
  $form_context = $form_context !== '' ? $form_context : 'page';

  $email_input = sanitize_text_field(wp_unslash($_POST['contact_email'] ?? ''));
  $email_address = sanitize_email($email_input);
  $source_url = esc_url_raw(mirrorcraft_get_inquiry_redirect_url());

  $values = array(
    'name'             => sanitize_text_field(wp_unslash($_POST['contact_name'] ?? '')),
    'email'            => $email_input,
    'phone'            => sanitize_text_field(wp_unslash($_POST['contact_phone'] ?? '')),
    'company'          => sanitize_text_field(wp_unslash($_POST['contact_company'] ?? '')),
    'country'          => sanitize_text_field(wp_unslash($_POST['contact_country'] ?? '')),
    'product_interest' => sanitize_text_field(wp_unslash($_POST['contact_product_interest'] ?? '')),
    'project_type'     => sanitize_text_field(wp_unslash($_POST['contact_project_type'] ?? '')),
    'message'          => sanitize_textarea_field(wp_unslash($_POST['contact_message'] ?? '')),
    'source_url'       => $source_url,
  );

  $allowed_product_interest = mirrorcraft_get_inquiry_product_interest_options();
  $allowed_project_types    = mirrorcraft_get_inquiry_project_type_options();

  if ($values['product_interest'] !== '' && !in_array($values['product_interest'], $allowed_product_interest, true)) {
    $values['product_interest'] = '';
  }

  if ($values['project_type'] !== '' && !in_array($values['project_type'], $allowed_project_types, true)) {
    $values['project_type'] = '';
  }

  $errors = array();

  if ($values['name'] === '') {
    $errors['name'] = __('Please enter your name.', 'mirrorcraft');
  }

  if ($values['email'] === '') {
    $errors['email'] = __('Please enter your email address.', 'mirrorcraft');
  } elseif (!is_email($email_address)) {
    $errors['email'] = __('Please enter a valid email address.', 'mirrorcraft');
  }

  if ($values['message'] === '') {
    $errors['message'] = __('Please enter your message.', 'mirrorcraft');
  }

  $attachment = array(
    'name' => '',
    'path' => '',
    'url'  => '',
  );

  if (
    empty($errors)
    && isset($_FILES['contact_attachment'])
    && is_array($_FILES['contact_attachment'])
    && !empty($_FILES['contact_attachment']['name'])
    && (int) $_FILES['contact_attachment']['error'] !== UPLOAD_ERR_NO_FILE
  ) {
    $uploaded_file = $_FILES['contact_attachment'];

    if ((int) $uploaded_file['error'] !== UPLOAD_ERR_OK) {
      $errors['attachment'] = __('The file could not be uploaded. Please try again.', 'mirrorcraft');
    } elseif ((int) $uploaded_file['size'] > 8 * MB_IN_BYTES) {
      $errors['attachment'] = __('Please upload a file smaller than 8MB.', 'mirrorcraft');
    } else {
      require_once ABSPATH . 'wp-admin/includes/file.php';

      $upload = wp_handle_upload(
        $uploaded_file,
        array(
          'test_form' => false,
          'mimes'     => mirrorcraft_get_inquiry_allowed_mimes(),
        )
      );

      if (!empty($upload['error'])) {
        $errors['attachment'] = $upload['error'];
      } else {
        $attachment['name'] = sanitize_file_name((string) $uploaded_file['name']);
        $attachment['path'] = $upload['file'];
        $attachment['url']  = esc_url_raw($upload['url']);
        $values['attachment_url'] = $attachment['url'];
      }
    }
  }

  if (!empty($errors)) {
    mirrorcraft_redirect_inquiry_with_flash(
      array(
        'context' => $form_context,
        'status' => 'error',
        'errors' => $errors,
        'values' => $values,
      )
    );
  }

  $post_id = wp_insert_post(
    array(
      'post_type'    => 'mirrorcraft_inquiry',
      'post_status'  => 'private',
      'post_title'   => sprintf('%s - %s', $values['name'], current_time('mysql')),
      'post_content' => $values['message'],
    ),
    true
  );

  if (!is_wp_error($post_id) && $post_id) {
    update_post_meta($post_id, '_mirrorcraft_inquiry_name', $values['name']);
    update_post_meta($post_id, '_mirrorcraft_inquiry_email', $email_address);
    update_post_meta($post_id, '_mirrorcraft_inquiry_phone', $values['phone']);
    update_post_meta($post_id, '_mirrorcraft_inquiry_company', $values['company']);
    update_post_meta($post_id, '_mirrorcraft_inquiry_country', $values['country']);
    update_post_meta($post_id, '_mirrorcraft_inquiry_product_interest', $values['product_interest']);
    update_post_meta($post_id, '_mirrorcraft_inquiry_project_type', $values['project_type']);
    update_post_meta($post_id, '_mirrorcraft_inquiry_source_url', $source_url);
    update_post_meta($post_id, '_mirrorcraft_inquiry_attachment_name', $attachment['name']);
    update_post_meta($post_id, '_mirrorcraft_inquiry_attachment_url', $attachment['url']);
  }

  $recipients = mirrorcraft_get_inquiry_recipients();
  $subject   = sprintf(__('[%1$s] New inquiry from %2$s', 'mirrorcraft'), get_bloginfo('name'), $values['name']);
  $headers   = array('Content-Type: text/plain; charset=UTF-8');

  if ($email_address !== '') {
    $headers[] = 'Reply-To: ' . $values['name'] . ' <' . $email_address . '>';
  }

  $mail_sent = wp_mail($recipients, $subject, mirrorcraft_build_inquiry_email_body($values), $headers, $attachment['path'] ? array($attachment['path']) : array());

  if (!is_wp_error($post_id) && $post_id) {
    update_post_meta($post_id, '_mirrorcraft_inquiry_mail_sent', $mail_sent ? '1' : '0');
  }

  if (is_wp_error($post_id) && !$mail_sent) {
    mirrorcraft_redirect_inquiry_with_flash(
      array(
        'context' => $form_context,
        'status' => 'error',
        'errors' => array(
          'form' => __('We could not submit your inquiry right now. Please try again in a moment.', 'mirrorcraft'),
        ),
        'values' => $values,
      )
    );
  }

  mirrorcraft_redirect_inquiry_with_flash(
    array(
      'context' => $form_context,
      'status' => $mail_sent ? 'success' : 'saved',
    )
  );
}
add_action('admin_post_nopriv_mirrorcraft_submit_inquiry', 'mirrorcraft_handle_inquiry_submission');
add_action('admin_post_mirrorcraft_submit_inquiry', 'mirrorcraft_handle_inquiry_submission');
add_action('admin_post_nopriv_mirrorcraft_submit_contact', 'mirrorcraft_handle_inquiry_submission');
add_action('admin_post_mirrorcraft_submit_contact', 'mirrorcraft_handle_inquiry_submission');

function mirrorcraft_inquiry_admin_columns($columns) {
  $columns['inquiry_email']   = __('Email', 'mirrorcraft');
  $columns['inquiry_company'] = __('Company', 'mirrorcraft');
  $columns['mail_status']     = __('Mail', 'mirrorcraft');

  return $columns;
}
add_filter('manage_mirrorcraft_inquiry_posts_columns', 'mirrorcraft_inquiry_admin_columns');

function mirrorcraft_render_inquiry_admin_columns($column, $post_id) {
  if ('inquiry_email' === $column) {
    echo esc_html(get_post_meta($post_id, '_mirrorcraft_inquiry_email', true));
  }

  if ('inquiry_company' === $column) {
    $company = get_post_meta($post_id, '_mirrorcraft_inquiry_company', true);
    echo esc_html($company ?: '—');
  }

  if ('mail_status' === $column) {
    $mail_sent = get_post_meta($post_id, '_mirrorcraft_inquiry_mail_sent', true);
    echo esc_html('1' === $mail_sent ? __('Sent', 'mirrorcraft') : __('Saved only', 'mirrorcraft'));
  }
}
add_action('manage_mirrorcraft_inquiry_posts_custom_column', 'mirrorcraft_render_inquiry_admin_columns', 10, 2);

function mirrorcraft_add_inquiry_meta_boxes() {
  add_meta_box(
    'mirrorcraft-inquiry-details',
    __('Inquiry Details', 'mirrorcraft'),
    'mirrorcraft_render_inquiry_meta_box',
    'mirrorcraft_inquiry',
    'side',
    'high'
  );
}
add_action('add_meta_boxes', 'mirrorcraft_add_inquiry_meta_boxes');

function mirrorcraft_render_inquiry_meta_box($post) {
  $name       = get_post_meta($post->ID, '_mirrorcraft_inquiry_name', true);
  $email      = get_post_meta($post->ID, '_mirrorcraft_inquiry_email', true);
  $phone      = get_post_meta($post->ID, '_mirrorcraft_inquiry_phone', true);
  $company    = get_post_meta($post->ID, '_mirrorcraft_inquiry_company', true);
  $country    = get_post_meta($post->ID, '_mirrorcraft_inquiry_country', true);
  $product_interest = get_post_meta($post->ID, '_mirrorcraft_inquiry_product_interest', true);
  $project_type = get_post_meta($post->ID, '_mirrorcraft_inquiry_project_type', true);
  $source_url = get_post_meta($post->ID, '_mirrorcraft_inquiry_source_url', true);
  $attachment_name = get_post_meta($post->ID, '_mirrorcraft_inquiry_attachment_name', true);
  $attachment_url  = get_post_meta($post->ID, '_mirrorcraft_inquiry_attachment_url', true);
  $mail_sent  = get_post_meta($post->ID, '_mirrorcraft_inquiry_mail_sent', true);
  ?>
  <div class="mirrorcraft-inquiry-meta">
    <p><strong><?php esc_html_e('Name', 'mirrorcraft'); ?>:</strong><br><?php echo esc_html($name ?: '—'); ?></p>
    <p><strong><?php esc_html_e('Email', 'mirrorcraft'); ?>:</strong><br>
      <?php if ($email) : ?>
        <a href="mailto:<?php echo antispambot(esc_attr($email)); ?>"><?php echo esc_html($email); ?></a>
      <?php else : ?>
        —
      <?php endif; ?>
    </p>
    <?php if ($phone) : ?>
      <p><strong><?php esc_html_e('Phone', 'mirrorcraft'); ?>:</strong><br><?php echo esc_html($phone); ?></p>
    <?php endif; ?>
    <p><strong><?php esc_html_e('Company', 'mirrorcraft'); ?>:</strong><br><?php echo esc_html($company ?: '—'); ?></p>
    <p><strong><?php esc_html_e('Country', 'mirrorcraft'); ?>:</strong><br><?php echo esc_html($country ?: '—'); ?></p>
    <p><strong><?php esc_html_e('Product Interest', 'mirrorcraft'); ?>:</strong><br><?php echo esc_html($product_interest ?: '—'); ?></p>
    <p><strong><?php esc_html_e('Project Type', 'mirrorcraft'); ?>:</strong><br><?php echo esc_html($project_type ?: '—'); ?></p>
    <p><strong><?php esc_html_e('Mail Status', 'mirrorcraft'); ?>:</strong><br><?php echo esc_html('1' === $mail_sent ? __('Sent', 'mirrorcraft') : __('Saved only', 'mirrorcraft')); ?></p>
    <p><strong><?php esc_html_e('Attachment', 'mirrorcraft'); ?>:</strong><br>
      <?php if ($attachment_url) : ?>
        <a href="<?php echo esc_url($attachment_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($attachment_name ?: $attachment_url); ?></a>
      <?php else : ?>
        <?php esc_html_e('Not provided', 'mirrorcraft'); ?>
      <?php endif; ?>
    </p>
    <p><strong><?php esc_html_e('Source Page', 'mirrorcraft'); ?>:</strong><br>
      <?php if ($source_url) : ?>
        <a href="<?php echo esc_url($source_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($source_url); ?></a>
      <?php else : ?>
        <?php esc_html_e('Not recorded', 'mirrorcraft'); ?>
      <?php endif; ?>
    </p>
  </div>
  <?php
}
