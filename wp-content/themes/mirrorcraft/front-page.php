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
$theme_image_base = trailingslashit(get_template_directory_uri()) . 'assets/images/';
$application_card_image_map = array(
  'hospitality'             => $theme_image_base . 'hospitality-led-mirror-project.png',
  'residential'             => $theme_image_base . 'residential-led-bathroom-mirror.png',
  'commercial'              => $theme_image_base . 'commercial-washroom-led-mirror.png',
  'healthcare'              => $theme_image_base . 'healthcare-hospital-mirror.png',
  'beauty-wellness'         => $theme_image_base . 'beauty-salon-led-mirror.png',
  'real-estate-development' => $theme_image_base . 'real-estate-bathroom-mirror.png',
  'retail-chain-stores'     => $theme_image_base . 'retail-store-fitting-mirror.png',
  'fitness-sports'          => $theme_image_base . 'gym-fitness-mirror.png',
  'transportation'          => $theme_image_base . 'airport-public-mirror.png',
  'cruise-marine'           => $theme_image_base . 'cruise-ship-bathroom-mirror.png',
  'senior-living'           => $theme_image_base . 'senior-living-bathroom-mirror.png',
  'education'               => $theme_image_base . 'school-washroom-mirror.png',
);
$application_card_copy_map = array(
  'hospitality'             => __('Ideal for hotel projects, combining premium design, durability, and large-scale customization.', 'mirrorcraft'),
  'residential'             => __('Perfect for apartments and housing projects, balancing aesthetics, functionality, and cost efficiency.', 'mirrorcraft'),
  'commercial'              => __('Designed for high-traffic environments with a focus on durability, anti-fog performance, and low maintenance.', 'mirrorcraft'),
  'beauty-wellness'         => __('High CRI lighting ensures accurate color rendering, ideal for makeup studios and salons.', 'mirrorcraft'),
  'real-estate-development' => __('A standard solution for large-scale residential developments with consistent quality and bulk supply.', 'mirrorcraft'),
  'retail-chain-stores'     => __('Enhances customer experience in fitting rooms and branded retail spaces.', 'mirrorcraft'),
  'healthcare'              => __('Meets hygiene and safety standards with anti-fog, easy-to-clean, and corrosion-resistant features.', 'mirrorcraft'),
  'senior-living'           => __('Designed for safety and accessibility, including anti-glare and shatterproof options.', 'mirrorcraft'),
  'fitness-sports'          => __('Large-format mirrors with clear reflection, ideal for gyms and training environments.', 'mirrorcraft'),
  'education'               => __('Built for durability and safety in school and campus facilities.', 'mirrorcraft'),
  'transportation'          => __('Suitable for high-traffic transport hubs, focusing on reliability and easy maintenance.', 'mirrorcraft'),
  'cruise-marine'           => __('Premium solutions for marine environments with moisture and corrosion resistance.', 'mirrorcraft'),
);
$application_cards_display = array();

foreach ($application_cards as $application_card) {
  $slug = $application_card['slug'] ?? '';
  $image = '';

  if ($slug !== '' && !empty($application_card_image_map[$slug])) {
    $image = $application_card_image_map[$slug];
  }

  if (empty($image) && !empty($application_card['image'])) {
    $image = $application_card['image'];
  }

  if (empty($image)) {
    $image = mirrorcraft_get_product_category_image_url('bathroom-mirror');
  }

  if (empty($image)) {
    $image = $hero_image;
  }

  if ($slug !== '' && !empty($application_card_copy_map[$slug])) {
    $application_card['text'] = $application_card_copy_map[$slug];
  }

  $application_card['image'] = $image;
  $application_cards_display[] = $application_card;
}

if (count($application_cards_display) < 12) {
  $application_cards_display[] = array(
    'tag'         => __('All Applications', 'mirrorcraft'),
    'title'       => __('Browse All Application Pages', 'mirrorcraft'),
    'text'        => __('See the full application library for hospitality, residential, commercial, wellness, healthcare, and project-led sourcing routes.', 'mirrorcraft'),
    'image'       => $hero_image,
    'link'        => $applications_url,
    'is_overview' => true,
  );
}

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

  <section class="oj-section" id="products">
    <div class="shell oj-wrap">
      <div class="oj-section-heading oj-section-heading--products">
        <p class="oj-section-label"><?php esc_html_e('Featured Product Categories', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Product Categories', 'mirrorcraft'); ?></h2>
        <p class="oj-section-copy"><?php esc_html_e('Browse our LED bathroom mirrors, mirror cabinets, makeup mirrors, full-length mirrors, and custom mirrors. Designed for hotels, residential, commercial, and healthcare projects.', 'mirrorcraft'); ?></p>
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
      <div class="oj-section-heading oj-section-heading--applications">
        <h2><?php esc_html_e('LED Mirror Solutions for Every Industry', 'mirrorcraft'); ?></h2>
        <p class="oj-section-copy"><?php esc_html_e('From hotels to large-scale developments, we deliver custom LED mirror solutions engineered for durability, performance, and design.', 'mirrorcraft'); ?></p>
      </div>
      <div class="oj-application-cards">
        <?php foreach ($application_cards_display as $application) : ?>
          <article class="oj-application-card<?php echo !empty($application['is_overview']) ? ' oj-application-card--overview' : ''; ?>">
            <div class="oj-application-card-media">
              <img src="<?php echo esc_url($application['image']); ?>" alt="<?php echo esc_attr($application['tag']); ?>" width="1400" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="oj-application-card-body">
              <h3><?php echo esc_html($application['tag']); ?></h3>
              <p><?php echo esc_html($application['text']); ?></p>
              <a class="oj-button oj-button--primary" href="<?php echo esc_url($application['link']); ?>"><?php esc_html_e('View market', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
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
