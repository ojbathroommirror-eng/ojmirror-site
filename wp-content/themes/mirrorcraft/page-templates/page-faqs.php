<?php
/*
Template Name: FAQ Page
*/

if (!function_exists('mirrorcraft_render_faq_hub_icon')) {
  function mirrorcraft_render_faq_hub_icon($slug) {
    switch ($slug) {
      case 'company':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 21V5.5A1.5 1.5 0 0 1 5.5 4h7A1.5 1.5 0 0 1 14 5.5V8h4.5A1.5 1.5 0 0 1 20 9.5V21H4Zm2-2h2v-2H6v2Zm0-4h2v-2H6v2Zm0-4h2V9H6v2Zm4 8h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0-4h2V9h-2v2Zm4 8h4V10h-4v9Z"/>
        </svg>
        <?php
        break;
      case 'customization':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 17.25V21h3.75l11-11-3.75-3.75-11 11Zm2.92 2.33H5v-.92l8.06-8.06.92.92-8.06 8.06ZM20.71 7.04a1 1 0 0 0 0-1.41L18.37 3.3a1 1 0 0 0-1.41 0l-1.59 1.59 3.75 3.75 1.59-1.6ZM7 4h5v2H7V4Zm-3 7h5v2H4v-2Zm9 6h7v2h-7v-2Z"/>
        </svg>
        <?php
        break;
      case 'quality':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 4 5v6c0 5 3.4 9.74 8 11 4.6-1.26 8-6 8-11V5l-8-3Zm0 17.87C8.6 18.76 6 14.73 6 11V6.36l6-2.25 6 2.25V11c0 3.73-2.6 7.76-6 8.87Zm-1.2-4.37-2.6-2.6 1.41-1.4 1.19 1.18 3.79-3.78 1.41 1.41-5.2 5.19Z"/>
        </svg>
        <?php
        break;
      case 'orders':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M19.14 12.94a7.96 7.96 0 0 0 .06-.94c0-.32-.02-.63-.06-.94l2.03-1.58a.5.5 0 0 0 .12-.64l-1.92-3.32a.5.5 0 0 0-.6-.22l-2.39.96a7.03 7.03 0 0 0-1.63-.94l-.36-2.54A.5.5 0 0 0 13.9 2h-3.8a.5.5 0 0 0-.49.42l-.36 2.54c-.58.22-1.12.53-1.63.94l-2.39-.96a.5.5 0 0 0-.6.22L2.71 8.48a.5.5 0 0 0 .12.64l2.03 1.58c-.04.31-.06.62-.06.94 0 .31.02.62.06.94L2.83 14.16a.5.5 0 0 0-.12.64l1.92 3.32c.13.22.39.31.6.22l2.39-.96c.51.41 1.05.72 1.63.94l.36 2.54c.04.24.25.42.49.42h3.8c.24 0 .45-.18.49-.42l.36-2.54c.58-.22 1.12-.53 1.63-.94l2.39.96c.22.09.47 0 .6-.22l1.92-3.32a.5.5 0 0 0-.12-.64l-2.03-1.58ZM12 15.5A3.5 3.5 0 1 1 12 8a3.5 3.5 0 0 1 0 7.5Z"/>
        </svg>
        <?php
        break;
      case 'shipping':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v2h2.59a2 2 0 0 1 1.7.95l1.41 2.35c.2.33.3.71.3 1.1V16a2 2 0 0 1-2 2h-1.17a3 3 0 0 1-5.66 0H9.83a3 3 0 0 1-5.66 0H3V6Zm2 10a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm0-6v3h4v-.42L19.58 10H17Z"/>
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
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3a8 8 0 0 0-8 8v3a2 2 0 0 0 2 2h1v-5H6v-1a6 6 0 1 1 12 0v1h-1v5h1a2 2 0 0 0 2-2v-3a8 8 0 0 0-8-8Zm-5 9h2v5H7v-5Zm8 0h2v5h-2v-5Zm-6 8h6v2H9v-2Z"/>
        </svg>
        <?php
        break;
      case 'shield':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 4 5v6c0 5 3.4 9.74 8 11 4.6-1.26 8-6 8-11V5l-8-3Zm0 17.87C8.6 18.76 6 14.73 6 11V6.36l6-2.25 6 2.25V11c0 3.73-2.6 7.76-6 8.87Zm1-11.87h-2v4l3.5 2.1 1-1.64-2.5-1.46V8Z"/>
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

$faq_quote_url   = mirrorcraft_link_by_slug('contact', '/contact/');
$faq_expert_url  = mirrorcraft_has_whatsapp_number() ? mirrorcraft_get_whatsapp_link() : $faq_quote_url;
$faq_expert_attr = mirrorcraft_has_whatsapp_number() ? ' target="_blank" rel="noopener noreferrer"' : '';
$faq_hero_image  = mirrorcraft_theme_image_url('hospitality-led-mirror-project.png');
$faq_cta_image   = mirrorcraft_theme_image_url('home-hero-banner-20260422.png');

if ($faq_hero_image === '') {
  $faq_hero_image = mirrorcraft_theme_image_url('home-hero-banner-20260422.png');
}

if ($faq_cta_image === '') {
  $faq_cta_image = mirrorcraft_theme_image_url('hospitality-led-mirror-project.png');
}

$faq_sections = array(
  array(
    'slug'  => 'company',
    'title' => __('Company & Capability', 'mirrorcraft'),
    'items' => array(
      array(
        'id'       => 'Q1',
        'question' => __('Are you a manufacturer or a trading company?', 'mirrorcraft'),
        'answer'   => __('We are a professional manufacturer focused on LED mirrors, mirror cabinets, and OEM / ODM support for global B2B buyers.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q2',
        'question' => __('What markets do you serve?', 'mirrorcraft'),
        'answer'   => __('We support hospitality, residential, commercial, healthcare, retail, and private-label projects across multiple export markets.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q3',
        'question' => __('Can you handle large-scale projects?', 'mirrorcraft'),
        'answer'   => __('Yes. We support bulk programs for hotels, apartments, real-estate developments, distributors, and branded sourcing routes.', 'mirrorcraft'),
      ),
    ),
  ),
  array(
    'slug'  => 'customization',
    'title' => __('Customization', 'mirrorcraft'),
    'items' => array(
      array(
        'id'       => 'Q4',
        'question' => __('Do you offer custom mirror designs?', 'mirrorcraft'),
        'answer'   => __('Yes. We support size, shape, frame, edge, lighting, packaging, and smart-feature customization for OEM and project orders.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q5',
        'question' => __('Can you develop products from our drawing or concept?', 'mirrorcraft'),
        'answer'   => __('Yes. We can review drawings, reference images, and samples, then organize a practical route for sampling and production.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q6',
        'question' => __('What is the MOQ for custom orders?', 'mirrorcraft'),
        'answer'   => __('MOQ depends on the product type, specifications, and packaging route. We confirm it case by case during quotation.', 'mirrorcraft'),
      ),
    ),
  ),
  array(
    'slug'  => 'quality',
    'title' => __('Product & Quality', 'mirrorcraft'),
    'items' => array(
      array(
        'id'       => 'Q7',
        'question' => __('What certifications can you support?', 'mirrorcraft'),
        'answer'   => __('We can discuss CE, UL / ETL, RoHS, IP rating, and other compliance directions according to the target market and product route.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q8',
        'question' => __('What is the typical lifespan of LED mirrors?', 'mirrorcraft'),
        'answer'   => __('Typical LED life ranges from about 30,000 to 50,000 hours, depending on component choice, usage frequency, and installation environment.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q9',
        'question' => __('Can you support high CRI lighting?', 'mirrorcraft'),
        'answer'   => __('Yes. We can support higher CRI options for applications that need better color rendering, such as makeup and premium bathroom use.', 'mirrorcraft'),
      ),
    ),
  ),
  array(
    'slug'  => 'orders',
    'title' => __('Orders & Production', 'mirrorcraft'),
    'items' => array(
      array(
        'id'       => 'Q10',
        'question' => __('What is your lead time?', 'mirrorcraft'),
        'answer'   => __('Samples usually take around 7 to 15 days, while bulk production typically ranges from 25 to 45 days depending on quantity and complexity.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q11',
        'question' => __('Can I get samples before a bulk order?', 'mirrorcraft'),
        'answer'   => __('Yes. Sample review is available to confirm finish, lighting, structure, and installation fit before mass production.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q12',
        'question' => __('How do you ensure product quality?', 'mirrorcraft'),
        'answer'   => __('We run QC checkpoints covering raw materials, in-line production checks, function testing, and final inspection before shipment.', 'mirrorcraft'),
      ),
    ),
  ),
  array(
    'slug'  => 'shipping',
    'title' => __('Shipping & Packaging', 'mirrorcraft'),
    'items' => array(
      array(
        'id'       => 'Q13',
        'question' => __('How are the mirrors packaged?', 'mirrorcraft'),
        'answer'   => __('We use export packaging that can include foam protection, carton box, corner protection, palletization, or wooden-crate solutions where required.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q14',
        'question' => __('Do you support international shipping?', 'mirrorcraft'),
        'answer'   => __('Yes. We support sea, air, and express routes depending on program urgency, shipment size, and destination market.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q15',
        'question' => __('Can you handle drop shipping or mixed containers?', 'mirrorcraft'),
        'answer'   => __('We can discuss flexible logistics routes for B2B clients, including mixed programs and project-based shipment planning.', 'mirrorcraft'),
      ),
    ),
  ),
  array(
    'slug'  => 'pricing',
    'title' => __('Pricing & Payment', 'mirrorcraft'),
    'items' => array(
      array(
        'id'       => 'Q16',
        'question' => __('How do I get a quote?', 'mirrorcraft'),
        'answer'   => __('Send us your size, quantity, application, target market, and custom requirements, and we will prepare a quotation path for you.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q17',
        'question' => __('What payment terms do you accept?', 'mirrorcraft'),
        'answer'   => __('Typical terms are T/T with 30% deposit and 70% balance before shipment. Other arrangements can be discussed for approved programs.', 'mirrorcraft'),
      ),
    ),
  ),
  array(
    'slug'  => 'support',
    'title' => __('After-Sales & Support', 'mirrorcraft'),
    'items' => array(
      array(
        'id'       => 'Q18',
        'question' => __('What warranty support do you offer?', 'mirrorcraft'),
        'answer'   => __('Warranty coverage depends on the confirmed product route and project standard. We review each case according to the approved order scope.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q19',
        'question' => __('What if products are damaged during shipping?', 'mirrorcraft'),
        'answer'   => __('We review claims with photos, labels, and quantity records, then support practical solutions such as parts, remake, or compensation according to the case.', 'mirrorcraft'),
      ),
      array(
        'id'       => 'Q20',
        'question' => __('Do you provide technical support after delivery?', 'mirrorcraft'),
        'answer'   => __('Yes. We can support installation guidance, technical clarification, parts follow-up, and after-sales coordination after shipment.', 'mirrorcraft'),
      ),
    ),
  ),
);

$faq_advantages = array(
  array(
    'slug'   => 'company',
    'title'  => __('Why Choose Us', 'mirrorcraft'),
    'points' => array(
      __('15+ years manufacturing experience', 'mirrorcraft'),
      __('Stable quality and practical OEM / ODM support', 'mirrorcraft'),
      __('Flexible lead time and export follow-through', 'mirrorcraft'),
      __('Low breakage packaging routes for B2B orders', 'mirrorcraft'),
    ),
  ),
  array(
    'slug'   => 'shield',
    'title'  => __('Risk-Free Guarantee', 'mirrorcraft'),
    'points' => array(
      __('2-5 years warranty by product route', 'mirrorcraft'),
      __('Damage compensation handled on verified claims', 'mirrorcraft'),
      __('QC checkpoints before every shipment', 'mirrorcraft'),
      __('Fast after-sales response from the support team', 'mirrorcraft'),
    ),
  ),
);

$faq_cta_points = array(
  __('Fast response within 12 hours', 'mirrorcraft'),
  __('Global shipping support', 'mirrorcraft'),
  __('Professional B2B mirror team', 'mirrorcraft'),
);
?>
<main id="site-main" class="site-main page-shell faq-hub-page" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="section faq-hub-hero">
      <div class="shell faq-hub-hero__shell">
        <div class="faq-hub-hero__copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="faq-hub-hero__eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
          <h1>
            <span class="faq-hub-hero__title-line"><?php esc_html_e('Answers to Everything', 'mirrorcraft'); ?></span>
            <span class="faq-hub-hero__title-line"><?php esc_html_e('You Need to Know', 'mirrorcraft'); ?></span>
          </h1>
          <p class="faq-hub-hero__lead"><?php esc_html_e('Professional LED mirror manufacturer for global B2B partners, OEM / ODM programs, and project-based sourcing routes.', 'mirrorcraft'); ?></p>
          <div class="faq-hub-hero__actions">
            <a class="button button-primary" href="<?php echo esc_url($faq_quote_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
            <a class="button button-secondary" href="<?php echo esc_url($faq_expert_url); ?>"<?php echo $faq_expert_attr; ?>><?php esc_html_e('Talk to Expert', 'mirrorcraft'); ?></a>
          </div>
        </div>

        <div class="faq-hub-hero__media">
          <?php if ($faq_hero_image !== '') : ?>
            <img src="<?php echo esc_url($faq_hero_image); ?>" alt="<?php esc_attr_e('LED mirror hero reference', 'mirrorcraft'); ?>" loading="eager" decoding="async">
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="section faq-hub-topics">
      <div class="shell faq-hub-topics__shell">
        <?php foreach ($faq_sections as $section) : ?>
          <a class="faq-hub-topic" href="#faq-<?php echo esc_attr($section['slug']); ?>">
            <span class="faq-hub-topic__icon" aria-hidden="true"><?php mirrorcraft_render_faq_hub_icon($section['slug']); ?></span>
            <span class="faq-hub-topic__label"><?php echo esc_html($section['title']); ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section faq-hub-sections">
      <div class="shell">
        <div class="faq-hub-heading">
          <p class="eyebrow"><?php esc_html_e('FAQ Directory', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Frequently Asked Questions', 'mirrorcraft'); ?></h2>
        </div>

        <div class="faq-hub-grid">
          <?php foreach ($faq_sections as $section) : ?>
            <article class="faq-hub-card" id="faq-<?php echo esc_attr($section['slug']); ?>">
              <header class="faq-hub-card__header">
                <span class="faq-hub-card__icon" aria-hidden="true"><?php mirrorcraft_render_faq_hub_icon($section['slug']); ?></span>
                <h3><?php echo esc_html($section['title']); ?></h3>
              </header>

              <div class="faq-hub-card__body">
                <?php foreach ($section['items'] as $item) : ?>
                  <div class="faq-hub-qa">
                    <h4><span><?php echo esc_html($item['id']); ?>:</span> <?php echo esc_html($item['question']); ?></h4>
                    <p><?php echo esc_html($item['answer']); ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            </article>
          <?php endforeach; ?>

          <?php foreach ($faq_advantages as $block) : ?>
            <article class="faq-hub-card faq-hub-card--checks">
              <header class="faq-hub-card__header">
                <span class="faq-hub-card__icon" aria-hidden="true"><?php mirrorcraft_render_faq_hub_icon($block['slug']); ?></span>
                <h3><?php echo esc_html($block['title']); ?></h3>
              </header>
              <ul class="faq-hub-checks">
                <?php foreach ($block['points'] as $point) : ?>
                  <li><?php echo esc_html($point); ?></li>
                <?php endforeach; ?>
              </ul>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section faq-hub-cta">
      <div class="shell faq-hub-cta__shell">
        <div class="faq-hub-cta__media">
          <?php if ($faq_cta_image !== '') : ?>
            <img src="<?php echo esc_url($faq_cta_image); ?>" alt="<?php esc_attr_e('LED mirror project reference image', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
          <?php endif; ?>
        </div>

        <div class="faq-hub-cta__content">
          <p class="eyebrow"><?php esc_html_e('Still Have Questions?', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Our team is ready to help with practical product answers and fast support.', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('If you need help with custom size, certification direction, MOQ, packaging, or shipment planning, send the request and we will guide the next step clearly.', 'mirrorcraft'); ?></p>

          <div class="faq-hub-cta__actions">
            <a class="button button-primary" href="<?php echo esc_url($faq_quote_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
            <a class="button button-secondary" href="<?php echo esc_url($faq_quote_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
          </div>

          <ul class="faq-hub-cta__points">
            <?php foreach ($faq_cta_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
