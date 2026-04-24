<?php
/*
Template Name: Privacy Policy
*/

if (!function_exists('mirrorcraft_render_privacy_policy_icon')) {
  function mirrorcraft_render_privacy_policy_icon($slug) {
    switch ($slug) {
      case 'user':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5Z"/>
        </svg>
        <?php
        break;
      case 'document':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M7 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V9.5L14.5 5H7Zm7 1.5L18.5 9H14V4.5ZM8 11h8v2H8v-2Zm0 4h8v2H8v-2Z"/>
        </svg>
        <?php
        break;
      case 'cookie':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a1 1 0 0 0-1 1 3 3 0 0 1-3 3 1 1 0 0 0-1 1 3 3 0 0 1-3 3 1 1 0 0 0-1 1 9 9 0 1 0 9-9Zm-2 12a1.5 1.5 0 1 1 1.5-1.5A1.5 1.5 0 0 1 10 14Zm4 3a1 1 0 1 1 1-1 1 1 0 0 1-1 1Zm2-6a1.25 1.25 0 1 1 1.25-1.25A1.25 1.25 0 0 1 16 11Z"/>
        </svg>
        <?php
        break;
      case 'share':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M18 16a3 3 0 0 0-2.39 1.2L8.91 13.7a3.02 3.02 0 0 0 0-3.4l6.7-3.5A3 3 0 1 0 15 5a2.97 2.97 0 0 0 .16.96l-6.7 3.5a3 3 0 1 0 0 5.08l6.7 3.5A2.97 2.97 0 0 0 15 19a3 3 0 1 0 3-3Z"/>
        </svg>
        <?php
        break;
      case 'shield':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 4 5v6c0 5 3.4 9.74 8 11 4.6-1.26 8-6 8-11V5l-8-3Zm0 17.87C8.6 18.76 6 14.73 6 11V6.36l6-2.25 6 2.25V11c0 3.73-2.6 7.76-6 8.87Z"/>
        </svg>
        <?php
        break;
      case 'globe':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm6.92 9h-3.03a15.9 15.9 0 0 0-1.18-4.46A8.03 8.03 0 0 1 18.92 11ZM12 4.08c.92 1.12 1.94 3.24 2.34 6.92H9.66C10.06 7.32 11.08 5.2 12 4.08ZM4.08 13h3.03a15.9 15.9 0 0 0 1.18 4.46A8.03 8.03 0 0 1 4.08 13Zm3.03-2H4.08a8.03 8.03 0 0 1 4.21-4.46A15.9 15.9 0 0 0 7.11 11Zm4.89 8.92c-.92-1.12-1.94-3.24-2.34-6.92h4.68c-.4 3.68-1.42 5.8-2.34 6.92ZM13 13h-2a13.7 13.7 0 0 0 .98 5.2A13.7 13.7 0 0 0 13 13Zm-2-2h2a13.7 13.7 0 0 0-.98-5.2A13.7 13.7 0 0 0 11 11Zm4.71 6.46A15.9 15.9 0 0 0 16.89 13h3.03a8.03 8.03 0 0 1-4.21 4.46Z"/>
        </svg>
        <?php
        break;
      case 'link':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M10.59 13.41a1 1 0 0 1 0-1.41l2.83-2.83a3 3 0 0 1 4.24 4.24l-1.41 1.42-1.42-1.42 1.42-1.41a1 1 0 1 0-1.42-1.42l-2.83 2.83a1 1 0 0 1-1.41 0Zm2.82-2.82a1 1 0 0 1 0 1.41l-2.83 2.83a3 3 0 0 1-4.24-4.24l1.41-1.42 1.42 1.42-1.42 1.41a1 1 0 0 0 1.42 1.42l2.83-2.83a1 1 0 0 1 1.41 0Z"/>
        </svg>
        <?php
        break;
      case 'clock':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm1 11h4v-2h-3V7h-2v6Z"/>
        </svg>
        <?php
        break;
      case 'rights':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 4 5v6c0 5 3.4 9.74 8 11 4.6-1.26 8-6 8-11V5l-8-3Zm-1 5h2v6h-2V7Zm0 8h2v2h-2v-2Z"/>
        </svg>
        <?php
        break;
      case 'child':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 4a2 2 0 1 0 2 2 2 2 0 0 0-2-2Zm-4 7a4 4 0 0 1 8 0v1h2v7h-2v-6h-1v7h-2v-4h-2v4H9v-7H8v6H6v-7h2v-1Z"/>
        </svg>
        <?php
        break;
      case 'refresh':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M17.65 6.35A7.95 7.95 0 0 0 12 4V1L7 6l5 5V7a5 5 0 1 1-4.9 6h-2.02A7 7 0 1 0 17.65 6.35Z"/>
        </svg>
        <?php
        break;
      case 'mail':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 5h18a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm17 2.24-7.44 6.05a1 1 0 0 1-1.12.07L4 7.3V17h16V7.24Zm-1.8-.24H5.83L12 12.02 18.2 7Z"/>
        </svg>
        <?php
        break;
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="2"/>
        </svg>
        <?php
    }
  }
}

