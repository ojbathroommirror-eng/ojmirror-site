<?php
/*
Template Name: Contact Page
*/
get_header();
$contact_email = mirrorcraft_get_contact_email();
$contact_phone = mirrorcraft_get_contact_phone();
$contact_phone_href = mirrorcraft_get_contact_phone_href();
$contact_address = '中山市火炬开发区中山港街道展兴路5号';
$contact_map_link = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($contact_address);
$contact_map_embed_url = 'https://www.google.com/maps?output=embed&q=' . rawurlencode($contact_address);
$factory_gallery = array(
  array(
    'image' => mirrorcraft_get_active_hero_image_url(),
    'title' => __('Factory Overview', 'mirrorcraft'),
    'text'  => __('Production-ready LED mirror programs with export, sampling, and project support.', 'mirrorcraft'),
  ),
  array(
    'image' => mirrorcraft_get_customization_reference_image_url(),
    'title' => __('Workshop Details', 'mirrorcraft'),
    'text'  => __('Customization review, engineering coordination, and finish direction for OEM and ODM orders.', 'mirrorcraft'),
  ),
  array(
    'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
    'title' => __('Assembly & Packing', 'mirrorcraft'),
    'text'  => __('Assembly follow-up, inspection rhythm, and packing preparation for bulk production.', 'mirrorcraft'),
  ),
);
$contact_social_icons = array(
  array('label' => __('Facebook', 'mirrorcraft'), 'symbol' => 'f'),
  array('label' => __('YouTube', 'mirrorcraft'), 'symbol' => '▶'),
  array('label' => __('Instagram', 'mirrorcraft'), 'symbol' => '◎'),
  array('label' => __('Pinterest', 'mirrorcraft'), 'symbol' => 'P'),
  array('label' => __('LinkedIn', 'mirrorcraft'), 'symbol' => 'in'),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="section contact-page-section">
      <div class="shell contact-page-shell">
        <article class="contact-page-intro">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <h1 class="contact-page-title"><?php esc_html_e("Let's Discuss Your LED Mirrors Project", 'mirrorcraft'); ?></h1>
          <p class="contact-page-lead"><?php esc_html_e('We are here to support your wholesale, OEM, and project sourcing needs for LED bathroom mirrors, medicine cabinets, and custom mirror programs.', 'mirrorcraft'); ?></p>

          <div class="contact-page-details">
            <?php if ($contact_phone !== '') : ?>
              <div class="contact-page-detail">
                <span class="contact-page-detail-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                    <path fill="currentColor" d="M6.62 10.79a15.54 15.54 0 0 0 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24a11.2 11.2 0 0 0 3.5.56c.57 0 1.03.46 1.03 1.03V20c0 .57-.46 1.03-1.03 1.03C10.42 21.03 2.97 13.58 2.97 4.03 2.97 3.46 3.43 3 4 3h3.48c.57 0 1.03.46 1.03 1.03 0 1.22.2 2.4.56 3.5.11.35.03.74-.24 1.02l-2.21 2.24Z"/>
                  </svg>
                </span>
                <a href="tel:<?php echo esc_attr($contact_phone_href); ?>"><?php echo esc_html($contact_phone); ?></a>
              </div>
            <?php endif; ?>

            <div class="contact-page-detail">
              <span class="contact-page-detail-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                  <path fill="currentColor" d="M3 5h18a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm17 2.24-7.44 6.05a1 1 0 0 1-1.12.07L4 7.3V17h16V7.24Zm-1.8-.24H5.83L12 12.02 18.2 7Z"/>
                </svg>
              </span>
              <a href="mailto:<?php echo antispambot(esc_attr($contact_email)); ?>"><?php echo esc_html($contact_email); ?></a>
            </div>

            <div class="contact-page-detail contact-page-detail-address">
              <span class="contact-page-detail-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                  <path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.23 7 13 7 13s7-7.77 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5Z"/>
                </svg>
              </span>
              <?php if ($contact_map_link !== '') : ?>
                <a href="<?php echo esc_url($contact_map_link); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($contact_address); ?></a>
              <?php else : ?>
                <span><?php echo esc_html($contact_address); ?></span>
              <?php endif; ?>
            </div>
          </div>

          <div class="contact-page-socials" aria-label="<?php esc_attr_e('Social channels', 'mirrorcraft'); ?>">
            <?php foreach ($contact_social_icons as $social) : ?>
              <span class="contact-page-social" aria-label="<?php echo esc_attr($social['label']); ?>">
                <span class="contact-page-social-symbol" aria-hidden="true"><?php echo esc_html($social['symbol']); ?></span>
              </span>
            <?php endforeach; ?>
          </div>
        </article>

        <section class="contact-page-form-panel" aria-labelledby="contact-form-heading">
          <h2 id="contact-form-heading" class="screen-reader-text"><?php esc_html_e('Contact form', 'mirrorcraft'); ?></h2>
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
              <article class="contact-factory-card<?php echo 0 === $index ? ' is-featured' : ''; ?>">
                <figure class="contact-factory-figure">
                  <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy" decoding="async">
                </figure>
                <div class="contact-factory-copy">
                  <h3><?php echo esc_html($item['title']); ?></h3>
                  <p><?php echo esc_html($item['text']); ?></p>
                </div>
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
