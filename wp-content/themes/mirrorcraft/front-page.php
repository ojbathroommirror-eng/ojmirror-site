<?php
get_header();

$product_routes = mirrorcraft_get_product_family_cards();
$application_cards = mirrorcraft_get_application_cards();
$process_steps = mirrorcraft_get_process_steps();
$hero_image = mirrorcraft_theme_image_url('home-hero-banner.png');

if (!$hero_image) {
  $hero_image = mirrorcraft_get_active_hero_image_url();
}

$hero_image_alt = __('Custom LED mirror product display for hospitality and residential buyers', 'mirrorcraft');
$contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
$products_url = mirrorcraft_link_by_slug('products', '/products/');
$applications_url = mirrorcraft_link_by_slug('applications', '/applications/');
$about_url = mirrorcraft_link_by_slug('about', '/about/');
$manufacturing_url = mirrorcraft_link_by_slug('manufacturing', '/manufacturing/');
$resources_url = mirrorcraft_link_by_slug('resources', '/resources/');
$faq_url = mirrorcraft_link_by_slug('faq', '/faq/');
$latest_posts = get_posts(
  array(
    'post_type'           => 'post',
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => true,
  )
);

$smart_features = array(
  array(
    'title' => __('Smart lighting controls', 'mirrorcraft'),
    'text'  => __('Dimming, CCT control, anti-fog, touch sensors, and other popular feature combinations can be adapted to the target market and product route.', 'mirrorcraft'),
  ),
  array(
    'title' => __('Mirror and cabinet integration', 'mirrorcraft'),
    'text'  => __('Lighted medicine cabinets, framed mirrors, vanity formats, and custom configurations can be organized into one clearer sourcing path.', 'mirrorcraft'),
  ),
  array(
    'title' => __('OEM / ODM development', 'mirrorcraft'),
    'text'  => __('Private label packaging, spec-based development, and sample-first approval workflows help buyers move beyond standard catalog items.', 'mirrorcraft'),
  ),
);

$about_points = array(
  __('LED bathroom mirror and lighted medicine cabinet manufacturing support from China', 'mirrorcraft'),
  __('Product direction organized around category, market, and buyer use case', 'mirrorcraft'),
  __('OEM / ODM development with sample review before production approval', 'mirrorcraft'),
  __('Project, distribution, and private label orders handled with export follow-through', 'mirrorcraft'),
);

$testimonials = array(
  array(
    'quote' => __('The quotation discussion was much clearer because the team pushed us to define the right feature mix before sampling, not after.', 'mirrorcraft'),
    'name'  => __('Procurement Manager', 'mirrorcraft'),
    'role'  => __('Hospitality Buyer', 'mirrorcraft'),
  ),
  array(
    'quote' => __('We needed both mirror lighting and cabinet storage in one program. The development path stayed practical from sample to shipment.', 'mirrorcraft'),
    'name'  => __('Category Director', 'mirrorcraft'),
    'role'  => __('Residential / Multifamily Client', 'mirrorcraft'),
  ),
  array(
    'quote' => __('What worked best was the way custom requirements, packaging, and recurring order expectations were handled as one program.', 'mirrorcraft'),
    'name'  => __('Brand Owner', 'mirrorcraft'),
    'role'  => __('Private Label Buyer', 'mirrorcraft'),
  ),
);

