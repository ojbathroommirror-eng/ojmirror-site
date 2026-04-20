<?php
/*
Template Name: Contact Page
*/
get_header();
$contact_email = mirrorcraft_get_contact_email();
$contact_phone = mirrorcraft_get_contact_phone();
$contact_address = mirrorcraft_get_contact_address();
$contact_map_link = mirrorcraft_get_contact_map_link();
$contact_map_embed_url = mirrorcraft_get_contact_map_embed_url();
$contact_whatsapp_link = mirrorcraft_get_whatsapp_link();
$contact_whatsapp_external = mirrorcraft_has_whatsapp_number();
$website_url = home_url('/');
$website_label = wp_parse_url($website_url, PHP_URL_HOST);
$website_label = $website_label ?: 'www.ojmirror.com';
$contact_short_address = __('Zhongshan, Guangdong, China', 'mirrorcraft');
$factory_overview_image = trailingslashit(get_template_directory_uri()) . 'assets/images/factory-20260420.png';
$factory_gallery = array(
  array(
    'image' => $factory_overview_image,
  ),
);
$contact_channels = array(
  array(
    'eyebrow'  => __('Email', 'mirrorcraft'),
    'value'    => $contact_email,
    'href'     => 'mailto:' . antispambot($contact_email),
    'note'     => __('Share product type, quantity, and target market for a faster quotation response.', 'mirrorcraft'),
    'class'    => '',
    'external' => false,
  ),
  array(
    'eyebrow'  => __('WhatsApp', 'mirrorcraft'),
    'value'    => $contact_phone,
    'href'     => $contact_whatsapp_link,
    'note'     => __('The fastest way to discuss drawings, OEM details, and project follow-up with our sales team.', 'mirrorcraft'),
    'class'    => ' is-highlighted',
    'external' => $contact_whatsapp_external,
  ),
  array(
    'eyebrow'  => __('Website', 'mirrorcraft'),
    'value'    => $website_label,
    'href'     => $website_url,
    'note'     => __('Browse products, applications, and company capabilities before sending your inquiry.', 'mirrorcraft'),
    'class'    => '',
    'external' => false,
  ),
  array(
    'eyebrow'  => __('Address', 'mirrorcraft'),
    'value'    => $contact_short_address,
    'href'     => $contact_map_link,
    'note'     => __('Factory and project support base in Zhongshan, Guangdong, China.', 'mirrorcraft'),
    'class'    => '',
    'external' => true,
  ),
);
$why_contact_items = array(
  __('Fast response within 24 hours', 'mirrorcraft'),
  __('Professional OEM / ODM support', 'mirrorcraft'),
  __('Experience with global projects', 'mirrorcraft'),
  __('Reliable quality and delivery', 'mirrorcraft'),
  __('Factory direct pricing', 'mirrorcraft'),
);
$response_promises = array(
  __('Reply within 24 hours', 'mirrorcraft'),
  __('Professional quotation', 'mirrorcraft'),
  __('Technical support for your project', 'mirrorcraft'),
  __('Clear communication from start to finish', 'mirrorcraft'),
);
$contact_faq_items = array(
  array(
    'question' => __('How fast can I get a quotation?', 'mirrorcraft'),
    'answer'   => __('Within 24 hours after receiving your request.', 'mirrorcraft'),
  ),
  array(
    'question' => __('Can you support custom designs?', 'mirrorcraft'),
    'answer'   => __('Yes, OEM and ODM are fully supported.', 'mirrorcraft'),
  ),
  array(
    'question' => __('What information should I provide?', 'mirrorcraft'),
    'answer'   => __('Product type, size, quantity, and any custom requirements help us quote more accurately.', 'mirrorcraft'),
  ),
  array(
    'question' => __('Do you support international shipping?', 'mirrorcraft'),
    'answer'   => __('Yes, we export to more than 80 countries and support project shipments worldwide.', 'mirrorcraft'),
  ),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="section contact-page-section">
      <div class="shell contact-page-shell">
        <article class="contact-page-intro">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></p>
          <h1 class="contact-page-title"><?php esc_html_e('Contact LED Mirror Manufacturer in China', 'mirrorcraft'); ?></h1>
          <p class="contact-page-lead"><?php esc_html_e("Tell us your requirements - we'll provide a customized solution within 24 hours.", 'mirrorcraft'); ?></p>
          <p class="contact-page-highlight"><?php esc_html_e('Fast response. Professional support. Reliable solutions.', 'mirrorcraft'); ?></p>
          <ul class="contact-hero-points">
            <li><?php esc_html_e('Factory direct pricing for wholesale and project sourcing', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('OEM / ODM support for LED bathroom mirrors, medicine cabinets, and custom programs', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Reliable communication from inquiry to delivery', 'mirrorcraft'); ?></li>
          </ul>
        </article>

        <section class="contact-page-form-panel" aria-labelledby="contact-form-heading">
          <p class="eyebrow"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></p>
          <h2 id="contact-form-heading"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></h2>
          <p class="contact-form-intro"><?php esc_html_e('Tell us the product type, quantity, and custom requirements - our team will prepare the right quotation and support path for you.', 'mirrorcraft'); ?></p>
          <p class="contact-form-callout"><?php esc_html_e('Free design support. No MOQ for sample testing.', 'mirrorcraft'); ?></p>
          <?php mirrorcraft_render_contact_form('contact-page'); ?>
        </section>
      </div>
    </section>

    <section class="section contact-touch-section">
      <div class="shell">
        <div class="section-heading contact-touch-heading">
          <p class="eyebrow"><?php esc_html_e('Get in Touch', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Reach our LED mirror sales and project team through the channel that suits you best.', 'mirrorcraft'); ?></h2>
        </div>

        <div class="contact-touch-grid">
          <?php foreach ($contact_channels as $channel) : ?>
            <article class="contact-touch-card<?php echo esc_attr($channel['class']); ?>">
              <p class="contact-touch-eyebrow"><?php echo esc_html($channel['eyebrow']); ?></p>
              <h3>
                <a
                  href="<?php echo esc_url($channel['href']); ?>"
                  <?php if (!empty($channel['external'])) : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>
                >
                  <?php echo esc_html($channel['value']); ?>
                </a>
              </h3>
              <p><?php echo esc_html($channel['note']); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section contact-proof-section">
      <div class="shell contact-proof-shell">
        <article class="contact-proof-card">
          <p class="eyebrow"><?php esc_html_e('Why Contact OJMIRROR', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Why Contact OJMIRROR', 'mirrorcraft'); ?></h2>
          <ul class="contact-proof-list">
            <?php foreach ($why_contact_items as $item) : ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <p class="contact-proof-highlight"><?php esc_html_e('We help you save time, reduce cost, and win projects.', 'mirrorcraft'); ?></p>
        </article>

        <article class="contact-proof-card contact-proof-card-promise">
          <p class="eyebrow"><?php esc_html_e('Our Response Promise', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Our Response Promise', 'mirrorcraft'); ?></h2>
          <ul class="contact-proof-list contact-proof-list-checks">
            <?php foreach ($response_promises as $item) : ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <section class="section contact-faq-section">
      <div class="shell">
        <div class="section-heading contact-faq-heading">
          <p class="eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Questions buyers ask before submitting a quote request.', 'mirrorcraft'); ?></h2>
        </div>

        <div class="contact-faq-list">
          <?php foreach ($contact_faq_items as $item) : ?>
            <details class="contact-faq-item">
              <summary><?php echo esc_html($item['question']); ?></summary>
              <div class="contact-faq-answer">
                <p><?php echo esc_html($item['answer']); ?></p>
              </div>
            </details>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section contact-location-section">
      <div class="shell contact-location-shell">
        <div class="contact-location-media">
          <div class="section-heading contact-location-heading">
            <p class="eyebrow"><?php esc_html_e('Factory & Location', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('See our production direction and find the factory on Google Maps.', 'mirrorcraft'); ?></h2>
            <p class="section-intro"><?php esc_html_e('Use the map for route guidance and review the factory-related visuals alongside the contact point for sampling, production follow-up, and OEM / ODM communication.', 'mirrorcraft'); ?></p>
          </div>

          <div class="contact-factory-grid">
            <?php foreach ($factory_gallery as $index => $item) : ?>
              <?php if (empty($item['image'])) { continue; } ?>
              <article class="contact-factory-card<?php echo 0 === $index ? ' is-featured' : ''; ?> is-image-only">
                <figure class="contact-factory-figure">
                  <img src="<?php echo esc_url($item['image']); ?>" alt="<?php esc_attr_e('Factory image', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
                </figure>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <aside class="contact-map-panel">
          <p class="eyebrow"><?php esc_html_e('Google Map', 'mirrorcraft'); ?></p>
          <h3><?php esc_html_e('Factory Address', 'mirrorcraft'); ?></h3>
          <p class="contact-map-address"><?php echo esc_html($contact_address); ?></p>
          <div class="contact-map-frame">
            <iframe
              src="<?php echo esc_url($contact_map_embed_url); ?>"
              title="<?php esc_attr_e('Factory location map', 'mirrorcraft'); ?>"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen>
            </iframe>
          </div>
          <a class="button button-secondary" href="<?php echo esc_url($contact_map_link); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open in Google Maps', 'mirrorcraft'); ?></a>
        </aside>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
