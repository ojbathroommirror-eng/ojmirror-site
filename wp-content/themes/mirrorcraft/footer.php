<?php
$brand_name = get_bloginfo('name') ?: 'OJMIRROR';
$footer_blurb = mirrorcraft_get_option_field(
  'footer_blurb',
  __('OJMIRROR builds LED bathroom mirrors, medicine cabinets, and custom mirror programs for project teams, distributors, and private label buyers.', 'mirrorcraft')
);
$footer_email = mirrorcraft_get_contact_email();
$footer_phone = mirrorcraft_get_contact_phone();
$footer_phone_href = mirrorcraft_get_contact_phone_href();
$whatsapp_link = mirrorcraft_get_whatsapp_link();
$footer_links = mirrorcraft_get_default_menu_items();
?>
<footer class="site-footer">
  <div class="shell footer-shell">
    <div class="footer-grid">
      <div class="footer-brand">
        <p class="footer-kicker"><?php echo esc_html($brand_name); ?></p>
        <h2><?php esc_html_e('LED bathroom mirrors, lighted medicine cabinets, and custom programs built for clearer B2B sourcing.', 'mirrorcraft'); ?></h2>
        <p><?php echo esc_html($footer_blurb); ?></p>
      </div>

      <div class="footer-column">
        <h3><?php esc_html_e('Explore', 'mirrorcraft'); ?></h3>
        <ul class="footer-links">
          <?php foreach ($footer_links as $link) : ?>
            <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="footer-column">
        <h3><?php esc_html_e('Contact', 'mirrorcraft'); ?></h3>
        <ul class="footer-links footer-contact-list">
          <li><a href="mailto:<?php echo antispambot(esc_attr($footer_email)); ?>"><?php echo esc_html($footer_email); ?></a></li>
          <?php if ($footer_phone !== '') : ?>
            <li><a href="tel:<?php echo esc_attr($footer_phone_href); ?>"><?php echo esc_html($footer_phone); ?></a></li>
          <?php endif; ?>
          <?php if ($whatsapp_link !== '') : ?>
            <li><a href="<?php echo esc_url($whatsapp_link); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('WhatsApp Quote Support', 'mirrorcraft'); ?></a></li>
          <?php endif; ?>
          <li><a href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Send an Inquiry', 'mirrorcraft'); ?></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-subbar">
    <div class="shell footer-subbar-shell">
      <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php echo esc_html($brand_name); ?>. <?php esc_html_e('All rights reserved.', 'mirrorcraft'); ?></p>
      <a href="#site-main"><?php esc_html_e('Back to top', 'mirrorcraft'); ?></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
