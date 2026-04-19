<?php
$brand_name = get_bloginfo('name') ?: 'OJMIRROR';
$footer_blurb = mirrorcraft_get_option_field(
  'footer_blurb',
  __('OJMIRROR specializes in LED mirrors, vanity mirrors, and mirrored medicine cabinets for hospitality, residential, and custom OEM projects.', 'mirrorcraft')
);
$footer_email = mirrorcraft_get_contact_email();
$footer_phone = mirrorcraft_get_contact_phone();
$footer_phone_href = mirrorcraft_get_contact_phone_href();
$whatsapp_link = mirrorcraft_get_whatsapp_link();
$has_whatsapp_number = mirrorcraft_has_whatsapp_number();
$footer_focus = __('We focus on lighted mirrors and LED mirror cabinets.', 'mirrorcraft');
$footer_products = array(
  array(
    'label' => __('Bathroom Mirrors', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
  ),
  array(
    'label' => __('Medicine Cabinets', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('medicine-cabinets'),
  ),
  array(
    'label' => __('Decorative Mirrors', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('decorative-mirror'),
  ),
  array(
    'label' => __('Makeup Mirrors', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
  ),
  array(
    'label' => __('Full Length Mirrors', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('full-length-mirrors'),
  ),
  array(
    'label' => __('Custom LED Mirrors', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('custom-mirrors'),
  ),
);
$footer_markets = array(
  array(
    'label' => __('Hospitality', 'mirrorcraft'),
    'url'   => mirrorcraft_get_application_section_page_link('hospitality'),
  ),
  array(
    'label' => __('Commercial', 'mirrorcraft'),
    'url'   => mirrorcraft_get_application_section_page_link('commercial'),
  ),
  array(
    'label' => __('Residential', 'mirrorcraft'),
    'url'   => mirrorcraft_get_application_section_page_link('residential'),
  ),
  array(
    'label' => __('Senior Living', 'mirrorcraft'),
    'url'   => mirrorcraft_get_application_section_page_link('senior-living'),
  ),
  array(
    'label' => __('Retail Furniture', 'mirrorcraft'),
    'url'   => mirrorcraft_get_application_section_page_link('retail-chain-stores'),
  ),
  array(
    'label' => __('Salon', 'mirrorcraft'),
    'url'   => mirrorcraft_get_application_section_page_link('beauty-wellness'),
  ),
  array(
    'label' => __('Healthcare', 'mirrorcraft'),
    'url'   => mirrorcraft_get_application_section_page_link('healthcare'),
  ),
);
$footer_company_links = array(
  array(
    'label' => __('About OJMIRROR', 'mirrorcraft'),
    'url'   => mirrorcraft_link_by_slug('about', '/about/'),
  ),
  array(
    'label' => __('Projects & Clients', 'mirrorcraft'),
    'url'   => mirrorcraft_get_about_section_page_link('projects'),
  ),
  array(
    'label' => __('Download Catalogue', 'mirrorcraft'),
    'url'   => mirrorcraft_get_about_section_page_link('download-catalogue'),
  ),
  array(
    'label' => __('Blog', 'mirrorcraft'),
    'url'   => mirrorcraft_link_by_slug('blog', '/blog/'),
  ),
  array(
    'label' => __('OEM / ODM Support', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('custom-mirrors'),
  ),
);
$footer_support_links = array(
  array(
    'label' => __('Contact Us', 'mirrorcraft'),
    'url'   => mirrorcraft_link_by_slug('contact', '/contact/'),
  ),
  array(
    'label' => __('Custom LED Mirrors', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('custom-mirrors'),
  ),
  array(
    'label' => __('Custom Design', 'mirrorcraft'),
    'url'   => mirrorcraft_get_product_category_page_link('custom-mirrors'),
  ),
  array(
    'label' => __('FAQs', 'mirrorcraft'),
    'url'   => mirrorcraft_link_by_slug('faq', '/faq/'),
  ),
  array(
    'label' => __('Request a Quote', 'mirrorcraft'),
    'url'   => mirrorcraft_link_by_slug('contact', '/contact/'),
  ),
);
$footer_social_icons = array(
  array('label' => __('YouTube', 'mirrorcraft'), 'symbol' => '▶'),
  array('label' => __('Facebook', 'mirrorcraft'), 'symbol' => 'f'),
  array('label' => __('X', 'mirrorcraft'), 'symbol' => 'X'),
  array('label' => __('Instagram', 'mirrorcraft'), 'symbol' => '◎'),
  array('label' => __('Pinterest', 'mirrorcraft'), 'symbol' => 'P'),
  array('label' => __('LinkedIn', 'mirrorcraft'), 'symbol' => 'in'),
  array('label' => __('TikTok', 'mirrorcraft'), 'symbol' => '♪'),
);
?>
<footer class="site-footer">
  <div class="shell footer-shell">
    <div class="footer-grid">
      <div class="footer-brand-panel">
        <a class="footer-wordmark" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($brand_name); ?></a>
        <p class="footer-copy"><?php echo esc_html($footer_blurb); ?></p>
        <p class="footer-copy footer-copy-secondary"><?php echo esc_html($footer_focus); ?></p>

        <div class="footer-contact-listing">
          <div class="footer-contact-row">
            <span class="footer-contact-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                <path fill="currentColor" d="M3 5h18a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm17 2.24-7.44 6.05a1 1 0 0 1-1.12.07L4 7.3V17h16V7.24Zm-1.8-.24H5.83L12 12.02 18.2 7Z"/>
              </svg>
            </span>
            <a href="mailto:<?php echo antispambot(esc_attr($footer_email)); ?>"><?php echo esc_html($footer_email); ?></a>
          </div>

          <?php if ($footer_phone !== '') : ?>
            <div class="footer-contact-row">
              <span class="footer-contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                  <path fill="currentColor" d="M12 2a10 10 0 0 0-8.71 14.92L2 22l5.2-1.36A10 10 0 1 0 12 2Zm0 18a7.92 7.92 0 0 1-4.05-1.1l-.29-.17-2.24.59.6-2.18-.18-.3A8 8 0 1 1 12 20Zm4.41-5.24c-.22-.11-1.29-.63-1.49-.7-.2-.07-.34-.11-.49.11-.14.22-.56.7-.68.85-.12.14-.25.16-.46.05-.22-.11-.92-.34-1.75-1.1a6.5 6.5 0 0 1-1.21-1.5c-.13-.21-.01-.33.09-.44.1-.1.22-.24.32-.36.11-.12.14-.21.22-.35.07-.14.03-.27-.02-.38-.06-.11-.49-1.17-.67-1.61-.17-.42-.35-.36-.49-.37l-.42-.01c-.14 0-.37.05-.56.27-.19.21-.74.72-.74 1.76 0 1.03.76 2.03.86 2.17.11.14 1.49 2.27 3.6 3.18.5.22.9.35 1.21.45.51.16.97.14 1.33.09.41-.06 1.29-.52 1.47-1.03.19-.5.19-.93.13-1.02-.05-.09-.19-.14-.41-.25Z"/>
                </svg>
              </span>
              <a href="tel:<?php echo esc_attr($footer_phone_href); ?>"><?php echo esc_html($footer_phone); ?></a>
              <span class="footer-contact-note"><?php esc_html_e('(WhatsApp / WeChat)', 'mirrorcraft'); ?></span>
            </div>
          <?php endif; ?>
        </div>

        <div class="footer-social-list" aria-label="<?php esc_attr_e('Social channels', 'mirrorcraft'); ?>">
          <?php foreach ($footer_social_icons as $social) : ?>
            <span class="footer-social" aria-label="<?php echo esc_attr($social['label']); ?>">
              <span class="footer-social-symbol" aria-hidden="true"><?php echo esc_html($social['symbol']); ?></span>
            </span>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="footer-column footer-column-product">
        <h3 class="footer-section-title"><?php esc_html_e('Products', 'mirrorcraft'); ?></h3>
        <ul class="footer-links footer-links-compact">
          <?php foreach ($footer_products as $link) : ?>
            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-column footer-column-markets">
        <h3 class="footer-section-title"><?php esc_html_e('Applications', 'mirrorcraft'); ?></h3>
        <ul class="footer-links footer-links-compact">
          <?php foreach ($footer_markets as $link) : ?>
            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-column footer-column-company">
        <h3 class="footer-section-title"><?php esc_html_e('Company', 'mirrorcraft'); ?></h3>
        <ul class="footer-links footer-links-compact">
          <?php foreach ($footer_company_links as $link) : ?>
            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-column footer-column-support">
        <h3 class="footer-section-title"><?php esc_html_e('Support', 'mirrorcraft'); ?></h3>
        <ul class="footer-links footer-links-compact">
          <?php foreach ($footer_support_links as $link) : ?>
            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-subbar">
    <div class="shell footer-subbar-shell">
      <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php echo esc_html($brand_name); ?>. <?php esc_html_e('All rights reserved.', 'mirrorcraft'); ?></p>
    </div>
  </div>
</footer>
<div class="floating-actions" aria-label="<?php esc_attr_e('Quick actions', 'mirrorcraft'); ?>">
  <?php if ($whatsapp_link !== '') : ?>
    <a
      class="floating-action floating-action-whatsapp"
      href="<?php echo esc_url($whatsapp_link); ?>"
      <?php if ($has_whatsapp_number) : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>
      aria-label="<?php esc_attr_e('Open WhatsApp chat', 'mirrorcraft'); ?>"
    >
      <span class="floating-action-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.03 2C6.59 2 2.17 6.42 2.17 11.86c0 1.74.45 3.43 1.31 4.92L2 22l5.37-1.41a9.85 9.85 0 0 0 4.66 1.19h.01c5.43 0 9.85-4.42 9.86-9.86A9.8 9.8 0 0 0 19.05 4.91Zm-7.02 15.2h-.01a8.19 8.19 0 0 1-4.17-1.14l-.3-.18-3.19.84.85-3.11-.2-.32a8.2 8.2 0 0 1-1.26-4.34c0-4.53 3.69-8.21 8.23-8.21a8.16 8.16 0 0 1 5.81 2.41 8.15 8.15 0 0 1 2.39 5.81c0 4.54-3.69 8.23-8.21 8.24Zm4.51-6.16c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.12-.56.13-.16.25-.64.81-.78.98-.14.16-.28.18-.53.06-.25-.13-1.05-.39-2-1.25a7.41 7.41 0 0 1-1.38-1.72c-.14-.25-.02-.38.11-.5.11-.11.25-.28.37-.42.12-.14.16-.25.25-.42.08-.16.04-.31-.02-.44-.07-.13-.56-1.35-.76-1.85-.2-.48-.41-.42-.56-.43h-.48c-.16 0-.42.06-.64.31-.22.25-.84.82-.84 2s.86 2.31.98 2.47c.12.16 1.69 2.58 4.09 3.62.57.25 1.02.4 1.37.52.58.18 1.1.16 1.51.1.46-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.14-1.18-.06-.1-.22-.16-.47-.29Z"/>
        </svg>
      </span>
      <span class="floating-action-label floating-action-label-multiline">
        <span><?php esc_html_e('WhatsApp', 'mirrorcraft'); ?></span>
        <span><?php esc_html_e('Quick Quote Support', 'mirrorcraft'); ?></span>
      </span>
    </a>
  <?php endif; ?>

  <button class="floating-action floating-action-top" type="button" data-scroll-top aria-label="<?php esc_attr_e('Back to top', 'mirrorcraft'); ?>">
    <span class="floating-action-icon" aria-hidden="true">
      <svg viewBox="0 0 24 24" role="presentation" focusable="false">
        <path fill="currentColor" d="M12 5.59 5.29 12.3l1.42 1.4L11 9.41V20h2V9.41l4.29 4.29 1.42-1.4z"/>
      </svg>
    </span>
    <span class="floating-action-label"><?php esc_html_e('Top', 'mirrorcraft'); ?></span>
  </button>
</div>
<?php wp_footer(); ?>
</body>
</html>