get_header();

$privacy_email          = mirrorcraft_get_contact_email();
$privacy_phone          = mirrorcraft_get_contact_phone();
$privacy_address        = mirrorcraft_get_contact_address();
$privacy_website        = home_url('/');
$privacy_website_label  = wp_parse_url($privacy_website, PHP_URL_HOST);
$privacy_website_label  = $privacy_website_label ?: 'www.ojmirror.com';
$privacy_hero_image     = mirrorcraft_theme_image_url('hospitality-led-mirror-project.png');

if ($privacy_hero_image === '') {
  $privacy_hero_image = mirrorcraft_theme_image_url('home-hero-banner-20260422.png');
}

$privacy_sections = array(
  array(
    'slug'    => 'user',
    'number'  => '1.',
    'title'   => __('Information We Collect', 'mirrorcraft'),
    'content' => array(
      __('We may collect contact details such as your company name, contact person, email address, phone number, country, target market, product details, and any other information you provide when requesting quotation, product support, catalog access, samples, or customization assistance.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'document',
    'number'  => '2.',
    'title'   => __('How We Use Your Information', 'mirrorcraft'),
    'content' => array(
      __('We use your information to respond to inquiries, prepare quotations, organize product recommendations, process business requests, improve website and service quality, and support sales communication related to your inquiry or cooperation.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'cookie',
    'number'  => '3.',
    'title'   => __('Cookies and Tracking Technologies', 'mirrorcraft'),
    'content' => array(
      __('Our website may use cookies and similar technologies to enhance user experience, analyze website traffic, and improve usability. You can choose to disable cookies through your browser settings, although some features may not function properly if cookies are disabled.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'share',
    'number'  => '4.',
    'title'   => __('How We Share Information', 'mirrorcraft'),
    'content' => array(
      __('We do not sell, rent, or trade your personal information. We may share necessary information with service providers, logistics partners, payment partners, or technical partners when needed to fulfill project communication, quotation, shipment preparation, or legal obligations.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'shield',
    'number'  => '5.',
    'title'   => __('Data Protection', 'mirrorcraft'),
    'content' => array(
      __('We take reasonable technical and organizational measures to protect your personal information from unauthorized access, misuse, or disclosure. However, no internet transmission or storage system can be guaranteed to be completely secure.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'globe',
    'number'  => '6.',
    'title'   => __('International Data Transfers', 'mirrorcraft'),
    'content' => array(
      __('Because we serve global buyers, your information may be processed or stored in countries outside your own jurisdiction. By submitting inquiries or cooperating with us, you understand and agree to such transfers where reasonably necessary for the requested service.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'link',
    'number'  => '7.',
    'title'   => __('Third-Party Links', 'mirrorcraft'),
    'content' => array(
      __('Our website may contain links to third-party websites. We are not responsible for the privacy practices, content, or policies of those third-party websites, and you should review their own privacy notices separately.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'clock',
    'number'  => '8.',
    'title'   => __('Data Retention', 'mirrorcraft'),
    'content' => array(
      __('We retain personal information only for as long as necessary to fulfill the purposes described in this Privacy Policy, to support order history and communication records, or as required by applicable law.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'rights',
    'number'  => '9.',
    'title'   => __('Your Rights', 'mirrorcraft'),
    'content' => array(
      __('Depending on your location and applicable law, you may have the right to access, update, correct, delete, or restrict the processing of your information. To exercise these rights, please contact us using the information below.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'child',
    'number'  => '10.',
    'title'   => __('Children\'s Privacy', 'mirrorcraft'),
    'content' => array(
      __('Our website and business services are intended for business users and are not directed to children under the age of 13. We do not knowingly collect personal information from children.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'refresh',
    'number'  => '11.',
    'title'   => __('Updates to This Privacy Policy', 'mirrorcraft'),
    'content' => array(
      __('We may update this Privacy Policy from time to time. Any changes will be posted on this page together with the revised effective or updated date where applicable.', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'    => 'mail',
    'number'  => '12.',
    'title'   => __('Contact Us', 'mirrorcraft'),
    'content' => array(
      __('If you have questions about this Privacy Policy or how your information is used, please contact the OJMIRROR team through the contact details below.', 'mirrorcraft'),
    ),
  ),
);
?>
<main id="site-main" class="site-main page-shell privacy-policy-page" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="section privacy-policy-hero">
      <div class="shell privacy-policy-hero__shell">
        <div class="privacy-policy-hero__copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Privacy Policy', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p><?php esc_html_e('How OJMIRROR collects, uses, and protects your information.', 'mirrorcraft'); ?></p>
        </div>

        <div class="privacy-policy-hero__media">
          <?php if ($privacy_hero_image !== '') : ?>
            <img src="<?php echo esc_url($privacy_hero_image); ?>" alt="<?php esc_attr_e('LED mirror privacy policy hero image', 'mirrorcraft'); ?>" loading="eager" decoding="async">
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="section privacy-policy-body">
      <div class="shell privacy-policy-body__shell">
        <div class="privacy-policy-intro">
          <div class="privacy-policy-intro__copy">
            <p><?php esc_html_e('At OJMIRROR, we respect your privacy and are committed to protecting the personal information you provide when visiting our website, submitting inquiries, or doing business with us.', 'mirrorcraft'); ?></p>
            <p><?php esc_html_e('This Privacy Policy explains what information we collect, how we use it, and how we protect it.', 'mirrorcraft'); ?></p>
          </div>
        </div>

        <div class="privacy-policy-sections">
          <?php foreach ($privacy_sections as $section) : ?>
            <article class="privacy-policy-row">
              <div class="privacy-policy-row__side">
                <span class="privacy-policy-row__icon" aria-hidden="true"><?php mirrorcraft_render_privacy_policy_icon($section['slug']); ?></span>
                <div class="privacy-policy-row__heading">
                  <span class="privacy-policy-row__number"><?php echo esc_html($section['number']); ?></span>
                  <h2><?php echo esc_html($section['title']); ?></h2>
                </div>
              </div>

              <div class="privacy-policy-row__content">
                <?php foreach ($section['content'] as $paragraph) : ?>
                  <p><?php echo esc_html($paragraph); ?></p>
                <?php endforeach; ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>

        <section class="privacy-policy-contact">
          <div class="privacy-policy-contact__brand">
            <h2><?php esc_html_e('OJMIRROR', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('Reflecting excellence for LED mirrors, mirror cabinets, and global B2B supply support.', 'mirrorcraft'); ?></p>
          </div>

          <div class="privacy-policy-contact__grid">
            <div class="privacy-policy-contact__item">
              <span class="privacy-policy-contact__label"><?php esc_html_e('Email', 'mirrorcraft'); ?></span>
              <a href="mailto:<?php echo antispambot(esc_attr($privacy_email)); ?>"><?php echo esc_html($privacy_email); ?></a>
            </div>
            <div class="privacy-policy-contact__item">
              <span class="privacy-policy-contact__label"><?php esc_html_e('Phone', 'mirrorcraft'); ?></span>
              <span><?php echo esc_html($privacy_phone); ?></span>
            </div>
            <div class="privacy-policy-contact__item">
              <span class="privacy-policy-contact__label"><?php esc_html_e('Address', 'mirrorcraft'); ?></span>
              <span><?php echo esc_html($privacy_address); ?></span>
            </div>
            <div class="privacy-policy-contact__item">
              <span class="privacy-policy-contact__label"><?php esc_html_e('Website', 'mirrorcraft'); ?></span>
              <a href="<?php echo esc_url($privacy_website); ?>"><?php echo esc_html($privacy_website_label); ?></a>
            </div>
          </div>
        </section>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
