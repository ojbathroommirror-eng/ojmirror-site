<?php
/*
Template Name: Contact Page
*/
get_header();
$contact_email = mirrorcraft_get_contact_email();
$contact_phone = mirrorcraft_get_contact_phone();
$contact_phone_href = mirrorcraft_get_contact_phone_href();
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
$why_contact_items = array(
  __('Fast response within 24 hours', 'mirrorcraft'),
  __('Professional OEM / ODM support', 'mirrorcraft'),
  __('Experience with global projects', 'mirrorcraft'),
  __('Reliable quality and delivery', 'mirrorcraft'),
  __('Factory direct pricing', 'mirrorcraft'),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="section contact-page-section">
      <div class="shell contact-page-shell">
        <article class="contact-page-intro">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></p>
          <h1 class="contact-page-title">
            <span><?php esc_html_e('Contact LED Mirror', 'mirrorcraft'); ?></span>
            <span><?php esc_html_e('Manufacturer in China', 'mirrorcraft'); ?></span>
          </h1>
          <p class="contact-page-lead"><?php esc_html_e("Tell us your requirements - we'll provide a customized solution within 24 hours.", 'mirrorcraft'); ?></p>
          <p class="contact-page-highlight"><?php esc_html_e('Fast response. Professional support. Reliable solutions.', 'mirrorcraft'); ?></p>
          <div class="contact-page-proof-inline">
            <ul class="contact-proof-list">
              <?php foreach ($why_contact_items as $item) : ?>
                <li><?php echo esc_html($item); ?></li>
              <?php endforeach; ?>
            </ul>
            <p class="contact-proof-highlight"><?php esc_html_e('We help you save time, reduce cost, and win projects.', 'mirrorcraft'); ?></p>
            <div class="contact-page-connect">
              <section class="contact-page-connect-card" aria-labelledby="contact-direct-heading">
                <p class="contact-touch-eyebrow" id="contact-direct-heading"><?php esc_html_e('Direct Contact', 'mirrorcraft'); ?></p>
                <div class="contact-page-contact-list">
                  <div class="contact-page-contact-row">
                    <span class="contact-page-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                        <path fill="currentColor" d="M3 5h18a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm17 2.24-7.44 6.05a1 1 0 0 1-1.12.07L4 7.3V17h16V7.24Zm-1.8-.24H5.83L12 12.02 18.2 7Z"/>
                      </svg>
                    </span>
                    <div class="contact-page-contact-copy">
                      <span class="contact-page-contact-label"><?php esc_html_e('Email', 'mirrorcraft'); ?></span>
                      <a href="mailto:<?php echo antispambot(esc_attr($contact_email)); ?>"><?php echo esc_html($contact_email); ?></a>
                    </div>
                  </div>

                  <div class="contact-page-contact-row">
                    <span class="contact-page-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                        <path fill="currentColor" d="M12 2a10 10 0 0 0-8.71 14.92L2 22l5.2-1.36A10 10 0 1 0 12 2Zm0 18a7.92 7.92 0 0 1-4.05-1.1l-.29-.17-2.24.59.6-2.18-.18-.3A8 8 0 1 1 12 20Zm4.41-5.24c-.22-.11-1.29-.63-1.49-.7-.2-.07-.34-.11-.49.11-.14.22-.56.7-.68.85-.12.14-.25.16-.46.05-.22-.11-.92-.34-1.75-1.1a6.5 6.5 0 0 1-1.21-1.5c-.13-.21-.01-.33.09-.44.1-.1.22-.24.32-.36.11-.12.14-.21.22-.35.07-.14.03-.27-.02-.38-.06-.11-.49-1.17-.67-1.61-.17-.42-.35-.36-.49-.37l-.42-.01c-.14 0-.37.05-.56.27-.19.21-.74.72-.74 1.76 0 1.03.76 2.03.86 2.17.11.14 1.49 2.27 3.6 3.18.5.22.9.35 1.21.45.51.16.97.14 1.33.09.41-.06 1.29-.52 1.47-1.03.19-.5.19-.93.13-1.02-.05-.09-.19-.14-.41-.25Z"/>
                      </svg>
                    </span>
                    <div class="contact-page-contact-copy">
                      <span class="contact-page-contact-label"><?php esc_html_e('Phone', 'mirrorcraft'); ?></span>
                      <a href="tel:<?php echo esc_attr($contact_phone_href); ?>"><?php echo esc_html($contact_phone); ?></a>
                    </div>
                  </div>

                  <div class="contact-page-contact-row">
                    <span class="contact-page-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                        <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 4.68 5.36 11.4 6.04 12.24a1.25 1.25 0 0 0 1.92 0C13.64 20.4 19 13.68 19 9a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"/>
                      </svg>
                    </span>
                    <div class="contact-page-contact-copy">
                      <span class="contact-page-contact-label"><?php esc_html_e('Address', 'mirrorcraft'); ?></span>
                      <span><?php echo esc_html($contact_address); ?></span>
                    </div>
                  </div>

                  <div class="contact-page-contact-row">
                    <span class="contact-page-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                        <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm6.92 9h-3.03a15.9 15.9 0 0 0-1.18-4.46A8.03 8.03 0 0 1 18.92 11ZM12 4.08c.92 1.12 1.94 3.24 2.34 6.92H9.66C10.06 7.32 11.08 5.2 12 4.08ZM4.08 13h3.03a15.9 15.9 0 0 0 1.18 4.46A8.03 8.03 0 0 1 4.08 13Zm3.03-2H4.08a8.03 8.03 0 0 1 4.21-4.46A15.9 15.9 0 0 0 7.11 11Zm4.89 8.92c-.92-1.12-1.94-3.24-2.34-6.92h4.68c-.4 3.68-1.42 5.8-2.34 6.92ZM13 13h-2a13.7 13.7 0 0 0 .98 5.2A13.7 13.7 0 0 0 13 13Zm-2-2h2a13.7 13.7 0 0 0-.98-5.2A13.7 13.7 0 0 0 11 11Zm4.71 6.46A15.9 15.9 0 0 0 16.89 13h3.03a8.03 8.03 0 0 1-4.21 4.46Z"/>
                      </svg>
                    </span>
                    <div class="contact-page-contact-copy">
                      <span class="contact-page-contact-label"><?php esc_html_e('Website', 'mirrorcraft'); ?></span>
                      <a href="<?php echo esc_url($website_url); ?>"><?php echo esc_html($website_label); ?></a>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
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
