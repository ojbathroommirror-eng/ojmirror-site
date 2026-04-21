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
            <p class="eyebrow"><?php esc_html_e('Why Contact OJMIRROR', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Why Contact OJMIRROR', 'mirrorcraft'); ?></h2>
            <ul class="contact-proof-list">
              <?php foreach ($why_contact_items as $item) : ?>
                <li><?php echo esc_html($item); ?></li>
              <?php endforeach; ?>
            </ul>
            <p class="contact-proof-highlight"><?php esc_html_e('We help you save time, reduce cost, and win projects.', 'mirrorcraft'); ?></p>
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