$resource_links = array(
  array(
    'title' => __('Browse all product categories', 'mirrorcraft'),
    'text'  => __('Review OJMIRROR product routes for LED bathroom mirrors, lighted medicine cabinets, framed LED mirrors, vanity mirrors, and custom development.', 'mirrorcraft'),
    'url'   => $products_url,
  ),
  array(
    'title' => __('Read buyer FAQ', 'mirrorcraft'),
    'text'  => __('Use the FAQ page to answer common questions about customization, samples, certification support, and quote preparation.', 'mirrorcraft'),
    'url'   => $faq_url,
  ),
  array(
    'title' => __('Request catalog support', 'mirrorcraft'),
    'text'  => __('If you need a targeted product pack or a quicker shortlist, send the application and feature direction through the inquiry form.', 'mirrorcraft'),
    'url'   => $contact_url,
  ),
);
?>
<main id="site-main" class="site-main home-minimal" tabindex="-1">
  <section class="oj-hero oj-hero--immersive oj-section">
    <div class="oj-hero__backdrop" aria-hidden="true">
      <?php if ($hero_image) : ?>
        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($hero_image_alt); ?>" loading="eager" fetchpriority="high" width="1600" height="900">
      <?php endif; ?>
    </div>
    <div class="oj-hero__veil" aria-hidden="true"></div>
    <div class="shell oj-wrap">
      <div class="oj-hero__content">
        <p class="oj-eyebrow"><?php esc_html_e('LED mirror manufacturer in China', 'mirrorcraft'); ?></p>
        <h1>
          <span><?php esc_html_e('Wholesale LED Bathroom', 'mirrorcraft'); ?></span>
          <span><?php esc_html_e('Mirrors & Cabinets', 'mirrorcraft'); ?></span>
        </h1>
        <p class="oj-lead"><?php esc_html_e('OJMIRROR supports distributors, hospitality buyers, residential developers, and private-label programs with reliable LED mirror and cabinet manufacturing from China.', 'mirrorcraft'); ?></p>
        <div class="oj-actions">
          <a class="oj-button oj-button--primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
          <a class="oj-button oj-button--ghost" href="<?php echo esc_url($products_url); ?>"><?php esc_html_e('Browse Products', 'mirrorcraft'); ?></a>
        </div>
        <ul class="oj-proofline" aria-label="<?php esc_attr_e('Key capabilities', 'mirrorcraft'); ?>">
          <li><?php esc_html_e('15+ Years Supply Experience', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('OEM / ODM Support', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Global Project Delivery', 'mirrorcraft'); ?></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="oj-section oj-section--tight">
    <div class="shell oj-wrap oj-intro__inner">
      <p class="oj-section-label"><?php esc_html_e('Product categories', 'mirrorcraft'); ?></p>
      <p class="oj-intro__text"><?php esc_html_e('This homepage is structured like a sourcing site first: start from the product type, move into smart feature and customization logic, then narrow the best application route before requesting pricing.', 'mirrorcraft'); ?></p>
    </div>
  </section>

  <section class="oj-section" id="products">
    <div class="shell oj-wrap">
      <div class="oj-section-heading">
        <p class="oj-section-label"><?php esc_html_e('Featured Product Categories', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Choose the mirror family before you choose the exact spec.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="card-grid card-grid-three">
        <?php foreach ($product_routes as $route) : ?>
          <article class="feature-card product-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($route['image']); ?>" alt="<?php echo esc_attr($route['title']); ?>" width="1200" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($route['tag']); ?></p>
              <h3><?php echo esc_html($route['title']); ?></h3>
              <p><?php echo esc_html($route['text']); ?></p>
              <a class="text-link" href="<?php echo esc_url($route['link']); ?>"><?php esc_html_e('View product route', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="oj-section section-alt" id="smart-mirrors">
    <div class="shell oj-wrap">
      <div class="oj-section-heading">
        <p class="oj-section-label"><?php esc_html_e('Smart Mirrors', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Popular smart features and development routes buyers ask about first.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="card-grid card-grid-three">
        <?php foreach ($smart_features as $feature) : ?>
          <article class="statement-card">
            <h3><?php echo esc_html($feature['title']); ?></h3>
            <p><?php echo esc_html($feature['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="oj-section" id="customization">
    <div class="shell oj-wrap oj-grid oj-grid--split">
      <div>
        <p class="oj-section-label"><?php esc_html_e('Customized LED Mirrors & Cabinets', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Use a cleaner custom-development path for OEM, ODM, and private label orders.', 'mirrorcraft'); ?></h2>
      </div>
      <div>
        <ul class="oj-capability-list">
          <li><?php esc_html_e('Custom size, shape, frame, and mounting direction', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Feature planning for lighting, anti-fog, touch, and smart controls', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Branding, packaging, and retail / project documentation support', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Development workflow organized around sample confirmation before bulk production', 'mirrorcraft'); ?></li>
        </ul>
      </div>
    </div>
    <div class="shell oj-wrap">
      <ol class="oj-process-list">
        <?php foreach ($process_steps as $index => $step) : ?>
          <li>
            <p class="oj-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></p>
            <h3><?php echo esc_html($step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="oj-section section-alt" id="applications">
    <div class="shell oj-wrap">
      <div class="oj-section-heading">
        <p class="oj-section-label"><?php esc_html_e('Application and Industry', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Match the right mirror route to the space where it will actually be used.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="card-grid card-grid-three">
        <?php foreach ($application_cards as $application) : ?>
          <article class="feature-card sector-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($application['image']); ?>" alt="<?php echo esc_attr($application['tag']); ?>" width="1400" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($application['tag']); ?></p>
              <h3><?php echo esc_html($application['tag']); ?></h3>
              <p><?php echo esc_html(wp_trim_words($application['text'], 24, '...')); ?></p>
              <a class="text-link" href="<?php echo esc_url($application['link']); ?>"><?php esc_html_e('View market page', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="oj-inline-links">
        <a href="<?php echo esc_url($applications_url); ?>"><?php esc_html_e('Browse all application pages', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>

  <section class="oj-section" id="about">
    <div class="shell oj-wrap oj-grid oj-grid--split">
      <div>
        <p class="oj-section-label"><?php esc_html_e('About OJMIRROR', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('A sourcing site works better when the company story stays practical.', 'mirrorcraft'); ?></h2>
        <p class="oj-lead"><?php esc_html_e('OJMIRROR focuses on mirror and cabinet categories that B2B buyers actually compare, then supports the route with sampling, manufacturing, packaging, and export follow-through.', 'mirrorcraft'); ?></p>
        <div class="oj-actions">
          <a class="oj-button oj-button--primary" href="<?php echo esc_url($about_url); ?>"><?php esc_html_e('About OJMIRROR', 'mirrorcraft'); ?></a>
          <a class="oj-button oj-button--ghost" href="<?php echo esc_url($manufacturing_url); ?>"><?php esc_html_e('Manufacturing & QC', 'mirrorcraft'); ?></a>
        </div>
      </div>
      <div>
        <ul class="oj-capability-list">
          <?php foreach ($about_points as $point) : ?>
            <li><?php echo esc_html($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="oj-section section-alt" id="testimonials">
    <div class="shell oj-wrap">
      <div class="oj-section-heading">
        <p class="oj-section-label"><?php esc_html_e('Customer Feedback', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('What buyers tend to value most in mirror sourcing conversations.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="card-grid card-grid-three">
        <?php foreach ($testimonials as $item) : ?>
          <article class="entry-card">
            <p><?php echo esc_html($item['quote']); ?></p>
            <p class="feature-tag"><?php echo esc_html($item['name']); ?></p>
            <p class="form-note"><?php echo esc_html($item['role']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="oj-section" id="resources">
    <div class="shell oj-wrap">
      <div class="oj-section-heading">
        <p class="oj-section-label"><?php esc_html_e('Mirror Knowledge', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Use resources and articles to move faster toward the right quote brief.', 'mirrorcraft'); ?></h2>
      </div>

      <?php if (!empty($latest_posts)) : ?>
        <div class="post-grid">
          <?php foreach ($latest_posts as $post_item) : ?>
            <?php mirrorcraft_render_post_card($post_item->ID); ?>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <div class="card-grid card-grid-three">
          <?php foreach ($resource_links as $resource) : ?>
            <article class="entry-card">
              <h3><?php echo esc_html($resource['title']); ?></h3>
              <p><?php echo esc_html($resource['text']); ?></p>
              <a class="text-link" href="<?php echo esc_url($resource['url']); ?>"><?php esc_html_e('Open resource', 'mirrorcraft'); ?></a>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="oj-inline-links">
        <a href="<?php echo esc_url($resources_url); ?>"><?php esc_html_e('Visit the resource center', 'mirrorcraft'); ?></a>
        <a href="<?php echo esc_url($faq_url); ?>"><?php esc_html_e('Read buyer FAQ', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>

  <section class="oj-cta oj-section" id="contact">
    <div class="shell oj-wrap oj-grid oj-grid--split">
      <div>
        <p class="oj-section-label"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Tell us what you want to source and we will help narrow the right mirror route.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="oj-cta__content">
        <p><?php esc_html_e('Use the inquiry page to share category, application, quantity, destination market, and custom requirements so the next quotation step starts with a workable brief.', 'mirrorcraft'); ?></p>
        <div class="oj-actions">
          <a class="oj-button oj-button--primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></a>
          <a class="oj-button oj-button--ghost" href="<?php echo esc_url($products_url); ?>"><?php esc_html_e('Browse Products', 'mirrorcraft'); ?></a>
        </div>
        <p class="oj-contact-line">
          <a href="mailto:<?php echo antispambot(esc_attr(mirrorcraft_get_contact_email())); ?>"><?php echo esc_html(mirrorcraft_get_contact_email()); ?></a>
          <?php if (mirrorcraft_get_contact_phone() !== '') : ?>
            <span> · </span>
            <a href="tel:<?php echo esc_attr(mirrorcraft_get_contact_phone_href()); ?>"><?php echo esc_html(mirrorcraft_get_contact_phone()); ?></a>
          <?php endif; ?>
          <span> · </span>
          <a href="<?php echo esc_url($resources_url); ?>"><?php esc_html_e('Resources', 'mirrorcraft'); ?></a>
        </p>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
