<?php
/*
Template Name: Contact Page
*/
get_header();
$faq_items = mirrorcraft_get_faq_items();
$contact_email = mirrorcraft_get_contact_email();
$contact_phone = mirrorcraft_get_contact_phone();
$contact_phone_href = mirrorcraft_get_contact_phone_href();
$contact_address = mirrorcraft_get_contact_address();
$contact_map_link = mirrorcraft_get_contact_map_link();
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
          <h1 class="contact-page-title"><?php esc_html_e('Need assistance, have a suggestion, or would like to learn more about our service? We would like to hear from you.', 'mirrorcraft'); ?></h1>

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

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section faq-section">
      <div class="shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Questions that often come up before a quote.', 'mirrorcraft'); ?></h2>
        </div>
        <?php mirrorcraft_render_faq_items($faq_items, 'contact-faq'); ?>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
