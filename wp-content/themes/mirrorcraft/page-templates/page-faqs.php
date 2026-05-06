<?php
/*
Template Name: FAQ Page
*/

if (!function_exists('mirrorcraft_render_faq_b2b_icon')) {
  function mirrorcraft_render_faq_b2b_icon($slug) {
    switch ($slug) {
      case 'company':
      case 'manufacturing':
      case 'real-estate':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 21V5.5A1.5 1.5 0 0 1 5.5 4h8A1.5 1.5 0 0 1 15 5.5V8h3.5A1.5 1.5 0 0 1 20 9.5V21H4Zm2-2h2v-2H6v2Zm0-4h2v-2H6v2Zm0-4h2V9H6v2Zm4 8h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0-4h2V9h-2v2Zm4 8h4V10h-4v9Z"/>
        </svg>
        <?php
        break;
      case 'customization':
      case 'flexibility':
      case 'brand':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="m4 17.25 9.06-9.06 2.75 2.75L6.75 20H4v-2.75Zm10.76-8.17 1.41-1.41a1 1 0 0 0 0-1.42l-1.83-1.83a1 1 0 0 0-1.42 0l-1.41 1.41 3.25 3.25ZM14 4h6v2h-6V4Zm2 14h4v2h-4v-2Z"/>
        </svg>
        <?php
        break;
      case 'samples':
      case 'shipping':
      case 'distributor':
      case 'export':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 7.25 12 3l9 4.25v9.5L12 21l-9-4.25v-9.5Zm2 .94v7.3l6 2.83v-7.3L5 8.19Zm8 10.13 6-2.83v-7.3l-6 2.83v7.3Zm-1-9.04 5.87-2.78L12 3.78 6.13 6.5 12 9.28Z"/>
        </svg>
        <?php
        break;
      case 'quality':
      case 'trust':
      case 'warranty':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 4 5v6c0 5.25 3.4 9.88 8 11 4.6-1.12 8-5.75 8-11V5l-8-3Zm0 17.87C8.73 18.9 6 15.02 6 11V6.36l6-2.25 6 2.25V11c0 4.02-2.73 7.9-6 8.87Zm-1.28-4.19-2.5-2.5 1.41-1.41 1.09 1.09 3.65-3.65 1.41 1.41-5.06 5.06Z"/>
        </svg>
        <?php
        break;
      case 'production':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3a9 9 0 1 0 9 9 9.01 9.01 0 0 0-9-9Zm0 16a7 7 0 1 1 7-7 7.01 7.01 0 0 1-7 7Zm1-11h-2v5.41l3.2 3.2 1.41-1.41-2.61-2.62V8Z"/>
        </svg>
        <?php
        break;
      case 'pricing':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm1 15.93V19h-2v-1.08A4 4 0 0 1 8 14h2a2 2 0 1 0 2-2 4 4 0 1 1 1-7.87V3h2v1.13A4 4 0 0 1 16 8h-2a2 2 0 1 0-2 2 4 4 0 0 1 1 7.93Z"/>
        </svg>
        <?php
        break;
      case 'support':
      case 'response':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3a8 8 0 0 0-8 8v3a2 2 0 0 0 2 2h1v-5H6v-1a6 6 0 1 1 12 0v1h-1v5h1a2 2 0 0 0 2-2v-3a8 8 0 0 0-8-8Zm-5 9h2v5H7v-5Zm8 0h2v5h-2v-5Zm-6 8h6v2H9v-2Z"/>
        </svg>
        <?php
        break;
      case 'global':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10.01 10.01 0 0 0 12 2Zm6.93 9h-3.08a15.3 15.3 0 0 0-1.07-4.3A8.04 8.04 0 0 1 18.93 11ZM12 4.06c.8 1.09 1.87 3.13 2.32 6.94H9.68C10.13 7.19 11.2 5.15 12 4.06ZM4.07 13h3.08a15.3 15.3 0 0 0 1.07 4.3A8.04 8.04 0 0 1 4.07 13Zm3.08-2H4.07a8.04 8.04 0 0 1 4.15-4.3A15.3 15.3 0 0 0 7.15 11Zm4.85 8.94c-.8-1.09-1.87-3.13-2.32-6.94h4.64c-.45 3.81-1.52 5.85-2.32 6.94ZM14.78 17.3c.48-1.06.84-2.49 1.07-4.3h3.08a8.04 8.04 0 0 1-4.15 4.3Z"/>
        </svg>
        <?php
        break;
      case 'team':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M16 11a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm-8 1a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm8 1c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4Zm-8 1c-2.33 0-7 1.17-7 3.5V19h5v-2c0-1.01.47-1.95 1.35-2.75A6.89 6.89 0 0 0 8 14Z"/>
        </svg>
        <?php
        break;
      case 'claims':
      case 'inspection':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M6 3h9l5 5v13a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm8 1.5V9h4.5L14 4.5ZM8 12h8v1.8H8V12Zm0 3.5h5v1.8H8v-1.8Z"/>
          <path fill="currentColor" d="m15.21 14.79-1.42-1.42-2.18 2.18-.97-.97-1.41 1.41 2.38 2.38 3.6-3.58Z"/>
        </svg>
        <?php
        break;
      case 'hotel':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 11V5h5a3 3 0 0 1 3 3v3h8a2 2 0 0 1 2 2v6h-2v-2H4v2H2v-9h2Zm2-4v4h4V8a1 1 0 0 0-1-1H6Z"/>
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

$faq_quote_url    = mirrorcraft_link_by_slug('contact', '/contact/');
$faq_whatsapp_url = mirrorcraft_has_whatsapp_number() ? mirrorcraft_get_whatsapp_link() : $faq_quote_url;
$faq_whatsapp_attr = mirrorcraft_has_whatsapp_number() ? ' target="_blank" rel="noopener noreferrer"' : '';
$faq_chat_label   = mirrorcraft_has_whatsapp_number() ? __('Chat on WhatsApp', 'mirrorcraft') : __('Talk to an Expert', 'mirrorcraft');

$faq_hero_primary_image = mirrorcraft_theme_image_optimized_url('home-hero-banner-20260423c.jpg');
$faq_hero_quality_image = mirrorcraft_theme_image_optimized_url('quality-control-ref/quality-control.png');
$faq_hero_package_image = mirrorcraft_theme_image_optimized_url('quality-control-ref/corner-protection.png');
$faq_hero_projects_image = mirrorcraft_theme_image_optimized_url('quality-control-ref/pallet-loading.png');
$faq_cta_image = mirrorcraft_theme_image_optimized_url('decorative-mirrors/cta.png');

if ($faq_hero_primary_image === '') {
  $faq_hero_primary_image = mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png');
}

if ($faq_cta_image === '') {
  $faq_cta_image = mirrorcraft_theme_image_optimized_url('full-length-solution-hotel.png');
}

$faq_topics = array(
  array(
    'slug'   => 'company',
    'label'  => __('Company\'s Capability', 'mirrorcraft'),
    'icon'   => 'company',
    'anchor' => 'faq-01',
  ),
  array(
    'slug'   => 'customization',
    'label'  => __('OEM / ODM Customization', 'mirrorcraft'),
    'icon'   => 'customization',
    'anchor' => 'faq-02',
  ),
  array(
    'slug'   => 'samples',
    'label'  => __('Samples & MOQ', 'mirrorcraft'),
    'icon'   => 'samples',
    'anchor' => 'faq-04',
  ),
  array(
    'slug'   => 'quality',
    'label'  => __('Quality & Certification', 'mirrorcraft'),
    'icon'   => 'quality',
    'anchor' => 'faq-05',
  ),
  array(
    'slug'   => 'production',
    'label'  => __('Lead Time & Production', 'mirrorcraft'),
    'icon'   => 'production',
    'anchor' => 'faq-07',
  ),
  array(
    'slug'   => 'shipping',
    'label'  => __('Packaging & Shipping', 'mirrorcraft'),
    'icon'   => 'shipping',
    'anchor' => 'faq-08',
  ),
  array(
    'slug'   => 'pricing',
    'label'  => __('Pricing & Payment', 'mirrorcraft'),
    'icon'   => 'pricing',
    'anchor' => 'faq-09',
  ),
  array(
    'slug'   => 'support',
    'label'  => __('Warranty & After-Sales', 'mirrorcraft'),
    'icon'   => 'support',
    'anchor' => 'faq-10',
  ),
);

$faq_highlights = array(
  array(
    'icon'  => 'response',
    'title' => __('Fast response', 'mirrorcraft'),
    'text'  => __('within 12 hours', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'global',
    'title' => __('Global shipping', 'mirrorcraft'),
    'text'  => __('support', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'team',
    'title' => __('Professional B2B', 'mirrorcraft'),
    'text'  => __('mirror team', 'mirrorcraft'),
  ),
);

$faq_media_cards = array(
  array(
    'icon'  => 'quality',
    'label' => __('Quality Control', 'mirrorcraft'),
    'text'  => __('Checkpoint-based inspection before shipment', 'mirrorcraft'),
    'image' => $faq_hero_quality_image,
  ),
  array(
    'icon'  => 'shipping',
    'label' => __('Secure Packaging', 'mirrorcraft'),
    'text'  => __('Foam, corner, carton, and pallet options', 'mirrorcraft'),
    'image' => $faq_hero_package_image,
  ),
  array(
    'icon'  => 'global',
    'label' => __('Global Projects', 'mirrorcraft'),
    'text'  => __('Export programs for hotels, distributors, and developers', 'mirrorcraft'),
    'image' => $faq_hero_projects_image,
  ),
);

$faq_items = array(
  array(
    'id'       => 'faq-01',
    'number'   => '01',
    'question' => __('Are you a manufacturer or a trading company?', 'mirrorcraft'),
    'answer'   => __('We are a professional LED mirror manufacturer with our own factory, engineering support, production workflow, and QC team, serving global B2B buyers directly.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-02',
    'number'   => '02',
    'question' => __('Do you offer OEM / ODM customization?', 'mirrorcraft'),
    'answer'   => __('Yes. We support OEM / ODM customization for mirror size, shape, frame, lighting, controls, logo, packaging, and private-label sourcing programs.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-03',
    'number'   => '03',
    'question' => __('Can you develop mirrors from drawings or concepts?', 'mirrorcraft'),
    'answer'   => __('Yes. You can send drawings, reference photos, target specifications, or project ideas, and our team can evaluate feasibility, sampling, and mass-production routing.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-04',
    'number'   => '04',
    'question' => __('What is the MOQ for custom orders?', 'mirrorcraft'),
    'answer'   => __('MOQ depends on the product structure, finish, electronics, and packaging route. We confirm the most practical MOQ after reviewing your specification and target market.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-05',
    'number'   => '05',
    'question' => __('What certifications can you support?', 'mirrorcraft'),
    'answer'   => __('We can discuss CE, UL / ETL, RoHS, IP rating, and market-specific compliance support based on the product route and destination requirements.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-06',
    'number'   => '06',
    'question' => __('Can I get a sample before a bulk order?', 'mirrorcraft'),
    'answer'   => __('Yes. Sample development is available so you can review structure, finish, lighting performance, installation details, and packaging before confirming a larger order.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-07',
    'number'   => '07',
    'question' => __('What is your typical lead time?', 'mirrorcraft'),
    'answer'   => __('Sample lead time is commonly around 7 to 15 days, while bulk production usually takes 25 to 45 days depending on quantity, customization level, and component availability.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-08',
    'number'   => '08',
    'question' => __('How are the mirrors packaged for export?', 'mirrorcraft'),
    'answer'   => __('We use export-ready protection routes that may include foam lining, corner protection, strong carton packing, pallet loading, or wooden-crate reinforcement when needed.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-09',
    'number'   => '09',
    'question' => __('What payment terms do you accept?', 'mirrorcraft'),
    'answer'   => __('Typical terms are T/T with a deposit before production and the balance before shipment. Specific payment arrangements can be discussed for approved programs.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-10',
    'number'   => '10',
    'question' => __('What warranty support do you offer?', 'mirrorcraft'),
    'answer'   => __('Warranty coverage usually ranges from 2 to 5 years depending on the mirror type, electrical configuration, and agreed product specification.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-11',
    'number'   => '11',
    'question' => __('How do you ensure product quality?', 'mirrorcraft'),
    'answer'   => __('We follow QC checkpoints from incoming materials to in-process assembly, lighting function tests, appearance review, and final packing inspection before shipment.', 'mirrorcraft'),
  ),
  array(
    'id'       => 'faq-12',
    'number'   => '12',
    'question' => __('Do you support global shipping?', 'mirrorcraft'),
    'answer'   => __('Yes. We support export shipping arrangements for different markets and can coordinate sea, air, or express delivery based on project scale and urgency.', 'mirrorcraft'),
  ),
);

$faq_advantages = array(
  array(
    'icon'  => 'manufacturing',
    'title' => __('Manufacturing Excellence', 'mirrorcraft'),
    'text'  => __('10+ years specializing in LED mirrors with advanced equipment and a skilled production team.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'flexibility',
    'title' => __('OEM / ODM Flexibility', 'mirrorcraft'),
    'text'  => __('Flexible customization in size, design, functions, and packaging to match your brand and market.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'trust',
    'title' => __('Quality You Can Trust', 'mirrorcraft'),
    'text'  => __('Strict QC from raw materials to final inspection to ensure stable quality and long-term cooperation.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'export',
    'title' => __('Export-Ready Solutions', 'mirrorcraft'),
    'text'  => __('Professional export packaging solutions to ensure safe delivery and reduce transport risks.', 'mirrorcraft'),
  ),
);

$faq_support_blocks = array(
  array(
    'icon'  => 'warranty',
    'title' => __('2-5 Years Warranty', 'mirrorcraft'),
    'text'  => __('Different warranty options based on product types and project needs.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'claims',
    'title' => __('Verified Damage Claims', 'mirrorcraft'),
    'text'  => __('Clear claims process and support to protect your business interests.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'inspection',
    'title' => __('QC Before Shipment', 'mirrorcraft'),
    'text'  => __('100% inspection for appearance, functions and packaging before shipment.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'response',
    'title' => __('Fast After-Sales Response', 'mirrorcraft'),
    'text'  => __('Professional B2B service team responds quickly to solve your issues.', 'mirrorcraft'),
  ),
);

$faq_market_blocks = array(
  array(
    'icon'  => 'hotel',
    'title' => __('Hotels & Resorts', 'mirrorcraft'),
    'text'  => __('Custom solutions for hospitality projects worldwide.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'real-estate',
    'title' => __('Real Estate Projects', 'mirrorcraft'),
    'text'  => __('Reliable partner for apartments, villas and commercial projects.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'distributor',
    'title' => __('Distributors & Wholesalers', 'mirrorcraft'),
    'text'  => __('Competitive pricing and stable supply for long-term growth.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'brand',
    'title' => __('Custom Brand Programs', 'mirrorcraft'),
    'text'  => __('Private label, packaging and branding to strengthen your market position.', 'mirrorcraft'),
  ),
);
?>
<main id="site-main" class="site-main faq-b2b-page" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="section faq-b2b-hero">
      <div class="shell">
        <div class="faq-b2b-hero__shell">
          <div class="faq-b2b-hero__copy">
            <p class="faq-b2b-kicker"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
            <h1>
              <span><?php esc_html_e('LED Mirror FAQ for', 'mirrorcraft'); ?></span>
              <span><?php esc_html_e('Global B2B Buyers', 'mirrorcraft'); ?></span>
            </h1>
            <span class="faq-b2b-title-accent" aria-hidden="true"></span>
            <p class="faq-b2b-hero__lead"><?php esc_html_e('Expert answers about OEM / ODM customization, MOQ, certifications, packaging, lead time, warranty, and project-based sourcing.', 'mirrorcraft'); ?></p>

            <div class="faq-b2b-hero__actions">
              <div class="faq-b2b-hero__action-row">
                <a class="faq-b2b-button faq-b2b-button--primary" href="<?php echo esc_url($faq_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                <a class="faq-b2b-button faq-b2b-button--secondary" href="<?php echo esc_url($faq_quote_url); ?>"><?php esc_html_e('Send Project Requirements', 'mirrorcraft'); ?></a>
              </div>
              <a class="faq-b2b-button faq-b2b-button--whatsapp" href="<?php echo esc_url($faq_whatsapp_url); ?>"<?php echo $faq_whatsapp_attr; ?>><?php echo esc_html($faq_chat_label); ?></a>
            </div>

            <ul class="faq-b2b-hero__facts">
              <?php foreach ($faq_highlights as $highlight) : ?>
                <li>
                  <span class="faq-b2b-hero__fact-icon" aria-hidden="true"><?php mirrorcraft_render_faq_b2b_icon($highlight['icon']); ?></span>
                  <span class="faq-b2b-hero__fact-copy">
                    <strong><?php echo esc_html($highlight['title']); ?></strong>
                    <span><?php echo esc_html($highlight['text']); ?></span>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="faq-b2b-hero__media">
            <figure class="faq-b2b-hero__primary">
              <?php if ($faq_hero_primary_image !== '') : ?>
                <img src="<?php echo esc_url($faq_hero_primary_image); ?>" alt="<?php esc_attr_e('LED bathroom mirror showcase', 'mirrorcraft'); ?>" loading="eager" fetchpriority="high" decoding="async">
              <?php endif; ?>
            </figure>

            <div class="faq-b2b-hero__stack">
              <?php foreach ($faq_media_cards as $card) : ?>
                <article class="faq-b2b-media-card">
                  <?php if (!empty($card['image'])) : ?>
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['label']); ?>" loading="lazy" decoding="async">
                  <?php endif; ?>
                  <div class="faq-b2b-media-card__overlay">
                    <span class="faq-b2b-media-card__icon" aria-hidden="true"><?php mirrorcraft_render_faq_b2b_icon($card['icon']); ?></span>
                    <strong><?php echo esc_html($card['label']); ?></strong>
                    <span><?php echo esc_html($card['text']); ?></span>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section faq-b2b-topics">
      <div class="shell">
        <div class="faq-b2b-topic-strip">
          <?php foreach ($faq_topics as $topic_index => $topic) : ?>
            <a class="faq-b2b-topic-chip<?php echo 0 === $topic_index ? ' is-active' : ''; ?>" href="#<?php echo esc_attr($topic['anchor']); ?>">
              <span class="faq-b2b-topic-chip__icon" aria-hidden="true"><?php mirrorcraft_render_faq_b2b_icon($topic['icon']); ?></span>
              <span><?php echo esc_html($topic['label']); ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section faq-b2b-main">
      <div class="shell faq-b2b-main__shell">
        <aside class="faq-b2b-directory">
          <div class="faq-b2b-directory__card">
            <p class="faq-b2b-card-eyebrow"><?php esc_html_e('FAQ Directory', 'mirrorcraft'); ?></p>
            <ul class="faq-b2b-directory__list">
              <?php foreach ($faq_topics as $topic_index => $topic) : ?>
                <li>
                  <a class="<?php echo 0 === $topic_index ? 'is-active' : ''; ?>" href="#<?php echo esc_attr($topic['anchor']); ?>">
                    <span class="faq-b2b-directory__icon" aria-hidden="true"><?php mirrorcraft_render_faq_b2b_icon($topic['icon']); ?></span>
                    <span><?php echo esc_html($topic['label']); ?></span>
                    <span class="faq-b2b-directory__chevron" aria-hidden="true">&rsaquo;</span>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>

            <div class="faq-b2b-directory__help">
              <p><?php esc_html_e('Can\'t find the answer you need? Our experts are here to help.', 'mirrorcraft'); ?></p>
              <a class="faq-b2b-link-button" href="<?php echo esc_url($faq_whatsapp_url); ?>"<?php echo $faq_whatsapp_attr; ?>><?php esc_html_e('Talk to an Expert', 'mirrorcraft'); ?></a>
            </div>
          </div>
        </aside>

        <div class="faq-b2b-faq-card">
          <div class="faq-b2b-section-head faq-b2b-section-head--left">
            <h2><?php esc_html_e('Frequently Asked Questions', 'mirrorcraft'); ?></h2>
          </div>

          <div class="faq-b2b-accordion">
            <?php foreach ($faq_items as $index => $item) : ?>
              <?php $is_open = 0 === $index; ?>
              <article class="faq-b2b-question" id="<?php echo esc_attr($item['id']); ?>">
                <button
                  class="faq-b2b-trigger"
                  type="button"
                  aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
                  aria-controls="<?php echo esc_attr($item['id']); ?>-panel"
                  data-faq-trigger
                >
                  <span class="faq-b2b-question__number"><?php echo esc_html($item['number']); ?></span>
                  <span class="faq-b2b-question__text"><?php echo esc_html($item['question']); ?></span>
                  <span class="faq-b2b-symbol" aria-hidden="true"></span>
                </button>

                <div id="<?php echo esc_attr($item['id']); ?>-panel" class="faq-b2b-panel"<?php echo $is_open ? '' : ' hidden'; ?>>
                  <p><?php echo esc_html($item['answer']); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section faq-b2b-feature-section faq-b2b-feature-section--primary">
      <div class="shell">
        <div class="faq-b2b-section-head">
          <h2><?php esc_html_e('Why B2B Buyers Choose OJMIRROR', 'mirrorcraft'); ?></h2>
          <span class="faq-b2b-title-accent faq-b2b-title-accent--center" aria-hidden="true"></span>
        </div>

        <div class="faq-b2b-feature-grid">
          <?php foreach ($faq_advantages as $item) : ?>
            <article class="faq-b2b-feature-card">
              <span class="faq-b2b-feature-card__icon" aria-hidden="true"><?php mirrorcraft_render_faq_b2b_icon($item['icon']); ?></span>
              <h3><?php echo esc_html($item['title']); ?></h3>
              <p><?php echo esc_html($item['text']); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section faq-b2b-feature-section faq-b2b-feature-section--compact faq-b2b-feature-section--secondary">
      <div class="shell">
        <div class="faq-b2b-section-head">
          <h2><?php esc_html_e('Risk-Free Support', 'mirrorcraft'); ?></h2>
          <span class="faq-b2b-title-accent faq-b2b-title-accent--center" aria-hidden="true"></span>
        </div>

        <div class="faq-b2b-feature-grid faq-b2b-feature-grid--compact">
          <?php foreach ($faq_support_blocks as $item) : ?>
            <article class="faq-b2b-feature-card faq-b2b-feature-card--compact">
              <span class="faq-b2b-feature-card__icon" aria-hidden="true"><?php mirrorcraft_render_faq_b2b_icon($item['icon']); ?></span>
              <h3><?php echo esc_html($item['title']); ?></h3>
              <p><?php echo esc_html($item['text']); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section faq-b2b-feature-section faq-b2b-feature-section--compact faq-b2b-feature-section--markets">
      <div class="shell">
        <div class="faq-b2b-section-head">
          <h2><?php esc_html_e('Ideal for Hotels, Real Estate, Distributors & Custom Programs', 'mirrorcraft'); ?></h2>
          <span class="faq-b2b-title-accent faq-b2b-title-accent--center" aria-hidden="true"></span>
        </div>

        <div class="faq-b2b-feature-grid faq-b2b-feature-grid--compact">
          <?php foreach ($faq_market_blocks as $item) : ?>
            <article class="faq-b2b-feature-card faq-b2b-feature-card--compact">
              <span class="faq-b2b-feature-card__icon" aria-hidden="true"><?php mirrorcraft_render_faq_b2b_icon($item['icon']); ?></span>
              <h3><?php echo esc_html($item['title']); ?></h3>
              <p><?php echo esc_html($item['text']); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section faq-b2b-cta">
      <div class="shell">
        <div class="faq-b2b-cta__shell">
          <div class="faq-b2b-cta__content">
            <div class="faq-b2b-cta__intro">
              <h2><?php esc_html_e('Still Have Questions?', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Send us your size, quantity, drawings, certification needs, and target market. We will provide the best solution and quote for your project.', 'mirrorcraft'); ?></p>
            </div>

            <div class="faq-b2b-cta__action-pane">
              <div class="faq-b2b-cta__actions">
                <a class="faq-b2b-button faq-b2b-button--primary" href="<?php echo esc_url($faq_quote_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
                <a class="faq-b2b-button faq-b2b-button--dark" href="<?php echo esc_url($faq_whatsapp_url); ?>"<?php echo $faq_whatsapp_attr; ?>><?php esc_html_e('Talk to Expert', 'mirrorcraft'); ?></a>
              </div>

              <div class="faq-b2b-cta__meta">
                <span><?php esc_html_e('Quick Quote Within 12 Hours', 'mirrorcraft'); ?></span>
                <span><?php esc_html_e('100% Confidential', 'mirrorcraft'); ?></span>
              </div>
            </div>
          </div>

          <div class="faq-b2b-cta__media">
            <?php if ($faq_cta_image !== '') : ?>
              <img src="<?php echo esc_url($faq_cta_image); ?>" alt="<?php esc_attr_e('Decorative mirror scene', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
